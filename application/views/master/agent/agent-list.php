<div class="content flex-row-fluid" id="kt_content">
    <div class="container-xxl">
        <!-- Page Header -->
        <div class="row align-items-center mb-4">
          <div class='col-md-3'>
            <h1 class="fw-bold mb-0">Agent</h1>
          </div>
          <!-- Total Agents -->
          <div class="col-md-3 text-end">
            <div class="bg-light-primary px-4 py-2 rounded">
              <label class="form-label mb-0">Total Agents:</label>
              <span class="fw-bold fs-4 text-dark d-block">100</span>
              <small class="text-muted" style="font-size: 12px;">Total registered agents</small>
            </div>
          </div>
          <!-- Total Agent Balance -->
          <div class="col-md-3 text-end">
            <div class="bg-light-success px-4 py-2 rounded">
              <label class="form-label mb-0">Total Balance:</label>
              <span class="fw-bold fs-4 text-dark d-block">Rp 500,000,000</span>
              <small class="text-muted" style="font-size: 12px;">Total credit balance</small>
            </div>
          </div>
          <!-- Total Agent Turnover 30 Days -->
          <div class="col-md-3 text-end">
            <div class="bg-light-warning px-4 py-2 rounded">
              <label class="form-label mb-0">Turnover (30 Days):</label>
              <span class="fw-bold fs-4 text-dark d-block">Rp 50,000,000</span>
              <small class="text-muted" style="font-size: 12px;">Total agent turnover</small>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-4">
            
        </div>

        <!-- Agent List Table -->
        <div class="card">
            
            <div class="card-body">
                <table id="agentTable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Details</th>
                            <th>Status</th>
                            <th>Agent ID</th>
                            <th>Username</th>
                            <th>Full Name</th>
                            <th>Created Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <button class="btn btn-primary btn-sm view-details" data-bs-toggle="modal" data-bs-target="#agentModal" 
                                    data-id="1" 
                                    data-username="dinasti923" 
                                    data-fullname="Dinasti923" 
                                    data-phone="+62 82216161757" 
                                    data-email="dinasti923@gmail.com" 
                                    data-status="Active">
                                    Details
                                </button>
                            </td>
                            <td>Active</td>
                            <td>AGENT001</td>
                            <td>dinasti923</td>
                            <td>Dinasti923</td>
                            <td>25-10-2023, 14:53:52</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <button class="btn btn-primary btn-sm view-details" data-bs-toggle="modal" data-bs-target="#agentModal" 
                                    data-id="2" 
                                    data-username="target77" 
                                    data-fullname="Target77" 
                                    data-phone="+62 81234567890" 
                                    data-email="target77@example.com" 
                                    data-status="Suspended">
                                    Details
                                </button>
                            </td>
                            <td>Suspended</td>
                            <td>AGENT002</td>
                            <td>target77</td>
                            <td>Target77</td>
                            <td>04-09-2023, 12:45:37</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <button class="btn btn-primary btn-sm view-details" data-bs-toggle="modal" data-bs-target="#agentModal" 
                                    data-id="3" 
                                    data-username="autojp88" 
                                    data-fullname="Autojp88" 
                                    data-phone="+62 81987654321" 
                                    data-email="autojp88@example.com" 
                                    data-status="Suspended">
                                    Details
                                </button>
                            </td>
                            <td>Suspended</td>
                            <td>AGENT003</td>
                            <td>autojp88</td>
                            <td>Autojp88</td>
                            <td>09-09-2023, 16:00:14</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <button class="btn btn-primary btn-sm view-details" data-bs-toggle="modal" data-bs-target="#agentModal" 
                                    data-id="4" 
                                    data-username="disco77" 
                                    data-fullname="Disco77" 
                                    data-phone="+62 82234567890" 
                                    data-email="disco77@example.com" 
                                    data-status="Suspended">
                                    Details
                                </button>
                            </td>
                            <td>Suspended</td>
                            <td>AGENT004</td>
                            <td>disco77</td>
                            <td>Disco77</td>
                            <td>29-09-2023, 18:25:18</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                <button class="btn btn-primary btn-sm view-details" data-bs-toggle="modal" data-bs-target="#agentModal" 
                                    data-id="5" 
                                    data-username="ora923" 
                                    data-fullname="Ora923" 
                                    data-phone="+62 82123456789" 
                                    data-email="ora923@example.com" 
                                    data-status="Suspended">
                                    Details
                                </button>
                            </td>
                            <td>Suspended</td>
                            <td>AGENT005</td>
                            <td>ora923</td>
                            <td>Ora923</td>
                            <td>16-10-2023, 12:06:47</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                <button class="btn btn-primary btn-sm view-details" data-bs-toggle="modal" data-bs-target="#agentModal" 
                                    data-id="6" 
                                    data-username="dinasti924" 
                                    data-fullname="Dinasti924" 
                                    data-phone="+62 81198765432" 
                                    data-email="dinasti924@example.com" 
                                    data-status="Active">
                                    Details
                                </button>
                            </td>
                            <td>Active</td>
                            <td>AGENT006</td>
                            <td>dinasti924</td>
                            <td>Dinasti924</td>
                            <td>30-10-2023, 15:50:13</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>
                                <button class="btn btn-primary btn-sm view-details" data-bs-toggle="modal" data-bs-target="#agentModal" 
                                    data-id="7" 
                                    data-username="ambonbet" 
                                    data-fullname="Ambonbet" 
                                    data-phone="+62 81876543210" 
                                    data-email="ambonbet@example.com" 
                                    data-status="Suspended">
                                    Details
                                </button>
                            </td>
                            <td>Suspended</td>
                            <td>AGENT007</td>
                            <td>ambonbet</td>
                            <td>Ambonbet</td>
                            <td>30-10-2023, 15:59:31</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>
                                <button class="btn btn-primary btn-sm view-details" data-bs-toggle="modal" data-bs-target="#agentModal" 
                                    data-id="8" 
                                    data-username="mentari177" 
                                    data-fullname="Mentari177" 
                                    data-phone="+62 81234509876" 
                                    data-email="mentari177@example.com" 
                                    data-status="Suspended">
                                    Details
                                </button>
                            </td>
                            <td>Suspended</td>
                            <td>AGENT008</td>
                            <td>mentari177</td>
                            <td>Mentari177</td>
                            <td>05-01-2024, 10:49:08</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>
                                <button class="btn btn-primary btn-sm view-details" data-bs-toggle="modal" data-bs-target="#agentModal" 
                                    data-id="9" 
                                    data-username="arto77" 
                                    data-fullname="Arto77" 
                                    data-phone="+62 81230987654" 
                                    data-email="arto77@example.com" 
                                    data-status="Active">
                                    Details
                                </button>
                            </td>
                            <td>Active</td>
                            <td>AGENT009</td>
                            <td>arto77</td>
                            <td>Arto77</td>
                            <td>11-01-2024, 13:06:21</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>
                                <button class="btn btn-primary btn-sm view-details" data-bs-toggle="modal" data-bs-target="#agentModal" 
                                    data-id="10" 
                                    data-username="rintik389" 
                                    data-fullname="Rintik389" 
                                    data-phone="+62 82290123456" 
                                    data-email="rintik389@example.com" 
                                    data-status="Suspended">
                                    Details
                                </button>
                            </td>
                            <td>Suspended</td>
                            <td>AGENT010</td>
                            <td>rintik389</td>
                            <td>Rintik389</td>
                            <td>27-03-2024, 15:49:38</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
