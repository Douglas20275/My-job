<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charlesabi Enterprises | Your Digital & Business Hub</title>
    <!-- Tailwind CSS CDN with custom colors -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0F2C59', // Deep, authoritative navy blue
                        accent: '#FF8C42',  // Bright, inviting orange for highlights
                        backgroundLight: '#FBFBFB', // Very soft, clean white background
                        textDark: '#333333', // Rich charcoal for body text
                        sectionAlt: '#E8EBF2', // A cool, light grey-blue for alternating sections
                        subtleBorder: '#E0E0E0', // For fine lines and borders
                        cardBg: '#FFFFFF', // Pure white for card backgrounds
                    },
                    fontFamily: {
                        // Updated fonts to Roboto and Montserrat
                        inter: ['Roboto', 'sans-serif'], // Roboto for body
                        playfair: ['Montserrat', 'sans-serif'], // Montserrat for headings
                    }
                }
            }
        }
    </script>
    <!-- Google Fonts - Roboto for body, Montserrat for headings -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    <!-- Lucide Icons CDN for modern, scalable SVG icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        /* Base styles and animations for a smooth user experience */
        body {
            font-family: 'Roboto', sans-serif; /* Changed to Roboto */
            opacity: 0; /* Initial state for fade-in effect on page load */
            transition: opacity 1s ease-out; /* Smoother transition for page load */
            background-color: var(--tw-colors-backgroundLight); /* Global background color from Tailwind config */
            background-image: url('IMAGES/Four.jfif'); /* Reverted to local image */
            background-repeat: repeat;
            background-attachment: fixed; /* Creates a subtle parallax effect for the pattern */
        }
        body.loaded {
            opacity: 1; /* Final state after page content is loaded */
        }
        h1, h2, h3, h4, h5 {
            font-family: 'Montserrat', sans-serif; /* Changed to Montserrat */
            font-weight: 700; /* Ensures Montserrat is bold and impactful */
        }
        html {
            scroll-behavior: smooth; /* Smooth scrolling for anchor links */
        }

        /* Card hover effect for interactive elements - refined for smoother feel */
        .card-hover {
            transition: transform 0.4s cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 0.4s cubic-bezier(0.25, 0.8, 0.25, 1); /* Smoother cubic-bezier for transition */
        }
        .card-hover:hover {
            transform: translateY(-12px); /* Slightly more pronounced lift */
            box-shadow: 0 15px 30px rgba(0,0,0,0.12); /* Softer, more diffused shadow on hover */
        }

        /* Button hover effects - added explicit transitions for background and color */
        .btn-primary-hover {
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out, transform 0.2s ease-out;
        }
        .btn-primary-hover:hover {
            transform: translateY(-2px); /* Slight lift on hover */
        }

        /* Keyframe for fade-in animation, applied to various elements on load */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in { animation: fadeIn 0.8s ease-out forwards; }
        
        /* Animation for elements appearing on scroll */
        .fade-in-on-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        .fade-in-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Header Gradient for a vibrant top bar */
        .header-gradient {
            background: linear-gradient(90deg, var(--tw-colors-primary) 0%, var(--tw-colors-accent) 100%);
            transition: background 0.3s ease-in-out, box-shadow 0.3s ease-in-out; /* Added transition for scroll effect */
        }

        /* Header Scroll Effect */
        header.scrolled {
            background: var(--tw-colors-primary); /* Solid primary color when scrolled */
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        /* Hero Section - Full-width, impactful design */
        .hero-section-full {
            min-height: 100vh; /* Takes full viewport height */
            padding-top: 80px; /* Accounts for fixed header height */
            background-image: url('IMAGES/Kenya.jfif'); /* Reverted to local image */
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Parallax effect for the hero image */
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white; /* White text for contrast against dark overlay */
        }
        .hero-section-full::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(15, 44, 89, 0.05); /* Very subtle dark overlay for text readability */
            z-index: 1;
        }
        .hero-content {
            position: relative;
            z-index: 2; /* Ensures content is above the overlay */
            max-width: 900px;
            padding: 2rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3); /* Subtle text shadow for readability */
        }
        /* Hero content animation on load */
        .hero-content .animate-fade-in {
            animation: fadeIn 1s ease-out forwards;
        }
        .hero-content .animate-fade-in:nth-child(2) {
            animation-delay: 0.3s;
        }
        .hero-content .animate-fade-in:nth-child(3) {
            animation-delay: 0.6s;
        }

        /* Section Backgrounds with Parallax and Overlays for visual depth */
        .bg-section-parallax-1 {
            background-image: url('IMAGES/one.jfif'); /* Reverted to local image */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
            z-index: 1;
        }
        .bg-section-parallax-1::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0,0,0,0); /* Fully transparent */
            z-index: -1;
        }

        .bg-section-parallax-2 {
            background-image: url('IMAGES/Three.jfif'); /* Reverted to local image */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
            z-index: 1;
        }
        .bg-section-parallax-2::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0,0,0,0); /* Fully transparent */
            z-index: -1;
        }

        .bg-call-to-action {
            background-image: url('IMAGES/CALL.png'); /* Reverted to local image */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
            z-index: 1;
        }
        .bg-call-to-action::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(15, 44, 89, 0.2); /* Reduced opacity for better image visibility */
            z-index: -1;
        }

        /* Mobile Menu Specific Styles */
        #mobile-menu {
            transition: max-height 0.5s ease-out, opacity 0.5s ease-out;
            max-height: 0;
            overflow: hidden;
            opacity: 0;
        }
        #mobile-menu.open {
            max-height: 300px; /* Adjust based on content height */
            opacity: 1;
        }
        #mobile-menu a {
            padding: 0.75rem 1rem; /* More generous padding for touch targets */
            margin: 0.5rem 1rem; /* Increased vertical spacing between links */
            border-radius: 0.5rem; /* Rounded corners for links */
            text-align: center;
            display: block;
        }
        #mobile-menu .active-link {
            background-color: var(--tw-colors-accent);
            color: var(--tw-colors-primary);
        }
        #mobile-menu .get-quote-mobile {
            background-color: var(--tw-colors-white);
            color: var(--tw-colors-accent);
            border: 1px solid var(--tw-colors-accent);
            margin-top: 1rem;
            font-weight: 600;
        }
        #mobile-menu .get-quote-mobile:hover {
            background-color: var(--tw-colors-accent);
            color: var(--tw-colors-white);
        }
    </style>
    <script>
        // JavaScript for fade-in effect on page load
        window.addEventListener("load", () => {
            document.body.classList.add("loaded");
            // Initialize Lucide icons after the page is loaded
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }

            // Intersection Observer for on-scroll animations
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                    } else {
                        // Optional: remove 'is-visible' if you want elements to animate again on scroll up
                        // entry.target.classList.remove('is-visible');
                    }
                });
            }, {
                threshold: 0.1, // Trigger when 10% of the element is visible
                rootMargin: '0px 0px -50px 0px' // Adjust when the animation triggers (e.g., 50px before it's fully in view)
            });

            document.querySelectorAll('.fade-in-on-scroll').forEach(element => {
                observer.observe(element);
            });

            // Mobile menu toggle functionality
            const mobileMenuButton = document.getElementById("mobile-menu-button");
            const mobileMenu = document.getElementById("mobile-menu");

            mobileMenuButton.addEventListener("click", () => {
                mobileMenu.classList.toggle("hidden");
                mobileMenu.classList.toggle("open"); // Toggle 'open' class for animation
            });

            // Header scroll effect: change background and shadow on scroll
            window.addEventListener("scroll", () => {
                const header = document.querySelector("header");
                if (window.scrollY > 50) { // After scrolling 50px
                    header.classList.add("scrolled");
                } else {
                    header.classList.remove("scrolled");
                }
            });
        });
    </script>
