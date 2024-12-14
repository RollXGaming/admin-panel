<style>
.table th {
  background-color: #f8f9fa;
}

.table td {
  vertical-align: middle;
}

.modal-footer .btn-success {
  background-color: #28a745;
  border-color: #28a745;
}

.modal-footer .btn-danger {
  background-color: #dc3545;
  border-color: #dc3545;
}

</style>
<div class="container mt-4">
  <h3 class="mb-4">Deposit History</h3>

  <!-- Filters Section -->
  <div class="row mb-3">
    <div class="col-md-6">
      <label for="daterange" class="form-label">Date Range</label>
      <input type="text" id="daterange" class="form-control" />
    </div>
    <div class="col-md-6 d-flex align-items-center justify-content-end bg-light-info">
      <div>
        <label class="form-label fw-bold fs-6 text-primary" style="margin: 0;">Total Deposit:</label>
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
        <th>Deposit Amount</th>
        <th>Payment Method</th>
        <th>Approval Status</th>
        <th>Datetime</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Player001</td>
        <td>John Doe</td>
        <td>Rp 1,000,000</td>
        <td>Bank Transfer</td>
        <td>Pending</td>
        <td>10-12-2024, 10:00 AM</td>
        <td>
          <button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#depositDetailModal-1">Details</button>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Player002</td>
        <td>Jane Smith</td>
        <td>Rp 500,000</td>
        <td>Credit Card</td>
        <td>Approved</td>
        <td>10-12-2024, 9:45 AM</td>
        <td>
          <button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#depositDetailModal-2">Details</button>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>Player003</td>
        <td>James Brown</td>
        <td>Rp 2,000,000</td>
        <td>Bank Transfer</td>
        <td>Rejected</td>
        <td>10-12-2024, 9:30 AM</td>
        <td>
          <button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#depositDetailModal-3">Details</button>
        </td>
      </tr>
      <tr>
        <td>4</td>
        <td>Player004</td>
        <td>Lisa Green</td>
        <td>Rp 750,000</td>
        <td>PayPal</td>
        <td>Pending</td>
        <td>10-12-2024, 9:20 AM</td>
        <td>
          <button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#depositDetailModal-4">Details</button>
        </td>
      </tr>
      <tr>
        <td>5</td>
        <td>Player005</td>
        <td>David Wilson</td>
        <td>Rp 1,500,000</td>
        <td>Credit Card</td>
        <td>Approved</td>
        <td>10-12-2024, 9:10 AM</td>
        <td>
          <button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#depositDetailModal-5">Details</button>
        </td>
      </tr>
      <tr>
        <td>6</td>
        <td>Player006</td>
        <td>Susan White</td>
        <td>Rp 2,500,000</td>
        <td>Bank Transfer</td>
        <td>Rejected</td>
        <td>10-12-2024, 8:50 AM</td>
        <td>
          <button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#depositDetailModal-6">Details</button>
        </td>
      </tr>
      <tr>
        <td>7</td>
        <td>Player007</td>
        <td>Chris Taylor</td>
        <td>Rp 800,000</td>
        <td>PayPal</td>
        <td>Pending</td>
        <td>10-12-2024, 8:30 AM</td>
        <td>
          <button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#depositDetailModal-7">Details</button>
        </td>
      </tr>
      <tr>
        <td>8</td>
        <td>Player008</td>
        <td>Emma Clark</td>
        <td>Rp 1,200,000</td>
        <td>Bank Transfer</td>
        <td>Approved</td>
        <td>10-12-2024, 8:15 AM</td>
        <td>
          <button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#depositDetailModal-8">Details</button>
        </td>
      </tr>
      <tr>
        <td>9</td>
        <td>Player009</td>
        <td>Michael Johnson</td>
        <td>Rp 3,000,000</td>
        <td>Credit Card</td>
        <td>Pending</td>
        <td>10-12-2024, 8:00 AM</td>
        <td>
          <button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#depositDetailModal-9">Details</button>
        </td>
      </tr>
      <tr>
        <td>10</td>
        <td>Player010</td>
        <td>Olivia Lee</td>
        <td>Rp 1,800,000</td>
        <td>PayPal</td>
        <td>Rejected</td>
        <td>10-12-2024, 7:45 AM</td>
        <td>
          <button class="btn btn-sm btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#depositDetailModal-10">Details</button>
        </td>
      </tr>

      <!-- Add more rows as needed -->
    </tbody>
  </table>
</div>
<!-- Modal for Deposit 1 -->
<!-- Modal for Deposit 1 -->
<div
  class="modal fade"
  id="depositDetailModal-1"
  tabindex="-1"
  aria-labelledby="depositDetailModalLabel-1"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="depositDetailModalLabel-1">
          Deposit Details - Player001
        </h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <p><strong>Player ID:</strong> Player001</p>
        <p><strong>Player Name:</strong> John Doe</p>
        <p><strong>Deposit Amount:</strong> Rp 1,000,000</p>
        <p><strong>Payment Method:</strong> Bank Transfer</p>
        <p><strong>Approval Status:</strong> Pending</p>
        <p><strong>Datetime:</strong> 10-12-2024, 10:00 AM</p>
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <!-- Approve Button -->
        <button
          type="button"
          class="btn btn-success"
          onclick="handleApprove('Player001')"
        >
          Approve
        </button>
        <!-- Reject Button -->
        <button
          type="button"
          class="btn btn-danger"
          onclick="handleReject('Player001')"
        >
          Reject
        </button>
        <!-- Close Button -->
        <button
          type="button"
          class="btn btn-secondary"
          data-bs-dismiss="modal"
        >
          Close
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Modal for Deposit 2 -->
<div
  class="modal fade"
  id="depositDetailModal-2"
  tabindex="-1"
  aria-labelledby="depositDetailModalLabel-2"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="depositDetailModalLabel-2">
          Deposit Details - Player002
        </h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <p><strong>Player ID:</strong> Player002</p>
        <p><strong>Player Name:</strong> Jane Smith</p>
        <p><strong>Deposit Amount:</strong> Rp 500,000</p>
        <p><strong>Payment Method:</strong> eWallet</p>
        <p><strong>Approval Status:</strong> Pending</p>
        <p><strong>Datetime:</strong> 09-12-2024, 02:30 PM</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Close
        </button>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function () {
    // Initialize the date range picker
    $('.table').DataTable();
    $("#daterange").daterangepicker({
      opens: "left",
      autoApply: true,
      locale: {
        format: "DD-MM-YYYY",
      },
    });
  });
function handleApprove(playerId) {
  if (confirm(`Are you sure you want to approve the deposit for ${playerId}?`)) {
    alert(`${playerId}'s deposit has been approved.`);
    // Add logic to process the approval (e.g., API call or backend update)
  }
}

function handleReject(playerId) {
  if (confirm(`Are you sure you want to reject the deposit for ${playerId}?`)) {
    alert(`${playerId}'s deposit has been rejected.`);
    // Add logic to process the rejection (e.g., API call or backend update)
  }
}

</script>