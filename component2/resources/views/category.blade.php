<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/category.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Category</title>
</head>
<body>
    <div class="header5">
        <!-- Logo -->
        <a href="index.html" class="logo">BookClub<span>.</span></a>

        <!-- Navigation -->
        <nav>
        <ul>
            <li><a class="active" href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('display') }}">Category</a></li>
            <li><a href="{{ route('category') }}">Shop</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
        </nav>

        <div class="icons">
            <a href="{{ route('wishlist') }}"><i class="fa-solid fa-heart"></i></a>
            <a href="{{ route('cart') }}"><i class="fa-solid fa-cart-shopping"></i></a>
            <a href="{{ route('userprofile') }}"><i class="fas fa-user" onclick="toggleForm(event)"></i></a>
        </div>
    </div>

    <main class="landing-section">
        <div class="text-content">
            <h1>Unlock stories, wisdom, and dreams</h1>
            <p>
            We bring the world of books to your doorstep,
            offering handpicked stories and <br> knowledge at your fingertips.
            </p>
            <div class="buttons">
                <a href="#" class="btn-primary">Explore Now</a>
            </div>
        </div>
        <div class="image-content">
            <img src="{{ asset('images/book15.png') }}" alt="Book">
        </div>
    </main>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Grid</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <!-- Main Content -->
        <main class="main-content">
            <!-- Product Grid -->
            <div class="product-grid">
                <div class="product-card">
                <a href="{{ route('details') }}">
                    <img src="{{ asset('images/book1.jpg') }}" alt="Product Image"></a>
                    <p>The Past is Rising<br><span>Rs. 700</span></p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="product-card">
                <a href="{{ route('details') }}">
                    <img src="{{ asset('images/book2.jpeg') }}" alt="Product Image"></a>
                    <p>Art Beyond the West<br><span>Rs. 800</span></p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="product-card">
                <a href="{{ route('details') }}">
                    <img src="{{ asset('images/book3.jpeg') }}" alt="Product Image"></a>
                    <p>The Hobbit<br><span>Rs. 650</span></p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="product-card">
                <a href="{{ route('details') }}">
                    <img src="{{ asset('images/book4.jpeg') }}" alt="Product Image"></a>
                    <p>The Journey of Dreams<br><span>Rs. 800</span></p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="product-card">
                <a href="{{ route('details') }}">
                    <img src="{{ asset('images/book5.jpeg') }}" alt="Product Image"></a>
                    <p>On Sleepy Hill<br><span>Rs. 750</span></p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="product-card">
                <a href="{{ route('details') }}">
                    <img src="{{ asset('images/book6.jpg') }}" alt="Product Image"></a>
                    <p>A Novel Love Story<br><span>Rs. 650</span></p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="product-card">
                <a href="{{ route('details') }}">
                    <img src="{{ asset('images/book7.jpg') }}" alt="Product Image"></a>
                    <p>Atomic Habits<br><span>Rs. 800</span></p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="product-card">
                <a href="{{ route('details') }}">
                    <img src="{{ asset('images/book8.jpg') }}" alt="Product Image"></a>
                    <p>The Sun and Her Flowers<br><span>Rs. 800</span></p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="product-card">
                <a href="{{ route('details') }}">
                    <img src="{{ asset('images/book24.jpg') }}" alt="Product Image"></a>
                    <p>Ten Types of Human<br><span>Rs. 700</span></p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="product-card">
                <a href="{{ route('details') }}">
                    <img src="{{ asset('images/book10.jpg') }}" alt="Product Image"></a>
                    <p>Shadow Warrior<br><span>Rs. 850</span></p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="product-card">
                <a href="{{ route('details') }}">
                    <img src="{{ asset('images/book17.jpg') }}" alt="Product Image"></a>
                    <p>The Wicked King<br><span>Rs. 900</span></p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="product-card">
                <a href="{{ route('details') }}">
                    <img src="{{ asset('images/book20.jpg') }}" alt="Product Image"></a>
                    <p>How to Talk to Anyone<br><span>Rs. 750</span></p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="product-card">
                <a href="{{ route('details') }}">
                    <img src="{{ asset('images/book16.jpeg') }}" alt="Product Image"></a>
                    <p>The Cruel Prince<br><span>Rs. 800</span></p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="product-card">
                <a href="{{ route('details') }}">
                    <img src="{{ asset('images/book19.jpg') }}" alt="Product Image"></a>
                    <p>Five Feet Apart<br><span>Rs. 700</span></p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="product-card">
                <a href="{{ route('details') }}">
                    <img src="{{ asset('images/book23.jpg') }}" alt="Product Image"></a>
                    <p>Voice of Ancestors<br><span>Rs. 950</span></p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </main>
    </div>


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