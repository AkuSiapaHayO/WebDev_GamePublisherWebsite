@extends('layouts.template')

@section('layout')
    <section class="content-slideshow">
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
                    < </button>
                        <button id="next"> > </button>
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
    </section>

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
                @foreach ($randomFranchises as $i => $franchise)
                    @if ($i == 0)
                        @php($franchise1 = $franchise)
                    @elseif ($i == 1)
                        @php($franchise2 = $franchise)
                    @elseif ($i == 2)
                        @php($franchise3 = $franchise)
                    @elseif ($i == 3)
                        @php($franchise4 = $franchise)
                    @endif
                @endforeach
                <div class="content-2-card active">
                    <img src="{{ asset('assets/database/franchise/' . $franchise1->f_image) }}" alt="">
                </div>
                <div class="content-2-card">
                    <img src="{{ asset('assets/database/franchise/' . $franchise2->f_image) }}" alt="">
                </div>
                <div class="content-2-card">
                    <img src="{{ asset('assets/database/franchise/' . $franchise3->f_image) }}" alt="">
                </div>
                <div class="content-2-card">
                    <img src="{{ asset('assets/database/franchise/' . $franchise4->f_image) }}" alt="">
                </div>
            </div>

            <div class="content-2-slideshow">
                <div class="content-2-slideshow-slides">
                    <div class="content-2-slideshow-image">
                        <div class="content-2-info">
                            <h3 class="content-2-sub-heading">Franchises</h3>
                            <h1 class="content-2-heading">{{ $franchise1->name }}</h1>
                            <p class="content-2-text">{{ $franchise1->description }}</p>
                            <div class="content-2-cta">
                                <a href="#" class="content-2-btn">Franchise Details</a>
                                <a href="#" class="content-2-btn content-2-secondary-btn">See All Franchises</a>
                            </div>
                        </div>
                    </div>
                    <div class="content-2-slideshow-image">
                        <div class="content-2-info">
                            <h3 class="content-2-sub-heading">Franchises</h3>
                            <h1 class="content-2-heading">{{ $franchise2->name }}</h1>
                            <p class="content-2-text">{{ $franchise2->description }}</p>
                            <div class="content-2-cta">
                                <a href="#" class="content-2-btn">Franchise Details</a>
                                <a href="#" class="content-2-btn content-2-secondary-btn">See All Franchises</a>
                            </div>
                        </div>
                    </div>
                    <div class="content-2-slideshow-image">
                        <div class="content-2-info">
                            <h3 class="content-2-sub-heading">Franchises</h3>
                            <h1 class="content-2-heading">{{ $franchise3->name }}</h1>
                            <p class="content-2-text">{{ $franchise3->description }}</p>
                            <div class="content-2-cta">
                                <a href="#" class="content-2-btn">Franchise Details</a>
                                <a href="#" class="content-2-btn content-2-secondary-btn">See All Franchises</a>
                            </div>
                        </div>
                    </div>
                    <div class="content-2-slideshow-image">
                        <div class="content-2-info">
                            <h3 class="content-2-sub-heading">Franchises</h3>
                            <h1 class="content-2-heading">{{ $franchise4->name }}</h1>
                            <p class="content-2-text">{{ $franchise4->description }}</p>
                            <div class="content-2-cta">
                                <a href="#" class="content-2-btn">Franchise Details</a>
                                <a href="#" class="content-2-btn content-2-secondary-btn">See All Franchises</a>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="content-2-dots">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </section>
@endsection
