<div class="flex-1 max-w-sm min-w-72 flex flex-col items-start gap">
    <div class="rounded-2xl overflow-hidden my-4">
        <img src="{{ $thumbnail }}" alt="{{ $thumbnail_alt }}" class="w-full">
    </div>
    <div class="flex items-center justify-start gap-4 py-5">
        <div class="bg-[#F66C6C] font-bold py-1 px-4 inline rounded-full text-white">
            {{ $tag }}
        </div>
        <div class="text-gray text-lg">{{ $date }}</div>
    </div>
    <h3 class="font-bold text-3xl text-dark">
        {{ $title }}
    </h3>
    <p class="font-normal text-base text-dark py-3">
        {{ $description }}
    </p>

    <a href="" class="flex items-center gap-2 text-lg text-blue font-bold justify-center">
        Read More
        <span class="ml-1 bg-blue text-white rounded-full h-7 w-7 flex items-center justify-center"><i
                class="fas fa-arrow-right text-base"></i></span>
    </a>
</div>
