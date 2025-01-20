<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('admincss/product.css') }}">
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
                <h3>All Products</h3>
                <div class="search-box">
                    <input type="text" placeholder="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </section>

            <section class="contain">
                <table>
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="action-icons">
                                <i class="edit" onclick="redirectToUpdate()">✏️</i>
                                <i class="delete" onclick="openModal()">🗑️</i>
                            </td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td><div class="image-placeholder">🖼️</div></td>
                        </tr>
                        <tr>
                            <td class="action-icons">
                                <i class="edit" onclick="redirectToUpdate()">✏️</i>
                                <i class="delete" onclick="openModal()">🗑️</i>
                            </td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td><div class="image-placeholder">🖼️</div></td>
                        </tr>
                        <tr>
                            <td class="action-icons">
                                <i class="edit" onclick="redirectToUpdate()">✏️</i>
                                <i class="delete" onclick="openModal()">🗑️</i>
                            </td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td><div class="image-placeholder">🖼️</div></td>
                        </tr>
                        <tr>
                            <td class="action-icons">
                                <i class="edit">✏️</i>
                                <i class="delete">🗑️</i>
                            </td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td><div class="image-placeholder">🖼️</div></td>
                        </tr>
                        <tr>
                            <td class="action-icons">
                                <i class="edit">✏️</i>
                                <i class="delete">🗑️</i>
                            </td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td><div class="image-placeholder">🖼️</div></td>
                        </tr>
                        <tr>
                            <td class="action-icons">
                                <i class="edit">✏️</i>
                                <i class="delete">🗑️</i>
                            </td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td><div class="image-placeholder">🖼️</div></td>
                        </tr>
                        <tr>
                            <td class="action-icons">
                                <i class="edit">✏️</i>
                                <i class="delete">🗑️</i>
                            </td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td><div class="image-placeholder">🖼️</div></td>
                        </tr>
                        <tr>
                            <td class="action-icons">
                                <i class="edit">✏️</i>
                                <i class="delete">🗑️</i>
                            </td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td><div class="image-placeholder">🖼️</div></td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <div class="modal" id="deleteModal">
                <div class="modal-content">
                    <span class="close-button" onclick="closeModal()">×</span>
                    <h3>Are you sure?</h3>
                    <p>Do you really want to delete this item? This action cannot be undone.</p>
                    <div class="modal-actions">
                        <button class="yes-button" onclick="confirmDelete()">Yes, Delete</button>
                        <button class="no-button" onclick="closeModal()">No, Cancel</button>
                    </div>
                </div>
            </div>
                      
        </main>
    </div>

    <script>
        // Open Modal
        function openModal() {
            document.getElementById("deleteModal").style.display = "block";
        }

        // Close Modal
        function closeModal() {
            document.getElementById("deleteModal").style.display = "none";
        }

        // Confirm Delete
        function confirmDelete() {
            alert("Item deleted!");
            closeModal(); // Close the modal after confirmation
        }

        function redirectToUpdate() {
            const productId = 123; // Replace with dynamic ID
            window.location.href = `update.html?id=${productId}`;
        }               
    </script>
</body>
</html>