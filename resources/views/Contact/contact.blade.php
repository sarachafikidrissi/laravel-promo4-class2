@extends('layout.index')


@section('content')
    <!-- Enquiry Section -->
    <section class="relative max-w-7xl mx-auto px-4 py-16">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Enquire About Our <span class="text-red-600">Courses</span>
            </h1>
            <div class="w-20 h-1 bg-red-600 mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                We're here to help you begin your creative journey. Fill out the form below and our team will get back to
                you shortly.
            </p>
        </div>

        <!-- Form Container -->
        <div class="bg-white rounded-xl shadow-2xl overflow-hidden">
            <div class="md:flex">
                <!-- Left Side -->
                <div
                    class="md:w-1/3 bg-gradient-to-br from-red-600 to-red-800 p-10 text-white flex flex-col justify-between">
                    <div>
                        <h2 class="text-2xl font-bold mb-4">Why Enquire With Us?</h2>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-red-200 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Expert guidance from industry professionals</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-red-200 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Personalized course recommendations</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-red-200 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Flexible learning options</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-red-200 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Quick response to all enquiries</span>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-lg font-semibold mb-2">Need immediate assistance?</h3>
                        <p class="text-red-100 mb-2">Call us at +91 7307xxxxxx</p>
                        <p class="text-sm text-red-200">Our team is available 10AM - 6PM, Monday to Saturday</p>
                    </div>
                </div>

                <!-- Right Side - Form -->
                <div class="md:w-2/3 p-10">
                    <form action="/email/store" method="post" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Full Name -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                                <input type="text" name="name" placeholder="John Doe"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500"
                                    required />
                            </div>

                            <!-- Email -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                <input type="email" name="email" placeholder="john@example.com"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500"
                                    required />
                            </div>

                            <!-- Mobile Number -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Mobile Number</label>
                                <input type="text" name="phone" placeholder="+91 9876543210"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500"
                                    required />
                            </div>

                            <!-- Email priority-->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Select Email Priority</label>
                                <select name="email_priority"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 bg-white"
                                    required>
                                    <option value="high" selected>High</option>
                                    <option value="medium">Medium</option>
                                    <option value="low">Low</option>
                                </select>
                            </div>
                        </div>

                        <!-- Message -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
                            <textarea name="message" rows="4" placeholder="Tell us about your interests and goals..."
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500"
                                required></textarea>
                        </div>

                        <!-- Submit -->
                        <div>
                            <button type="submit"
                                class="w-full py-3 px-6 bg-red-600 text-white font-medium rounded-lg shadow-sm hover:bg-red-700 transition duration-300">
                                Send Email
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
