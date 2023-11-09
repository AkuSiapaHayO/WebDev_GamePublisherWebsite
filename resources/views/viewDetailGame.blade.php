@extends('layouts.template')

@section('layout')
    <section>
        <div class="details">
            <img src="{{ asset('assets/database/background/' . $game->background_image) }}" alt="">
            <div class="details-card">
                <img src="{{ asset('assets/database/game/' . $game->g_image) }}" alt="">
                <div class="content-details">
                    <p class="details-title">{{ $game->title }}</p>
                    <div class="platform1">
                        @php($rating = $game->rating)
                        <img class="rating-img" src="{{asset('assets/database/rating/' . $rating->r_image)}}" alt="">
                        @php($platforms = $game->platforms)
                        @foreach ($platforms as $platform)
                            <img class="platform-img" src="{{ asset('assets/database/platform/' . $platform->p_image) }}" alt="">
                        @endforeach
                    </div>
                    <p class="details-description">{{ $game->description }}</p>
                    <div class="details-genre">
                        @php($genres = $game->genres)
                        @foreach ($genres as $genre)
                            <p class="genre">{{ $genre->name }}</p>
                        @endforeach
                    </div>
                    <p class="details-price"><span>$ </span>{{ $game->price }}</p>
                </div>
            </div>
        </div>
        <div class="details-2">
            <div class="content">
                <div class="content-left">
                    <p class="heading">Details</p>
                    <div class="content-left-left">
                        <div class="left">
                            <p>Title</p>
                            <p>Genre</p>
                            <p>price</p>
                            <p>Available on</p>
                            <p>Rating</p>
                            <p>Release Date</p>
                            @if ($game->franchise != null)
                                {
                                <p>Franchise</p>
                                }
                            @endif
                        </div>
                        <div class="right">
                            <p>{{ $game->title }}</p>
                            <div class="details-2-genre">
                                @php($genres = $game->genres)
                                @foreach ($genres as $genre)
                                    <p>{{ $genre->name }} @if (!$loop->last)
                                            ,
                                        @endif
                                    </p>
                                @endforeach
                            </div>
                            <p><span>$ </span>{{ $game->price }}</p>
                            <div class="platform">
                                @php($platforms = $game->platforms)
                                @foreach ($platforms as $platform)
                                    <p>{{ $platform->name }} @if (!$loop->last)
                                            ,
                                        @endif
                                    </p>
                                @endforeach
                            </div>
                            @php($rating = $game->rating)
                            <p>{{ $rating->name }}</p>
                            <p class="release-date">{{ \Carbon\Carbon::parse($game->releaseDate)->format('F j, Y') }}</p>
                            @if ($game->franchise != null)
                                {
                                @php($franchise = $game->franchise)
                                <p>{{ $franchise->name }}</p>
                                }
                            @endif
                        </div>
                    </div>

                </div>
                <div class="content-right">
                    <p class="heading">System Requirement</p>
                    <div class="content-right-right">
                        <div class="left">
                            <p>Processor</p>
                            <p>Graphics</p>
                            <p>RAM</p>
                            <p>Storage</p>
                        </div>
                        <div class="right">
                            <p>{{ $game->processor }}</p>
                            <p>{{ $game->gpu }}</p>
                            <p>{{ $game->ram }}</p>
                            <p>{{ $game->storage }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
