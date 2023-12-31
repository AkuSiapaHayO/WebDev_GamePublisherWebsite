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

    <div class="w-full h-[16rem] -z-10 absolute -top-0 opacity-50">
        <div class="relative w-full h-[100%]">
            <img src="{{ asset('assets/images/Ubisoft_Plus.jpg') }}" alt=""
                class="absolute -z-10 opacity-75 h-full w-full object-cover">
            <div class="w-screen h-1/2 absolute -z-10 -bottom-0"
                style="background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8),  rgb(15, 15, 15, 1));">
            </div>
        </div>
    </div>


    <div class="mx-16 mt-16 flex flex-col justify-center items-center text-white mb-16 md:mx-[18%] sm:mt-32 lg:mt-64">

        <x-aboutUs_textBlock>
            <x-slot name="title">Welcome to Nexon</x-slot>
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
                Through events, social media, and forums, we foster connections between players, creating a sense of
                belonging that
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
