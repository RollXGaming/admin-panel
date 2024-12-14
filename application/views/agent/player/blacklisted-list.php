<div class="container my-4">
  <h2>Top Players</h2>
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Player Name</th>
          <th>Current Balance</th>
          <th>Blacklist Date</th>
          <th>Blacklist Reason</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Player001</td>
          <td>Rp 5,000,000</td>
          <td>10-12-2024</td>
          <td>Violation of terms</td>
          <td>
            <button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#blacklistDetailModal-1">Details</button>
            <button class="btn btn-sm btn-danger unblock-btn">Unblock</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Player002</td>
          <td>Rp 1,000,000</td>
          <td>05-12-2024</td>
          <td>Fraudulent activity</td>
          <td>
            <button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#blacklistDetailModal-2">Details</button>
            <button class="btn btn-sm btn-danger unblock-btn">Unblock</button>
          </td>
        </tr>
        <!-- Add more rows as needed -->
      </tbody>
    </table>
  </div>
</div>
<!-- Modal for Player001 -->
<div class="modal fade" id="blacklistDetailModal-1" tabindex="-1" aria-labelledby="blacklistDetailModalLabel-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="blacklistDetailModalLabel-1">Player Details - Player001</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Player Name:</strong> Player001</p>
        <p><strong>Current Balance:</strong> Rp 5,000,000</p>
        <p><strong>Blacklist Date:</strong> 10-12-2024</p>
        <p><strong>Blacklist Reason:</strong> Violation of terms</p>
        <hr>
        <h6>Transaction History:</h6>
        <table class="table table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Transaction Type</th>
              <th>Amount</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Deposit</td>
              <td>Rp 2,000,000</td>
              <td>01-12-2024</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Withdrawal</td>
              <td>Rp 1,000,000</td>
              <td>05-12-2024</td>
            </tr>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal for Player002 -->
<div class="modal fade" id="blacklistDetailModal-2" tabindex="-1" aria-labelledby="blacklistDetailModalLabel-2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="blacklistDetailModalLabel-2">Player Details - Player002</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Player Name:</strong> Player002</p>
        <p><strong>Current Balance:</strong> Rp 1,000,000</p>
        <p><strong>Blacklist Date:</strong> 05-12-2024</p>
        <p><strong>Blacklist Reason:</strong> Fraudulent activity</p>
        <hr>
        <h6>Transaction History:</h6>
        <table class="table table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Transaction Type</th>
              <th>Amount</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Deposit</td>
              <td>Rp 500,000</td>
              <td>01-12-2024</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Withdrawal</td>
              <td>Rp 300,000</td>
              <td>03-12-2024</td>
            </tr>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function () {
  $('.table').DataTable();
  $(".unblock-btn").on("click", function () {
    const playerName = $(this).closest("tr").find("td:nth-child(2)").text();
    if (confirm(`Are you sure you want to unblock ${playerName}?`)) {
      alert(`${playerName} has been unblocked.`);
      // Here you can add logic to remove the row or update the database
    }
  });
});

</script>