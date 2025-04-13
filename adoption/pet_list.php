<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "Keerthi@18";
$dbname = "pet_adoption";
$port = 3307;  // Custom port

// Create connection with port
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch pet details from the database
$sql = "SELECT * FROM pets";
$result = $conn->query($sql);
?>

<?php include('../includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pet List | Happy Pet Adoption</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #fff0f5;
      font-family: 'Segoe UI', sans-serif;
    }
    .pet-card {
      border: none;
      border-radius: 1rem;
      background-color: #ffffff;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      transition: transform 0.3s ease;
    }
    .pet-card:hover {
      transform: translateY(-10px);
    }
    .pet-img {
      max-height: 200px;
      object-fit: cover;
    }
    .section-title {
      color: #d63384;
      font-weight: bold;
      text-align: center;
    }
  </style>
</head>
<body>

<!-- Pet List Section -->
<section class="container py-5">
  <h2 class="section-title">Pet Details List</h2>
  <div class="row">
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='col-md-4 mb-4'>
                    <div class='card pet-card'>
                        <div class='card-body'>
                            <h5 class='card-title'>" . htmlspecialchars($row['pet_name']) . "</h5>
                            <p class='card-text'><strong>Color:</strong> " . htmlspecialchars($row['color']) . "</p>
                            <p class='card-text'><strong>Breed:</strong> " . htmlspecialchars($row['breed']) . "</p>
                            <p class='card-text'><strong>Appearance:</strong> " . htmlspecialchars($row['appearance']) . "</p>
                            <p class='card-text'><strong>Diet:</strong> " . htmlspecialchars($row['diet']) . "</p>
                        </div>
                    </div>
                </div>";
        }
    } else {
        echo "<p class='text-center'>No pet details found!</p>";
    }
    ?>
  </div>
</section>

<!-- Footer -->
<?php include('../includes/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
