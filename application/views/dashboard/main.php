<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">

    <div class="content flex-row-fluid" id="kt_content">
        <!-- Filters Section -->
        <div class="row mb-4">
            <div class="col-md-4">
                <h1 class="d-inline" id="page-title">Dashboard | <?=$searchstr?> (<?=$employee_count?> Staff)</h1>
            </div>
            <div class="col-md-8 text-right">
                <button class="btn btn-outline btn-outline-primary show menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                    <i class="ki-outline ki-filter-search me-n1"></i> Filter
                </button>
                <!-- Filter Dropdown -->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-400px p-5" data-kt-menu="true">
                    <div class="menu-item px-3">
                        <?=form_open('dashboard/index',['method'=>'get'])?>
                        <div class="form-group">
                            <label class="fs-5">Date Range</label>
                            <br>
                            <div class="d-flex">
                                <select class="form-control mr-2" id="fromDateFilter" name="start_yearmonth">
                                    <?php foreach ($date_range as $key => $value): ?>
                                        <option value="<?= $key; ?>" <?=isset($filters['start_yearmonth']) && $filters['start_yearmonth']==$key?'selected':''?>><?= $value; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <select class="form-control" id="toDateFilter" name="end_yearmonth">
                                    <?php foreach ($date_range as $key => $value): ?>
                                        <option value="<?= $key; ?>"  <?=isset($filters['end_yearmonth']) && $filters['end_yearmonth']==$key?'selected':''?>><?= $value; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <!-- Hidden Inputs for Other Filters -->
                        <?php foreach ($filters as $filterKey => $filterValue): ?>
                            <?php if (!empty($filterValue) && !in_array($filterKey, ['start_yearmonth', 'end_yearmonth'])): ?>
                                <input type="hidden" name="<?= $filterKey; ?>" value="<?= htmlspecialchars($filterValue, ENT_QUOTES, 'UTF-8'); ?>">
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <button class="btn btn-success w-100 mt-3" type="submit" id="applyFilters">Apply Filters</button>
                        <?=form_close()?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Charts Section -->
        <div class="row mb-4">
            <!-- Talent Matrix (9 Grid Box) -->
            <div class="col-md-4">
                <div class="card p-4 mb-3">
                    <h5 class="card-title">Talent Matrix (9 Grid Box)</h5>
                    <div class="grid-container">
                        <?php foreach ($nine_box_grid as $box): ?>
                            <div 
                                class="grid-item <?= strtolower(str_replace(' ', '-', $box['name'])) ?>" 
                                data-tooltip="<?= $box['description'] ?>" 
                                style="background-color: 
                                    <?php 
                                        if (strpos(strtolower($box['name']), 'low performance, low potential') !== false) echo '#ffcccc';
                                        elseif (strpos(strtolower($box['name']), 'low performance, medium potential') !== false) echo '#ffd9b3';
                                        elseif (strpos(strtolower($box['name']), 'low performance, high potential') !== false) echo '#ffffcc';
                                        elseif (strpos(strtolower($box['name']), 'medium performance, low potential') !== false) echo '#ffebcc';
                                        elseif (strpos(strtolower($box['name']), 'medium performance, medium potential') !== false) echo '#e6ffe6';
                                        elseif (strpos(strtolower($box['name']), 'medium performance, high potential') !== false) echo '#ccffe6';
                                        elseif (strpos(strtolower($box['name']), 'high performance, low potential') !== false) echo '#d9e6ff';
                                        elseif (strpos(strtolower($box['name']), 'high performance, medium potential') !== false) echo '#b3d9ff';
                                        elseif (strpos(strtolower($box['name']), 'high performance, high potential') !== false) echo '#80bfff';
                                    ?>;">
                                <span class="grid-title"><?= $box['name'] ?></span>
                                <span class="grid-count"><?= $box['employee_count'] ?> Employees</span>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Legend Section -->
                    <div class="mt-4 d-none">
                        <h6>Legend</h6>
                        <div class="d-flex flex-wrap">
                            <div class="legend-item" style="background-color: #ffcccc; width: 30px; height: 30px; margin-right: 10px;"></div> Low Performance, Low Potential
                            <div class="legend-item" style="background-color: #ffd9b3; width: 30px; height: 30px; margin-right: 10px;"></div> Low Performance, Medium Potential
                            <div class="legend-item" style="background-color: #ffffcc; width: 30px; height: 30px; margin-right: 10px;"></div> Low Performance, High Potential
                            <div class="legend-item" style="background-color: #ffebcc; width: 30px; height: 30px; margin-right: 10px;"></div> Medium Performance, Low Potential
                            <div class="legend-item" style="background-color: #e6ffe6; width: 30px; height: 30px; margin-right: 10px;"></div> Medium Performance, Medium Potential
                            <div class="legend-item" style="background-color: #ccffe6; width: 30px; height: 30px; margin-right: 10px;"></div> Medium Performance, High Potential
                            <div class="legend-item" style="background-color: #d9e6ff; width: 30px; height: 30px; margin-right: 10px;"></div> High Performance, Low Potential
                            <div class="legend-item" style="background-color: #b3d9ff; width: 30px; height: 30px; margin-right: 10px;"></div> High Performance, Medium Potential
                            <div class="legend-item" style="background-color: #80bfff; width: 30px; height: 30px; margin-right: 10px;"></div> High Performance, High Potential
                        </div>
                    </div>
                </div>
                <div class="card p-3 mb-3">
                    <h5 class="card-title">Job Profiles Overview</h5>
                    <div id="jobProfilesOverview">
                        <?php foreach ($job_profiles as $profile): ?>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="job-profile-info">
                                    <a href="<?= site_url('dashboard/index?job_profile_id=' . urlencode($profile['id'])) ?>" target="_blank" class="job-profile-link">
                                        <strong><?= $profile['name'] ?></strong>
                                    </a> 
                                    - 
                                    <span class="employee-count-link" style="cursor: pointer; text-decoration: underline; color: blue;" onclick="showEmployeeModal({
                                        job_profile_id:<?=$profile['id']?>
                                    })">
                                        <?= $profile['employee_count'] ?> Employees
                                    </span>
                                </div>
                                <div class="progress-container w-50">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: <?= $profile['avg_kpi'] ?>%;" aria-valuenow="<?= $profile['avg_kpi'] ?>" aria-valuemin="0" aria-valuemax="100">
                                            <?= number_format($profile['avg_kpi'], 2) ?>%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="card p-3 mb-3">
                    <h5 class="card-title">Area Overview</h5>
                    <div id="areaOverview">
                        <?php foreach ($area_overview as $area): ?>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="area-info">
                                    <a href="<?= site_url('dashboard/index?area_id=' . urlencode($area['id'])) ?>" target="_blank" class="area-link">
                                        <strong><?= $area['name'] ?></strong>
                                    </a> 
                                    - 
                                    <span class="employee-count-link" style="cursor: pointer; text-decoration: underline; color: blue;" onclick="showEmployeeModal({
                                        area_id:<?=$area['id']?>
                                    })">
                                        <?= $area['employee_count'] ?> Employees
                                    </span>
                                </div>
                                <div class="progress-container w-50">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: <?= $area['avg_kpi'] ?>%;" aria-valuenow="<?= $area['avg_kpi'] ?>" aria-valuemin="0" aria-valuemax="100">
                                            <?= number_format($area['avg_kpi'], 2) ?>%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="card p-3 mb-3">
                    <h5 class="card-title">Age Group Overview</h5>
                    <div id="ageGroupOverview">
                        <?php foreach ($age_group_overview as $age_group): ?>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="age-group-info">
                                    <a href="<?= site_url('dashboard/index?age_group_id=' . urlencode($age_group['id'])) ?>" target="_blank" class="age-group-link">
                                        <strong><?= $age_group['age_range'] ?></strong>
                                    </a> 
                                    - 
                                    <span class="employee-count-link" style="cursor: pointer; text-decoration: underline; color: blue;"onclick="showEmployeeModal({
                                        age_group_id:<?=$age_group['id']?>
                                    })">
                                        <?= $age_group['employee_count'] ?> Employees
                                    </span>
                                </div>
                                <div class="progress-container w-50">
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: <?= $age_group['avg_kpi'] ?>%;" aria-valuenow="<?= $age_group['avg_kpi'] ?>" aria-valuemin="0" aria-valuemax="100">
                                            <?= number_format($age_group['avg_kpi'], 2) ?>%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="card p-3 mb-3">
                    <h5 class="card-title">Skill Level Overview</h5>
                    <div id="skillLevelOverview">
                        <?php foreach ($skill_level_overview as $skill): ?>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="skill-level-info">
                                    <a href="<?= site_url('dashboard/index?skill_level_id=' . urlencode($skill['id'])) ?>" target="_blank" class="skill-level-link">
                                        <strong><?= $skill['name'] ?></strong>
                                    </a> 
                                    - 
                                    <span class="employee-count-link" style="cursor: pointer; text-decoration: underline; color: blue;" onclick="showEmployeeModal({
                                        skill_level_id:<?=$skill['id']?>
                                    })">
                                        <?= $skill['employee_count'] ?> Employees
                                    </span>
                                </div>
                                <div class="progress-container w-50">
                                    <div class="progress">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: <?= $skill['avg_kpi'] ?>%;" aria-valuenow="<?= $skill['avg_kpi'] ?>" aria-valuemin="0" aria-valuemax="100">
                                            <?= number_format($skill['avg_kpi'], 2) ?>%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed h-lg-100 p-6 d-none">
                    <!--begin::Wrapper-->
                    <div class="text-center" style="margin:auto!important;">
                        <!--begin::Action-->
                        <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Add Card</a>
                        <!--end::Action-->
                    </div>
                    <!--end::Wrapper-->
                </div>
            </div>

            <div class="col-md-8">
                
                <div class="card compact-card shadow-sm">
                    <div class="card-header">
                        <h5 class="card-title">Sales vs Target by Job and Area</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="salesPerformanceTargetJobProfileArea" style="height: 400px;"></canvas>
                    </div>
                </div>
                <div class="card compact-card shadow-sm">
                    <div class="card-header">
                        <h5 class="card-title">Sales vs Target by Skill Level and Job</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="salesPerformanceTargetSkillJobProfile" style="height: 400px;"></canvas>
                    </div>
                </div>
                <div class="card compact-card shadow-sm">
                    <div class="card-header">
                        <h5 class="card-title">Dynamic Sales Visualization</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="dynamicSalesChart" style="height: 400px;"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card compact-card shadow-sm">
                    <div class="card-header">
                        <h5 class="card-title">Employees</h5>
                    </div>
                    <div class="card-body">
                        <div style="overflow:auto;height:800px;">
                            <table class="table table-striped table-bordered" id="dash-employeeTable">
                              <thead>
                                <tr>
                                  <th>Name</th>
                                  <th>Area</th>
                                  <th>Job </th>
                                  <th>Skill</th>
                                  <th>Age</th>
                                  <th>Category</th>
                                  <th>AVG Sales</th>
                                  <th>Total Sales</th>
                                  <th>Performance %</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach($employees as $row){?>
                                    <tr>
                                        <td><?=$row->name?></td>
                                        <td><?=$row->area?></td>
                                        <td><?=$row->jobProfile?></td>
                                        <td><?=$row->skillLevel?></td>
                                        <td><?=$row->age?></td>
                                        <td><?=$row->category?></td>
                                        <td><?=number_format($row->avgSales)?></td>
                                        <td><?=number_format($row->totalSales)?></td>
                                        <td><?=number_format($row->performancePercentage,2)?></td>
                                    </tr>
                                <?php } ?>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</div>

