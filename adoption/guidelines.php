<?php include('../includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adoption Guidelines | Happy Pet Adoption</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #fff0f5;
      font-family: 'Segoe UI', sans-serif;
    }
    .guidelines-section {
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
    .guideline-box {
      background-color: #ffe4ec;
      padding: 30px;
      border-radius: 10px;
      margin-bottom: 20px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }
    .guideline-box h5 {
      color: #e83e8c;
    }
  </style>
</head>
<body>

<!-- Guidelines Section -->
<section class="guidelines-section">
  <div class="container">
    <h2 class="section-title">Adoption Guidelines</h2>
    <p class="sub-title">Please read our guidelines carefully before applying to adopt a pet.</p>

    <div class="row">
      <div class="col-md-6">
        <div class="guideline-box">
          <h5>1. Eligibility Criteria</h5>
          <p>You must be 18 years or older and capable of taking full responsibility for a pet.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="guideline-box">
          <h5>2. Home Environment</h5>
          <p>Ensure your home is pet-friendly and allows pets (if renting). We'll do a virtual inspection.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="guideline-box">
          <h5>3. Commitment</h5>
          <p>Pets are a long-term commitment. Be prepared to care for them physically and emotionally.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="guideline-box">
          <h5>4. Vet Checks & Vaccination</h5>
          <p>You must commit to regular vet visits and vaccination schedules after adoption.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="guideline-box">
          <h5>5. Financial Readiness</h5>
          <p>Owning a pet includes food, grooming, training, and health costs. Be financially ready.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="guideline-box">
          <h5>6. Return Policy</h5>
          <p>If unable to continue care, the pet must be returned to our shelter, not rehomed privately.</p>
        </div>
      </div>
    </div>

    <div class="text-center mt-4">
      <a href="adoption_form.php" class="btn btn-pink btn-lg">Proceed to Adoption Form</a>
    </div>
  </div>
</section>

<?php include('../includes/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
