<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {
    public function getTableHistory(){
        return $this->db->from('sales_history')
        ->join('employees', 'sales_history.employee_id = employees.id')
        ->join('skill_evaluation_history', 'skill_evaluation_history.employee_id = employees.id AND skill_evaluation_history.yearmonth = sales_history.yearmonth')
        ->join('skill_levels as history_skill_levels', 'skill_evaluation_history.skill_level_id = history_skill_levels.id')
        ->join('skill_levels','employees.skill_level_id=skill_levels.id')
        ->join("areas","employees.area_id=areas.id")
        ->join("job_profiles","employees.job_profile_id=job_profiles.id")
        ->join("nine_box_grid_categories","employees.nine_box_grid_category_id=nine_box_grid_categories.id")
        ->join("age_groups","employees.age_group_id=age_groups.id");
    }
    public function getTable(){
        return $this->db->from('sales_history')
        ->join('employees', 'sales_history.employee_id = employees.id')
        ->join('skill_levels','employees.skill_level_id=skill_levels.id')
        ->join("areas","employees.area_id=areas.id")
        ->join("job_profiles","employees.job_profile_id=job_profiles.id")
        ->join("nine_box_grid_categories","employees.nine_box_grid_category_id=nine_box_grid_categories.id")
        ->join("age_groups","employees.age_group_id=age_groups.id");
    }
    public function applyFilters($db, $filters) {
        if (isset($filters['area_id'])) {
            $db->where('sales_history.area_id', $filters['area_id']);
        }

        if (isset($filters['job_profile_id'])) {
            $db->where('employees.job_profile_id', $filters['job_profile_id']);
        }

        if (isset($filters['skill_level_id'])) {
            $db->where('employees.skill_level_id', $filters['skill_level_id']);    
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
    public function getSearchStr($filters){
        $searchstr=[];
        if(isset($filters['area_id']) && !empty($filters['area_id'])){
            $searchstr['area']=$this->db->where('id',$filters['area_id'])->get('areas')->row()->name;
        }
        if(isset($filters['job_profile_id']) && !empty($filters['job_profile_id'])){
            $searchstr['jobProfile']=$this->db->where('id',$filters['job_profile_id'])->get('job_profiles')->row()->name;
        }
        if(isset($filters['skill_level_id']) && !empty($filters['skill_level_id'])){
            $searchstr['skillLevel']=$this->db->where('id',$filters['skill_level_id'])->get('skill_levels')->row()->name;
        }
        if(isset($filters['age_group_id']) && !empty($filters['age_group_id'])){
            $searchstr['ageGroup']='Umur '.$this->db->where('id',$filters['age_group_id'])->get('age_groups')->row()->age_range;
        }
        if(isset($filters['start_yearmonth']) && !empty($filters['start_yearmonth'])){
            $searchstr['startYearmonth']="Dari ".(new DateTime($filters['start_yearmonth']))->format("M y");
        }
        if(isset($filters['end_yearmonth']) && !empty($filters['end_yearmonth'])){
            $searchstr['endYearmonth']="Sampai ".(new DateTime($filters['end_yearmonth']))->format("M y");
        }
        if(!empty($searchstr))
            return $searchstr;
        else return ['ALL'];
    }
    public function getEmployeeCount($filters=[]){
        $query=$this->getTableHistory();
        $query=$query->select("count(distinct employees.id) employee_count");
        $query=$this->applyFilters($query,$filters);
        $query=$query->get()->row();
        return $query->employee_count;
    }
    public function searchEmployees($filters=[]){
        $query=$this->getTableHistory();
        $query=$query->select("employees.id,employees.name,employees.age,areas.name area,job_profiles.name jobProfile,skill_levels.name skillLevel,age_groups.age_range ageGroup,nine_box_grid_categories.name category,avg(sales_history.total_sales) avgSales,sum(sales_history.total_sales) totalSales,sum(sales_history.total_sales)/sum(sales_history.target_sales)*100 performancePercentage")->group_by("employees.id");
        $query=$this->applyFilters($query,$filters);
        $query=$query->get()->result();
        return $query;
    }

    public function getNineBoxGridData($filters = []) {
        // Subquery to count employees per category
        $this->db->select('nine_box_grid_categories.id, nine_box_grid_categories.name, nine_box_grid_categories.description, COUNT(employees.id) as employee_count')
                 ->from('nine_box_grid_categories')
                 ->join('employees', 'employees.nine_box_grid_category_id = nine_box_grid_categories.id', 'left');

        // Apply filters to employees if any
        if (!empty($filters)) {
            $this->applyFilters($this->db, $filters);
        }

        $this->db->group_by('nine_box_grid_categories.id');
        $this->db->order_by('nine_box_grid_categories.orderno', 'ASC');

        $query = $this->db->get();
        return $query->result_array();
    }
    public function getJobProfilesOverview($filters = []) {
        $query = $this->db->select('
            job_profiles.id,
            job_profiles.name,
            COUNT(DISTINCT employees.id) as employee_count,
            SUM(sales_history.total_sales) / NULLIF(SUM(sales_history.target_sales), 0) * 100 as avg_kpi
        ')
        ->from('sales_history')
        ->join('employees', 'sales_history.employee_id = employees.id')
        ->join('job_profiles', 'sales_history.job_profile_id = job_profiles.id')
        ->group_by('job_profiles.id');

        $query = $this->applyFilters($query, $filters);

        return $query->get()->result_array();
    }
    public function getAreaOverview($filters = []) {
        $query = $this->db->select('
            areas.id,
            areas.name,
            COUNT(DISTINCT employees.id) as employee_count,
            SUM(sales_history.total_sales) / NULLIF(SUM(sales_history.target_sales), 0) * 100 as avg_kpi
        ')
        ->from('sales_history')
        ->join('employees', 'sales_history.employee_id = employees.id')
        ->join('areas', 'sales_history.area_id = areas.id')
        ->group_by('areas.id');

        $query = $this->applyFilters($query, $filters);

        return $query->get()->result_array();
    }
    public function getAgeGroupOverview($filters = []) {
        $query = $this->db->select('
            age_groups.id,
            age_groups.age_range,
            COUNT(DISTINCT employees.id) as employee_count,
            SUM(sales_history.total_sales) / NULLIF(SUM(sales_history.target_sales), 0) * 100 as avg_kpi
        ')
        ->from('sales_history')
        ->join('employees', 'sales_history.employee_id = employees.id')
        ->join('age_groups', 'employees.age_group_id = age_groups.id')
        ->group_by('age_groups.id');

        $query = $this->applyFilters($query, $filters);

        return $query->get()->result_array();
    }
    public function getSkillLevelOverview($filters = []) {
        $query = $this->db->select('
            skill_levels.id,
            skill_levels.name,
            COUNT(DISTINCT employees.id) as employee_count,
            SUM(sales_history.total_sales) / NULLIF(SUM(sales_history.target_sales), 0) * 100 as avg_kpi
        ')
        ->from('sales_history')
        ->join('employees', 'sales_history.employee_id = employees.id', 'inner')
        // ->join('skill_evaluation_history', 'skill_evaluation_history.employee_id = employees.id AND skill_evaluation_history.yearmonth = sales_history.yearmonth')
        ->join('skill_levels', 'employees.skill_level_id = skill_levels.id')
        ->group_by('skill_levels.id');

        $query = $this->applyFilters($query, $filters);

        return $query->get()->result_array();
    }



    public function getSalesPerformanceByJobProfileAndArea($filters = []) {
        // Query to get sales data grouped by job profile and area
        $this->db->select('job_profiles.name AS job_profile, areas.name AS area, SUM(sales_history.total_sales) AS total_sales, SUM(sales_history.target_sales) AS target_sales')
                 ->from('sales_history')
                 ->join('employees','sales_history.employee_id=employees.id')
                 ->join('job_profiles', 'sales_history.job_profile_id = job_profiles.id', 'left')
                 ->join('areas', 'sales_history.area_id = areas.id', 'left')
                 ->group_by(['job_profiles.name', 'areas.name'])
                 ->order_by('job_profiles.name, areas.name', 'ASC');

        // Apply filters if provided
        if (!empty($filters)) {
            $this->applyFilters($this->db, $filters);
        }

        return $this->db->get()->result_array();
    }
    public function getSalesPerformanceBySkillLevelAndJobProfile($filters = []) {
        // Query to group sales and target by skill level and job profile
        $this->db->select(
            'skill_levels.name AS skill_level, 
             job_profiles.name AS job_profile, 
             SUM(sales_history.total_sales) AS total_sales, 
             SUM(sales_history.target_sales) AS target_sales'
        )
        ->from('sales_history')
        ->join('employees', 'employees.id = sales_history.employee_id')
        ->join('skill_evaluation_history', 
            'skill_evaluation_history.employee_id = sales_history.employee_id 
             AND skill_evaluation_history.yearmonth = sales_history.yearmonth', 
            'inner'
        )
        ->join('skill_levels', 'skill_levels.id = skill_evaluation_history.skill_level_id')
        ->join('job_profiles', 'job_profiles.id = employees.job_profile_id')
        ->group_by(['skill_levels.name', 'job_profiles.name'])
        ->order_by('skill_levels.name, job_profiles.name', 'ASC');

        // Apply filters if provided
        if (!empty($filters)) {
            $this->applyFilters($this->db, $filters);
        }

        return $this->db->get()->result_array();
    }
    public function getYearMonthRange() {
        // Query to get the minimum and maximum yearmonth
        $this->db->select_min('yearmonth', 'min_yearmonth');
        $this->db->select_max('yearmonth', 'max_yearmonth');
        $result = $this->db->get('sales_history')->row_array();

        // Check if data is found
        if (empty($result['min_yearmonth']) || empty($result['max_yearmonth'])) {
            return []; // Return an empty array if no data
        }

        $minYearMonth = $result['min_yearmonth'];
        $maxYearMonth = $result['max_yearmonth'];

        // Generate array of key-value pairs
        $current = DateTime::createFromFormat('Y-m', $minYearMonth);
        $end = DateTime::createFromFormat('Y-m', $maxYearMonth);
        $dateRange = [];

        while ($current <= $end) {
            $key = $current->format('Y-m');
            $value = $current->format('M y'); // Format as 'Jan 23', 'Feb 23', etc.
            $dateRange[$key] = $value;

            // Move to the next month
            $current->modify('+1 month');
        }

        return $dateRange;
    }
    public function getEmployeeDetail($id){
        $employee=$this->getTable()->select("employees.id,employees.name,employees.age,areas.name area,job_profiles.name jobProfile,skill_levels.name skillLevel,age_groups.age_range ageGroup,nine_box_grid_categories.name category,avg(sales_history.total_sales) avgSales,sum(sales_history.total_sales) totalSales,sum(sales_history.total_sales)/sum(sales_history.target_sales)*100 performancePercentage")->where("employees.id",$id)->get()->row();
        // Fetch sales history
        $employee->sales_history = $this->db->select('sh.*, a.name AS area, jp.name AS job_profile')
            ->from('sales_history sh')
            ->join('areas a', 'sh.area_id = a.id', 'left')
            ->join('job_profiles jp', 'sh.job_profile_id = jp.id', 'left')
            ->where('sh.employee_id', $id)
            ->order_by('sh.yearmonth')
            ->get()
            ->result();

        // Fetch skill evaluation history
        $employee->skill_evaluation_history = $this->db->select('seh.*, a.name AS area, jp.name AS job_profile, sl.name AS skill_level')
            ->from('skill_evaluation_history seh')
            ->join('areas a', 'seh.area_id = a.id', 'left')
            ->join('job_profiles jp', 'seh.job_profile_id = jp.id', 'left')
            ->join('skill_levels sl', 'seh.skill_level_id = sl.id', 'left')
            ->where('seh.employee_id', $id)
            ->order_by('seh.yearmonth')
            ->get()
            ->result();

        // Best performance year-month
        $employee->best_performance = $this->db->select('yearmonth, SUM(total_sales) / NULLIF(SUM(target_sales), 0) * 100 AS performance_percentage')
            ->from('sales_history')
            ->where('employee_id', $id)
            ->group_by('yearmonth')
            ->order_by('performance_percentage', 'DESC')
            ->limit(1)
            ->get()
            ->row();

        // Most suitable area
        $employee->most_suitable_area = $this->db->select('a.name AS area, AVG(sh.total_sales) / NULLIF(AVG(sh.target_sales), 0) * 100 AS avg_performance')
            ->from('sales_history sh')
            ->join('areas a', 'sh.area_id = a.id', 'left')
            ->where('sh.employee_id', $id)
            ->group_by('a.id')
            ->order_by('avg_performance', 'DESC')
            ->limit(1)
            ->get()
            ->row();

        // Radar chart data (latest skill evaluation details)
        $latestEvaluation = $this->db->select('id')
            ->from('skill_evaluation_history')
            ->where('employee_id', $id)
            ->order_by('yearmonth', 'DESC')
            ->limit(1)
            ->get()
            ->row();

        if ($latestEvaluation) {
            $employee->radar_chart_data = $this->db->select('jps.skill_name, sed.score')
                ->from('skill_evaluation_details sed')
                ->join('job_profile_skills jps', 'sed.job_profile_skill_id = jps.id', 'left')
                ->where('sed.skill_evaluation_history_id', $latestEvaluation->id)
                ->get()
                ->result();
        } else {
            $employee->radar_chart_data = [];
        }

        return $employee;


    }

}
