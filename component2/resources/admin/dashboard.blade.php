<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('admincss/dashboard.css') }}">
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
                <h3>Welcome, Admin!</h3>
                <p>Here you can manage all the aspects of the Book Club.</p>
                <a href="#" class="button">Get Started</a>
            </section>

            <section class="stats">
                <div>
                    <h3>Total Sales</h3>
                    <p>$12,345</p>
                </div>
                <div>
                    <h3>Pending Orders</h3>
                    <p>34</p>
                </div>
                <div>
                    <h3>Total Orders</h3>
                    <p>567</p>
                </div>
                <div>
                    <h3>Visitors</h3>
                    <p>890</p>
                </div>
            </section>
            <section class="chart">
                <h3>Sales Order Summary</h3>
                <img src="chart-placeholder.png" alt="Sales Chart" style="width: 100%; height: auto;">
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
        </main>
    </div>
</body>
</html>