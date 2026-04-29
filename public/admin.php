<?php
require_once 'Auth/Auth.php';
require_once '../classes/session.php';

$session = new Session();
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">

</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-brand">
            <h4><i class="bi bi-grid-3x3-gap-fill me-2"></i>AdminPanel</h4>
        </div>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="backend/jurusan/index.php" class="nav-link">
                    <i class="bi bi-people"></i>
                    <span>Jurusan</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-bar-chart"></i>
                    <span>Analytics</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-file-earmark-text"></i>
                    <span>Reports</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-gear"></i>
                    <span>Settings</span>
                </a>
            </li>
            <li class="nav-item" style="margin-top: 200px;">
                <a href="logout.php" class="nav-link">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header">
            <div class="search-box">
                <i class="bi bi-search"></i>
                <input type="text" placeholder="Search...">
            </div>
            <div class="header-actions">
                <button class="icon-btn">
                    <i class="bi bi-chat-dots"></i>
                </button>
                <button class="icon-btn">
                    <i class="bi bi-bell"></i>
                    <span class="badge-notification">3</span>
                </button>
                <div class="profile">
                    <div class="profile-img">AD</div>
                    <div>
                        <div style="font-weight: 600; font-size: 14px; color: #1e293b;">Admin</div>
                        <div style="font-size: 12px; color: #64748b;">admin@example.com</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-label">Total Users</div>
                <div class="stat-value">12,487</div>
            </div>
            <div class="stat-card">
                <div class="stat-label">Monthly Revenue</div>
                <div class="stat-value">$42,890</div>
            </div>
            <div class="stat-card">
                <div class="stat-label">Active Orders</div>
                <div class="stat-value">3,216</div>
            </div>
            <div class="stat-card">
                <div class="stat-label">System Uptime</div>
                <div class="stat-value">99.98%</div>
            </div>
        </div>

        <!-- Charts - FIXED -->
        <div class="charts-grid">
            <div class="chart-card">
                <div class="chart-header">
                    <h5>Monthly Analytics Trend</h5>
                </div>
                <div class="chart-container">
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
            <div class="chart-card">
                <div class="chart-header">
                    <h5>Traffic Sources</h5>
                </div>
                <div class="chart-container" style="height: 250px;">
                    <canvas id="pieChart"></canvas>
                </div>
                <div class="traffic-legend">
                    <div class="legend-item">
                        <div class="legend-color" style="background: #3b82f6;"></div>
                        <span class="legend-text">Direct: 42%</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color" style="background: #60a5fa;"></div>
                        <span class="legend-text">Referral: 28%</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color" style="background: #93c5fd;"></div>
                        <span class="legend-text">Social: 18%</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color" style="background: #bfdbfe;"></div>
                        <span class="legend-text">Email: 12%</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Transactions Table -->
        <div class="table-card">
            <div class="table-header">
                <h5>Recent Transactions</h5>
            </div>
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Customer</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#TRX-001</td>
                        <td>Apr 22, 2026</td>
                        <td>John Doe</td>
                        <td>$1,250.00</td>
                        <td><span class="status-badge status-completed">Completed</span></td>
                    </tr>
                    <tr>
                        <td>#TRX-002</td>
                        <td>Apr 22, 2026</td>
                        <td>Jane Smith</td>
                        <td>$890.00</td>
                        <td><span class="status-badge status-processing">Processing</span></td>
                    </tr>
                    <tr>
                        <td>#TRX-003</td>
                        <td>Apr 21, 2026</td>
                        <td>Bob Wilson</td>
                        <td>$2,100.00</td>
                        <td><span class="status-badge status-completed">Completed</span></td>
                    </tr>
                    <tr>
                        <td>#TRX-004</td>
                        <td>Apr 21, 2026</td>
                        <td>Alice Brown</td>
                        <td>$450.00</td>
                        <td><span class="status-badge status-failed">Failed</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Line Chart - FIXED
        const lineCtx = document.getElementById('lineChart').getContext('2d');
        const lineGradient = lineCtx.createLinearGradient(0, 0, 0, 300);
        lineGradient.addColorStop(0, 'rgba(59, 130, 246, 0.3)');
        lineGradient.addColorStop(1, 'rgba(59, 130, 246, 0.0)');

        new Chart(lineCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Revenue',
                    data: [65, 78, 90, 81, 96, 115],
                    borderColor: '#3b82f6',
                    backgroundColor: lineGradient,
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: '#3b82f6',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHoverRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false,
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: '#f1f5f9',
                            drawBorder: false
                        },
                        ticks: {
                            color: '#94a3b8',
                            padding: 10
                        }
                    },
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            color: '#94a3b8',
                            padding: 10
                        }
                    }
                },
                interaction: {
                    mode: 'nearest',
                    axis: 'x',
                    intersect: false
                }
            }
        });

        // Pie Chart - FIXED
        const pieCtx = document.getElementById('pieChart').getContext('2d');
        new Chart(pieCtx, {
            type: 'doughnut',
            data: {
                labels: ['Direct', 'Referral', 'Social', 'Email'],
                datasets: [{
                    data: [42, 28, 18, 12],
                    backgroundColor: [
                        '#3b82f6',
                        '#60a5fa',
                        '#93c5fd',
                        '#bfdbfe'
                    ],
                    borderWidth: 0,
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '75%',
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return ' ' + context.label + ': ' + context.parsed + '%';
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>
</body>

</html>