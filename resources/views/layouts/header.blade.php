<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Header with Dark/Light Mode</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="{{ asset('css/new.css') }}" rel="stylesheet">
  <!-- Icons (Bootstrap Icons) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
  <!-- Header Section -->
  <header class="header py-2">
    <div class="container d-flex justify-content-between align-items-center">
      <a href="#" class="d-flex align-items-center text-decoration-none">
        <img src="{{ URL('images/logo.png') }}" alt="Logo" class="me-2" style="height: 40px;">
        <span style="font-weight: bold; font-size: 25px;
                        background: linear-gradient(to right, #e2a17c 10%, #ca794d 100%, rgba(218, 122, 13, 0) 100%);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;">NexOnPackaging</span>
      </a>
      <div class="d-none d-md-flex align-items-center">
        <a href="mailto:sales@nexonpackaging.com" id="email-link">
          <i id="email-icon" class="fas fa-envelope"></i> sales@nexonpackaging.com
        </a>
        <span id="divider" class="mx-1">|</span>
        <div class="call-section text-center">
            <p class="call-text mb-0">Speak with a Packaging Expert</p>
            <a href="tel:(000) 000-0000" class="call-number text-decoration-none">(000) 000-0000</a>
          </div>
          
        {{-- <button id="darkModeToggle" class="btn btn-outline-secondary dark-mode-btn">
          <i class="bi bi-moon"></i> Dark Mode
        </button> --}}
      </div>
    </div>
  </header>

  <!-- Navbar Section -->
<nav class="navbar navbar-expand-lg navbar-light py-2 sticky-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Testimonials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
        <div class="d-flex align-items-center">
          <a href="#" class="btn btn-outline-dark me-2">Search</a>
          <a href="#" class="btn btn-danger">Get a Quote</a>
        </div>
      </div>
    </div>
</nav>


<div class="hero-section bg-white text-dark dark-mode">
  <div class="container py-5">
      <div class="row align-items-center">
          <!-- Left Content -->
          <div class="col-lg-7 text-center text-lg-start">
              <h1 class="display-4 fw-bold">
                Custom boxes made easy for retail
              </h1>
              <p class="lead text-muted">
                Supercharge your brand through the power of custom boxes and custom packaging that's big on wow-factor. With low minimums, free design expertise, super-fast delivery, and unlimited customization.
              </p>
              <a href="#" class="btn btn-primary me-3">
                  Get Started
                  <i class="bi bi-arrow-right ms-2"></i>
              </a>
              <a href="#" class="btn btn-outline-dark">
                  Speak to Sales
              </a>
          </div>

          <!-- Right Image (Hidden on Mobile) -->
          <div class="col-lg-5 d-none d-lg-block">
              <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png"
                   class="img-fluid" alt="mockup">
          </div>
      </div>
  </div>
</div>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>

</html>
