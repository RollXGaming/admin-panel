<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl" style="max-width: 100%!important;">
    <div class="content flex-row-fluid" id="kt_content">
        <div class="row">
            <!-- Basic Profile Section -->
            <div class="col-md-12 mb-5">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="card-title">Basic Profile</h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="profile-picture mr-4">
                                <img src="https://billatowing.com/wp-content/uploads/2016/06/team-1.jpg" alt="Profile Picture" class="img-thumbnail rounded-circle" style="width: 100px; height: 100px;">
                            </div>
                            <div>
                                <h4 id="employeeName">John Doe</h4>
                                <p><strong>Email:</strong> <span id="employeeEmail">johndoe@example.com</span></p>
                                <p><strong>Phone:</strong> <span id="employeePhone">+62 812 3456 7890</span></p>
                                <p><strong>Current Position:</strong> <span id="employeePosition">Relationship Manager</span></p>
                                <p><strong>Branch:</strong> <span id="employeeBranch">Jakarta</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Promotion/Demotion Timeline -->
            <div class="col-md-6 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Promotion/Demotion History</h3>
                    </div>
                    <div class="card-body">
                        <div class="timeline">
                            <div class="timeline-item mb-4">
                                <div class="timeline-label">2023-06-01</div>
                                <div class="timeline-content bg-light p-3 rounded">
                                    Promoted to <strong>Relationship Manager</strong> at Jakarta Branch
                                </div>
                            </div>
                            <div class="timeline-item mb-4">
                                <div class="timeline-label">2021-11-15</div>
                                <div class="timeline-content bg-light p-3 rounded">
                                    Promoted to <strong>Senior Personal Banker</strong> at Surabaya Branch
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-label">2020-05-01</div>
                                <div class="timeline-content bg-light p-3 rounded">
                                    Joined as <strong>Personal Banker</strong> at Bandung Branch
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Work Journey Timeline -->
            <div class="col-md-6 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Work Journey History</h3>
                    </div>
                    <div class="card-body">
                        <div class="timeline">
                            <div class="timeline-item mb-4">
                                <div class="timeline-label">2023-Present</div>
                                <div class="timeline-content bg-light p-3 rounded">
                                    <strong>Jakarta Branch</strong> - Relationship Manager
                                </div>
                            </div>
                            <div class="timeline-item mb-4">
                                <div class="timeline-label">2021-2023</div>
                                <div class="timeline-content bg-light p-3 rounded">
                                    <strong>Surabaya Branch</strong> - Senior Personal Banker
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-label">2020-2021</div>
                                <div class="timeline-content bg-light p-3 rounded">
                                    <strong>Bandung Branch</strong> - Personal Banker
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- KPI vs Sales Performance History -->
            <div class="col-md-6 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">KPI vs Sales Performance History</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="kpiSalesPerformanceChart" width="100%" height="40"></canvas>
                    </div>
                </div>
            </div>

            <!-- Skills Competency & Skills Gap -->
            <div class="col-md-6 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Skills Competency & Skills Gap</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="skillsCompetencyGapChart" width="100%" height="40"></canvas>
                    </div>
                </div>
            </div>

            <!-- 9-Box Grid -->
            <div class="col-md-6 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">9-Box Grid</h3>
                    </div>
                    <div class="card-body">
                        <div id="nineBoxGridContainer" class="nine-box-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; padding: 20px;">
                            <!-- Cells are dynamically populated here -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Retirement/Attrition Risk -->
            <div class="col-md-6 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Retirement/Attrition Risk</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="retirementAttritionRiskChart" width="100%" height="40"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
    // Sample Data
    const employeeData = {
        basicProfile: {
            name: "John Doe",
            email: "johndoe@example.com",
            phone: "+62 812 3456 7890",
            position: "Relationship Manager",
            branch: "Jakarta",
            profilePicture: "path-to-profile-picture.jpg"
        },
        promotionHistory: [
            { date: "2023-06-01", description: "Promoted to Relationship Manager at Jakarta Branch" },
            { date: "2021-11-15", description: "Promoted to Senior Personal Banker at Surabaya Branch" },
            { date: "2020-05-01", description: "Joined as Personal Banker at Bandung Branch" }
        ],
        workJourney: [
            { period: "2023-Present", branch: "Jakarta Branch", position: "Relationship Manager" },
            { period: "2021-2023", branch: "Surabaya Branch", position: "Senior Personal Banker" },
            { period: "2020-2021", branch: "Bandung Branch", position: "Personal Banker" }
        ],
        kpiSalesPerformance: {
            labels: ["2024-01", "2024-02", "2024-03", "2024-04", "2024-05", "2024-06"],
            datasets: [
                {
                    label: "KPI Achievement (%)",
                    data: [85, 88, 90, 82, 78, 84],
                    borderColor: "rgba(75, 192, 192, 1)",
                    backgroundColor: "rgba(75, 192, 192, 0.2)",
                    fill: true,
                    yAxisID: "y1"
                },
                {
                    label: "Sales Performance (IDR)",
                    data: [4500, 5000, 4800, 5200, 4300, 4700],
                    borderColor: "rgba(255, 99, 132, 1)",
                    backgroundColor: "rgba(255, 99, 132, 0.2)",
                    fill: true,
                    yAxisID: "y"
                },
                {
                    label: "Sales Target (IDR)",
                    data: [5000, 5200, 5000, 5400, 5000, 5100],
                    borderColor: "rgba(54, 162, 235, 1)",
                    backgroundColor: "rgba(54, 162, 235, 0.2)",
                    fill: false,
                    yAxisID: "y"
                }
            ]
        },
        skillsCompetency: {
            labels: ["Communication", "Technical", "Teamwork", "Problem-Solving", "Leadership"],
            datasets: [
                {
                    label: "Skill Level (%)",
                    data: [85, 90, 88, 80, 84],
                    backgroundColor: "rgba(75, 192, 192, 0.6)"
                },
                {
                    label: "Skill Gap (%)",
                    data: [15, 10, 12, 20, 16],
                    backgroundColor: "rgba(255, 99, 132, 0.6)"
                }
            ]
        },
        nineBoxGrid: {
            category: "High Performance, High Potential",
            gridData: [
                { label: "High Performance, Low Potential", details: "5 Employees", color: "#cddc39" },
                { label: "High Performance, Medium Potential", details: "8 Employees", color: "#8bc34a" },
                { label: "High Performance, High Potential", details: "10 Employees", color: "#4caf50" },
                { label: "Medium Performance, Low Potential", details: "6 Employees", color: "#03a9f4" },
                { label: "Medium Performance, Medium Potential", details: "12 Employees", color: "#2196f3" },
                { label: "Medium Performance, High Potential", details: "9 Employees", color: "#03a9f4" },
                { label: "Low Performance, Low Potential", details: "3 Employees", color: "#f44336" },
                { label: "Low Performance, Medium Potential", details: "7 Employees", color: "#ffc107" },
                { label: "Low Performance, High Potential", details: "4 Employees", color: "#ffeb3b" }
            ]
        },
        retirementAttritionRisk: {
            labels: ["2024", "2025", "2026", "2027", "2028"],
            datasets: [
                {
                    label: "Retirement Risk (%)",
                    data: [10, 12, 14, 16, 18],
                    backgroundColor: "rgba(75, 192, 192, 0.6)"
                },
                {
                    label: "Attrition Risk (%)",
                    data: [15, 18, 16, 20, 22],
                    backgroundColor: "rgba(255, 99, 132, 0.6)"
                }
            ]
        }
    };

    // Populate Basic Profile
    $("#employeeName").text(employeeData.basicProfile.name);
    $("#employeeEmail").text(employeeData.basicProfile.email);
    $("#employeePhone").text(employeeData.basicProfile.phone);
    $("#employeePosition").text(employeeData.basicProfile.position);
    $("#employeeBranch").text(employeeData.basicProfile.branch);

    // Populate Promotion/Demotion History
    const promotionHistoryContainer = $(".promotion-timeline");
    promotionHistoryContainer.empty();
    employeeData.promotionHistory.forEach(item => {
        promotionHistoryContainer.append(`
            <div class="timeline-item mb-4">
                <div class="timeline-label">${item.date}</div>
                <div class="timeline-content bg-light p-3 rounded">${item.description}</div>
            </div>
        `);
    });

    // Populate Work Journey History
    const workJourneyContainer = $(".work-journey-timeline");
    workJourneyContainer.empty();
    employeeData.workJourney.forEach(item => {
        workJourneyContainer.append(`
            <div class="timeline-item mb-4">
                <div class="timeline-label">${item.period}</div>
                <div class="timeline-content bg-light p-3 rounded">
                    <strong>${item.branch}</strong> - ${item.position}
                </div>
            </div>
        `);
    });

    // Render KPI vs Sales Performance Chart
    const kpiSalesPerformanceCtx = document.getElementById("kpiSalesPerformanceChart").getContext("2d");
    new Chart(kpiSalesPerformanceCtx, {
        type: "line",
        data: {
            labels: employeeData.kpiSalesPerformance.labels,
            datasets: employeeData.kpiSalesPerformance.datasets
        },
        options: {
            responsive: true,
            plugins: { legend: { position: "top" } },
            scales: {
                y: { beginAtZero: true, position: "left" },
                y1: { beginAtZero: true, position: "right", grid: { drawOnChartArea: false } }
            }
        }
    });

    // Render Skills Competency Chart
    const skillsCompetencyCtx = document.getElementById("skillsCompetencyGapChart").getContext("2d");
    new Chart(skillsCompetencyCtx, {
        type: "bar",
        data: {
            labels: employeeData.skillsCompetency.labels,
            datasets: employeeData.skillsCompetency.datasets
        },
        options: { responsive: true, plugins: { legend: { position: "top" } } }
    });

    

    // Render Retirement/Attrition Risk Chart
    const retirementAttritionCtx = document.getElementById("retirementAttritionRiskChart").getContext("2d");
    new Chart(retirementAttritionCtx, {
        type: "bar",
        data: {
            labels: employeeData.retirementAttritionRisk.labels,
            datasets: employeeData.retirementAttritionRisk.datasets
        },
        options: { responsive: true, plugins: { legend: { position: "top" } } }
    });
    // Render 9-Box Grid with Highlighted Category
    function render9BoxGridWithHighlight(data, employeeCategory) {
        const gridContainer = $("#nineBoxGridContainer");
        gridContainer.empty(); // Clear the grid container

        data.forEach(item => {
            const isHighlighted = item.label === employeeCategory;
            gridContainer.append(`
                <div class="grid-cell" 
                     style="background-color: ${isHighlighted ? item.color : "#e0e0e0"}; 
                            border: ${isHighlighted ? "2px solid #000" : "1px solid #ccc"};">
                    <span>${item.label}</span>
                    <span class="tooltip">${item.details}</span>
                </div>
            `);
        });
    }

    // Example Call with Highlight
    const nineBoxGridData = [
        { label: "High Performance, Low Potential", details: "5 Employees", color: "#cddc39" },
        { label: "High Performance, Medium Potential", details: "8 Employees", color: "#8bc34a" },
        { label: "High Performance, High Potential", details: "10 Employees", color: "#4caf50" },
        { label: "Medium Performance, Low Potential", details: "6 Employees", color: "#03a9f4" },
        { label: "Medium Performance, Medium Potential", details: "12 Employees", color: "#2196f3" },
        { label: "Medium Performance, High Potential", details: "9 Employees", color: "#03a9f4" },
        { label: "Low Performance, Low Potential", details: "3 Employees", color: "#f44336" },
        { label: "Low Performance, Medium Potential", details: "7 Employees", color: "#ffc107" },
        { label: "Low Performance, High Potential", details: "4 Employees", color: "#ffeb3b" }
    ];

    // Employee's Category
    const employeeCategory = "High Performance, High Potential";

    // Render the Grid with Highlight
    render9BoxGridWithHighlight(nineBoxGridData, employeeCategory);
});

</script>