<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/details.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Display</title>
</head>
<body>
    <div class="header5">
        <!-- Logo -->
        <a href="welcome.blade.php" class="logo">BookClub<span>.</span></a>

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

    <!-- product-container -->
    <section class="product-container">
        <div class="product-details">
            <div class="product-image">
                <img src="{{ asset('images/book3.jpeg') }}" alt="Product Image">
            </div>
            <div class="details">
                <h2 class="product-title">Title</h2>
                <p class="author">Author Name</p>
                <div class="rating-reviews">
                    <span class="stars">★★★★★</span>
                    <span class="reviews">10 Reviews</span>
                </div>
                <p class="availability">Available (In Stock)</p>
                <p class="price">Price: $0</p>
                <div class="quantity">
                    <button>-</button>
                    <input type="text" value="1">
                    <button>+</button>
                </div>
                <div class="actions">
                    <button class="add-to-cart">Add to Cart</button>
                    <button class="order-now">Order Now</button>
                </div>
            </div>
        </div>

        <!-- Tabs Navigation -->
        <div class="tabs-container">
            <div class="tabs">
                <button class="tab active" data-tab="description">Description</button>
                <button class="tab" data-tab="reviews">Reviews</button>
            </div>
            <div class="tab-underline"></div>
        </div>

        <!-- Tabs Content -->
        <div class="tab-content">
            <!-- Description Section -->
            <div class="tab-panel active" id="description">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>

            <!-- Reviews Section -->
            <div class="tab-panel" id="reviews">
                <!-- Add Review Form -->
                <div class="review-form">
                    <h3>Give us your Rating:</h3>
                    <div class="star-rating">
                        <span class="star" data-value="1">&#9734;</span>
                        <span class="star" data-value="2">&#9734;</span>
                        <span class="star" data-value="3">&#9734;</span>
                        <span class="star" data-value="4">&#9734;</span>
                        <span class="star" data-value="5">&#9734;</span>
                    </div>

                    <h3>Add a comment:</h3>
                    <textarea placeholder="Write your review here..."></textarea>
                    <button class="submit-button">Submit</button>
                </div>

                <!-- Display Reviews -->
                <div class="reviews">
                    <div class="review-card">
                        <div class="user-info">
                            <div class="avatar">
                                <img src="images/default-avatar.png" alt="User Avatar">
                            </div>
                            <div class="user-details">
                                <div class="username">John Doe</div>
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9734;</span>
                                    <span class="star">&#9734;</span>
                                </div>
                            </div>
                        </div>
                        <div class="review-text">Great product! Really satisfied.</div>
                    </div>
                </div>
            </div>
        </div>        
    </section>

    <script>
        // Select tabs, panels, and the underline
        const tabs = document.querySelectorAll(".tab");
        const panels = document.querySelectorAll(".tab-panel");
        const tabsContainer = document.querySelector(".tabs");

        // Create and append the underline dynamically
        const underline = document.createElement("div");
        underline.classList.add("tab-underline");
        tabsContainer.appendChild(underline);

        // Function to update the underline's position and size
        function updateUnderline(tab) {
            const tabRect = tab.getBoundingClientRect();
            const containerRect = tab.parentNode.getBoundingClientRect();
            underline.style.width = `${tabRect.width}px`;
            underline.style.left = `${tabRect.left - containerRect.left}px`;
        }

        // Initialize the underline for the active tab
        const activeTab = document.querySelector(".tab.active");
        if (activeTab) updateUnderline(activeTab);

        // Add event listeners to tabs for switching
        tabs.forEach((tab) => {
            tab.addEventListener("click", () => {
                // Deactivate all tabs and panels
                tabs.forEach((t) => t.classList.remove("active"));
                panels.forEach((panel) => panel.classList.remove("active"));

                // Activate the clicked tab and its panel
                tab.classList.add("active");
                const targetPanel = document.getElementById(tab.getAttribute("data-tab"));
                if (targetPanel) targetPanel.classList.add("active");

                // Update the underline position and size
                updateUnderline(tab);
            });
        });
    </script>

    <!-- you may like -->
    <section class="new-releases">
        <h2>You May Like</h2>
        <div class="carousel">
            <div class="carousel-track-container">
                <ul class="carousel-track">
                    <li class="carousel-slide">
                        <img src="{{ asset('images/book1.jpg') }}" alt="Book 1">
                        <h3>Book Title 1</h3>
                        <p>$15.99</p>
                    </li>
                    <li class="carousel-slide">
                        <img src="{{ asset('images/book2.jpeg') }}" alt="Book 2">
                        <h3>Book Title 2</h3>
                        <p>$12.99</p>
                    </li>
                    <li class="carousel-slide">
                        <img src="{{ asset('images/book3.jpeg') }}" alt="Book 3">
                        <h3>Book Title 3</h3>
                        <p>$18.99</p>
                    </li>
                    <li class="carousel-slide">
                        <img src="{{ asset('images/book4.jpeg') }}" alt="Book 4">
                        <h3>Book Title 4</h3>
                        <p>$22.99</p>
                    </li>
                    <li class="carousel-slide">
                        <img src="{{ asset('images/book5.jpeg') }}" alt="Book 5">
                        <h3>Book Title 5</h3>
                        <p>$10.99</p>
                    </li>
                    <li class="carousel-slide">
                        <img src="{{ asset('images/book3.jpeg') }}" alt="Book 5">
                        <h3>Book Title 5</h3>
                        <p>$10.99</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <script src="script.js"></script>

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