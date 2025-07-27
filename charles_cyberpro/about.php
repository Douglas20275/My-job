<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Charlesabi Enterprises</title>
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
                        inter: ['Inter', 'sans-serif'], // Modern sans-serif for body
                        playfair: ['Playfair Display', 'serif'], // Elegant serif for headings
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        /* Base styles and animations for a smooth user experience */
        body {
            font-family: 'Inter', sans-serif;
            opacity: 0; /* Initial state for fade-in effect on page load */
            transition: opacity 1s ease-out; /* Smoother transition for page load */
            background-color: var(--tw-colors-backgroundLight); /* Global background color from Tailwind config */
            background-image: url('data:image/svg+xml,%3Csvg width="6" height="6" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%23E0E0E0" fill-opacity="0.05" fill-rule="evenodd"%3E%3Cpath d="M5 0h1L0 6V5zM6 5v1H5z"/%3E%3C/g%3E%3C/svg%3E'); /* Keeping SVG pattern for modernity */
            background-repeat: repeat;
            background-attachment: fixed; /* Creates a subtle parallax effect for the pattern */
        }
        body.loaded {
            opacity: 1; /* Final state after page content is loaded */
        }
        h1, h2, h3, h4, h5 {
            font-family: 'Playfair Display', serif; /* Elegant font for all headings */
            font-weight: 700; /* Ensures Playfair Display is bold and impactful */
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
        }

        /* Hero Section for About Page - distinct background and content */
        .about-hero-section {
            min-height: 50vh; /* Shorter hero for sub-pages */
            padding-top: 80px; /* Accounts for fixed header height */
            background-image: url('IMAGES/Two.jfif'); /* Specific image for About page */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3); /* Subtle text shadow for readability */
        }
        .about-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(15, 44, 89, 0.7); /* Overlay for readability */
            z-index: 1;
        }
        .about-hero-content {
            position: relative;
            z-index: 2;
            max-width: 900px;
            padding: 2rem;
        }

        /* Section Backgrounds with Parallax and Overlays for visual depth */
        .bg-section-parallax-1 {
            background-image: url('IMAGES/Four.jfif'); /* Local image for Teamwork Collaboration */
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
            background-color: rgba(251, 251, 251, 0.9); /* backgroundLight overlay */
            z-index: -1;
        }

        .bg-section-parallax-2 {
            background-image: url('IMAGES/Charles.jfif'); /* Local image for Creative Printing Process */
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
            background-color: rgba(232, 235, 242, 0.9); /* sectionAlt overlay */
            z-index: -1;
        }

        .bg-call-to-action {
            background-image: url('IMAGES/CALL.png'); /* Local image for Call to Action Background */
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
            background-color: rgba(15, 44, 89, 0.85); /* Primary color overlay */
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
        });
    </script>
