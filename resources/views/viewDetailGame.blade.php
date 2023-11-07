@extends('layouts.template')

@section('layout')
    <div class="banner">
        <img src="{{asset('assets/database/background/' . $game->background_image)}}" alt="">
        <h1>{{$game->title}}</h1>
    </div>
@endsection