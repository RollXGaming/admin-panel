<div class="content flex-row-fluid" id="kt_content">
    <div class="card">
        <div class="card-header">
            <div class="col-md-6">
                <h3 class="card-title">Agent Invoice Report</h3>
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
                            <th rowspan="2">Game Provider</th>
                            <th rowspan="2">Turnover</th>
                            <th colspan="3" class="text-center">Player</th>
                            <th colspan="2" class="text-center">Agent</th>
                            <th rowspan="2">Company Total</th>
                        </tr>
                        <tr>
                            <th>Win</th>
                            <th>Commission</th>
                            <th>Total</th>
                            <th>Win</th>
                            <th>Commission</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>aesexy</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>bigtimegaming</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>cq9</td>
                            <td>3,200</td>
                            <td>-200</td>
                            <td>0</td>
                            <td>-200</td>
                            <td>160</td>
                            <td>0</td>
                            <td>40</td>
                        </tr>
                        <tr>
                            <td>evolution</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>gmw</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>habanero</td>
                            <td>1,270,098</td>
                            <td>-503,760</td>
                            <td>0</td>
                            <td>-503,760</td>
                            <td>403,008</td>
                            <td>0</td>
                            <td>100,752</td>
                        </tr>
                        <tr>
                            <td>happyspin</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>ion</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>joker</td>
                            <td>23,985,000</td>
                            <td>815,100</td>
                            <td>0</td>
                            <td>815,100</td>
                            <td>-649,680</td>
                            <td>0</td>
                            <td>-165,420</td>
                        </tr>
                        <tr>
                            <td>mancala</td>
                            <td>92,700</td>
                            <td>-51,790</td>
                            <td>0</td>
                            <td>-51,790</td>
                            <td>41,432</td>
                            <td>0</td>
                            <td>10,358</td>
                        </tr>
                        <tr>
                            <td>microgaming</td>
                            <td>4,000</td>
                            <td>150</td>
                            <td>0</td>
                            <td>150</td>
                            <td>-120</td>
                            <td>0</td>
                            <td>-30</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Total</th>
                            <th>25,355,998</th>
                            <th>259,500</th>
                            <th>0</th>
                            <th>259,500</th>
                            <th>-205,200</th>
                            <th>0</th>
                            <th>-53,800</th>
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