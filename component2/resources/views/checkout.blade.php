<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Checkout</title>
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

    <div class="container-wrapper">
        <div class="checkout-container">
            <form class="checkout-form">
                <h2>Checkout</h2>
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="John Doe" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="example@mail.com" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" placeholder="123 Main St" required>
                </div>
                <div class="form-group">
                    <label for="card">Card Details</label>
                    <input type="text" id="card" name="card" placeholder="1234 5678 9012 3456" required>
                </div>
                <div class="radio-group">
                    <input type="radio" id="paypal" name="payment">
                    <label for="paypal"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal"></label>
                </div>
                <button type="submit">Pay Now</button>
                <p class="note">Your payment is secure and encrypted.</p>
            </form>
            <div class="order-summary">
                <h3>Order Summary</h3>
                <ul>
                    <li><span>Item 1</span><span>$10.00</span></li>
                    <li><span>Item 2</span><span>$15.00</span></li>
                    <li><span>Item 3</span><span>$8.00</span></li>
                </ul>
                <div class="total">
                    <span>Total</span><span>$33.00</span>
                </div>
            </div>
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