<script>

    // Prepare data from PHP
    var salesData = <?= json_encode($sales_data); ?>;

    // Extract unique job profiles and areas
    var jobProfiles = [...new Set(salesData.map(data => data.job_profile))];
    var areas = [...new Set(salesData.map(data => data.area))];

    // Initialize datasets for sales (bars) and targets (lines)
    var salesDatasets = areas.map((area, index) => {
        var backgroundColors = ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d81b60'];
        return {
            label: `Sales (${area})`,
            backgroundColor: backgroundColors[index % backgroundColors.length],
            data: jobProfiles.map(job => {
                var entry = salesData.find(data => data.job_profile === job && data.area === area);
                return entry ? parseFloat(entry.total_sales) : 0;
            }),
            type: 'bar',
            stack: area, // Group bars by area
        };
    });

    var targetDatasets = areas.map((area, index) => {
        return {
            label: `Target (${area})`,
            borderColor: ['#ff5733', '#28a745', '#ffc107', '#17a2b8', '#6c757d'][index % 5],
            backgroundColor: 'rgba(0, 0, 0, 0)',
            data: jobProfiles.map(job => {
                var entry = salesData.find(data => data.job_profile === job && data.area === area);
                return entry ? parseFloat(entry.target_sales) : 0;
            }),
            type: 'line',
            fill: false,
            tension: 0.4,
        };
    });

    // Combine datasets
    var datasets = [...salesDatasets, ...targetDatasets];

    // Render Chart.js graph
    var ctx = document.getElementById('salesPerformanceTargetJobProfileArea').getContext('2d');
    var salesPerformanceChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: jobProfiles,
            datasets: datasets,
        },
        options: {
            responsive: true,
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function (tooltipItem) {
                            return `${tooltipItem.dataset.label}: ${tooltipItem.raw.toLocaleString('id-ID', { style: 'currency', currency: 'USD' })}`;
                        },
                    },
                },
                legend: {
                    position: 'top',
                },
            },
            scales: {
                x: {
                    stacked: false, // Disable stacking for individual bars
                },
                y: {
                    ticks: {
                        callback: function (value) {
                            return value.toLocaleString('id-ID', { style: 'currency', currency: 'USD' });
                        },
                    },
                },
            },
        },
    });

    // Prepare data from PHP
    var skillSalesData = <?= json_encode($skill_sales_data); ?>;

    // Extract unique skill levels and job profiles
    var skillLevels = [...new Set(skillSalesData.map(data => data.skill_level))];
    var jobProfiles = [...new Set(skillSalesData.map(data => data.job_profile))];

    // Initialize datasets for sales (bars) grouped by job profiles
    var salesDatasets = jobProfiles.map((job, index) => {
        var backgroundColors = ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d81b60'];
        return {
            label: `Sales (${job})`,
            backgroundColor: backgroundColors[index % backgroundColors.length],
            data: skillLevels.map(skill => {
                var entry = skillSalesData.find(data => data.skill_level === skill && data.job_profile === job);
                return entry ? parseFloat(entry.total_sales) : 0;
            }),
            type: 'bar',
        };
    });

    // Initialize line datasets for targets (one line per job profile)
    var targetDatasets = jobProfiles.map((job, index) => {
        var borderColors = ['#ff5733', '#28a745', '#ffc107', '#17a2b8', '#6c757d', '#d81b60'];
        return {
            label: `Target (${job})`,
            borderColor: borderColors[index % borderColors.length],
            backgroundColor: 'rgba(0, 0, 0, 0)',
            data: skillLevels.map(skill => {
                var entry = skillSalesData.find(data => data.skill_level === skill && data.job_profile === job);
                return entry ? parseFloat(entry.target_sales) : 0;
            }),
            type: 'line',
            fill: false,
            tension: 0.4,
        };
    });

    // Combine datasets (bars first, then lines)
    var datasets = [...salesDatasets, ...targetDatasets];
    console.log("LABELS 1: ",skillLevels);
    console.log("DATASETS 1: ",datasets);
    // Render Chart.js graph
    var ctx = document.getElementById('salesPerformanceTargetSkillJobProfile').getContext('2d');
    var salesPerformanceSkillChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: skillLevels, // X-axis has skill levels only
            datasets: datasets,
        },
        options: {
            responsive: true,
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function (tooltipItem) {
                            return `${tooltipItem.dataset.label}: ${tooltipItem.raw.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' })}`;
                        },
                    },
                },
                legend: {
                    position: 'top',
                },
            },
            scales: {
                x: {
                    stacked: false, // Disable stacking to show multiple bars per skill level
                },
                y: {
                    ticks: {
                        callback: function (value) {
                            return value.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
                        },
                    },
                },
            },
        },
    });
    var chartData = <?= json_encode($chart_data); ?>;

    var ctx = document.getElementById('dynamicSalesChart').getContext('2d');
    console.log("LABELS 2: ",chartData.labels);
    console.log("DATASETS 2: ",chartData.datasets);
    
    var dynamicSalesChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: chartData.labels, // X-axis labels based on first n-1 grouping levels
            datasets: chartData.datasets, // Includes bar and line datasets
        },
        options: {
            responsive: true,
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function (tooltipItem) {
                            return `${tooltipItem.dataset.label}: ${tooltipItem.raw.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' })}`;
                        },
                    },
                },
                legend: {
                    position: 'top',
                },
            },
            scales: {
                x: {
                    stacked: false,
                    ticks: {
                        autoSkip: false, // Ensure all labels are visible
                        maxRotation: 45, // Rotate labels if needed
                        callback: function (value, index) {
                            return chartData.labels[index]; // Display only skill_level - area
                        },
                    },
                },
                y: {
                    ticks: {
                        callback: function (value) {
                            return value.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
                        },
                    },
                },
            },
        },
    });
</script>
