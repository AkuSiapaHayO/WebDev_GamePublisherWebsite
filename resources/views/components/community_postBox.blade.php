<div class="group flex flex-col mx-4 text-white w-80% sm:w-[40%] lg:w-[30%] highlight-box rounded-md p-2 justify-center items-center">
    <img src={{ $image_path }} alt="Image" class="w-[100%] h-32 sm:h-48 md:h- object-cover m-1 rounded-md">
    <div class="flex flex-col">
        <h1 class="line-clamp-1 text-sm group-hover:text-[#5e8811]">{{ $title }}</h1>
        <p class="text-xs">{{ $author }}</p>
        <p class="text-xs">{{ $date }}</p>
        <p class="line-clamp-2 text-xs md:text-sm group-hover:text-[#5e8811]">{{ $slot }}</p>
    </div>
</div>