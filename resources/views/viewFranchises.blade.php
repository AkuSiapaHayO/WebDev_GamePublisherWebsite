@extends('layouts.template')

@section('layout')
    <div class="featured-franchise">
        <img src="{{ asset('assets/database/franchise/background/' . $randomFranchise->background_image) }}" alt="">
        <div class="featured-content">
            <div class="featured-text">
                <p class="title">{{ $randomFranchise->name }}</p>
                <p class="description">{{ $randomFranchise->description }}</p>
            </div>
        </div>
    </div>
    <div class="heading">
        <p>All Franchises</p>
    </div>
    <div class="all-franchises">
        @foreach ($franchises as $franchise)
        <a href="{{ route('franchise.detail', ['franchise' => $franchise->id]) }}" class="franchise">
            <img src="{{asset('assets/database/franchise/poster/' . $franchise->poster_image)}}" alt="">
            <p>{{$franchise->name}}</p>
        </a>
        @endforeach
    </div>
@endsection
