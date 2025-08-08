@extends('layouts.app')

@section('title', 'Children – Forward ESL')

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden min-h-[600px] flex items-center">
        <!-- Background Image (Left Half) -->
        <div class="absolute inset-0 w-1/2 bg-gradient-to-br from-yellow-400 via-yellow-500 to-orange-500">
            <img src="{{ asset('images/children/children-hero.jpg') }}" 
                 alt="Children learning" 
                 class="w-full h-full object-cover object-right">
        </div>
        
        <!-- Content Container -->
        <div class="relative z-10 w-full">
            <div class="container max-w-7xl mx-auto px-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Empty column for image space on desktop -->
                    <div class="hidden lg:block"></div>
                    
                    <!-- Right Content -->
                    <div class="bg-white/95 backdrop-blur-sm p-8 lg:p-12 rounded-l-3xl lg:rounded-none lg:ml-auto" data-aos="fade-left">
                        <div class="space-y-6">
                            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight text-forward-dark">
                                CHILDREN
                            </h1>
                            <h2 class="text-xl md:text-2xl lg:text-3xl font-light leading-tight text-gray-700">
                                Give Your Child the Gift of a Brighter Future.
                            </h2>
                            <div class="space-y-4 text-base md:text-lg leading-relaxed text-gray-600">
                                <p>Your child deserves to feel confident in English. Our fun, personalized classes with native-speaking teachers help kids grow their language skills- and their confidence.</p>
                                <p>In today's world, strong English skills open doors to top schools, global opportunities, and lifelong success. Our engaging, interactive program- taught by real native English teachers- helps children build confidence, master English naturally, and develop the skills they need to thrive.</p>
                            </div>
                            <a href="{{ url('/sign-up') }}" class="inline-block bg-forward-orange hover:bg-orange-600 text-white font-semibold px-8 py-4 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg mt-6">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Mobile Background -->
        <div class="lg:hidden absolute inset-0 bg-gradient-to-br from-yellow-400 via-yellow-500 to-orange-500 opacity-90"></div>
    </section>

    <!-- Statistics Section -->
    <section class="bg-forward-dark text-white py-16 relative overflow-hidden">
        <div class="container max-w-7xl mx-auto px-4 text-center relative z-10">
            <h3 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6 tracking-wide" data-aos="zoom-in">
                OVER <span class="counter-number text-forward-orange text-4xl md:text-5xl lg:text-6xl font-black" data-target="1000000">1,000,000</span> SATISFIED STUDENTS!
            </h3>
            <p class="text-base md:text-lg lg:text-xl max-w-5xl mx-auto leading-relaxed text-gray-200" data-aos="fade-up" data-aos-delay="200">
                We are the preferred partner of <span class="font-semibold text-white">150+ public sector organizations</span>, <span class="font-semibold text-white">100+ academic institutions</span>, 
                <span class="font-semibold text-white">500+ corporations</span>, and members of the <span class="font-semibold text-white">Fortune Global 500</span>.
            </p>
        </div>
        
        <!-- Background decorations -->
        <div class="absolute top-0 left-0 w-full h-full">
            <div class="absolute top-10 right-20 w-2 h-2 bg-forward-orange rounded-full animate-ping"></div>
            <div class="absolute bottom-16 left-16 w-3 h-3 bg-white/20 rounded-full animate-pulse"></div>
            <div class="absolute top-1/3 left-10 w-1 h-1 bg-forward-orange rounded-full animate-ping" style="animation-delay: 1s;"></div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-20 bg-gray-50">
        <div class="container max-w-7xl mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <div class="bg-white rounded-2xl shadow-xl p-12 relative">
                    <div class="text-6xl text-forward-orange mb-6">"</div>
                    <blockquote class="text-2xl md:text-3xl font-light text-gray-700 mb-8 leading-relaxed italic">
                        My 8-year-old loves these classes and speaks more confidently every week.
                    </blockquote>
                    <div class="flex items-center justify-center space-x-4">
                        <div class="w-16 h-16 bg-gradient-to-r from-forward-orange to-orange-500 rounded-full flex items-center justify-center text-white font-bold text-xl">
                            G
                        </div>
                        <div class="text-left">
                            <div class="font-semibold text-lg text-forward-dark">Gabriela</div>
                            <div class="text-gray-500">Guadalajara, Mexico</div>
                        </div>
                    </div>
                    <!-- Decorative quote marks -->
                    <div class="absolute -top-4 -left-4 w-8 h-8 bg-forward-orange/20 rounded-full"></div>
                    <div class="absolute -bottom-4 -right-4 w-12 h-12 bg-forward-orange/10 rounded-full"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Number of Children Selection -->
    <section class="py-16 bg-white">
        <div class="container max-w-7xl mx-auto px-4">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-forward-dark mb-6">How many children would you like to enroll?</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Choose the perfect plan for your family. All options include personalized attention from native English teachers.
                </p>
            </div>
            
            <div class="flex flex-col md:flex-row justify-center items-center gap-6 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ url('/sign-up') }}" class="group w-full md:w-auto">
                    <div class="bg-gradient-to-br from-yellow-50 to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-orange-200 hover:border-forward-orange text-center">
                        <div class="text-5xl mb-4">👦</div>
                        <h3 class="text-2xl font-bold text-forward-dark mb-2">1 Child</h3>
                        <p class="text-gray-600">Perfect for focused learning</p>
                    </div>
                </a>
                
                <a href="{{ url('/sign-up') }}" class="group w-full md:w-auto">
                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-blue-200 hover:border-forward-blue text-center">
                        <div class="text-5xl mb-4">👧👦</div>
                        <h3 class="text-2xl font-bold text-forward-dark mb-2">2 Children</h3>
                        <p class="text-gray-600">Sibling discount available</p>
                    </div>
                </a>
                
                <a href="{{ url('/sign-up') }}" class="group w-full md:w-auto">
                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-green-200 hover:border-green-600 text-center">
                        <div class="text-5xl mb-4">👨‍👩‍👧‍👦</div>
                        <h3 class="text-2xl font-bold text-forward-dark mb-2">3+ Children</h3>
                        <p class="text-gray-600">Family package benefits</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-forward-orange to-orange-600 py-20 relative overflow-hidden">
        <div class="container max-w-7xl mx-auto px-4 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6" data-aos="zoom-in">
                Give Your Child a Head Start in Life
            </h2>
            <p class="text-xl md:text-2xl text-white/90 mb-10 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Join thousands of parents who trust Forward ESL with their children's English education.
            </p>
            <a href="{{ url('/sign-up') }}" class="inline-block bg-white hover:bg-gray-100 text-forward-orange font-bold px-10 py-5 rounded-full transition-all duration-300 transform hover:scale-110 shadow-2xl text-lg" data-aos="bounce" data-aos-delay="400">
                Start Free Trial →
            </a>
        </div>
        
        <!-- Background decorations -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full translate-x-32 -translate-y-32 animate-pulse-slow"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -translate-x-24 translate-y-24 animate-pulse-slow" style="animation-delay: 1.5s"></div>
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Counter Animation
        function animateCounter() {
            const counters = document.querySelectorAll('.counter-number');
            
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                const duration = 2000; // 2 seconds
                const increment = target / (duration / 16); // 60fps
                let current = 0;
                
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        counter.textContent = target.toLocaleString();
                        clearInterval(timer);
                    } else {
                        counter.textContent = Math.floor(current).toLocaleString();
                    }
                }, 16);
            });
        }

        // Enhanced Intersection Observer for animations
        const observerOptions = {
            threshold: 0.3,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (entry.target.querySelector('.counter-number')) {
                        animateCounter();
                    }
                    entry.target.classList.add('animate-fade-up');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe sections for animation
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });
    });
</script>
@endpush