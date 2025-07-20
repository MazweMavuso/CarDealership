<!DOCTYPE html>
<html lang="en">
<head>
    <base target="_self">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Motors | Luxury Car Dealership</title>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <meta name="description" content="Discover premium luxury vehicles at Elite Motors. Your destination for high-end cars with exceptional service.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Include Swiper CSS in your <head> -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
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
    <div class="mx-4 md:mx-8 mt-4 bg-white/50 backdrop-blur-md shadow-md rounded-2xl">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-primary hover:text-secondary transition-colors">
                <span class="text-secondary">Elite</span> Motors
            </a>
            <div class="hidden md:flex space-x-8">
                <a href="/home" class="font-medium hover:text-secondary transition-colors">Home</a>
                <a href="/inventory" class="font-medium hover:text-secondary transition-colors">Inventory</a>
                <a href="/service" class="font-medium hover:text-secondary transition-colors">Services</a>
                <a href="/about" class="font-medium hover:text-secondary transition-colors">About</a>
                <a href="/contact" class="font-medium hover:text-secondary transition-colors">Contact</a>
            </div>
            <div class="flex items-center space-x-4">
                <button class="hidden md:block px-6 py-2 bg-secondary text-white font-medium rounded-full hover:bg-opacity-90 transition-all">
                    Buy a Car
                </button>
                <button class="md:hidden text-2xl">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
    </div>
</header>



<!-- Hero Section Carousel -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
  <!-- Swiper container -->
  <div class="swiper hero-swiper absolute inset-0 w-full h-full">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/background1.jpg" class="w-full h-full object-cover" alt="Luxury Car 1" />
      </div>
      <div class="swiper-slide">
        <img src="images/background2.jpg" class="w-full h-full object-cover" alt="Luxury Car 2" />
      </div>
      <div class="swiper-slide">
        <img src="images/background3.jpg" class="w-full h-full object-cover" alt="Luxury Car 3" />
      </div>
    </div>
  </div>

  <!-- Gradient overlay -->
  <div class="absolute inset-0 hero-gradient z-10"></div>

  <!-- Hero content -->
  <div class="container mx-auto px-6 relative z-20 text-center text-white">
    <h1 class="text-4xl md:text-6xl font-serif font-bold mb-6">Experience Automotive Excellence</h1>
    <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-10">Discover the finest selection of luxury vehicles curated for the discerning driver.</p>
    <div class="flex flex-col sm:flex-row justify-center gap-4">
      <button class="px-8 py-3 bg-secondary text-white font-medium rounded-full hover:bg-opacity-90 transition-all">
        Explore Inventory
      </button>
      <button class="px-8 py-3 bg-transparent border-2 border-white text-white font-medium rounded-full hover:bg-white hover:text-primary transition-all">
        Learn More
      </button>
    </div>
  </div>

  <!-- Scroll down icon -->
  <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-20 animate-bounce">
    <a href="#inventory" class="text-white text-3xl">
      <i class="fas fa-chevron-down"></i>
    </a>
  </div>
