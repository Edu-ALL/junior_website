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
                            <img loading="lazy" src="https://placehold.co/400x300" alt="">
                        </div>
                    </li>
                @endfor
            </ul>
        </div>
        <div class="flex gap-2 mt-10">
            <button class="bg-blue/30 hover:bg-blue/50 text-blue w-[30px] h-[30px] rounded-full"
                onclick="arrowSplide('prev')">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="bg-blue/30  hover:bg-blue/50  text-blue w-[30px] h-[30px] rounded-full"
                onclick="arrowSplide('next')">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</div>



@push('script')
    <script>
        var galery = new Splide('#galery', {
            type: 'loop',
            perPage: 4,
            gap: 20,
            padding: {
                left: 5,
                right: 40
            },
            breakpoints: {
                640: {
                    perPage: 1,
                    padding: {
                        left: 5,
                        right: 20
                    },
                    gap: 10,
                },
            },
            pagination: false,
            arrows: false,
        });
        galery.mount();

        function arrowSplide(type) {
            if (type == 'prev') {
                galery.go('<')
            } else {
                galery.go('>')
            }
        }
    </script>
@endpush
