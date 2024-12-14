<div class="container mt-4">
    <div class="row align-items-center mb-4">
      <div class="col-md-3">
        <h3 class="mb-0">Player List</h3>
      </div>
      <div class="col-md-3 text-end">
        <div class="bg-light-success px-4 py-2 rounded">
          <label class="form-label mb-0">Total Players:</label>
          <span class="fw-bold fs-4 text-dark d-block">1,234</span>
          <small class="text-muted" style="font-size: 12px;">Total all player all time</small>
        </div>
      </div>
      <div class="col-md-3 text-end">
        <div class="bg-light-info px-4 py-2 rounded">
          <label class="form-label mb-0">Total Balance:</label>
          <span class="fw-bold fs-4 text-dark d-block">Rp 123,456,789</span>
          <small class="text-muted" style="font-size: 12px;">Player balance all time</small>
        </div>
      </div>
      <div class="col-md-3 text-end">
        <div class="bg-light-warning px-4 py-2 rounded">
          <label class="form-label mb-0">This Month Players:</label>
          <span class="fw-bold fs-4 text-dark d-block">45</span>
          <small class="text-muted" style="font-size: 12px;">New players this month</small>
        </div>
      </div>
    </div>

    <!-- Player List Table -->
    <table id="playerTable" class="table table-striped table-bordered">
        <thead class="bg-light">
            <tr>
                <th>#</th>
                <th>Player Name</th>
                <th>Current Balance</th>
                <th>Join Date</th>
                <th>Referral</th>
                <th>Last 7 Days Turnover</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Placeholder data -->
            <tr data-details='{"name":"Player001","balance":"Rp 5,000,000","joinDate":"01-12-2023","referral":"Referral01","last7DaysTurnover":"Rp 50,000","otherDetails":"Preferred game: Poker"}'>
                <td>1</td>
                <td>Player001</td>
                <td>Rp 5,000,000</td>
                <td>01-12-2023</td>
                <td>Referral01</td>
                <td>Rp 50,000</td>
                <td>
                    <button class="btn btn-sm btn-primary btn-detail" data-bs-toggle="modal" data-bs-target="#playerDetailModal">Details</button>
                </td>
            </tr>
            <tr data-details='{"name":"Player002","balance":"Rp 3,000,000","joinDate":"05-12-2023","referral":"Referral02","last7DaysTurnover":"Rp 40,000","otherDetails":"Preferred game: Slots"}'>
                <td>2</td>
                <td>Player002</td>
                <td>Rp 3,000,000</td>
                <td>05-12-2023</td>
                <td>Referral02</td>
                <td>Rp 40,000</td>
                <td>
                    <button class="btn btn-sm btn-primary btn-detail" data-bs-toggle="modal" data-bs-target="#playerDetailModal">Details</button>
                </td>
            </tr>
            <tr data-details='{"name":"Player003","balance":"Rp 10,000,000","joinDate":"10-11-2023","referral":"Referral03","last7DaysTurnover":"Rp 75,000","otherDetails":"Preferred game: Blackjack"}'>
                <td>3</td>
                <td>Player003</td>
                <td>Rp 10,000,000</td>
                <td>10-11-2023</td>
                <td>Referral03</td>
                <td>Rp 75,000</td>
                <td>
                    <button class="btn btn-sm btn-primary btn-detail" data-bs-toggle="modal" data-bs-target="#playerDetailModal">Details</button>
                </td>
            </tr>
            <tr data-details='{"name":"Player004","balance":"Rp 1,000,000","joinDate":"25-10-2023","referral":"Referral04","last7DaysTurnover":"Rp 10,000","otherDetails":"Preferred game: Roulette"}'>
                <td>4</td>
                <td>Player004</td>
                <td>Rp 1,000,000</td>
                <td>25-10-2023</td>
                <td>Referral04</td>
                <td>Rp 10,000</td>
                <td>
                    <button class="btn btn-sm btn-primary btn-detail" data-bs-toggle="modal" data-bs-target="#playerDetailModal">Details</button>
                </td>
            </tr>
            <tr data-details='{"name":"Player005","balance":"Rp 8,500,000","joinDate":"15-12-2023","referral":"Referral05","last7DaysTurnover":"Rp 100,000","otherDetails":"Preferred game: Baccarat"}'>
                <td>5</td>
                <td>Player005</td>
                <td>Rp 8,500,000</td>
                <td>15-12-2023</td>
                <td>Referral05</td>
                <td>Rp 100,000</td>
                <td>
                    <button class="btn btn-sm btn-primary btn-detail" data-bs-toggle="modal" data-bs-target="#playerDetailModal">Details</button>
                </td>
            </tr>
            <tr data-details='{"name":"Player006","balance":"Rp 2,750,000","joinDate":"02-11-2023","referral":"Referral06","last7DaysTurnover":"Rp 25,000","otherDetails":"Preferred game: Slots"}'>
                <td>6</td>
                <td>Player006</td>
                <td>Rp 2,750,000</td>
                <td>02-11-2023</td>
                <td>Referral06</td>
                <td>Rp 25,000</td>
                <td>
                    <button class="btn btn-sm btn-primary btn-detail" data-bs-toggle="modal" data-bs-target="#playerDetailModal">Details</button>
                </td>
            </tr>
            <tr data-details='{"name":"Player007","balance":"Rp 6,300,000","joinDate":"20-10-2023","referral":"Referral07","last7DaysTurnover":"Rp 60,000","otherDetails":"Preferred game: Poker"}'>
                <td>7</td>
                <td>Player007</td>
                <td>Rp 6,300,000</td>
                <td>20-10-2023</td>
                <td>Referral07</td>
                <td>Rp 60,000</td>
                <td>
                    <button class="btn btn-sm btn-primary btn-detail" data-bs-toggle="modal" data-bs-target="#playerDetailModal">Details</button>
                </td>
            </tr>
            <tr data-details='{"name":"Player008","balance":"Rp 4,200,000","joinDate":"05-12-2023","referral":"Referral08","last7DaysTurnover":"Rp 30,000","otherDetails":"Preferred game: Craps"}'>
                <td>8</td>
                <td>Player008</td>
                <td>Rp 4,200,000</td>
                <td>05-12-2023</td>
                <td>Referral08</td>
                <td>Rp 30,000</td>
                <td>
                    <button class="btn btn-sm btn-primary btn-detail" data-bs-toggle="modal" data-bs-target="#playerDetailModal">Details</button>
                </td>
            </tr>
            <tr data-details='{"name":"Player009","balance":"Rp 7,800,000","joinDate":"12-11-2023","referral":"Referral09","last7DaysTurnover":"Rp 90,000","otherDetails":"Preferred game: Baccarat"}'>
                <td>9</td>
                <td>Player009</td>
                <td>Rp 7,800,000</td>
                <td>12-11-2023</td>
                <td>Referral09</td>
                <td>Rp 90,000</td>
                <td>
                    <button class="btn btn-sm btn-primary btn-detail" data-bs-toggle="modal" data-bs-target="#playerDetailModal">Details</button>
                </td>
            </tr>
            <tr data-details='{"name":"Player010","balance":"Rp 9,500,000","joinDate":"01-10-2023","referral":"Referral10","last7DaysTurnover":"Rp 120,000","otherDetails":"Preferred game: Blackjack"}'>
                <td>10</td>
                <td>Player010</td>
                <td>Rp 9,500,000</td>
                <td>01-10-2023</td>
                <td>Referral10</td>
                <td>Rp 120,000</td>
                <td>
                    <button class="btn btn-sm btn-primary btn-detail" data-bs-toggle="modal" data-bs-target="#playerDetailModal">Details</button>
                </td>
            </tr>

            <!-- Add more rows dynamically -->
        </tbody>
    </table>

    
