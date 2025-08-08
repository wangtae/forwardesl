<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title', 'Forward ESL - English education. Reimagined.'); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo e(asset('images/favicon.png')); ?>">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom Animations -->
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        @keyframes pulse-slow {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.8; transform: scale(1.05); }
        }
        
        @keyframes slideInFromLeft {
            0% { transform: translateX(-100%); opacity: 0; }
            100% { transform: translateX(0); opacity: 1; }
        }
        
        @keyframes slideInFromRight {
            0% { transform: translateX(100%); opacity: 0; }
            100% { transform: translateX(0); opacity: 1; }
        }
        
        @keyframes fadeInUp {
            0% { transform: translateY(30px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }
        
        @keyframes scaleIn {
            0% { transform: scale(0.8); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
        
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            25% { transform: translateY(-10px); }
            50% { transform: translateY(0); }
            75% { transform: translateY(-5px); }
        }
        
        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        @keyframes wave {
            0%, 100% { transform: rotate(0deg); }
            10%, 30%, 50%, 70%, 90% { transform: rotate(-10deg); }
            20%, 40%, 60%, 80% { transform: rotate(10deg); }
        }
        
        .animate-float { animation: float 3s ease-in-out infinite; }
        .animate-pulse-slow { animation: pulse-slow 2s ease-in-out infinite; }
        .animate-bounce { animation: bounce 2s ease-in-out infinite; }
        .animate-wave { animation: wave 2s ease-in-out infinite; }
        .animate-slide-left { animation: slideInFromLeft 0.8s ease-out; }
        .animate-slide-right { animation: slideInFromRight 0.8s ease-out; }
        .animate-fade-up { animation: fadeInUp 0.8s ease-out; }
        .animate-scale-in { animation: scaleIn 0.5s ease-out; }
        
        /* Hover Effects */
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        
        .hover-lift-lg {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .hover-lift-lg:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }
        
        .hover-rotate {
            transition: transform 0.3s ease;
        }
        .hover-rotate:hover {
            transform: rotate(5deg) scale(1.1);
        }
        
        .hover-glow {
            transition: all 0.3s ease;
        }
        .hover-glow:hover {
            box-shadow: 0 0 20px rgba(236, 90, 44, 0.5);
        }
        
        /* Gradient Animations */
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .gradient-animate {
            background-size: 200% 200%;
            animation: gradientShift 5s ease infinite;
        }
        
        /* Loading Animation */
        .loader {
            border: 3px solid #f3f3f3;
            border-top: 3px solid #EC5A2C;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Text Animations */
        .text-shadow-lg {
            text-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
        
        /* Parallax Effect */
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="font-sans antialiased bg-white">
    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="<?php echo e(url('/')); ?>" class="flex items-center">
                        <img src="<?php echo e(asset('images/logos/main-logo.png')); ?>" alt="Forward ESL" class="h-14 w-auto">
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex lg:items-center lg:space-x-8">
                    <a href="<?php echo e(url('/sign-up')); ?>" class="text-forward-dark hover:text-forward-orange transition-colors font-medium">Sign Up</a>
                    <a href="<?php echo e(url('/about-us')); ?>" class="text-forward-dark hover:text-forward-orange transition-colors font-medium">About Us</a>
                    <a href="<?php echo e(url('/curriculum')); ?>" class="text-forward-dark hover:text-forward-orange transition-colors font-medium">Curriculum</a>
                    <a href="<?php echo e(url('/pricing')); ?>" class="text-forward-dark hover:text-forward-orange transition-colors font-medium">Pricing</a>
                    <a href="<?php echo e(url('/children')); ?>" class="text-forward-dark hover:text-forward-orange transition-colors font-medium">Children</a>
                    <a href="<?php echo e(url('/corporate-training')); ?>" class="text-forward-dark hover:text-forward-orange transition-colors font-medium">Corporate Training</a>
                    <a href="<?php echo e(url('/careers')); ?>" class="text-forward-dark hover:text-forward-orange transition-colors font-medium">Careers</a>
                    <a href="<?php echo e(url('/contact-us')); ?>" class="text-forward-dark hover:text-forward-orange transition-colors font-medium">Contact Us</a>
                </div>

                <!-- CTA Button -->
                <div class="hidden lg:block">
                    <a href="<?php echo e(url('/sign-up')); ?>" class="bg-forward-orange hover:bg-orange-600 text-white font-semibold px-6 py-3 rounded-full transition-all duration-300">
                        Get Started
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="lg:hidden">
                    <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-forward-dark hover:text-forward-orange hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-forward-orange">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden lg:hidden pb-4">
                <div class="space-y-1">
                    <a href="<?php echo e(url('/sign-up')); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-forward-dark hover:text-forward-orange hover:bg-gray-50">Sign Up</a>
                    <a href="<?php echo e(url('/about-us')); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-forward-dark hover:text-forward-orange hover:bg-gray-50">About Us</a>
                    <a href="<?php echo e(url('/curriculum')); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-forward-dark hover:text-forward-orange hover:bg-gray-50">Curriculum</a>
                    <a href="<?php echo e(url('/pricing')); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-forward-dark hover:text-forward-orange hover:bg-gray-50">Pricing</a>
                    <a href="<?php echo e(url('/children')); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-forward-dark hover:text-forward-orange hover:bg-gray-50">Children</a>
                    <a href="<?php echo e(url('/corporate-training')); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-forward-dark hover:text-forward-orange hover:bg-gray-50">Corporate Training</a>
                    <a href="<?php echo e(url('/careers')); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-forward-dark hover:text-forward-orange hover:bg-gray-50">Careers</a>
                    <a href="<?php echo e(url('/contact-us')); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-forward-dark hover:text-forward-orange hover:bg-gray-50">Contact Us</a>
                    <div class="pt-4">
                        <a href="<?php echo e(url('/sign-up')); ?>" class="block w-full text-center bg-forward-orange hover:bg-orange-600 text-white font-semibold px-6 py-3 rounded-full">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <footer class="bg-forward-dark text-white">
        <div class="container max-w-7xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="lg:col-span-2">
                    <img src="<?php echo e(asset('images/logos/main-logo.png')); ?>" alt="Forward ESL" class="h-12 w-auto mb-4 brightness-0 invert">
                    <p class="text-gray-300 mb-4">
                        Founded in 2010 in the United States, Forward ESL has been at the forefront of English language education for over a decade. 
                        With a global reach, we've had the privilege of working with students from diverse backgrounds and cultures around the world.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4 uppercase">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="<?php echo e(url('/sign-up')); ?>" class="text-gray-300 hover:text-forward-orange transition-colors">Sign Up</a></li>
                        <li><a href="<?php echo e(url('/programs')); ?>" class="text-gray-300 hover:text-forward-orange transition-colors">Courses</a></li>
                        <li><a href="<?php echo e(url('/pricing')); ?>" class="text-gray-300 hover:text-forward-orange transition-colors">Pricing</a></li>
                        <li><a href="<?php echo e(url('/corporate-training')); ?>" class="text-gray-300 hover:text-forward-orange transition-colors">Corporate Training</a></li>
                        <li><a href="<?php echo e(url('/careers')); ?>" class="text-gray-300 hover:text-forward-orange transition-colors">Career Opportunities</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4 uppercase">Contact Us</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mt-1 mr-2 text-forward-orange flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <a href="mailto:info@forwardesl.com" class="text-gray-300 hover:text-forward-orange transition-colors">info@forwardesl.com</a>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mt-1 mr-2 text-forward-orange flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <address class="text-gray-300 not-italic">
                                One Westbrook Corporate Center<br>
                                Chicago, Illinois 60154<br>
                                United States
                            </address>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="mt-8 pt-8 border-t border-gray-700 text-center">
                <p class="text-gray-400">Copyright Forward ESL <?php echo e(date('Y')); ?>. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>

    <!-- AOS Animation Library Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Initialize AOS -->
    <script>
        AOS.init({
            duration: 1000,
            easing: 'ease-out-cubic',
            once: false,
            mirror: true,
            anchorPlacement: 'top-bottom',
            offset: 100,
            delay: 0,
            startEvent: 'DOMContentLoaded'
        });
        
        // Add smooth scroll behavior
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Add parallax effect on scroll
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelectorAll('.parallax');
            parallax.forEach(element => {
                const speed = element.dataset.speed || 0.5;
                element.style.transform = `translateY(${scrolled * speed}px)`;
            });
            
            // Add header shrink on scroll
            const nav = document.querySelector('nav');
            if (scrolled > 50) {
                nav.classList.add('shadow-lg');
            } else {
                nav.classList.remove('shadow-lg');
            }
        });
        
        // Add intersection observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-up');
                }
            });
        }, observerOptions);
        
        document.querySelectorAll('.fade-in-observer').forEach(el => {
            observer.observe(el);
        });
    </script>
    
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH /home/wangt/projects/company/forwardesl/workspace/web/resources/views/layouts/app.blade.php ENDPATH**/ ?>