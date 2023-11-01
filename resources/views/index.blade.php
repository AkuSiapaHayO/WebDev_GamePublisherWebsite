@extends('layouts.template')

@section('layout')
    <div class="slideshow">
        <div class="slideshow-slides">
            <div class="slideshow-image">
                <img src="{{ asset('assets/images/games/assassins_creed_mirage.png') }}" alt="">
            </div>
            <div class="slideshow-image">
                <img src="{{ asset('assets/images/games/anno_1800.jpg') }}" alt="">
            </div>
            <div class="slideshow-image">
                <img src="{{ asset('assets/images/games/avatar.jpg') }}" alt="">
            </div>
            <div class="slideshow-image">
                <img src="{{ asset('assets/images/games/farcry_6.jpg') }}" alt="">
            </div>
            <div class="slideshow-image">
                <img src="{{ asset('assets/images/games/red_dead_redemption_2.jpg') }}" alt="">

            </div>
            <div class="slideshow-image">
                <img src="{{ asset('assets/images/games/warcraft_3_reforged.jpg') }}" alt="">
            </div>
            <div class="slideshow-image">
                <img src="{{ asset('assets/images/games/resident_evil_4_remake.jpg') }}" alt="">
            </div>
        </div>
        <div class="slideshow-buttons">
            <button id="prev">
                << /button>
                    <button id="next">></button>
        </div>
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <section class="content-1">
        <div class="content-1-container">
            <div class="content-1-text">
                <p class="content-1-heading">WELCOME TO NEXUS ENTERTAINMENT</p>
                <p class="content-1-sub-heading">Dive into the extraordinary world of gaming with us</p>
                <a href="">
                    <button class="content-1-buttons">Explore More</button>
                </a>
            </div>
            <div class="content-1-image">
                <img src="{{ asset('assets/images/games/ubisoft_games.jpg') }}" alt="">
            </div>
        </div>
    </section>


    <section class="content-2">
        <div class="content-2-container">
            <div class="content-2-grid">
                <div class="content-2-card">
                    <img src="{{asset('assets/images/games/warcraft.png')}}" alt="">
                    {{-- <h3>Warcraft</h3> --}}
                </div>
                <div class="content-2-card">
                    <img src="{{asset('assets/images/games/resident_evil_logo.png')}}" alt="">
                    {{-- <h3>Resident Evil</h3> --}}
                </div>
                <div class="content-2-card">
                    <img src="{{asset('assets/images/games/farcry_logo.png')}}" alt="">
                    {{-- <h3>Farcry</h3> --}}
                </div>
                <div class="content-2-card">
                    <img src="{{asset('assets/images/games/assassins_creed_logo.png')}}" alt="">
                    {{-- <h3>Assassin's Creed</h3> --}}
                </div>
            </div>
            <div class="content-2-info">
                <h3 class="content-2-sub-heading">Franchises</h3>
                <h1 class="content-2-heading">Warcraft</h1>
                <p class="content-2-text">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi
                    optio quas delectus, commodi vel
                    corporis nam, similique illum vero, expedita quidem repudiandae
                    adipisci pariatur repellat quae aliquam!
                    Ea, ipsa aliquid?
                </p>
                <div class="content-2-cta">
                    <a href="#" class="content-2-btn">Franchise Details</a>
                    <a href="#" class="content-2-btn content-2-secondary-btn">See All Franchises</a>
                </div>
            </div>
        </div>
    </section>
@endsection
