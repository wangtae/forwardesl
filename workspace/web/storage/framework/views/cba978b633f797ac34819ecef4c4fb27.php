<?php $__env->startSection('title', 'Sign Up - Forward ESL'); ?>

<?php $__env->startSection('content'); ?>
    <\!-- Page Header -->
    <section class="bg-gradient-to-r from-forward-orange to-orange-500 py-16 gradient-animate">
        <div class="container max-w-7xl mx-auto px-4 text-center text-white">
            <h1 data-aos="fade-down" class="text-4xl md:text-5xl font-serif mb-4">SIGN UP</h1>
            <h2 data-aos="fade-up" data-aos-delay="100" class="text-2xl md:text-3xl">Start Your English Journey Today\!</h2>
        </div>
    </section>

    <\!-- Sign Up Form -->
    <section class="py-16">
        <div class="container max-w-7xl mx-auto px-4">
            <div class="max-w-2xl mx-auto">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h3 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-bold mb-6 text-center">Create Your Account</h3>
                    
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2" for="first_name">
                                    First Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="first_name" name="first_name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-forward-orange" required>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2" for="last_name">
                                    Last Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="last_name" name="last_name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-forward-orange" required>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="block text-gray-700 font-semibold mb-2" for="email">
                                Email Address <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-forward-orange" required>
                        </div>
                        
                        <div class="mb-4">
                            <label class="block text-gray-700 font-semibold mb-2" for="phone">
                                Phone Number <span class="text-red-500">*</span>
                            </label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-forward-orange" required>
                        </div>
                        
                        <div class="mb-4">
                            <label class="block text-gray-700 font-semibold mb-2" for="country">
                                Country <span class="text-red-500">*</span>
                            </label>
                            <select id="country" name="country" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-forward-orange" required>
                                <option value="">Select your country</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Chile">Chile</option>
                                <option value="Peru">Peru</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <label class="block text-gray-700 font-semibold mb-2" for="learning_goal">
                                Learning Goal <span class="text-red-500">*</span>
                            </label>
                            <select id="learning_goal" name="learning_goal" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-forward-orange" required>
                                <option value="">Select your goal</option>
                                <option value="general">General English</option>
                                <option value="business">Business English</option>
                                <option value="test_prep">Test Preparation (TOEFL/IELTS)</option>
                                <option value="conversation">Conversation Practice</option>
                                <option value="children">For My Children</option>
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <label class="block text-gray-700 font-semibold mb-2" for="english_level">
                                Current English Level
                            </label>
                            <select id="english_level" name="english_level" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-forward-orange">
                                <option value="">I don't know</option>
                                <option value="beginner">Beginner</option>
                                <option value="elementary">Elementary</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="upper_intermediate">Upper Intermediate</option>
                                <option value="advanced">Advanced</option>
                            </select>
                        </div>
                        
                        <div class="mb-6">
                            <label class="flex items-start">
                                <input type="checkbox" class="mt-1 mr-2" required>
                                <span class="text-sm text-gray-600">
                                    I agree to the Terms of Service and Privacy Policy. I also agree to receive 
                                    email updates about my account and promotional offers.
                                </span>
                            </label>
                        </div>
                        
                        <button type="submit" class="w-full bg-forward-orange hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-full transition-colors">
                            Create Account
                        </button>
                    </form>
                    
                    <div class="mt-6 text-center">
                        <p class="text-gray-600">Already have an account? <a href="#" class="text-forward-orange hover:underline">Log In</a></p>
                    </div>
                </div>
                
                <\!-- Benefits -->
                <div class="mt-8 text-center">
                    <h4 class="text-xl font-semibold mb-4">What happens next?</h4>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="bg-white p-4 rounded-lg shadow">
                            <div class="text-3xl mb-2">📧</div>
                            <p class="text-sm text-gray-600">Receive welcome email with next steps</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow">
                            <div class="text-3xl mb-2">📅</div>
                            <p class="text-sm text-gray-600">Schedule your free level assessment</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow">
                            <div class="text-3xl mb-2">🎯</div>
                            <p class="text-sm text-gray-600">Get matched with the perfect teacher</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <\!-- Statistics -->
    <section class="bg-forward-dark text-white py-12">
        <div class="container max-w-7xl mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold mb-4">Over 1,000,000 Satisfied Students\!</h3>
            <p class="text-lg">Join thousands of successful learners from around the world</p>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/sign-up.blade.php ENDPATH**/ ?>