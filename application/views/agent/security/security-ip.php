<div class="content flex-row-fluid" id="kt_content">
    <div class="container-xxl">
        <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold">BO Whitelist IP</h1>
            <button class="btn btn-light btn-sm" onclick="location.reload()">
                <i class="fas fa-sync"></i> Refresh
            </button>
        </div>

        <!-- Filter Section -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <button class="btn btn-success" id="addButton">
                <i class="fas fa-plus"></i> Add
            </button>
        </div>

        <!-- IP List Table -->
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover" id="ipTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Action</th>
                            <th>Whitelist IP</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Data -->
                        <tr>
                            <td>1</td>
                            <td><i class="fas fa-times text-danger cursor-pointer" title="Remove"></i></td>
                            <td>103.84.7.71</td>
                            <td>ip</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><i class="fas fa-times text-danger cursor-pointer" title="Remove"></i></td>
                            <td>116.212.153.82</td>
                            <td>IP</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><i class="fas fa-times text-danger cursor-pointer" title="Remove"></i></td>
                            <td>138.199.60.176</td>
                            <td>IT</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><i class="fas fa-times text-danger cursor-pointer" title="Remove"></i></td>
                            <td>175.158.47.26</td>
                            <td>cs@@2211</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add/Edit Modal -->
<div class="modal fade" id="ipModal" tabindex="-1" aria-labelledby="ipModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ipModalLabel">Add IP</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="ipForm">
                    <div class="mb-3">
                        <label for="ipAddress" class="form-label">IP Address</label>
                        <input type="text" class="form-control" id="ipAddress" required />
                    </div>
                    <div class="mb-3">
                        <label for="ipType" class="form-label">Type</label>
                        <select class="form-select" id="ipType" required>
                            <option value="">Select Type</option>
                            <option value="Whitelist">Whitelist</option>
                            <option value="Blacklist">Blacklist</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="ipNote" class="form-label">Note</label>
                        <textarea class="form-control" id="ipNote" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveButton">Save</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        // Add Button Click
        $('#addButton').on('click', function () {
            $('#ipModalLabel').text('Add IP');
            $('#ipForm')[0].reset();
            $('#ipModal').modal('show');
        });

        // Save Button Click
        $('#saveButton').on('click', function () {
            const ipAddress = $('#ipAddress').val();
            const ipType = $('#ipType').val();
            const ipNote = $('#ipNote').val();

            if (ipAddress && ipType) {
                const newRow = `
                    <tr>
                        <td>#</td>
                        <td><i class="fas fa-times text-danger cursor-pointer" title="Remove"></i></td>
                        <td>${ipAddress}</td>
                        <td>${ipNote}</td>
                    </tr>
                `;
                $('#ipTable tbody').append(newRow);
                $('#ipModal').modal('hide');
            } else {
                alert('Please fill in all required fields.');
            }
        });

        // Remove IP Action
        $('#ipTable').on('click', '.fa-times', function () {
            $(this).closest('tr').remove();
        });
    });
</script>
