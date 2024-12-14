<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_visualization_model extends CI_Model {

    public function applyFilters($db, $filters) {
        if (isset($filters['area_id'])) {
            $db->where('sales_history.area_id', $filters['area_id']);
        }

        if (isset($filters['job_profile_id'])) {
            $db->where('employees.job_profile_id', $filters['job_profile_id']);
        }

        if (isset($filters['skill_level_id'])) {
            $db->where('skill_evaluation_history.skill_level_id', $filters['skill_level_id']);    
        }

        if (isset($filters['nine_box_grid_category_id'])) {
            $db->where('employees.nine_box_grid_category_id', $filters['nine_box_grid_category_id']);
        }

        if (isset($filters['age_group_id'])) {
            $db->where('employees.age_group_id', $filters['age_group_id']);
        }

        if (isset($filters['start_yearmonth']) && isset($filters['end_yearmonth'])) {
            $db->group_start(); // Open a grouping for OR condition
            $db->where('sales_history.yearmonth >=', $filters['start_yearmonth']);
            $db->where('sales_history.yearmonth <=', $filters['end_yearmonth']);
            $db->group_end(); // Close the grouping
        } elseif (isset($filters['start_yearmonth'])) {
            $db->where('sales_history.yearmonth >=', $filters['start_yearmonth']);
        } elseif (isset($filters['end_yearmonth'])) {
            $db->where('sales_history.yearmonth <=', $filters['end_yearmonth']);
        }
        return $db;
    }

    public function getDynamicSalesData($grouping, $filters = []) {
        if (empty($grouping)) {
            throw new Exception("At least one grouping parameter must be provided.");
        }

        // Build the SELECT and GROUP BY clauses using the grouping parameter
        $selectClauses = [];
        $groupByClauses = [];
        foreach ($grouping as $column => $alias) {
            $selectClauses[] = "{$column} AS {$alias}";
            $groupByClauses[] = $alias;
        }

        $this->db->select(implode(", ", array_merge(
            $selectClauses,
            [
                'SUM(sales_history.total_sales) AS total_sales',
                'SUM(sales_history.target_sales) AS target_sales'
            ]
        )))
        ->from('sales_history')
        ->join('employees', 'employees.id = sales_history.employee_id', 'inner')
        ->join('skill_evaluation_history', 
            'skill_evaluation_history.employee_id = sales_history.employee_id 
             AND skill_evaluation_history.yearmonth = sales_history.yearmonth', 
            'left'
        )
        ->join('areas', 'areas.id = sales_history.area_id', 'left')
        ->join('skill_levels', 'skill_levels.id = skill_evaluation_history.skill_level_id', 'left')
        ->join('job_profiles', 'job_profiles.id = employees.job_profile_id', 'left')
        ->join('age_groups', 'age_groups.id = employees.age_group_id', 'left')
        ->join('nine_box_grid_categories', 'nine_box_grid_categories.id = employees.nine_box_grid_category_id', 'left')
        ->group_by($groupByClauses);

        // Apply filters if provided
        if (!empty($filters)) {
            $this->applyFilters($this->db, $filters);
        }

        // Execute the query and return results
        return $this->db->get()->result_array();
    }

    public function prepareChartData($data, $grouping) {
        if (empty($data) || empty($grouping)) {
            throw new Exception("Data and grouping parameters are required.");
        }

        // Use aliases from grouping
        $aliases = array_values($grouping);

        // X-axis labels (first n-1 levels of grouping)
        $labelAliases = array_slice($aliases, 0, -1); // Use only the first n-1 levels
        $labels = [];
        foreach ($data as $row) {
            $label = [];
            foreach ($labelAliases as $alias) {
                $label[] = $row[$alias];
            }
            $labels[] = implode(' - ', $label);
        }
        $labels = array_values(array_unique($labels)); // Ensure labels are unique

        // Prepare datasets
        $barDatasets = [];
        $lineDatasets = [];
        $innermostAlias = end($aliases); // Use the innermost grouping for bars

        // Aggregate data for bar charts and line charts
        $barData = [];
        $lineData = [];
        $innermostGroups = [];
        foreach ($data as $row) {
            // Create label for the first n-1 levels
            $labelKey = implode(' - ', array_map(fn($alias) => $row[$alias], $labelAliases));

            // Track innermost groups (e.g., age_group)
            if (!in_array($row[$innermostAlias], $innermostGroups)) {
                $innermostGroups[] = $row[$innermostAlias];
            }

            // Bar data (Sales)
            if (!isset($barData[$row[$innermostAlias]])) {
                $barData[$row[$innermostAlias]] = array_fill(0, count($labels), 0);
            }
            $labelIndex = array_search($labelKey, $labels);
            $barData[$row[$innermostAlias]][$labelIndex] += $row['total_sales'];

            // Line data (Targets)
            if (!isset($lineData[$row[$innermostAlias]])) {
                $lineData[$row[$innermostAlias]] = array_fill(0, count($labels), 0);
            }
            $lineData[$row[$innermostAlias]][$labelIndex] += $row['target_sales'];
        }

        // Build datasets for Chart.js (Bars)
        foreach ($barData as $innermostGroup => $values) {
            $barDatasets[] = [
                'label' => "{$innermostGroup} - Sales",
                'data' => $values,
                'backgroundColor' => $this->getBarColor($innermostGroup), // Assign unique color
                'type' => 'bar',
            ];
        }

        // Build datasets for Chart.js (Lines)
        foreach ($lineData as $innermostGroup => $values) {
            $lineDatasets[] = [
                'label' => "{$innermostGroup} - Target",
                'data' => $values,
                'borderColor' => '#333333',
                'backgroundColor' => 'rgba(0,0,0,0)',
                'type' => 'line',
            ];
        }

        return [
            'labels' => $labels,
            'datasets' => array_merge($barDatasets, $lineDatasets),
        ];
    }

    /**
     * Helper function to generate bar colors dynamically
     */
    private function getBarColor($group) {
        $colors = [
            '#00a65a', '#f39c12', '#dd4b39', '#3c8dbc', '#605ca8',
            '#f012be', '#39cccc', '#d2d6de', '#001f3f', '#ff851b',
        ];
        $index = crc32($group) % count($colors);
        return $colors[$index];
    }






}
