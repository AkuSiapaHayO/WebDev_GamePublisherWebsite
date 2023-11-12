<div class="mb-4 flex-1 w-full">
    <input type="checkbox" id="question{{ $id }}" class="hidden">
    <label for="question{{ $id }}" class="bg-white p-4 rounded-md shadow-md block cursor-pointer">
        <h2 class="text-sm md:text-lg font-semibold mb-2">Q: {{ $question }}</h2>
        <p class="faq-answer mb-2 text-xs md:text-sm">A: {{ $slot }}</p>
    </label>
</div>