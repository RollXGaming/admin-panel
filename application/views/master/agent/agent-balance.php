<div class="content flex-row-fluid" id="kt_content">
    <div class="container-xxl">
        <!-- Page Header -->
        <div class="row align-items-center mb-4">
          <div class='col-md-3'>
            <h1 class="fw-bold mb-0">Agent Balance</h1>
          </div>
          <!-- Total Agents -->
          <div class="col-md-3 text-end">
            
          </div>
          <div class="col-md-3 text-end">
            
          </div>
          <!-- Total Agent Balance -->
          <div class="col-md-3 text-end">
            <div class="bg-light-success px-4 py-2 rounded">
              <label class="form-label mb-0">Total Balance:</label>
              <span class="fw-bold fs-4 text-dark d-block">Rp 500,000,000</span>
              <small class="text-muted" style="font-size: 12px;">Total credit balance</small>
            </div>
            
          </div>
          
        </div>

        <!-- Agent Balance Table -->
        <div class="card">
            <div class="card-header">
                <div class="card-toolbar">
                    <button class="btn btn-light btn-sm" onclick="location.reload()">
                        <i class="fas fa-sync"></i> Refresh
                    </button>
                </div>
                
            </div>
            <div class="card-body">
                <table id="agentBalanceTable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Action</th>
                            <th>Agent ID</th>
                            <th>Username</th>
                            <th>Full Name</th>
                            <th>Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <button class="btn btn-primary btn-sm adjust-balance" data-bs-toggle="modal" data-bs-target="#adjustModal" 
                                    data-id="MCOGAE" 
                                    data-username="dinasti923" 
                                    data-fullname="Dinasti923" 
                                    data-balance="113,900,814.67">
                                    <i class="fas fa-sliders-h"></i>
                                </button>
                                <button class="btn btn-success btn-sm view-history" data-bs-toggle="modal" data-bs-target="#historyModal" 
                                    data-username="dinasti923" 
                                    data-history='[
                                        {"date": "08-12-2024, 21:57:58", "amount": "100,000,000", "type": "Deposit", "adjustedBy": "Rolex Gaming"},
                                        {"date": "02-11-2024, 06:55:17", "amount": "100,000,000", "type": "Deposit", "adjustedBy": "Rolex Gaming"}
                                    ]'>
                                    <i class="fas fa-history"></i>
                                </button>
                            </td>
                            <td>MCOGAE</td>
                            <td>dinasti923</td>
                            <td>Dinasti923</td>
                            <td>113,900,814.67</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <button class="btn btn-primary btn-sm adjust-balance" data-bs-toggle="modal" data-bs-target="#adjustModal" 
                                    data-id="MCOGAB" 
                                    data-username="autojp88" 
                                    data-fullname="Autojp88" 
                                    data-balance="50,000,000.00">
                                    <i class="fas fa-sliders-h"></i>
                                </button>
                                <button class="btn btn-success btn-sm view-history" data-bs-toggle="modal" data-bs-target="#historyModal" 
                                    data-username="autojp88" 
                                    data-history='[
                                        {"date": "07-11-2024, 18:23:12", "amount": "50,000,000", "type": "Deposit", "adjustedBy": "Rolex Gaming"}
                                    ]'>
                                    <i class="fas fa-history"></i>
                                </button>
                            </td>
                            <td>MCOGAB</td>
                            <td>autojp88</td>
                            <td>Autojp88</td>
                            <td>50,000,000.00</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <button class="btn btn-primary btn-sm adjust-balance" data-bs-toggle="modal" data-bs-target="#adjustModal" 
                                    data-id="MCOGAC" 
                                    data-username="disco77" 
                                    data-fullname="Disco77" 
                                    data-balance="75,000,000.00">
                                    <i class="fas fa-sliders-h"></i>
                                </button>
                                <button class="btn btn-success btn-sm view-history" data-bs-toggle="modal" data-bs-target="#historyModal" 
                                    data-username="disco77" 
                                    data-history='[
                                        {"date": "15-10-2024, 10:42:30", "amount": "75,000,000", "type": "Deposit", "adjustedBy": "Rolex Gaming"}
                                    ]'>
                                    <i class="fas fa-history"></i>
                                </button>
                            </td>
                            <td>MCOGAC</td>
                            <td>disco77</td>
                            <td>Disco77</td>
                            <td>75,000,000.00</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <button class="btn btn-primary btn-sm adjust-balance" data-bs-toggle="modal" data-bs-target="#adjustModal" 
                                    data-id="MCOGAD" 
                                    data-username="ora923" 
                                    data-fullname="Ora923" 
                                    data-balance="120,000,000.00">
                                    <i class="fas fa-sliders-h"></i>
                                </button>
                                <button class="btn btn-success btn-sm view-history" data-bs-toggle="modal" data-bs-target="#historyModal" 
                                    data-username="ora923" 
                                    data-history='[
                                        {"date": "10-12-2024, 11:30:45", "amount": "120,000,000", "type": "Deposit", "adjustedBy": "Rolex Gaming"}
                                    ]'>
                                    <i class="fas fa-history"></i>
                                </button>
                            </td>
                            <td>MCOGAD</td>
                            <td>ora923</td>
                            <td>Ora923</td>
                            <td>120,000,000.00</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                <button class="btn btn-primary btn-sm adjust-balance" data-bs-toggle="modal" data-bs-target="#adjustModal" 
                                    data-id="MCOGAF" 
                                    data-username="ambonbet" 
                                    data-fullname="Ambonbet" 
                                    data-balance="95,000,000.00">
                                    <i class="fas fa-sliders-h"></i>
                                </button>
                                <button class="btn btn-success btn-sm view-history" data-bs-toggle="modal" data-bs-target="#historyModal" 
                                    data-username="ambonbet" 
                                    data-history='[
                                        {"date": "03-12-2024, 14:55:30", "amount": "95,000,000", "type": "Deposit", "adjustedBy": "Rolex Gaming"}
                                    ]'>
                                    <i class="fas fa-history"></i>
                                </button>
                            </td>
                            <td>MCOGAF</td>
                            <td>ambonbet</td>
                            <td>Ambonbet</td>
                            <td>95,000,000.00</td>
                        </tr>
                        <!-- Add additional rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="adjustModal" tabindex="-1" aria-labelledby="adjustModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adjustModalLabel">Balance Adjustment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-md-4 text-center">
                        <div class="bg-light p-3 rounded">
                            <p class="fw-bold">Current Balance</p>
                            <h4 id="currentBalance"></h4>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <form id="adjustForm">
                            <div class="mb-3">
                                <label for="adjustType" class="form-label">Type <span class="text-danger">*</span></label>
                                <select class="form-select" id="adjustType" required>
                                    <option value="Deposit">Deposit</option>
                                    <option value="Withdraw">Withdraw</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="adjustAmount" class="form-label">Balance Amount <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="adjustAmount" placeholder="Enter amount" min="1" required />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" id="saveAdjustment" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="historyModal" tabindex="-1" aria-labelledby="historyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="historyModalLabel">Balance Adjustment History</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="fw-bold" id="historyFor"></h6>
                    <button class="btn btn-light btn-sm" onclick="location.reload()">
                        <i class="fas fa-sync"></i> Refresh
                    </button>
                </div>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Transfer Date</th>
                            <th>Amount</th>
                            <th>Type</th>
                            <th>Adjusted By</th>
                        </tr>
                    </thead>
                    <tbody id="historyContent">
                        <!-- History rows will be populated dynamically -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        // Populate Adjust Modal
        $('.adjust-balance').on('click', function () {
            const balance = $(this).data('balance');
            const username = $(this).data('username');
            const fullname = $(this).data('fullname');
            
            $('#adjustModalLabel').text(`Balance Adjustment - ${username}`);
            $('#currentBalance').text(`Rp ${balance}`);
        });

        // Populate History Modal
        $('.view-history').on('click', function () {
            const username = $(this).data('username');
            console.log($(this).data('history'));
            const history = $(this).data('history');
            
            $('#historyModalLabel').text(`Balance Adjustment History - ${username}`);
            const historyContent = history.map((item, index) => `
                <tr>
                    <td>${index + 1}</td>
                    <td>${item.date}</td>
                    <td>${item.amount}</td>
                    <td>${item.type}</td>
                    <td>${item.adjustedBy}</td>
                </tr>
            `).join('');
            $('#historyContent').html(historyContent);
        });

        // Save Adjustment
        $('#saveAdjustment').on('click', function () {
            const type = $('#adjustType').val();
            const amount = $('#adjustAmount').val();

            if (amount) {
                alert(`Adjustment saved!\nType: ${type}\nAmount: ${amount}`);
                $('#adjustModal').modal('hide');
            } else {
                alert('Please fill in all fields.');
            }
        });
    });
</script>
