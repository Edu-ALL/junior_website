<section class="splide mt-5 relative overflow-hidden" id="testimonial">
    <div class="splide__track">
        <ul class="splide__list">
            @for ($i = 0; $i < 2; $i++)
                <li class="splide__slide">
                    <h5 class="font-bold text-md mb-4">
                        “My child has flourished since joining EduALL Junior.”
                    </h5>
                    <p class="font-light mb-4">
                        “The nurturing environment, combined with engaging activities, has sparked a
                        newfound
                        curiosity and love for learning. I'm grateful for the dedicated teachers who go
                        above
                        and beyond to support my child's growth and development.”
                    </p>

                    <div class="flex gap-5 flex-nowrap">
                        <div class="w-1/12">
                            <img src="https://placehold.co/80x80" alt="" class="rounded-full">
                        </div>
                        <div class="w-5/12">
                            <h5 class="font-bold text-md text-{{$color}} mb-0">
                                Leslie Chung
                            </h5>
                            <p>
                                Mom of Bryan Chung, 6 y.o
                            </p>
                        </div>
                    </div>
                </li>
            @endfor
        </ul>
    </div>
    <div class="flex gap-2 absolute bottom-[10px] right-[20px]">
        <button class="bg-{{$color}}/30 hover:bg-{{$color}}/50 text-{{$color}} w-[30px] h-[30px] rounded-full"
            onclick="arrowSplide('prev')">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="bg-{{$color}}/30  hover:bg-{{$color}}/50  text-{{$color}} w-[30px] h-[30px] rounded-full"
            onclick="arrowSplide('next')">
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

        function arrowSplide(type) {
            if (type == 'prev') {
                testimonial.go('<')
            } else {
                testimonial.go('>')
            }
        }
    </script>
@endpush