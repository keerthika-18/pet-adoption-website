<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

$host = "localhost";
$dbname = "pet_adoption";
$username = "root";
$password = "Keerthi@18";
$port = 3307;

$conn = new mysqli($host, $username, $password, $dbname, $port);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get stats
$petCount = $conn->query("SELECT COUNT(*) AS total FROM pets")->fetch_assoc()['total'] ?? 0;
$donationTotal = $conn->query("SELECT SUM(amount) AS total FROM donations")->fetch_assoc()['total'] ?? 0;
$adopterCount = $conn->query("SELECT COUNT(DISTINCT email) AS total FROM adopters")->fetch_assoc()['total'] ?? 0;

$conn->close();
?>

<?php include('../includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard | Happy Pet Adoption</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      background-color: #fff0f5;
      font-family: 'Segoe UI', sans-serif;
    }
    .card {
      border: none;
      border-radius: 1rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    .card-title {
      color: #d63384;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <h2 class="text-center mb-4">Welcome Admin 🎉</h2>
  <div class="row g-4">

    <div class="col-md-4">
      <div class="card text-center p-4">
        <h4 class="card-title">Total Pets</h4>
        <p class="display-5"><?= $petCount ?></p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card text-center p-4">
        <h4 class="card-title">Total Donations</h4>
        <p class="display-5">$<?= number_format($donationTotal, 2) ?></p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card text-center p-4">
        <h4 class="card-title">Adopters</h4>
        <p class="display-5"><?= $adopterCount ?></p>
      </div>
    </div>

  </div>
</div>

<?php include('../includes/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
