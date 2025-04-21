<?php
session_start();

// Database connection
$host = "localhost";
$dbname = "pet_adoption";
$username = "root";
$password = "Keerthi@18";
$port = 3307;

$conn = new mysqli($host, $username, $password, $dbname, $port);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch latest 10 donations
$sql = "SELECT * FROM donations ORDER BY donated_at DESC LIMIT 10";
$result = $conn->query($sql);

session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard | Happy Pet Adoption</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f5f5f5;
      font-family: 'Segoe UI', sans-serif;
    }
    .dashboard {
      max-width: 1000px;
      margin: 40px auto;
      background-color: white;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .admin-title {
      color: #d63384;
      font-weight: bold;
    }
    .table thead {
      background-color: #f8d7da;
    }
  </style>
</head>
<body>

<div class="container dashboard">
  <h2 class="text-center admin-title">Admin Dashboard</h2>
  <p class="text-center text-muted">Recent Donations Overview</p>

  <table class="table table-bordered table-striped mt-4">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Amount ($)</th>
        <th>Message</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($result && $result->num_rows > 0): ?>
        <?php while($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td>$<?= number_format($row['amount'], 2) ?></td>
            <td><?= htmlspecialchars($row['message']) ?></td>
            <td><?= date("d M Y, h:i A", strtotime($row['donated_at'])) ?></td>
          </tr>
        <?php endwhile; ?>
      <?php else: ?>
        <tr>
          <td colspan="5" class="text-center">No donations found.</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php $conn->close(); ?>
