<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>About</title>
</head>
<body>
    <div class="header5">
        <!-- Logo -->
        <a href="index.html" class="logo">BookClub<span>.</span></a>

        <!-- Navigation -->
        <nav>
        <ul>
            <li><a class="active" href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('category') }}">Shop</a></li>
            <li><a href="{{ route('display') }}">Brand</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
        </nav>

        <div class="icons">
            <a href="{{ route('wishlist') }}"><i class="fa-solid fa-heart"></i></a>
            <a href="{{ route('cart') }}"><i class="fa-solid fa-cart-shopping"></i></a>
            <a href="{{ route('userprofile') }}"><i class="fas fa-user" onclick="toggleForm(event)"></i></a>
        </div>
    </div>

    <!-- footer -->
    <footer class="footer-section">
        <div class="footer-container">
        <div class="footer-column">
            <h3>BookClub</h3>
            <p>info@bookclub.com</p>
            <p>Dhapasi, Kathmandu, Nepal</p>
            <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    
        <div class="footer-column">
            <h4>Company</h4>
            <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">FAQ</a></li>
            </ul>
        </div>
    
        <div class="footer-column">
            <h4>Support</h4>
            <ul>
            <li><a href="#">Terms and Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Shipping Policy</a></li>
            <li><a href="#">Sitemap</a></li>
            </ul>
        </div>
    
        <div class="footer-column">
            <h4>Payment</h4>
            <p>We accept:</p>
            <div class="payment-icons">
            <img src="khalti-icon.png" alt="Khalti">
            <img src="esewa-icon.png" alt="eSewa">
            <img src="visa-icon.png" alt="Visa Card">
            <img src="mastercard-icon.png" alt="MasterCard">
            </div>
            <h4>Download App</h4>
            <div class="app-icons">
            <img src="google-play-icon.png" alt="Google Play">
            <img src="app-store-icon.png" alt="App Store">
            </div>
        </div>
        </div>
        <div class="footer-bottom">
        <p>&copy; 2024 Clothify. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>