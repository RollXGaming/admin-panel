<div class="content flex-row-fluid" id="kt_content">
    <div class="container-xxl">
        <!-- Dashboard Heading -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold">Daily Dashboard</h1>
            <div class="d-flex align-items-center">
                <span class="text-muted me-3">Last Updated At</span>
                <span class="fw-bold me-3">09 Dec 2024, 09:50:06</span>
                <select id="agent-selector" class="form-select form-select-sm" style="width: 200px;">
                    <option value="1">Agent 1 - John Doe</option>
                    <option value="2">Agent 2 - Jane Smith</option>
                    <option value="3">Agent 3 - Michael Lee</option>
                </select>
                <button class="btn btn-light btn-sm ms-3">
                    <i class="fas fa-calendar-alt"></i> Select Date
                </button>
            </div>

        </div>

        
        <!-- Agent Profile Section -->
        <div class="card mb-5">
            <div class="card-body d-flex align-items-center">
                <div class="symbol symbol-100px me-5">
                    <div class="symbol-label bg-light-primary text-primary fs-2 fw-bold">M</div>
                </div>
                <div>
                    <h4 class="fw-bold mb-1">Agent Profile</h4>
                    <p class="mb-1"><strong>Agent ID:</strong> MCOG</p>
                    <p class="mb-1"><strong>Full Name:</strong> Ora Gaming</p>
                    <p class="mb-1"><strong>Username:</strong> mcog@oragaming</p>
                    <p class="mb-1"><strong>Agent Level:</strong> MASTER_AGENT</p>
                </div>
            </div>
        </div>
        
        <div class="row g-3">
            <!-- Card 1 -->
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body d-flex align-items-center">
                        <div class="symbol symbol-40px me-3 bg-light-success">
                            <i class="fas fa-user-plus fs-4 text-success"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-0">140</h5>
                            <small>New Player</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body d-flex align-items-center">
                        <div class="symbol symbol-40px me-3 bg-light-info">
                            <i class="fas fa-users fs-4 text-info"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-0">490</h5>
                            <small>Player Currently Online</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body d-flex align-items-center">
                        <div class="symbol symbol-40px me-3 bg-light-warning">
                            <i class="fas fa-wallet fs-4 text-warning"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-0">60,514</h5>
                            <small>Total Players</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Transaction Approval -->
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-40px me-3 bg-light-danger">
                                <i class="fas fa-exchange-alt fs-4 text-danger"></i>
                            </div>
                            <div>
                                <h6>Transaction Approval</h6>
                                <p class="mb-0">Deposit: 0</p>
                                <p class="mb-0">Withdraw: 0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Detailed Info -->
        <div class="row g-3 mt-4">
            <!-- Balance -->
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body d-flex align-items-center">
                        <div class="symbol symbol-40px me-3 bg-light-primary">
                            <i class="fas fa-money-bill-wave fs-4 text-primary"></i>
                        </div>
                        <div>
                            <h6>Balance</h6>
                            <h5 class="fw-bold text-primary">108,109,537.67</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body d-flex align-items-center">
                        <div class="symbol symbol-40px me-3 bg-light-success">
                            <i class="fas fa-arrow-circle-up fs-4 text-success"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-0 text-success">12,400,430</h5>
                            <small><b>WIN</b> / Lose</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Total Deposit -->
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body d-flex align-items-center">
                        <div class="symbol symbol-40px me-3 bg-light-success">
                            <i class="fas fa-chart-line fs-4 text-success"></i>
                        </div>
                        <div>
                            <h6>Total Deposit</h6>
                            <p class="mb-0">10,907,500 (29)</p>
                            <p class="mb-0 text-danger">Failed: 50,000</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Total Deposit -->
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body d-flex align-items-center">
                        <div class="symbol symbol-40px me-3 bg-light-danger">
                            <i class="fas fa-chart-line fs-4 text-danger"></i>
                        </div>
                        <div>
                            <h6>Total WD</h6>
                            <p class="mb-0">3,907,500 (29)</p>
                            <p class="mb-0 text-danger">Failed: 50,000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header">
                        <h3 class="card-title">Player Win/Lose Summary</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped align-middle">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Player Name</th>
                                        <th>Turnover</th>
                                        <th>Win/Lose</th>
                                        <th>Agent Share</th>
                                        <th>Master Agent Share</th>
                                        <th>Company</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Player001</td>
                                        <td>5,000,000</td>
                                        <td>+1,000,000</td>
                                        <td>+500,000</td>
                                        <td>+300,000</td>
                                        <td>+200,000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Player002</td>
                                        <td>3,000,000</td>
                                        <td>-500,000</td>
                                        <td>-250,000</td>
                                        <td>-150,000</td>
                                        <td>-100,000</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Player003</td>
                                        <td>2,500,000</td>
                                        <td>+400,000</td>
                                        <td>+200,000</td>
                                        <td>+120,000</td>
                                        <td>+80,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Game Win/Lose Summary -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header">
                        <h3 class="card-title">Game Win/Lose Summary</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped align-middle">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Game Provider</th>
                                        <th>Turnover</th>
                                        <th>Win/Lose</th>
                                        <th>Agent Share</th>
                                        <th>Master Agent Share</th>
                                        <th>Company</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>PG Soft</td>
                                        <td>12,000,000</td>
                                        <td>+2,000,000</td>
                                        <td>+1,000,000</td>
                                        <td>+600,000</td>
                                        <td>+400,000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Playstar</td>
                                        <td>8,500,000</td>
                                        <td>-700,000</td>
                                        <td>-350,000</td>
                                        <td>-210,000</td>
                                        <td>-140,000</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Pragmatic Play</td>
                                        <td>6,000,000</td>
                                        <td>+1,500,000</td>
                                        <td>+750,000</td>
                                        <td>+450,000</td>
                                        <td>+300,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
</script>