</head>
<body class="bg-backgroundLight text-textDark">

    <!-- Header - Fixed at top with brand colors -->
    <header class="header-gradient shadow-lg fixed w-full z-50 text-white">
        <div class="container mx-auto flex justify-between items-center p-4 md:p-6">
            <h1 class="text-2xl md:text-3xl font-bold font-playfair">Charlesabi Enterprises</h1>
            <nav class="hidden md:flex space-x-8 text-base font-medium">
                <a href="index.php" class="block px-4 py-2 bg-accent text-primary rounded-md">Home</a> <!-- Active link for this page -->
                <a href="about.php" class="block px-4 py-2 hover:bg-accent hover:text-primary transition duration-300 rounded-md">About</a>
                <a href="services.php" class="block px-4 py-2 hover:bg-accent hover:text-primary transition duration-300 rounded-md">Services</a>
                <a href="products.php" class="block px-4 py-2 hover:bg-accent hover:text-primary transition duration-300 rounded-md">Price List</a>
                <a href="contact.php" class="block px-4 py-2 hover:bg-accent hover:text-primary transition duration-300 rounded-md">Contact</a>
                <a href="contact.php" class="block px-4 py-2 hover:bg-white hover:text-accent transition duration-300 rounded-full border border-white">Get Quote</a>
            </nav>
            <!-- Mobile Menu Button - Hamburger icon for small screens -->
            <button id="mobile-menu-button" class="md:hidden text-white text-3xl focus:outline-none">
                &#9776; <!-- Hamburger icon -->
            </button>
        </div>
        <!-- Mobile Menu - Hidden by default, toggles on click -->
        <div id="mobile-menu" class="hidden md:hidden bg-primary text-white py-2">
            <a href="index.php" class="block active-link">Home</a> <!-- Active link for this page -->
            <a href="about.php" class="block hover:bg-accent hover:text-primary transition duration-300">About</a>
            <a href="services.php" class="block hover:bg-accent hover:text-primary transition duration-300">Services</a>
            <a href="products.php" class="block hover:bg-accent hover:text-primary transition duration-300">Price List</a>
            <a href="contact.php" class="block hover:bg-accent hover:text-primary transition duration-300">Contact</a>
            <a href="contact.php" class="block get-quote-mobile hover:text-white transition duration-300">Get Quote</a>
        </div>
    </header>

    <!-- Hero Section for Homepage -->
    <section id="home" class="hero-section-full">
        <div class="hero-content">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-playfair font-bold mb-6 leading-tight animate-fade-in">
                Welcome to Charlesabi Enterprises: Your Partner in Digital & Business Growth.
            </h2>
            <p class="text-lg md:text-xl mb-8 opacity-90 animate-fade-in">
                We're thrilled to have you here! Explore our innovative digital solutions, precision printing, and expert business advisory services designed to empower your success.
            </p>
            <a href="services.php" class="inline-block bg-accent text-primary px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-accent transition duration-300 shadow-lg btn-primary-hover animate-fade-in">
                Discover Our Comprehensive Services
            </a>
        </div>
    </section>

    <!-- Cyber Cafe & Digital Services Section - Prominent on Home Page -->
    <section id="cyber-cafe-services" class="py-16 md:py-24 text-textDark bg-section-parallax-1">
        <div class="w-full px-4 md:px-8 lg:px-16 py-8 bg-cardBg rounded-xl shadow-lg fade-in-on-scroll">
            <h2 class="text-4xl md:text-5xl font-playfair font-bold mb-12 text-center text-primary">Your Digital Hub: Cyber Cafe & Essential Services</h2>
            <p class="text-lg text-gray-700 leading-relaxed text-center max-w-4xl mx-auto mb-16">
                Experience seamless digital services and efficient document solutions right at your fingertips.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Service Card: High-Speed Internet Browsing -->
                <div class="bg-cardBg p-8 rounded-xl shadow-md text-center card-hover border border-subtleBorder fade-in-on-scroll">
                    <div class="w-24 h-24 mx-auto mb-6 flex items-center justify-center rounded-full bg-primary text-white shadow-inner">
                        <i data-lucide="globe" class="w-16 h-16"></i>
                    </div>
                    <h3 class="font-semibold text-2xl text-primary mb-3">High-Speed Internet Browsing</h3>
                    <p class="text-gray-700">Fast and reliable internet access for all your online needs, research, and communication.</p>
                </div>
                <!-- Service Card: Printing & Photocopying -->
                <div class="bg-cardBg p-8 rounded-xl shadow-md text-center card-hover border border-subtleBorder fade-in-on-scroll">
                    <div class="w-24 h-24 mx-auto mb-6 flex items-center justify-center rounded-full bg-accent text-white shadow-inner">
                        <i data-lucide="printer" class="w-16 h-16"></i>
                    </div>
                    <h3 class="font-semibold text-2xl text-primary mb-3">Printing & Photocopying</h3>
                    <p class="text-gray-700">High-quality color and black & white printing and photocopying services for documents of all sizes.</p>
                </div>
                <!-- Service Card: Scanning & Document Digitization -->
                <div class="bg-cardBg p-8 rounded-xl shadow-md text-center card-hover border border-subtleBorder fade-in-on-scroll">
                    <div class="w-24 h-24 mx-auto mb-6 flex items-center justify-center rounded-full bg-primary text-white shadow-inner">
                        <i data-lucide="scan" class="w-16 h-16"></i>
                    </div>
                    <h3 class="font-semibold text-2xl text-primary mb-3">Scanning & Document Digitization</h3>
                    <p class="text-gray-700">Convert your physical documents into digital files quickly and securely.</p>
                </div>
                <!-- Service Card: Lamination & Binding -->
                <div class="bg-cardBg p-8 rounded-xl shadow-md text-center card-hover border border-subtleBorder fade-in-on-scroll">
                    <div class="w-24 h-24 mx-auto mb-6 flex items-center justify-center rounded-full bg-accent text-white shadow-inner">
                        <i data-lucide="layers" class="w-16 h-16"></i>
                    </div>
                    <h3 class="font-semibold text-2xl text-primary mb-3">Lamination & Binding</h3>
                    <p class="text-gray-700">Protect and professionalize your documents with our lamination and binding services.</p>
                </div>
                <!-- Service Card: Passport & Visa Photo Services -->
                <div class="bg-cardBg p-8 rounded-xl shadow-md text-center card-hover border border-subtleBorder fade-in-on-scroll">
                    <div class="w-24 h-24 mx-auto mb-6 flex items-center justify-center rounded-full bg-primary text-white shadow-inner">
                        <i data-lucide="camera" class="w-16 h-16"></i>
                    </div>
                    <h3 class="font-semibold text-2xl text-primary mb-3">Passport & Visa Photos</h3>
                    <p class="text-gray-700">Instant, compliant passport and visa photos for all official requirements.</p>
                </div>
                <!-- Service Card: Computer & IT Support -->
                <div class="bg-cardBg p-8 rounded-xl shadow-md text-center card-hover border border-subtleBorder fade-in-on-scroll">
                    <div class="w-24 h-24 mx-auto mb-6 flex items-center justify-center rounded-full bg-accent text-white shadow-inner">
                        <i data-lucide="laptop" class="w-16 h-16"></i>
                    </div>
                    <h3 class="font-semibold text-2xl text-primary mb-3">Computer & IT Support</h3>
                    <p class="text-gray-700">Basic computer troubleshooting, software installation, and technical assistance.</p>
                </div>
            </div>

            <div class="text-center mt-12 fade-in-on-scroll">
                <a href="services.php#cyber" class="inline-block bg-primary text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-accent transition duration-300 shadow-lg btn-primary-hover">
                    View All Cyber Cafe Services
                </a>
            </div>
        </div>
    </section>

    <!-- Our Values Section - Concise and impactful on Home Page -->
    <section id="our-values" class="py-16 md:py-24 text-textDark bg-section-parallax-2">
        <div class="w-full px-4 md:px-8 lg:px-16 py-8 bg-cardBg rounded-xl shadow-lg fade-in-on-scroll">
            <h2 class="text-4xl md:text-5xl font-playfair font-bold mb-12 text-center text-primary">Our Core Values: Why Choose Charlesabi Enterprises</h2>
            <p class="text-lg text-gray-700 leading-relaxed text-center max-w-4xl mx-auto mb-16">
                These principles are the bedrock of our operations, guiding every decision and interaction, and ensuring we deliver on our promise of excellence and client satisfaction.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <!-- Value Card: Integrity -->
                <div class="bg-cardBg p-6 rounded-lg shadow-md text-center card-hover border border-subtleBorder fade-in-on-scroll">
                    <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center rounded-full bg-accent text-white shadow-inner">
                        <i data-lucide="award" class="w-12 h-12"></i>
                    </div>
                    <h5 class="font-semibold text-xl text-primary mb-2">Integrity</h5>
                    <p class="text-gray-600">We always uphold honesty and do what is right, even when no one is watching.</p>
                </div>
                <!-- Value Card: Innovation -->
                <div class="bg-cardBg p-6 rounded-lg shadow-md text-center card-hover border border-subtleBorder fade-in-on-scroll">
                    <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center rounded-full bg-primary text-white shadow-inner">
                        <i data-lucide="lightbulb" class="w-12 h-12"></i>
                    </div>
                    <h5 class="font-semibold text-xl text-primary mb-2">Innovation</h5>
                    <p class="text-gray-600">We embrace creativity and bring new ideas to life in our work.</p>
                </div>
                <!-- Value Card: Accountability -->
                <div class="bg-cardBg p-6 rounded-lg shadow-md text-center card-hover border border-subtleBorder fade-in-on-scroll">
                    <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center rounded-full bg-accent text-white shadow-inner">
                        <i data-lucide="clipboard-list" class="w-12 h-12"></i>
                    </div>
                    <h5 class="font-semibold text-xl text-primary mb-2">Accountability</h5>
                    <p class="text-gray-600">We take full responsibility: we own it, solve it, and deliver it.</p>
                </div>
                <!-- Value Card: Adaptability -->
                <div class="bg-cardBg p-6 rounded-lg shadow-md text-center card-hover border border-subtleBorder fade-in-on-scroll">
                    <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center rounded-full bg-primary text-white shadow-inner">
                        <i data-lucide="refresh-cw" class="w-12 h-12"></i>
                    </div>
                    <h5 class="font-semibold text-xl text-primary mb-2">Adaptability</h5>
                    <p class="text-gray-600">We stay open-minded and flexible in a changing world.</p>
                </div>
            </div>

            <div class="text-center fade-in-on-scroll">
                <a href="about.php" class="inline-block bg-primary text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-accent transition duration-300 shadow-lg btn-primary-hover">
                    Learn More About Us
                </a>
            </div>
        </div>
    </section>

    <!-- Specialized Business & Compliance Services Section -->
    <section id="business-services" class="py-16 md:py-24 text-textDark bg-section-parallax-1">
        <div class="w-full px-4 md:px-8 lg:px-16 py-8 bg-cardBg rounded-xl shadow-lg fade-in-on-scroll">
            <h2 class="text-4xl md:text-5xl font-playfair font-bold mb-12 text-center text-primary">Specialized Business & Compliance Services</h2>
            <p class="text-lg text-gray-700 leading-relaxed text-center max-w-4xl mx-auto mb-16">
                Beyond digital, we offer expert advisory and compliance services to streamline your business operations.
            </p>
            
            <!-- Business & Tax Services Card -->
            <div class="mb-16 bg-cardBg p-8 rounded-xl shadow-lg border border-subtleBorder flex flex-col md:flex-row items-center justify-center gap-8 fade-in-on-scroll">
                <div class="md:w-full text-center">
                    <h3 class="text-3xl md:text-4xl font-playfair font-bold mb-8 text-primary">Certified Public Accountants & Cyber Services</h3>
                    <p class="text-lg text-gray-700 leading-relaxed mb-8">
                        Our team of certified public accountants and cyber experts offers unparalleled business and tax advisory services. We navigate the complexities of KRA, eCitizen, and other compliance requirements, ensuring your business stays compliant and thrives.
                    </p>
                    <a href="services.php#business" class="inline-block bg-primary text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-accent transition duration-300 shadow-lg btn-primary-hover">
                        View Business Details
                    </a>
                </div>
            </div>

            <div class="text-center fade-in-on-scroll">
                <a href="services.php" class="inline-block bg-primary text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-accent transition duration-300 shadow-lg btn-primary-hover">
                    View All Services
                </a>
            </div>
        </div>
    </section>

    <!-- Our Featured Products Section -->
    <section id="featured-products" class="py-16 md:py-24 text-textDark bg-section-parallax-2">
        <div class="w-full px-4 md:px-8 lg:px-16 py-8 bg-cardBg rounded-xl shadow-lg fade-in-on-scroll">
            <h2 class="text-4xl md:text-5xl font-playfair font-bold mb-12 text-center text-primary">Our Featured Products</h2>
            <p class="text-lg text-gray-700 leading-relaxed text-center max-w-4xl mx-auto mb-16">
                Explore a selection of our top-quality products designed to meet your diverse needs.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Product Card 1 -->
                <div class="bg-cardBg p-6 rounded-lg shadow-md text-center card-hover border border-subtleBorder fade-in-on-scroll">
                    <img src="https://placehold.co/400x300/0F2C59/FFFFFF?text=Premium+Paper" alt="Premium Printing Paper" class="w-full h-48 object-cover rounded-md mb-6 shadow-sm">
                    <h3 class="font-semibold text-2xl text-primary mb-3">Premium Printing Paper</h3>
                    <p class="text-gray-700 mb-4">High-quality, bright white paper for all your printing needs. Available in various sizes.</p>
                    <a href="products.php#paper" class="inline-block bg-accent text-primary px-6 py-3 rounded-full font-semibold text-md hover:bg-primary hover:text-white transition duration-300 btn-primary-hover">
                        View Details
                    </a>
                </div>
                <!-- Product Card 2 -->
                <div class="bg-cardBg p-6 rounded-lg shadow-md text-center card-hover border border-subtleBorder fade-in-on-scroll">
                    <img src="https://placehold.co/400x300/FF8C42/0F2C59?text=High-Speed+SSD" alt="High-Speed External SSD" class="w-full h-48 object-cover rounded-md mb-6 shadow-sm">
                    <h3 class="font-semibold text-2xl text-primary mb-3">High-Speed External SSD</h3>
                    <p class="text-gray-700 mb-4">Ultra-fast and portable storage for your important files and backups.</p>
                    <a href="products.php#ssd" class="inline-block bg-accent text-primary px-6 py-3 rounded-full font-semibold text-md hover:bg-primary hover:text-white transition duration-300 btn-primary-hover">
                        View Details
                    </a>
                </div>
                <!-- Product Card 3 -->
                <div class="bg-cardBg p-6 rounded-lg shadow-md text-center card-hover border border-subtleBorder fade-in-on-scroll">
                    <img src="https://placehold.co/400x300/0F2C59/FFFFFF?text=Business+Software" alt="Business Accounting Software" class="w-full h-48 object-cover rounded-md mb-6 shadow-sm">
                    <h3 class="font-semibold text-2xl text-primary mb-3">Business Accounting Software</h3>
                    <p class="text-gray-700 mb-4">Simplify your finances with our intuitive and comprehensive accounting solution.</p>
                    <a href="products.php#software" class="inline-block bg-accent text-primary px-6 py-3 rounded-full font-semibold text-md hover:bg-primary hover:text-white transition duration-300 btn-primary-hover">
                        View Details
                    </a>
                </div>
            </div>

            <div class="text-center mt-12 fade-in-on-scroll">
                <a href="products.php" class="inline-block bg-primary text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-accent transition duration-300 shadow-lg btn-primary-hover">
                    View All Products & Pricing
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action Section - Impactful and direct -->
    <section class="bg-call-to-action text-white py-16 md:py-20 text-center">
        <div class="container mx-auto px-4 relative z-10 fade-in-on-scroll">
            <h3 class="text-3xl md:text-4xl font-playfair font-bold mb-6">Ready to Streamline Your Operations?</h3>
            <p class="text-lg md:text-xl mb-8 opacity-90">
                Let Charlesabi Enterprises handle your business, printing, and compliance needs with expertise and efficiency.
            </p>
            <a href="contact.php" class="inline-block bg-accent text-primary px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-accent transition duration-300 shadow-lg btn-primary-hover">
                Book a Free Consultation
            </a>
        </div>
    </section>

    <!-- Footer - Modern column arrangement -->
    <footer class="bg-primary text-white py-12">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
            <!-- Brand Info Column -->
            <div>
                <h4 class="text-2xl font-playfair font-bold mb-4">Charlesabi Enterprises</h4>
                <p class="text-sm opacity-80 leading-relaxed">
                    Professional business, IT, and advisory services for individuals and businesses across Kenya. Licensed & Certified.
                </p>
            </div>

            <!-- Quick Links Column -->
            <div>
                <h4 class="text-xl font-playfair font-bold mb-4">Quick Links</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="index.php" class="hover:text-accent transition duration-300">Home</a></li>
                    <li><a href="about.php" class="hover:text-accent transition duration-300">About Us</a></li>
                    <li><a href="services.php" class="hover:text-accent transition duration-300">Services</a></li>
                    <li><a href="products.php" class="hover:text-accent transition duration-300">Price List</a></li>
                    <li><a href="contact.php" class="hover:text-accent transition duration-300">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info Column (Simplified for Footer) -->
            <div>
                <h4 class="text-xl font-playfair font-bold mb-4">Visit Us</h4>
                <p class="text-sm opacity-80 leading-relaxed mb-2">
                    Nairobi, Kenya
                </p>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-center justify-center md:justify-start">
                        <i data-lucide="calendar" class="w-5 h-5 mr-2 text-accent"></i>
                        Mon - Fri: 8:00 AM - 6:00 PM
                    </li>
                    <li class="flex items-center justify-center md:justify-start">
                        <i data-lucide="calendar" class="w-5 h-5 mr-2 text-accent"></i>
                        Sat: 9:00 AM - 4:00 PM
                    </li>
                    <li class="flex items-center justify-center md:justify-start">
                        <i data-lucide="phone" class="w-5 h-5 mr-2 text-accent"></i>
                        <a href="tel:+2547XXXXXXXX" class="hover:text-accent transition duration-300">+254 7XX XXX XXXX</a>
                    </li>
                    <li class="flex items-center justify-center md:justify-start">
                        <i data-lucide="mail" class="w-5 h-5 mr-2 text-accent"></i>
                        <a href="mailto:info@charlesabienterprises.com" class="hover:text-accent transition duration-300">info@charlesabienterprises.com</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container mx-auto px-4 border-t border-subtleBorder border-opacity-20 pt-6 mt-8 text-center">
            <p class="text-sm opacity-70">&copy; 2025 Charlesabi Enterprises. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Scroll-to-top Button - Accessible and visible -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="fixed bottom-6 right-6 bg-accent text-white p-3 rounded-full shadow-lg hover:bg-primary transition duration-300 z-50 text-xl font-bold">
        ↑
    </button>

</body>
</html>
