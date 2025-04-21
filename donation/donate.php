<?php include('../includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Make a Donation | Happy Pet Adoption</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      background-color: #fff0f5;
      font-family: 'Segoe UI', sans-serif;
    }
    .donation-container {
      background-color: #ffffff;
      border-radius: 1rem;
      padding: 30px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      margin: 40px auto;
    }
    .section-title {
      color: #d63384;
      font-weight: bold;
      text-align: center;
      margin-bottom: 20px;
    }
    .form-label {
      font-weight: 500;
    }
    .btn-donate {
      background-color: #d63384;
      color: white;
      font-weight: 600;
      border: none;
    }
    .btn-donate:hover {
      background-color: #c0246a;
    }
  </style>
</head>
<body>

<section class="container">
  <div class="donation-container">
    <h2 class="section-title">Make a Donation</h2>
    <p class="text-center text-muted mb-4">Your support helps us rescue, care for, and rehome pets in need. Every little bit counts!</p>

    <form action="process_donation.php" method="POST">
      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" name="donor_name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" name="donor_email" required>
      </div>
      <div class="mb-3">
        <label for="amount" class="form-label">Donation Amount ($)</label>
        <input type="number" class="form-control" id="amount" name="donation_amount" required min="1">
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Message (optional)</label>
        <textarea class="form-control" id="message" name="donor_message" rows="3"></textarea>
      </div>
      <div class="d-grid">
        <button type="submit" name="donate" class="btn btn-donate">Donate Now</button>
      </div>
    </form>
    <?php
  session_start();
  if (isset($_SESSION['donation_success'])) {
    echo "<div class='alert alert-success mt-4 text-center'>".$_SESSION['donation_success']."</div>";
    unset($_SESSION['donation_success']);
  }

  if (isset($_SESSION['donation_error'])) {
    echo "<div class='alert alert-danger mt-4 text-center'>".$_SESSION['donation_error']."</div>";
    unset($_SESSION['donation_error']);
  }
?>

  </div>
</section>

<?php include('../includes/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
