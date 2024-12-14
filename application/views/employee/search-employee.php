<div class="container-xxl" id="kt_content_container">
    <div class="content flex-row-fluid" id="kt_content">
        <div class="row">
            <!-- Employee Table Section -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Employee List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped" id="employeeTable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Job Position</th>
                                    <th>Area</th>
                                    <th>Age Group</th>
                                    <th>12M KPI Avg (%)</th>
                                    <th>12M Sales Achievement</th>
                                    <th>9-Box Category</th>
                                    <th>Skill Level</th>
                                    <th>Retirement Risk</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Rows will be populated dynamically -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Filters Section -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Filters</h3>
                    </div>
                    <div class="card-body">
                        <!-- Job Positions -->
                        <div class="form-group mb-3">
                            <label for="jobPositionFilter">Job Positions</label>
                            <select class="form-control select2" id="jobPositionFilter" multiple>
                                <option value="Teller">Teller</option>
                                <option value="CSO">CSO</option>
                                <option value="Personal Banker">Personal Banker</option>
                                <option value="RM">Relationship Manager</option>
                                <option value="Sales Exec">Sales Executive</option>
                                <!-- Add more job positions as needed -->
                            </select>
                        </div>
                        
                        <!-- Area -->
                        <div class="form-group mb-3">
                            <label for="areaFilter">Area</label>
                            <select class="form-control select2" id="areaFilter" multiple>
                                <option value="Jawa">Jawa</option>
                                <option value="Sumatra">Sumatra</option>
                                <option value="Kalimantan">Kalimantan</option>
                                <option value="Sulawesi">Sulawesi</option>
                                <!-- Add more areas as needed -->
                            </select>
                        </div>

                        <!-- Age Group -->
                        <div class="form-group mb-3">
                            <label for="ageGroupFilter">Age Group</label>
                            <select class="form-control select2" id="ageGroupFilter" multiple>
                                <option value="18-25">18-25</option>
                                <option value="26-35">26-35</option>
                                <option value="36-45">36-45</option>
                                <option value="46-55">46-55</option>
                            </select>
                        </div>

                        <!-- 9-Box Grid Categories -->
                        <div class="form-group mb-3">
                            <label for="nineBoxCategoryFilter">9-Box Grid Categories</label>
                            <select class="form-control select2" id="nineBoxCategoryFilter" multiple>
                                <option value="High Performance, High Potential">High Performance, High Potential</option>
                                <option value="Medium Performance, Medium Potential">Medium Performance, Medium Potential</option>
                                <option value="Low Performance, Low Potential">Low Performance, Low Potential</option>
                                <!-- Add more categories as needed -->
                            </select>
                        </div>

                        <!-- Skill Levels -->
                        <div class="form-group mb-3">
                            <label for="skillLevelFilter">Skill Levels</label>
                            <select class="form-control select2" id="skillLevelFilter" multiple>
                                <option value="Meet Requirement">Meet Requirement</option>
                                <option value="Higher than Requirement">Higher than Requirement</option>
                                <option value="Lower than Requirement">Lower than Requirement</option>
                            </select>
                        </div>

                        <!-- Retirement & Attrition Risk -->
                        <div class="form-group mb-3">
                            <label for="riskFilter">Retirement & Attrition Risk</label>
                            <select class="form-control select2" id="riskFilter" multiple>
                                <option value="Low Risk">Low Risk</option>
                                <option value="Medium Risk">Medium Risk</option>
                                <option value="High Risk">High Risk</option>
                            </select>
                        </div>

                        <!-- KPI Range -->
                        <div class="form-group mb-3">
                            <label for="kpiRange">Avg 12 Months KPI</label>
                            <input type="range" class="form-control-range" id="kpiRange" min="0" max="100" step="5">
                            <p id="kpiRangeValue" class="text-muted">50%</p>
                        </div>

                        <!-- Sales Achievement -->
                        <div class="form-group mb-3">
                            <label for="salesAchievementFilter">12 Months Sales Achievement</label>
                            <select class="form-control" id="salesAchievementFilter">
                                <option value="all">All</option>
                                <option value="achieve">Achieve</option>
                                <option value="notAchieve">Not Achieve</option>
                            </select>
                        </div>

                        <button class="btn btn-primary w-100" id="applyFilters">Apply Filters</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function () {
    // Initialize Select2
    $(".select2").select2();

    const employees = [
        {name: "John Rodriguez", jobPosition: "RM", area: "Jawa", ageGroup: "46-55", avgKPI: 66, salesAchievement: "notAchieve", nineBoxCategory: "Low Performance, Low Potential", skillLevel: "Lower than Requirement", risk: "Low Risk"},
        {name: "John Williams", jobPosition: "Sales Exec", area: "Sumatra", ageGroup: "46-55", avgKPI: 54, salesAchievement: "achieve", nineBoxCategory: "Medium Performance, High Potential", skillLevel: "Higher than Requirement", risk: "Medium Risk"},
        {name: "Alice Brown", jobPosition: "Sales Exec", area: "Sulawesi", ageGroup: "46-55", avgKPI: 71, salesAchievement: "notAchieve", nineBoxCategory: "High Performance, High Potential", skillLevel: "Lower than Requirement", risk: "Medium Risk"},
        {name: "Alice Smith", jobPosition: "RM", area: "Kalimantan", ageGroup: "26-35", avgKPI: 53, salesAchievement: "achieve", nineBoxCategory: "Low Performance, Medium Potential", skillLevel: "Higher than Requirement", risk: "High Risk"},
        {name: "Michael Johnson", jobPosition: "Sales Exec", area: "Jawa", ageGroup: "46-55", avgKPI: 55, salesAchievement: "achieve", nineBoxCategory: "High Performance, High Potential", skillLevel: "Meet Requirement", risk: "Low Risk"},
        {name: "Olivia Johnson", jobPosition: "CSO", area: "Sumatra", ageGroup: "36-45", avgKPI: 89, salesAchievement: "notAchieve", nineBoxCategory: "Low Performance, Low Potential", skillLevel: "Meet Requirement", risk: "Medium Risk"},
        {name: "Michael Garcia", jobPosition: "Sales Exec", area: "Sulawesi", ageGroup: "26-35", avgKPI: 95, salesAchievement: "notAchieve", nineBoxCategory: "Low Performance, Low Potential", skillLevel: "Meet Requirement", risk: "High Risk"},
        {name: "John Davis", jobPosition: "Personal Banker", area: "Kalimantan", ageGroup: "46-55", avgKPI: 59, salesAchievement: "achieve", nineBoxCategory: "Medium Performance, High Potential", skillLevel: "Lower than Requirement", risk: "Medium Risk"},
        {name: "James Doe", jobPosition: "CSO", area: "Sumatra", ageGroup: "26-35", avgKPI: 85, salesAchievement: "notAchieve", nineBoxCategory: "Medium Performance, Medium Potential", skillLevel: "Lower than Requirement", risk: "Medium Risk"},
        {name: "Michael Brown", jobPosition: "Personal Banker", area: "Kalimantan", ageGroup: "46-55", avgKPI: 92, salesAchievement: "achieve", nineBoxCategory: "Medium Performance, High Potential", skillLevel: "Higher than Requirement", risk: "Medium Risk"},
        {name: "Sophia Miller", jobPosition: "Teller", area: "Sumatra", ageGroup: "46-55", avgKPI: 58, salesAchievement: "achieve", nineBoxCategory: "Medium Performance, Medium Potential", skillLevel: "Meet Requirement", risk: "Medium Risk"},
        {name: "Emma Doe", jobPosition: "Teller", area: "Sumatra", ageGroup: "46-55", avgKPI: 57, salesAchievement: "notAchieve", nineBoxCategory: "Medium Performance, Medium Potential", skillLevel: "Lower than Requirement", risk: "Low Risk"},
        {name: "Jane Johnson", jobPosition: "Personal Banker", area: "Sumatra", ageGroup: "46-55", avgKPI: 50, salesAchievement: "notAchieve", nineBoxCategory: "Medium Performance, Medium Potential", skillLevel: "Meet Requirement", risk: "High Risk"},
        {name: "Emma Garcia", jobPosition: "Personal Banker", area: "Jawa", ageGroup: "18-25", avgKPI: 95, salesAchievement: "notAchieve", nineBoxCategory: "High Performance, Medium Potential", skillLevel: "Lower than Requirement", risk: "Low Risk"},
        {name: "Robert Williams", jobPosition: "CSO", area: "Sulawesi", ageGroup: "46-55", avgKPI: 71, salesAchievement: "notAchieve", nineBoxCategory: "Low Performance, Low Potential", skillLevel: "Higher than Requirement", risk: "Medium Risk"},
        {name: "Emma Smith", jobPosition: "Teller", area: "Sumatra", ageGroup: "18-25", avgKPI: 92, salesAchievement: "notAchieve", nineBoxCategory: "High Performance, High Potential", skillLevel: "Higher than Requirement", risk: "Medium Risk"},
        {name: "Olivia Johnson", jobPosition: "Personal Banker", area: "Kalimantan", ageGroup: "36-45", avgKPI: 52, salesAchievement: "achieve", nineBoxCategory: "Medium Performance, High Potential", skillLevel: "Lower than Requirement", risk: "Medium Risk"},
        {name: "John Davis", jobPosition: "CSO", area: "Kalimantan", ageGroup: "46-55", avgKPI: 82, salesAchievement: "achieve", nineBoxCategory: "High Performance, High Potential", skillLevel: "Higher than Requirement", risk: "High Risk"},
        {name: "James Smith", jobPosition: "CSO", area: "Sumatra", ageGroup: "36-45", avgKPI: 93, salesAchievement: "notAchieve", nineBoxCategory: "Low Performance, Medium Potential", skillLevel: "Higher than Requirement", risk: "High Risk"},
        {name: "William Doe", jobPosition: "RM", area: "Kalimantan", ageGroup: "18-25", avgKPI: 76, salesAchievement: "notAchieve", nineBoxCategory: "High Performance, High Potential", skillLevel: "Lower than Requirement", risk: "High Risk"},
        {name: "Robert Jones", jobPosition: "Sales Exec", area: "Jawa", ageGroup: "46-55", avgKPI: 76, salesAchievement: "notAchieve", nineBoxCategory: "Medium Performance, High Potential", skillLevel: "Lower than Requirement", risk: "Low Risk"},
        {name: "Jane Johnson", jobPosition: "RM", area: "Sulawesi", ageGroup: "26-35", avgKPI: 78, salesAchievement: "notAchieve", nineBoxCategory: "High Performance, Medium Potential", skillLevel: "Meet Requirement", risk: "Low Risk"},
        {name: "Sophia Garcia", jobPosition: "Personal Banker", area: "Sumatra", ageGroup: "26-35", avgKPI: 74, salesAchievement: "achieve", nineBoxCategory: "Medium Performance, High Potential", skillLevel: "Meet Requirement", risk: "Low Risk"},
        {name: "Olivia Johnson", jobPosition: "Teller", area: "Kalimantan", ageGroup: "36-45", avgKPI: 80, salesAchievement: "notAchieve", nineBoxCategory: "High Performance, Medium Potential", skillLevel: "Meet Requirement", risk: "High Risk"},
        {name: "Emma Johnson", jobPosition: "RM", area: "Jawa", ageGroup: "46-55", avgKPI: 53, salesAchievement: "achieve", nineBoxCategory: "Medium Performance, High Potential", skillLevel: "Higher than Requirement", risk: "High Risk"},
        {name: "Emma Jones", jobPosition: "CSO", area: "Jawa", ageGroup: "36-45", avgKPI: 77, salesAchievement: "achieve", nineBoxCategory: "Low Performance, Medium Potential", skillLevel: "Lower than Requirement", risk: "High Risk"},
        {name: "Alice Smith", jobPosition: "RM", area: "Kalimantan", ageGroup: "18-25", avgKPI: 86, salesAchievement: "achieve", nineBoxCategory: "Low Performance, Low Potential", skillLevel: "Higher than Requirement", risk: "High Risk"},
        {name: "Robert Miller", jobPosition: "Personal Banker", area: "Sulawesi", ageGroup: "18-25", avgKPI: 72, salesAchievement: "notAchieve", nineBoxCategory: "Low Performance, Low Potential", skillLevel: "Higher than Requirement", risk: "High Risk"},
        {name: "Emma Rodriguez", jobPosition: "CSO", area: "Sulawesi", ageGroup: "18-25", avgKPI: 71, salesAchievement: "achieve", nineBoxCategory: "High Performance, High Potential", skillLevel: "Lower than Requirement", risk: "Low Risk"}
    ];

    // Populate Employee Table
    function populateEmployeeTable(data) {
        const tableBody = $("#employeeTable tbody");
        tableBody.empty();

        if (data.length === 0) {
            tableBody.append(`<tr><td colspan="9" class="text-center">No data available</td></tr>`);
            return;
        }

        data.forEach(employee => {
            tableBody.append(`
                <tr>
                    <td>${employee.name}</td>
                    <td>${employee.jobPosition}</td>
                    <td>${employee.area}</td>
                    <td>${employee.ageGroup}</td>
                    <td>${employee.avgKPI}%</td>
                    <td>${employee.salesAchievement === "achieve" ? "Achieved" : "Not Achieved"}</td>
                    <td>${employee.nineBoxCategory}</td>
                    <td>${employee.skillLevel}</td>
                    <td>${employee.risk}</td>
                </tr>
            `);
        });
    }

    // Apply Filters
    function applyFilters() {
        const selectedJobPositions = $("#jobPositionFilter").val();
        const selectedAreas = $("#areaFilter").val();
        const selectedAgeGroups = $("#ageGroupFilter").val();
        const selectedCategories = $("#nineBoxCategoryFilter").val();
        const selectedSkillLevels = $("#skillLevelFilter").val();
        const selectedRiskLevels = $("#riskFilter").val();
        const kpiRange = $("#kpiRange").val();
        const salesAchievementFilter = $("#salesAchievementFilter").val();

        const filteredData = employees.filter(employee => {
            return (
                (selectedJobPositions.length === 0 || selectedJobPositions.includes(employee.jobPosition)) &&
                (selectedAreas.length === 0 || selectedAreas.includes(employee.area)) &&
                (selectedAgeGroups.length === 0 || selectedAgeGroups.includes(employee.ageGroup)) &&
                (selectedCategories.length === 0 || selectedCategories.includes(employee.nineBoxCategory)) &&
                (selectedSkillLevels.length === 0 || selectedSkillLevels.includes(employee.skillLevel)) &&
                (selectedRiskLevels.length === 0 || selectedRiskLevels.includes(employee.risk)) &&
                (kpiRange === "" || employee.avgKPI >= parseInt(kpiRange)) &&
                (salesAchievementFilter === "all" || employee.salesAchievement === salesAchievementFilter)
            );
        });

        populateEmployeeTable(filteredData);
    }

    // Populate Initial Data
    populateEmployeeTable(employees);

    // Update KPI Range Display
    $("#kpiRange").on("input", function () {
        $("#kpiRangeValue").text(`${$(this).val()}%`);
    });

    // Filter Button Click
    $("#applyFilters").on("click", function () {
        applyFilters();
    });
});

</script>