<!-- Agent Details Modal -->
<div class="modal fade" id="agentModal" tabindex="-1" aria-labelledby="agentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agentModalLabel">Agent Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Profile Settings Section -->
                <div class="row mb-4">
                    <div class="col-md-3 text-center">
                        <div class="avatar mb-2">
                            <div class="symbol symbol-100px bg-light-primary text-primary fw-bold fs-2">D</div>
                        </div>
                        <p class="fw-bold mb-0">Username: <span id="modalUsername"></span></p>
                        <p class="fw-bold">Full Name: <span id="modalFullname"></span></p>
                    </div>
                    <div class="col-md-9">
                        <h6 class="fw-bold">Profile Settings</h6>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" id="modalProfileUsername" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control" id="modalPhone" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" id="modalEmail" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <input type="text" class="form-control" id="modalStatus" readonly>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Whitelist IP Section -->
                <h6 class="fw-bold">BO Whitelist IP</h6>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Action</th>
                            <th>Whitelist IP</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4" class="text-center">No Result Found</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Google Authenticator Section -->
                <h6 class="fw-bold mt-4">Google Authenticator</h6>
                <p>Scan this barcode with Google Authenticator or input the provided key to get the OTP code</p>
                <div class="d-flex align-items-center">
                    <input type="text" class="form-control me-3" value="XKXZV3D2BFYSKUCU" readonly>
                    <button class="btn btn-light btn-sm" onclick="navigator.clipboard.writeText('XKXZV3D2BFYSKUCU')">
                        <i class="fas fa-copy"></i> Copy
                    </button>
                    <div class="ms-3">
                        <img src="https://via.placeholder.com/150" alt="QR Code" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        // Initialize DataTable
        var table = $('#agentTable').DataTable({
            dom: 'lrtip',
            pageLength: 10,
            responsive: true
        });

        // Mask Agent ID and Full Name
        $('#agentTable tbody tr').each(function (index) {
            var row = $(this);
            // Mask Agent ID (Column 4)
            var agentIdCell = row.find('td:nth-child(4)');
            agentIdCell.text('AGENT' + String(index + 1).padStart(3, '0'));

            // Mask Full Name (Column 6)
            var fullNameCell = row.find('td:nth-child(6)');
            fullNameCell.text('AGENT' + String(index + 1).padStart(3, '0'));
        });

        // Filter by Status
        $('#statusFilter').on('change', function () {
            var selectedValue = $(this).val();
            if (selectedValue) {
                table.column(2).search('^' + selectedValue + '$', true, false).draw();
            } else {
                table.column(2).search('').draw();
            }
        });
         $('.view-details').on('click', function () {
            const username = $(this).data('username');
            const fullname = $(this).data('fullname');
            const phone = $(this).data('phone');
            const email = $(this).data('email');
            const status = $(this).data('status');

            // Update modal fields
            $('#modalUsername').text(username);
            $('#modalFullname').text(fullname);
            $('#modalProfileUsername').val(username);
            $('#modalPhone').val(phone);
            $('#modalEmail').val(email);
            $('#modalStatus').val(status);
        });
    });
</script>