</section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="stats-item p-6 text-center bg-light rounded-lg shadow-sm">
                    <h3 class="text-4xl font-bold text-secondary mb-2">250+</h3>
                    <p class="text-accent">Vehicles in Stock</p>
                </div>
                <div class="stats-item p-6 text-center bg-light rounded-lg shadow-sm">
                    <h3 class="text-4xl font-bold text-secondary mb-2">98%</h3>
                    <p class="text-accent">Customer Satisfaction</p>
                </div>
                <div class="stats-item p-6 text-center bg-light rounded-lg shadow-sm">
                    <h3 class="text-4xl font-bold text-secondary mb-2">25</h3>
                    <p class="text-accent">Years Experience</p>
                </div>
                <div class="stats-item p-6 text-center bg-light rounded-lg shadow-sm">
                    <h3 class="text-4xl font-bold text-secondary mb-2">50+</h3>
                    <p class="text-accent">Brands Available</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Inventory -->
    <section id="inventory" class="py-20 bg-light">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-serif font-bold mb-4">Featured Inventory</h2>
                <p class="max-w-2xl mx-auto text-accent">Explore our curated selection of premium vehicles</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Car 1 -->
                <div class="car-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                    <div class="overflow-hidden">
                        <img src="images/Mercedes-Benz S-Class.jpg" alt="Luxury sedan" class="car-image w-full h-64 object-cover transition-transform duration-500" loading="lazy">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold">Mercedes-Benz S-Class</h3>
                            <span class="text-secondary font-bold">$89,999</span>
                        </div>
                        <div class="flex items-center text-sm text-accent mb-4">
                            <span class="mr-4"><i class="fas fa-tachometer-alt mr-1"></i> 12,500 mi</span>
                            <span><i class="fas fa-car mr-1"></i> 2022</span>
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
                
                <!-- Car 2 -->
                <div class="car-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                    <div class="overflow-hidden">
                        <img src="images/Porsche.jpg" alt="Sports car" class="car-image w-full h-64 object-cover transition-transform duration-500" loading="lazy">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold">Porsche 911 Turbo</h3>
                            <span class="text-secondary font-bold">$129,999</span>
                        </div>
                        <div class="flex items-center text-sm text-accent mb-4">
                            <span class="mr-4"><i class="fas fa-tachometer-alt mr-1"></i> 8,200 mi</span>
                            <span><i class="fas fa-car mr-1"></i> 2021</span>
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
                    <div class="overflow-hidden">
                        <img src="images/rangerover.jpg" alt="Luxury SUV" class="car-image w-full h-64 object-cover transition-transform duration-500" loading="lazy">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold">Range Rover Autobiography</h3>
                            <span class="text-secondary font-bold">$109,999</span>
                        </div>
                        <div class="flex items-center text-sm text-accent mb-4">
                            <span class="mr-4"><i class="fas fa-tachometer-alt mr-1"></i> 15,000 mi</span>
                            <span><i class="fas fa-car mr-1"></i> 2020</span>
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
            </div>
            <div class="text-center mt-12">
                <button class="px-8 py-3 bg-primary text-white font-medium rounded-full hover:bg-opacity-90 transition-all">
                    <a href="/inventory">View Full Inventory</a>
                </button>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-serif font-bold mb-4">Our Services</h2>
                <p class="max-w-2xl mx-auto text-accent">Comprehensive automotive services tailored to your needs</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 bg-light rounded-lg text-center">
                    <div class="w-16 h-16 bg-secondary text-white rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-car text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Vehicle Purchase</h3>
                    <p class="text-accent">Find your perfect vehicle from our extensive inventory of premium cars.</p>
                </div>
                <div class="p-8 bg-light rounded-lg text-center">
                    <div class="w-16 h-16 bg-secondary text-white rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-exchange-alt text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Trade-In</h3>
                    <p class="text-accent">Get the best value for your current vehicle with our trade-in program.</p>
                </div>
                <div class="p-8 bg-light rounded-lg text-center">
                    <div class="w-16 h-16 bg-secondary text-white rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-wrench text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Maintenance</h3>
                    <p class="text-accent">Expert maintenance and service from certified technicians.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-primary text-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-serif font-bold mb-4">Client Testimonials</h2>
                <p class="max-w-2xl mx-auto text-gray-300">What our customers say about us</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 bg-white/10 rounded-lg">
                    <div class="flex items-center mb-4">
                        <img src="https://picsum.photos/100?random=5" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Michael Johnson</h4>
                            <p class="text-gray-300 text-sm">Business Executive</p>
                        </div>
                    </div>
                    <p class="text-gray-200">"The team at Elite Motors made my car buying experience exceptional. Their attention to detail and customer service is unmatched."</p>
                    <div class="flex mt-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="p-8 bg-white/10 rounded-lg">
                    <div class="flex items-center mb-4">
                        <img src="https://picsum.photos/100?random=6" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Sarah Williams</h4>
                            <p class="text-gray-300 text-sm">Entrepreneur</p>
                        </div>
                    </div>
                    <p class="text-gray-200">"I've purchased three vehicles from Elite Motors and each experience has been better than the last. Truly a premium dealership."</p>
                    <div class="flex mt-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="p-8 bg-white/10 rounded-lg">
                    <div class="flex items-center mb-4">
                        <img src="https://picsum.photos/100?random=7" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">David Chen</h4>
                            <p class="text-gray-300 text-sm">Tech CEO</p>
                        </div>
                    </div>
                    <p class="text-gray-200">"The selection of high-end vehicles is impressive, but it's the personalized service that keeps me coming back."</p>
                    <div class="flex mt-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-light">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6">Contact Us</h2>
                    <p class="text-accent mb-8">Ready to find your dream car? Get in touch with our team of experts.</p>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-secondary text-white rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-1">Visit Us</h4>
                                <p class="text-accent">123 Luxury Avenue, Beverly Hills, CA 90210</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-secondary text-white rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-1">Call Us</h4>
                                <p class="text-accent">(310) 555-1234</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-secondary text-white rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-1">Email Us</h4>
                                <p class="text-accent">info@elitemotors.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-2xl font-serif font-bold mb-6">Send a Message</h3>
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-accent mb-1">Name</label>
                                <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-secondary">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-accent mb-1">Email</label>
                                <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-secondary">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="subject" class="block text-sm font-medium text-accent mb-1">Subject</label>
                            <input type="text" id="subject" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-secondary">
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-sm font-medium text-accent mb-1">Message</label>
                            <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-secondary"></textarea>
                        </div>
                        <button type="submit" class="w-full px-6 py-3 bg-primary text-white font-medium rounded hover:bg-opacity-90 transition-all">
                            Send Message
                        </button>
                    </form>
                </div>
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
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Home</a></li>
                        <li><a href="#inventory" class="text-gray-300 hover:text-white transition-colors">Inventory</a></li>
                        <li><a href="#services" class="text-gray-300 hover:text-white transition-colors">Services</a></li>
                        <li><a href="#about" class="text-gray-300 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#contact" class="text-gray-300 hover:text-white transition-colors">Contact</a></li>
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

    
    <script>
  new Swiper('.hero-swiper', {
    loop: true,
    effect: 'fade', // you can use 'slide' for sliding effect
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    speed: 1000,
  });
</script>


    

</body>
</html>


    