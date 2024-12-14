<style>
.grid-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Three columns */
    grid-template-rows: repeat(3, 1fr); /* Three equal-height rows */
    gap: 10px;
    width: 100%;
    
}

.grid-item {
    display: flex; /* Makes content align within the item */
    flex-direction: column; /* Aligns content vertically */
    justify-content: center; /* Centers content vertically */
    align-items: center; /* Centers content horizontally */
    text-align: center;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

/* Tooltip */
.grid-item::after {
    content: attr(data-tooltip);
    position: absolute;
    bottom: 110%;
    left: 50%;
    transform: translateX(-50%);
    background-color: rgba(0, 0, 0, 0.7);
    color: #fff;
    padding: 5px 10px;
    border-radius: 4px;
    font-size: 12px;
    opacity: 0;
    pointer-events: none;
    white-space: nowrap;
    z-index: 10;
    transition: opacity 0.2s ease-in-out;
}

.grid-item:hover::after {
    opacity: 1;
}

/* Hover effect */
.grid-item:hover {
    transform: scale(1.05);
}

/* Make rows and items responsive */
@media (max-width: 768px) {
    .grid-container {
        grid-template-columns: repeat(2, 1fr); /* Two columns on medium screens */
        grid-template-rows: auto; /* Allow rows to adjust dynamically */
    }
}

@media (max-width: 480px) {
    .grid-container {
        grid-template-columns: repeat(1, 1fr); /* Single column on small screens */
        grid-template-rows: auto; /* Allow rows to adjust dynamically */
    }
}


    /* Different Background Colors for Each Cell */
    .low-performance-low-potential { background-color: #ffcccc; } /* Light Red */
    .low-performance-medium-potential { background-color: #ffd9b3; } /* Light Orange */
    .low-performance-high-potential { background-color: #ffffcc; } /* Light Yellow */
    .medium-performance-low-potential { background-color: #ffebcc; } /* Peach */
    .medium-performance-medium-potential { background-color: #e6ffe6; } /* Light Green */
    .medium-performance-high-potential { background-color: #ccffe6; } /* Mint Green */
    .high-performance-low-potential { background-color: #d9e6ff; } /* Pale Blue */
    .high-performance-medium-potential { background-color: #b3d9ff; } /* Soft Blue */
    .high-performance-high-potential { background-color: #80bfff; } /* Sky Blue */

    /* Styling for Table Rows Based on Grid Type */
    .table tbody tr.low-performance-low-potential { background-color: #ffcccc; } /* Light Red */
    .table tbody tr.low-performance-medium-potential { background-color: #ffd9b3; } /* Light Orange */
    .table tbody tr.low-performance-high-potential { background-color: #ffffcc; } /* Light Yellow */
    .table tbody tr.medium-performance-low-potential { background-color: #ffebcc; } /* Peach */
    .table tbody tr.medium-performance-medium-potential { background-color: #e6ffe6; } /* Light Green */
    .table tbody tr.medium-performance-high-potential { background-color: #ccffe6; } /* Mint Green */
    .table tbody tr.high-performance-low-potential { background-color: #d9e6ff; } /* Pale Blue */
    .table tbody tr.high-performance-medium-potential { background-color: #b3d9ff; } /* Soft Blue */
    .table tbody tr.high-performance-high-potential { background-color: #80bfff; } /* Sky Blue */

    /* Optional: Add Hover Effect */
    .table tbody tr:hover {
        transform: scale(1.01);
        transition: all 0.2s ease-in-out;
        background-color: #f5f5f5 !important;
    }
</style>
<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <div class="content flex-row-fluid" id="kt_content">
        <!-- Filters Section -->
        <div class="row mb-4">
            <div class="col-md-4 text-left d-block">
                <h1 class="d-inline" id="page-title"></h1>
            </div>
            
            <div class="col-md-8 d-block text-right">
                <button class="btn  btn-outline btn-outline-primary show menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                    <i class="ki-outline ki-filter-search me-n1"></i> Filter
                </button>
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-400px p-5" data-kt-menu="true">
                    <div class="menu-item px-3">
                        <div class="form-group">
                            <label class="fs-5">Date Range</label>
                            <br>
                            <div class="d-flex">
                                <select class="form-control mr-2" id="fromDateFilter">
                                    <option value="2024-01">January 2024</option>
                                    <option value="2024-02">February 2024</option>
                                    <option value="2024-03">March 2024</option>
                                    <option value="2024-04">April 2024</option>
                                    <option value="2024-05">May 2024</option>
                                    <option value="2024-06">June 2024</option>
                                    <option value="2024-07">July 2024</option>
                                    <option value="2024-08">August 2024</option>
                                    <option value="2024-09">September 2024</option>
                                    <option value="2024-10">October 2024</option>
                                </select>
                                <select class="form-control" id="toDateFilter">
                                    <option value="2024-01">January 2024</option>
                                    <option value="2024-02">February 2024</option>
                                    <option value="2024-03">March 2024</option>
                                    <option value="2024-04">April 2024</option>
                                    <option value="2024-05">May 2024</option>
                                    <option value="2024-06">June 2024</option>
                                    <option value="2024-07">July 2024</option>
                                    <option value="2024-08">August 2024</option>
                                    <option value="2024-09">September 2024</option>
                                    <option value="2024-10" selected>October 2024</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-success w-100 mt-3" id="applyFilters">Apply Filters</button>
                                
                    </div>
                    
                </div>
            </div>
        </div>


        <!-- Charts Section -->
        <div class="row mb-4">
            <!-- Talent Matrix (9 Grid Box) -->
            <div class="col-md-4">
                <div class="card p-4 mb-3">
                    <h5 class="card-title" onclick="openModal('9boxgrid');">Talent Matrix (9 Grid Box)</h5>
                    <div id="talentMatrix" class="grid-container">
                    </div>
                </div>
                <div class="card p-3 mb-3">
                    <h5 class="card-title">Job Profiles Overview</h5>
                    <div id="jobProfilesOverview"></div>
                </div>
                <div class="card p-3 mb-3">
                    <h5 class="card-title">Area Overview</h5>
                    <div id="areaOverview"></div>
                </div>
                <div class="card p-3 mb-3">
                    <h5 class="card-title">Age Group Overview</h5>
                    <div id="ageGroupOverview"></div>
                </div>
                <div class="card p-3 mb-3">
                    <h5 class="card-title">Skill Level Overview</h5>
                    <div id="skillLevelOverview"></div>
                </div>

            </div>
            <div class="col-md-8">
                <div class="card compact-card shadow-sm" onclick='openModal("sales_performance_area_age");'>
                    <div class="card-body">
                        <canvas id="salesPerformanceChart" style="height: 400px;"></canvas>
                    </div>
                </div>
                <div class="card compact-card shadow-sm" onclick='openModal("sales_performance_area_skill");'>
                    <div class="card-body">
                        <canvas id="salesPerformanceSkillLevelChart" style="height: 400px;"></canvas>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>
<script>
const defaultFilter = {
    area: "",
    jobProfile: "",
    ageGroup: "",
    skillLevel: "",
    yearMonthStart: $("#fromDateFilter").val(),
    yearMonthEnd: $("#toDateFilter").val()
};
// Generate sales data by job profile and area
function renderSalesPerformanceChart(data) {
    const ctx = document.getElementById("salesPerformanceChart").getContext("2d");

    // Prepare data for the chart
    const jobProfiles = ["AO", "RM", "BM"];
    const areas = ["Papua", "Kalimantan", "Sumatra", "Sulawesi", "Jawa"];
    const areaColors = {
        "Papua": "rgba(255, 99, 132, 0.6)",
        "Kalimantan": "rgba(54, 162, 235, 0.6)",
        "Sumatra": "rgba(255, 206, 86, 0.6)",
        "Sulawesi": "rgba(75, 192, 192, 0.6)",
        "Jawa": "rgba(153, 102, 255, 0.6)"
    };
    const lineColors = {
        "Papua": "rgba(255, 99, 132, 1)",
        "Kalimantan": "rgba(54, 162, 235, 1)",
        "Sumatra": "rgba(255, 206, 86, 1)",
        "Sulawesi": "rgba(75, 192, 192, 1)",
        "Jawa": "rgba(153, 102, 255, 1)"
    };

    // Create datasets for bar (achievement) and line (target) charts
    const datasets = [];

    areas.forEach(area => {
        const areaData = data.find(item => item.area === area);

        if (areaData) {
            // Bar dataset (achievement)
            datasets.push({
                type: "bar",
                label: `Total Sales (${area})`,
                data: jobProfiles.map(profile =>
                    areaData.jobProfiles.find(job => job.jobProfile === profile)?.totalSales || 0
                ),
                backgroundColor: areaColors[area],
                stack: area // Stack by area
            });

            // Line dataset (target)
            datasets.push({
                type: "line",
                label: `Sales Target (${area})`,
                data: jobProfiles.map(profile =>
                    areaData.jobProfiles.find(job => job.jobProfile === profile)?.targetSales || 0
                ),
                borderColor: lineColors[area],
                backgroundColor: "rgba(0, 0, 0, 0)",
                borderWidth: 2,
                tension: 0.4,
                yAxisID: "y"
            });
            console.log("Sales",jobProfiles.map(profile =>
                    areaData.jobProfiles.find(job => job.jobProfile === profile)?.totalSales || 0
            ));
            console.log("Target",jobProfiles.map(profile =>
                    areaData.jobProfiles.find(job => job.jobProfile === profile)?.totalSales || 0
            ));
        }
    });

    // Render the chart
    new Chart(ctx, {
        type: "bar",
        data: {
            labels: jobProfiles, // Job profiles (x-axis)
            datasets: datasets
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: "top" },
                title: {
                    display: true,
                    text: "Sales Performance vs Target Sales by Job Profile and Area"
                }
            },
            scales: {
                x: {
                    title: { display: true, text: "Job Profile" }
                },
                y: {
                    title: { display: true, text: "Sales" },
                    beginAtZero: true
                }
            }
        }
    });
}
const salesDataByJobProfileAndArea = generateSalesByJobProfileAndArea(masterData);
renderSalesPerformanceChart(salesDataByJobProfileAndArea);

function renderSalesPerformanceBySkillLevelChart(data) {
    const ctx = document.getElementById("salesPerformanceSkillLevelChart").getContext("2d");

    // Prepare data for the chart
    const jobProfiles = ["AO", "RM", "BM"];
    const skillLevels = ["Beginner", "Intermediate", "Advanced", "Expert", "Professional"];
    const skillLevelColors = {
        "Beginner": "rgba(255, 99, 132, 0.6)",
        "Intermediate": "rgba(54, 162, 235, 0.6)",
        "Advanced": "rgba(255, 206, 86, 0.6)",
        "Expert": "rgba(75, 192, 192, 0.6)",
        "Professional": "rgba(153, 102, 255, 0.6)"
    };
    const lineColors = {
        "Beginner": "rgba(255, 99, 132, 1)",
        "Intermediate": "rgba(54, 162, 235, 1)",
        "Advanced": "rgba(255, 206, 86, 1)",
        "Expert": "rgba(75, 192, 192, 1)",
        "Professional": "rgba(153, 102, 255, 1)"
    };

    // Create datasets for bar (achievement) and line (target) charts
    const datasets = [];

    skillLevels.forEach(skillLevel => {
        const skillLevelData = data.find(item => item.skillLevel === skillLevel);

        if (skillLevelData) {
            // Bar dataset (achievement)
            datasets.push({
                type: "bar",
                label: `Total Sales (${skillLevel})`,
                data: jobProfiles.map(profile =>
                    skillLevelData.jobProfiles.find(job => job.jobProfile === profile)?.totalSales || 0
                ),
                backgroundColor: skillLevelColors[skillLevel],
                stack: skillLevel // Stack by skill level
            });

        }
    });

    // Render the chart
    new Chart(ctx, {
        type: "bar",
        data: {
            labels: jobProfiles, // Job profiles as x-axis labels
            datasets: datasets
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: "top" },
                title: {
                    display: true,
                    text: "Sales Performance by Job Profile and Skill Level"
                }
            },
            scales: {
                x: {
                    title: { display: true, text: "Job Profiles" }
                },
                y: {
                    beginAtZero: true,
                    title: { display: true, text: "Sales Value (IDR)" }
                }
            }
        }
    });
}
const salesPerformanceSkillLevelData = generateSalesByJobProfileAndSkillLevel(masterData);
renderSalesPerformanceBySkillLevelChart(salesPerformanceSkillLevelData);

</script>
<?php $this->load->view('layouts/dashboard-script')?>
<script>
    $("#page-title").html("DASHBOARD ("+filteredEmployees.length+" Staff)");
</script>