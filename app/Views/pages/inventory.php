<!DOCTYPE html>
<html lang="en">
<head>
    <base target="_self">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Inventory | Elite Motors | Luxury Car Dealership</title>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Alpine.js CDN -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <meta name="description" content="Browse our full inventory of luxury vehicles at Elite Motors. Your destination for high-end cars with exceptional service.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .hero-gradient {
            background: linear-gradient(180deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 100%);
        }
        .car-card:hover .car-image {
            transform: scale(1.05);
        }
        .stats-item {
            transition: all 0.3s ease;
        }
        .stats-item:hover {
            transform: translateY(-5px);
        }
        .filter-section {
            transition: all 0.3s ease;
        }
        .pagination .active {
            background-color: #d4af37;
            color: white;
        }
    </style>


<style>
    /* Swiper customization */
.swiper {
  width: 100%;
  height: 100%;
}

.swiper-slide {
  text-align: center;
  font-size: 18px;
  background: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
}

.swiper-slide img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background: white;
  opacity: 0.7;
}

.swiper-pagination-bullet-active {
  background: #d4af37;
  opacity: 1;
}

.swiper-button-next, .swiper-button-prev {
  color: #d4af37;
  background: rgba(0,0,0,0.5);
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.swiper-button-next::after, .swiper-button-prev::after {
  font-size: 20px;
}

/* Modal transitions */
#carModal, #carModalBackdrop {
  transition: opacity 0.3s ease;
}

#carModal.hidden, #carModalBackdrop.hidden {
  opacity: 0;
  pointer-events: none;
}
</style>



    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#1a1a1a",
                        secondary: "#d4af37",
                        accent: "#333333",
                        light: "#f8f8f8"
                    },
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                        serif: ['Playfair Display', 'serif']
                    },
                    spacing: {
                        '128': '32rem',
                        '144': '36rem',
                    }
                }
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</head>
<body class="font-sans bg-light text-primary">
  <!-- Navigation -->
<header class="fixed w-full z-50 bg-transparent">
    <div class="mx-4 md:mx-8 mt-4 bg-white/70 backdrop-blur-md shadow-md rounded-2xl">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="index.html" class="text-2xl font-bold text-primary hover:text-secondary transition-colors">
                <span class="text-secondary">Elite</span> Motors
            </a>
            <div class="hidden md:flex space-x-8">
                <a href="/home" class="font-medium hover:text-secondary transition-colors">Home</a>
                <a href="/inventory" class="font-medium text-secondary transition-colors">Inventory</a>
                <a href="/service" class="font-medium hover:text-secondary transition-colors">Services</a>
                <a href="/about" class="font-medium hover:text-secondary transition-colors">About</a>
                <a href="/contact" class="font-medium hover:text-secondary transition-colors">Contact</a>
            </div>
            <div class="flex items-center space-x-4">
                <button class="hidden md:block px-6 py-2 bg-secondary text-white font-medium rounded-full hover:bg-opacity-90 transition-all">
                    Book a Test Drive
                </button>
                <button class="md:hidden text-2xl">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
    </div>
</header>

