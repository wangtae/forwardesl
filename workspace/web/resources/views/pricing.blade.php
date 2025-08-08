@extends('layouts.app')

@section('title', 'Pricing – Forward ESL')

@section('content')
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

    <!-- Pricing Info -->
    <section class="py-16 bg-white">
        <div class="container max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <p class="text-lg text-gray-600 mb-8" data-aos="fade-up">
                    All classes are 30 minutes long. Materials are bought separately.
                </p>
                <div class="inline-flex items-center bg-gray-100 rounded-full p-1" data-aos="fade-up" data-aos-delay="200">
                    <button id="group-classes-btn" class="px-8 py-3 bg-forward-orange text-white rounded-full font-semibold transition-all shadow-lg">
                        Group Classes
                    </button>
                    <button id="private-classes-btn" class="px-8 py-3 text-gray-600 rounded-full font-semibold transition-all hover:text-forward-orange">
                        Private Classes
                    </button>
                </div>
            </div>

            <!-- Group Classes Pricing -->
            <div id="group-pricing" class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Foundations Plan -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform">
                    <div class="p-8">
                        <h3 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-bold mb-2">Foundations</h3>
                        <div class="text-4xl font-bold text-forward-orange mb-4">
                            $97.99
                            <span class="text-lg text-gray-600 font-normal">/month</span>
                        </div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>2 classes per week</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>30 minutes per class</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Maximum 4 students</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Free level test</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Progress tracking</span>
                            </li>
                        </ul>
                        <a href="{{ url('/sign-up') }}" class="block text-center bg-forward-orange hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-full transition-colors">
                            Get Started
                        </a>
                    </div>
                </div>

                <!-- Momentum Plan -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform relative">
                    <div class="absolute top-0 right-0 bg-forward-blue text-white px-4 py-2 rounded-bl-lg">
                        Best Value
                    </div>
                    <div class="p-8">
                        <h3 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-bold mb-2">Momentum</h3>
                        <div class="text-4xl font-bold text-forward-orange mb-4">
                            $145.99
                            <span class="text-lg text-gray-600 font-normal">/month</span>
                        </div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>3 classes per week</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>30 minutes per class</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Maximum 4 students</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Free level test</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Progress tracking</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Priority support</span>
                            </li>
                        </ul>
                        <a href="{{ url('/sign-up') }}" class="block text-center bg-forward-orange hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-full transition-colors">
                            Get Started
                        </a>
                    </div>
                </div>

                <!-- Mastery Plan -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform">
                    <div class="p-8">
                        <h3 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-bold mb-2">Mastery</h3>
                        <div class="text-4xl font-bold text-forward-orange mb-4">
                            $242.99
                            <span class="text-lg text-gray-600 font-normal">/month</span>
                        </div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>5 classes per week</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>30 minutes per class</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Maximum 4 students</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Free level test</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Progress tracking</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Priority support</span>
                            </li>
                        </ul>
                        <a href="{{ url('/sign-up') }}" class="block text-center bg-forward-orange hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-full transition-colors">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>

            <!-- Private Classes Pricing -->
            <div id="private-pricing" class="hidden md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Foundations Plan -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform">
                    <div class="p-8">
                        <h3 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-bold mb-2">Foundations</h3>
                        <div class="text-4xl font-bold text-forward-orange mb-4">
                            $139.99
                            <span class="text-lg text-gray-600 font-normal">/month</span>
                        </div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>2 classes per week</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>25 minutes per class</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>1-on-1 instruction</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Personalized curriculum</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Free level test</span>
                            </li>
                        </ul>
                        <a href="{{ url('/sign-up') }}" class="block text-center bg-forward-orange hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-full transition-colors">
                            Get Started
                        </a>
                    </div>
                </div>

                <!-- Momentum Plan -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform relative">
                    <div class="absolute top-0 right-0 bg-forward-blue text-white px-4 py-2 rounded-bl-lg">
                        Popular
                    </div>
                    <div class="p-8">
                        <h3 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-bold mb-2">Momentum</h3>
                        <div class="text-4xl font-bold text-forward-orange mb-4">
                            $207.99
                            <span class="text-lg text-gray-600 font-normal">/month</span>
                        </div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>3 classes per week</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>25 minutes per class</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>1-on-1 instruction</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Personalized curriculum</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Priority support</span>
                            </li>
                        </ul>
                        <a href="{{ url('/sign-up') }}" class="block text-center bg-forward-orange hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-full transition-colors">
                            Get Started
                        </a>
                    </div>
                </div>

                <!-- Mastery Plan -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform relative">
                    <div class="absolute top-0 right-0 bg-green-600 text-white px-4 py-2 rounded-bl-lg">
                        Intensive
                    </div>
                    <div class="p-8">
                        <h3 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-bold mb-2">Mastery</h3>
                        <div class="text-4xl font-bold text-forward-orange mb-4">
                            $345.99
                            <span class="text-lg text-gray-600 font-normal">/month</span>
                        </div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>5 classes per week</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>25 minutes per class</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>1-on-1 instruction</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Personalized curriculum</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>VIP support</span>
                            </li>
                        </ul>
                        <a href="{{ url('/sign-up') }}" class="block text-center bg-forward-orange hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-full transition-colors">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="mt-12 text-center">
                <p class="text-gray-600 mb-4">
                    <strong>All plans include:</strong> Free level test • No hidden fees • Cancel anytime
                </p>
                <p class="text-gray-600">
                    <strong>Note:</strong> Textbooks sold separately (approximately $30-$50)
                </p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="bg-gray-50 py-16">
        <div class="container max-w-7xl mx-auto px-4">
            <h2 data-aos="fade-up" class="text-3xl font-bold text-center mb-12">Frequently Asked Questions</h2>
            <div class="max-w-3xl mx-auto space-y-6">
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-semibold mb-2">Can I change my plan anytime?</h3>
                    <p class="text-gray-600">Yes! You can upgrade, downgrade, or cancel your plan at any time without penalties.</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-semibold mb-2">What if I miss a class?</h3>
                    <p class="text-gray-600">We offer makeup classes for excused absences with 24-hour notice.</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-semibold mb-2">Do you offer family discounts?</h3>
                    <p class="text-gray-600">Yes! We offer 10% discount for the second family member and 15% for three or more.</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-semibold mb-2">What payment methods do you accept?</h3>
                    <p class="text-gray-600">We accept all major credit cards, debit cards, and PayPal.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-forward-orange py-16">
        <div class="container max-w-7xl mx-auto px-4 text-center">
            <h2 data-aos="fade-up" class="text-3xl md:text-4xl font-bold text-white mb-4">Start Your Free Level Test</h2>
            <p class="text-xl text-white mb-8">Find the perfect plan for your learning goals</p>
            <a href="{{ url('/sign-up') }}" class="inline-block bg-white hover:bg-gray-100 text-forward-orange font-semibold px-8 py-4 rounded-full transition-all duration-300 transform hover:scale-105">
                Book Free Assessment
            </a>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.getElementById('group-classes-btn').addEventListener('click', function() {
        // Update button styles
        this.classList.add('bg-forward-orange', 'text-white');
        this.classList.remove('text-gray-600');
        document.getElementById('private-classes-btn').classList.remove('bg-forward-orange', 'text-white');
        document.getElementById('private-classes-btn').classList.add('text-gray-600');
        
        // Show/hide pricing
        document.getElementById('group-pricing').classList.remove('hidden');
        document.getElementById('private-pricing').classList.add('hidden');
    });

    document.getElementById('private-classes-btn').addEventListener('click', function() {
        // Update button styles
        this.classList.add('bg-forward-orange', 'text-white');
        this.classList.remove('text-gray-600');
        document.getElementById('group-classes-btn').classList.remove('bg-forward-orange', 'text-white');
        document.getElementById('group-classes-btn').classList.add('text-gray-600');
        
        // Show/hide pricing
        document.getElementById('private-pricing').classList.remove('hidden');
        document.getElementById('group-pricing').classList.add('hidden');
    });
</script>
@endpush