<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
<script src="{{ asset('js/script.js') }}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;900&display=swap" rel="stylesheet">
    <title>Bookclub</title>
</head>
<body>
<div class="header5">
        <!-- Logo -->
        <a href="index.html" class="logo">BookClub<span>.</span></a>

        <!-- Navigation -->
        <nav>
            <ul>
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="category.html">Shop</a></li>
                <li><a href="display.html">Brand</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contactus.html">Contact</a></li>
            </ul>
        </nav>

        <div class="icons">
            <a href="wishlist.html"><i class="fa-solid fa-heart"></i></a>
            <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
            <a href="userprofile.html"><i class="fas fa-user" onclick="toggleForm(event)"></i></a>
        </div>
    </div>

    <main class="landing-section">
        <div class="text-content">
            <h1>Your Book Is Waiting For You</h1>
            <p>
                We bring professional chefs to your home to prepare delicious, 
                customized meals at a fraction of the cost. <br> Get your food easily 
                and don’t worry about the time.
            </p>
            <div class="buttons">
                <a href="#" class="btn-primary">Book Menu</a>
                <a href="#" class="btn-secondary">Book a Table</a>
            </div>
        </div>
        <div class="image-content">
        <img src="{{ asset('images/book4.jpeg') }}" alt="Book">
        </div>
    </main>

    <section class="new-releases">
        <h2>New Released</h2>
        <p>Explore our latest collection of books available now!</p>
        <div class="carousel">
            <button class="prev-btn">&lt;</button>
            <div class="carousel-track-container">
                <ul class="carousel-track">
                    <li class="carousel-slide">
                        <img src="image/book1.jpg" alt="Book 1">
                        <h3>Book Title 1</h3>
                        <p>$15.99</p>
                    </li>
                    <li class="carousel-slide">
                        <img src="image/book2.jpeg" alt="Book 2">
                        <h3>Book Title 2</h3>
                        <p>$12.99</p>
                    </li>
                    <li class="carousel-slide">
                        <img src="image/book3.jpeg" alt="Book 3">
                        <h3>Book Title 3</h3>
                        <p>$18.99</p>
                    </li>
                    <li class="carousel-slide">
                        <img src="image/book4.jpeg" alt="Book 4">
                        <h3>Book Title 4</h3>
                        <p>$22.99</p>
                    </li>
                    <li class="carousel-slide">
                        <img src="image/book5.jpeg" alt="Book 5">
                        <h3>Book Title 5</h3>
                        <p>$10.99</p>
                    </li>
                    <li class="carousel-slide">
                        <img src="image/book3.jpeg" alt="Book 5">
                        <h3>Book Title 5</h3>
                        <p>$10.99</p>
                    </li>
                    <li class="carousel-slide">
                        <img src="image/book2.jpeg" alt="Book 5">
                        <h3>Book Title 5</h3>
                        <p>$10.99</p>
                    </li>
                    <li class="carousel-slide">
                        <img src="image/book4.jpeg" alt="Book 5">
                        <h3>Book Title 5</h3>
                        <p>$10.99</p>
                    </li>
                </ul>
            </div>
            <button class="next-btn">&gt;</button>
        </div>
    </section>

    <section class="book-series">
        <div class="book-card">
          <div class="book-image">
            <img id="book-cover" src="image/book5.jpeg" alt="Book Cover">
          </div>
          <div class="book-details">
            <p class="new-arrival">New Arrival</p>
            <h3 id="book-title">Book Title: The Beginning</h3>
            <div class="rating">
              <span id="book-rating">★ ★ ★ ★ ☆</span>
              <span class="reviews" id="book-reviews">(4.5/10+)</span>
            </div>
            <p class="price" id="book-price">Rs. 350</p>
            <div class="series-selector">
              <p>Series:</p>
              <div class="series-numbers">
                <span class="series-number active" data-series="1">1</span>
                <span class="series-number" data-series="2">2</span>
                <span class="series-number" data-series="3">3</span>
              </div>
            </div>
            <div class="actions">
              <button class="add-to-cart">Add to cart</button>
              <button class="wishlist"><i class="fa fa-heart"></i></button>
            </div>
          </div>
        </div>
      </section>

    <!-- Newsletter -->
    <div class="newsletter-section">
        <h2>Subscribe to Our Newsletter</h2>
        <p>Stay updated with our latest news, offers, and exclusive deals!</p>
        <form class="newsletter-form">
        <input type="email" placeholder="Enter your email address" required />
        <button type="submit">Subscribe</button>
        </form>
        <p class="privacy-note">We respect your privacy. Unsubscribe anytime.</p>
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
