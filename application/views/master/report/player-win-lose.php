<div class="content flex-row-fluid" id="kt_content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Player Win Lose Report</h3>
        </div>
        <div class="card-body">
            <!-- Filters -->
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="d-flex">
                    <div class="input-group me-2">
                        <button id="daterange" class="form-control border">
                            <i class="ki-solid ki-calendar fs-4"></i>
                            <span>Select Date Range</span>
                        </button>
                    </div>
                    <select class="form-select w-auto" id="agentIdFilter">
                        <option value="">Select Agent ID</option>
                        <option value="MCOGAE">MCOGAE</option>
                        <option value="MCOGAB">MCOGAB</option>
                        <option value="MCOGAC">MCOGAC</option>
                        <!-- Add more agent IDs as needed -->
                    </select>
                    <select class="form-select w-auto" id="agentIdFilter">
                        <option value="">Select Game ID</option>
                        <option value="pgsoft">PGSOFT</option>
                        <option value="PRAGMATIC">PRAGMATIC</option>
                        <!-- Add more agent IDs as needed -->
                    </select>
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
                            <th rowspan="2">Player ID</th>
                            <th rowspan="2">Username</th>
                            <th rowspan="2">Agent ID</th>
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
                        <!-- Sample Data Rows -->
                        <tr>
                            <td>MCOGAE02474</td>
                            <td>rungkat999</td>
                            <td>MCOGAE</td>
                            <td>804,200</td>
                            <td>47,712</td>
                            <td>0</td>
                            <td>47,712</td>
                            <td>-38,170</td>
                            <td>0</td>
                            <td>-38,170</td>
                            <td>-3,338</td>
                            <td>0</td>
                            <td>-3,338</td>
                            <td>-6,204</td>
                        </tr>
                        <tr>
                            <td>MCOGAE02475</td>
                            <td>jackpot88</td>
                            <td>MCOGAE</td>
                            <td>1,200,500</td>
                            <td>-60,025</td>
                            <td>0</td>
                            <td>-60,025</td>
                            <td>48,020</td>
                            <td>0</td>
                            <td>48,020</td>
                            <td>4,802</td>
                            <td>0</td>
                            <td>4,802</td>
                            <td>7,203</td>
                        </tr>
                        <tr>
                            <td>MCOGAE02476</td>
                            <td>luckyspin</td>
                            <td>MCOGAE</td>
                            <td>2,500,000</td>
                            <td>125,000</td>
                            <td>0</td>
                            <td>125,000</td>
                            <td>-100,000</td>
                            <td>0</td>
                            <td>-100,000</td>
                            <td>-10,000</td>
                            <td>0</td>
                            <td>-10,000</td>
                            <td>-15,000</td>
                        </tr>
                        <tr>
                            <td>MCOGAE02477</td>
                            <td>winbig777</td>
                            <td>MCOGAE</td>
                            <td>3,000,000</td>
                            <td>-150,000</td>
                            <td>0</td>
                            <td>-150,000</td>
                            <td>120,000</td>
                            <td>0</td>
                            <td>120,000</td>
                            <td>12,000</td>
                            <td>0</td>
                            <td>12,000</td>
                            <td>18,000</td>
                        </tr>
                        <tr>
                            <td>MCOGAE02478</td>
                            <td>spinmaster</td>
                            <td>MCOGAE</td>
                            <td>1,800,000</td>
                            <td>90,000</td>
                            <td>0</td>
                            <td>90,000</td>
                            <td>-72,000</td>
                            <td>0</td>
                            <td>-72,000</td>
                            <td>-7,200</td>
                            <td>0</td>
                            <td>-7,200</td>
                            <td>-10,800</td>
                        </tr>
                        <tr>
                            <td>MCOGAE02479</td>
                            <td>fortune88</td>
                            <td>MCOGAE</td>
                            <td>2,200,000</td>
                            <td>110,000</td>
                            <td>0</td>
                            <td>110,000</td>
                            <td>-88,000</td>
                            <td>0</td>
                            <td>-88,000</td>
                            <td>-8,800</td>
                            <td>0</td>
                            <td>-8,800</td>
                            <td>-13,200</td>
                        </tr>
                        <tr>
                            <td>MCOGAE02480</td>
                            <td>jackpotking</td>
                            <td>MCOGAE</td>
                            <td>4,000,000</td>
                            <td>-200,000</td>
                            <td>0</td>
                            <td>-200,000</td>
                            <td>160,000</td>
                            <td>0</td>
                            <td>160,000</td>
                            <td>16,000</td>
                            <td>0</td>
                            <td>16,000</td>
                            <td>24,000</td>
                        </tr>
                        <tr>
                            <td>MCOGAE02481</td>
                            <td>luckyplayer</td>
                            <td>MCOGAE</td>
                            <td>2,700,000</td>
                            <td>135,000</td>
                            <td>0</td>
                            <td>135,000</td>
                            <td>-108,000</td>
                            <td>0</td>
                            <td>-108,000</td>
                            <td>-10,800</td>
                            <td>0</td>
                            <td>-10,800</td>
                            <td>-16,200</td>
                        </tr>
                        <tr>
                            <td>MCOGAE02482</td>
                            <td>megawin</td>
                            <td>MCOGAE</td>
                            <td>5,000,000</td>
                            <td>250,000</td>
                            <td>0</td>
                            <td>250,000</td>
                            <td>-200,000</td>
                            <td>0</td>
                            <td>-200,000</td>
                            <td>-20,000</td>
                            <td>0</td>
                            <td>-20,000</td>
                            <td>-30,000</td>
                        </tr>
                        <tr>
                            <td>MCOGAE02483</td>
                            <td>spinwinner</td>
                            <td>MCOGAE</td>
                            <td>3,500,000</td>
                            <td>-175,000</td>
                            <td>0</td>
                            <td>-175,000</td>
                            <td>140,000</td>
                            <td>0</td>
                            <td>140,000</td>
                            <td>14,000</td>
                            <td>0</td>
                            <td>14,000</td>
                            <td>21,000</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3">Total</th>
                            <th>26,204,700</th>
                            <th>272,687</th>
                            <th>0</th>
                            <th>272,687</th>
                            <th>-217,850</th>
                            <th>0</th>
                            <th>-217,850</th>
                            <th>-21,536</th>
                            <th>0</th>
                            <th>-21,536</th>
                            <th>-33,301</th>
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