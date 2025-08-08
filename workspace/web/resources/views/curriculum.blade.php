@extends('layouts.app')

@section('title', 'Curriculum - Forward ESL')

@section('content')
    <!-- Page Header -->
    <section class="relative bg-cover bg-center py-24" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/images/homepage/about-us/curriculum-student-background.jpg');">
        <div class="container max-w-7xl mx-auto px-4 text-center text-white relative z-10">
            <h1 data-aos="fade-down" class="text-4xl md:text-5xl font-serif mb-4">CURRICULUM</h1>
            <h2 data-aos="fade-up" data-aos-delay="100" class="text-2xl md:text-3xl">Language learning made simple.</h2>
        </div>
    </section>

    <!-- Introduction -->
    <section class="py-16">
        <div class="container max-w-7xl mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <div class="mb-8">
                    <img src="/images/homepage/about-us/curriculum-timeline-chart.png" alt="Curriculum Timeline" class="w-full max-w-5xl mx-auto rounded-lg shadow-lg mb-8" data-aos="zoom-in">
                    <p class="text-lg text-gray-700">
                        Our curriculum is designed exclusively for American English, taught by native speakers from the United States. 
                        We use proven textbooks and materials that align with US educational standards, ensuring you learn real, 
                        practical English that you can use in academic, professional, and social settings.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Adult's Curriculum -->
    <section class="bg-gray-50 py-16">
        <div class="container max-w-7xl mx-auto px-4">
            <h2 data-aos="fade-up" class="text-3xl font-bold text-center mb-8">ADULT'S CURRICULUM</h2>
            
            <!-- Tabs -->
            <div class="max-w-4xl mx-auto">
                <div class="flex flex-wrap justify-center mb-8 border-b">
                    <button class="tab-button px-4 py-2 font-semibold text-forward-orange border-b-2 border-forward-orange" data-tab="general">
                        General English
                    </button>
                    <button class="tab-button px-4 py-2 font-semibold text-gray-600 hover:text-forward-orange" data-tab="business">
                        Business English
                    </button>
                    <button class="tab-button px-4 py-2 font-semibold text-gray-600 hover:text-forward-orange" data-tab="grammar">
                        Grammar
                    </button>
                    <button class="tab-button px-4 py-2 font-semibold text-gray-600 hover:text-forward-orange" data-tab="citizenship">
                        US Citizenship Exam
                    </button>
                    <button class="tab-button px-4 py-2 font-semibold text-gray-600 hover:text-forward-orange" data-tab="toefl">
                        TOEFL Exam
                    </button>
                    <button class="tab-button px-4 py-2 font-semibold text-gray-600 hover:text-forward-orange" data-tab="discussion">
                        Issue & Discussion
                    </button>
                </div>

                <!-- Tab Content -->
                <div class="tab-content" id="general">
                    <div class="bg-white p-8 rounded-lg shadow hover-lift-lg">
                        <h3 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-bold mb-4">Side by Side (6 Levels)</h3>
                        <p class="text-gray-700 mb-4">CEFR Levels: A1 - B1+</p>
                        <p class="mb-6">
                            The Side by Side series is a comprehensive English language course that integrates conversation practice, 
                            reading, writing, and listening skills. Perfect for beginners to intermediate learners.
                        </p>
                        
                        <h3 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-bold mb-4">Future (6 Levels)</h3>
                        <p class="text-gray-700 mb-4">CEFR Levels: <A1 - B2</p>
                        <p>
                            Future is a six-level, four-skills course that empowers learners with the academic and workplace 
                            skills they need to get ahead by helping them transition to further education or career training.
                        </p>
                    </div>
                </div>

                <div class="tab-content hidden" id="business">
                    <div class="bg-white p-8 rounded-lg shadow hover-lift-lg">
                        <h3 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-bold mb-4">Business English Program</h3>
                        <p class="mb-6">
                            Master professional communication with our comprehensive business English curriculum. 
                            Topics include presentations, negotiations, email writing, meetings, and industry-specific vocabulary.
                        </p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Business correspondence and email etiquette</li>
                            <li>Presentation skills and public speaking</li>
                            <li>Negotiation tactics and strategies</li>
                            <li>Meeting participation and leadership</li>
                            <li>Report writing and documentation</li>
                            <li>Cross-cultural communication</li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content hidden" id="grammar">
                    <div class="bg-white p-8 rounded-lg shadow hover-lift-lg">
                        <h3 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-bold mb-4">Grammar Focus</h3>
                        <p class="mb-6">
                            Strengthen your foundation with targeted grammar instruction covering all essential structures 
                            of American English, from basic to advanced levels.
                        </p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Verb tenses and aspects</li>
                            <li>Conditionals and modals</li>
                            <li>Passive voice and reported speech</li>
                            <li>Articles and determiners</li>
                            <li>Prepositions and phrasal verbs</li>
                            <li>Complex sentence structures</li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content hidden" id="citizenship">
                    <div class="bg-white p-8 rounded-lg shadow hover-lift-lg">
                        <h3 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-bold mb-4">US Citizenship Test Preparation</h3>
                        <p class="mb-6">
                            Comprehensive preparation for the US naturalization test, including civics questions, 
                            English language requirements, and interview practice.
                        </p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>100 civics questions and answers</li>
                            <li>US history and government</li>
                            <li>Reading and writing vocabulary</li>
                            <li>Speaking test preparation</li>
                            <li>Mock interviews with native speakers</li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content hidden" id="toefl">
                    <div class="bg-white p-8 rounded-lg shadow hover-lift-lg">
                        <h3 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-bold mb-4">TOEFL iBT Preparation</h3>
                        <p class="mb-6">
                            Achieve your target TOEFL score with our comprehensive test preparation program, 
                            covering all four sections of the exam.
                        </p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Reading comprehension strategies</li>
                            <li>Listening skills and note-taking</li>
                            <li>Speaking tasks and templates</li>
                            <li>Integrated and independent writing</li>
                            <li>Practice tests and score analysis</li>
                            <li>Time management techniques</li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content hidden" id="discussion">
                    <div class="bg-white p-8 rounded-lg shadow hover-lift-lg">
                        <h3 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-bold mb-4">Issues & Discussion</h3>
                        <p class="mb-6">
                            Engage in thoughtful discussions about current events, social issues, and cultural topics 
                            while improving your critical thinking and advanced speaking skills.
                        </p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Current events and news analysis</li>
                            <li>Social and environmental issues</li>
                            <li>Technology and innovation</li>
                            <li>Arts, culture, and entertainment</li>
                            <li>Ethics and philosophy</li>
                            <li>Debate and argumentation skills</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Children's Curriculum -->
    <section class="py-16">
        <div class="container max-w-7xl mx-auto px-4">
            <h2 data-aos="fade-up" class="text-3xl font-bold text-center mb-8">CHILDREN'S CURRICULUM</h2>
            <div class="mb-8">
                <img src="/images/homepage/about-us/curriculum-children-video-call.jpg" alt="Children Learning Online" class="w-full max-w-4xl mx-auto rounded-lg shadow-lg" data-aos="zoom-in">
            </div>
            
            <!-- Tabs -->
            <div class="max-w-4xl mx-auto">
                <div class="flex flex-wrap justify-center mb-8 border-b">
                    <button class="child-tab-button px-4 py-2 font-semibold text-forward-orange border-b-2 border-forward-orange" data-tab="listening">
                        Listening
                    </button>
                    <button class="child-tab-button px-4 py-2 font-semibold text-gray-600 hover:text-forward-orange" data-tab="speaking">
                        Speaking
                    </button>
                    <button class="child-tab-button px-4 py-2 font-semibold text-gray-600 hover:text-forward-orange" data-tab="reading">
                        Reading
                    </button>
                    <button class="child-tab-button px-4 py-2 font-semibold text-gray-600 hover:text-forward-orange" data-tab="child-grammar">
                        Grammar
                    </button>
                    <button class="child-tab-button px-4 py-2 font-semibold text-gray-600 hover:text-forward-orange" data-tab="vocabulary">
                        Vocabulary
                    </button>
                </div>

                <!-- Tab Content -->
                <div class="child-tab-content" id="listening">
                    <div class="bg-white p-8 rounded-lg shadow hover-lift-lg">
                        <h3 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-bold mb-4">Smart Listening</h3>
                        <p class="mb-6">
                            Develop strong listening skills through engaging stories, songs, and interactive activities 
                            designed specifically for young learners.
                        </p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Age-appropriate stories and fairy tales</li>
                            <li>Educational songs and rhymes</li>
                            <li>Following instructions and directions</li>
                            <li>Sound recognition and phonics</li>
                            <li>Interactive listening games</li>
                        </ul>
                    </div>
                </div>

                <div class="child-tab-content hidden" id="speaking">
                    <div class="bg-white p-8 rounded-lg shadow hover-lift-lg">
                        <h3 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-bold mb-4">Speaking Skills</h3>
                        <p class="mb-6">
                            Build confidence in speaking English through fun conversations, role-play, and presentations 
                            tailored to children's interests.
                        </p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Basic conversations and greetings</li>
                            <li>Show and tell presentations</li>
                            <li>Role-playing everyday situations</li>
                            <li>Describing pictures and stories</li>
                            <li>Pronunciation practice</li>
                        </ul>
                    </div>
                </div>

                <div class="child-tab-content hidden" id="reading">
                    <div class="bg-white p-8 rounded-lg shadow hover-lift-lg">
                        <h3 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-bold mb-4">Reading Adventures</h3>
                        <p class="mb-6">
                            Discover the joy of reading with carefully selected books and stories that match 
                            your child's reading level and interests.
                        </p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Phonics and sight words</li>
                            <li>Picture books and early readers</li>
                            <li>Reading comprehension activities</li>
                            <li>Story sequencing and retelling</li>
                            <li>Character and plot analysis</li>
                        </ul>
                    </div>
                </div>

                <div class="child-tab-content hidden" id="child-grammar">
                    <div class="bg-white p-8 rounded-lg shadow hover-lift-lg">
                        <h3 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-bold mb-4">Grammar for Kids</h3>
                        <p class="mb-6">
                            Learn grammar naturally through games, songs, and activities that make 
                            understanding English structures fun and easy.
                        </p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Basic sentence structure</li>
                            <li>Present and past tenses</li>
                            <li>Questions and answers</li>
                            <li>Singular and plural forms</li>
                            <li>Simple prepositions</li>
                        </ul>
                    </div>
                </div>

                <div class="child-tab-content hidden" id="vocabulary">
                    <div class="bg-white p-8 rounded-lg shadow hover-lift-lg">
                        <h3 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-bold mb-4">Vocabulary Building</h3>
                        <p class="mb-6">
                            Expand vocabulary through themed units, flashcards, and interactive games 
                            that make learning new words exciting.
                        </p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Family and friends</li>
                            <li>Animals and nature</li>
                            <li>Food and drinks</li>
                            <li>School and hobbies</li>
                            <li>Colors, numbers, and shapes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CEFR Levels -->
    <section class="bg-gray-50 py-16">
        <div class="container max-w-7xl mx-auto px-4">
            <h2 data-aos="fade-up" class="text-3xl font-bold text-center mb-8">CEFR LEVEL GUIDE</h2>
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-white p-6 rounded-lg shadow hover-lift">
                        <h3 class="text-xl font-bold text-forward-orange mb-2">A1-A2 (Beginner)</h3>
                        <p class="text-gray-600">Basic phrases, simple questions, everyday expressions, familiar topics.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow hover-lift">
                        <h3 class="text-xl font-bold text-forward-blue mb-2">B1-B2 (Intermediate)</h3>
                        <p class="text-gray-600">Main ideas, regular interaction, describe experiences, explain opinions.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow hover-lift">
                        <h3 class="text-xl font-bold text-green-600 mb-2">C1-C2 (Advanced)</h3>
                        <p class="text-gray-600">Complex texts, fluent expression, professional and academic use.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-forward-orange py-16">
        <div class="container max-w-7xl mx-auto px-4 text-center">
            <h2 data-aos="fade-up" class="text-3xl md:text-4xl font-bold text-white mb-4">Start Your Learning Journey</h2>
            <p class="text-xl text-white mb-8">Take a free level test and find the perfect curriculum for you</p>
            <a href="{{ url('/sign-up') }}" class="inline-block bg-white hover:bg-gray-100 text-forward-orange font-semibold px-8 py-4 rounded-full transition-all duration-300 transform hover:scale-105">
                Book Free Level Test
            </a>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    // Adult curriculum tabs
    document.querySelectorAll('.tab-button').forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            document.querySelectorAll('.tab-button').forEach(btn => {
                btn.classList.remove('text-forward-orange', 'border-b-2', 'border-forward-orange');
                btn.classList.add('text-gray-600');
            });
            
            // Add active class to clicked button
            button.classList.remove('text-gray-600');
            button.classList.add('text-forward-orange', 'border-b-2', 'border-forward-orange');
            
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });
            
            // Show selected tab content
            const tabId = button.getAttribute('data-tab');
            document.getElementById(tabId).classList.remove('hidden');
        });
    });

    // Children curriculum tabs
    document.querySelectorAll('.child-tab-button').forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            document.querySelectorAll('.child-tab-button').forEach(btn => {
                btn.classList.remove('text-forward-orange', 'border-b-2', 'border-forward-orange');
                btn.classList.add('text-gray-600');
            });
            
            // Add active class to clicked button
            button.classList.remove('text-gray-600');
            button.classList.add('text-forward-orange', 'border-b-2', 'border-forward-orange');
            
            // Hide all tab contents
            document.querySelectorAll('.child-tab-content').forEach(content => {
                content.classList.add('hidden');
            });
            
            // Show selected tab content
            const tabId = button.getAttribute('data-tab');
            document.getElementById(tabId).classList.remove('hidden');
        });
    });
</script>
@endpush