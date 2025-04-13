<?php
// about.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Pet Adoption</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #fff0f5;
            color: #333;
        }
        .hero {
            background: linear-gradient(to right, #fbd6e3, #fff0f5);
            color: #8b1c57;
            padding: 100px 0;
        }
        .section-title {
            font-weight: bold;
            margin-bottom: 30px;
            color: #d63384;
        }
        .highlight {
            color: #e83e8c;
        }
        .card {
            border: none;
            border-radius: 1rem;
            background-color: #ffffff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .icon-img {
            margin-bottom: 1rem;
        }
        .content-section {
            background-color: #ffe4ec;
            padding: 60px 0;
            border-radius: 1rem;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<?php include('includes/navbar.php'); ?>

<!-- Hero Section -->
<section class="hero text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">About Our Pet Adoption Platform</h1>
        <p class="lead">Creating forever homes with love, care, and compassion.</p>
    </div>
</section>

<!-- Vision & Mission Section -->
<section class="content-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 mb-4">
                <h2 class="section-title">Our Vision</h2>
                <p>
                    To build a world where every pet has a safe, loving, and permanent home.
                    We envision a future where technology bridges the gap between abandoned pets and compassionate adopters globally.
                </p>
            </div>
            <div class="col-lg-6 mb-4">
                <h2 class="section-title">Our Mission</h2>
                <p>
                    Our mission is to simplify and secure the adoption process through a centralized platform.
                    We aim to empower shelters, support adopters, and ensure the wellbeing of every pet through real-time availability,
                    medical transparency, and post-adoption guidance.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center section-title">Why Choose Us?</h2>

        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="card text-center p-4">
                    <img src="../assets/images/icons/heart.png" alt="Heart Icon" class="icon-img" width="50">
                    <h5>Adoption Made Easy</h5>
                    <p>Find pets based on your location, lifestyle, and preferences. Our AI helps you match with the perfect companion.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center p-4">
                    <img src="../assets/images/icons/shield.png" alt="Shield Icon" class="icon-img" width="50">
                    <h5>Safe & Verified</h5>
                    <p>All pet listings are verified, with health records and vaccination details. Your safety and trust matter to us.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center p-4">
                    <img src="../assets/images/icons/chatbubble.png" alt="Chat Icon" class="icon-img" width="50">
                    <h5>Connect with Shelters</h5>
                    <p>Use our in-built messaging system to chat directly with shelters and get your adoption approved quickly.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include('includes/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
