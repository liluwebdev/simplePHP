<?php
// Define company details
$company_name = "My Company Name";
$company_phone = "My Company Phone Number";
$company_email = "My Company Email";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $company_name; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            scroll-behavior: smooth;
        }
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: #343a40;
            color: white;
        }
    </style>
</head>
<body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><?php echo $company_name; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <header class="hero">
        <div class="container">
            <h1>Welcome to <?php echo $company_name; ?></h1>
            <p>This is a simple PHP one-page site using Bootstrap.</p>
            <a href="#about" class="btn btn-primary">Learn More</a>
        </div>
    </header>
    
    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container text-center">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies.</p>
        </div>
    </section>
    
    <!-- Services Section -->
    <section id="services" class="py-5 bg-light">
        <div class="container text-center">
            <h2>Our Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <h4>Service 1</h4>
                    <p>Placeholder text for service 1.</p>
                </div>
                <div class="col-md-4">
                    <h4>Service 2</h4>
                    <p>Placeholder text for service 2.</p>
                </div>
                <div class="col-md-4">
                    <h4>Service 3</h4>
                    <p>Placeholder text for service 3.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container text-center">
            <h2>Contact Us</h2>
            <p>Email: <?php echo $company_email; ?> | Phone: <?php echo $company_phone; ?></p>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 <?php echo $company_name; ?>. All rights reserved.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
