@extends('layouts.app')

@section('title', 'Forward ESL - English education. Reimagined.')

@section('content')
    <!-- Hero Section with Slider -->
    <section class="relative bg-gradient-to-r from-forward-orange to-orange-500 py-20 lg:py-32 gradient-animate overflow-hidden">
        <div class="container max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left content -->
                <div class="text-white" data-aos="fade-right" data-aos-delay="100">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-serif leading-tight mb-8 text-shadow-lg">
                        <span class="block animate-fade-up">Native English teachers.</span>
                        <span class="block animate-fade-up" style="animation-delay: 0.2s">US school curriculum.</span>
                        <span class="block animate-fade-up" style="animation-delay: 0.4s">Affordable pricing.</span>
                    </h1>
                    <a href="{{ url('/sign-up') }}" class="inline-block bg-forward-blue hover:bg-blue-800 text-white font-semibold px-8 py-4 rounded-full transition-all duration-300 transform hover:scale-105 animate-pulse-slow">
                        Get Started
                    </a>
                </div>

                <!-- Right content - Image Slider -->
                <div class="relative" data-aos="fade-left" data-aos-delay="300">
                    <div class="swiper hero-slider rounded-lg shadow-2xl overflow-hidden">
                        <div class="swiper-wrapper">
                            @for($i = 1; $i <= 5; $i++)
                                <div class="swiper-slide">
                                    @if(file_exists(public_path("images/hero/student-{$i}.jpg")))
                                        <img src="{{ asset("images/hero/student-{$i}.jpg") }}" alt="Forward ESL Student" class="w-full h-auto">
                                    @else
                                        <img src="https://via.placeholder.com/600x400/FFA557/ffffff?text=Student+{{ $i }}" alt="Forward ESL Student {{ $i }}" class="w-full h-auto">
                                    @endif
                                </div>
                            @endfor
                        </div>
                        <!-- Slider Navigation -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Decorative Elements -->
        <div class="absolute top-0 left-0 w-32 h-32 bg-white opacity-10 rounded-full -translate-x-16 -translate-y-16 animate-pulse-slow"></div>
        <div class="absolute bottom-0 right-0 w-48 h-48 bg-white opacity-10 rounded-full translate-x-24 translate-y-24 animate-pulse-slow" style="animation-delay: 1s"></div>
    </section>

    <!-- Statistics Section with Counter Animation -->
    <section class="bg-forward-dark text-white py-12 parallax" style="background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('{{ asset('images/stats-bg.jpg') }}');">
        <div class="container max-w-7xl mx-auto px-4 text-center" data-aos="zoom-in">
            <h3 class="text-3xl font-bold mb-4">
                Over <span class="counter-number text-4xl font-bold text-forward-orange" data-target="1000000">0</span>+ Satisfied Students!
            </h3>
            <p class="text-lg">
                We are the preferred partner of <span class="font-bold">150+</span> public sector organizations, 
                <span class="font-bold">100+</span> academic institutions, <span class="font-bold">500+</span> corporations, 
                and members of the Fortune Global 500.
            </p>
        </div>
    </section>

    <!-- Student Carousel Section -->
    <section class="py-16 bg-gray-50">
        <div class="container max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8 uppercase" data-aos="fade-up">Serving Students Worldwide</h2>
            <div class="swiper student-carousel" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">
                    @for($i = 1; $i <= 12; $i++)
                        <div class="swiper-slide">
                            @if(file_exists(public_path("images/students/student-{$i}.jpg")))
                                <img src="{{ asset("images/students/student-{$i}.jpg") }}" alt="Student" class="w-full h-auto rounded-lg shadow-md">
                            @else
                                <div class="bg-gray-200 rounded-lg shadow-md aspect-square flex items-center justify-center">
                                    <svg class="w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            @endif
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 uppercase" data-aos="fade-down">Experience Real American English</h2>
            <p class="text-center text-lg text-gray-700 mb-12" data-aos="fade-up" data-aos-delay="100">
                Our certified, native English-speaking teachers are experts in language instruction, 
                bringing professional experience and a passion for teaching to every lesson.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-8 rounded-lg shadow-lg text-center hover-lift" data-aos="flip-left" data-aos-delay="100">
                    <div class="bg-forward-orange text-white rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-6 animate-pulse-slow">
                        <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Reputable and Proven American Curriculum</h3>
                    <p class="text-gray-600">We use a trusted, results-driven US curriculum tailored to your needs, helping you learn faster, speak confidently, and succeed globally.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-8 rounded-lg shadow-lg text-center hover-lift" data-aos="flip-left" data-aos-delay="200">
                    <div class="bg-forward-orange text-white rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-6 animate-pulse-slow" style="animation-delay: 0.5s">
                        <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"></path>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11h4m-2-2v4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">On Demand - Study Anytime, Anywhere!</h3>
                    <p class="text-gray-600">Our smart learning technology lets you study on your schedule - at home or on the go - using your computer, smartphone, or tablet.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-8 rounded-lg shadow-lg text-center hover-lift" data-aos="flip-left" data-aos-delay="300">
                    <div class="bg-forward-orange text-white rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-6 animate-pulse-slow" style="animation-delay: 1s">
                        <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Small Groups. Big Results</h3>
                    <p class="text-gray-600">We only offer private lessons or small group classes to ensure personalized attention and maximum learning impact. With fewer students per class, you'll get more speaking time.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Accreditations Section -->
    <section class="bg-gray-50 py-16">
        <div class="container max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 uppercase" data-aos="zoom-in">Accreditations</h2>
            <div class="flex flex-wrap justify-center items-center gap-8" data-aos="fade-up" data-aos-delay="200">
                @foreach(['witesol', 'tesol', 'cert1', 'cert2', 'cert3', 'cert4'] as $cert)
                    @if(file_exists(public_path("images/certificates/{$cert}.png")))
                        <img src="{{ asset("images/certificates/{$cert}.png") }}" alt="{{ ucfirst($cert) }}" class="h-20 w-auto grayscale hover:grayscale-0 transition-all hover-lift">
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Slider Section -->
    <section class="py-16 bg-white">
        <div class="container max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 uppercase" data-aos="fade-up">Student Testimonials</h2>
            
            <div class="swiper testimonial-slider" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">
                    @php
                    $testimonials = [
                        ['name' => 'Sara G', 'role' => 'Business Professional (32 years old)', 'text' => 'After changing my schedule several times, we ended up taking the class together. As the customer service center explained, it seems that the teacher is really good at teaching. The feedback is kind and the explanations are good.', 'avatar' => 'SG'],
                        ['name' => 'Jaime R', 'role' => 'Marketing Manager (28 years old)', 'text' => 'The atmosphere is interesting without being awkward.', 'avatar' => 'JR'],
                        ['name' => 'Emilia L', 'role' => 'Accountant (45 years old)', 'text' => 'I am so shy to speak but my teacher help me to speak a lot.', 'avatar' => 'EL'],
                        ['name' => 'Ana P', 'role' => 'Project Manager', 'text' => 'Feedback content is varied and detailed to help me improve. I feel confident I can work overseas because of my teacher\'s help.', 'avatar' => 'AP'],
                        ['name' => 'Daniela M', 'role' => 'College Student (19 years old)', 'text' => 'It\'s great my teacher speaks at a pace that suits me. I am beginner but I can understand my teacher well.', 'avatar' => 'DM'],
                        ['name' => 'Raquel H', 'role' => 'HR Professional (38 years old)', 'text' => 'Class was very interesting and energetic.', 'avatar' => 'RH'],
                        ['name' => 'Luisa R', 'role' => 'Business Professional (32 years old)', 'text' => 'I learned the words such as weights, drip coffee, and current American slang. Thank you for your efforts!', 'avatar' => 'LR'],
                        ['name' => 'Patricia M', 'role' => 'Marketing Specialist (25 years old)', 'text' => 'I like that you commented on pronunciation to make me sound like a native.', 'avatar' => 'PM'],
                        ['name' => 'Luca R', 'role' => 'Teacher (48 years old)', 'text' => 'You take care of me like a baby. Thank you for the kind and gentle experience.', 'avatar' => 'LR2'],
                        ['name' => 'Mónica S', 'role' => 'Mother of child student, 7 years old', 'text' => 'My child likes it. The teacher\'s skills are great and the class progresses like a conversation while drawing, so I don\'t notice the passage of time.', 'avatar' => 'MS'],
                        ['name' => 'Verónica L', 'role' => 'Mother of child student, 9 years old', 'text' => 'It was our first time taking a class with a native English teacher, so she was shy at first, but she found it more enjoyable as time went by. The teacher responded well and led the way slowly for her child.', 'avatar' => 'VL'],
                        ['name' => 'Claudia P', 'role' => 'Mother of child student, 6 years old', 'text' => 'Thank you for making his first English class enjoyable. We will return again.', 'avatar' => 'CP'],
                    ];
                    @endphp
                    
                    @foreach($testimonials as $testimonial)
                        <div class="swiper-slide">
                            <div class="bg-white p-8 rounded-lg shadow-lg">
                                <div class="flex items-center mb-4">
                                    <div class="bg-forward-orange text-white rounded-full w-12 h-12 flex items-center justify-center font-bold mr-3">
                                        {{ $testimonial['avatar'] }}
                                    </div>
                                    <div>
                                        <h4 class="font-semibold">{{ $testimonial['name'] }}</h4>
                                        <p class="text-sm text-gray-500">{{ $testimonial['role'] }}</p>
                                    </div>
                                </div>
                                <div class="text-yellow-400 mb-3">★★★★★</div>
                                <p class="text-gray-600 italic">
                                    "{{ $testimonial['text'] }}"
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <!-- Slider Navigation -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination mt-8"></div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-16 bg-gray-50">
        <div class="container max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 uppercase" data-aos="fade-up">How It Works</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-forward-orange text-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6 text-2xl font-bold">
                        1
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Sign up and take a free level test online</h3>
                    <p class="text-gray-600">
                        Find out what your learning level is from A0 to C2. Receive your course recommendation and proficiency level.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-forward-blue text-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6 text-2xl font-bold">
                        2
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Choose your textbook and your class schedule</h3>
                    <p class="text-gray-600">
                        Select your area of focus and how many lessons you would like to take each week.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-green-600 text-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6 text-2xl font-bold">
                        3
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Start learning!</h3>
                    <p class="text-gray-600">
                        Get ready to attend your first class!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-forward-orange py-16 gradient-animate relative overflow-hidden">
        <div class="container max-w-7xl mx-auto px-4 text-center relative z-10" data-aos="zoom-in">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Sign up for your first class today!</h2>
            <p class="text-xl text-white mb-8">Join thousands of successful students worldwide</p>
            <a href="{{ url('/sign-up') }}" class="inline-block bg-white hover:bg-gray-100 text-forward-orange font-semibold px-8 py-4 rounded-full transition-all duration-300 transform hover:scale-105">
                Get Started Now
            </a>
        </div>
        
        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full translate-x-32 -translate-y-32 animate-pulse-slow"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-white opacity-5 rounded-full -translate-x-24 translate-y-24 animate-pulse-slow" style="animation-delay: 1.5s"></div>
    </section>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    // Initialize Hero Slider
    const heroSlider = new Swiper('.hero-slider', {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        pagination: {
            el: '.hero-slider .swiper-pagination',
            clickable: true,
        },
    });

    // Initialize Student Carousel
    const studentCarousel = new Swiper('.student-carousel', {
        loop: true,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        speed: 5000,
        slidesPerView: 'auto',
        spaceBetween: 20,
        breakpoints: {
            640: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 5,
            },
            1024: {
                slidesPerView: 8,
            },
        },
    });

    // Initialize Testimonial Slider
    const testimonialSlider = new Swiper('.testimonial-slider', {
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: '.testimonial-slider .swiper-button-next',
            prevEl: '.testimonial-slider .swiper-button-prev',
        },
        pagination: {
            el: '.testimonial-slider .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });

    // Counter Animation
    function animateCounter() {
        const counters = document.querySelectorAll('.counter-number');
        
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            const increment = target / 100;
            let current = 0;
            
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    counter.textContent = target.toLocaleString();
                    clearInterval(timer);
                } else {
                    counter.textContent = Math.floor(current).toLocaleString();
                }
            }, 20);
        });
    }

    // Trigger counter animation when in viewport
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter();
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    const statsSection = document.querySelector('.counter-number');
    if (statsSection) {
        observer.observe(statsSection.closest('section'));
    }

    // Parallax effect
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const parallax = document.querySelector('.parallax');
        if (parallax) {
            parallax.style.backgroundPositionY = -(scrolled * 0.5) + 'px';
        }
    });
</script>
@endpush