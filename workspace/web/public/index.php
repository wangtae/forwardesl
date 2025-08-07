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
                        'bounce-slow': 'bounce 2s infinite',
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
    <style>
        /* Custom animations for enhanced effects */
        @keyframes wave {
            0%, 100% { transform: rotate(0deg); }
            25% { transform: rotate(20deg); }
            75% { transform: rotate(-10deg); }
        }
        
        .animate-wave {
            animation: wave 2s ease-in-out infinite;
            transform-origin: 70% 70%;
        }

        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .video-call-shadow {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body class="font-sans">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm py-4 sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a href="/" class="flex items-center">
                        <img src="images/logos/forward-esl-logo.png" alt="Forward ESL" class="h-12 w-auto">
                    </a>
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
    <section class="bg-gradient-to-r from-forward-orange to-orange-400 text-white py-20 relative overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between">
                <!-- Left side - Text content -->
                <div class="lg:w-1/2 animate-fadeIn">
                    <h2 class="text-4xl lg:text-6xl font-bold mb-6 leading-tight">
                        Native English teachers.<br>
                        US school curriculum.<br>
                        Affordable pricing.
                    </h2>
                    <a href="sign-up.php" class="inline-block bg-white text-forward-orange px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 animate-slideUp">
                        Get Started
                    </a>
                </div>
                
                <!-- Right side - Video call interface -->
                <div class="hidden lg:block lg:w-1/2 relative animate-slideLeft" 
                     x-data="{ currentSlide: 0, isVisible: false }" 
                     x-init="
                        setTimeout(() => isVisible = true, 500);
                        setInterval(() => { currentSlide = (currentSlide + 1) % 3 }, 4000)
                     ">
                    
                    <!-- Video Call Interface -->
                    <div class="relative bg-gray-900 rounded-xl p-4 video-call-shadow transform transition-all duration-500"
                         :class="isVisible ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                        
                        <!-- Main video grid -->
                        <div class="grid grid-cols-2 gap-3 mb-4">
                            <!-- Teacher -->
                            <div class="bg-gradient-to-br from-blue-100 to-blue-200 rounded-lg p-3 h-36 flex flex-col items-center justify-center relative overflow-hidden group">
                                <div class="absolute inset-0 bg-gradient-to-br from-blue-400/30 to-purple-400/30"></div>
                                <div class="relative z-10 text-center">
                                    <div class="w-14 h-14 bg-blue-500 rounded-full mx-auto mb-2 flex items-center justify-center transform group-hover:scale-110 transition-transform">
                                        <i class="fas fa-user-tie text-white text-lg"></i>
                                    </div>
                                    <p class="text-sm font-semibold text-gray-800">Sarah (Teacher)</p>
                                    <div class="flex items-center justify-center mt-1">
                                        <div class="animate-pulse-slow w-2 h-2 bg-green-500 rounded-full mr-1"></div>
                                        <span class="text-xs text-gray-600">Live</span>
                                    </div>
                                </div>
                                <!-- Waving hand animation -->
                                <div class="absolute top-2 right-2 animate-wave">
                                    <span class="text-2xl">👋</span>
                                </div>
                                <!-- Speech bubble -->
                                <div class="absolute -top-2 left-2 bg-white rounded-lg px-2 py-1 text-xs text-gray-800 opacity-0 group-hover:opacity-100 transition-opacity">
                                    "Hello everyone!"
                                </div>
                            </div>
                            
                            <!-- Student 1 -->
                            <div class="bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-lg p-3 h-36 flex flex-col items-center justify-center relative overflow-hidden group">
                                <div class="absolute inset-0 bg-gradient-to-br from-yellow-400/30 to-orange-400/30"></div>
                                <div class="relative z-10 text-center">
                                    <div class="w-14 h-14 bg-yellow-500 rounded-full mx-auto mb-2 flex items-center justify-center transform group-hover:scale-110 transition-transform">
                                        <i class="fas fa-user text-white text-lg"></i>
                                    </div>
                                    <p class="text-sm font-semibold text-gray-800">Maria</p>
                                    <div class="flex items-center justify-center mt-1">
                                        <div class="animate-pulse-slow w-2 h-2 bg-green-500 rounded-full mr-1"></div>
                                        <span class="text-xs text-gray-600">Mexico</span>
                                    </div>
                                </div>
                                <!-- Thumbs up animation -->
                                <div class="absolute top-2 right-2 animate-bounce-slow" style="animation-delay: 1s;">
                                    <span class="text-xl">👍</span>
                                </div>
                            </div>
                            
                            <!-- Student 2 -->
                            <div class="bg-gradient-to-br from-green-100 to-green-200 rounded-lg p-3 h-36 flex flex-col items-center justify-center relative overflow-hidden group">
                                <div class="absolute inset-0 bg-gradient-to-br from-green-400/30 to-teal-400/30"></div>
                                <div class="relative z-10 text-center">
                                    <div class="w-14 h-14 bg-green-500 rounded-full mx-auto mb-2 flex items-center justify-center transform group-hover:scale-110 transition-transform">
                                        <i class="fas fa-user text-white text-lg"></i>
                                    </div>
                                    <p class="text-sm font-semibold text-gray-800">Kenji</p>
                                    <div class="flex items-center justify-center mt-1">
                                        <div class="animate-pulse-slow w-2 h-2 bg-green-500 rounded-full mr-1"></div>
                                        <span class="text-xs text-gray-600">Japan</span>
                                    </div>
                                </div>
                                <!-- Smile animation -->
                                <div class="absolute top-2 right-2 animate-float" style="animation-delay: 2s;">
                                    <span class="text-xl">😊</span>
                                </div>
                            </div>
                            
                            <!-- Student 3 -->
                            <div class="bg-gradient-to-br from-purple-100 to-purple-200 rounded-lg p-3 h-36 flex flex-col items-center justify-center relative overflow-hidden group">
                                <div class="absolute inset-0 bg-gradient-to-br from-purple-400/30 to-pink-400/30"></div>
                                <div class="relative z-10 text-center">
                                    <div class="w-14 h-14 bg-purple-500 rounded-full mx-auto mb-2 flex items-center justify-center transform group-hover:scale-110 transition-transform">
                                        <i class="fas fa-user text-white text-lg"></i>
                                    </div>
                                    <p class="text-sm font-semibold text-gray-800">Sophie</p>
                                    <div class="flex items-center justify-center mt-1">
                                        <div class="animate-pulse-slow w-2 h-2 bg-green-500 rounded-full mr-1"></div>
                                        <span class="text-xs text-gray-600">France</span>
                                    </div>
                                </div>
                                <!-- Heart animation -->
                                <div class="absolute top-2 right-2 animate-pulse-slow" style="animation-delay: 0.5s;">
                                    <span class="text-xl">❤️</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Video Controls -->
                        <div class="flex items-center justify-center space-x-4 bg-gray-800 rounded-lg py-3 px-4">
                            <button class="text-white hover:text-green-400 transition-colors transform hover:scale-110">
                                <i class="fas fa-microphone text-lg"></i>
                            </button>
                            <button class="text-white hover:text-blue-400 transition-colors transform hover:scale-110">
                                <i class="fas fa-video text-lg"></i>
                            </button>
                            <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-all transform hover:scale-105">
                                <i class="fas fa-phone-slash"></i>
                            </button>
                            <button class="text-white hover:text-yellow-400 transition-colors transform hover:scale-110">
                                <i class="fas fa-share-screen text-lg"></i>
                            </button>
                            <button class="text-white hover:text-purple-400 transition-colors transform hover:scale-110">
                                <i class="fas fa-comments text-lg"></i>
                            </button>
                        </div>
                        
                        <!-- Live indicator -->
                        <div class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded-full flex items-center">
                            <div class="w-2 h-2 bg-white rounded-full mr-1 animate-pulse"></div>
                            LIVE CLASS
                        </div>
                    </div>
                    
                    <!-- Slide indicators -->
                    <div class="flex justify-center space-x-2 mt-6">
                        <template x-for="i in 3" :key="i">
                            <button 
                                class="w-3 h-3 rounded-full transition-all duration-300 transform hover:scale-125"
                                :class="currentSlide === (i-1) ? 'bg-white shadow-lg' : 'bg-white/50 hover:bg-white/70'"
                                @click="currentSlide = i-1">
                            </button>
                        </template>
                    </div>
                    
                    <!-- Floating chat messages -->
                    <div class="absolute -right-4 top-10 glass-effect rounded-lg p-2 text-sm animate-float" style="animation-delay: 3s;">
                        <div class="text-white">💬 "Great lesson!"</div>
                    </div>
                    <div class="absolute -right-8 bottom-20 glass-effect rounded-lg p-2 text-sm animate-float" style="animation-delay: 5s;">
                        <div class="text-white">⭐ "5 stars"</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Background floating elements -->
        <div class="absolute top-10 right-20 animate-float text-6xl opacity-10">
            <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="absolute bottom-20 left-20 animate-float text-4xl opacity-10" style="animation-delay: 1s;">
            <i class="fas fa-globe"></i>
        </div>
        <div class="absolute top-1/2 right-5 animate-float text-3xl opacity-10" style="animation-delay: 2s;">
            <i class="fas fa-book-open"></i>
        </div>
        
        <!-- Decorative shapes -->
        <div class="absolute top-0 left-0 w-32 h-32 bg-white/5 rounded-full -translate-x-16 -translate-y-16"></div>
        <div class="absolute bottom-0 right-0 w-48 h-48 bg-white/5 rounded-full translate-x-24 translate-y-24"></div>
    </section>

    <!-- Stats Section -->
    <section class="bg-forward-blue text-white py-12">
        <div class="container mx-auto px-4 text-center">
            <h4 class="text-2xl font-bold mb-4 animate-fadeIn">Over 1,000,000 Satisfied Students!</h4>
            <p class="text-lg text-blue-100 animate-slideUp">
                We are the preferred partner of 150+ public sector organizations, 100+ academic institutions, 
                500+ corporations, and members of the Fortune Global 500.
            </p>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h1 class="text-4xl font-bold text-gray-800 mb-4 animate-fadeIn">ABOUT US</h1>
                <h2 class="text-3xl font-semibold text-gray-700 mb-8 animate-slideUp">Language learning made simple.</h2>
                <div class="max-w-4xl mx-auto space-y-6 animate-slideUp">
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
                <a href="sign-up.php" class="inline-block mt-8 bg-forward-orange text-white px-8 py-3 rounded-lg font-semibold hover:bg-orange-600 transition-all duration-300 transform hover:scale-105 animate-fadeIn">
                    Get Started
                </a>
            </div>
            
            <!-- Certificates Section -->
            <div class="flex justify-center items-center gap-8 mt-16 opacity-70 animate-fadeIn">
                <img src="images/certificates/tesol.png" alt="TESOL Certified" class="h-16 w-auto object-contain hover:opacity-100 transition-opacity">
                <img src="images/certificates/cert1.png" alt="Certification" class="h-16 w-auto object-contain hover:opacity-100 transition-opacity">
            </div>
        </div>
    </section>

    <!-- Curriculum Section -->
    <section id="curriculum" class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h1 class="text-4xl font-bold text-gray-800 mb-4 animate-fadeIn">CURRICULUM</h1>
                <h2 class="text-3xl font-semibold text-gray-700 mb-8 animate-slideUp">Language learning made simple.</h2>
                <div class="max-w-4xl mx-auto space-y-6 mb-8 animate-slideUp">
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
                <div class="flex flex-col sm:flex-row gap-4 justify-center animate-slideUp">
                    <a href="#adult-courses" class="bg-forward-orange text-white px-6 py-3 rounded-lg hover:bg-orange-600 transition-all duration-300 transform hover:scale-105">
                        Explore Adult's Courses
                    </a>
                    <a href="#children-courses" class="bg-forward-blue text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition-all duration-300 transform hover:scale-105">
                        Explore Children's Courses
                    </a>
                </div>
            </div>

            <!-- Adult Courses Tab -->
            <div id="adult-courses" class="mb-16" x-data="{ activeTab: 'general' }">
                <h3 class="text-3xl font-bold text-center text-gray-800 mb-8 animate-fadeIn">ADULT'S CURRICULUM</h3>
                
                <!-- Tab Navigation -->
                <div class="flex flex-wrap justify-center gap-2 mb-8">
                    <button @click="activeTab = 'general'" 
                            :class="activeTab === 'general' ? 'bg-forward-orange text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'"
                            class="px-4 py-2 rounded-lg transition-all duration-300 transform hover:scale-105">
                        General English
                    </button>
                    <button @click="activeTab = 'business'" 
                            :class="activeTab === 'business' ? 'bg-forward-orange text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'"
                            class="px-4 py-2 rounded-lg transition-all duration-300 transform hover:scale-105">
                        Business English
                    </button>
                    <button @click="activeTab = 'grammar'" 
                            :class="activeTab === 'grammar' ? 'bg-forward-orange text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'"
                            class="px-4 py-2 rounded-lg transition-all duration-300 transform hover:scale-105">
                        Grammar
                    </button>
                </div>
                
                <!-- Tab Content -->
                <div class="bg-white rounded-lg shadow-lg p-6" x-show="activeTab === 'general'" x-transition>
                    <h4 class="text-2xl font-bold text-gray-800 mb-4">Side by Side & Future Series</h4>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h5 class="font-semibold text-lg mb-3">Course Features:</h5>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                                    <span>6 levels (CEFR A1 – B1+)</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                                    <span>100% American English</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                                    <span>Built-in self-assessment pages</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                                    <span>Digital amusement park (FunZone)</span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="font-semibold text-lg mb-3">Perfect For:</h5>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-user text-forward-orange mr-3 mt-1"></i>
                                    <span>Adult learners</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-briefcase text-forward-orange mr-3 mt-1"></i>
                                    <span>Business professionals</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-graduation-cap text-forward-orange mr-3 mt-1"></i>
                                    <span>Academic preparation</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h1 class="text-4xl font-bold text-gray-800 mb-4 animate-fadeIn">PRICING</h1>
                <h2 class="text-3xl font-semibold text-gray-700 mb-8 animate-slideUp">Premium Learning. Exceptional Value.</h2>
                <div class="max-w-4xl mx-auto space-y-6 animate-slideUp">
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
                    <div class="bg-white rounded-lg shadow-lg p-6 transform hover:scale-105 transition-all duration-300 animate-slideUp">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Foundations</h3>
                        <div class="mb-6">
                            <span class="text-3xl font-bold text-gray-800">$97</span>
                            <span class="text-sm text-gray-500 line-through ml-2">$139.99</span>
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
                        <a href="sign-up.php" class="block w-full bg-forward-orange text-white text-center py-3 rounded-lg hover:bg-orange-600 transition mb-3">
                            Book a Free Level Test
                        </a>
                        <p class="text-sm text-gray-500 text-center">No hidden fees. Cancel any time.</p>
                    </div>

                    <!-- Momentum -->
                    <div class="bg-white rounded-lg shadow-lg p-6 relative transform hover:scale-105 transition-all duration-300 animate-slideUp" style="animation-delay: 0.2s;">
                        <div class="absolute -top-2 right-4 bg-green-500 text-white px-3 py-1 text-sm rounded-full">
                            Best value
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Momentum</h3>
                        <div class="mb-6">
                            <span class="text-3xl font-bold text-gray-800">$145</span>
                            <span class="text-sm text-gray-500 line-through ml-2">$207.99</span>
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
                        <a href="sign-up.php" class="block w-full bg-forward-orange text-white text-center py-3 rounded-lg hover:bg-orange-600 transition mb-3">
                            Book a Free Level Test
                        </a>
                        <p class="text-sm text-gray-500 text-center">No hidden fees. Cancel any time.</p>
                    </div>

                    <!-- Mastery -->
                    <div class="bg-white rounded-lg shadow-lg p-6 transform hover:scale-105 transition-all duration-300 animate-slideUp" style="animation-delay: 0.4s;">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Mastery</h3>
                        <div class="mb-6">
                            <span class="text-3xl font-bold text-gray-800">$242</span>
                            <span class="text-sm text-gray-500 line-through ml-2">$345.99</span>
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
                        <a href="sign-up.php" class="block w-full bg-forward-orange text-white text-center py-3 rounded-lg hover:bg-orange-600 transition mb-3">
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
                <h1 class="text-4xl font-bold text-gray-800 mb-4 animate-fadeIn">CHILDREN</h1>
                <h2 class="text-3xl font-semibold text-gray-700 mb-8 animate-slideUp">Give Your Child the Gift of a Brighter Future.</h2>
                <div class="max-w-4xl mx-auto space-y-6 animate-slideUp">
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
            
            <!-- Features Section -->
            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <div class="text-center bg-white rounded-lg shadow-lg p-6 transform hover:scale-105 transition-all duration-300 animate-slideUp">
                    <img src="images/features/feature1.png" alt="Reputable American Curriculum" class="w-16 h-16 mx-auto mb-4 object-contain">
                    <h4 class="text-xl font-semibold text-gray-800 mb-3">Reputable and Proven American Curriculum</h4>
                    <p class="text-gray-600">We use a trusted, results-driven US curriculum tailored to your needs, helping you learn faster, speak confidently, and succeed globally.</p>
                </div>
                
                <div class="text-center bg-white rounded-lg shadow-lg p-6 transform hover:scale-105 transition-all duration-300 animate-slideUp" style="animation-delay: 0.2s;">
                    <img src="images/features/feature2.png" alt="On Demand Learning" class="w-16 h-16 mx-auto mb-4 object-contain">
                    <h4 class="text-xl font-semibold text-gray-800 mb-3">On Demand- Study Anytime, Anywhere!</h4>
                    <p class="text-gray-600">Our smart learning technology lets you study on your schedule- at home or on the go- using your computer, smartphone, or tablet.</p>
                </div>
                
                <div class="text-center bg-white rounded-lg shadow-lg p-6 transform hover:scale-105 transition-all duration-300 animate-slideUp" style="animation-delay: 0.4s;">
                    <img src="images/features/feature3.png" alt="Small Groups Big Results" class="w-16 h-16 mx-auto mb-4 object-contain">
                    <h4 class="text-xl font-semibold text-gray-800 mb-3">Small Groups. Big Results</h4>
                    <p class="text-gray-600">We only offer private lessons or small group classes to ensure personalized attention and maximum learning impact.</p>
                </div>
            </div>
            
            <!-- Testimonial -->
            <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8 text-center animate-slideUp">
                <div class="mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-pink-400 to-purple-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-quote-left text-white text-2xl"></i>
                    </div>
                    <p class="text-lg text-gray-600 mb-4 italic">
                        "My 8-year-old loves these classes and speaks more confidently every week."
                    </p>
                    <div class="flex justify-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="font-semibold text-gray-800">
                    <p class="text-lg">Gabriela</p>
                    <p class="text-sm text-gray-500">Guadalajara, Mexico</p>
                </div>
            </div>

            <!-- Children's Features -->
            <div class="grid md:grid-cols-3 gap-8 mt-16">
                <div class="text-center animate-slideUp">
                    <div class="w-16 h-16 bg-blue-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-gamepad text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-3">Fun & Interactive</h4>
                    <p class="text-gray-600">Games, stories, and activities that make learning English exciting for kids.</p>
                </div>
                
                <div class="text-center animate-slideUp" style="animation-delay: 0.2s;">
                    <div class="w-16 h-16 bg-green-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-child text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-3">Age-Appropriate</h4>
                    <p class="text-gray-600">Curriculum designed specifically for children's learning patterns and interests.</p>
                </div>
                
                <div class="text-center animate-slideUp" style="animation-delay: 0.4s;">
                    <div class="w-16 h-16 bg-purple-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-award text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-3">Proven Results</h4>
                    <p class="text-gray-600">Thousands of children have improved their English confidence with our program.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="animate-fadeIn">
                    <div class="flex items-center mb-4">
                        <img src="images/logos/forward-esl-logo.png" alt="Forward ESL" class="h-10 w-auto">
                    </div>
                    <p class="text-gray-300">
                        Founded in 2010 in the United States, Forward ESL has been at the forefront of English language 
                        education for over a decade. With a global reach, we've had the privilege of working with students 
                        from diverse backgrounds and cultures around the world.
                    </p>
                </div>
                
                <div class="animate-slideUp">
                    <h5 class="text-lg font-semibold mb-4">QUICK LINKS</h5>
                    <ul class="space-y-2">
                        <li><a href="sign-up.php" class="text-gray-300 hover:text-white transition">Sign Up</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Courses</a></li>
                        <li><a href="#pricing" class="text-gray-300 hover:text-white transition">Pricing</a></li>
                        <li><a href="corporate-training.php" class="text-gray-300 hover:text-white transition">Corporate Training</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Career Opportunities</a></li>
                    </ul>
                </div>
                
                <div class="animate-slideLeft">
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
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center animate-fadeIn">
                <p class="text-gray-300">Copyright Forward ESL 2025. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Floating Elements -->
    <div class="fixed bottom-6 right-6 z-50">
        <div class="flex items-center space-x-2 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg hover:shadow-xl transition-all transform hover:scale-105 animate-float">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='white'%3E%3Cpath d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z'/%3E%3C/svg%3E" 
                 alt="English" class="w-5 h-5">
            <span>English</span>
        </div>
    </div>

    <!-- WhatsApp floating button -->
    <div class="fixed bottom-6 left-6 z-50">
        <a href="#" class="bg-green-500 text-white p-3 rounded-full shadow-lg hover:shadow-xl transition-all transform hover:scale-110 animate-bounce-slow">
            <i class="fab fa-whatsapp text-2xl"></i>
        </a>
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

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationDelay = '0s';
                    entry.target.classList.add('animate-fadeIn');
                }
            });
        }, observerOptions);

        // Observe all sections
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });
    </script>
</body>
</html>