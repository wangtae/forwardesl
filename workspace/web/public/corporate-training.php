<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate Training – Forward ESL</title>
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

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-forward-blue to-blue-600 text-white py-20">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl lg:text-6xl font-bold mb-6">CORPORATE TRAINING</h1>
                <h2 class="text-2xl lg:text-3xl font-semibold mb-8">Empower Your Team with Professional English Skills</h2>
                <p class="text-xl text-blue-100 max-w-4xl mx-auto mb-8">
                    Transform your workplace communication with customized English training programs designed for businesses. 
                    Our corporate solutions help your employees build confidence, improve productivity, and succeed in the global market.
                </p>
                <a href="contact.php" class="inline-block bg-forward-orange text-white px-8 py-3 rounded-lg font-semibold hover:bg-orange-600 transition">
                    Request a Quote
                </a>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-3xl font-bold text-gray-800 mb-8">Why Choose Forward ESL for Corporate Training?</h3>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="text-center bg-white rounded-lg shadow-md p-6">
                    <div class="bg-forward-orange text-white rounded-full w-16 h-16 flex items-center justify-center text-2xl mx-auto mb-4">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-3">Customized Programs</h4>
                    <p class="text-gray-600">Tailored training programs designed specifically for your industry and business needs.</p>
                </div>
                
                <div class="text-center bg-white rounded-lg shadow-md p-6">
                    <div class="bg-forward-orange text-white rounded-full w-16 h-16 flex items-center justify-center text-2xl mx-auto mb-4">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-3">Flexible Scheduling</h4>
                    <p class="text-gray-600">On-site, online, or hybrid training options that fit your team's schedule and preferences.</p>
                </div>
                
                <div class="text-center bg-white rounded-lg shadow-md p-6">
                    <div class="bg-forward-orange text-white rounded-full w-16 h-16 flex items-center justify-center text-2xl mx-auto mb-4">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-3">Professional Certification</h4>
                    <p class="text-gray-600">Internationally recognized certificates to validate your employees' English proficiency.</p>
                </div>
                
                <div class="text-center bg-white rounded-lg shadow-md p-6">
                    <div class="bg-forward-orange text-white rounded-full w-16 h-16 flex items-center justify-center text-2xl mx-auto mb-4">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-3">Progress Tracking</h4>
                    <p class="text-gray-600">Detailed progress reports and analytics to measure training effectiveness and ROI.</p>
                </div>
                
                <div class="text-center bg-white rounded-lg shadow-md p-6">
                    <div class="bg-forward-orange text-white rounded-full w-16 h-16 flex items-center justify-center text-2xl mx-auto mb-4">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-3">Dedicated Support</h4>
                    <p class="text-gray-600">Personal account manager and ongoing support throughout your training journey.</p>
                </div>
                
                <div class="text-center bg-white rounded-lg shadow-md p-6">
                    <div class="bg-forward-orange text-white rounded-full w-16 h-16 flex items-center justify-center text-2xl mx-auto mb-4">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-3">Global Expertise</h4>
                    <p class="text-gray-600">Native English instructors with extensive corporate training experience worldwide.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-3xl font-bold text-gray-800 mb-8">Our Corporate Training Programs</h3>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Business English -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h4 class="text-2xl font-bold text-gray-800 mb-4">Business English Communication</h4>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Professional email writing</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Meeting facilitation and participation</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Presentation skills</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Negotiation and persuasion techniques</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Cross-cultural communication</span>
                        </li>
                    </ul>
                    <p class="text-gray-600">Perfect for executives, managers, and professionals who need to communicate effectively in international business settings.</p>
                </div>

                <!-- Technical English -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h4 class="text-2xl font-bold text-gray-800 mb-4">Technical English</h4>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Industry-specific vocabulary</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Technical documentation writing</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Safety and compliance communication</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Project reporting and updates</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Client interaction skills</span>
                        </li>
                    </ul>
                    <p class="text-gray-600">Specialized training for engineering, IT, healthcare, manufacturing, and other technical industries.</p>
                </div>

                <!-- Customer Service -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h4 class="text-2xl font-bold text-gray-800 mb-4">Customer Service Excellence</h4>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Phone etiquette and skills</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Handling complaints and difficult situations</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Active listening techniques</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Sales conversation skills</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Cultural sensitivity training</span>
                        </li>
                    </ul>
                    <p class="text-gray-600">Essential for customer-facing teams in retail, hospitality, finance, and service industries.</p>
                </div>

                <!-- Leadership Communication -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h4 class="text-2xl font-bold text-gray-800 mb-4">Leadership Communication</h4>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Executive presence and confidence</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Strategic communication planning</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Team motivation and inspiration</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Crisis communication management</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Public speaking and media training</span>
                        </li>
                    </ul>
                    <p class="text-gray-600">Advanced training designed for C-suite executives, senior managers, and emerging leaders.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-3xl font-bold text-gray-800 mb-8">What Our Corporate Clients Say</h3>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="mb-4">
                        <div class="flex text-yellow-400 mb-2">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="text-gray-600 italic">"The training program significantly improved our team's confidence in international client meetings. ROI was evident within the first quarter."</p>
                    </div>
                    <div class="border-t pt-4">
                        <p class="font-semibold text-gray-800">Sarah Kim</p>
                        <p class="text-sm text-gray-500">HR Director, Samsung Electronics</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="mb-4">
                        <div class="flex text-yellow-400 mb-2">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="text-gray-600 italic">"Forward ESL's customized approach perfectly matched our industry needs. Our engineers now communicate complex technical concepts clearly to international partners."</p>
                    </div>
                    <div class="border-t pt-4">
                        <p class="font-semibold text-gray-800">Carlos Rodriguez</p>
                        <p class="text-sm text-gray-500">Training Manager, Hyundai Motors</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="mb-4">
                        <div class="flex text-yellow-400 mb-2">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="text-gray-600 italic">"The flexible scheduling and online options made it easy to train our global workforce without disrupting operations."</p>
                    </div>
                    <div class="border-t pt-4">
                        <p class="font-semibold text-gray-800">Anna Chen</p>
                        <p class="text-sm text-gray-500">Learning & Development, LG Group</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-forward-orange text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold mb-4">Ready to Transform Your Team's Communication?</h3>
            <p class="text-xl text-orange-100 mb-8 max-w-3xl mx-auto">
                Join the 500+ companies worldwide who have chosen Forward ESL for their corporate English training needs. 
                Contact us today for a free consultation and customized proposal.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="contact.php" class="bg-white text-forward-orange px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                    Request Free Consultation
                </a>
                <a href="sign-up.php" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-forward-orange transition">
                    Get Started Today
                </a>
            </div>
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