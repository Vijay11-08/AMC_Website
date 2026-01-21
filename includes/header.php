<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'ABC Engineering & Conservancy'; ?> | Industrial Automation</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container navbar">
            <a href="index.php" class="logo">ABC <span>Engineering</span></a>
            <div class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>
            <nav class="nav-links">
                <a href="index.php" class="<?php echo ($activePage == 'home') ? 'active' : ''; ?>">Home</a>
                <a href="about.php" class="<?php echo ($activePage == 'about') ? 'active' : ''; ?>">About Us</a>
                <a href="services.php" class="<?php echo ($activePage == 'services') ? 'active' : ''; ?>">Services</a>
                <a href="resources.php" class="<?php echo ($activePage == 'resources') ? 'active' : ''; ?>">Resources</a>
                <a href="contact.php" class="<?php echo ($activePage == 'contact') ? 'active' : ''; ?>">Contact</a>
            </nav>
        </div>
    </header>