</div>
<div class="modal fade" id="playerDetailModal" tabindex="-1" aria-labelledby="playerDetailModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="playerDetailModalLabel">Player Details</h5>
        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <!-- Left Column -->
          <div class="col-md-4 text-center">
            <div class="bg-light p-4 rounded shadow-sm">
              <h6 class="text-muted">Player Name</h6>
              <h5 class="fw-bold" id="playerName">Player001</h5>
              <div class="mt-3">
                <img src="https://via.placeholder.com/100" alt="Player Avatar" class="img-fluid rounded-circle">
              </div>
            </div>
          </div>
          <!-- Right Column -->
          <div class="col-md-8">
            <div class="bg-light p-4 rounded shadow-sm">
              <h6 class="text-muted">Details</h6>
              <div class="row mb-2">
                <div class="col-6"><strong>Current Balance:</strong></div>
                <div class="col-6 text-end" id="playerBalance">Rp 5,000,000</div>
              </div>
              <div class="row mb-2">
                <div class="col-6"><strong>Join Date:</strong></div>
                <div class="col-6 text-end" id="playerJoinDate">01-12-2023</div>
              </div>
              <div class="row mb-2">
                <div class="col-6"><strong>Referral:</strong></div>
                <div class="col-6 text-end" id="playerReferral">Referral01</div>
              </div>
              <div class="row mb-2">
                <div class="col-6"><strong>Last 7 Days Turnover:</strong></div>
                <div class="col-6 text-end" id="playerTurnover">Rp 50,000</div>
              </div>
              <div class="row">
                <div class="col-12"><strong>Other Details:</strong></div>
                <div class="col-12 text-muted" id="playerOtherDetails">Preferred game: Poker</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" onclick="blacklistPlayer()">Blacklist</button>
        <button type="button" class="btn btn-success" onclick="whitelistPlayer()">Whitelist</button>
      </div>
    </div>
  </div>
</div>

<style>
/* Style for smaller table buttons */
table .btn-sm {
    padding: 2px 6px;
    font-size: 12px;
    line-height: 1.2;
    border-radius: 3px;
}
</style>

<script>
$(document).ready(function () {
    // Add click event for all detail buttons
    $(".btn-detail").on("click", function () {
        // Get the details from the parent row's data attribute
        const details = $(this).closest("tr").data("details");

        // Populate the modal content with the details
        const detailsContent = `
            <h6>Player Name: ${details.name}</h6>
            <p>Current Balance: ${details.balance}</p>
            <p>Join Date: ${details.joinDate}</p>
            <p>Referral: ${details.referral}</p>
            <p>Last 7 Days Turnover: ${details.last7DaysTurnover}</p>
            <p>Other Details: ${details.otherDetails}</p>
        `;
        $("#playerDetailsContent").html(detailsContent);
    });
    $("#playerTable").DataTable();
});
</script>
