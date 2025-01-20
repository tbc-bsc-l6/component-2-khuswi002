<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('admincss/order.css') }}">
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
                <h3>Order Details</h3>
                <a href="#" class="button">Get Started</a>
            </section>

            <section class="recent-orders">
                <h3>Recent Sales Orders</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Product</th>
                            <th>Status</th>
                            <th>Total Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#" class="order-id" data-id="1">#00001</a></td>
                            <td>John Doe</td>
                            <td>Book Title</td>
                            <td>Delivered</td>
                            <td>$25.00</td>
                        </tr>
                        <tr>
                            <td><a href="#" class="order-id" data-id="2">#00002</a></td>
                            <td>Jane Smith</td>
                            <td>Another Book</td>
                            <td>Shipped</td>
                            <td>$30.00</td>
                        </tr>
                        <tr>
                            <td>#00000</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>$0.00</td>
                        </tr>
                        <tr>
                            <td>#00000</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>$0.00</td>
                        </tr>
                        <tr>
                            <td>#00000</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>$0.00</td>
                        </tr>
                        <tr>
                            <td>#00000</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>$0.00</td>
                        </tr>
                        <tr>
                            <td>#00000</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>$0.00</td>
                        </tr>
                        <tr>
                            <td>#00000</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>$0.00</td>
                        </tr>
                        <tr>
                            <td>#00000</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>$0.00</td>
                        </tr>
                        <tr>
                            <td>#00000</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>$0.00</td>
                        </tr>
                        <tr>
                            <td>#00000</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>$0.00</td>
                        </tr>
                        <tr>
                            <td>#00000</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>$0.00</td>
                        </tr>
                        <tr><tr>
                            <td>#00000</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>$0.00</td>
                        </tr>
                            <td>#00000</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>$0.00</td>
                        </tr>

                    </tbody>
                </table>
            </section>
            <div id="order-details-modal" class="modal">
                <div class="modal-content">
                    <span class="close-button">&times;</span>
                    <h2>Order Details</h2>
                    <div id="order-details-content">
                        <!-- Customer details and product summary will go here -->
                    </div>
                </div>
            </div>            
        </main>
    </div>

    <script>
        // Dummy data for orders
        const orders = {
            1: {
                customer: "John Doe",
                email: "johndoe@example.com",
                address: "123 Main St, Springfield",
                products: [
                    { name: "Book Title", quantity: 1, price: "$25.00" }
                ],
            },
            2: {
                customer: "Jane Smith",
                email: "janesmith@example.com",
                address: "456 Elm St, Shelbyville",
                products: [
                    { name: "Another Book", quantity: 2, price: "$15.00 each" }
                ],
            },
        };

        // Handle click on order IDs
        document.querySelectorAll(".order-id").forEach((orderLink) => {
            orderLink.addEventListener("click", (event) => {
                event.preventDefault();
                const orderId = orderLink.getAttribute("data-id");
                showOrderDetails(orderId);
            });
        });

        // Show order details in the modal
        function showOrderDetails(orderId) {
            const order = orders[orderId];

            // Populate the modal with customer and product details
            const modalContent = document.getElementById("order-details-content");
            modalContent.innerHTML = `
                <h3>Customer Details</h3>
                <p><strong>Name:</strong> ${order.customer}</p>
                <p><strong>Email:</strong> ${order.email}</p>
                <p><strong>Address:</strong> ${order.address}</p>
                <h3>Product Summary</h3>
                <ul>
                    ${order.products
                        .map(
                            (product) =>
                                `<li>${product.name} - Quantity: ${product.quantity} - Price: ${product.price}</li>`
                        )
                        .join("")}
                </ul>
            `;

            // Show the modal
            const modal = document.getElementById("order-details-modal");
            modal.style.display = "block";

            // Close modal when clicking the close button
            document.querySelector(".close-button").onclick = () => {
                modal.style.display = "none";
            };

            // Close modal when clicking outside of the modal
            window.onclick = (event) => {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            };
        }

        document.querySelectorAll(".order-id").forEach((orderLink) => {
            orderLink.addEventListener("click", (event) => {
                event.preventDefault();
                const orderId = orderLink.getAttribute("data-id");
                showOrderDetails(orderId);
            });
        });
        
        function showOrderDetails(orderId) {
            const order = orders[orderId];
            const modalContent = document.getElementById("order-details-content");
            modalContent.innerHTML = `
                <h3>Customer Details</h3>
                <p><strong>Name:</strong> ${order.customer}</p>
                <p><strong>Email:</strong> ${order.email}</p>
                <p><strong>Address:</strong> ${order.address}</p>
                <h3>Product Summary</h3>
                <ul>
                    ${order.products
                        .map(
                            (product) =>
                                `<li>${product.name} - Quantity: ${product.quantity} - Price: ${product.price}</li>`
                        )
                        .join("")}
                </ul>
            `;
        
            const modal = document.getElementById("order-details-modal");
            modal.style.display = "block";
        
            document.querySelector(".close-button").onclick = () => {
                modal.style.display = "none";
            };
        
            window.onclick = (event) => {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            };
        }        
    </script>
</body>
</html>