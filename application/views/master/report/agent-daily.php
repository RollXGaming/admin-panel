<div class="content flex-row-fluid" id="kt_content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daily Agent Report</h3>
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
                            <th>Agent ID</th>
                            <th>Username</th>
                            <th>Active Player</th>
                            <th>New Player</th>
                            <th>Turnover</th>
                            <th>Winlose</th>
                            <th>Deposit</th>
                            <th>Deposit</th>
                            <th>Withdraw</th>
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
                        <tr>
                            <td>MCOGAA</td>
                            <td>target77</td>
                            <td>12</td>
                            <td>3</td>
                            <td>10,000,000</td>
                            <td>1,200,000</td>
                            <td>5,000,000</td>
                            <td>45</td>
                            <td>2,000,000</td>
                            <td>15</td>
                            <td>500,000</td>
                            <td>200,000</td>
                            <td>300,000</td>
                            <td>50,000</td>
                            <td>0</td>
                            <td>100,000</td>
                            <td>25,000</td>
                        </tr>
                        <tr>
                            <td>MCOGAB</td>
                            <td>autojp88</td>
                            <td>5</td>
                            <td>1</td>
                            <td>6,500,000</td>
                            <td>800,000</td>
                            <td>2,500,000</td>
                            <td>10</td>
                            <td>1,000,000</td>
                            <td>5</td>
                            <td>300,000</td>
                            <td>100,000</td>
                            <td>150,000</td>
                            <td>25,000</td>
                            <td>0</td>
                            <td>50,000</td>
                            <td>10,000</td>
                        </tr>
                        <tr>
                            <td>MCOGAC</td>
                            <td>disco77</td>
                            <td>7</td>
                            <td>2</td>
                            <td>8,000,000</td>
                            <td>900,000</td>
                            <td>4,000,000</td>
                            <td>20</td>
                            <td>1,800,000</td>
                            <td>10</td>
                            <td>400,000</td>
                            <td>150,000</td>
                            <td>200,000</td>
                            <td>35,000</td>
                            <td>0</td>
                            <td>80,000</td>
                            <td>20,000</td>
                        </tr>
                        <tr>
                            <td>MCOGAD</td>
                            <td>ora923</td>
                            <td>9</td>
                            <td>4</td>
                            <td>12,000,000</td>
                            <td>1,500,000</td>
                            <td>6,000,000</td>
                            <td>30</td>
                            <td>3,000,000</td>
                            <td>20</td>
                            <td>600,000</td>
                            <td>250,000</td>
                            <td>400,000</td>
                            <td>60,000</td>
                            <td>0</td>
                            <td>120,000</td>
                            <td>30,000</td>
                        </tr>
                        <tr>
                            <td>MCOGAE</td>
                            <td>dinasti923</td>
                            <td>28</td>
                            <td>1</td>
                            <td>23,009,200</td>
                            <td>1,959,130</td>
                            <td>3,057,500</td>
                            <td>31</td>
                            <td>6,134,800</td>
                            <td>9</td>
                            <td>0</td>
                            <td>0</td>
                            <td>5,500</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>MCOGAF</td>
                            <td>ambonbet</td>
                            <td>15</td>
                            <td>5</td>
                            <td>18,000,000</td>
                            <td>2,000,000</td>
                            <td>7,000,000</td>
                            <td>50</td>
                            <td>4,000,000</td>
                            <td>25</td>
                            <td>800,000</td>
                            <td>400,000</td>
                            <td>600,000</td>
                            <td>90,000</td>
                            <td>0</td>
                            <td>150,000</td>
                            <td>40,000</td>
                        </tr>
                        <tr>
                            <td>MCOGAG</td>
                            <td>humas303</td>
                            <td>10</td>
                            <td>3</td>
                            <td>14,000,000</td>
                            <td>1,700,000</td>
                            <td>5,500,000</td>
                            <td>40</td>
                            <td>3,500,000</td>
                            <td>18</td>
                            <td>700,000</td>
                            <td>350,000</td>
                            <td>500,000</td>
                            <td>75,000</td>
                            <td>0</td>
                            <td>100,000</td>
                            <td>25,000</td>
                        </tr>
                        <tr>
                            <td>MCOGAH</td>
                            <td>mentari177</td>
                            <td>20</td>
                            <td>6</td>
                            <td>25,000,000</td>
                            <td>3,000,000</td>
                            <td>10,000,000</td>
                            <td>70</td>
                            <td>5,000,000</td>
                            <td>35</td>
                            <td>1,200,000</td>
                            <td>500,000</td>
                            <td>800,000</td>
                            <td>120,000</td>
                            <td>0</td>
                            <td>200,000</td>
                            <td>50,000</td>
                        </tr>
                        <tr>
                            <td>MCOGAI</td>
                            <td>arto77</td>
                            <td>8</td>
                            <td>2</td>
                            <td>9,000,000</td>
                            <td>1,100,000</td>
                            <td>4,500,000</td>
                            <td>35</td>
                            <td>2,500,000</td>
                            <td>15</td>
                            <td>600,000</td>
                            <td>200,000</td>
                            <td>300,000</td>
                            <td>50,000</td>
                            <td>0</td>
                            <td>100,000</td>
                            <td>25,000</td>
                        </tr>
                        <tr>
                            <td>MCOGAJ</td>
                            <td>rintik389</td>
                            <td>5</td>
                            <td>1</td>
                            <td>6,000,000</td>
                            <td>800,000</td>
                            <td>2,000,000</td>
                            <td>10</td>
                            <td>1,000,000</td>
                            <td>5</td>
                            <td>300,000</td>
                            <td>100,000</td>
                            <td>150,000</td>
                            <td>25,000</td>
                            <td>0</td>
                            <td>50,000</td>
                            <td>10,000</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">Total</th>
                            <th>112</th>
                            <th>28</th>
                            <th>127,009,200</th>
                            <th>16,959,130</th>
                            <th>46,057,500</th>
                            <th>341</th>
                            <th>27,634,800</th>
                            <th>176</th>
                            <th>5,500,000</th>
                            <th>2,250,000</th>
                            <th>3,300,000</th>
                            <th>580,000</th>
                            <th>0</th>
                            <th>1,050,000</th>
                            <th>260,000</th>
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