<section class="splide mt-5 relative overflow-hidden" id="testimonial">
    <div class="splide__track">
        <ul class="splide__list">
            @foreach ($testi as $item)
                <li class="splide__slide">
                    <p class="font-light mb-4">
                        {!! $item->testi_desc !!}
                    </p>

                    <div class="flex gap-5 flex-nowrap">
                        <div class="w-5/12">
                            <h5 class="font-bold text-md text-{{ $color }} mb-0 mt-5">
                                {{ $item->testi_name }}
                            </h5>
                            <p>
                                {!! $item->testi_subtitle !!}
                            </p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="flex gap-2 absolute bottom-[10px] right-[20px]">
        <button
            class="bg-{{ $color }}/30 hover:bg-{{ $color }}/50 text-{{ $color }} w-[30px] h-[30px] rounded-full"
            onclick="arrowSlide('prev')">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button
            class="bg-{{ $color }}/30  hover:bg-{{ $color }}/50  text-{{ $color }} w-[30px] h-[30px] rounded-full"
            onclick="arrowSlide('next')">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
</section>

@push('script')
    <script>
        var testimonial = new Splide('#testimonial', {
            type: 'loop',
            perPage: 1,
            pagination: false,
            arrows: false,
        });
        testimonial.mount();

        function arrowSlide(type) {
            if (type == 'prev') {
                testimonial.go('<')
            } else {
                testimonial.go('>')
            }
        }
    </script>
@endpush
