@extends('layouts.template')

@section('layout')
    <div class="contact">
        <img class="contact-img" src="{{ asset('assets/database/background/assassins_creed_black_flag_background.jpg') }}" alt="">
        <div class="content-contact">
            <h1>Contact Us</h1>
            <div class="all-box">
                <div class="box">
                    <img src="{{asset('assets/icons/icon_chat.png')}}" alt="">
                    <h3>Customer Support</h3>
                    <p>We're available 24/7 to help with game, shop, and account issues</p>
                </div>
                <div class="box">
                    <img src="{{asset('assets/icons/icon_media.png')}}" alt="">
                    <h3>Press and Media</h3>
                    <p>Looking for press releases, assets, or to get in touch with our public relation team? We can help.</p>
                </div>
                <div class="box">
                    <img src="{{asset('assets/icons/icon_rocket.png')}}" alt="">
                    <h3>Tours</h3>
                    <p>Visit Nexus HQ in person! <br> Email:nexustours@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    <div class="social-media">
        <h2>Stay Connected</h2>
        <div class="sosmed-icon">
            <img src="{{asset('assets/icons/icon_twitter.png')}}" alt="">
            <img src="{{asset('assets/icons/icon_instagram.png')}}" alt="">
            <img src="{{asset('assets/icons/icon_facebook.png')}}" alt="">
            <img src="{{asset('assets/icons/icon_youtube.png')}}" alt="">
        </div>
    </div>
@endsection