</head>
<body class="bg-backgroundLight text-textDark">

    <header class="header-gradient shadow-lg fixed w-full z-50 text-white">
        <div class="container mx-auto flex justify-between items-center p-4 md:p-6">
            <h1 class="text-2xl md:text-3xl font-bold font-playfair">Charlesabi Enterprises</h1>
            <nav class="hidden md:flex space-x-8 text-base font-medium">
                <a href="index.php" class="block px-4 py-2 hover:bg-accent hover:text-primary transition duration-300 rounded-md">Home</a>
                <a href="about.php" class="block px-4 py-2 bg-accent text-primary rounded-md">About</a> <a href="services.php" class="block px-4 py-2 hover:bg-accent hover:text-primary transition duration-300 rounded-md">Services</a>
                <a href="products.php" class="block px-4 py-2 hover:bg-accent hover:text-primary transition duration-300 rounded-md">Price List</a>
                <a href="contact.php" class="block px-4 py-2 hover:bg-accent hover:text-primary transition duration-300 rounded-md">Contact</a>
                <a href="contact.php" class="block px-4 py-2 hover:bg-white hover:text-accent transition duration-300 rounded-full border border-white">Get Quote</a>
            </nav>
            <button id="mobile-menu-button" class="md:hidden text-white text-3xl focus:outline-none">
                &#9776; </button>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-primary text-white py-2">
            <a href="index.php" class="block hover:bg-accent hover:text-primary transition duration-300">Home</a>
            <a href="about.php" class="block active-link">About</a> <a href="services.php" class="block hover:bg-accent hover:text-primary transition duration-300">Services</a>
            <a href="products.php" class="block hover:bg-accent hover:text-primary transition duration-300">Price List</a>
            <a href="contact.php" class="block hover:bg-accent hover:text-primary transition duration-300">Contact</a>
            <a href="contact.php" class="block get-quote-mobile hover:text-white transition duration-300">Get Quote</a>
        </div>
    </header>

    <section id="top" class="about-hero-section">
        <div class="about-hero-content animate-fade-in">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-playfair font-bold mb-6 leading-tight">
                Our Story: Innovation, Integrity, Impact.
            </h2>
            <p class="text-lg md:text-xl opacity-90">
                Discover the journey of Charlesabi Enterprises, from a visionary idea to a trusted partner empowering businesses and individuals across Kenya.
            </p>
        </div>
    </section>

    <section id="our-story" class="py-16 md:py-24 bg-backgroundLight text-textDark">
        <div class="container mx-auto px-4 bg-cardBg p-8 rounded-xl shadow-lg fade-in-on-scroll">
            <h2 class="text-4xl md:text-5xl font-playfair font-bold mb-12 text-center text-primary">Our Journey of Growth and Dedication</h2>
            <div class="max-w-4xl mx-auto text-lg text-gray-700 leading-relaxed space-y-6">
                <p>
                    Charlesabi Enterprises began with a simple yet powerful vision: to bridge the digital divide and make essential business and digital services accessible to every individual and business in Kenya. What started as a humble cyber café, providing internet access and basic printing, quickly evolved in response to the growing needs of our community.
                </p>
                <p>
                    Over the years, we've expanded our offerings to become a comprehensive hub for innovative digital solutions, high-quality printing, and expert business and tax advisory services. Our journey has been one of continuous learning and adaptation, always driven by the desire to empower our clients and contribute to their success.
                </p>
                <p>
                    Today, Charlesabi Enterprises stands as a testament to dedication and growth. We are proud to be a trusted partner, offering reliable, affordable, and professional services that simplify complex processes and help our clients thrive in an ever-evolving landscape. We believe in building lasting relationships based on trust, transparency, and a shared commitment to excellence.
                </p>
            </div>
        </div>
    </section>

    <section id="meet-our-founder" class="py-16 md:py-24 bg-sectionAlt text-textDark bg-section-parallax-1">
        <div class="container mx-auto px-4 bg-cardBg p-8 rounded-xl shadow-lg flex flex-col md:flex-row items-center justify-center gap-12 fade-in-on-scroll">
            <div class="md:w-1/3 flex justify-center">
                <img src="IMAGES/Charles.jfif"
                    alt="Founder's Photo - Charles Ochieng"
                    class="w-64 h-64 md:w-80 md:h-80 rounded-full object-cover shadow-xl border-4 border-accent transition-all duration-500 hover:scale-105 hover:border-primary"
                    onerror="this.onerror=null;this.src='https://placehold.co/320x320/FF8C42/FFFFFF?text=Charles+Ochieng';">
            </div>
            <div class="md:w-2/3 text-center md:text-left">
                <h2 class="text-4xl md:text-5xl font-playfair font-bold mb-6 text-primary">Meet Our Visionary Founder, Charles Ochieng</h2>
                <p class="text-lg text-gray-700 leading-relaxed mb-8">
                    Charles Ochieng founded Charlesabi Enterprises with a profound vision: to make essential business and digital services truly accessible and impactful for everyone in Kenya. What began as a humble cyber café has blossomed into a comprehensive hub, meticulously built on a passion for empowering individuals and businesses through reliable, affordable, and professional solutions. His unwavering commitment to integrity, excellence, and a deep customer focus remains the guiding force behind every aspect of our operations.
                </p>
                <p class="text-md text-gray-600 italic">
                    "Our goal has always been to be more than just a service provider; we aim to be a true partner in your success, fostering growth and simplifying complexities."
                </p>
            </div>
        </div>
    </section>

    <section id="vision-mission" class="py-16 md:py-24 bg-backgroundLight text-textDark">
        <div class="container mx-auto px-4 bg-cardBg p-8 rounded-xl shadow-lg fade-in-on-scroll">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="fade-in-on-scroll">
                    <h3 class="text-3xl md:text-4xl font-playfair font-bold mb-6 text-primary text-center md:text-left">Our Vision</h3>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        To be the leading and most trusted provider of integrated digital, printing, and business advisory services in Kenya, empowering individuals and enterprises to achieve their full potential through innovation and unwavering support. We envision a future where every client can navigate the digital and business landscape with confidence and ease.
                    </p>
                </div>
                <div class="fade-in-on-scroll">
                    <h3 class="text-3xl md:text-4xl font-playfair font-bold mb-6 text-primary text-center md:text-left">Our Mission</h3>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        To provide accessible, high-quality, and efficient cyber cafe, printing, and professional business compliance solutions, fostering growth and simplifying operations for our diverse client base with integrity and excellence. We are committed to delivering tangible value and building lasting partnerships.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="our-values" class="py-16 md:py-24 bg-sectionAlt text-textDark bg-section-parallax-2">
        <div class="container mx-auto px-4 bg-cardBg p-8 rounded-xl shadow-lg fade-in-on-scroll">
            <h2 class="text-4xl md:text-5xl font-playfair font-bold mb-12 text-center text-primary">Our Core Values: Pillars of Our Promise</h2>
            <p class="text-lg text-gray-700 leading-relaxed text-center max-w-4xl mx-auto mb-16">
                These principles guide every interaction and decision we make, ensuring we deliver on our promises and exceed your expectations.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <div class="bg-cardBg p-6 rounded-lg shadow-md text-center card-hover border border-subtleBorder fade-in-on-scroll">
                    <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center rounded-full bg-accent text-white shadow-inner">
                        <i data-lucide="award" class="w-12 h-12"></i>
                    </div>
                    <h5 class="font-semibold text-xl text-primary mb-2">Integrity</h5>
                    <p class="text-gray-600">Operating with unwavering honesty, transparency, and the highest moral principles in all our dealings.</p>
                </div>
                <div class="bg-cardBg p-6 rounded-lg shadow-md text-center card-hover border border-subtleBorder fade-in-on-scroll">
                    <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center rounded-full bg-primary text-white shadow-inner">
                        <i data-lucide="sparkles" class="w-12 h-12"></i>
                    </div>
                    <h5 class="font-semibold text-xl text-primary mb-2">Excellence</h5>
                    <p class="text-gray-600">Consistently striving for superior quality in every service we provide, meticulously exceeding expectations.</p>
                </div>
                <div class="bg-cardBg p-6 rounded-lg shadow-md text-center card-hover border border-subtleBorder fade-in-on-scroll">
                    <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center rounded-full bg-accent text-white shadow-inner">
                        <i data-lucide="users" class="w-12 h-12"></i>
                    </div>
                    <h5 class="font-semibold text-xl text-primary mb-2">Customer Focus</h5>
                    <p class="text-gray-600">Prioritizing our clients' unique needs, offering personalized solutions and unparalleled support at every step.</p>
                </div>
                <div class="bg-cardBg p-6 rounded-lg shadow-md text-center card-hover border border-subtleBorder fade-in-on-scroll">
                    <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center rounded-full bg-primary text-white shadow-inner">
                        <i data-lucide="handshake" class="w-12 h-12"></i>
                    </div>
                    <h5 class="font-semibold text-xl text-primary mb-2">Teamwork</h5>
                    <p class="text-gray-600">Fostering a collaborative environment where collective effort and mutual support lead to superior outcomes for all.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-call-to-action text-white py-16 md:py-20 text-center">
        <div class="container mx-auto px-4 relative z-10 fade-in-on-scroll">
            <h3 class="text-3xl md:text-4xl font-playfair font-bold mb-6">Ready to Experience the Charlesabi Difference?</h3>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto opacity-90">
                Partner with us for reliable digital solutions, expert business advisory, and quality printing services. Let's achieve your goals together.
            </p>
            <a href="contact.php" class="inline-block bg-accent text-primary px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-accent transition duration-300 shadow-lg btn-primary-hover">
                Contact Us Today
            </a>
        </div>
    </section>

    <footer class="bg-primary text-white py-12">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
            <div>
                <h4 class="text-2xl font-playfair font-bold mb-4">Charlesabi Enterprises</h4>
                <p class="text-sm opacity-80 leading-relaxed">
                    Professional business, IT, and advisory services for individuals and businesses across Kenya. Licensed & Certified.
                </p>
            </div>

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
        <div class="container mx-auto px-4 mt-8 pt-8 border-t border-subtleBorder border-opacity-20 text-center text-sm opacity-70">
            &copy; 2025 Charlesabi Enterprises. All Rights Reserved.
        </div>
    </footer>

    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="fixed bottom-6 right-6 bg-accent text-white p-3 rounded-full shadow-lg hover:bg-primary transition duration-300 z-50 text-xl font-bold">
        ↑
    </button>

</body>
</html>