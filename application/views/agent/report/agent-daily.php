<div class="content flex-row-fluid" id="kt_content">
    <div class="card">
        <div class="card-header row">
            <div class="col-md-6">
                <h3 class="card-title">Daily Agent Report</h3>
            </div>
            <div class="col-md-6 text-end">
                <div class=" px-4 py-2 rounded">
                    <label class="form-label mb-0 fw-bold">Agent ID:</label>
                    <span class="fw-bold fs-6 text-dark d-block">MCOGAA</span>
                    <small class="text-muted">Agent: Target77</small>
                </div>
            </div>
        </div>
        <div class="card-body">
            <!-- Date Range Filter -->
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="d-flex">
                    <div class="input-group me-2">
                        <input type="text" id="daterange" class="form-control" />
                    </div>
                </div>
                <div>
                    <button class="btn btn-light-success me-2" id="refreshReport">
                        <i class="fas fa-sync fs-4"></i>
                    </button>
                    <button class="btn btn-light-primary" id="exportReport">
                        <i class="ki-solid ki-download fs-4"></i> Export
                    </button>
                </div>
            </div>
            <!-- Table -->
            <div class="table-responsive">
                <table id="dailyAgentTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Active Player</th>
                            <th>New Player</th>
                            <th>Turnover</th>
                            <th>Win/Lose</th>
                            <th>Deposit</th>
                            <th>Withdraw</th>
                            <th>Deposit Adjustment</th>
                            <th>Withdraw Adjustment</th>
                            <th>Promotion</th>
                            <th>Referral</th>
                            <th>Bonus</th>
                            <th>Cashback</th>
                            <th>Commission Rebate</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample Data -->
                        <tr>
                            <td>2024-12-01</td>
                            <td class="text-end">12</td>
                            <td class="text-end">3</td>
                            <td class="text-end">10,000,000</td>
                            <td class="text-end">1,200,000</td>
                            <td class="text-end">5,000,000</td>
                            <td class="text-end">2,000,000</td>
                            <td class="text-end">500,000</td>
                            <td class="text-end">200,000</td>
                            <td class="text-end">300,000</td>
                            <td class="text-end">50,000</td>
                            <td class="text-end">0</td>
                            <td class="text-end">100,000</td>
                            <td class="text-end">25,000</td>
                        </tr>
                        <tr>
                            <td>2024-12-02</td>
                            <td class="text-end">15</td>
                            <td class="text-end">4</td>
                            <td class="text-end">12,000,000</td>
                            <td class="text-end">1,500,000</td>
                            <td class="text-end">6,000,000</td>
                            <td class="text-end">3,000,000</td>
                            <td class="text-end">600,000</td>
                            <td class="text-end">250,000</td>
                            <td class="text-end">400,000</td>
                            <td class="text-end">60,000</td>
                            <td class="text-end">0</td>
                            <td class="text-end">120,000</td>
                            <td class="text-end">30,000</td>
                        </tr>
                        <tr>
                            <td>2024-12-03</td>
                            <td class="text-end">8</td>
                            <td class="text-end">1</td>
                            <td class="text-end">8,500,000</td>
                            <td class="text-end">900,000</td>
                            <td class="text-end">4,500,000</td>
                            <td class="text-end">2,000,000</td>
                            <td class="text-end">450,000</td>
                            <td class="text-end">200,000</td>
                            <td class="text-end">300,000</td>
                            <td class="text-end">50,000</td>
                            <td class="text-end">0</td>
                            <td class="text-end">100,000</td>
                            <td class="text-end">25,000</td>
                        </tr>
                        <tr>
                            <td>2024-12-04</td>
                            <td class="text-end">10</td>
                            <td class="text-end">2</td>
                            <td class="text-end">9,000,000</td>
                            <td class="text-end">1,100,000</td>
                            <td class="text-end">4,000,000</td>
                            <td class="text-end">2,500,000</td>
                            <td class="text-end">500,000</td>
                            <td class="text-end">200,000</td>
                            <td class="text-end">400,000</td>
                            <td class="text-end">70,000</td>
                            <td class="text-end">0</td>
                            <td class="text-end">80,000</td>
                            <td class="text-end">25,000</td>
                        </tr>
                        <!-- Add 6 more rows similarly -->
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Total</th>
                            <th class="text-end">45</th>
                            <th class="text-end">10</th>
                            <th class="text-end">40,000,000</th>
                            <th class="text-end">4,700,000</th>
                            <th class="text-end">20,000,000</th>
                            <th class="text-end">10,000,000</th>
                            <th class="text-end">2,050,000</th>
                            <th class="text-end">850,000</th>
                            <th class="text-end">1,400,000</th>
                            <th class="text-end">230,000</th>
                            <th class="text-end">0</th>
                            <th class="text-end">400,000</th>
                            <th class="text-end">105,000</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        // Initialize date range picker

        $("#daterange").daterangepicker({
          opens: "left",
          autoApply: true,
          locale: {
            format: "DD-MM-YYYY",
          },
        });

        // Refresh report data
        $('#refreshReport').on('click', function () {
            const dateRange = $('#daterange').val();
            const agentId = $('#agentIdFilter').val();

            // Fetch filtered data using AJAX or similar method
            // Example:
            console.log('Fetching data for:', { dateRange, agentId });
            // AJAX Call to fetch data goes here
        });

        // Export report data
        $('#exportReport').on('click', function () {
            const dateRange = $('#daterange').val();
            const agentId = $('#agentIdFilter').val();

            // Trigger download or export action
            console.log('Exporting data for:', { dateRange, agentId });
            // AJAX Call or logic for export
        });
    });

</script>