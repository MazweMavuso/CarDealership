<!DOCTYPE html>
<html lang="en">
<head>
    <base target="_self">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Dealership Dashboard</title>
    <meta name="description" content="Dashboard for car dealership management">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#2563eb",
                        secondary: "#1e40af",
                        accent: "#1e3a8a",
                        success: "#10b981",
                        warning: "#f59e0b",
                        danger: "#ef4444"
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Sidebar and Main Content Container -->
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md h-screen sticky top-0">
            <div class="p-4 border-b border-gray-200">
                <h1 class="text-xl font-bold text-primary">CarDealer Pro</h1>
            </div>
            <nav class="p-4">
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-100 rounded-lg dashboard-link">
                            <i class="fas fa-tachometer-alt mr-3"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-100 rounded-lg inventory-link">
                            <i class="fas fa-car mr-3"></i>
                            <span>Inventory</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-100 rounded-lg">
                            <i class="fas fa-users mr-3"></i>
                            <span>Customers</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-100 rounded-lg">
                            <i class="fas fa-file-invoice-dollar mr-3"></i>
                            <span>Sales</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-100 rounded-lg">
                            <i class="fas fa-chart-line mr-3"></i>
                            <span>Reports</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-100 rounded-lg">
                            <i class="fas fa-cog mr-3"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <!-- Dashboard Content (default view) -->
            <div id="dashboard-content">
              <!-- Header -->
<div class="flex justify-between items-center mb-8">
    <h2 class="text-2xl font-bold text-gray-800">Dashboard Overview</h2>
    <div class="flex items-center space-x-4">
        <!-- Search bar -->
        <div class="relative">
            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
            <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
        </div>

        <!-- Add button -->
        <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition flex items-center">
            <i class="fas fa-plus mr-2"></i> Add New
        </button>

        <!-- Profile section -->
        <div class="flex items-center space-x-2">
            

            <!-- User name -->
            <span class="text-gray-800 font-medium hidden sm:inline">
                <?= esc(session()->get('first_name') . ' ' . session()->get('last_name')) ?>
            </span>

            <!-- Profile image -->
            <img 
                src="<?= base_url('uploads/profile.png') ?>" 
                alt="Profile Image" 
                class="w-10 h-10 rounded-full object-cover border border-gray-300"
            >
        </div>
    </div>
