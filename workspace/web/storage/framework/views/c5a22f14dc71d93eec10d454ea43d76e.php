<?php $__env->startSection('title', 'Contact Us - Forward ESL'); ?>

<?php $__env->startSection('content'); ?>
    <\!-- Page Header -->
    <section class="bg-gradient-to-r from-forward-orange to-orange-500 py-16 gradient-animate">
        <div class="container max-w-7xl mx-auto px-4 text-center text-white">
            <h1 data-aos="fade-down" class="text-4xl md:text-5xl font-serif mb-4">CONTACT US</h1>
            <h2 data-aos="fade-up" data-aos-delay="100" class="text-2xl md:text-3xl">We're here to help\!</h2>
        </div>
    </section>

    <\!-- Contact Information -->
    <section class="py-16">
        <div class="container max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-5xl mx-auto">
                <\!-- Contact Form -->
                <div>
                    <h3 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-bold mb-6">Send us a message</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2" for="name">
                                Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-forward-orange" required>
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2" for="email">
                                Email <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-forward-orange" required>
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2" for="subject">
                                Subject <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-forward-orange" required>
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2" for="message">
                                Message <span class="text-red-500">*</span>
                            </label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-forward-orange" required></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-forward-orange hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-full transition-colors">
                            Send Message
                        </button>
                    </form>
                </div>
                
                <\!-- Contact Details -->
                <div>
                    <h3 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-bold mb-6">Get in touch</h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-forward-orange mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold mb-1">Email</h4>
                                <a href="mailto:info@forwardesl.com" class="text-gray-600 hover:text-forward-orange">info@forwardesl.com</a>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-forward-orange mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold mb-1">Address</h4>
                                <address class="text-gray-600 not-italic">
                                    One Westbrook Corporate Center<br>
                                    Chicago, Illinois 60154<br>
                                    United States
                                </address>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-forward-orange mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold mb-1">Business Hours</h4>
                                <p class="text-gray-600">
                                    Monday - Friday: 9:00 AM - 6:00 PM CST<br>
                                    Saturday - Sunday: Closed
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 p-6 bg-gray-50 rounded-lg">
                        <h4 class="font-semibold mb-2">Need immediate help?</h4>
                        <p class="text-gray-600 mb-4">Our support team typically responds within 24 hours.</p>
                        <a href="<?php echo e(url('/sign-up')); ?>" class="inline-block bg-forward-orange hover:bg-orange-600 text-white font-semibold px-6 py-2 rounded-full transition-colors">
                            Book a Free Consultation
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/contact-us.blade.php ENDPATH**/ ?>