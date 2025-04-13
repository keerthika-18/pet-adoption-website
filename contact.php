<?php
// include 'includes/header.php'; // Uncomment if you have a header file
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us | Happy Pet Adoption</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #fff0f5;
      font-family: 'Segoe UI', sans-serif;
    }
    .contact-section {
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
    .social-link {
      text-align: center;
      margin-top: 30px;
    }
    .social-link a {
      color: #d63384;
      font-size: 1.2rem;
      text-decoration: none;
    }
    .social-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<section class="contact-section">
  <div class="container">
    <h2 class="section-title">Contact Happy Pet Adoption</h2>
    <p class="sub-title">We’d love to hear from you! Fill out the form below or reach out on Instagram.</p>

    <div class="row align-items-center justify-content-center">
      <!-- Cartoon Dog -->
      <div class="col-md-2 text-center mb-4 mb-md-0">
        <img src="assets/images/pets/dogcartoon.jpg" alt="Cartoon Dog" class="img-fluid" style="max-width: 130px;">
      </div>

      <!-- Contact Form -->
      <div class="col-md-8">
        <form action="mailto:happypetadoption@gmail.com" method="POST" enctype="text/plain">
          <div class="mb-3">
            <label for="name" class="form-label">Your Name *</label>
            <input type="text" class="form-control" id="name" name="Name" required />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Your Email *</label>
            <input type="email" class="form-control" id="email" name="Email" required />
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Your Message *</label>
            <textarea class="form-control" id="message" name="Message" rows="5" required></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-pink px-5">Send Message</button>
          </div>
        </form>
      </div>

      <!-- Cartoon Cat -->
      <div class="col-md-2 text-center mt-4 mt-md-0">
        <img src="assets/images/pets/catcartoon.jpg" alt="Cartoon Cat" class="img-fluid" style="max-width: 130px;">
      </div>
    </div>

    <!-- Instagram Contact -->
    <div class="social-link mt-5">
      <p>Or reach out to us on Instagram:</p>
      <a href="https://www.instagram.com/happypetadoption" target="_blank">
        📸 @happypetadoption
      </a>
    </div>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php
// include 'includes/footer.php'; // Uncomment if you have a footer file
?>
