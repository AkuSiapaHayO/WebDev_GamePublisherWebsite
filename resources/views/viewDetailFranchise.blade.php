@extends('layouts.template')

@section('layout')
    <div class="featured-franchise">
        <img src="{{ asset('assets/database/franchise/background/' . $franchise->background_image) }}" alt="">
        <div class="featured-content">
            <div class="featured-text">
                <p class="title">{{ $franchise->name }}</p>
                <p class="description">{{ $franchise->description }}</p>
            </div>
        </div>
    </div>
    <div class="heading">
        <p>Franchise Games</p>
    </div>
    <div class="franchise-games">
        @foreach ($games as $game)
        <div class="game">
            <a href="{{ route('game.detail', ['game' => $game->id]) }}">
                <img src="{{ asset('assets/database/game/' . $game->g_image) }}" alt="">
            </a>
            <p class="title">{{$game->title}}</p>
        </div>
        @endforeach
    </div>
@endsection
