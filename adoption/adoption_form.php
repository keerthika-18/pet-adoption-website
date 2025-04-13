<?php include('../includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pet Adoption Form | Happy Pet Adoption</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #fff0f5;
      font-family: 'Segoe UI', sans-serif;
    }
    .form-section {
      padding: 60px 0;
    }
    .section-title {
      color: #d63384;
      font-weight: bold;
      text-align: center;
      margin-bottom: 10px;
    }
    .sub-title {
      text-align: center;
      font-size: 1.1rem;
      margin-bottom: 40px;
      color: #6c757d;
    }
    .form-control:focus {
      border-color: #e83e8c;
      box-shadow: 0 0 0 0.2rem rgba(232, 62, 140, 0.25);
    }
    .btn-pink {
      background-color: #e83e8c;
      color: white;
    }
    .btn-pink:hover {
      background-color: #c2185b;
    }
  </style>
</head>
<body>

<!-- Adoption Form Section -->
<section class="form-section">
  <div class="container">
    <h2 class="section-title">Pet Adoption Application</h2>
    <p class="sub-title">Fill in your details to begin your adoption journey!</p>

    <div class="row justify-content-center">
      <div class="col-lg-8">
      <form action="process_adoption.php" method="POST">
  <div class="mb-3">
    <label for="name" class="form-label">Full Name *</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email Address *</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone Number *</label>
    <input type="tel" class="form-control" id="phone" name="phone" required>
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Home Address *</label>
    <textarea class="form-control" id="address" name="address" rows="2" required></textarea>
  </div>
  <div class="mb-3">
    <label for="pet-preference" class="form-label">Preferred Pet (Dog, Cat, etc.)</label>
    <input type="text" class="form-control" id="pet-preference" name="pet_preference">
  </div>
  <div class="mb-3">
    <label for="reason" class="form-label">Why do you want to adopt? *</label>
    <textarea class="form-control" id="reason" name="reason" rows="3" required></textarea>
  </div>
  <div class="mb-3">
    <label for="experience" class="form-label">Do you have previous experience with pets?</label>
    <textarea class="form-control" id="experience" name="experience" rows="3"></textarea>
  </div>
  <div class="mb-4 text-center">
    <button type="submit" class="btn btn-pink px-5">Submit Application</button>
  </div>
</form>
      </div>
    </div>
  </div>
</section>

<?php include('../includes/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
