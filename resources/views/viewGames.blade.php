@extends('layouts.template')

@section('layout')
    <div class="games-slide">
        <div class="games-wrap">
            <div id="image-track" data-mouse-down-at="0" data-prev-percentage="0">
                @foreach ($randomGames as $game)
                    <img class="image" src="{{ asset('assets/database/background/' . $game->background_image) }}"
                        draggable="false" />
                    {{-- <div class="image-text">
                        <p>{{$game->title}}</p>
                    </div> --}}
                @endforeach
            </div>
        </div>
    </div>
    <div class="filter">
        <h1 class="heading">Filter By :</h1>
    </div>
    <div class="games-content">
        @foreach ($games as $game)
            <div class="game">
                <img src="{{ asset('assets/database/game/' . $game->g_image) }}" alt="">
                <p class="title">{{ $game->title }}</p>
            </div>
        @endforeach
    </div>
@endsection
