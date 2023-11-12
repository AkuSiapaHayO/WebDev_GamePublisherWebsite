@extends('layouts.template_footer')

@section('layout')
    <a href="/">
        <h1 class="mb-12 ml-16 mt-8 md:ml-32 md:mt-16 text-white font-semibold text-lg md:text-2xl hover:underline">Back to
            Home</h1>
    </a>
    <div class="container mx-auto max-w-[50%]">
        <!-- Header -->
        <div class="text-center mb-8 mt-28">
            <h1 class="text-4xl font-bold text-white">Community</h1>
            <p class="text-gray-600">Read Some Articles from the Community!</p>
        </div>
    </div>
    <section class="flex flex-wrap justify-center items-center gap-4">
        @foreach ($posts as $post)
            <x-community_postBox>
                <x-slot name="image_path">{{ asset('assets/database/community/' . $post->main_img) }}</x-slot>
                <x-slot name="title"><?=$post->title?></x-slot>
                <x-slot name="author"><?=$post->author?></x-slot>
                <x-slot name="date"><?=$post->date?></x-slot>
            </x-community_postBox>
        @endforeach
    </section>
@endsection
