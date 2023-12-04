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
    <div class="search-form">
        <form action="/viewGames" method="GET">
            <input type="search" placeholder="Search Game..." name="search">
            <button type="submit" class="submit">Search</button>
        </form>
    </div>
    <div class="games-content">

        @foreach ($games as $game)
            <div class="game">
                <a href="{{ route('game.detail', ['game' => $game->id]) }}">
                    <img class="game-image" src="{{ asset('assets/database/game/' . $game->g_image) }}" alt="">
                </a>
                <p class="title">{{ $game->title }}</p>
                <div class="show-genre">
                    @php($genres1 = $game->genres)
                    @foreach ($genres1 as $genre)
                        <p>{{ $genre->name }}</p>
                    @endforeach
                </div>
                <div class="show-platform">
                    @php($platforms1 = $game->platforms)
                    @foreach ($platforms1 as $platform1)
                        <img src="{{ asset('assets/database/platform/' . $platform1->p_image) }}" alt="">
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <div class="custom-pagination">
        <ul class="pagination">
            @if($games->onFirstPage())
                <li class="disabled"><span class="pagination-link">Previous</span></li>
            @else
                <li><a href="{{ $games->previousPageUrl() }}" class="pagination-link">Previous</a></li>
            @endif
    
            @for ($i = 1; $i <= $games->lastPage(); $i++)
                <li class="{{ ($games->currentPage() == $i) ? 'active' : '' }}">
                    <a href="{{ $games->url($i) }}" class="pagination-link">{{ $i }}</a>
                </li>
            @endfor
    
            @if($games->currentPage() < $games->lastPage())
                <li><a href="{{ $games->nextPageUrl() }}" class="pagination-link">Next</a></li>
            @else
                <li class="disabled"><span class="pagination-link">Next</span></li>
            @endif
        </ul>
    </div>
    {{-- <div class="custom-pagination">
        {{ $games->links() }}
    </div> --}}
@endsection
