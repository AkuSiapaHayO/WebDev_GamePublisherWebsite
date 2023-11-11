<div class="group relative flex justify-center items-center h-96 w-64 pop-out">
    <div class="absolute left-0 bottom-10 flex flex-col mx-8 group-hover:z-10">
        <h2>{{ $position }}</h2>
        <p>{{ $name }}</p>
    </div>
    <img src={{ $image_path }} alt="" class="absolute h-96 object-cover rounded-lg group-hover:opacity-75 z-0">
</div>