@extends('layouts.template_footer')

@section('layout')
    <a href="/">
        <h1 class="ml-8 mt-8 md:ml-32 md:mt-16 text-white font-semibold text-lg md:text-2xl hover:underline">Back</h1>
    </a>
    <div class="container mx-auto max-w-[50%] justify-center items-center flex">
        <!-- Header -->
        <div class="text-center mb-8 mt-8">
            <h1 class="text-2xl font-bold text-white">Community</h1>
            <p class="text-gray-600 text-xs md:text-base whitespace-nowrap">Read Some Articles from the Community!</p>
        </div>
    </div>
    <section class="flex flex-wrap justify-center items-center gap-8 mb-8">
        @foreach ($posts as $post)
            <x-community_postBox>
                <x-slot name="image_path">{{ asset('assets/database/community/' . $post->main_img) }}</x-slot>
                <x-slot name="title"><?=$post->title?></x-slot>
                <x-slot name="author"><?=$post->author?></x-slot>
                <x-slot name="date"><?=$post->date?></x-slot>
                <br>
                <?=$post->description?>
            </x-community_postBox>
        @endforeach
    </section>
@endsection
