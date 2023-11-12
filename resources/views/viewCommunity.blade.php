@extends('layouts.template_footer')

@section('layout')
<div class="absolute -top-0 w-full" 
{{-- style="background-color: rgba(0, 0, 0, 0.1)" --}}
>
    <a href="/">
        <h1
            class="mb-4 ml-4 mt-4 text-white font-semibold text-xs sm:text-lg sm:mb-8 sm:mt-8 sm:ml-12 hover:animate-bounce">
            Back</h1>
    </a>
</div>
    <div class="container mx-auto max-w-[50%] justify-center items-center flex">
        <!-- Header -->
        <div class="text-center mb-8 mt-16">
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
