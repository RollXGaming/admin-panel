<div class="container my-4">
  <div class="row align-items-center mb-4">
      <div class="col-md-3">
        <h3 class="mb-0">Player List</h3>
      </div>
      <!-- Total Top Player -->
      <div class="col-md-3 text-end">
        <div class="bg-light-primary px-4 py-2 rounded">
          <label class="form-label mb-0">Total Top Players:</label>
          <span class="fw-bold fs-4 text-dark d-block">50</span>
          <small class="text-muted" style="font-size: 12px;">Top players of all time</small>
        </div>
      </div>
      <!-- Total Turnover Top Player (All Time) -->
      <div class="col-md-3 text-end">
        <div class="bg-light-success px-4 py-2 rounded">
          <label class="form-label mb-0">Total Turnover (All Time):</label>
          <span class="fw-bold fs-4 text-dark d-block">Rp 500,000,000</span>
          <small class="text-muted" style="font-size: 12px;">Turnover of top players</small>
        </div>
      </div>
      <!-- Total Turnover Top Player (30 days) -->
      <div class="col-md-3 text-end">
        <div class="bg-light-warning px-4 py-2 rounded">
          <label class="form-label mb-0">Total Turnover (30 Days):</label>
          <span class="fw-bold fs-4 text-dark d-block">Rp 50,000,000</span>
          <small class="text-muted" style="font-size: 12px;">Recent turnover of top players</small>
        </div>
      </div>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-hover" id="playerTable">
      <thead class="table-primary">
        <tr>
          <th>#</th>
          <th>Player Name</th>
          <th>Current Balance</th>
          <th>Join Date</th>
          <th>Referral</th>
          <th>Turnover 7 Days</th>
          <th>Turnover 14 Days</th>
          <th>Turnover 30 Days</th>
          <th>WL 7 Days</th>
          <th>WL 14 Days</th>
          <th>WL 30 Days</th>
          <th>Favorite Games</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Player001</td>
          <td>Rp 10,000,000</td>
          <td>01-01-2023</td>
          <td>Referral01</td>
          <td>Rp 500,000</td>
          <td>Rp 1,000,000</td>
          <td>Rp 5,000,000</td>
          <td>Rp 50,000</td>
          <td>Rp 100,000</td>
          <td>Rp 150,000</td>
          <td>Slot</td>
          <td><button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#topPlayerDetailModal">Details</button></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Player002</td>
          <td>Rp 8,000,000</td>
          <td>15-02-2023</td>
          <td>Referral02</td>
          <td>Rp 400,000</td>
          <td>Rp 800,000</td>
          <td>Rp 4,000,000</td>
          <td>Rp 40,000</td>
          <td>Rp 80,000</td>
          <td>Rp 120,000</td>
          <td>Blackjack</td>
          <td><button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#topPlayerDetailModal">Details</button></td>
        </tr>
        <tr>
          <td>3</td>
          <td>Player003</td>
          <td>Rp 12,000,000</td>
          <td>10-03-2023</td>
          <td>Referral03</td>
          <td>Rp 600,000</td>
          <td>Rp 1,200,000</td>
          <td>Rp 6,000,000</td>
          <td>Rp 60,000</td>
          <td>Rp 120,000</td>
          <td>Rp 180,000</td>
          <td>Roulette</td>
          <td><button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#topPlayerDetailModal">Details</button></td>
        </tr>
        <tr>
          <td>4</td>
          <td>Player004</td>
          <td>Rp 7,000,000</td>
          <td>20-04-2023</td>
          <td>Referral04</td>
          <td>Rp 350,000</td>
          <td>Rp 700,000</td>
          <td>Rp 3,500,000</td>
          <td>Rp 35,000</td>
          <td>Rp 70,000</td>
          <td>Rp 105,000</td>
          <td>Slots</td>
          <td><button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#topPlayerDetailModal">Details</button></td>
        </tr>
        <tr>
          <td>5</td>
          <td>Player005</td>
          <td>Rp 15,000,000</td>
          <td>30-05-2023</td>
          <td>Referral05</td>
          <td>Rp 750,000</td>
          <td>Rp 1,500,000</td>
          <td>Rp 7,500,000</td>
          <td>Rp 75,000</td>
          <td>Rp 150,000</td>
          <td>Rp 225,000</td>
          <td>Baccarat</td>
          <td><button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#topPlayerDetailModal">Details</button></td>
        </tr>
        <tr>
          <td>6</td>
          <td>Player006</td>
          <td>Rp 9,000,000</td>
          <td>05-06-2023</td>
          <td>Referral06</td>
          <td>Rp 450,000</td>
          <td>Rp 900,000</td>
          <td>Rp 4,500,000</td>
          <td>Rp 45,000</td>
          <td>Rp 90,000</td>
          <td>Rp 135,000</td>
          <td>Slots</td>
          <td><button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#topPlayerDetailModal">Details</button></td>
        </tr>
        <tr>
          <td>7</td>
          <td>Player007</td>
          <td>Rp 11,000,000</td>
          <td>15-07-2023</td>
          <td>Referral07</td>
          <td>Rp 550,000</td>
          <td>Rp 1,100,000</td>
          <td>Rp 5,500,000</td>
          <td>Rp 55,000</td>
          <td>Rp 110,000</td>
          <td>Rp 165,000</td>
          <td>Blackjack</td>
          <td><button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#topPlayerDetailModal">Details</button></td>
        </tr>
        <tr>
          <td>8</td>
          <td>Player008</td>
          <td>Rp 13,000,000</td>
          <td>25-08-2023</td>
          <td>Referral08</td>
          <td>Rp 650,000</td>
          <td>Rp 1,300,000</td>
          <td>Rp 6,500,000</td>
          <td>Rp 65,000</td>
          <td>Rp 130,000</td>
          <td>Rp 195,000</td>
          <td>Roulette</td>
          <td><button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#topPlayerDetailModal">Details</button></td>
        </tr>
        <tr>
          <td>9</td>
          <td>Player009</td>
          <td>Rp 6,000,000</td>
          <td>10-09-2023</td>
          <td>Referral09</td>
          <td>Rp 300,000</td>
          <td>Rp 600,000</td>
          <td>Rp 3,000,000</td>
          <td>Rp 30,000</td>
          <td>Rp 60,000</td>
          <td>Rp 90,000</td>
          <td>Baccarat</td>
          <td><button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#topPlayerDetailModal">Details</button></td>
        </tr>
        <tr>
          <td>10</td>
          <td>Player010</td>
          <td>Rp 14,000,000</td>
          <td>01-10-2023</td>
          <td>Referral10</td>
          <td>Rp 700,000</td>
          <td>Rp 1,400,000</td>
          <td>Rp 7,000,000</td>
          <td>Rp 70,000</td>
          <td>Rp 140,000</td>
          <td>Rp 210,000</td>
          <td>Slots</td>
          <td><button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#topPlayerDetailModal">Details</button></td>
        </tr>

      </tbody>
    </table>
  </div>
