<!DOCTYPE html>
<html lang="en">
<head>
    <base target="_self">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Motors | About Our Luxury Dealership</title>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <meta name="description" content="Discover the Elite Motors difference - 25 years of excellence in luxury automotive sales and service.">
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
        .timeline-item:not(:last-child):after {
            content: '';
            position: absolute;
            left: 2.25rem;
            top: 3.5rem;
            height: calc(100% - 3.5rem);
            width: 2px;
            background: #d4af37;
        }
        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .values-icon {
            transition: all 0.3s ease;
        }
        .values-card:hover .values-icon {
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
    <div class="mx-4 md:mx-8 mt-4 bg-white/50 backdrop-blur-md shadow-md rounded-2xl">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/home" class="text-2xl font-bold text-primary hover:text-secondary transition-colors">
                <span class="text-secondary">Elite</span> Motors
            </a>
            <div class="hidden md:flex space-x-8">
                <a href="/home" class="font-medium hover:text-secondary transition-colors">Home</a>
                <a href="/inventory" class="font-medium hover:text-secondary transition-colors">Inventory</a>
                <a href="/service" class="font-medium hover:text-secondary transition-colors">Services</a>
                <a href="/about" class="font-medium text-secondary transition-colors">About</a>
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

<!-- About Hero Section -->
<section class="relative h-96 flex items-center justify-center overflow-hidden mt-16">
    <div class="absolute inset-0 w-full h-full">
        <img src="https://images.unsplash.com/photo-1489824904134-891ab64532f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="w-full h-full object-cover" alt="Luxury Dealership" />
    </div>
    <div class="absolute inset-0 hero-gradient z-10"></div>
    <div class="container mx-auto px-6 relative z-20 text-center text-white">
        <h1 class="text-4xl md:text-6xl font-serif font-bold mb-6">Our Legacy of Excellence</h1>
        <p class="text-xl md:text-2xl max-w-3xl mx-auto">25 years of redefining luxury automotive experiences</p>
    </div>
</section>

<!-- Our Story Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6">The Elite Motors Story</h2>
                <p class="text-accent mb-6">Founded in 1998 by automotive enthusiast Robert Langdon, Elite Motors began as a small boutique dealership with a vision to transform the luxury car buying experience.</p>
                <p class="text-accent mb-8">What started as a passion project quickly grew into one of the most respected names in luxury automotive, known for our uncompromising standards, exceptional inventory, and white-glove service.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="px-6 py-3 bg-secondary text-white font-medium rounded-full hover:bg-opacity-90 transition-all">
                        Meet Our Team
                    </button>
                    <button class="px-6 py-3 bg-transparent border-2 border-primary text-primary font-medium rounded-full hover:bg-primary hover:text-white transition-all">
                        View Timeline
                    </button>
                </div>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Founder with classic car" class="rounded-lg shadow-xl w-full">
                <div class="absolute -bottom-6 -left-6 bg-primary text-white p-4 rounded-lg shadow-lg">
                    <p class="font-bold">Robert Langdon</p>
                    <p class="text-sm">Founder & CEO</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="py-20 bg-light">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-serif font-bold mb-4">Our Journey</h2>
            <p class="max-w-2xl mx-auto text-accent">Milestones that shaped our legacy</p>
        </div>
        
        <div class="max-w-3xl mx-auto">
            <div class="space-y-8">
                <!-- Timeline Item 1 -->
                <div class="relative timeline-item pl-16">
                    <div class="absolute left-0 w-12 h-12 rounded-full bg-secondary flex items-center justify-center text-white font-bold">
                        1998
                    </div>
                    <h3 class="text-xl font-bold mb-2">Founding of Elite Motors</h3>
                    <p class="text-accent">Robert Langdon opens the first Elite Motors showroom in Beverly Hills with just 12 pre-owned luxury vehicles.</p>
                </div>
                
                <!-- Timeline Item 2 -->
                <div class="relative timeline-item pl-16">
                    <div class="absolute left-0 w-12 h-12 rounded-full bg-secondary flex items-center justify-center text-white font-bold">
                        2005
                    </div>
                    <h3 class="text-xl font-bold mb-2">First Manufacturer Partnership</h3>
                    <p class="text-accent">We become an authorized dealer for Mercedes-Benz, marking our entry into new vehicle sales.</p>
                </div>
                
                <!-- Timeline Item 3 -->
                <div class="relative timeline-item pl-16">
                    <div class="absolute left-0 w-12 h-12 rounded-full bg-secondary flex items-center justify-center text-white font-bold">
                        2012
                    </div>
                    <h3 class="text-xl font-bold mb-2">Expansion to East Coast</h3>
                    <p class="text-accent">Our New York flagship location opens, bringing our unique approach to luxury automotive to the East Coast.</p>
                </div>
                
                <!-- Timeline Item 4 -->
                <div class="relative timeline-item pl-16">
                    <div class="absolute left-0 w-12 h-12 rounded-full bg-secondary flex items-center justify-center text-white font-bold">
                        2018
                    </div>
                    <h3 class="text-xl font-bold mb-2">20th Anniversary</h3>
                    <p class="text-accent">Celebrating two decades of excellence with the opening of our state-of-the-art Beverly Hills headquarters.</p>
                </div>
                
                <!-- Timeline Item 5 -->
                <div class="relative timeline-item pl-16">
                    <div class="absolute left-0 w-12 h-12 rounded-full bg-secondary flex items-center justify-center text-white font-bold">
                        2023
                    </div>
                    <h3 class="text-xl font-bold mb-2">Digital Showroom Launch</h3>
                    <p class="text-accent">Introducing our revolutionary virtual showroom, combining digital convenience with personal service.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Values Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-serif font-bold mb-4">Our Core Values</h2>
            <p class="max-w-2xl mx-auto text-accent">The principles that guide every decision we make</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Value 1 -->
            <div class="values-card p-8 bg-light rounded-lg text-center transition-all duration-300">
                <div class="values-icon text-5xl text-primary mb-6">
                    <i class="fas fa-medal"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Excellence</h3>
                <p class="text-accent">We pursue perfection in every detail, from vehicle selection to customer service, never settling for mediocrity.</p>
            </div>
            
            <!-- Value 2 -->
            <div class="values-card p-8 bg-light rounded-lg text-center transition-all duration-300">
                <div class="values-icon text-5xl text-primary mb-6">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Integrity</h3>
                <p class="text-accent">Honesty and transparency form the foundation of every relationship we build with clients and partners.</p>
            </div>
            
            <!-- Value 3 -->
            <div class="values-card p-8 bg-light rounded-lg text-center transition-all duration-300">
                <div class="values-icon text-5xl text-primary mb-6">
                    <i class="fas fa-heart"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Passion</h3>
                <p class="text-accent">Our genuine love for automobiles fuels our commitment to delivering exceptional experiences.</p>
            </div>
            
            <!-- Value 4 -->
            <div class="values-card p-8 bg-light rounded-lg text-center transition-all duration-300">
                <div class="values-icon text-5xl text-primary mb-6">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Innovation</h3>
                <p class="text-accent">We continuously evolve our processes and services to stay at the forefront of the luxury automotive industry.</p>
            </div>
            
            <!-- Value 5 -->
            <div class="values-card p-8 bg-light rounded-lg text-center transition-all duration-300">
                <div class="values-icon text-5xl text-primary mb-6">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Community</h3>
                <p class="text-accent">We believe in giving back and fostering connections among automotive enthusiasts worldwide.</p>
            </div>
            
            <!-- Value 6 -->
            <div class="values-card p-8 bg-light rounded-lg text-center transition-all duration-300">
                <div class="values-icon text-5xl text-primary mb-6">
                    <i class="fas fa-star"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Exclusivity</h3>
                <p class="text-accent">We curate only the most exceptional vehicles and experiences for our discerning clientele.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-primary text-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-serif font-bold mb-4">Meet Our Leadership</h2>
            <p class="max-w-2xl mx-auto text-gray-300">The passionate professionals who drive our success</p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Team Member 1 -->
            <div class="team-card bg-white/10 rounded-lg overflow-hidden transition-all duration-300">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Robert Langdon" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-1">Robert Langdon</h3>
                    <p class="text-gray-300 mb-4">Founder & CEO</p>
                    <p class="text-gray-200 mb-4">With over 30 years in the luxury automotive industry, Robert's vision continues to guide our company.</p>
                    <div class="flex space-x-3">
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Team Member 2 -->
            <div class="team-card bg-white/10 rounded-lg overflow-hidden transition-all duration-300">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Sarah Chen" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-1">Sarah Chen</h3>
                    <p class="text-gray-300 mb-4">Chief Operations Officer</p>
                    <p class="text-gray-200 mb-4">Sarah's operational expertise ensures every Elite Motors location delivers consistent excellence.</p>
                    <div class="flex space-x-3">
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Team Member 3 -->
            <div class="team-card bg-white/10 rounded-lg overflow-hidden transition-all duration-300">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Michael Rodriguez" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-1">Michael Rodriguez</h3>
                    <p class="text-gray-300 mb-4">Director of Sales</p>
                    <p class="text-gray-200 mb-4">Michael leads our sales team with a focus on building lasting client relationships.</p>
                    <div class="flex space-x-3">
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Team Member 4 -->
            <div class="team-card bg-white/10 rounded-lg overflow-hidden transition-all duration-300">
                <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Emily Wilson" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-1">Emily Wilson</h3>
                    <p class="text-gray-300 mb-4">Service Director</p>
                    <p class="text-gray-200 mb-4">Emily oversees our service department, maintaining our reputation for technical excellence.</p>
                    <div class="flex space-x-3">
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <button class="px-8 py-3 bg-secondary text-white font-medium rounded-full hover:bg-opacity-90 transition-all">
                View Full Team
            </button>
        </div>
    </div>
</section>

<!-- Dealership Showcase -->
<section class="py-20 bg-light">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-serif font-bold mb-4">Our Flagship Showroom</h2>
            <p class="max-w-2xl mx-auto text-accent">Experience luxury at our Beverly Hills headquarters</p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <div class="space-y-6">
                <p class="text-accent">Our 50,000 square foot Beverly Hills showroom redefines the luxury automotive experience. Designed by award-winning architect Daniel Libeskind, the space combines cutting-edge design with timeless elegance.</p>
                <p class="text-accent">Features include:</p>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>Climate-controlled display galleries</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>Private client lounges with concierge service</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>On-site detailing center with viewing gallery</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>Members-only rooftop terrace</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-secondary mr-2 mt-1"></i>
                        <span>State-of-the-art service bays</span>
                    </li>
                </ul>
                <button class="px-6 py-3 bg-primary text-white font-medium rounded-full hover:bg-opacity-90 transition-all mt-6">
                    Schedule a Visit
                </button>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Showroom interior" class="rounded-lg shadow-md w-full h-64 object-cover">
                <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Client lounge" class="rounded-lg shadow-md w-full h-64 object-cover">
                <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Showroom exterior" class="rounded-lg shadow-md w-full h-64 object-cover">
                <img src="https://images.unsplash.com/photo-1493238792000-8113da705763?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Service center" class="rounded-lg shadow-md w-full h-64 object-cover">
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6">Experience the Elite Difference</h2>
        <p class="text-xl max-w-2xl mx-auto mb-10 text-accent">Discover why discerning clients choose Elite Motors for their luxury automotive needs.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <button class="px-8 py-3 bg-secondary text-white font-medium rounded-full hover:bg-opacity-90 transition-all">
                Contact Our Team
            </button>
            <button class="px-8 py-3 bg-transparent border-2 border-primary text-primary font-medium rounded-full hover:bg-primary hover:text-white transition-all">
                Visit Our Showroom
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
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">New Vehicles</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Pre-Owned</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Financing</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Trade-In</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Maintenance</a></li>
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