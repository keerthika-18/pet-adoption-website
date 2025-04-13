<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pet Adoption Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">PetAdopt</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="donation/donate.php">Donation</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="admin/login.php">Admin Page</a>
        </li>

        <!-- Dropdown for Adoption -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="adoptionDropdown" role="button" data-bs-toggle="dropdown">
            Adoption
          </a>
          <ul class="dropdown-menu" aria-labelledby="adoptionDropdown">
            <li><a class="dropdown-item" href="adoption/guidelines.php">Guidelines</a></li>
            <li><a class="dropdown-item" href="adoption/adoption_form.php">Adoption Form</a></li>
            <li><a class="dropdown-item" href="adoption/pet_details.php">View pet</a></li>
            <li><a href="adoption/pet_form.php" class="btn btn-pink">Pet Details Form</a>
            </li>
            
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>
<!-- Navbar End -->


<!-- Home Content -->
<div class="container mt-5">
  <h1 class="text-center">Welcome to Pet Adoption Platform</h1>
  <p class="text-center">Adopt. Rescue. Love. Give a home to a furry friend!</p>
</div>

<!-- Bootstrap JS CDN (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
