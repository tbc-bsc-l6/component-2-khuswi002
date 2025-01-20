<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('admincss/report.css') }}">
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
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li>
                <i class='bx bx-user'></i>
                <a href="{{ route('admin.product') }}">Product</a>
            </li>
            <li>
                <i class='bx bx-book'></i>
                <a href="{{ route('admin.add') }}">Add</a>
            </li>
            <li>
                <i class='bx bx-calendar-event'></i>
                <a href="{{ route('admin.order') }}">Order</a>
            </li>
            <li>
                <i class='bx bx-bar-chart'></i>
                <a href="{{ route('admin.report') }}">Reports</a>
            </li>
            <li>
                <i class='bx bx-cog'></i>
                <a href="#">Settings</a>
            </li>
        </ul>
    </nav>      

        <main class="main">
            <section class="card">
                <h3>Reports Dashboard</h3>
                <p>Overview of sales and business performance</p>
            </section>
            
            <div class="container">
                <!-- Summary Cards -->
                <div class="summary-cards">
                    <div class="collect">
                        <h3>Total Sales</h3>
                        <p>$25,000</p>
                    </div>
                    <div class="collect">
                        <h3>Orders</h3>
                        <p>1,250</p>
                    </div>
                    <div class="collect">
                        <h3>Revenue</h3>
                        <p>$85,000</p>
                    </div>
                    <div class="collect">
                        <h3>Customers</h3>
                        <p>350</p>
                    </div>
                </div>
        
                <!-- Charts Section -->
                <div class="charts">
                    <div class="chart-container">
                        <h3>Sales Trend</h3>
                        <canvas id="salesChart"></canvas>
                    </div>
                    <div class="chart-container small-chart">
                        <h3>Revenue Breakdown</h3>
                        <canvas id="revenueChart"></canvas>
                    </div>
                </div>                
        
                <!-- Table Section -->
                <div class="table-section">
                    <h3>Recent Transactions</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Customer</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2025-01-18</td>
                                <td>John Doe</td>
                                <td>$450</td>
                                <td class="status-complete">Complete</td>
                            </tr>
                            <tr>
                                <td>2025-01-17</td>
                                <td>Jane Smith</td>
                                <td>$1,250</td>
                                <td class="status-pending">Pending</td>
                            </tr>
                            <tr>
                                <td>2025-01-16</td>
                                <td>Sam Wilson</td>
                                <td>$3,000</td>
                                <td class="status-complete">Complete</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Sales Trend Chart
        const salesCtx = document.getElementById('salesChart').getContext('2d');
        new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Sales ($)',
                    data: [1200, 1500, 1800, 2000, 2500, 3000],
                    borderColor: '#4caf50',
                    borderWidth: 2,
                    fill: false,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                    },
                },
            }
        });

        // Revenue Breakdown Chart
        const revenueCtx = document.getElementById('revenueChart').getContext('2d');
        new Chart(revenueCtx, {
            type: 'pie',
            data: {
                labels: ['Product A', 'Product B', 'Product C', 'Others'],
                datasets: [{
                    data: [3000, 4500, 3500, 2000],
                    backgroundColor: ['#4caf50', '#2196f3', '#ffc107', '#f44336'],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                    },
                },
            }
        });
    </script>
</body>
</html>