</div>

<div class="modal fade" id="topPlayerDetailModal" tabindex="-1" aria-labelledby="topPlayerDetailModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="topPlayerDetailModalLabel">Top Player Details</h5>
        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <!-- Left Column -->
          <div class="col-md-4 text-center">
            <div class="bg-light p-4 rounded shadow-sm">
              <h6 class="text-muted">Player Name</h6>
              <h5 class="fw-bold" id="topPlayerName">Player001</h5>
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
                <div class="col-6 text-end" id="topPlayerBalance">Rp 5,000,000</div>
              </div>
              <div class="row mb-2">
                <div class="col-6"><strong>Join Date:</strong></div>
                <div class="col-6 text-end" id="topPlayerJoinDate">01-12-2023</div>
              </div>
              <div class="row mb-2">
                <div class="col-6"><strong>Referral:</strong></div>
                <div class="col-6 text-end" id="topPlayerReferral">Referral01</div>
              </div>
              <div class="row mb-2">
                <div class="col-6"><strong>Turnover 7 Days:</strong></div>
                <div class="col-6 text-end" id="topPlayerTurnover7">Rp 50,000</div>
              </div>
              <div class="row mb-2">
                <div class="col-6"><strong>Turnover 14 Days:</strong></div>
                <div class="col-6 text-end" id="topPlayerTurnover14">Rp 100,000</div>
              </div>
              <div class="row mb-2">
                <div class="col-6"><strong>Turnover 30 Days:</strong></div>
                <div class="col-6 text-end" id="topPlayerTurnover30">Rp 1,000,000</div>
              </div>
              <div class="row mb-2">
                <div class="col-6"><strong>WL 7 Days:</strong></div>
                <div class="col-6 text-end" id="topPlayerWL7">Rp 10,000</div>
              </div>
              <div class="row mb-2">
                <div class="col-6"><strong>WL 14 Days:</strong></div>
                <div class="col-6 text-end" id="topPlayerWL14">Rp 20,000</div>
              </div>
              <div class="row mb-2">
                <div class="col-6"><strong>WL 30 Days:</strong></div>
                <div class="col-6 text-end" id="topPlayerWL30">Rp 30,000</div>
              </div>
              <div class="row">
                <div class="col-12"><strong>Favorite Games:</strong></div>
                <div class="col-12 text-muted" id="topPlayerFavoriteGames">Poker</div>
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
<script>
    $(document).on("click", ".detail-btn", function () {
      // Sample Data - Replace with dynamic data if needed
      $("#topPlayerName").text("Player001");
      $("#topPlayerBalance").text("Rp 5,000,000");
      $("#topPlayerJoinDate").text("01-12-2023");
      $("#topPlayerReferral").text("Referral01");
      $("#topPlayerTurnover7").text("Rp 50,000");
      $("#topPlayerTurnover14").text("Rp 100,000");
      $("#topPlayerTurnover30").text("Rp 1,000,000");
      $("#topPlayerWL7").text("Rp 10,000");
      $("#topPlayerWL14").text("Rp 20,000");
      $("#topPlayerWL30").text("Rp 30,000");
      $("#topPlayerFavoriteGames").text("Poker");
      
    });
    $("#playerTable").DataTable();

</script>