<!-- Page Header -->
<section class="pt-32 pb-20 bg-primary text-white relative">
   <div class="absolute inset-0 overflow-hidden">
        <img src="images/inventory.jpg" 
             alt="Luxury cars lineup" 
             class="w-full h-full object-cover opacity-20">
    </div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-serif font-bold mb-6">Our Complete Inventory</h1>
            <p class="text-xl text-gray-300">Browse our extensive collection of luxury vehicles from the world's most prestigious brands.</p>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section x-data="{ open: false }" class="py-4 bg-white sticky top-0 z-30 shadow-sm">
    <div class="container mx-auto px-6">
        <!-- Header / Toggle Button -->
        <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
            <h2 class="text-2xl font-serif font-bold">Filter Vehicles</h2>
            <svg :class="{ 'rotate-180': open }" class="w-6 h-6 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </div>

        <!-- Collapsible Filters -->
        <div x-show="open" x-transition.duration.400ms class="mt-6 overflow-hidden">
            <div class="flex flex-col md:flex-row justify-between items-center mb-6">
                <h2 class="text-2xl font-serif font-bold mb-4 md:mb-0">Filter Vehicles</h2>
                <div class="flex items-center">
                    <span class="mr-3 text-accent">Sort by:</span>
                    <select class="px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-secondary">
                        <option>Featured</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Mileage: Low to High</option>
                        <option>Year: Newest First</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Make Filter -->
                <div class="filter-section">
                    <label class="block text-sm font-medium text-accent mb-1">Make</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-secondary">
                        <option value="">All Makes</option>
                        <option>Mercedes-Benz</option>
                        <option>BMW</option>
                        <option>Audi</option>
                        <option>Porsche</option>
                        <option>Range Rover</option>
                        <option>Bentley</option>
                        <option>Rolls-Royce</option>
                        <option>Ferrari</option>
                        <option>Lamborghini</option>
                        <option>Maserati</option>
                    </select>
                </div>

                <!-- Model Filter -->
                <div class="filter-section">
                    <label class="block text-sm font-medium text-accent mb-1">Model</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-secondary">
                        <option value="">All Models</option>
                        <option>S-Class</option>
                        <option>7 Series</option>
                        <option>A8</option>
                        <option>911</option>
                        <option>Continental GT</option>
                        <option>Phantom</option>
                    </select>
                </div>

                <!-- Price Range -->
                <div class="filter-section">
                    <label class="block text-sm font-medium text-accent mb-1">Price Range</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-secondary">
                        <option value="">All Prices</option>
                        <option>Under $50,000</option>
                        <option>$50,000 - $100,000</option>
                        <option>$100,000 - $150,000</option>
                        <option>$150,000 - $200,000</option>
                        <option>Over $200,000</option>
                    </select>
                </div>

                <!-- Year -->
                <div class="filter-section">
                    <label class="block text-sm font-medium text-accent mb-1">Year</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-secondary">
                        <option value="">All Years</option>
                        <option>2023</option>
                        <option>2022</option>
                        <option>2021</option>
                        <option>2020</option>
                        <option>2019</option>
                        <option>2018</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-6">
                <!-- Body Type -->
                <div class="filter-section">
                    <label class="block text-sm font-medium text-accent mb-1">Body Type</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-secondary">
                        <option value="">All Types</option>
                        <option>Sedan</option>
                        <option>SUV</option>
                        <option>Coupe</option>
                        <option>Convertible</option>
                        <option>Sports Car</option>
                        <option>Wagon</option>
                    </select>
                </div>

                <!-- Mileage -->
                <div class="filter-section">
                    <label class="block text-sm font-medium text-accent mb-1">Mileage</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-secondary">
                        <option value="">Any Mileage</option>
                        <option>Under 10,000</option>
                        <option>10,000 - 20,000</option>
                        <option>20,000 - 30,000</option>
                        <option>30,000 - 50,000</option>
                        <option>Over 50,000</option>
                    </select>
                </div>

                <!-- Transmission -->
                <div class="filter-section">
                    <label class="block text-sm font-medium text-accent mb-1">Transmission</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-secondary">
                        <option value="">All Transmissions</option>
                        <option>Automatic</option>
                        <option>Manual</option>
                        <option>Semi-Automatic</option>
                    </select>
                </div>

                <!-- Color -->
                <div class="filter-section">
                    <label class="block text-sm font-medium text-accent mb-1">Color</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-secondary">
                        <option value="">All Colors</option>
                        <option>Black</option>
                        <option>White</option>
                        <option>Silver</option>
                        <option>Gray</option>
                        <option>Red</option>
                        <option>Blue</option>
                        <option>Other</option>
                    </select>
                </div>
            </div>

            <div class="mt-6 flex justify-between items-center">
                <button class="px-6 py-2 bg-secondary text-white font-medium rounded hover:bg-opacity-90 transition-all">
                    Apply Filters
                </button>
                <button class="px-6 py-2 border border-primary text-primary font-medium rounded hover:bg-primary hover:text-white transition-all">
                    Reset Filters
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Inventory Grid -->
<section class="py-16 bg-light">
    <div class="container mx-auto px-6">
        <div class="flex justify-between items-center mb-8">
            <h3 class="text-xl font-bold">Showing 24 of 187 vehicles</h3>
            <div class="flex items-center">
                <span class="mr-3 text-accent">View:</span>
                <button class="p-2 mr-2 border border-gray-300 rounded hover:bg-gray-100">
                    <i class="fas fa-th-large"></i>
                </button>
                <button class="p-2 border border-gray-300 rounded hover:bg-gray-100">
                    <i class="fas fa-list"></i>
                </button>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Car 1 -->
            <div class="car-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="Mercedes-Benz S-Class" 
                         class="car-image w-full h-64 object-cover transition-transform duration-500" 
                         loading="lazy">
                    <div class="absolute top-4 right-4 bg-secondary text-white px-3 py-1 rounded-full text-sm font-medium">
                        New Arrival
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="text-xl font-bold">Mercedes-Benz S-Class</h3>
                            <p class="text-sm text-accent">S 580 4MATIC Sedan</p>
                        </div>
                        <span class="text-secondary font-bold">$112,500</span>
                    </div>
                    <div class="flex flex-wrap gap-2 my-4">
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">2022</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">8,200 mi</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">Sedan</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">Automatic</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <button id="openModalBtn" class="px-4 py-2 bg-primary text-white text-sm rounded hover:bg-opacity-90 transition-all">
                            View Details
                        </button>
                        <button class="px-4 py-2 border border-primary text-primary text-sm rounded hover:bg-primary hover:text-white transition-all">
                            Compare
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Car 2 -->
            <div class="car-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1583121274602-3e2820c69888?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="Porsche 911 Turbo" 
                         class="car-image w-full h-64 object-cover transition-transform duration-500" 
                         loading="lazy">
                    <div class="absolute top-4 right-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Just Reduced
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="text-xl font-bold">Porsche 911 Turbo</h3>
                            <p class="text-sm text-accent">911 Turbo S Coupe</p>
                        </div>
                        <span class="text-secondary font-bold">$189,999</span>
                    </div>
                    <div class="flex flex-wrap gap-2 my-4">
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">2021</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">4,500 mi</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">Coupe</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">PDK</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <button class="px-4 py-2 bg-primary text-white text-sm rounded hover:bg-opacity-90 transition-all">
                            View Details
                        </button>
                        <button class="px-4 py-2 border border-primary text-primary text-sm rounded hover:bg-primary hover:text-white transition-all">
                            Compare
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Car 3 -->
            <div class="car-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1624704761437-5210a764aeb6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="Range Rover Autobiography" 
                         class="car-image w-full h-64 object-cover transition-transform duration-500" 
                         loading="lazy">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="text-xl font-bold">Range Rover Autobiography</h3>
                            <p class="text-sm text-accent">Autobiography LWB</p>
                        </div>
                        <span class="text-secondary font-bold">$135,750</span>
                    </div>
                    <div class="flex flex-wrap gap-2 my-4">
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">2020</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">18,300 mi</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">SUV</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">Automatic</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <button class="px-4 py-2 bg-primary text-white text-sm rounded hover:bg-opacity-90 transition-all">
                            View Details
                        </button>
                        <button class="px-4 py-2 border border-primary text-primary text-sm rounded hover:bg-primary hover:text-white transition-all">
                            Compare
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Car 4 -->
            <div class="car-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="BMW 7 Series" 
                         class="car-image w-full h-64 object-cover transition-transform duration-500" 
                         loading="lazy">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="text-xl font-bold">BMW 7 Series</h3>
                            <p class="text-sm text-accent">750i xDrive Sedan</p>
                        </div>
                        <span class="text-secondary font-bold">$87,900</span>
                    </div>
                    <div class="flex flex-wrap gap-2 my-4">
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">2021</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">12,800 mi</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">Sedan</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">Automatic</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <button class="px-4 py-2 bg-primary text-white text-sm rounded hover:bg-opacity-90 transition-all">
                            View Details
                        </button>
                        <button class="px-4 py-2 border border-primary text-primary text-sm rounded hover:bg-primary hover:text-white transition-all">
                            Compare
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Car 5 -->
            <div class="car-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="Audi RS7" 
                         class="car-image w-full h-64 object-cover transition-transform duration-500" 
                         loading="lazy">
                    <div class="absolute top-4 right-4 bg-secondary text-white px-3 py-1 rounded-full text-sm font-medium">
                        Certified
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="text-xl font-bold">Audi RS7</h3>
                            <p class="text-sm text-accent">RS 7 Sportback</p>
                        </div>
                        <span class="text-secondary font-bold">$104,500</span>
                    </div>
                    <div class="flex flex-wrap gap-2 my-4">
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">2022</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">6,200 mi</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">Sportback</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">Automatic</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <button class="px-4 py-2 bg-primary text-white text-sm rounded hover:bg-opacity-90 transition-all">
                            View Details
                        </button>
                        <button class="px-4 py-2 border border-primary text-primary text-sm rounded hover:bg-primary hover:text-white transition-all">
                            Compare
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Car 6 -->
            <div class="car-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="Bentley Continental GT" 
                         class="car-image w-full h-64 object-cover transition-transform duration-500" 
                         loading="lazy">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="text-xl font-bold">Bentley Continental GT</h3>
                            <p class="text-sm text-accent">GT V8 Convertible</p>
                        </div>
                        <span class="text-secondary font-bold">$215,000</span>
                    </div>
                    <div class="flex flex-wrap gap-2 my-4">
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">2020</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">9,700 mi</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">Convertible</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">Automatic</span>
                    </div>
                    <div class="flex justify-between items-center">
                         <button 
      @click="showModal = true" 
      class="px-4 py-2 bg-primary text-white text-sm rounded hover:bg-opacity-90 transition-all">
      View Details
    </button>
                        <button class="px-4 py-2 border border-primary text-primary text-sm rounded hover:bg-primary hover:text-white transition-all">
                            Compare
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Car 7 -->
            <div class="car-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="Ferrari Portofino" 
                         class="car-image w-full h-64 object-cover transition-transform duration-500" 
                         loading="lazy">
                    <div class="absolute top-4 right-4 bg-green-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Low Miles
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="text-xl font-bold">Ferrari Portofino</h3>
                            <p class="text-sm text-accent">Portofino M</p>
                        </div>
                        <span class="text-secondary font-bold">$245,900</span>
                    </div>
                    <div class="flex flex-wrap gap-2 my-4">
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">2021</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">3,200 mi</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">Convertible</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">Automatic</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <button class="px-4 py-2 bg-primary text-white text-sm rounded hover:bg-opacity-90 transition-all">
                            View Details
                        </button>
                        <button class="px-4 py-2 border border-primary text-primary text-sm rounded hover:bg-primary hover:text-white transition-all">
                            Compare
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Car 8 -->
            <div class="car-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="Lamborghini Urus" 
                         class="car-image w-full h-64 object-cover transition-transform duration-500" 
                         loading="lazy">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="text-xl font-bold">Lamborghini Urus</h3>
                            <p class="text-sm text-accent">Urus Pearl Capsule</p>
                        </div>
                        <span class="text-secondary font-bold">$259,999</span>
                    </div>
                    <div class="flex flex-wrap gap-2 my-4">
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">2022</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">5,800 mi</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">SUV</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">Automatic</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <button id="openModalBtn" class="px-4 py-2 bg-primary text-white text-sm rounded hover:bg-opacity-90 transition-all">
                            View Details
                        </button>
                        <button class="px-4 py-2 border border-primary text-primary text-sm rounded hover:bg-primary hover:text-white transition-all">
                            Compare
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Car 9 -->
            <div class="car-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="Rolls-Royce Ghost" 
                         class="car-image w-full h-64 object-cover transition-transform duration-500" 
                         loading="lazy">
                    <div class="absolute top-4 right-4 bg-secondary text-white px-3 py-1 rounded-full text-sm font-medium">
                        Exclusive
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="text-xl font-bold">Rolls-Royce Ghost</h3>
                            <p class="text-sm text-accent">Ghost Extended Wheelbase</p>
                        </div>
                        <span class="text-secondary font-bold">$345,000</span>
                    </div>
                    <div class="flex flex-wrap gap-2 my-4">
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">2021</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">2,500 mi</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">Sedan</span>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">Automatic</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <button id="openModalBtn" class="px-4 py-2 bg-primary text-white text-sm rounded hover:bg-opacity-90 transition-all">
                            View Details
                        </button>
                        <button class="px-4 py-2 border border-primary text-primary text-sm rounded hover:bg-primary hover:text-white transition-all">
                            Compare
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            <nav class="inline-flex rounded-md shadow-sm">
                <a href="#" class="px-4 py-2 border border-gray-300 rounded-l-md bg-white text-gray-700 hover:bg-gray-50">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                    1
                </a>
                <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                    2
                </a>
                <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-secondary text-white">
                    3
                </a>
                <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                    4
                </a>
                <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                    5
                </a>
                <a href="#" class="px-4 py-2 border border-gray-300 rounded-r-md bg-white text-gray-700 hover:bg-gray-50">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </nav>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-primary text-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6">Can't Find What You're Looking For?</h2>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-10">Our inventory changes daily. Contact us and we'll help you find your perfect vehicle.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <button class="px-8 py-3 bg-secondary text-white font-medium rounded-full hover:bg-opacity-90 transition-all">
                Contact Our Specialists
            </button>
            <button class="px-8 py-3 bg-transparent border-2 border-white text-white font-medium rounded-full hover:bg-white hover:text-primary transition-all">
                Request a Vehicle
            </button>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-primary text-white py-12">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4">Elite Motors</h3>
                <p class="text-gray-300 mb-4">Your premier destination for luxury vehicles and exceptional service.</p>
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-secondary transition-colors">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-secondary transition-colors">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-secondary transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-secondary transition-colors">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
            <div>
                <h4 class="font-bold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="/home" class="text-gray-300 hover:text-white transition-colors">Home</a></li>
                    <li><a href="<?= base_url('inventory') ?>" class="text-gray-300 hover:text-white transition-colors">Inventory</a></li>
                    <li><a href="/service" class="text-gray-300 hover:text-white transition-colors">Services</a></li>
                    <li><a href="/about" class="text-gray-300 hover:text-white transition-colors">About Us</a></li>
                    <li><a href="/contact" class="text-gray-300 hover:text-white transition-colors">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4">Services</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">New Vehicles</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Pre-Owned</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Financing</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Trade-In</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Maintenance</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4">Newsletter</h4>
                <p class="text-gray-300 mb-4">Subscribe to our newsletter for the latest updates and offers.</p>
                <form class="flex">
                    <input type="email" placeholder="Your email" class="px-4 py-2 w-full rounded-l focus:outline-none text-primary">
                    <button type="submit" class="px-4 py-2 bg-secondary text-white rounded-r hover:bg-opacity-90 transition-all">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="border-t border-white/10 mt-12 pt-8 text-center text-gray-300">
            <p>&copy; 2023 Elite Motors. All rights reserved.</p>
        </div>
    </div>
