<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pet Adoption Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

  <style>
    body {
      background-color: #fff0f5;
      font-family: 'Segoe UI', sans-serif;
    }

    .navbar {
      background: linear-gradient(to right, #ff7eb9, #ff65a3);
      position: sticky;
      top: 0;
      z-index: 1000;
      transition: background-color 0.3s ease;
    }

    .navbar:hover {
      background: linear-gradient(to right, #ff65a3, #ff7eb9);
    }

    .navbar-brand, .nav-link {
      transition: color 0.3s ease;
    }

    .navbar-brand:hover, .nav-link:hover {
      color: #fff;
    }

    .guidelines-section {
      padding: 60px 0;
    }

    .section-title {
      color: #d63384;
      font-weight: bold;
      text-align: center;
      margin-bottom: 10px;
      text-transform: uppercase;
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
      transition: all 0.3s ease;
    }

    .guideline-box:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .guideline-box h5 {
      color: #e83e8c;
    }

    .img-container {
      text-align: center;
      margin: 30px 0;
    }

    .img-container img {
      width: 45%;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      margin: 10px;
      transition: transform 0.3s ease;
    }

    .img-container img:hover {
      transform: scale(1.05);
    }

    /* Call to action button */
    .cta-button {
      background-color: #e83e8c;
      color: white;
      padding: 15px 30px;
      border-radius: 30px;
      font-size: 1.2rem;
      transition: background-color 0.3s ease;
    }

    .cta-button:hover {
      background-color: #d63384;
    }

    /* Add a smooth scroll effect */
    html {
      scroll-behavior: smooth;
    }

    .testimonial-card {
      background-color: #ffebf5;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .testimonial-card:hover {
      transform: scale(1.05);
    }

    .testimonial-card img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      margin-bottom: 20px;
    }

    .testimonial-section {
      background-color: #ffe4ec;
      padding: 60px 0;
    }

  </style>
</head>
<body>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark">
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
            <li><a class="dropdown-item" href="adoption/pet_details.php">View Pet</a></li>
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
<div class="container mt-5" data-aos="fade-up" data-aos-duration="1500">
  <h1 class="text-center text-uppercase" style="color: #d63384;">Welcome to Pet Adoption Platform</h1>
  <p class="text-center text-muted">Adopt. Rescue. Love. Give a home to a furry friend!</p>
  
  <!-- Image Section -->
  <div class="img-container" data-aos="fade-up" data-aos-duration="1500">
    <img src="https://t4.ftcdn.net/jpg/06/10/13/27/360_F_610132710_9M0fM6ggD6Z38yfNdPWQ9w3j6uCOZ54y.jpg" alt="Adopt Your Pet">
    <img src="https://t3.ftcdn.net/jpg/00/55/11/02/360_F_55110240_6ziDUe8c0NDmBsDBae7692ozuzfOJWHG.jpg" alt="Find a Furry Friend">
  </div>

  <!-- Guidelines Section -->
  <div class="guidelines-section" data-aos="fade-up" data-aos-duration="1500">
    <h2 class="section-title">Adoption Guidelines</h2>
    <p class="sub-title">Everything you need to know before adopting a pet</p>

    <div class="guideline-box">
      <h5>Step 1: Choose a Pet</h5>
      <p>Browse our pet catalog and choose a pet that fits your lifestyle and preferences.</p>
    </div>

    <div class="guideline-box">
      <h5>Step 2: Fill Out Adoption Form</h5>
      <p>Complete the adoption form to provide us with details about your home and living situation.</p>
    </div>

    <div class="guideline-box">
      <h5>Step 3: Meet Your New Pet</h5>
      <p>Once your application is reviewed, you’ll be invited to meet your new furry friend and finalize the adoption.</p>
    </div>
  </div>

  <!-- Call to Action Section -->
  <div class="text-center mt-5">
    <a href="donation/donate.php" class="cta-button">Make a Donation Today</a>
  </div>

</div>

<!-- Testimonial Section -->
<div class="testimonial-section">
  <div class="container">
    <h2 class="section-title" data-aos="fade-up" data-aos-duration="1500">What Our Happy Adopters Say</h2>
    <p class="sub-title" data-aos="fade-up" data-aos-duration="1500">Our adopters share their amazing experiences</p>

    <div class="row">
      <div class="col-md-4" data-aos="fade-up" data-aos-duration="1500">
        <div class="testimonial-card">
          <img src="https://static.vecteezy.com/system/resources/previews/000/439/863/non_2x/vector-users-icon.jpg" alt="User 1">
          <h5>John Doe</h5>
          <p>"Adopting a pet from PetAdopt was one of the best decisions I've ever made. My new furry friend is a joy!"</p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-duration="1500">
        <div class="testimonial-card">
          <img src="https://cdn-icons-png.flaticon.com/512/219/219970.png" alt="User 2">
          <h5>Jane Smith</h5>
          <p>"The adoption process was smooth, and I found the perfect companion. Highly recommend this platform!"</p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-duration="1500">
        <div class="testimonial-card">
          <img src="https://png.pngtree.com/png-vector/20221203/ourmid/pngtree-cartoon-style-female-user-profile-icon-vector-illustraton-png-image_6489286.png" alt="User 3">
          <h5>Mark Lee</h5>
          <p>"PetAdopt not only helped me find a pet but also educated me on how to care for them. Great service!"</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS CDN (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>
