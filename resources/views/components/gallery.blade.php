<div class="main-container mt-24">
    <h2 class="font-bold text-3xl my-5 text-black">
        Gallery
    </h2>

    <div class="splide mt-10" id="galery">
        <div class="splide__track">
            <ul class="splide__list">
                @for ($i = 0; $i < 6; $i++)
                    <li class="splide__slide">
                        <div class="rounded-2xl overflow-hidden">
                            <img src="https://placehold.co/400x300" alt="">
                        </div>
                    </li>
                @endfor
            </ul>
        </div>
        <div class="flex gap-2 mt-10">
            <button class="bg-purple/30 hover:bg-purple/50 text-purple w-[30px] h-[30px] rounded-full"
                onclick="arrowSplide('prev')">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="bg-purple/30  hover:bg-purple/50  text-purple w-[30px] h-[30px] rounded-full"
                onclick="arrowSplide('next')">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</div>
