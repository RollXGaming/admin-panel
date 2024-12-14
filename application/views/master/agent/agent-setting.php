<div class="content flex-row-fluid" id="kt_content">
    <div class="container-xxl">
        <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold">Agent Settings</h1>
            <button class="btn btn-light btn-sm" onclick="location.reload()">
                <i class="fas fa-sync"></i> Refresh
            </button>
        </div>

        <!-- Agent Settings Table -->
        <div class="card">
            <div class="card-header d-flex justify-content-end">
                <!-- Edit Button -->
                <button id="editButton" class="btn btn-primary btn-sm" disabled data-bs-toggle="modal" data-bs-target="#editModal">
                    <i class="fas fa-edit"></i> Edit
                </button>
            </div>
            <div class="card-body">
                <table id="agentSettingsTable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="selectAllCheckbox" /></th>
                            <th>#</th>
                            <th>Agent ID</th>
                            <th>Agent Name</th>
                            <th>PT</th>
                            <th>Max PT</th>
                            <th>Commission %</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="rowCheckbox" /></td>
                            <td>1</td>
                            <td>MCOGAA</td>
                            <td>Target77</td>
                            <td>80%</td>
                            <td>87%</td>
                            <td>5%</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="rowCheckbox" /></td>
                            <td>2</td>
                            <td>MCOGAB</td>
                            <td>Autojp88</td>
                            <td>80%</td>
                            <td>87%</td>
                            <td>6%</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="rowCheckbox" /></td>
                            <td>3</td>
                            <td>MCOGAC</td>
                            <td>Disco77</td>
                            <td>80%</td>
                            <td>87%</td>
                            <td>7%</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="rowCheckbox" /></td>
                            <td>4</td>
                            <td>MCOGAD</td>
                            <td>Ora923</td>
                            <td>80%</td>
                            <td>87%</td>
                            <td>5%</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="rowCheckbox" /></td>
                            <td>5</td>
                            <td>MCOGAE</td>
                            <td>dinasti923</td>
                            <td>80%</td>
                            <td>87%</td>
                            <td>8%</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit PT and Commission</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    <div class="mb-3">
                        <label for="tpPercentage" class="form-label">New TP%</label>
                        <input type="number" class="form-control" id="tpPercentage" placeholder="Enter new TP%" min="0" max="100" required />
                    </div>
                    <div class="mb-3">
                        <label for="commissionPercentage" class="form-label">New Commission%</label>
                        <input type="number" class="form-control" id="commissionPercentage" placeholder="Enter new Commission%" min="0" max="100" required />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" id="saveButton" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        // Enable Edit button only if at least one checkbox is checked
        $('.rowCheckbox, #selectAllCheckbox').on('change', function () {
            const isAnyChecked = $('.rowCheckbox:checked').length > 0;
            $('#editButton').prop('disabled', !isAnyChecked);

            // Toggle all rows if the "Select All" checkbox is clicked
            if ($(this).attr('id') === 'selectAllCheckbox') {
                $('.rowCheckbox').prop('checked', $(this).is(':checked'));
            }
        });

        // Save new TP% and Commission%
        $('#saveButton').on('click', function () {
            const tpPercentage = $('#tpPercentage').val();
            const commissionPercentage = $('#commissionPercentage').val();

            if (tpPercentage && commissionPercentage) {
                alert(`New TP%: ${tpPercentage}\nNew Commission%: ${commissionPercentage}`);
                $('#editModal').modal('hide');
                // Add logic to update values in the backend
            } else {
                alert('Please fill in all fields.');
            }
        });
    });
</script>
