@extends('layout.user.main')

@section('title', 'Blog | EduALL Junior')

@section('content')
    {{-- Banner & Description --}}
    <section class="w-100 bg-primaryBg pt-[100px] relative pb-24">
        {{-- Accent --}}
        <img loading="lazy" src="{{ asset('img/blog/accent/Whatson.png') }}"
            class="md:w-[180px] w-[80px] absolute top-36 left-0 z-10">

        <div class="main-container relative z-20">
            <div class="flex flex-col items-center py-12 max-w-3xl mx-auto gap-5">
                <h1 class="text-4xl md:text-5xl font-bold text-center text-dark">
                    {!! __('blog.title') !!}
                </h1>
            </div>
        </div>


        <div class="flex w-full justify-start mt-8 md:mt-24 main-container flex-col">
            <h2 class="font-bold text-3xl text-center md:text-left underline text-blue decoration-primary/20 mb-8">
                What’s On
            </h2>
            <div class="flex flex-wrap items-center md:py-0 py-[50px]">
                <div class="w-full md:w-1/2">
                    {{-- Testimonial Component --}}
                    <div class="splide mt-5 relative overflow-x-hidden pb-20" id="testimonial">
                        <div class="splide__track">
                            <ul class="splide__list">
                                @for ($i = 0; $i < 2; $i++)
                                    <li class="splide__slide flex flex-col items-start">
                                        <div class="flex items-center gap-4">
                                            <div
                                                class="bg-yellow py-1 px-4 inline rounded-full text-white text-sm font-semibold">
                                                CODING & ROBOTICS
                                            </div>
                                            <span class="text-sm text-dark">24 Apr 2024</span>
                                        </div>
                                        <h2 class="font-bold text-3xl my-5">
                                            Creative Coding & Robotics Bootcamp Summer Holiday 2024
                                            {{-- {{ __('science.testimonials_title') }} <span class="text-blue">{{ __('science.about_us') }}</span> --}}
                                        </h2>
                                        <p class="font-light mb-4">
                                            “The nurturing environment, combined with engaging activities, has sparked a
                                            newfound
                                            curiosity and love for learning. I'm grateful for the dedicated teachers who go
                                            above
                                            and beyond to support my child's growth and development.”
                                        </p>
                                        <a href=""
                                            class="flex items-center gap-2 text-base text-blue font-bold justify-center">
                                            Read More
                                            <span
                                                class="ml-1 bg-blue text-white rounded-full h-5 w-5 flex items-center justify-center"><i
                                                    class="fas fa-arrow-right text-xs"></i></span>
                                        </a>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                        <div class="flex gap-2 absolute -bottom-0 left-0">
                            <button class="bg-primary/30 hover:bg-primary/50 text-primary w-[30px] h-[30px] rounded-full"
                                onclick="arrowSlide('prev')">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="bg-primary/30  hover:bg-primary/50  text-primary w-[30px] h-[30px] rounded-full"
                                onclick="arrowSlide('next')">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full md:w-2/5 absolute right-0 bottom-0 md:top-[40%] top-full md:block hidden z-0">
            <img loading="lazy" src="{{ asset('img/coding-robotics/image/Why.png') }}" alt=""
                class="w-full object-cover">
        </div>
    </section>

    {{-- What your kids will learn --}}
    <section class="w-100 bg-blue pt-20 pb-12 md:pt-24 md:pb-20 relative -z-10">
        <div class="flex justify-start main-container mb-12">
            <h2 class="text-3xl font-bold text-white text-center md:text-left">
                {{ __('blog.featured_article') }}
            </h2>
        </div>

        <div class="flex flex-col md:flex-row main-container gap-12">
            <div class="flex flex-col items-start text-white md:w-2/5">
                <div class="rounded-3xl overflow-hidden mb-8 w-full aspect-square">
                    <img src="https://picsum.photos/500" alt="">
                </div>
                <div class="flex items-center gap-4">
                    <h2 class="bg-purple py-1 px-4 inline rounded-full text-white text-sm font-semibold">
                        CODING & ROBOTICS
                    </h2>
                    <span class="text-sm text-white">24 Apr 2024</span>
                </div>
                <h2 class="font-bold text-3xl my-5">
                    Creative Coding & Robotics Bootcamp Summer Holiday 2024
                </h2>
                <p class="font-light mb-4">
                    “The nurturing environment, combined with engaging activities, has sparked a
                    newfound
                    curiosity and love for learning. I'm grateful for the dedicated teachers who go
                    above
                    and beyond to support my child's growth and development.”
                </p>
                <a href="" class="flex items-center gap-2 text-base text-white font-bold justify-center">
                    Read More
                    <span class="ml-1 bg-white text-blue rounded-full h-5 w-5 flex items-center justify-center"><i
                            class="fas fa-arrow-right text-xs"></i></span>
                </a>
            </div>
            <ul class="flex flex-col md:w-3/5 gap-4">
                <li class="flex items-center gap-4">
                    <div class="rounded-3xl overflow-hidden w-full aspect-square max-w-[200px]">
                        <img src="https://picsum.photos/200" alt="" class="w-full">
                    </div>
                    <div class="flex flex-col items-start text-white">
                        <div class="flex items-center gap-4">
                            <h2 class="bg-purple py-1 px-4 inline rounded-full text-white text-sm font-semibold">
                                CODING & ROBOTICS
                            </h2>
                            <span class="text-sm text-white">24 Apr 2024</span>
                        </div>
                        <h2 class="font-bold text-2xl my-3">
                            Creative Coding & Robotics Bootcamp
                        </h2>
                        <a href="" class="flex items-center gap-2 text-sm text-white font-bold justify-center">
                            Read More
                            <span class="ml-1 bg-white text-blue rounded-full h-5 w-5 flex items-center justify-center"><i
                                    class="fas fa-arrow-right text-xs"></i></span>
                        </a>
                    </div>
                </li>
                <li class="flex items-center gap-4">
                    <div class="rounded-3xl overflow-hidden w-full aspect-square max-w-[200px]">
                        <img src="https://picsum.photos/200" alt="" class="w-full">
                    </div>
                    <div class="flex flex-col items-start text-white">
                        <div class="flex items-center gap-4">
                            <h2 class="bg-purple py-1 px-4 inline rounded-full text-white text-sm font-semibold">
                                CODING & ROBOTICS
                            </h2>
                            <span class="text-sm text-white">24 Apr 2024</span>
                        </div>
                        <h2 class="font-bold text-2xl my-3">
                            Creative Coding & Robotics Bootcamp
                        </h2>
                        <a href="" class="flex items-center gap-2 text-sm text-white font-bold justify-center">
                            Read More
                            <span class="ml-1 bg-white text-blue rounded-full h-5 w-5 flex items-center justify-center"><i
                                    class="fas fa-arrow-right text-xs"></i></span>
                        </a>
                    </div>
                </li>
                <li class="flex items-center gap-4">
                    <div class="rounded-3xl overflow-hidden w-full aspect-square max-w-[200px]">
                        <img src="https://picsum.photos/200" alt="" class="w-full">
                    </div>
                    <div class="flex flex-col items-start text-white">
                        <div class="flex items-center gap-4">
                            <h2 class="bg-purple py-1 px-4 inline rounded-full text-white text-sm font-semibold">
                                CODING & ROBOTICS
                            </h2>
                            <span class="text-sm text-white">24 Apr 2024</span>
                        </div>
                        <h2 class="font-bold text-2xl my-3">
                            Creative Coding & Robotics Bootcamp
                        </h2>
                        <a href="" class="flex items-center gap-2 text-sm text-white font-bold justify-center">
                            Read More
                            <span class="ml-1 bg-white text-blue rounded-full h-5 w-5 flex items-center justify-center"><i
                                    class="fas fa-arrow-right text-xs"></i></span>
                        </a>
                    </div>
                </li>
                <li class="flex items-center gap-4">
                    <div class="rounded-3xl overflow-hidden w-full aspect-square max-w-[200px]">
                        <img src="https://picsum.photos/200" alt="" class="w-full">
                    </div>
                    <div class="flex flex-col items-start text-white">
                        <div class="flex items-center gap-4">
                            <h2 class="bg-purple py-1 px-4 inline rounded-full text-white text-sm font-semibold">
                                CODING & ROBOTICS
                            </h2>
                            <span class="text-sm text-white">24 Apr 2024</span>
                        </div>
                        <h2 class="font-bold text-2xl my-3">
                            Creative Coding & Robotics Bootcamp
                        </h2>
                        <a href="" class="flex items-center gap-2 text-sm text-white font-bold justify-center">
                            Read More
                            <span class="ml-1 bg-white text-blue rounded-full h-5 w-5 flex items-center justify-center"><i
                                    class="fas fa-arrow-right text-xs"></i></span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    {{-- All Blog --}}
    <section class="bg-primaryBg py-24">
        <div class="main-container">
            <div class="flex flex-col md:flex-row justify-between items-center w-full pt-8">
                <h2 class="font-bold text-3xl my-2 md:my-0 text-center">
                    {{ __('blog.latest_article') }}
                </h2>
            </div>
            <div class="flex whitespace-nowrap overflow-x-auto my-4 py-4 gap-2">
                <a href="#" class="bg-primary py-1 px-4 inline rounded-full text-white text-sm">
                    All Categories
                </a>
                <a href="#" class="py-1 px-4 inline rounded-full text-dark text-sm">
                    SCIENCE
                </a>
                <a href="#" class="py-1 px-4 inline rounded-full text-dark text-sm">
                    CODING & ROBOTICS
                </a>
                <a href="#" class="py-1 px-4 inline rounded-full text-dark text-sm">
                    ENTREPRENEURSHIP
                </a>
                <a href="#" class="py-1 px-4 inline rounded-full text-dark text-sm">
                    CREATIVE COMMUNICATION
                </a>
                <a href="#" class="py-1 px-4 inline rounded-full text-dark text-sm">
                    SCIENCE
                </a>
                <a href="#" class="py-1 px-4 inline rounded-full text-dark text-sm">
                    CODING & ROBOTICS
                </a>
                <a href="#" class="py-1 px-4 inline rounded-full text-dark text-sm">
                    ENTREPRENEURSHIP
                </a>
                <a href="#" class="py-1 px-4 inline rounded-full text-dark text-sm">
                    CREATIVE COMMUNICATION
                </a>
            </div>

            <div class="flex flex-wrap items-start justify-center gap-8">
                <x-blog-card :tag="'SCIENCE'" :title="'Trials & Errors for Kids'" :date="'24 July 2024'" :description="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros. Placerat dignissim duis ultrices gravida pharetra rhoncus adipiscing.'" :thumbnail="'https://placehold.co/400x300'"
                    :thumbnail_alt="'thumbnail alt'" />
                <x-blog-card :tag="'SCIENCE'" :title="'Participating in Science Experiments for Educational'" :date="'24 July 2024'" :description="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros. Placerat dignissim duis ultrices gravida pharetra rhoncus adipiscing.'" :thumbnail="'https://placehold.co/400x300'"
                    :thumbnail_alt="'thumbnail alt'" />
                <x-blog-card :tag="'SCIENCE'" :title="'Kids and Adult Science Curriculum'" :date="'24 July 2024'" :description="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros. Placerat dignissim duis ultrices gravida pharetra rhoncus adipiscing.'" :thumbnail="'https://placehold.co/400x300'"
                    :thumbnail_alt="'thumbnail alt'" />
                <x-blog-card :tag="'SCIENCE'" :title="'Trials & Errors for Kids'" :date="'24 July 2024'" :description="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros. Placerat dignissim duis ultrices gravida pharetra rhoncus adipiscing.'" :thumbnail="'https://placehold.co/400x300'"
                    :thumbnail_alt="'thumbnail alt'" />
                <x-blog-card :tag="'SCIENCE'" :title="'Participating in Science Experiments for Educational'" :date="'24 July 2024'" :description="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros. Placerat dignissim duis ultrices gravida pharetra rhoncus adipiscing.'" :thumbnail="'https://placehold.co/400x300'"
                    :thumbnail_alt="'thumbnail alt'" />
                <x-blog-card :tag="'SCIENCE'" :title="'Kids and Adult Science Curriculum'" :date="'24 July 2024'" :description="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros. Placerat dignissim duis ultrices gravida pharetra rhoncus adipiscing.'" :thumbnail="'https://placehold.co/400x300'"
                    :thumbnail_alt="'thumbnail alt'" />
            </div>
        </div>
    </section>

    {{-- Schedule Form  --}}
    <x-contact :color="'blue'" />
@endsection


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