</div>


                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Total Cars -->
                    <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-primary">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Total Cars</p>
                                <h3 class="text-2xl font-bold mt-1">142</h3>
                            </div>
                            <div class="p-3 rounded-full bg-primary bg-opacity-10 text-primary">
                                <i class="fas fa-car text-xl"></i>
                            </div>
                        </div>
                        <p class="text-sm text-success mt-2">
                            <i class="fas fa-arrow-up mr-1"></i> 12% from last month
                        </p>
                    </div>

                    <!-- Available Cars -->
                    <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-success">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Available</p>
                                <h3 class="text-2xl font-bold mt-1">87</h3>
                            </div>
                            <div class="p-3 rounded-full bg-success bg-opacity-10 text-success">
                                <i class="fas fa-check-circle text-xl"></i>
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">
                            <i class="fas fa-arrow-down mr-1 text-danger"></i> 3% from last month
                        </p>
                    </div>

                    <!-- Sold This Month -->
                    <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-warning">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Sold This Month</p>
                                <h3 class="text-2xl font-bold mt-1">24</h3>
                            </div>
                            <div class="p-3 rounded-full bg-warning bg-opacity-10 text-warning">
                                <i class="fas fa-chart-bar text-xl"></i>
                            </div>
                        </div>
                        <p class="text-sm text-success mt-2">
                            <i class="fas fa-arrow-up mr-1"></i> 8% from last month
                        </p>
                    </div>

                    <!-- Revenue -->
                    <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-danger">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Monthly Revenue</p>
                                <h3 class="text-2xl font-bold mt-1">$342,500</h3>
                            </div>
                            <div class="p-3 rounded-full bg-danger bg-opacity-10 text-danger">
                                <i class="fas fa-dollar-sign text-xl"></i>
                            </div>
                        </div>
                        <p class="text-sm text-success mt-2">
                            <i class="fas fa-arrow-up mr-1"></i> 15% from last month
                        </p>
                    </div>
                </div>

                <!-- Charts and Recent Activity -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    <!-- Sales Chart -->
                    <div class="bg-white p-6 rounded-lg shadow-sm lg:col-span-2">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-800">Monthly Sales</h3>
                            <select class="border border-gray-300 rounded-lg px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                                <option>This Year</option>
                                <option>Last Year</option>
                                <option>All Time</option>
                            </select>
                        </div>
                        <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                            <p class="text-gray-500">Sales chart visualization would appear here</p>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Recent Activity</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="p-2 rounded-full bg-primary bg-opacity-10 text-primary mr-3">
                                    <i class="fas fa-car"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium">New car added</p>
                                    <p class="text-xs text-gray-500">2021 Toyota Camry added to inventory</p>
                                    <p class="text-xs text-gray-400 mt-1">10 minutes ago</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="p-2 rounded-full bg-success bg-opacity-10 text-success mr-3">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium">Car sold</p>
                                    <p class="text-xs text-gray-500">2019 Honda Civic marked as sold</p>
                                    <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="p-2 rounded-full bg-warning bg-opacity-10 text-warning mr-3">
                                    <i class="fas fa-exclamation-circle"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium">Maintenance required</p>
                                    <p class="text-xs text-gray-500">2018 Ford F-150 needs oil change</p>
                                    <p class="text-xs text-gray-400 mt-1">5 hours ago</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="p-2 rounded-full bg-danger bg-opacity-10 text-danger mr-3">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium">New customer</p>
                                    <p class="text-xs text-gray-500">John Smith registered as new customer</p>
                                    <p class="text-xs text-gray-400 mt-1">1 day ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Sales and Top Models -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Recent Sales -->
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-800">Recent Sales</h3>
                            <a href="#" class="text-sm text-primary hover:underline">View All</a>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Vehicle</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900">John Smith</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">2020 Honda Civic</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">$21,500</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">Today</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900">Sarah Johnson</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">2019 Toyota RAV4</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">$24,750</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">Yesterday</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900">Michael Brown</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">2021 Ford F-150</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">$38,200</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">2 days ago</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900">Emily Davis</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">2018 Chevrolet Equinox</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">$19,800</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">3 days ago</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Top Selling Models -->
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-800">Top Selling Models</h3>
                            <a href="#" class="text-sm text-primary hover:underline">View All</a>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span>Honda Civic</span>
                                    <span class="font-medium">24 sold</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-primary h-2 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span>Toyota Camry</span>
                                    <span class="font-medium">18 sold</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-success h-2 rounded-full" style="width: 60%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span>Ford F-150</span>
                                    <span class="font-medium">12 sold</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-warning h-2 rounded-full" style="width: 40%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span>Chevrolet Silverado</span>
                                    <span class="font-medium">9 sold</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-danger h-2 rounded-full" style="width: 30%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span>Toyota RAV4</span>
                                    <span class="font-medium">7 sold</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-secondary h-2 rounded-full" style="width: 25%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Inventory Content (hidden by default) -->
            <div id="inventory-content" class="hidden">
                <!-- Inventory Header -->
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-800">Car Inventory Management</h2>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                            <input type="text" placeholder="Search inventory..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <button id="add-car-btn" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition flex items-center">
                            <i class="fas fa-plus mr-2"></i> Add Car
                        </button>
                    </div>
                </div>

                <!-- Inventory Table -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Make</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Model</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Year</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mileage</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200" id="inventory-table-body">
                                <!-- Cars will be populated here by JavaScript -->
                            </tbody>
                        </table>
                    </div>
                </div>

           <!-- Add/Edit Car Modal -->
