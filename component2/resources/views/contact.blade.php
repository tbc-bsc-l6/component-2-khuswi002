<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/contactus.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Contact</title>
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

    <div class="contact-page">
      <div class="box">
        <h1>Get in touch</h1>
      </div>
      <div class="form-newsletter-container">
        <!-- Contact Form -->
        <div class="contact-form">
          <div class="form-row">
            <input type="text" class="form-input" placeholder="Name">
            <input type="text" class="form-input" placeholder="Phone">
          </div>
            <input type="email" class="email-input" placeholder="Email">
            <textarea class="form-textarea" placeholder="Message"></textarea>
            <button class="submit-button">Submit Button</button>
        </div>

        <!-- Newsletter -->
        <div class="newsletter">
            <h3>Our Newsletters</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque, purus ut pulvinar mattis.</p>
            <input type="email" class="newsletter-input" placeholder="Email">
            <button class="newsletter-button">Submit Button</button>
        </div>
    </div>

      <!-- Contact Info Boxes -->
      <div class="contact-info">
          <div class="info-box">
              <span><i class="fa-solid fa-phone"></i></span>
              <p>+977 9810843301</p>
              <p>Lorem ipsum dolor sit amet...</p>
          </div>
          <div class="info-box">
              <span><i class="fa-solid fa-envelope"></i></span>
              <p>info@bookhub.com</p>
              <p>Lorem ipsum dolor sit amet...</p>
          </div>
          <div class="info-box">
              <span><i class="fa-solid fa-location-dot"></i></span>
              <p>Lalitpur, Nepal</p>
              <p>Lorem ipsum dolor sit amet...</p>
          </div>
      </div>

      <!-- Map Section -->
      <div class="map">
          <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.8142906511457!2d85.3195183!3d27.692134099999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b19295555f%3A0xabfe5f4b310f97de!2sThe%20British%20College%2C%20Kathmandu!5e0!3m2!1sen!2snp!4v1712207485859!5m2!1sen!2snp"
              width="100%"
              height="300"
              style="border:0;"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
          </iframe>
      </div>
  </div>

    <!-- footer -->
  <footer class="footer-section">
    <div class="footer-container">
      <div class="footer-column">
        <h3>Clothify</h3>
        <p>info@clothify.com</p>
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