<style>
    #reportDate {
        width: 250px;
    }

    #creditTable tbody tr td.text-danger {
        color: #dc3545; /* Bootstrap danger color */
        font-weight: bold;
    }

    #creditTable tbody tr td.text-success {
        color: #28a745; /* Bootstrap success color */
        font-weight: bold;
    }
</style>

<div class="content flex-row-fluid" id="kt_content">
    <div class="container-xxl">
        <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold">Credit History</h1>
            <button class="btn btn-light btn-sm" onclick="location.reload()">
                <i class="fas fa-sync"></i> Refresh
            </button>
        </div>

        <!-- Filter Section -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center">
                <label for="agentFilter" class="me-2 fw-bold">Agent:</label>
                <select id="agentFilter" class="form-select form-select-sm">
                    <option value="">All Agents</option>
                    <option value="MCOGAE">MCOGAE</option>
                    <option value="MCOGAA">MCOGAA</option>
                    <option value="MCOGAB">MCOGAB</option>
                    <option value="MCOGAC">MCOGAC</option>
                    <option value="MCOGAD">MCOGAD</option>
                </select>
            </div>
            <div class="d-flex align-items-center">
                <label for="reportDate" class="me-2 fw-bold">Report Date:</label>
                <input type="text" id="reportDate" class="form-control form-control-sm" value="01 June 2024 - 31 December 2024" readonly />
            </div>
        </div>

        <!-- Credit History Table -->
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover" id="creditTable">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Transaction ID</th>
                            <th>Transaction Category</th>
                            <th>Username / ID</th>
                            <th>Amount</th>
                            <th>Description</th>
                            <th>Action By</th>
                            <th>Status</th>
                            <th>Rejected Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Data -->
                        <tr>
                            <td>2024-12-10 09:15:24</td>
                            <td>a7f4c2e1-8459-4d12-9ebf-bc0946d9b8a1</td>
                            <td>Player Deposit</td>
                            <td>dinasti923 / MCOGAE</td>
                            <td class="text-success">+5,000,000</td>
                            <td>Player deposit credited</td>
                            <td>System</td>
                            <td>Approved</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>2024-12-10 10:25:43</td>
                            <td>ff2e931a-6c77-4b23-b012-785f4e244fad</td>
                            <td>Player Withdrawal</td>
                            <td>target77 / MCOGAB</td>
                            <td class="text-danger">-2,000,000</td>
                            <td>Player withdrawal deducted</td>
                            <td>System</td>
                            <td>Approved</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>2024-12-10 11:30:15</td>
                            <td>81dafa4d-0f84-42f8-bf4d-91a2035e648a</td>
                            <td>Agent Deposit</td>
                            <td>disco77 / MCOGAC</td>
                            <td class="text-success">+10,000,000</td>
                            <td>Agent deposit credited</td>
                            <td>System</td>
                            <td>Approved</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>2024-12-10 13:45:52</td>
                            <td>ddf64a10-81b3-4fb3-b4c8-29b73fa4b7a4</td>
                            <td>Agent Withdrawal</td>
                            <td>ora923 / MCOGAD</td>
                            <td class="text-danger">-6,000,000</td>
                            <td>Agent withdrawal deducted</td>
                            <td>System</td>
                            <td>Approved</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>2024-12-10 15:10:35</td>
                            <td>afe23456-2f5c-4a65-9873-c82158f69a12</td>
                            <td>Player Deposit</td>
                            <td>mentari177 / MCOGAH</td>
                            <td class="text-success">+3,000,000</td>
                            <td>Player deposit credited</td>
                            <td>System</td>
                            <td>Approved</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>2024-12-10 17:25:41</td>
                            <td>bc90e4c7-d1f8-4b47-abe3-6c914e1f42aa</td>
                            <td>Agent Withdrawal</td>
                            <td>arto77 / MCOGAI</td>
                            <td class="text-danger">-4,500,000</td>
                            <td>Agent withdrawal deducted</td>
                            <td>System</td>
                            <td>Approved</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>2024-12-10 18:50:09</td>
                            <td>ea243b3f-90cd-4e11-b1b4-438f6e06dc32</td>
                            <td>Player Withdrawal</td>
                            <td>ambonbet / MCOGAF</td>
                            <td class="text-danger">-1,000,000</td>
                            <td>Player withdrawal deducted</td>
                            <td>System</td>
                            <td>Approved</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>2024-12-10 19:30:22</td>
                            <td>d5b91231-60b7-4a3b-9b09-621f5d8a5f4d</td>
                            <td>Agent Deposit</td>
                            <td>mentari177 / MCOGAH</td>
                            <td class="text-success">+2,000,000</td>
                            <td>Agent deposit credited</td>
                            <td>System</td>
                            <td>Approved</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>2024-12-10 20:45:18</td>
                            <td>13fe4456-11a8-4e3a-b8b1-a4128f6486e1</td>
                            <td>Player Deposit</td>
                            <td>humas303 / MCOGAG</td>
                            <td class="text-success">+4,000,000</td>
                            <td>Player deposit credited</td>
                            <td>System</td>
                            <td>Approved</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>2024-12-10 22:10:01</td>
                            <td>dc45ef09-4ea8-4b1e-bc1f-58a46e4c5b3a</td>
                            <td>Player Withdrawal</td>
                            <td>rintik389 / MCOGAJ</td>
                            <td class="text-danger">-2,000,000</td>
                            <td>Player withdrawal deducted</td>
                            <td>System</td>
                            <td>Approved</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>

<script>
    $(document).ready(function () {
        // Initialize DataTable
        $('#creditTable').DataTable({
        });

        // Report Date Range Picker
        $('#reportDate').daterangepicker({
            locale: {
                format: 'DD MMM YYYY'
            }
        });

        // Filter Button
        $('#filterButton').on('click', function () {
            alert('Filter functionality is not implemented yet!');
        });
    });
</script>