<div id="car-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl">
        <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-4" id="modal-title">Add New Car</h3>
            <form id="car-form" enctype="multipart/form-data">
                <input type="hidden" id="car-id">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="make" class="block text-sm font-medium text-gray-700 mb-1">Make</label>
                        <input type="text" id="make" class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-primary">
                    </div>
                    <div>
                        <label for="model" class="block text-sm font-medium text-gray-700 mb-1">Model</label>
                        <input type="text" id="model" class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-primary">
                    </div>
                    <div>
                        <label for="year" class="block text-sm font-medium text-gray-700 mb-1">Year</label>
                        <input type="number" id="year" class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-primary">
                    </div>
                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Price (E)</label>
                        <input type="number" step="0.01" id="price" class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-primary">
                    </div>
                    <div>
                        <label for="mileage" class="block text-sm font-medium text-gray-700 mb-1">Mileage (km)</label>
                        <input type="number" id="mileage" class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-primary">
                    </div>
                    <div>
                        <label for="fuel_type" class="block text-sm font-medium text-gray-700 mb-1">Fuel Type</label>
                        <select id="fuel_type" class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-primary">
                            <option value="">Select</option>
                            <option value="Petrol">Petrol</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Electric">Electric</option>
                            <option value="Hybrid">Hybrid</option>
                        </select>
                    </div>
                    <div>
                        <label for="transmission" class="block text-sm font-medium text-gray-700 mb-1">Transmission</label>
                        <select id="transmission" class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-primary">
                            <option value="">Select</option>
                            <option value="Manual">Manual</option>
                            <option value="Automatic">Automatic</option>
                        </select>
                    </div>
                    <div>
                        <label for="color" class="block text-sm font-medium text-gray-700 mb-1">Color</label>
                        <input type="text" id="color" class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-primary">
                    </div>
                    <div>
                        <label for="condition" class="block text-sm font-medium text-gray-700 mb-1">Condition</label>
                        <select id="condition" class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-primary">
                            <option value="used">Used</option>
                            <option value="new">New</option>
                        </select>
                    </div>
                </div>

                <div class="mt-4">
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea id="description" rows="4" class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-primary"></textarea>
                </div>

                <div class="mt-4">
                    <label for="main_image" class="block text-sm font-medium text-gray-700 mb-1">Main Image</label>
                    <input type="file" id="main_image" accept="image/*" class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-primary">
                </div>

                <div class="flex justify-end space-x-3 mt-6">
                    <button type="button" id="cancel-btn" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-100">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-secondary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


    <script>
        // Sample car data
        let cars = [
            { id: 1, make: 'Toyota', model: 'Camry', year: 2021, price: 24999, mileage: 15000, status: 'Available' },
            { id: 2, make: 'Honda', model: 'Civic', year: 2020, price: 21500, mileage: 22000, status: 'Available' },
            { id: 3, make: 'Ford', model: 'F-150', year: 2019, price: 32500, mileage: 35000, status: 'Sold' },
            { id: 4, make: 'Chevrolet', model: 'Equinox', year: 2022, price: 27900, mileage: 8000, status: 'Available' },
            { id: 5, make: 'BMW', model: 'X5', year: 2021, price: 48900, mileage: 12000, status: 'Pending' }
        ];

        // DOM elements
        const dashboardContent = document.getElementById('dashboard-content');
        const inventoryContent = document.getElementById('inventory-content');
        const inventoryTableBody = document.getElementById('inventory-table-body');
        const carModal = document.getElementById('car-modal');
        const carForm = document.getElementById('car-form');
        const modalTitle = document.getElementById('modal-title');
        const addCarBtn = document.getElementById('add-car-btn');
        const cancelBtn = document.getElementById('cancel-btn');

        // Navigation links
        const dashboardLink = document.querySelector('.dashboard-link');
        const inventoryLink = document.querySelector('.inventory-link');

        // Initialize the page
        document.addEventListener('DOMContentLoaded', function() {
            // Set dashboard as default view
            showDashboard();
            
            // Load inventory data
            renderInventoryTable();
            
            // Set up event listeners
            setupEventListeners();
        });

        function setupEventListeners() {
            // Navigation links
            dashboardLink.addEventListener('click', function(e) {
                e.preventDefault();
                showDashboard();
                updateActiveNav(this);
            });
            
            inventoryLink.addEventListener('click', function(e) {
                e.preventDefault();
                showInventory();
                updateActiveNav(this);
            });
            
            // Add car button
            addCarBtn.addEventListener('click', function() {
                showCarModal('add');
            });
            
            // Cancel button in modal
            cancelBtn.addEventListener('click', function() {
                carModal.classList.add('hidden');
            });
            
            // Form submission
            carForm.addEventListener('submit', function(e) {
                e.preventDefault();
                saveCar();
            });
        }

        function showDashboard() {
            dashboardContent.classList.remove('hidden');
            inventoryContent.classList.add('hidden');
        }

        function showInventory() {
            dashboardContent.classList.add('hidden');
            inventoryContent.classList.remove('hidden');
        }

        function updateActiveNav(activeLink) {
            // Remove active class from all links
            document.querySelectorAll('nav a').forEach(link => {
                link.classList.remove('text-white', 'bg-primary');
                link.classList.add('text-gray-700', 'hover:bg-gray-100');
            });
            
            // Add active class to clicked link
            activeLink.classList.remove('text-gray-700', 'hover:bg-gray-100');
            activeLink.classList.add('text-white', 'bg-primary');
        }

        function renderInventoryTable() {
            inventoryTableBody.innerHTML = '';
            
            cars.forEach(car => {
                const row = document.createElement('tr');
                
                // Determine status color
                let statusClass = '';
                switch(car.status) {
                    case 'Available':
                        statusClass = 'bg-green-100 text-green-800';
                        break;
                    case 'Sold':
                        statusClass = 'bg-red-100 text-red-800';
                        break;
                    case 'Pending':
                        statusClass = 'bg-yellow-100 text-yellow-800';
                        break;
                    case 'Maintenance':
                        statusClass = 'bg-blue-100 text-blue-800';
                        break;
                }
                
                row.innerHTML = `
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${car.make}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${car.model}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${car.year}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$${car.price.toLocaleString()}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${car.mileage.toLocaleString()} mi</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${statusClass}">
                            ${car.status}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <button class="text-blue-600 hover:text-blue-900 edit-btn mr-3" data-id="${car.id}">Edit</button>
                        <button class="text-red-600 hover:text-red-900 delete-btn" data-id="${car.id}">Delete</button>
                    </td>
                `;
                
                inventoryTableBody.appendChild(row);
            });
            
            // Add event listeners to edit and delete buttons
            document.querySelectorAll('.edit-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const carId = parseInt(this.getAttribute('data-id'));
                    showCarModal('edit', carId);
                });
            });
            
            document.querySelectorAll('.delete-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const carId = parseInt(this.getAttribute('data-id'));
                    deleteCar(carId);
                });
            });
        }

        function showCarModal(action, carId = null) {
            if (action === 'add') {
                modalTitle.textContent = 'Add New Car';
                carForm.reset();
                document.getElementById('car-id').value = '';
            } else if (action === 'edit') {
                modalTitle.textContent = 'Edit Car';
                const car = cars.find(c => c.id === carId);
                if (car) {
                    document.getElementById('car-id').value = car.id;
                    document.getElementById('make').value = car.make;
                    document.getElementById('model').value = car.model;
                    document.getElementById('year').value = car.year;
                    document.getElementById('price').value = car.price;
                    document.getElementById('mileage').value = car.mileage;
                    document.getElementById('status').value = car.status;
                }
            }
            
            carModal.classList.remove('hidden');
        }

        function saveCar() {
            const idInput = document.getElementById('car-id');
            const make = document.getElementById('make').value;
            const model = document.getElementById('model').value;
            const year = parseInt(document.getElementById('year').value);
            const price = parseInt(document.getElementById('price').value);
            const mileage = parseInt(document.getElementById('mileage').value);
            const status = document.getElementById('status').value;
            
            if (!make || !model || !year || !price || !mileage) {
                alert('Please fill in all fields');
                return;
            }
            
            if (idInput.value) {
                // Update existing car
                const carId = parseInt(idInput.value);
                const index = cars.findIndex(c => c.id === carId);
                if (index !== -1) {
                    cars[index] = { id: carId, make, model, year, price, mileage, status };
                }
            } else {
                // Add new car
                const newId = cars.length > 0 ? Math.max(...cars.map(c => c.id)) + 1 : 1;
                cars.push({ id: newId, make, model, year, price, mileage, status });
            }
            
            // Close modal and refresh table
            carModal.classList.add('hidden');
            renderInventoryTable();
        }

        function deleteCar(carId) {
            if (confirm('Are you sure you want to delete this car?')) {
                cars = cars.filter(car => car.id !== carId);
                renderInventoryTable();
            }
        }
    </script>
</body>
</html>