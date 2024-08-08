<section class="splide mt-5 relative overflow-hidden" id="testimonial">
    <div class="splide__track">
        <ul class="splide__list">
            @foreach (__('testimonial.testimonies') as $item)
                <li class="splide__slide">
                    {{-- <h5 class="font-bold text-md mb-4">
                        {{ $item['content'] }}
                    </h5> --}}
                    <p class="font-light mb-4">
                        {{ $item['content'] }}
                    </p>

                    <div class="flex gap-5 flex-nowrap">
                        {{-- <div class="w-1/12">
                            <img loading="lazy" src="{{ asset('img/home/user.png') }}" alt=""
                                class="rounded-full">
                        </div> --}}
                        <div class="w-5/12">
                            <h5 class="font-bold text-md text-{{ $color }} mb-0">
                                {{ $item['name'] }}
                            </h5>
                            <p>
                                {{ $item['mom'] }}
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
