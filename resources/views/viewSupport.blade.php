@extends('layouts.template_footer')

@section('layout')
<div class="absolute -top-0 w-full" 
{{-- style="background-color: rgba(0, 0, 0, 0.1)" --}}
>
    <a href="/">
        <h1
            class="mb-4 ml-4 mt-4 text-white font-semibold text-xs sm:text-lg sm:mb-8 sm:mt-8 sm:ml-12 hover:animate-bounce">
            Back</h1>
    </a>
</div>
    <div class="container mx-auto max-w-[80%] md:max-w-[70%] lg:max-w-[50%]">
        <!-- Header -->
        <div class="text-center mb-8 mt-12">
            <h1 class="text-4xl font-bold text-white">Support</h1>
            <p class="text-gray-600 text-md md:text-lg">We're here to help you!</p>
        </div>

        <div class="max-w-2xl mb-16 mx-auto w-full">
            <h1 class="text-center text-xl md:text-2xl font-bold mb-2 text-white">Frequently Asked Questions</h1>
            <!-- FAQ items -->
            <x-faq>
                <x-slot name="id">1</x-slot>
                <x-slot name="question">What type of games do you develop?</x-slot>
                We develop a variety of games, including action, adventure, role-playing, and multiplayer games. Check
                our game catalog for more details.
            </x-faq>
            <x-faq>
                <x-slot name="id">2</x-slot>
                <x-slot name="question">How can I purchase and download your games?</x-slot>
                You can purchase and download our games directly from our website or through popular gaming platforms like
                Steam, PlayStation Store, and Xbox Live.
            </x-faq>
            <x-faq>
                <x-slot name="id">3</x-slot>
                <x-slot name="question">Do you offer multiplayer options in your games?</x-slot>
                Yes, many of our games include multiplayer features, allowing you to play with friends and other gamers
                online. Check the game details for specific multiplayer options.
            </x-faq>
            <x-faq>
                <x-slot name="id">4</x-slot>
                <x-slot name="question">What platforms are Nexus.co games available on?</x-slot>
                Our games are available on various platforms, including PC, Xbox, PlayStation, and the Switch (hopefully).
                Check our official website or respective platform stores for the latest releases.
            </x-faq>

            <!-- Add more FAQ items as needed -->
            <!-- Contact Form -->
            <section class="bg-white p-6 rounded shadow-md mb-8 mt-8">
                <h2 class="text-lg sm:text-xl md:text-2xl font-bold mb-4 whitespace-nowrap">Contact Us</h2>
                <form action="#" method="post">
                    <!-- Name Input -->
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2 text-sm sm:text-lg">Name</label>
                        <input type="text" id="name" name="name"
                            class="w-full px-3 py-2 border rounded focus:outline-none focus:shadow-outline" required>
                    </div>

                    <!-- Email Input -->
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-bold mb-2 text-sm sm:text-lg">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-3 py-2 border rounded focus:outline-none focus:shadow-outline" required>
                    </div>

                    <!-- Message Input -->
                    <div class="mb-6">
                        <label for="message" class="block text-gray-700 font-bold mb-2 text-sm sm:text-lg">Message</label>
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
    </div>
@endsection
