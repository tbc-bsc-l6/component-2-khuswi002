<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('admincss/update.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
    <div class="header5">
        <!-- Logo -->
        <a href="index.html" class="logo">BookClub<span>.</span></a>

        <div class="icons">
            <a href="userprofile.html"><i class="fas fa-user" onclick="toggleForm(event)"></i></a>
        </div>
    </div>

    <div class="top-level-container">
        <nav class="sidebar">
            <ul class="optionlist">
                <li>
                    <i class='bx bxs-dashboard'></i>
                    <a href="dashboard.html">Dashboard</a>
                </li>
                <li>
                    <i class='bx bx-user'></i>
                    <a href="product.html">Product</a>
                </li>
                <li>
                    <i class='bx bx-book'></i>
                    <a href="add.html">Add</a>
                </li>
                <li>
                    <i class='bx bx-calendar-event'></i>
                    <a href="order.html">Order</a>
                </li>
                <li>
                    <i class='bx bx-bar-chart'></i>
                    <a href="report.html">Reports</a>
                </li>
                <li>
                    <i class='bx bx-cog'></i>
                    <a href="setting.html">Settings</a>
                </li>
            </ul>
        </nav>        

        <main class="main">
            <section class="card">
                <h3>Update</h3>
                <form id="product-form">
                    <div class="form-group">
                        <label for="title">Title Name</label>
                        <input type="text" id="title" placeholder="Enter Title Name">
                    </div>
                    <div class="form-group">
                        <label for="author">Author Name</label>
                        <input type="text" id="author" placeholder="Enter Author Name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" placeholder="Enter Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" id="stock" placeholder="Enter Stock">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" id="price" placeholder="Enter Price">
                    </div>
                    <button type="button" class="button">Update</button>
                </form>
            </section>
        </main>

        <script>
            const addButton = document.querySelector(".button");
            // Handle Add button click
            addButton.addEventListener("click", () => {
                // Validate if all fields are filled
                const title = document.getElementById("title").value.trim();
                const author = document.getElementById("author").value.trim();
                const description = document.getElementById("description").value.trim();
                const stock = document.getElementById("stock").value.trim();
                const price = document.getElementById("price").value.trim();

                if (title && author && description && stock && price) {
                    // Display success message
                    const successMessage = document.createElement("div");
                    successMessage.className = "success-message";
                    successMessage.textContent = "Product updated successfully!";
                    document.body.appendChild(successMessage);

                    // Hide the message after 3 seconds
                    setTimeout(() => {
                        successMessage.remove();
                    }, 3000);

                    // Clear the form
                    document.getElementById("product-form").reset();
                    fileInput.value = ""; // Reset file input
                } else {
                    alert("Please fill all fields before adding the product.");
                }
            });
        </script>
    </div>
</body>
</html>