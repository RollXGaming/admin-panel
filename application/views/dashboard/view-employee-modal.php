<style>
    .card-header {
        padding: 4px 8px !important; /* Compact header padding */
        font-size: 14px !important; /* Slightly smaller font for headers */
        min-height: 0px!important;
    }

    .card-body {
        padding: 6px 8px !important; /* Compact body padding */
    }

    .timeline {
        padding: 0 !important; /* Remove unnecessary padding */
    }

    .timeline-item {
        margin-bottom: 8px !important; /* Reduce space between timeline items */
    }

    .timeline-date {
        font-size: 12px !important; /* Smaller date text */
    }

    .card {
        border-radius: 8px !important; /* Subtle rounded corners */
    }

    .modal-body {
        padding: 10px !important; /* Compact modal content padding */
    }

    .scrollable {
        max-height: 300px !important;
        overflow-y: auto !important;
    }

</style>
<div class="container py-2">
    <!-- Row for Profile, Best Performance, and Most Suitable Area -->
    <div class="row g-2 mb-2">
        <!-- Employee Profile -->
        <div class="col-md-8">
            <div class="card shadow-sm mb-10">
                <div class="card-header bg-primary text-white">
                    Employee Profile
                </div>
                <div class="card-body">
                    <span><strong>Name:</strong> <?= $employee->name; ?></span><br>
                    <span><strong>Age:</strong> <?= $employee->age; ?></span><br>
                    <span><strong>Job Profile:</strong> <?= $employee->jobProfile; ?></span><br>
                    <span><strong>Area:</strong> <?= $employee->area; ?></span><br>
                    <span><strong>Skill Level:</strong> <?= $employee->skillLevel; ?></span><br>
                </div>
            </div>
            <div class="card shadow-sm mb-10">
                <div class="card-header bg-success text-white">
                    Best Performance
                </div>
                <div class="card-body">
                    <span><strong>Year-Month:</strong> <?= $employee->best_performance->yearmonth ?? 'N/A'; ?></span><br>
                    <span><strong>Performance Percentage:</strong> <?= round($employee->best_performance->performance_percentage ?? 0, 2); ?>%</span>
                </div>
            </div>
            <div class="card shadow-sm ">
                <div class="card-header bg-info text-white">
                    Most Suitable Area
                </div>
                <div class="card-body">
                    <span><strong>Area:</strong> <?= $employee->most_suitable_area->area ?? 'N/A'; ?></span><br>
                    <span><strong>Average Performance:</strong> <?= round($employee->most_suitable_area->avg_performance ?? 0, 2); ?>%</span>
                </div>
            </div>
        </div>
        <!-- Most Suitable Area -->
        <div class="col-md-4">
            <div class="card shadow-sm mb-3">
                <div class="card-header bg-secondary text-white">
                    Skill Evaluation Radar Chart
                </div>
                <div class="card-body">
                    <canvas id="radarChart" style="height: 250px;"></canvas>
                </div>
            </div>

        </div>
    </div>

    <!-- Radar Chart -->
    
    <!-- Row for Sales and Skill Evaluation History -->
    <div class="row g-2">
        <!-- Sales History -->
        <div class="col-md-6">
            <div class="card shadow-sm ">
                <div class="card-header bg-warning text-dark">
                    Sales History
                </div>
                <div class="card-body scrollable">
                    <ul class="timeline">
                        <?php foreach ($employee->sales_history as $history): ?>
                            <li class="timeline-item">
                                <span class="timeline-date"><?= $history->yearmonth; ?></span>
                                <div class="timeline-content">
                                    <span><strong>Area:</strong> <?= $history->area; ?></span>
                                    <span><strong>Job Profile:</strong> <?= $history->job_profile; ?></span>
                                    <span><strong>Total Sales:</strong> <?= number_format($history->total_sales, 2); ?></span>
                                    <span><strong>Target Sales:</strong> <?= number_format($history->target_sales, 2); ?></span>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Skill Evaluation History -->
        <div class="col-md-6">
            <div class="card shadow-sm ">
                <div class="card-header bg-dark text-white">
                    Skill Evaluation History
                </div>
                <div class="card-body scrollable">
                    <ul class="timeline">
                        <?php foreach ($employee->skill_evaluation_history as $history): ?>
                            <li class="timeline-item">
                                <span class="timeline-date"><?= $history->yearmonth; ?></span>
                                <div class="timeline-content">
                                    <span><strong>Area:</strong> <?= $history->area; ?></span>
                                    <span><strong>Job Profile:</strong> <?= $history->job_profile; ?></span>
                                    <span><strong>Skill Level:</strong> <?= $history->skill_level; ?></span>
                                    <span><strong>Total Score:</strong> <?= $history->total_score; ?></span>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Radar Chart Data
    var radarData = <?= json_encode($employee->radar_chart_data); ?>;
    var radarLabels = radarData.map(data => data.skill_name);
    var radarScores = radarData.map(data => data.score);

    // Initialize Radar Chart
    var ctx = document.getElementById('radarChart').getContext('2d');
    new Chart(ctx, {
        type: 'radar',
        data: {
            labels: radarLabels,
            datasets: [{
                label: 'Skill Scores',
                data: radarScores,
                backgroundColor: 'rgba(0, 123, 255, 0.2)',
                borderColor: 'rgba(0, 123, 255, 1)',
                borderWidth: 2,
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                }
            }
        },
    });
</script>
