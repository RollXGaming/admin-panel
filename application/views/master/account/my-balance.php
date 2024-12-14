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
                            <td>2024-12-08 21:57:58</td>
                            <td>0193a6c6-fa6e-dde7-0ce9-aaa411dc62a8</td>
                            <td>Send</td>
                            <td>dinasti923 / MCOGAE</td>
                            <td class="text-danger">-100,000,000</td>
                            <td>-</td>
                            <td>Rolex Gaming</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>2024-12-07 20:04:18</td>
                            <td>0193a138-8ea2-9740-4525-28299035b561</td>
                            <td>Receive</td>
                            <td>target77 / MCOGAA</td>
                            <td class="text-success">40,647,803</td>
                            <td>-</td>
                            <td>Rolex Gaming</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>2024-12-04 14:45:06</td>
                            <td>019390a1-3cfb-c553-97fa-747f46c87baa</td>
                            <td>Receive</td>
                            <td>ora923 / MCOGAD</td>
                            <td class="text-success">7,962,025.36</td>
                            <td>-</td>
                            <td>Rolex Gaming</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>2024-12-02 02:03:07</td>
                            <td>0193839a-e8ea-6435-e56e-7fc6fd03e059</td>
                            <td>Send</td>
                            <td>target77 / MCOGAA</td>
                            <td class="text-danger">-50,000,000</td>
                            <td>-</td>
                            <td>Rolex Gaming</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>2024-12-02 02:02:58</td>
                            <td>0193839a-c3ed-c60e-bb0b-892bc3929b73</td>
                            <td>Receive</td>
                            <td>ora923 / MCOGAD</td>
                            <td class="text-success">50,000,000</td>
                            <td>-</td>
                            <td>Rolex Gaming</td>
                            <td>-</td>
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