</footer>
<!-- Modal Backdrop (hidden by default) -->
<div id="carModalBackdrop" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden"></div>

<!-- Modal Container (hidden by default) -->
<div id="carModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
  <div class="bg-white rounded-lg shadow-xl max-w-xl w-full max-h-[85vh] overflow-y-auto">
    <!-- Modal Header -->
    <div class="flex justify-between items-center p-4 border-b">
      <h3 id="modalCarTitle" class="text-xl font-bold"></h3>
      <button id="closeModal" class="text-gray-500 hover:text-gray-700">
        <i class="fas fa-times text-xl"></i>
      </button>
    </div>

    <!-- Modal Content -->
    <div class="grid grid-cols-1 gap-4 p-4">
      <!-- Car Images Gallery -->
      <div class="car-gallery">
        <div class="swiper carSwiper">
          <div class="swiper-wrapper" id="modalCarImages">
            <!-- Images will be added by JavaScript -->
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>

      <!-- Car Details -->
      <div>
        <div class="mb-4">
          <h4 class="text-lg font-bold mb-1">Vehicle Overview</h4>
          <p id="modalCarDescription" class="text-gray-700 text-sm"></p>
        </div>

        <div class="grid grid-cols-2 gap-3 mb-4 text-sm">
          <div>
            <h5 class="font-semibold text-gray-600">Price</h5>
            <p id="modalCarPrice" class="text-secondary font-bold"></p>
          </div>
          <div>
            <h5 class="font-semibold text-gray-600">Mileage</h5>
            <p id="modalCarMileage"></p>
          </div>
          <div>
            <h5 class="font-semibold text-gray-600">Year</h5>
            <p id="modalCarYear"></p>
          </div>
          <div>
            <h5 class="font-semibold text-gray-600">Transmission</h5>
            <p id="modalCarTransmission"></p>
          </div>
          <div>
            <h5 class="font-semibold text-gray-600">Body Type</h5>
            <p id="modalCarBodyType"></p>
          </div>
          <div>
            <h5 class="font-semibold text-gray-600">Color</h5>
            <p id="modalCarColor"></p>
          </div>
        </div>

        <div class="mb-4">
          <h4 class="text-lg font-bold mb-1">Key Features</h4>
          <ul id="modalCarFeatures" class="list-disc pl-5 text-sm space-y-1">
            <!-- Features will be added by JavaScript -->
          </ul>
        </div>

        <div class="flex flex-col sm:flex-row sm:space-x-3 space-y-3 sm:space-y-0">
          <button class="w-full px-4 py-2 bg-secondary text-white font-medium rounded hover:bg-opacity-90 transition-all text-sm">
            <i class="fas fa-phone-alt mr-2"></i> Contact Dealer
          </button>
          <button class="w-full px-4 py-2 border border-secondary text-secondary font-medium rounded hover:bg-secondary hover:text-white transition-all text-sm">
            <i class="fas fa-calendar-alt mr-2"></i> Schedule Test Drive
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
    // Initialize any necessary JavaScript here
    document.addEventListener('DOMContentLoaded', function() {
        // Filter toggle functionality
        const filterButtons = document.querySelectorAll('.filter-toggle');
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const filterSection = this.closest('.filter-section');
                filterSection.classList.toggle('hidden');
            });
        });
    });
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>



