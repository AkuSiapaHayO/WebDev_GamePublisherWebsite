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
        <div class="buttons">
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

    <div class="content-1">
        <div class="content-1-image">
            <img src="{{asset('assets/images/games/ubisoft_games.jpg')}}" alt="">
        </div>
        <div class="content-1-text">
            <h1>WELCOME TO NEXUS ENTERTAINMENT</h1>
            <p>"Dive into the extraordinary world of gaming with us"</p>
        </div>
    </div>
@endsection
