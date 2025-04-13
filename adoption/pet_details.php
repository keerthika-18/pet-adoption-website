<?php include('../includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pet Details | Happy Pet Adoption</title>
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
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
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
      margin-bottom: 10px;
    }
    .sub-title {
      text-align: center;
      font-size: 1.1rem;
      margin-bottom: 40px;
      color: #6c757d;
    }
    .pet-details {
      background-color: #ffe4ec;
      padding: 20px;
      border-radius: 1rem;
    }
    .btn-pink {
      background-color: #d63384;
      color: white;
    }
    .btn-pink:hover {
      background-color: #c0256b;
    }
  </style>
</head>
<body>

<!-- Pet Details Section -->
<section class="container py-5">
  <h2 class="section-title">Available Pets for Adoption</h2>
  <p class="sub-title">Meet some of our lovely pets ready to join their forever homes!</p>

  <div class="row">

    <!-- Pet 1 -->
    <div class="col-md-4 mb-4">
      <div class="card pet-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRx9ag9cUNDKLNqaEmPTJgan-MvuOw5xzrKYg&s" alt="Dog" class="card-img-top pet-img">
        <div class="card-body">
          <h5 class="card-title">Labrador Retriever</h5>
          <p class="card-text">Category: Dog</p>
          <button class="btn btn-pink" data-bs-toggle="collapse" data-bs-target="#details1">View Details</button>
          <div id="details1" class="collapse pet-details">
            <ul class="list-unstyled mt-3">
              <li><strong>Color:</strong> Yellow</li>
              <li><strong>Appearance:</strong> Friendly, outgoing, and gentle</li>
              <li><strong>Breed Type:</strong> Retriever</li>
              <li><strong>Diet:</strong> Dry dog food, fresh meat, vegetables</li>
              <li><strong>Genetics:</strong> Healthy and strong, low genetic diseases</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Pet 2 -->
    <div class="col-md-4 mb-4">
      <div class="card pet-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLwYtZ7UIHOEWwdXo13EXT_JZHR-NF7U-euw&s" alt="Cat" class="card-img-top pet-img">
        <div class="card-body">
          <h5 class="card-title">Persian Cat</h5>
          <p class="card-text">Category: Cat</p>
          <button class="btn btn-pink" data-bs-toggle="collapse" data-bs-target="#details2">View Details</button>
          <div id="details2" class="collapse pet-details">
            <ul class="list-unstyled mt-3">
              <li><strong>Color:</strong> White</li>
              <li><strong>Appearance:</strong> Fluffy, long fur with round face</li>
              <li><strong>Breed Type:</strong> Persian</li>
              <li><strong>Diet:</strong> Wet food, dry food, fish</li>
              <li><strong>Genetics:</strong> Prone to eye and breathing issues</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Pet 3 -->
    <div class="col-md-4 mb-4">
      <div class="card pet-card">
        <img src="https://i.pinimg.com/564x/36/ae/1b/36ae1bfd1aa416072e5232f1e2fde191.jpg" alt="Rabbit" class="card-img-top pet-img">
        <div class="card-body">
          <h5 class="card-title">Himalayan Rabbit</h5>
          <p class="card-text">Category: Rabbit</p>
          <button class="btn btn-pink" data-bs-toggle="collapse" data-bs-target="#details3">View Details</button>
          <div id="details3" class="collapse pet-details">
            <ul class="list-unstyled mt-3">
              <li><strong>Color:</strong> White with blue eyes</li>
              <li><strong>Appearance:</strong> Fluffy with a round face and long ears</li>
              <li><strong>Breed Type:</strong> Himalayan</li>
              <li><strong>Diet:</strong> Fresh hay, vegetables, pellets</li>
              <li><strong>Genetics:</strong> Generally healthy, no major genetic diseases</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Pet 4 -->
    <div class="col-md-4 mb-4">
      <div class="card pet-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQJANjZ9s7sa1oTqKEZR3X2qd6iK1ekqp3VQ&s" alt="German Shepherd" class="card-img-top pet-img">
        <div class="card-body">
          <h5 class="card-title">German Shepherd</h5>
          <p class="card-text">Category: Dog</p>
          <button class="btn btn-pink" data-bs-toggle="collapse" data-bs-target="#details4">View Details</button>
          <div id="details4" class="collapse pet-details">
            <ul class="list-unstyled mt-3">
              <li><strong>Color:</strong> Black and Tan</li>
              <li><strong>Appearance:</strong> Strong, loyal, intelligent</li>
              <li><strong>Breed Type:</strong> Working Dog</li>
              <li><strong>Diet:</strong> High-protein kibble, chicken, veggies</li>
              <li><strong>Genetics:</strong> Needs regular hip checks</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Pet 5 -->
    <div class="col-md-4 mb-4">
      <div class="card pet-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdV-B_pfZRPISOHB2sSjxj37Hc5wujHltrOw&s" alt="Siamese Cat" class="card-img-top pet-img">
        <div class="card-body">
          <h5 class="card-title">Siamese Cat</h5>
          <p class="card-text">Category: Cat</p>
          <button class="btn btn-pink" data-bs-toggle="collapse" data-bs-target="#details5">View Details</button>
          <div id="details5" class="collapse pet-details">
            <ul class="list-unstyled mt-3">
              <li><strong>Color:</strong> Cream with dark points</li>
              <li><strong>Appearance:</strong> Sleek body, blue eyes</li>
              <li><strong>Breed Type:</strong> Siamese</li>
              <li><strong>Diet:</strong> Protein-rich wet and dry food</li>
              <li><strong>Genetics:</strong> Vocal and social, healthy</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    

    <!-- Pet 7 -->
    <div class="col-md-4 mb-4">
      <div class="card pet-card">
        <img src="https://upload.wikimedia.org/wikipedia/commons/2/28/Psittacus_erithacus_-perching_on_tray-8d.jpg" alt="Parrot" class="card-img-top pet-img">
        <div class="card-body">
          <h5 class="card-title">African Grey Parrot</h5>
          <p class="card-text">Category: Bird</p>
          <button class="btn btn-pink" data-bs-toggle="collapse" data-bs-target="#details7">View Details</button>
          <div id="details7" class="collapse pet-details">
            <ul class="list-unstyled mt-3">
              <li><strong>Color:</strong> Grey with red tail</li>
              <li><strong>Appearance:</strong> Medium size, intelligent eyes</li>
              <li><strong>Breed Type:</strong> African Grey</li>
              <li><strong>Diet:</strong> Seeds, fruits, vegetables</li>
              <li><strong>Genetics:</strong> Highly intelligent, long lifespan</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include('../includes/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
