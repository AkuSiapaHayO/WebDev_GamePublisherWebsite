@extends('layouts.template')

@section('layout')
    <div class="contact">
        <img class="contact-img" src="{{ asset('assets/database/background/assassins_creed_black_flag_background.jpg') }}" alt="">
        <div class="content-contact">
            <h1>Contact Us</h1>
            <div class="all-box">
                <x-contact_block>
                    <x-slot name="image_path">"{{asset('assets/icons/icon_chat.png')}}"</x-slot>
                    <x-slot name="title">Customer Support</x-slot>
                    We're available 24/7 to help with game, shop, and account issues
                </x-contact_block>
                <x-contact_block>
                    <x-slot name="image_path">"{{asset('assets/icons/icon_media.png')}}"</x-slot>
                    <x-slot name="title">Press and Media</x-slot>
                    Looking for press releases, assets, or to get in touch with our public relation team? We can help.
                </x-contact_block>
                <x-contact_block>
                    <x-slot name="image_path">"{{asset('assets/icons/icon_rocket.png')}}"</x-slot>
                    <x-slot name="title">Tours</x-slot>
                    isit Nexus HQ in person! <br> Email:nexustours@gmail.com
                </x-contact_block>
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
