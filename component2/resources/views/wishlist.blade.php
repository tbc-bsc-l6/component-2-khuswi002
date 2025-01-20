<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/wishlist.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Wishlist</title>
</head>
<body>
    <div class="header5">
        <!-- Logo -->
        <a href="index.html" class="logo">BookClub<span>.</span></a>

        <!-- Navigation -->
        <nav>
        <ul>
            <li><a class="active" href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('category') }}">Category</a></li>
            <li><a href="{{ route('display') }}">Shop</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
        </nav>

        <div class="icons">
            <a href="{{ route('wishlist') }}"><i class="fa-solid fa-heart"></i></a>
            <a href="{{ route('cart') }}"><i class="fa-solid fa-cart-shopping"></i></a>
            <a href="{{ route('userprofile') }}"><i class="fas fa-user" onclick="toggleForm(event)"></i></a>
        </div>
    </div>

    <section class="contactsection">
        <div class="container-lg">
            <h2>Wish List</h2>
            <div class="wish-list-items">
                <!-- Static Wishlist Item -->
                <div class="wish-list-item" id="product-1">
                    <div class="product-info">
                        <div class="product-image">
                            <img src="image/book3.jpeg" alt="Product 1">
                        </div>
                        <div class="product-details">
                            <h3 class="product-name">Product 1</h3>
                            <p class="product-description">Description for Product 1.</p>
                        </div>
                    </div>
                    <div class="price-container">
                        <span class="product-price">$49.99</span>
                    </div>
                    <div class="actions-container">
                        <a href="delete_wishlist.php?product_id=1" class="delete-product"><i class="fa fa-trash-alt fa-2x"></i></a>
                        
                        <!-- Add to Cart Form -->
                        <form method="POST" action="add_to_cart.php">
                            <input type="hidden" name="product_id" value="1">
                            <input type="hidden" name="product_name" value="Product 1">
                            <input type="hidden" name="product_price" value="49.99">
                            <input type="hidden" name="product_image" value="example-image-1.jpg">
                            <button type="submit" name="add_to_cart" class="add-to-cart"><i class="fa fa-cart-plus fa-2x"></i></button>
                        </form>
                    </div>
                </div>
    
                <!-- Another Static Wishlist Item -->
                <div class="wish-list-item" id="product-2">
                    <div class="product-info">
                        <div class="product-image">
                            <img src="image/book4.jpeg" alt="Product 2">
                        </div>
                        <div class="product-details">
                            <h3 class="product-name">Product 2</h3>
                            <p class="product-description">Description for Product 2.</p>
                        </div>
                    </div>
                    <div class="price-container">
                        <span class="product-price">$89.99</span>
                    </div>
                    <div class="actions-container">
                        <a href="delete_wishlist.php?product_id=2" class="delete-product"><i class="fa fa-trash-alt fa-2x"></i></a>
                        
                        <!-- Add to Cart Form -->
                        <form method="POST" action="add_to_cart.php">
                            <input type="hidden" name="product_id" value="2">
                            <input type="hidden" name="product_name" value="Product 2">
                            <input type="hidden" name="product_price" value="89.99">
                            <input type="hidden" name="product_image" value="example-image-2.jpg">
                            <button type="submit" name="add_to_cart" class="add-to-cart"><i class="fa fa-cart-plus fa-2x"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
    function deleteWishlistProduct(productId) {
        if (confirm("Are you sure you want to delete this item from your wishlist?")) {
            // Simulate an action for removing the product
            document.getElementById("product-" + productId).remove();
            alert("Product removed from wishlist!");
        }
    }
    </script>
    

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