<script>

    // Sample car data (in a real app, this would come from an API or database)
const carDatabase = {
  "mercedes-s-class": {
    id: "mercedes-s-class",
    title: "Mercedes-Benz S-Class",
    subtitle: "S 580 4MATIC Sedan",
    price: "$112,500",
    year: "2022",
    mileage: "8,200 mi",
    transmission: "Automatic",
    bodyType: "Sedan",
    color: "Obsidian Black",
    description: "The Mercedes-Benz S-Class represents the pinnacle of luxury motoring, combining cutting-edge technology with unparalleled comfort. This S 580 4MATIC model features a powerful V8 engine, all-wheel drive, and every conceivable luxury feature.",
    images: [
      "https://images.unsplash.com/photo-1555215695-3004980ad54e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80",
      "https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80",
      "https://images.unsplash.com/photo-1616788494707-ec28f08fd05a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
    ],
    features: [
      "4.0L V8 Biturbo Engine",
      "496 HP / 516 lb-ft torque",
      "4MATIC All-Wheel Drive",
      "Air Balance Cabin Perfuming",
      "Burmester 3D Surround Sound",
      "Executive Rear Seat Package",
      "Magic Body Control",
      "Night View Assist Plus",
      "Energizing Comfort Control",
      "MBUX Interior Assistant"
    ]
  },
  "porsche-911-turbo": {
    id: "porsche-911-turbo",
    title: "Porsche 911 Turbo",
    subtitle: "911 Turbo S Coupe",
    price: "$189,999",
    year: "2021",
    mileage: "4,500 mi",
    transmission: "PDK",
    bodyType: "Coupe",
    color: "GT Silver Metallic",
    description: "The Porsche 911 Turbo S represents the perfect balance of performance and daily drivability. With 640 horsepower from its twin-turbo flat-6 engine, this 911 delivers supercar performance with Porsche's legendary engineering.",
    images: [
      "https://images.unsplash.com/photo-1583121274602-3e2820c69888?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80",
      "https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80",
      "https://images.unsplash.com/photo-1558981806-ec527fa84c39?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
    ],
    features: [
      "3.8L Twin-Turbo Flat-6",
      "640 HP / 590 lb-ft torque",
      "8-speed PDK Transmission",
      "Porsche Traction Management",
      "Porsche Ceramic Composite Brakes",
      "Sport Chrono Package",
      "18-way Adaptive Sport Seats",
      "BOSE Surround Sound System",
      "Porsche Dynamic Chassis Control",
      "LED Matrix Headlights"
    ]
  }
};

