<div class="content flex-row-fluid" id="kt_content">
    <div class="container-xxl">
        <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold">Activity Logs</h1>
            <button class="btn btn-light btn-sm" onclick="location.reload()">
                <i class="fas fa-sync"></i> Refresh
            </button>
        </div>

        <!-- Filter Section -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center">
                <label for="dateRange" class="me-2 fw-bold">Date Range:</label>
                <input type="text" id="dateRange" class="form-control form-control-sm" readonly />
            </div>
        </div>

        <!-- Logs Table -->
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover" id="logsTable">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>User</th>
                            <th>Action</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Data -->
                        <tr>
                            <td>2024-12-08 21:57:58</td>
                            <td>dinasti923</td>
                            <td>Login</td>
                            <td>Successfully logged in</td>
                        </tr>
                        <tr>
                            <td>2024-12-07 20:04:18</td>
                            <td>oragaming</td>
                            <td>Add IP</td>
                            <td>Added IP 103.84.7.71 to whitelist</td>
                        </tr>
                        <tr>
                            <td>2024-12-04 14:45:06</td>
                            <td>target77</td>
                            <td>Remove IP</td>
                            <td>Removed IP 116.212.153.82 from whitelist</td>
                        </tr>
                        <tr>
                            <td>2024-12-02 02:03:07</td>
                            <td>ora923</td>
                            <td>Failed Login</td>
                            <td>Attempted login with invalid credentials</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<script>
    $(document).ready(function () {
        // Initialize Date Range Picker
        $('#dateRange').daterangepicker({
            locale: {
                format: 'DD MMM YYYY'
            },
            startDate: '01 Dec 2024',
            endDate: '31 Dec 2024'
        });

        // Initialize DataTable
        let table = $('#logsTable').DataTable({
        });

        // Filter Logs by Date Range
        $('#dateRange').on('apply.daterangepicker', function (ev, picker) {
            let startDate = picker.startDate.format('YYYY-MM-DD');
            let endDate = picker.endDate.format('YYYY-MM-DD');

            table.rows().every(function () {
                let date = $(this.node()).find('td:first').text();
                let logDate = new Date(date);
                let start = new Date(startDate);
                let end = new Date(endDate);

                $(this.node()).toggle(logDate >= start && logDate <= end);
            });
        });
    });
</script>
