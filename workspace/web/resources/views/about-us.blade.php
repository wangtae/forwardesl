@extends('layouts.app')

@section('title', 'About Us – Forward ESL')

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden min-h-[600px] flex items-center">
        <!-- Background Image (Left Half) -->
        <div class="absolute inset-0 w-1/2 bg-gradient-to-br from-teal-400 via-teal-500 to-blue-600">
            <img src="{{ asset('images/about/about-hero-man.jpg') }}" 
                 alt="Happy student" 
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
                                ABOUT US
                            </h1>
                            <h2 class="text-2xl md:text-3xl lg:text-4xl font-light leading-tight text-gray-700">
                                LANGUAGE LEARNING MADE SIMPLE.
                            </h2>
                            <div class="space-y-4 text-base md:text-lg leading-relaxed text-gray-600">
                                <p>Get real results with live, personalized lessons from expert American English teachers.</p>
                                <p>Powered by trusted U.S. school curriculum and advanced AI, you'll gain the skills to succeed – at school, at work, and beyond – faster than ever before.</p>
                                <p>Join the thousands succeeding with us. Start learning online anytime, anywhere!</p>
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
        <div class="lg:hidden absolute inset-0 bg-gradient-to-br from-teal-400 via-teal-500 to-blue-600 opacity-90"></div>
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
                    <div class="text-6xl text-forward-orange mb-6">“</div>
                    <blockquote class="text-2xl md:text-3xl font-light text-gray-700 mb-8 leading-relaxed italic">
                        Learning English changed everything for me. It gave me better job opportunities, more confidence when I travel for work, and even helped me make friends in the US.
                    </blockquote>
                    <div class="flex items-center justify-center space-x-4">
                        <div class="w-16 h-16 bg-gradient-to-r from-forward-orange to-orange-500 rounded-full flex items-center justify-center text-white font-bold text-xl">
                            C
                        </div>
                        <div class="text-left">
                            <div class="font-semibold text-lg text-forward-dark">Carlos</div>
                            <div class="text-gray-500">Monterrey, Mexico</div>
                        </div>
                    </div>
                    <!-- Decorative quote marks -->
                    <div class="absolute -top-4 -left-4 w-8 h-8 bg-forward-orange/20 rounded-full"></div>
                    <div class="absolute -bottom-4 -right-4 w-12 h-12 bg-forward-orange/10 rounded-full"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Access Links -->
    <section class="py-16 bg-white">
        <div class="container max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Corporate Training -->
                <div class="group" data-aos="flip-left" data-aos-delay="100">
                    <a href="{{ url('/corporate-training') }}" class="block bg-gradient-to-br from-forward-blue to-blue-700 text-white p-8 rounded-2xl shadow-xl hover-lift-lg transition-all duration-300">
                        <div class="text-4xl mb-4">🏢</div>
                        <h3 class="text-2xl font-bold mb-3">Corporate Training</h3>
                        <p class="text-blue-100 mb-4">Professional English training for your business team</p>
                        <div class="inline-flex items-center text-white font-semibold group-hover:translate-x-2 transition-transform">
                            Learn More 
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </a>
                </div>

                <!-- Children's Classes -->
                <div class="group" data-aos="flip-left" data-aos-delay="200">
                    <a href="{{ url('/children') }}" class="block bg-gradient-to-br from-green-500 to-green-700 text-white p-8 rounded-2xl shadow-xl hover-lift-lg transition-all duration-300">
                        <div class="text-4xl mb-4">👶</div>
                        <h3 class="text-2xl font-bold mb-3">Children's Classes</h3>
                        <p class="text-green-100 mb-4">Fun and engaging English lessons for kids</p>
                        <div class="inline-flex items-center text-white font-semibold group-hover:translate-x-2 transition-transform">
                            Learn More 
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </a>
                </div>

                <!-- Explore Curriculum -->
                <div class="group" data-aos="flip-left" data-aos-delay="300">
                    <a href="{{ url('/curriculum') }}" class="block bg-gradient-to-br from-purple-500 to-purple-700 text-white p-8 rounded-2xl shadow-xl hover-lift-lg transition-all duration-300">
                        <div class="text-4xl mb-4">📚</div>
                        <h3 class="text-2xl font-bold mb-3">Explore Curriculum</h3>
                        <p class="text-purple-100 mb-4">Discover our comprehensive learning programs</p>
                        <div class="inline-flex items-center text-white font-semibold group-hover:translate-x-2 transition-transform">
                            Learn More 
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Teachers Section -->
    <section class="py-20 bg-white">
        <div class="container max-w-7xl mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-forward-dark mb-6">You deserve the best learning experience possible</h2>
                <p class="text-lg md:text-xl text-gray-700 mb-8 leading-relaxed">
                    We keep that in mind with our hiring practices. We have over 2,000 teaching staff with us - from teachers, to curriculum development, and everything in between.
                </p>
                <p class="text-xl font-semibold text-forward-orange mb-8">"All of our teachers are:"</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Teacher Qualification 1 -->
                <div class="group text-center" data-aos="flip-up" data-aos-delay="100">
                    <div class="bg-gradient-to-br from-forward-orange to-orange-500 text-white p-6 rounded-2xl shadow-xl group-hover:-translate-y-2 transition-transform duration-300">
                        <div class="text-4xl mb-4">🇺🇸</div>
                        <h3 class="text-lg font-bold mb-2">Native English Speakers</h3>
                        <p class="text-orange-100 text-sm">Born and raised in America</p>
                    </div>
                </div>

                <!-- Teacher Qualification 2 -->
                <div class="group text-center" data-aos="flip-up" data-aos-delay="200">
                    <div class="bg-gradient-to-br from-forward-blue to-blue-600 text-white p-6 rounded-2xl shadow-xl group-hover:-translate-y-2 transition-transform duration-300">
                        <div class="text-4xl mb-4">🎓</div>
                        <h3 class="text-lg font-bold mb-2">University Educated</h3>
                        <p class="text-blue-100 text-sm">Bachelor's degree required</p>
                    </div>
                </div>

                <!-- Teacher Qualification 3 -->
                <div class="group text-center" data-aos="flip-up" data-aos-delay="300">
                    <div class="bg-gradient-to-br from-green-500 to-green-600 text-white p-6 rounded-2xl shadow-xl group-hover:-translate-y-2 transition-transform duration-300">
                        <div class="text-4xl mb-4">📋</div>
                        <h3 class="text-lg font-bold mb-2">Teaching Certified</h3>
                        <p class="text-green-100 text-sm">TEFL/TESOL certified</p>
                    </div>
                </div>

                <!-- Teacher Qualification 4 -->
                <div class="group text-center" data-aos="flip-up" data-aos-delay="400">
                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 text-white p-6 rounded-2xl shadow-xl group-hover:-translate-y-2 transition-transform duration-300">
                        <div class="text-4xl mb-4">✅</div>
                        <h3 class="text-lg font-bold mb-2">Background Checked</h3>
                        <p class="text-purple-100 text-sm">Fully verified and screened</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-forward-orange to-orange-600 py-20 relative overflow-hidden">
        <div class="container max-w-7xl mx-auto px-4 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6" data-aos="zoom-in">
                Ready to Start Learning?
            </h2>
            <p class="text-xl md:text-2xl text-white/90 mb-10 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Join over 1 million satisfied students worldwide and start your English journey today!
            </p>
            <a href="{{ url('/sign-up') }}" class="inline-block bg-white hover:bg-gray-100 text-forward-orange font-bold px-10 py-5 rounded-full transition-all duration-300 transform hover:scale-110 shadow-2xl text-lg" data-aos="bounce" data-aos-delay="400">
                Get Started Now →
            </a>
        </div>
        
        <!-- Background decorations -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full translate-x-32 -translate-y-32 animate-pulse-slow"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -translate-x-24 translate-y-24 animate-pulse-slow" style="animation-delay: 1.5s"></div>
        <div class="absolute top-1/2 left-1/4 w-4 h-4 bg-white/20 rounded-full animate-ping"></div>
        <div class="absolute top-1/4 right-1/4 w-6 h-6 bg-white/20 rounded-full animate-bounce"></div>
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

        // Add loading animation
        window.addEventListener('load', () => {
            document.body.classList.add('loaded');
        });
    });
</script>
@endpush