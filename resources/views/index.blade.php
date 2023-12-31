@extends('layouts.template')

@section('layout')

    <section class="content-3">
        <div class="content-3-slideshow">
            <div class="content-3-slideshow-slides">
                @foreach ($randomGames as $i => $game)
   
   +             <div class="content-3-slideshow-content">
                        <div class="content-3-slideshow-images">
                            <img src="{{ asset('assets/database/background/' . $game->background_image) }}" alt="">
                        </div>
                        <div class="content-3-showcase">
                            <div class="showcase-left">
                                <div class="upper-left">
                                    <p class="content-3-sub-heading">Featured Games</p>
                                    <p class="content-3-heading">{{ $game->title }}</p>
                                </div>
                                <div class="lower-left">
                                    <p class="content-3-text">
                                        {{ $game->description }}
                                    </p>
                                    <a href="{{ route('game.detail', ['game' => $game->id]) }}">
                                        <button class="content-3-details">More Details</button>
                                    </a>
                                </div>
                            </div>
                            <div class="showcase-center">
                                <div class="showcase-image">
                                    <img src="{{ asset('assets/database/game/' . $game->g_image) }}" alt="">
                                </div>
                            </div>
                            <div class="showcase-right">
                                <p class="content-3-sub-heading-2">{{ $i + 1 }}/7</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="content-3-buttons">
                <button id="back">
                    < </button>
                        <button id="forward"> > </button>
            </div>
            <ul class="content-3-dots">
                <li class="active"></li>
                @foreach ($randomGames as $i => $game)
                    @if ($i < 6)
                        <li></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </section>

    <section class="content-1">
        <div class="content-1-container">
            <div class="content-1-text">
                <p class="content-1-heading">NEXUS ENTERTAINMENT</p>
                <p class="content-1-sub-heading">Dive into the extraordinary world of gaming with us</p>
                <a href="/viewGames">
                    <button class="content-1-buttons">Explore More</button>
                </a>
            </div>
            <div class="content-1-image">
                <img src="{{ asset('assets/images/ubisoft_games.jpg') }}" alt="">
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
                                <div class="main-info">
                                    <h3 class="content-2-sub-heading">Franchises</h3>
                                    <h1 class="content-2-heading">{{ $franchise->name }}</h1>
                                    <p class="content-2-text">{{ $franchise->description }}</p>
                                </div>
                                <div class="content-2-cta">
                                    <a href="{{ route('franchise.detail', ['franchise' => $franchise->id]) }}" class="content-2-btn">Franchise Details</a>
                                    <a href="/viewFranchises" class="content-2-btn content-2-secondary-btn">See All Franchises</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <ul class="content-2-dots">
                    <li class="active"></li>

                    @foreach ($randomFranchises as $i => $franchise)
                        @if ($i < 3)
                            <li></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection
