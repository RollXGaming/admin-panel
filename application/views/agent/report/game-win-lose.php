<div class="content flex-row-fluid" id="kt_content">
    <div class="card">
        <div class="card-header">
            <div class="col-md-6">
                <h3 class="card-title">Game Lose Agent Report</h3>
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
            
            <!-- Filters -->
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
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th rowspan="2">Game</th>
                            <th rowspan="2">Turnover</th>
                            <th colspan="3" class="text-center">Player</th>
                            <th colspan="3" class="text-center">Agent</th>
                            <th colspan="3" class="text-center">Master Agent</th>
                            <th rowspan="2">Company Total</th>
                        </tr>
                        <tr>
                            <th>Win</th>
                            <th>Commission</th>
                            <th>Total</th>
                            <th>Win</th>
                            <th>Commission</th>
                            <th>Total</th>
                            <th>Win</th>
                            <th>Commission</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>pgsoft slot</td>
                            <td>10,450,200</td>
                            <td>480,320</td>
                            <td>0</td>
                            <td>480,320</td>
                            <td>-380,500</td>
                            <td>0</td>
                            <td>-380,500</td>
                            <td>-33,200</td>
                            <td>0</td>
                            <td>-33,200</td>
                            <td>-72,380</td>
                        </tr>
                        <tr>
                            <td>playstar slot</td>
                            <td>1,200,450</td>
                            <td>-120,640</td>
                            <td>0</td>
                            <td>-120,640</td>
                            <td>88,150</td>
                            <td>0</td>
                            <td>88,150</td>
                            <td>9,760</td>
                            <td>0</td>
                            <td>9,760</td>
                            <td>-22,730</td>
                        </tr>
                        <tr>
                            <td>pragmaticplay slot</td>
                            <td>13,005,000</td>
                            <td>1,800,500</td>
                            <td>0</td>
                            <td>1,800,500</td>
                            <td>-1,200,400</td>
                            <td>0</td>
                            <td>-1,200,400</td>
                            <td>-110,800</td>
                            <td>0</td>
                            <td>-110,800</td>
                            <td>-300,700</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Total</th>
                            <th>24,655,650</th>
                            <th>2,160,180</th>
                            <th>0</th>
                            <th>2,160,180</th>
                            <th>-1,492,750</th>
                            <th>0</th>
                            <th>-1,492,750</th>
                            <th>-134,240</th>
                            <th>0</th>
                            <th>-134,240</th>
                            <th>-327,470</th>
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
        $('#daterange').daterangepicker({
            opens: 'left',
            locale: {
                format: 'DD MMMM YYYY',
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