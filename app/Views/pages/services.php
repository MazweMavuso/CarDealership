<!DOCTYPE html>
<html lang="en">
<head>
    <base target="_self">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Motors | Premium Automotive Services</title>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <meta name="description" content="Discover premium automotive services at Elite Motors. From vehicle purchase to maintenance, we provide exceptional care for your luxury vehicle.">
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
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .service-icon {
            transition: all 0.3s ease;
        }
        .service-card:hover .service-icon {
            transform: scale(1.1);
            color: #d4af37;
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

<!-- Services Hero Section -->
<section class="relative h-96 flex items-center justify-center overflow-hidden mt-16">
    <div class="absolute inset-0 w-full h-full">
        <img src="https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="w-full h-full object-cover" alt="Luxury Car Service" />
    </div>
    <div class="absolute inset-0 hero-gradient z-10"></div>
    <div class="container mx-auto px-6 relative z-20 text-center text-white">
        <h1 class="text-4xl md:text-6xl font-serif font-bold mb-6">Premium Automotive Services</h1>
        <p class="text-xl md:text-2xl max-w-3xl mx-auto">Exceptional care for your luxury vehicle at every stage of ownership.</p>
    </div>
</section>

<!-- Services Overview -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-serif font-bold mb-4">Our Comprehensive Services</h2>
            <p class="max-w-2xl mx-auto text-accent">From acquisition to maintenance, we provide unparalleled service for luxury vehicle owners</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="service-card bg-light rounded-lg overflow-hidden shadow-md p-8 transition-all duration-300">
                <div class="service-icon text-5xl text-primary mb-6">
                    <i class="fas fa-car"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Vehicle Acquisition</h3>
                <p class="text-accent mb-6">Our concierge service helps you find the perfect luxury vehicle from our extensive global network of dealers and private sellers.</p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>Global vehicle sourcing</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>Pre-purchase inspections</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>Vehicle history reports</span>
                    </li>
                </ul>
                <a href="#" class="text-secondary font-medium hover:underline">Learn more <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
            
            <!-- Service 2 -->
            <div class="service-card bg-light rounded-lg overflow-hidden shadow-md p-8 transition-all duration-300">
                <div class="service-icon text-5xl text-primary mb-6">
                    <i class="fas fa-exchange-alt"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Trade-In & Valuation</h3>
                <p class="text-accent mb-6">Get the most accurate valuation and best possible price for your current vehicle with our expert appraisal service.</p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>Competitive market analysis</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>Instant online valuation</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>Seamless trade-in process</span>
                    </li>
                </ul>
                <a href="#" class="text-secondary font-medium hover:underline">Learn more <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
            
            <!-- Service 3 -->
            <div class="service-card bg-light rounded-lg overflow-hidden shadow-md p-8 transition-all duration-300">
                <div class="service-icon text-5xl text-primary mb-6">
                    <i class="fas fa-file-signature"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Financing Solutions</h3>
                <p class="text-accent mb-6">Tailored financing options with competitive rates from our network of luxury vehicle specialists.</p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>Lease & purchase options</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>Private client services</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>International financing</span>
                    </li>
                </ul>
                <a href="#" class="text-secondary font-medium hover:underline">Learn more <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
            
            <!-- Service 4 -->
            <div class="service-card bg-light rounded-lg overflow-hidden shadow-md p-8 transition-all duration-300">
                <div class="service-icon text-5xl text-primary mb-6">
                    <i class="fas fa-wrench"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Maintenance & Repair</h3>
                <p class="text-accent mb-6">Factory-trained technicians using genuine parts to keep your luxury vehicle in peak condition.</p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>Manufacturer-certified technicians</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>OEM parts guarantee</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>Courtesy vehicle program</span>
                    </li>
                </ul>
                <a href="#" class="text-secondary font-medium hover:underline">Learn more <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
            
            <!-- Service 5 -->
            <div class="service-card bg-light rounded-lg overflow-hidden shadow-md p-8 transition-all duration-300">
                <div class="service-icon text-5xl text-primary mb-6">
                    <i class="fas fa-spa"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Detailing & Protection</h3>
                <p class="text-accent mb-6">Premium detailing services and ceramic coatings to preserve your vehicle's showroom finish.</p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>Paint correction</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>Ceramic coatings</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>Interior rejuvenation</span>
                    </li>
                </ul>
                <a href="#" class="text-secondary font-medium hover:underline">Learn more <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
            
            <!-- Service 6 -->
            <div class="service-card bg-light rounded-lg overflow-hidden shadow-md p-8 transition-all duration-300">
                <div class="service-icon text-5xl text-primary mb-6">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Extended Warranties</h3>
                <p class="text-accent mb-6">Comprehensive warranty packages that provide peace of mind beyond the manufacturer coverage.</p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>Exclusionary coverage</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>Bumper-to-bumper protection</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>Nationwide repair network</span>
                    </li>
                </ul>
                <a href="#" class="text-secondary font-medium hover:underline">Learn more <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Service Experience Section -->
<section class="py-20 bg-primary text-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6">The Elite Service Experience</h2>
                <p class="text-gray-300 mb-8">At Elite Motors, we redefine automotive service with an uncompromising commitment to excellence. Our white-glove approach ensures every interaction exceeds expectations.</p>
                
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-secondary text-white rounded-full flex items-center justify-center mr-4 mt-1">
                            <i class="fas fa-star"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-xl mb-2">Personal Concierge</h4>
                            <p class="text-gray-300">Dedicated service advisor assigned to manage all your vehicle needs from start to finish.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-secondary text-white rounded-full flex items-center justify-center mr-4 mt-1">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-xl mb-2">Express Service</h4>
                            <p class="text-gray-300">Priority scheduling and expedited service options to minimize your downtime.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-secondary text-white rounded-full flex items-center justify-center mr-4 mt-1">
                            <i class="fas fa-car-side"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-xl mb-2">Loaner Vehicles</h4>
                            <p class="text-gray-300">Premium loaner vehicles available at no additional cost during service visits.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Service Center" class="rounded-lg shadow-xl w-full">
                <div class="absolute -bottom-6 -right-6 bg-secondary p-6 rounded-lg shadow-lg w-2/3">
                    <h4 class="font-bold text-xl mb-2">Service Special</h4>
                    <p class="mb-4">20% Off First Detailing Service</p>
                    <button class="px-4 py-2 bg-primary text-white text-sm rounded hover:bg-opacity-90 transition-all">
                        Book Now
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Process -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-serif font-bold mb-4">Our Service Process</h2>
            <p class="max-w-2xl mx-auto text-accent">A seamless experience designed for your convenience</p>
        </div>
        
        <div class="relative">
            <!-- Timeline bar -->
            <div class="hidden md:block absolute left-1/2 h-full w-1 bg-secondary transform -translate-x-1/2"></div>
            
            <!-- Process steps -->
            <div class="space-y-12 md:space-y-0">
                <!-- Step 1 -->
                <div class="relative flex flex-col md:flex-row items-center md:even:flex-row-reverse">
                    <div class="flex-1 md:px-12 mb-8 md:mb-0">
                        <h3 class="text-2xl font-bold mb-4">1. Schedule Your Visit</h3>
                        <p class="text-accent">Book your appointment online or through your personal concierge. We offer flexible scheduling including evenings and weekends.</p>
                    </div>
                    <div class="w-24 h-24 rounded-full bg-light border-4 border-secondary flex items-center justify-center text-3xl font-bold text-secondary">
                        1
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="relative flex flex-col md:flex-row items-center md:even:flex-row-reverse">
                    <div class="flex-1 md:px-12 mb-8 md:mb-0">
                        <h3 class="text-2xl font-bold mb-4">2. Vehicle Assessment</h3>
                        <p class="text-accent">Our certified technicians perform a comprehensive 100-point inspection to identify all service needs.</p>
                    </div>
                    <div class="w-24 h-24 rounded-full bg-light border-4 border-secondary flex items-center justify-center text-3xl font-bold text-secondary">
                        2
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="relative flex flex-col md:flex-row items-center md:even:flex-row-reverse">
                    <div class="flex-1 md:px-12 mb-8 md:mb-0">
                        <h3 class="text-2xl font-bold mb-4">3. Service Approval</h3>
                        <p class="text-accent">Receive a detailed estimate with recommended services. Approve work via our mobile app or in-person.</p>
                    </div>
                    <div class="w-24 h-24 rounded-full bg-light border-4 border-secondary flex items-center justify-center text-3xl font-bold text-secondary">
                        3
                    </div>
                </div>
                
                <!-- Step 4 -->
                <div class="relative flex flex-col md:flex-row items-center md:even:flex-row-reverse">
                    <div class="flex-1 md:px-12 mb-8 md:mb-0">
                        <h3 class="text-2xl font-bold mb-4">4. Expert Service</h3>
                        <p class="text-accent">Factory-trained technicians perform services using only manufacturer-approved parts and procedures.</p>
                    </div>
                    <div class="w-24 h-24 rounded-full bg-light border-4 border-secondary flex items-center justify-center text-3xl font-bold text-secondary">
                        4
                    </div>
                </div>
                
                <!-- Step 5 -->
                <div class="relative flex flex-col md:flex-row items-center md:even:flex-row-reverse">
                    <div class="flex-1 md:px-12 mb-8 md:mb-0">
                        <h3 class="text-2xl font-bold mb-4">5. Quality Assurance</h3>
                        <p class="text-accent">Every vehicle undergoes rigorous quality checks before being returned to you in pristine condition.</p>
                    </div>
                    <div class="w-24 h-24 rounded-full bg-light border-4 border-secondary flex items-center justify-center text-3xl font-bold text-secondary">
                        5
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service CTA -->
<section class="py-20 bg-light">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6">Ready to Experience Elite Service?</h2>
        <p class="text-xl max-w-2xl mx-auto mb-10 text-accent">Schedule your service appointment today and discover the difference of true luxury automotive care.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <button class="px-8 py-3 bg-secondary text-white font-medium rounded-full hover:bg-opacity-90 transition-all">
                Book an Appointment
            </button>
            <button class="px-8 py-3 bg-transparent border-2 border-primary text-primary font-medium rounded-full hover:bg-primary hover:text-white transition-all">
                Contact Our Team
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
                    <li><a href="/inventory" class="text-gray-300 hover:text-white transition-colors">Inventory</a></li>
                    <li><a href="/services" class="text-gray-300 hover:text-white transition-colors">Services</a></li>
                    <li><a href="/about" class="text-gray-300 hover:text-white transition-colors">About Us</a></li>
                    <li><a href="/contact" class="text-gray-300 hover:text-white transition-colors">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4">Services</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Vehicle Acquisition</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Trade-In & Valuation</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Maintenance</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Detailing</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Extended Warranties</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4">Contact</h4>
                <address class="text-gray-300 not-italic">
                    123 Luxury Avenue<br>
                    Beverly Hills, CA 90210<br><br>
                    <a href="tel:+13105551234" class="hover:text-white">(310) 555-1234</a><br>
                    <a href="mailto:info@elitemotors.com" class="hover:text-white">info@elitemotors.com</a>
                </address>
            </div>
        </div>
        <div class="border-t border-white/10 mt-12 pt-8 text-center text-gray-300">
            <p>&copy; 2023 Elite Motors. All rights reserved.</p>
        </div>
    </div>
</footer>

<script>
    // Initialize any necessary JavaScript here
    document.addEventListener('DOMContentLoaded', function() {
        // Animation or other interactive elements can be added here
    });
</script>
</body>
</html>