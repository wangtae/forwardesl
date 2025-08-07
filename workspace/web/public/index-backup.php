<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forward ESL – English education. Reimagined.</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'forward-orange': '#f97316',
                        'forward-blue': '#1e3a8a',
                    },
                    animation: {
                        'fadeIn': 'fadeIn 0.8s ease-in-out',
                        'slideUp': 'slideUp 0.6s ease-out',
                        'slideLeft': 'slideLeft 0.6s ease-out',
                        'float': 'float 3s ease-in-out infinite',
                        'pulse-slow': 'pulse 2s infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        slideLeft: {
                            '0%': { opacity: '0', transform: 'translateX(50px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' }
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' }
                        }
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="font-sans">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm py-4 sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-gray-800">Forward ESL</a>
                </div>
                <div class="hidden lg:flex space-x-6">
                    <a href="sign-up.php" class="text-gray-700 hover:text-forward-orange transition">Sign Up</a>
                    <a href="#about" class="text-gray-700 hover:text-forward-orange transition">About Us</a>
                    <a href="#curriculum" class="text-gray-700 hover:text-forward-orange transition">Curriculum</a>
                    <a href="#pricing" class="text-gray-700 hover:text-forward-orange transition">Pricing</a>
                    <a href="#children" class="text-gray-700 hover:text-forward-orange transition">Children</a>
                    <a href="#corporate" class="text-gray-700 hover:text-forward-orange transition">Corporate Training</a>
                    <a href="#careers" class="text-gray-700 hover:text-forward-orange transition">Careers</a>
                    <a href="#contact" class="text-gray-700 hover:text-forward-orange transition">Contact Us</a>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="lg:hidden">
                        <i class="fas fa-search text-gray-700"></i>
                    </button>
                    <a href="sign-up.php" class="bg-forward-orange text-white px-6 py-2 rounded-lg hover:bg-orange-600 transition">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-forward-orange to-orange-400 text-white py-20">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between">
                <div class="lg:w-1/2">
                    <h2 class="text-4xl lg:text-6xl font-bold mb-6">
                        Native English teachers.<br>
                        US school curriculum.<br>
                        Affordable pricing.
                    </h2>
                    <a href="sign-up.php" class="inline-block bg-white text-forward-orange px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                        Get Started
                    </a>
                </div>
                <div class="hidden lg:block lg:w-1/2">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white/20 backdrop-blur-sm rounded-lg p-4 flex items-center justify-center h-32">
                            <i class="fas fa-chalkboard-teacher text-4xl"></i>
                        </div>
                        <div class="bg-white/20 backdrop-blur-sm rounded-lg p-4 flex items-center justify-center h-32">
                            <i class="fas fa-users text-4xl"></i>
                        </div>
                        <div class="bg-white/20 backdrop-blur-sm rounded-lg p-4 flex items-center justify-center h-32">
                            <i class="fas fa-graduation-cap text-4xl"></i>
                        </div>
                        <div class="bg-white/20 backdrop-blur-sm rounded-lg p-4 flex items-center justify-center h-32">
                            <i class="fas fa-globe text-4xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-forward-blue text-white py-12">
        <div class="container mx-auto px-4 text-center">
            <h4 class="text-2xl font-bold mb-4">Over 1,000,000 Satisfied Students!</h4>
            <p class="text-lg text-blue-100">
                We are the preferred partner of 150+ public sector organizations, 100+ academic institutions, 
                500+ corporations, and members of the Fortune Global 500.
            </p>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">ABOUT US</h1>
                <h2 class="text-3xl font-semibold text-gray-700 mb-8">Language learning made simple.</h2>
                <div class="max-w-4xl mx-auto space-y-6">
                    <p class="text-lg text-gray-600">
                        Get real results with live, personalized lessons from expert American English teachers.
                    </p>
                    <p class="text-lg text-gray-600">
                        Powered by trusted U.S. school curriculum and advanced AI, you'll gain the skills to succeed – 
                        at school, at work, and beyond – faster than ever before.
                    </p>
                    <p class="text-lg text-gray-600">
                        Join the thousands succeeding with us. Start learning online anytime, anywhere!
                    </p>
                </div>
                <a href="#" class="inline-block mt-8 bg-forward-orange text-white px-8 py-3 rounded-lg font-semibold hover:bg-orange-600 transition">
                    Get Started
                </a>
            </div>
        </div>
    </section>

    <!-- Curriculum Section -->
    <section id="curriculum" class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">CURRICULUM</h1>
                <h2 class="text-3xl font-semibold text-gray-700 mb-8">Language learning made simple.</h2>
                <div class="max-w-4xl mx-auto space-y-6 mb-8">
                    <p class="text-lg text-gray-600">
                        Take control of your learning with courses designed exclusively for American English fluency. 
                        Choose from a wide range of options, from phonics to advanced business communication, 
                        all taught by 100% native English speakers.
                    </p>
                    <p class="text-lg text-gray-600">
                        Expert-designed English courses that are fun, simple, and truly effective. 
                        Learn from your native language- anytime, anywhere, on any device.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#" class="bg-forward-orange text-white px-6 py-3 rounded-lg hover:bg-orange-600 transition">
                        Explore Adult's Courses
                    </a>
                    <a href="#" class="bg-forward-blue text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition">
                        Explore Children's Courses
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">PRICING</h1>
                <h2 class="text-3xl font-semibold text-gray-700 mb-8">Premium Learning. Exceptional Value.</h2>
                <div class="max-w-4xl mx-auto space-y-6">
                    <p class="text-lg text-gray-600">
                        For the price of a cup of coffee per day, you can gain the skills to unlock better jobs, 
                        higher education, and global success! With real native English-speaking teachers, 
                        a trusted US curriculum, and our cutting-edge AI-powered LMS, you'll get personalized learning 
                        in private or small group classes- ensuring faster progress and real results.
                    </p>
                    <p class="text-lg text-gray-600">
                        Invest in yourself, your child, or your team today and open the door to a world of possibilities!
                    </p>
                </div>
            </div>

            <!-- Group Classes -->
            <div class="mb-12">
                <p class="text-center text-gray-600 mb-8">All classes are 30 minutes long. Materials are bought separately.</p>
                <div class="grid md:grid-cols-3 gap-6">
                    <!-- Foundations -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Foundations</h3>
                        <div class="mb-6">
                            <span class="text-3xl font-bold text-gray-800">$97</span>
                            <span class="text-lg text-gray-500 line-through">$139.99</span>
                            <span class="text-sm text-gray-600 block">Monthly</span>
                        </div>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>2 live group classes per week</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Perfect for busy learners</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Best value for casual learners</span>
                            </li>
                        </ul>
                        <a href="#" class="block w-full bg-forward-orange text-white text-center py-3 rounded-lg hover:bg-orange-600 transition mb-3">
                            Book a Free Level Test
                        </a>
                        <p class="text-sm text-gray-500 text-center">No hidden fees. Cancel any time.</p>
                    </div>

                    <!-- Momentum -->
                    <div class="bg-white rounded-lg shadow-md p-6 relative">
                        <div class="absolute top-0 right-0 bg-green-500 text-white px-3 py-1 text-sm rounded-bl-lg">
                            Best value
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Momentum</h3>
                        <div class="mb-6">
                            <span class="text-3xl font-bold text-gray-800">$145</span>
                            <span class="text-lg text-gray-500 line-through">$207.99</span>
                            <span class="text-sm text-gray-600 block">Monthly</span>
                        </div>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>3 live group classes per week</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Perfect for learners with specific goals</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Balance of flexibility and consistency</span>
                            </li>
                        </ul>
                        <a href="#" class="block w-full bg-forward-orange text-white text-center py-3 rounded-lg hover:bg-orange-600 transition mb-3">
                            Book a Free Level Test
                        </a>
                        <p class="text-sm text-gray-500 text-center">No hidden fees. Cancel any time.</p>
                    </div>

                    <!-- Mastery -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Mastery</h3>
                        <div class="mb-6">
                            <span class="text-3xl font-bold text-gray-800">$242</span>
                            <span class="text-lg text-gray-500 line-through">$345.99</span>
                            <span class="text-sm text-gray-600 block">Monthly</span>
                        </div>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>5 live group classes per week</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Best for rapid progress and serious learners</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Daily English exposure</span>
                            </li>
                        </ul>
                        <a href="#" class="block w-full bg-forward-orange text-white text-center py-3 rounded-lg hover:bg-orange-600 transition mb-3">
                            Book a Free Level Test
                        </a>
                        <p class="text-sm text-gray-500 text-center">No hidden fees. Cancel any time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Children Section -->
    <section id="children" class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">CHILDREN</h1>
                <h2 class="text-3xl font-semibold text-gray-700 mb-8">Give Your Child the Gift of a Brighter Future.</h2>
                <div class="max-w-4xl mx-auto space-y-6">
                    <p class="text-lg text-gray-600">
                        Your child deserves to feel confident in English. Our fun, personalized classes with 
                        native-speaking teachers help kids grow their language skills- and their confidence.
                    </p>
                    <p class="text-lg text-gray-600">
                        In today's world, strong English skills open doors to top schools, global opportunities, 
                        and lifelong success. Our engaging, interactive program- taught by real native English teachers- 
                        helps children build confidence, master English naturally, and develop the skills they need to thrive.
                    </p>
                </div>
            </div>
            
            <!-- Testimonial -->
            <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8 text-center">
                <p class="text-lg text-gray-600 mb-4 italic">
                    "My 8-year-old loves these classes and speaks more confidently every week."
                </p>
                <div class="font-semibold text-gray-800">
                    <p>Gabriela</p>
                    <p class="text-sm text-gray-500">Guadalajara, Mexico</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4">Forward ESL</h3>
                    <p class="text-gray-300">
                        Founded in 2010 in the United States, Forward ESL has been at the forefront of English language 
                        education for over a decade. With a global reach, we've had the privilege of working with students 
                        from diverse backgrounds and cultures around the world.
                    </p>
                </div>
                
                <div>
                    <h5 class="text-lg font-semibold mb-4">QUICK LINKS</h5>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Sign Up</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Courses</a></li>
                        <li><a href="#pricing" class="text-gray-300 hover:text-white transition">Pricing</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Corporate Training</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Career Opportunities</a></li>
                    </ul>
                </div>
                
                <div>
                    <h5 class="text-lg font-semibold mb-4">Contact Us</h5>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3"></i>
                            <a href="mailto:info@forwardesl.com" class="text-gray-300 hover:text-white transition">
                                info@forwardesl.com
                            </a>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mr-3 mt-1"></i>
                            <div class="text-gray-300">
                                One Westbrook Corporate Center<br>
                                Chicago, Illinois 60154<br>
                                United States
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-300">Copyright Forward ESL 2025. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Floating Elements -->
    <div class="fixed bottom-6 right-6">
        <div class="flex items-center space-x-2 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='white'%3E%3Cpath d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z'/%3E%3C/svg%3E" 
                 alt="English" class="w-5 h-5">
            <span>English</span>
        </div>
    </div>

    <!-- Smooth scrolling script -->
    <script>
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
    </script>
</body>
</html>