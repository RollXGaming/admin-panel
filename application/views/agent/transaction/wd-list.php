<div class="container mt-4">
  <h3 class="mb-4">Withdrawal History</h3>

  <!-- Filters Section -->
  <div class="row mb-3">
    <div class="col-md-6">
      <label for="daterange" class="form-label">Date Range</label>
      <input type="text" id="daterange" class="form-control" />
    </div>
    <div class="col-md-6 d-flex align-items-center justify-content-end bg-light-info">
      <div>
        <label class="form-label fw-bold fs-6 text-primary" style="margin: 0;">Total WD:</label>
        <span class="fw-bold fs-4 text-dark" style="margin: 0;">Rp 15,450,000</span>
        <small class="text-muted" style="display: block; font-size: 12px; margin-top: 2px;">(5 Transactions)</small>
      </div>
    </div>


  </div>

  <!-- Data Table -->
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Player ID</th>
        <th>Player Name</th>
        <th>WD Amount</th>
        <th>WD Fee</th>
        <th>WD Nett</th>
        <th>WD Destination</th>
        <th>WD Destination ID</th>
        <th>Status</th>
        <th>Datetime Request</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Player001</td>
        <td>John Doe</td>
        <td>Rp 1,000,000</td>
        <td>Rp 50,000</td>
        <td>Rp 950,000</td>
        <td>Bank Transfer</td>
        <td>123456789</td>
        <td>Pending</td>
        <td>10-12-2024, 10:00 AM</td>
        <td>
          <button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#withdrawalDetailModal-1">Details</button>
          <button class="btn btn-sm btn-success action-approve" onclick="handleApprove('Player001')">Approve</button>
          <button class="btn btn-sm btn-danger action-reject" onclick="handleReject('Player001')">Reject</button>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Player002</td>
        <td>Jane Smith</td>
        <td>Rp 500,000</td>
        <td>Rp 25,000</td>
        <td>Rp 475,000</td>
        <td>eWallet</td>
        <td>08123456789</td>
        <td>Approved</td>
        <td>10-12-2024, 9:45 AM</td>
        <td>
          <button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#withdrawalDetailModal-2">Details</button>
          <button class="btn btn-sm btn-info action-transfer" onclick="handleTransfer('Player002')">Transfer</button>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>Player003</td>
        <td>James Brown</td>
        <td>Rp 2,000,000</td>
        <td>Rp 100,000</td>
        <td>Rp 1,900,000</td>
        <td>Bank Transfer</td>
        <td>987654321</td>
        <td>Transferred</td>
        <td>10-12-2024, 9:30 AM</td>
        <td>
          <button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#withdrawalDetailModal-3">Details</button>
        </td>
      </tr>
      <!-- Add more rows as needed -->
    </tbody>
  </table>
</div>
<!-- Modal for Withdrawal 1 -->
<div class="modal fade" id="withdrawalDetailModal-1" tabindex="-1" aria-labelledby="withdrawalDetailModalLabel-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="withdrawalDetailModalLabel-1">Withdrawal Details - Player001</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Player ID:</strong> Player001</p>
        <p><strong>Player Name:</strong> John Doe</p>
        <p><strong>WD Amount:</strong> Rp 1,000,000</p>
        <p><strong>WD Fee:</strong> Rp 50,000</p>
        <p><strong>WD Nett:</strong> Rp 950,000</p>
        <p><strong>WD Destination:</strong> Bank Transfer</p>
        <p><strong>WD Destination ID:</strong> 123456789</p>
        <p><strong>Status:</strong> Pending</p>
        <p><strong>Datetime Request:</strong> 10-12-2024, 10:00 AM</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
  function handleApprove(playerId) {
  if (confirm(`Are you sure you want to approve the withdrawal for ${playerId}?`)) {
    alert(`${playerId}'s withdrawal has been approved.`);
    // Add your logic to update the status and database here
  }
}

function handleReject(playerId) {
  if (confirm(`Are you sure you want to reject the withdrawal for ${playerId}?`)) {
    alert(`${playerId}'s withdrawal has been rejected.`);
    // Add your logic to update the status and database here
  }
}

function handleTransfer(playerId) {
  if (confirm(`Are you sure you want to mark the withdrawal for ${playerId} as transferred?`)) {
    alert(`${playerId}'s withdrawal has been marked as transferred.`);
    // Add your logic to update the status and database here
  }
}

$(document).ready(function () {
  // Initialize the date range picker
  $(".table").DataTable();
  $("#daterange").daterangepicker({
    opens: "left",
    autoApply: true,
    locale: {
      format: "DD-MM-YYYY",
    },
  });
});

</script>