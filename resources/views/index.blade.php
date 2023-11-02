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
            <ul class="content-2-grid">
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
                <li class="content-2-card active">
                    <img src="{{ asset('assets/database/franchise/' . $franchise1->f_image) }}" alt="">
                </li>
                <li class="content-2-card">
                    <img src="{{ asset('assets/database/franchise/' . $franchise2->f_image) }}" alt="">
                </li>
                <li class="content-2-card">
                    <img src="{{ asset('assets/database/franchise/' . $franchise3->f_image) }}" alt="">
                </li>
                <li class="content-2-card">
                    <img src="{{ asset('assets/database/franchise/' . $franchise4->f_image) }}" alt="">
                </li>
            </ul>

            <div class="content-2-slideshow">
                <div class="content-2-slideshow-slides">
                    @foreach ($randomFranchises as $franchise)
                        <div class="content-2-slideshow-image">
                            <div class="content-2-info">
                                <h3 class="content-2-sub-heading">Franchises</h3>
                                <h1 class="content-2-heading">{{ $franchise->name }}</h1>
                                <p class="content-2-text">{{ $franchise->description }}</p>
                                <div class="content-2-cta">
                                    <a href="#" class="content-2-btn">Franchise Details</a>
                                    <a href="#" class="content-2-btn content-2-secondary-btn">See All Franchises</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
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

    <section class="content-3">
        <div class="showcases">
            <div class="showcase-background">
                <img class="background" src="{{ asset('assets/images/games/anno_1800.jpg') }}" alt="">
                <div class="showcase-1">
                    <div class="showcase-left">
                        <div class="upper-left">
                            <p class="sub-heading">Featured Games</p>
                            <p class="heading">Anno 1800</p>
                        </div>
                        <div class="lower-left">
                            <p class="text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad distinctio quibusdam dolorem
                                molestiae cum autem, suscipit ducimus provident odio nulla, repellendus magni eius
                                perspiciatis quidem itaque optio quas, officia voluptas.
                            </p>
                            <a href="#">
                                <button class="content-3-buttons">More Details</button>
                            </a>
                        </div>
                    </div>
                    <div class="showcase-center">
                        <div>
                            <img src="{{ asset('assets/database/game/anno_1800.jpg') }}" alt="">
                        </div>
                        <ul class="content-3-dots">
                            <li class="active"></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="showcase-right">
                        <div class="upper-right">
                            <p class="sub-heading2">1/7</p>
                        </div>
                        <div class="lower-right">
                            <button id="prev-3">
                                < </button>
                                    <button id="next-3"> > </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
