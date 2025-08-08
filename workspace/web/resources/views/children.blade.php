@extends('layouts.app')

@section('title', 'Children - Forward ESL')

@section('content')
    <\!-- Page Header -->
    <section class="relative bg-cover bg-center py-24" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/images/children/children-hero-student.jpg');">
        <div class="container max-w-7xl mx-auto px-4 text-center text-white relative z-10">
            <h1 data-aos="fade-down" class="text-4xl md:text-5xl font-serif mb-4">CHILDREN</h1>
            <h2 data-aos="fade-up" data-aos-delay="100" class="text-2xl md:text-3xl">Give Your Child the Gift of a Brighter Future.</h2>
        </div>
    </section>

    <\!-- Content -->
    <section class="py-16">
        <div class="container max-w-7xl mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <p class="text-lg text-gray-700 mb-8 text-center">
                    In today's connected world, English fluency opens doors to endless opportunities. 
                    Give your child the advantage of learning from native English speakers through fun, 
                    engaging lessons designed specifically for young learners.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <div class="bg-white p-6 rounded-lg shadow hover-lift-lg">
                        <h3 class="text-xl font-bold mb-4 text-forward-orange">Interactive Learning</h3>
                        <p class="text-gray-600">Games, songs, and activities that make learning English fun and memorable.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow hover-lift-lg">
                        <h3 class="text-xl font-bold mb-4 text-forward-orange">Age-Appropriate</h3>
                        <p class="text-gray-600">Curriculum tailored to your child's age and developmental stage.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow hover-lift-lg">
                        <h3 class="text-xl font-bold mb-4 text-forward-orange">Patient Teachers</h3>
                        <p class="text-gray-600">Experienced educators who know how to work with children.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow hover-lift-lg">
                        <h3 class="text-xl font-bold mb-4 text-forward-orange">Safe Environment</h3>
                        <p class="text-gray-600">Secure online classroom with parental controls and monitoring.</p>
                    </div>
                </div>

                <\!-- Testimonial -->
                <div class="bg-gray-50 p-8 rounded-lg mb-12">
                    <p class="text-lg text-gray-700 italic mb-4">
                        "My children love their classes with Forward ESL. The teachers are patient, engaging, 
                        and really know how to work with young learners. They've made incredible progress\!"
                    </p>
                    <p class="font-semibold">- Verónica L., Guadalajara, Mexico</p>
                </div>

                <\!-- Number of Children -->
                <div class="text-center">
                    <h3 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-bold mb-6">How many children would you like to enroll?</h3>
                    <div class="flex justify-center space-x-4">
                        <a href="{{ url('/sign-up') }}" class="bg-forward-orange hover:bg-orange-600 text-white font-semibold px-8 py-4 rounded-full transition-all">
                            1 Child
                        </a>
                        <a href="{{ url('/sign-up') }}" class="bg-forward-blue hover:bg-blue-800 text-white font-semibold px-8 py-4 rounded-full transition-all">
                            2 Children
                        </a>
                        <a href="{{ url('/sign-up') }}" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-8 py-4 rounded-full transition-all">
                            3+ Children
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
