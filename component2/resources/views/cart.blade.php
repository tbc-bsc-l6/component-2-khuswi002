<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Shopping Cart</title>
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

    <section class="cart-section">
        <div class="container">
            <h2>Your Cart</h2>

            <div class="cart-items">
                <!-- Example Cart Item -->
                <div class="cart-item" id="cart-product-1">
                    <div class="cart-product-info">
                        <div class="cart-product-image">
                            <img src="image/book3.jpeg" alt="Product 1">
                        </div>
                        <div class="cart-product-details">
                            <h3 class="cart-product-name">Product 1</h3>
                            <p class="cart-product-description">Description of the product goes here.</p>
                        </div>
                    </div>
                    <div class="cart-product-quantity">
                        <button class="quantity-btn" onclick="updateQuantity('decrease', 1)">-</button>
                        <input type="number" id="quantity-1" value="1" readonly>
                        <button class="quantity-btn" onclick="updateQuantity('increase', 1)">+</button>
                    </div>
                    <div class="cart-product-price">
                        <span>$49.99</span>
                    </div>
                    <div class="cart-actions">
                        <a href="remove_from_cart.php?product_id=1" class="remove-product"><i class="fa fa-trash fa-2x"></i></a>
                    </div>
                </div>

                <!-- Another Cart Item -->
                <div class="cart-item" id="cart-product-2">
                    <div class="cart-product-info">
                        <div class="cart-product-image">
                            <img src="image/book4.jpeg" alt="Product 2">
                        </div>
                        <div class="cart-product-details">
                            <h3 class="cart-product-name">Product 2</h3>
                            <p class="cart-product-description">Description of the product goes here.</p>
                        </div>
                    </div>
                    <div class="cart-product-quantity">
                        <button class="quantity-btn" onclick="updateQuantity('decrease', 1)">-</button>
                        <input type="number" id="quantity-1" value="1" readonly>
                        <button class="quantity-btn" onclick="updateQuantity('increase', 1)">+</button>
                    </div>
                    <div class="cart-product-price">
                        <span>$89.99</span>
                    </div>
                    <div class="cart-actions">
                        <a href="remove_from_cart.php?product_id=2" class="remove-product"><i class="fa fa-trash fa-2x"></i></a>
                    </div>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="cart-summary">
                <h3>Cart Summary</h3>
                <div class="summary-item">
                    <span>Total Items</span>
                    <span>2</span>
                </div>
                <div class="summary-item">
                    <span>Total Price</span>
                    <span>$139.98</span>
                </div>
                <a href="{{ route('checkout') }}"><button class="checkout-btn">Proceed to Checkout</button></a>
            </div>
        </div>
    </section>

    <script>
        // Function to update the quantity of the item
        function updateQuantity(action, productId) {
            // Get the input field
            const quantityInput = document.getElementById('quantity-' + productId);
            let quantity = parseInt(quantityInput.value);

            if (action === 'increase') {
                quantity += 1;  // Increase quantity by 1
            } else if (action === 'decrease' && quantity > 1) {
                quantity -= 1;  // Decrease quantity by 1, but ensure it's not less than 1
            }

            // Set the new quantity value
            quantityInput.value = quantity;
            
            // Optional: Update the cart summary or price dynamically
            // You can call a function here to update the cart total if needed
            updateCartSummary();
        }

        // Optional: Update the cart total
        function updateCartSummary() {
            // Example function to update the total price or cart summary
            const quantity = document.getElementById('quantity-1').value;
            const pricePerItem = 49.99; // Example price per item
            const totalPrice = quantity * pricePerItem;

            // Update the total price on the page
            document.getElementById('total-price').textContent = '$' + totalPrice.toFixed(2);
        }
    </script>

      <!-- footer -->
    <footer class="footer-section">
        <div class="footer-container">
        <div class="footer-column">
            <h3>BookClub.</h3>
            <p>info@bookclub.com</p>
            <p>Jhamsikhel, Lalitpur, Nepal</p>
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
            <li><a href="#">Customer Service</a></li>
            <li><a href="#">Shipping Policy</a></li>
            <li><a href="#">Sitemap</a></li>
            </ul>
        </div>
    
        <div class="footer-column">
            <h4>Help</h4>
            <ul>
            <li><a href="#">Help Center</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Report a Problem</a></li>
            <li><a href="#">Support Requests</a></li>
            </ul>
        </div>
        </div>
        <div class="footer-bottom">
        <p>&copy; 2025 BookClub. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>