@extends('layouts.template_footer')

@section('layout')
    <div class="absolute w-full h-[48rem] -z-10">
        <div class="relative w-full h-[100%]">
            <img src="{{ asset('assets/images/ubisoft_games.jpg') }}" alt=""
                class="absolute -z-10 opacity-30 -top-20 h-[48rem] w-full object-cover">
            <div class="w-screen h-96 absolute -z-10 bottom-0"
                style="background: linear-gradient(to bottom, transparent, #202020, #202020);"></div>
        </div>
    </div>
    <a href="/">
        <h1 class="ml-16 mt-8 md:ml-32 md:mt-16 text-white font-semibold text-lg md:text-2xl hover:underline">Back to Home</h1>
    </a>

    <div class="mx-16 md:mx-[18%] flex flex-col justify-center items-center text-white mb-16">
        <img src="{{ asset('assets/images/logo/nexus.co_logo.png') }}" alt="Nexus Logo" class="w-48 justify-self-center">

        <x-aboutUs_textBlock>
            <x-slot name="title">About Nexon</x-slot>
            Welcome to <span>Nexus.co<span>, where passion for gaming meets innovation! Our journey began with a shared love
                    for video games and a dream to create experiences that would transport players to new worlds and ignite
                    their imaginations. Today, we stand as a dynamic and creative force in the gaming industry, committed to
                    crafting unforgettable adventures and pushing the boundaries of what's possible in the gaming world.
        </x-aboutUs_textBlock>

        <x-aboutUs_textBlock>
            <x-slot name="title">Our Mission</x-slot>
            At <span>Nexus.co<span>, our mission is clear: to deliver exceptional gaming experiences that captivate players
                    and connect communities. We believe that games have the power to inspire, entertain, and bring people
                    together in ways that few other forms of entertainment can. This is why we are dedicated to developing
                    games that are not just entertaining but also meaningful and immersive.
        </x-aboutUs_textBlock>

        {{--  --}}
        <div class="flex flex-wrap w-full justify-center items-center mb-8">
            <x-aboutUs_point>
                <x-slot name="image_path">{{ asset('assets/images/logo/nexus.co_logo.png') }}</x-slot>
                <x-slot name="main_point">Innovation and Creativity</x-slot>
                Innovation is at the core of everything we do. We're not content with following trends; we're here to set
                them. Our team constantly explores new technologies, gameplay mechanics, and artistic styles to ensure our
                games stand out and offer unique experiences. We take pride in being early adopters of cutting-edge
                technology to make sure our games are on the forefront of the industry.
            </x-aboutUs_point>
            <x-aboutUs_point>
                <x-slot name="main_point">Player-Centric Approach</x-slot>
                At Nexus.co, players are at the heart of our creations. We listen to your feedback, engage with the
                community, and use player insights to improve our games continuously. Your input guides us in making our
                games better, and your enthusiasm fuels our determination to craft games that you'll love and cherish.
            </x-aboutUs_point>
            <x-aboutUs_point>
                <x-slot name="main_point">Community and Engagement</x-slot>
                We believe in building strong, vibrant gaming communities around our titles. Our games are not just
                products; they're living, breathing worlds that grow and evolve with the input of our players. 
                Through events, social media, and forums, we foster connections between players, creating a sense of belonging that
                extends beyond the screen.
            </x-aboutUs_point>
            <x-aboutUs_point>
                <x-slot name="main_point">Quality and Excellence</x-slot>
                Quality is non-negotiable at Nexus.co We hold ourselves to the highest standards, ensuring that our games
                are polished, bug-free, and optimized for the best gaming experience. Our commitment to excellence is
                evident in every aspect of our games, from art and storytelling to gameplay mechanics and performance.
            </x-aboutUs_point>

            <x-aboutUs_point>
                <x-slot name="main_point">The Future</x-slot>
                    The journey has just begun. With a deep-seated passion for gaming, a thirst for innovation, and a
                    commitment to our players, we're excited about what the future holds. Our upcoming projects promise to
                    deliver even more excitement, adventures, and entertainment.
                    <br><br>
                    Thank you for joining us on this incredible gaming adventure. Whether you're a longtime fan or just
                    discovering Nexus.co for the first time, we welcome you to our gaming family and invite you
                    to explore the worlds we create. Together, we'll continue to shape the future of gaming.
            </x-aboutUs_point>

            {{-- <div
                class="relative group rounded-md height w-[80%] h-80 flex flex-col justify-center items-center bg-[#000000] hover:bg-opacity-60 m-4 p-8 pop-out">
                <h1 class="absolute bottom-10 group-hover:static py-1 px-4 my-2 border-b-2 text-xl" style="border-color:#5e8811;">The Future</h1>
                <p class="hidden group-hover:block text-center">
                    The journey has just begun. With a deep-seated passion for gaming, a thirst for innovation, and a
                    commitment to our players, we're excited about what the future holds. Our upcoming projects promise to
                    deliver even more excitement, adventures, and entertainment.
                    <br><br>
                    Thank you for joining us on this incredible gaming adventure. Whether you're a longtime fan or just
                    discovering Nexus.co for the first time, we welcome you to our gaming family and invite you
                    to explore the worlds we create. Together, we'll continue to shape the future of gaming.
                </p>
            </div> --}}
            
        </div>

        <x-aboutUs_textBlock>
            <x-slot name="title">Meet the Team</x-slot>
            Our team is the heart and soul of <span>Nexus.co<span>. We are a diverse group of passionate gamers, talented
                    developers, creative artists, and visionary designers who come together to create magic. With years of
                    industry experience, we combine our skills and expertise to bring your gaming dreams to life. Our
                    commitment to excellence and our unwavering dedication to pushing the boundaries of game design sets us
                    apart in the gaming industry.
        </x-aboutUs_textBlock>

        <div class="flex flex-col sm:flex-row justify-center items-center lg:justify-around w-full my-8">
            <x-aboutUs_team>
                <x-slot name="image_path">"{{ asset('assets/images/Nexus_founder.jpg') }}"</x-slot>
                <x-slot name="position">Founder of Nexus</x-slot>
                <x-slot name="name">Louis Mario Wijaya</x-slot>
            </x-aboutUs_team>

            <x-aboutUs_team>
                <x-slot name="image_path">"{{ asset('assets/images/Nexus_cofounder.jpg') }}"</x-slot>
                <x-slot name="position">Co-Founder of Nexus</x-slot>
                <x-slot name="name">Gerald Gavin Lienardi</x-slot>
            </x-aboutUs_team>

        </div>
    </div>
@endsection
