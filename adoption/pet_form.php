<?php include('../includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pet Details Form | Pet Adoption</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: linear-gradient(135deg, #ffe6f0 0%, #f9f9f9 100%);
      font-family: 'Segoe UI', sans-serif;
    }
    .form-section {
      padding: 80px 0;
    }
    .section-title {
      color: #d63384;
      font-weight: bold;
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 40px;
    }
    .card {
      border: none;
      border-radius: 20px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      padding: 30px;
    }
    .form-label {
      font-weight: 600;
      color: #333;
    }
    .btn-pink {
      background-color: #d63384;
      color: white;
      border: none;
      transition: 0.3s;
    }
    .btn-pink:hover {
      background-color: #b02a6e;
    }
  </style>
</head>
<body>

<section class="form-section">
  <div class="container">
    <h2 class="section-title">🐾 Enter Pet Details</h2>
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <div class="card">
          <form action="process_pet_form.php" method="POST">
            <div class="mb-3">
              <label for="pet_name" class="form-label">Pet Name</label>
              <input type="text" class="form-control" id="pet_name" name="pet_name" placeholder="e.g. Max, Bella" required />
            </div>
            <div class="mb-3">
              <label for="color" class="form-label">Color</label>
              <input type="text" class="form-control" id="color" name="color" placeholder="e.g. Brown, Black & White" required />
            </div>
            <div class="mb-3">
              <label for="appearance" class="form-label">Appearance</label>
              <textarea class="form-control" id="appearance" name="appearance" rows="3" placeholder="Describe fur type, size, special markings..." required></textarea>
            </div>
            <div class="mb-3">
              <label for="breed" class="form-label">Breed</label>
              <input type="text" class="form-control" id="breed" name="breed" placeholder="e.g. Labrador, Persian Cat" required />
            </div>
            <div class="mb-3">
              <label for="diet" class="form-label">Diet</label>
              <textarea class="form-control" id="diet" name="diet" rows="3" placeholder="Mention any special food habits..." required></textarea>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-pink btn-lg px-5">Submit Pet Details</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include('../includes/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
