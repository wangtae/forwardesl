<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up – Forward ESL</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'forward-orange': '#f97316',
                        'forward-blue': '#1e3a8a',
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                    <a href="/#about" class="text-gray-700 hover:text-forward-orange transition">About Us</a>
                    <a href="/#curriculum" class="text-gray-700 hover:text-forward-orange transition">Curriculum</a>
                    <a href="/#pricing" class="text-gray-700 hover:text-forward-orange transition">Pricing</a>
                    <a href="/#children" class="text-gray-700 hover:text-forward-orange transition">Children</a>
                    <a href="corporate-training.php" class="text-gray-700 hover:text-forward-orange transition">Corporate Training</a>
                    <a href="careers.php" class="text-gray-700 hover:text-forward-orange transition">Careers</a>
                    <a href="contact.php" class="text-gray-700 hover:text-forward-orange transition">Contact Us</a>
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

    <!-- Main Content -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">SIGN UP</h1>
                <h2 class="text-3xl font-semibold text-gray-700 mb-8">YOUR FIRST CLASS IS JUST MINUTES AWAY!</h2>
                <p class="text-lg text-gray-600 max-w-4xl mx-auto">
                    Signing up is quick and easy. Just fill out a few basic details and you'll be on your way to learning English 
                    with a professional teacher. No long forms, no complicated steps- just simple, fast access to the lessons you need.
                </p>
            </div>

            <!-- Sign Up Process -->
            <div class="max-w-4xl mx-auto">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                    <div class="text-center">
                        <div class="bg-forward-orange text-white rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold mx-auto mb-4">
                            1
                        </div>
                        <div class="flex items-center justify-center mb-2">
                            <i class="fas fa-user-plus text-3xl text-forward-orange"></i>
                        </div>
                        <p class="font-semibold text-gray-800">Create an account</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="bg-forward-orange text-white rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold mx-auto mb-4">
                            2
                        </div>
                        <div class="flex items-center justify-center mb-2">
                            <i class="fas fa-box text-3xl text-forward-orange"></i>
                        </div>
                        <p class="font-semibold text-gray-800">Choose a package</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="bg-forward-orange text-white rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold mx-auto mb-4">
                            3
                        </div>
                        <div class="flex items-center justify-center mb-2">
                            <i class="fas fa-credit-card text-3xl text-forward-orange"></i>
                        </div>
                        <p class="font-semibold text-gray-800">Pay for your course</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="bg-forward-orange text-white rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold mx-auto mb-4">
                            4
                        </div>
                        <div class="flex items-center justify-center mb-2">
                            <i class="fas fa-clock text-3xl text-forward-orange"></i>
                        </div>
                        <p class="font-semibold text-gray-800">Select a time for your level test</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="bg-forward-orange text-white rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold mx-auto mb-4">
                            5
                        </div>
                        <div class="flex items-center justify-center mb-2">
                            <i class="fas fa-calendar-alt text-3xl text-forward-orange"></i>
                        </div>
                        <p class="font-semibold text-gray-800">Choose your class schedule</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="bg-forward-orange text-white rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold mx-auto mb-4">
                            6
                        </div>
                        <div class="flex items-center justify-center mb-2">
                            <i class="fas fa-graduation-cap text-3xl text-forward-orange"></i>
                        </div>
                        <p class="font-semibold text-gray-800">Begin studying!</p>
                    </div>
                </div>

                <!-- Sign Up Form -->
                <div class="bg-white rounded-lg shadow-lg p-8 max-w-2xl mx-auto">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Get Started Today</h3>
                    <form>
                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                                <input type="text" id="firstName" name="firstName" 
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-forward-orange focus:border-transparent">
                            </div>
                            <div>
                                <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                <input type="text" id="lastName" name="lastName" 
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-forward-orange focus:border-transparent">
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" id="email" name="email" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-forward-orange focus:border-transparent">
                        </div>
                        
                        <div class="mb-6">
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-forward-orange focus:border-transparent">
                        </div>
                        
                        <div class="mb-6">
                            <label for="country" class="block text-sm font-medium text-gray-700 mb-2">Country</label>
                            <select id="country" name="country" 
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-forward-orange focus:border-transparent">
                                <option value="">Select your country</option>
                                <option value="KR">South Korea</option>
                                <option value="JP">Japan</option>
                                <option value="CN">China</option>
                                <option value="US">United States</option>
                                <option value="MX">Mexico</option>
                                <option value="BR">Brazil</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">English Level (Optional)</label>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="radio" name="level" value="beginner" class="text-forward-orange focus:ring-forward-orange">
                                    <span class="ml-2">Beginner (A1-A2)</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="level" value="intermediate" class="text-forward-orange focus:ring-forward-orange">
                                    <span class="ml-2">Intermediate (B1-B2)</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="level" value="advanced" class="text-forward-orange focus:ring-forward-orange">
                                    <span class="ml-2">Advanced (C1-C2)</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="level" value="unknown" class="text-forward-orange focus:ring-forward-orange">
                                    <span class="ml-2">Not sure</span>
                                </label>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label class="flex items-center">
                                <input type="checkbox" name="terms" class="text-forward-orange focus:ring-forward-orange">
                                <span class="ml-2 text-sm text-gray-600">
                                    I agree to the <a href="#" class="text-forward-orange hover:underline">Terms of Service</a> 
                                    and <a href="#" class="text-forward-orange hover:underline">Privacy Policy</a>
                                </span>
                            </label>
                        </div>
                        
                        <button type="submit" 
                                class="w-full bg-forward-orange text-white py-3 px-6 rounded-lg font-semibold hover:bg-orange-600 transition">
                            Create Account & Continue
                        </button>
                    </form>
                    
                    <div class="mt-6 text-center">
                        <p class="text-sm text-gray-600">
                            Already have an account? 
                            <a href="login.php" class="text-forward-orange hover:underline">Sign in here</a>
                        </p>
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

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <img src="images/logos/forward-esl-logo.png" alt="Forward ESL" class="h-10 w-auto">
                    </div>
                    <p class="text-gray-300">
                        Founded in 2010 in the United States, Forward ESL has been at the forefront of English language 
                        education for over a decade. With a global reach, we've had the privilege of working with students 
                        from diverse backgrounds and cultures around the world.
                    </p>
                </div>
                
                <div>
                    <h5 class="text-lg font-semibold mb-4">QUICK LINKS</h5>
                    <ul class="space-y-2">
                        <li><a href="sign-up.php" class="text-gray-300 hover:text-white transition">Sign Up</a></li>
                        <li><a href="/" class="text-gray-300 hover:text-white transition">Courses</a></li>
                        <li><a href="/#pricing" class="text-gray-300 hover:text-white transition">Pricing</a></li>
                        <li><a href="corporate-training.php" class="text-gray-300 hover:text-white transition">Corporate Training</a></li>
                        <li><a href="careers.php" class="text-gray-300 hover:text-white transition">Career Opportunities</a></li>
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
</body>
</html>