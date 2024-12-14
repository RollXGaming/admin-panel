<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Generator_model extends CI_Model
{
    private $firstNames = [
        "John", "Michael", "Sarah", "Emily", "David", "Jessica", "Robert", "Sophia",
        "William", "Olivia", "James", "Isabella", "Charles", "Emma", "Daniel", "Mia",
        "Thomas", "Amelia", "Christopher", "Hannah", "Ethan", "Chloe", "Andrew", "Grace",
        "Matthew", "Lily", "Ryan", "Ella", "Benjamin", "Ava", "Jacob", "Madison",
        "Anthony", "Abigail", "Joseph", "Natalie", "Samuel", "Elizabeth", "Noah", "Samantha"
    ];

    private $lastNames = [
        "Smith", "Johnson", "Williams", "Jones", "Brown", "Davis", "Miller", "Wilson",
        "Moore", "Taylor", "Anderson", "Thomas", "Jackson", "White", "Harris", "Martin",
        "Thompson", "Garcia", "Martinez", "Robinson", "Clark", "Lewis", "Lee", "Walker",
        "Hall", "Allen", "Young", "King", "Scott", "Green", "Adams", "Baker",
        "Gonzalez", "Nelson", "Carter", "Mitchell", "Perez", "Roberts", "Turner", "Phillips"
    ];

    private $firstNameIndex = 0;
    private $lastNameIndex = 0;
    private function generateName()
    {
        $firstName = $this->firstNames[$this->firstNameIndex];
        $lastName = $this->lastNames[$this->lastNameIndex];

        // Increment counters
        $this->firstNameIndex++;
        if ($this->firstNameIndex >= count($this->firstNames)) {
            $this->firstNameIndex = 0;
            $this->lastNameIndex++;
            if ($this->lastNameIndex >= count($this->lastNames)) {
                $this->lastNameIndex = 0; // Reset if all combinations are exhausted
            }
        }

        return "$firstName $lastName";
    }
    public function generateEmployees($numEmployees)
    {
        // Fetch master data
        $areas = $this->db->get('areas')->result_array();
        $jobProfiles = $this->db->get('job_profiles')->result_array();
        $skillLevels = $this->db->get('skill_levels')->result_array();
        $ageGroups = $this->db->get('age_groups')->result_array();

        $salesHistory = [];
        $skillEvaluationHistory = [];
        $currentYearMonth = date('Y-m');

        for ($i = 0; $i < $numEmployees; $i++) {
            // Generate employee attributes
            $area = $areas[array_rand($areas)];
            $jobProfile = $this->assignJobProfile($area, $jobProfiles);
            // pre($jobProfile);
            $age = $this->generateAge();
            $enrollDate = $this->generateEnrollDate();
            $skillLevel = $skillLevels[array_rand($skillLevels)];
            $ageGroup = $this->determineAgeGroup($age, $ageGroups);

            // Insert employee into database
            $employeeData = [
                'name' => $this->generateName(),
                'age' => $age,
                'area_id' => $area['id'],
                'job_profile_id' => $jobProfile['id'],
                'skill_level_id' => $skillLevel['id'],
                'age_group_id' => $ageGroup['id'],
                'enroll_date' => $enrollDate,
            ];
            $this->db->insert('employees', $employeeData);
            $employeeId = $this->db->insert_id();

            // Generate sales history for the current employee
            $startYearMonth = date('Y-m', strtotime($enrollDate));
            $currentEmployeeSalesHistory = $this->generateSalesHistory($employeeId, $area, $jobProfile, $startYearMonth, $currentYearMonth);
            $salesHistory = array_merge($salesHistory, $currentEmployeeSalesHistory);
            $employeeData['salesHistory']=$currentEmployeeSalesHistory;
            // Generate skill evaluation history for the current employee
            $skillEvaluationHistory = array_merge(
                $skillEvaluationHistory,
                $this->generateSkillEvaluationHistory(
                    $employeeId,
                    $area,
                    $jobProfile,
                    $skillLevel['name'],
                    $startYearMonth,
                    $currentYearMonth,
                    $employeeData,
                    $skillLevels
                )
            );

            // Calculate performance and KPI for the current employee
            $last12MonthsData = $this->filterLast12Months($currentEmployeeSalesHistory, $currentYearMonth);
            $kpiAchievement = $this->calculateKpiAchievement($last12MonthsData);

            // Calculate 9-box grid category for the current employee
            $nineBoxCategoryId = $this->determineNineBoxCategory($last12MonthsData, $skillEvaluationHistory, $age);

            // Update employee record with KPI and 9-box grid category
            $this->db->update('employees', [
                'kpi_achievement' => $kpiAchievement,
                'nine_box_grid_category_id' => $nineBoxCategoryId,
            ], ['id' => $employeeId]);
        }

        // Insert sales and skill evaluation histories into the database
        $this->db->insert_batch('sales_history', $salesHistory);
        $this->db->insert_batch('skill_evaluation_history', $skillEvaluationHistory);
    }

    private function assignJobProfile($area, $jobProfiles)
    {
        // pre($jobProfiles);
        $isBM = $this->db->where('area_id', $area['id'])->where('job_profile_id', $this->getJobProfileId('BM', $jobProfiles))->count_all_results('employees') < 15;
        $jobProfileKey = $isBM ? 'BM' : (rand(0, 100) < 70 ? 'AO' : 'RM');
        // pre($jobProfileKey);
        return $this->getJobProfile($jobProfileKey, $jobProfiles);
    }

    private function generateAge()
    {
        $rand = rand(1, 100);
        if ($rand <= 75) {
            // 75% chance for age between 21-45
            return rand(21, 45);
        } elseif ($rand <= 87) {
            // 12% chance for age between 46-55
            return rand(46, 55);
        } elseif ($rand <= 95) {
            // 8% chance for age between 56-60
            return rand(56, 60);
        } else {
            // 5% chance for age above 60
            return rand(61, 70);
        }
    }


    private function generateEnrollDate()
    {
        $rand = rand(1, 100);
        $years = $rand <= 50 ? rand(1, 3) : ($rand <= 80 ? rand(4, 5) : ($rand <= 95 ? rand(6, 7) : rand(8, 15)));
        return date('Y-m-d', strtotime("-$years years"));
    }

    private function generateSalesHistory($employeeId, $area, $jobProfile, $startYearMonth, $endYearMonth)
    {
        $salesHistory = [];
        $currentYearMonth = $startYearMonth;

        while ($currentYearMonth <= $endYearMonth) {
            $sales = $this->calculateSales($jobProfile, $currentYearMonth, $area);
            $target = $this->calculateTarget($jobProfile, $currentYearMonth, $area);

            $salesHistory[] = [
                'employee_id' => $employeeId,
                'yearmonth' => $currentYearMonth,
                'total_sales' => $sales,
                'target_sales' => $target,
                'area_id' => $area['id'],
                'job_profile_id' => $jobProfile['id'],
            ];

            $currentYearMonth = date('Y-m', strtotime("+1 month", strtotime($currentYearMonth)));
        }

        return $salesHistory;
    }
    private function calculateTarget($jobProfile, $yearMonth, $area)
    {
        // Base target values by job profile
        $baseTarget = [
            'AO' => rand(150000, 300000), // Account Officer
            'RM' => rand(250000, 400000), // Relationship Manager
            'BM' => rand(400000, 700000)  // Branch Manager
        ];

        // Time of the year impact (seasonality)
        $month = (int) date('m', strtotime($yearMonth));
        $seasonalMultiplier = 1; // Default multiplier

        if (in_array($month, [12, 1, 2])) {
            $seasonalMultiplier = 1.2; // Higher targets at year-end/start
        } elseif (in_array($month, [6, 7, 8])) {
            $seasonalMultiplier = 0.8; // Lower targets mid-year
        }

        // Area-specific multiplier (market size)
        $areaMultiplier = [
            'Papua' => 0.7,
            'Kalimantan' => 0.8,
            'Sumatra' => 0.9,
            'Sulawesi' => 1.0,
            'Jawa' => 1.2
        ];

        // Growth expectation: gradual increase for longer tenures
        $currentYearMonth = date('Y-m');
        $tenureMonths = (strtotime($currentYearMonth) - strtotime($yearMonth)) / (30 * 24 * 60 * 60);
        $growthMultiplier = 1 + ($tenureMonths / 120); // Linear growth up to 10 years (120 months)

        // Calculate target
        $target = $baseTarget[$jobProfile['name']] * $seasonalMultiplier * $areaMultiplier[$area['name']] * $growthMultiplier;

        // Random variation to make the target more realistic
        $randomVariation = rand(95, 105) / 100;

        return round($target * $randomVariation);
    }


    private function calculateSales($jobProfile, $yearMonth, $area)
    {
        // Base sales values by job profile
        $baseSales = [
            'AO' => rand(100000, 300000), // Account Officer
            'RM' => rand(200000, 400000), // Relationship Manager
            'BM' => rand(300000, 600000)  // Branch Manager
        ];

        // Time of the year impact (seasonality)
        $month = (int) date('m', strtotime($yearMonth));
        $seasonalMultiplier = 1; // Default multiplier

        if (in_array($month, [12, 1, 2])) {
            $seasonalMultiplier = 1.2; // End/start of year tends to perform better
        } elseif (in_array($month, [6, 7, 8])) {
            $seasonalMultiplier = 0.8; // Mid-year slump
        }

        // Area-specific multiplier (based on location differences)
        $areaMultiplier = [
            'Papua' => 0.6,    // Smaller market
            'Kalimantan' => 0.8,
            'Sumatra' => 1.0,
            'Sulawesi' => 1.1, // Emerging market
            'Jawa' => 1.3      // Largest market
        ];

        // Tenure-based multiplier (performance improves with tenure)
        $currentYearMonth = date('Y-m');
        $tenureMonths = (strtotime($currentYearMonth) - strtotime($yearMonth)) / (30 * 24 * 60 * 60);
        if ($tenureMonths <= 12) {
            $tenureMultiplier = 0.8; // Newer employees take time to ramp up
        } elseif ($tenureMonths <= 36) {
            $tenureMultiplier = 1.1; // Growth phase
        } else {
            $tenureMultiplier = 1.2; // Experienced employees perform steadily
        }

        // Calculate sales
        $sales = $baseSales[$jobProfile['name']] * $seasonalMultiplier * $areaMultiplier[$area['name']] * $tenureMultiplier;

        // Introduce a random variation factor to make it less predictable
        $randomVariation = rand(90, 110) / 100;

        return round($sales * $randomVariation);
    }

    private function generateSkillEvaluationHistory($employeeId, $area, $jobProfile, $currentSkillLevel, $startYearMonth, $endYearMonth, $employeeData,$skillLevels)
    {
        $skillHistory = [];
        $currentYearMonth = $startYearMonth;

        while ($currentYearMonth <= $endYearMonth) {
            // Adjust skill level based on the logic in adjustSkillLevel
            $currentSkillLevel = $this->adjustSkillLevel($currentSkillLevel, $employeeData, $currentYearMonth);

            // Find the skill level ID for the current skill level
            $skillLevelId = $this->getSkillLevelId($currentSkillLevel,$skillLevels);

            $skillHistory[] = [
                'employee_id' => $employeeId,
                'yearmonth' => $currentYearMonth,
                'area_id' => $area['id'],
                'job_profile_id' => $jobProfile['id'],
                'skill_level_id' => $skillLevelId,
            ];

            // Move to the next month
            $currentYearMonth = date('Y-m', strtotime("+1 month", strtotime($currentYearMonth)));
        }

        return $skillHistory;
    }

    // Helper function to get skill level ID
    private function getSkillLevelId($skillLevelName, $skillLevels)
    {
        foreach ($skillLevels as $skillLevel) {
            if ($skillLevel['name'] === $skillLevelName) {
                return $skillLevel['id'];
            }
        }
        return null;
    }

    private function adjustSkillLevel($currentSkillLevel, $employee, $yearMonth)
    {
        // Define skill level hierarchy
        // pre($employee);
        $skillLevels = [
            "Beginner",
            "Intermediate",
            "Advanced",
            "Expert",
            "Professional"
        ];
        $ageGroups=[
            1=>"18-25",
            2=>"26-35",
            3=>"36-45",
            4=>"46-55",
            5=>"56+"
        ];
        $jobProfiles=[
            1=>'AO',
            2=>'RM',
            3=>'BM'
        ];
        // Determine current skill level index
        $currentSkillIndex = array_search($currentSkillLevel, $skillLevels);

        // Factors affecting skill progression
        $ageGroupProgressionFactor = [
            "18-25" => 1.5, // Younger employees improve faster
            "26-35" => 1.2, // Moderate improvement
            "36-45" => 1.0, // Slower improvement
            "46-55" => 0.8, // Limited improvement
            "56+" => 0.5    // Minimal improvement
        ];

        $jobProfileProgressionFactor = [
            "AO" => 1.2, // Faster progression at entry level
            "RM" => 1.0, // Balanced progression
            "BM" => 0.8  // Slower progression due to complexity
        ];

        $performanceFactor = $this->calculatePerformanceFactor($employee, $yearMonth);

        // Random variation for realism
        $randomVariation = rand(95, 105) / 100;

        // Combine factors
        $progressionScore = $ageGroupProgressionFactor[$ageGroups[$employee['age_group_id']]] *
                            $jobProfileProgressionFactor[$jobProfiles[$employee['job_profile_id']]] *
                            $performanceFactor *
                            $randomVariation;

        // Determine if progression should occur
        $progressionThreshold = 1.1; // Threshold for progression (tunable)
        if ($progressionScore >= $progressionThreshold && $currentSkillIndex < count($skillLevels) - 1) {
            $currentSkillIndex++; // Promote to next skill level
        }

        return $skillLevels[$currentSkillIndex];
    }

    private function calculatePerformanceFactor($employee, $yearMonth)
    {
        // pre($employee);
        // Calculate average sales performance over the last 12 months
        $salesHistory = $this->filterLast12Months($employee['salesHistory'], $yearMonth);
        $totalSales = array_sum(array_column($salesHistory, 'total_sales'));
        $totalTarget = array_sum(array_column($salesHistory, 'target_sales'));

        if ($totalTarget === 0) {
            return 1; // Neutral factor if no targets are available
        }

        $performanceRatio = $totalSales / $totalTarget;

        // Categorize performance
        if ($performanceRatio >= 1.0) {
            return 1.2; // Exceeds target
        } elseif ($performanceRatio >= 0.8) {
            return 1.0; // Meets target
        } else {
            return 0.8; // Underperforms
        }
    }

    private function filterLast12Months($salesHistory, $currentYearMonth)
    {
        // Filter sales history for the last 12 months
        $startDate = date('Y-m', strtotime("-12 months", strtotime($currentYearMonth)));

        return array_filter($salesHistory, function ($record) use ($startDate, $currentYearMonth) {
            return $record['yearmonth'] >= $startDate && $record['yearmonth'] <= $currentYearMonth;
        });
    }

    private function determineNineBoxCategory($last12MonthsData, $skillEvaluationHistory, $age)
    {
        // Define thresholds for performance
        $highPerformanceThreshold = 90; // 90% or more of target
        $mediumPerformanceThreshold = 70; // 70% to 90% of target

        // Calculate performance level
        $kpiAchievement = $this->calculateKpiAchievement($last12MonthsData);

        $performanceCategory = '';
        if ($kpiAchievement >= $highPerformanceThreshold) {
            $performanceCategory = 'High Performance';
        } elseif ($kpiAchievement >= $mediumPerformanceThreshold) {
            $performanceCategory = 'Medium Performance';
        } else {
            $performanceCategory = 'Low Performance';
        }

        // Analyze potential
        $potentialScore = $this->calculatePotential($skillEvaluationHistory, $age);

        $potentialCategory = '';
        if ($potentialScore >= 1.5) {
            $potentialCategory = 'High Potential';
        } elseif ($potentialScore >= 1.0) {
            $potentialCategory = 'Medium Potential';
        } else {
            $potentialCategory = 'Low Potential';
        }

        // Map to 9-box grid category
        $nineBoxGrid = [
            'High Performance, High Potential' => 1,
            'High Performance, Medium Potential' => 2,
            'High Performance, Low Potential' => 3,
            'Medium Performance, High Potential' => 4,
            'Medium Performance, Medium Potential' => 5,
            'Medium Performance, Low Potential' => 6,
            'Low Performance, High Potential' => 7,
            'Low Performance, Medium Potential' => 8,
            'Low Performance, Low Potential' => 9,
        ];

        $categoryKey = "$performanceCategory, $potentialCategory";
        return $nineBoxGrid[$categoryKey] ?? 9; // Default to Low Performance, Low Potential
    }

    private function calculatePotential($skillEvaluationHistory, $age)
    {
        // Define age groups and potential weight
        $ageWeight = [
            'young' => 1.2, // Age <= 35
            'mid' => 1.0, // Age 36-50
            'senior' => 0.8, // Age > 50
        ];

        // Determine age category
        $ageCategory = $age <= 35 ? 'young' : ($age <= 50 ? 'mid' : 'senior');

        // Skill improvement score
        $improvementCount = 0;
        for ($i = 1; $i < count($skillEvaluationHistory); $i++) {
            if ($skillEvaluationHistory[$i]['skill_level_id'] > $skillEvaluationHistory[$i - 1]['skill_level_id']) {
                $improvementCount++;
            }
        }

        // Trend factor: More recent improvements are weighted higher
        $recentImprovementWeight = min($improvementCount / max(1, count($skillEvaluationHistory) - 1), 1);

        // Final potential score
        $potentialScore = $ageWeight[$ageCategory] * (1 + $recentImprovementWeight);

        return $potentialScore;
    }

    private function calculateKpiAchievement($last12MonthsData)
    {
        if (empty($last12MonthsData)) {
            return 0; // No data available, KPI achievement is 0
        }

        $totalSales = 0;
        $totalTargets = 0;

        foreach ($last12MonthsData as $record) {
            $totalSales += $record['total_sales'];
            $totalTargets += $record['target_sales'];
        }

        // Avoid division by zero
        if ($totalTargets === 0) {
            return 0;
        }

        // Calculate KPI as a percentage
        $kpiAchievement = ($totalSales / $totalTargets) * 100;

        return round($kpiAchievement, 2); // Return rounded percentage
    }
    
    private function determineAgeGroup($age, $ageGroups)
    {
        foreach ($ageGroups as $group) {
            // Split age_range into min and max
            $range = explode('-', $group['age_range']);
            $minAge = (int)$range[0]; // Convert the first part to integer
            $maxAge = isset($range[1]) ? (int)$range[1] : PHP_INT_MAX; // If no max, use PHP_INT_MAX

            // Check if the age falls within the range
            if ($age >= $minAge && $age <= $maxAge) {
                return $group;
            }
        }

        return ['id'=>null]; // Return null if no matching group is found
    }


    private function getJobProfileId($jobProfileKey, $jobProfiles)
    {
        // pre($jobProfileKey);
        foreach ($jobProfiles as $profile) {
            if ($profile['name'] === $jobProfileKey) {
                return $profile['id'];
            }
        }
        return null;
    }
    private function getJobProfile($jobProfileKey, $jobProfiles)
    {
        // pre($jobProfileKey);
        foreach ($jobProfiles as $profile) {
            if ($profile['name'] === $jobProfileKey) {
                return $profile;
            }
        }
        return ['id'=>null];
    }
    public function generateSkillEvaluationDetails() {
        // Fetch skill_evaluation_history rows
        $evaluations = $this->db->select('seh.id, seh.skill_level_id, seh.job_profile_id, sl.min_score, sl.max_score')
                                ->from('skill_evaluation_history seh')
                                ->join('skill_levels sl', 'seh.skill_level_id = sl.id', 'inner')
                                ->get()
                                ->result_array();

        $detailsBatch = []; // To store skill_evaluation_details batch data
        $updatesBatch = []; // To store skill_evaluation_history updates

        foreach ($evaluations as $evaluation) {
            $evaluationId = $evaluation['id'];
            $jobProfileId = $evaluation['job_profile_id'];
            $minScore = $evaluation['min_score'];
            $maxScore = $evaluation['max_score'];

            // Fetch skills for the job profile
            $skills = $this->db->select('id')
                               ->from('job_profile_skills')
                               ->where('job_profile_id', $jobProfileId)
                               ->get()
                               ->result_array();

            $skillIds = array_column($skills, 'id');
            $numSkills = count($skillIds);

            // Generate random scores and ensure the average matches the range
            $scores = [];
            $totalScore = 0;

            foreach ($skillIds as $index => $skillId) {
                // Distribute random scores within the range
                if ($index < $numSkills - 1) {
                    $score = rand($minScore, $maxScore);
                    $scores[] = ['skill_id' => $skillId, 'score' => $score];
                    $totalScore += $score;
                } else {
                    // Adjust the last score to ensure the average matches the range
                    $requiredTotal = ($minScore + $maxScore) / 2 * $numSkills;
                    $score = max($minScore, min($maxScore, round($requiredTotal - $totalScore)));
                    $scores[] = ['skill_id' => $skillId, 'score' => $score];
                    $totalScore += $score;
                }
            }

            // Prepare batch data for skill_evaluation_details
            foreach ($scores as $scoreData) {
                $detailsBatch[] = [
                    'skill_evaluation_history_id' => $evaluationId,
                    'job_profile_skill_id' => $scoreData['skill_id'],
                    'score' => $scoreData['score'],
                ];
            }

            // Prepare batch data for skill_evaluation_history updates
            $updatesBatch[] = [
                'id' => $evaluationId,
                'total_score' => $totalScore,
            ];
        }

        // Insert batch into skill_evaluation_details
        if (!empty($detailsBatch)) {
            $this->db->insert_batch('skill_evaluation_details', $detailsBatch);
        }

        // Update batch in skill_evaluation_history
        if (!empty($updatesBatch)) {
            $this->db->update_batch('skill_evaluation_history', $updatesBatch, 'id');
        }


        if ($this->db->trans_status() === false) {
            throw new Exception('Failed to generate skill evaluation details.');
        }

        return true;
    }


}
