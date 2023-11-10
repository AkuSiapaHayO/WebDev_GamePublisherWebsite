@extends('layouts.template')

@section('layout')
    <div class="games-slide">
        <div class="games-wrap">
            <div id="image-track" data-mouse-down-at="0" data-prev-percentage="0">
                @foreach ($randomGames as $game)
                    <a href="{{ route('game.detail', ['game' => $game->id]) }}" class="image-wrap" draggable="false">
                        <img class="image" src="{{ asset('assets/database/background/' . $game->background_image) }}"
                            draggable="false" />
                        <div class="text-wrap">
                            <p class="price"><span>$ </span> {{ $game->price }}</p>
                            <p class="title">{{ $game->title }}</p>
                            <div class="platform-genre">
                                <div class="genres">
                                    @php($genres = $game->genres)
                                    @foreach ($genres as $genre)
                                        <p class="genre">{{ $genre->name }}</p>
                                    @endforeach
                                </div>
                                @php($platforms = $game->platforms)
                                @foreach ($platforms as $platform)
                                    <img class="platform-image"
                                        src="{{ asset('assets/database/platform/' . $platform->p_image) }}" alt="">
                                @endforeach
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="filter">
        <h1 class="heading">Filter By :</h1>
        <form action="{{ route('viewGames') }}" method="get">
            <select class="filter-select" name="genre">
                <option value="">Select Genre</option>
                @foreach ($allGenres as $genre)
                    <option value="{{ $genre->name }}">{{ $genre->name }}</option>
                @endforeach
            </select>

            <select class="filter-select" name="platform">
                <option value="">Select Platform</option>
                @foreach ($allPlatforms as $platform)
                    <option value="{{ $platform->name }}">{{ $platform->name }}</option>
                @endforeach
            </select>

            <select class="filter-select" name="rating">
                <option value="">Select Rating</option>
                @foreach ($allRatings as $rating)
                    <option value="{{ $rating->id }}">{{ $rating->name }}</option>
                @endforeach
            </select>

            <select class="filter-select" name="franchise">
                <option value="">Select Franchise</option>
                @foreach ($allFranchises as $franchise)
                    <option value="{{ $franchise->id }}">{{ $franchise->name }}</option>
                @endforeach
            </select>

            <button class="submit" type="submit">Filter</button>
        </form>
    </div>
    <div class="games-content">
        @foreach ($games as $game)
            <div class="game">
                <a href="{{ route('game.detail', ['game' => $game->id]) }}">
                    <img src="{{ asset('assets/database/game/' . $game->g_image) }}" alt="">
                </a>
                <p class="title">{{ $game->title }}</p>
            </div>
        @endforeach
    </div>
@endsection
