<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/userprofile.css') }}">
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

    <div class="profile-container">
        <div class="profile-header">
            <h2>ACCOUNT</h2>
        </div>

        <div class="profile-content">
            <div class="avatar-container">
                <img id="avatar-preview" src="image/book4.jpeg" alt="Avatar">
                <input type="file" id="avatar-input" accept="image/*" style="display: none;">
                <button id="change-avatar">Change Avatar</button>
                <button id="delete-avatar">Delete Avatar</button>
            </div>

            <div class="form-container">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" value="Vedran BERIC">
                </div>
                <div class="form-group">
                    <label for="username">UserName</label>
                    <input type="text" id="username" value="VedB">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" value="vedran.beric@gmail.com">
                </div>
                <div class="form-group">
                    <label for="location">Address</label>
                    <input type="text" id="location" value="Paris">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" value="********">
                </div>
                <div class="form-group">
                    <label for="web">Web</label>
                    <input type="text" id="web" placeholder="Website URL">
                </div>
                <div class="form-group">
                    <label for="bio">Bio</label>
                    <input type="text" id="bio" placeholder="Short Bio">
                </div>
                <div class="form-group">
                    <label>Social</label>
                    <div class="social-container">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="update-button">
            <button>Update Settings</button>
        </div>
    </div>

    <script>
        document.getElementById('change-avatar').addEventListener('click', function () {
            document.getElementById('avatar-input').click();
        });
        
        document.getElementById('avatar-input').addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('avatar-preview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
        
        document.getElementById('delete-avatar').addEventListener('click', function () {
            const avatarPreview = document.getElementById('avatar-preview');
            
            // Replace the avatar with a placeholder or remove it
            avatarPreview.src = 'default-avatar.jpg'; // You can replace this with an empty image or any placeholder
            document.getElementById('avatar-input').value = ''; // Clear the input
            
            // Optionally log or notify
            console.log('Avatar has been deleted.');
            
            // If you have backend integration, call an API to delete the avatar from the server
            // Example:
            // fetch('/delete-avatar', { method: 'POST' })
            //     .then(response => response.json())
            //     .then(data => console.log(data))
            //     .catch(error => console.error('Error deleting avatar:', error));
        });              
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