// Initialize modal functionality
document.addEventListener('DOMContentLoaded', function() {
  // Get modal elements
  const modalBackdrop = document.getElementById('carModalBackdrop');
  const modal = document.getElementById('carModal');
  const closeModalBtn = document.getElementById('closeModal');
  
  // Get all "View Details" buttons
  const viewDetailsButtons = document.querySelectorAll('[data-car-id]');
  
  // Add click event to all "View Details" buttons
  viewDetailsButtons.forEach(button => {
    button.addEventListener('click', function() {
      const carId = this.getAttribute('data-car-id');
      openModal(carId);
    });
  });
  
  // Close modal when clicking the X button
  closeModalBtn.addEventListener('click', closeModal);
  
  // Close modal when clicking the backdrop
  modalBackdrop.addEventListener('click', closeModal);
  
  // Close modal when pressing Escape key
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      closeModal();
    }
  });
  
  // Function to open modal with car details
  function openModal(carId) {
    const car = carDatabase[carId];
    if (!car) return;
    
    // Set modal content
    document.getElementById('modalCarTitle').textContent = `${car.title} - ${car.subtitle}`;
    document.getElementById('modalCarPrice').textContent = car.price;
    document.getElementById('modalCarYear').textContent = car.year;
    document.getElementById('modalCarMileage').textContent = car.mileage;
    document.getElementById('modalCarTransmission').textContent = car.transmission;
    document.getElementById('modalCarBodyType').textContent = car.bodyType;
    document.getElementById('modalCarColor').textContent = car.color;
    document.getElementById('modalCarDescription').textContent = car.description;
    
    // Clear and populate features list
    const featuresList = document.getElementById('modalCarFeatures');
    featuresList.innerHTML = '';
    car.features.forEach(feature => {
      const li = document.createElement('li');
      li.textContent = feature;
      li.className = 'mb-1';
      featuresList.appendChild(li);
    });
    
    // Clear and populate image gallery
    const imagesContainer = document.getElementById('modalCarImages');
    imagesContainer.innerHTML = '';
    car.images.forEach(imageUrl => {
      const slide = document.createElement('div');
      slide.className = 'swiper-slide';
      const img = document.createElement('img');
      img.src = imageUrl;
      img.alt = car.title;
      img.className = 'w-full h-96 object-cover';
      slide.appendChild(img);
      imagesContainer.appendChild(slide);
    });
    
    // Initialize or update Swiper
    if (window.carSwiper) {
      window.carSwiper.update();
    } else {
      window.carSwiper = new Swiper('.carSwiper', {
        loop: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    }
    
    // Show modal
    modalBackdrop.classList.remove('hidden');
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
  }
  
  // Function to close modal
  function closeModal() {
    modalBackdrop.classList.add('hidden');
    modal.classList.add('hidden');
    document.body.style.overflow = '';
  }
});
</script>


</body>
</html>