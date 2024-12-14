<div class="content flex-row-fluid" id="kt_content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Staff Lists</h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staffModal">
                    + Add
                </button>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Detail</th>
                        <th>Status</th>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Created Date</th>
                        <th>Updated Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#staffModal">Detail</a></td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>mcog@vincent</td>
                        <td>Vincent</td>
                        <td>+628235154485</td>
                        <td>vncnt00@gmail.com</td>
                        <td>06 Sep 2023, 10:39</td>
                        <td>06 Sep 2023, 10:39</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#staffModal">Detail</a></td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>mcog@skimog77</td>
                        <td>skimog77</td>
                        <td>+6282355146964</td>
                        <td>ccfortune@gmail.com</td>
                        <td>04 Oct 2023, 19:01</td>
                        <td>05 Oct 2023, 17:25</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#staffModal">Detail</a></td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>mcog@support</td>
                        <td>mcog</td>
                        <td>+6281234567890</td>
                        <td>mcog@email.com</td>
                        <td>18 Sep 2023, 18:08</td>
                        <td>08 Dec 2024, 10:14</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#staffModal">Detail</a></td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>mcog@oragaming</td>
                        <td>Ora Gaming</td>
                        <td>+6281234567855</td>
                        <td>oragaming@gmail.com</td>
                        <td>24 Aug 2023, 11:45</td>
                        <td>10 Dec 2024, 14:17</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="staffModal" tabindex="-1" aria-labelledby="staffModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staffModalLabel">Add / Edit Staff</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="staffForm">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label for="fullName" class="form-label">Full Name *</label>
                            <input type="text" class="form-control" id="fullName" required>
                        </div>
                        <div class="col-md-6">
                            <label for="username" class="form-label">Username *</label>
                            <input type="text" class="form-control" id="username" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phoneNumber" class="form-label">Phone Number *</label>
                            <input type="text" class="form-control" id="phoneNumber" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <label class="form-label">Permissions</label>
                            <div class="row">
                                <!-- Dashboard Permissions -->
                                <div class="col-md-4">
                                    <div class="border p-3 rounded">
                                        <h5 class="bg-light p-2">Dashboard</h5>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="viewDashboard">
                                            <label class="form-check-label" for="viewDashboard">View Dashboard</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Agents Permissions -->
                                <div class="col-md-4">
                                    <div class="border p-3 rounded">
                                        <h5 class="bg-light p-2">Agents</h5>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="manageAgentList">
                                            <label class="form-check-label" for="manageAgentList">Manage Agent List</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="manageAgentSettings">
                                            <label class="form-check-label" for="manageAgentSettings">Manage Agent Settings</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Agent Balance Permissions -->
                                <div class="col-md-4">
                                    <div class="border p-3 rounded">
                                        <h5 class="bg-light p-2">Agent Balance</h5>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="adjustAgentBalance">
                                            <label class="form-check-label" for="adjustAgentBalance">Adjust Agent Balance</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="viewAgentBalance">
                                            <label class="form-check-label" for="viewAgentBalance">View Agent Balance</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Reports Permissions -->
                                <div class="col-md-4">
                                    <div class="border p-3 rounded">
                                        <h5 class="bg-light p-2">Reports</h5>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="viewAgentDailyReport">
                                            <label class="form-check-label" for="viewAgentDailyReport">Agent Daily Report</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="viewAgentWinLoseReport">
                                            <label class="form-check-label" for="viewAgentWinLoseReport">Agent Win Lose Report</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="viewGameWinLoseReport">
                                            <label class="form-check-label" for="viewGameWinLoseReport">Game Win Lose Report</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="viewUserWinLoseReport">
                                            <label class="form-check-label" for="viewUserWinLoseReport">User Win Lose Report</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="viewAgentInvoice">
                                            <label class="form-check-label" for="viewAgentInvoice">Agent Win Lose Invoice</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Game Setting Permissions -->
                                <div class="col-md-4">
                                    <div class="border p-3 rounded">
                                        <h5 class="bg-light p-2">Game Setting</h5>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="manageGameStatus">
                                            <label class="form-check-label" for="manageGameStatus">Manage Game Status</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Security & Logs Permissions -->
                                <div class="col-md-4">
                                    <div class="border p-3 rounded">
                                        <h5 class="bg-light p-2">Security & Logs</h5>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="manageWhitelistBlacklist">
                                            <label class="form-check-label" for="manageWhitelistBlacklist">Manage Whitelist/Blacklist IP</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="viewActivityLogs">
                                            <label class="form-check-label" for="viewActivityLogs">View Activity Logs</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- My Balance Permissions -->
                                <div class="col-md-4">
                                    <div class="border p-3 rounded">
                                        <h5 class="bg-light p-2">My Balance</h5>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="viewMyBalance">
                                            <label class="form-check-label" for="viewMyBalance">View My Balance</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- My Staffs Permissions -->
                                <div class="col-md-4">
                                    <div class="border p-3 rounded">
                                        <h5 class="bg-light p-2">My Staffs</h5>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="manageStaffList">
                                            <label class="form-check-label" for="manageStaffList">Manage Staff List</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add other permissions here -->
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="googleAuth" class="form-label">Google Authentication Key Setup</label>
                        <input type="text" class="form-control" id="googleAuth" value="OMCDCCKWG4GMS2" readonly>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="staffForm">Save</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
