@extends('layouts.template_footer')

@section('layout')
<a href="/">
    <h1 class="mb-12 ml-16 mt-8 md:ml-32 md:mt-16 text-white font-semibold text-lg md:text-2xl hover:underline">Back to Home</h1>
</a>
    <div class="container mx-auto max-w-[50%]">
        <!-- Header -->
        <div class="text-center mb-8 mt-28">
            <h1 class="text-4xl font-bold text-white">Support</h1>
            <p class="text-gray-600">We're here to help you!</p>
        </div>
        
        <div class="max-w-2xl mb-16 mx-auto min-w-fit">
            <h1 class="text-center text-2xl font-bold mb-2 text-white">Frequently Asked Questions</h1>
            <!-- FAQ items -->
            <div class="mb-4 flex-1">
                <input type="checkbox" id="question1" class="hidden">
                <label for="question1" class="bg-white p-4 rounded-md shadow-md block cursor-pointer">
                    <h2 class="text-lg font-semibold mb-2">Q: What types of games do you develop?</h2>
                    <p class="faq-answer mb-2">A: We develop a variety of games, including action, adventure, role-playing, and multiplayer games. Check our game catalog for more details.</p>
                </label>
            </div>
    
            <div class="mb-4">
                <input type="checkbox" id="question2" class="hidden">
                <label for="question2" class="bg-white p-4 rounded-md shadow-md block cursor-pointer whitespace-normal">
                    <h2 class="text-lg font-semibold mb-2 min-w-fit">Q: How can I purchase and download your games?</h2>
                    <p class="faq-answer mb-2">A: You can purchase and download our games directly from our website or through popular gaming platforms like Steam, PlayStation Store, and Xbox Live.</p>
                </label>
            </div>
    
            <div class="mb-4">
                <input type="checkbox" id="question3" class="hidden">
                <label for="question3" class="bg-white p-4 rounded-md shadow-md block cursor-pointer">
                    <h2 class="text-lg font-semibold mb-2">Q: Do you offer multiplayer options in your games?</h2>
                    <p class="faq-answer mb-2">A: Yes, many of our games include multiplayer features, allowing you to play with friends and other gamers online. Check the game details for specific multiplayer options.</p>
                </label>
            </div>
    
            <!-- Add more FAQ items as needed -->
    
        </div>

        <!-- Contact Form -->
        <section class="bg-white p-6 rounded shadow-md mb-8">
            <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
            <form action="#" method="post">
                <!-- Name Input -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                    <input type="text" id="name" name="name"
                        class="w-full px-3 py-2 border rounded focus:outline-none focus:shadow-outline" required>
                </div>

                <!-- Email Input -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-3 py-2 border rounded focus:outline-none focus:shadow-outline" required>
                </div>

                <!-- Message Input -->
                <div class="mb-6">
                    <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                    <textarea id="message" name="message" rows="4"
                        class="w-full px-3 py-2 border rounded focus:outline-none focus:shadow-outline" required></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                    Submit
                </button>
            </form>
        </section>

    </div>
@endsection
