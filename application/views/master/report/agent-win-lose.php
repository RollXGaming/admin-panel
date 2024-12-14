<div class="content flex-row-fluid" id="kt_content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Win Lose Agent Report</h3>
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
                            <th rowspan="2">Agent ID</th>
                            <th rowspan="2">User Name</th>
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
                            <td>MCOGAE</td>
                            <td>dinasti923</td>
                            <td>23,009,200</td>
                            <td>1,959,130</td>
                            <td>0</td>
                            <td>1,959,130</td>
                            <td>-1,567,304</td>
                            <td>0</td>
                            <td>-1,567,304</td>
                            <td>-137,139.1</td>
                            <td>0</td>
                            <td>-137,139.1</td>
                            <td>-254,686.9</td>
                        </tr>
                        <tr>
                            <td>MCOGAB</td>
                            <td>target77</td>
                            <td>15,000,500</td>
                            <td>1,200,050</td>
                            <td>50,000</td>
                            <td>1,250,050</td>
                            <td>-1,100,400</td>
                            <td>30,000</td>
                            <td>-1,070,400</td>
                            <td>-120,045.3</td>
                            <td>20,000</td>
                            <td>-100,045.3</td>
                            <td>-200,490.6</td>
                        </tr>
                        <tr>
                            <td>MCOGAC</td>
                            <td>disco77</td>
                            <td>18,500,750</td>
                            <td>1,800,070</td>
                            <td>70,000</td>
                            <td>1,870,070</td>
                            <td>-1,600,500</td>
                            <td>40,000</td>
                            <td>-1,560,500</td>
                            <td>-150,035.4</td>
                            <td>30,000</td>
                            <td>-120,035.4</td>
                            <td>-270,070.8</td>
                        </tr>
                        <tr>
                            <td>MCOGAD</td>
                            <td>ora923</td>
                            <td>20,000,000</td>
                            <td>2,000,000</td>
                            <td>80,000</td>
                            <td>2,080,000</td>
                            <td>-1,750,000</td>
                            <td>50,000</td>
                            <td>-1,700,000</td>
                            <td>-160,000.0</td>
                            <td>40,000</td>
                            <td>-120,000.0</td>
                            <td>-280,000.0</td>
                        </tr>
                        <tr>
                            <td>MCOGAF</td>
                            <td>ambonbet</td>
                            <td>22,000,500</td>
                            <td>2,200,050</td>
                            <td>90,000</td>
                            <td>2,290,050</td>
                            <td>-1,800,400</td>
                            <td>60,000</td>
                            <td>-1,740,400</td>
                            <td>-180,045.3</td>
                            <td>50,000</td>
                            <td>-130,045.3</td>
                            <td>-310,490.6</td>
                        </tr>
                        <tr>
                            <td>MCOGAG</td>
                            <td>humas303</td>
                            <td>25,000,700</td>
                            <td>2,500,070</td>
                            <td>100,000</td>
                            <td>2,600,070</td>
                            <td>-2,000,500</td>
                            <td>70,000</td>
                            <td>-1,930,500</td>
                            <td>-200,035.4</td>
                            <td>60,000</td>
                            <td>-140,035.4</td>
                            <td>-340,070.8</td>
                        </tr>
                        <tr>
                            <td>MCOGAH</td>
                            <td>mentari177</td>
                            <td>28,000,000</td>
                            <td>2,800,000</td>
                            <td>110,000</td>
                            <td>2,910,000</td>
                            <td>-2,200,000</td>
                            <td>80,000</td>
                            <td>-2,120,000</td>
                            <td>-220,000.0</td>
                            <td>70,000</td>
                            <td>-150,000.0</td>
                            <td>-370,000.0</td>
                        </tr>
                        <tr>
                            <td>MCOGAI</td>
                            <td>arto77</td>
                            <td>30,500,750</td>
                            <td>3,000,070</td>
                            <td>120,000</td>
                            <td>3,120,070</td>
                            <td>-2,400,500</td>
                            <td>90,000</td>
                            <td>-2,310,500</td>
                            <td>-240,035.4</td>
                            <td>80,000</td>
                            <td>-160,035.4</td>
                            <td>-400,070.8</td>
                        </tr>
                        <tr>
                            <td>MCOGAJ</td>
                            <td>rintik389</td>
                            <td>35,000,000</td>
                            <td>3,500,000</td>
                            <td>130,000</td>
                            <td>3,630,000</td>
                            <td>-2,750,000</td>
                            <td>100,000</td>
                            <td>-2,650,000</td>
                            <td>-270,000.0</td>
                            <td>90,000</td>
                            <td>-180,000.0</td>
                            <td>-450,000.0</td>
                        </tr>
                        <tr>
                            <td>MCOGAK</td>
                            <td>bravo188</td>
                            <td>40,000,500</td>
                            <td>4,000,050</td>
                            <td>150,000</td>
                            <td>4,150,050</td>
                            <td>-3,000,400</td>
                            <td>120,000</td>
                            <td>-2,880,400</td>
                            <td>-300,045.3</td>
                            <td>100,000</td>
                            <td>-200,045.3</td>
                            <td>-500,490.6</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">Total</th>
                            <th>280,511,100</th>
                            <th>28,409,570</th>
                            <th>930,000</th>
                            <th>29,339,570</th>
                            <th>-21,789,308</th>
                            <th>640,000</th>
                            <th>-21,149,308</th>
                            <th>-2,077,370.2</th>
                            <th>500,000</th>
                            <th>-1,577,370.2</th>
                            <th>-3,654,740.4</th>
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