@extends('layouts.templateAboutUs')

@section('layout')
    <h1 class="ml-4 mt-4 text-white">Back to Home</h1>
    <div class="mx-8 flex flex-col justify-center items-center text-white">
        <img src="{{ asset('assets/images/logo/nexus.co_logo.png') }}" alt="Nexus Logo" class="w-48 justify-self-center">
        <h1>About Nexon</h1>
        <p>Welcome to <span>Nexus.co<span>, where passion for gaming meets innovation! Our journey began with a shared love for video games and a dream to create experiences that would transport players to new worlds and ignite their imaginations. Today, we stand as a dynamic and creative force in the gaming industry, committed to crafting unforgettable adventures and pushing the boundaries of what's possible in the gaming world.</p>
        <h2>Our Mission</h2>
        <p>At <span>Nexus.co<span>, our mission is clear: to deliver exceptional gaming experiences that captivate players and connect communities. We believe that games have the power to inspire, entertain, and bring people together in ways that few other forms of entertainment can. This is why we are dedicated to developing games that are not just entertaining but also meaningful and immersive.</p>
        {{--  --}}
        <div class="flex flex-wrap w-full justify-around items-center">
            <x-aboutUs_point>
                <x-slot name="main_point">main point</x-slot>
                extra info
            </x-aboutUs_point>
            <x-aboutUs_point>
                <x-slot name="main_point">main point</x-slot>
                extra info
            </x-aboutUs_point>
            <x-aboutUs_point>
                <x-slot name="main_point">main point</x-slot>
                extra info
            </x-aboutUs_point>
            <x-aboutUs_point>
                <x-slot name="main_point">main point</x-slot>
                extra info
            </x-aboutUs_point>
        </div>

        <h2>Meet the Team</h2>
        <p>Our team is the heart and soul of <span>Nexus.co<span>. We are a diverse group of passionate gamers, talented developers, creative artists, and visionary designers who come together to create magic. With years of industry experience, we combine our skills and expertise to bring your gaming dreams to life. Our commitment to excellence and our unwavering dedication to pushing the boundaries of game design sets us apart in the gaming industry.</p>
        <div class="flex justify-around w-full">
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
