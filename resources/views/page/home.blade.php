@extends('layout.user.main')

@section('title', 'EduALL Junior')

@section('content')
    {{-- Banner & Description --}}
    <section class="w-100 bg-secondary pt-[100px] relative z-20">
        <img loading="lazy" src="{{ asset('img/home/element/Jumbotron.webp') }}"
            class="md:w-[200px] w-[80px] absolute top-20 left-0 element-1">
        <div class="main-container">
            <div class="max-w-2xl mx-auto text-center">
                <div class="flex justify-center">
                    <img loading="lazy" src="{{ asset('img/logo/EduALL.webp') }}" alt="EduALL Junior"
                        class="md:w-[200px] w-[150px] flex justify-center">
                </div>
                <h1 class="font-bold md:text-[42px] text-[1.4em] font-primary leading-[1.4] text-center">
                    @php
                        $titleParts = explode('{word}', __('home.banner_title'));
                        $animatedWords = __('home.banner_animated_words');
                    @endphp

                    {!! $titleParts[0] !!}
                    <span class="animated-word-container inline-block text-center text-blue">
                        <span class="animated-word-list inline-block">
                            @foreach ($animatedWords as $word)
                                <span class="animated-word block whitespace-nowrap">{{ $word }}</span>
                            @endforeach
                            <span class="animated-word block">{{ $animatedWords[0] }}</span>
                        </span>
                    </span>
                    {!! $titleParts[1] ?? '' !!}
                </h1>
                <p class="mt-10 md:mt-6 md:max-w-lg md:mx-auto md:text-[20px] text-lg leading-[1.25] md:leading-8">
                    {!! __('home.banner_content') !!}
                </p>
            </div>
            <div class="flex flex-nowrap md:gap-7 gap-1 md:mt-0 mt-[40px] pb-12">
                <div class="h-full w-full md:-mt-[20px] -mt-[20px]">
                    <img loading="lazy" src="{{ asset('img/home/jumbotron.webp') }}" alt="EduALL Junior"
                        class="w-full drop-shadow-md object-center object-contain">
                </div>
            </div>
        </div>
    </section>

    {{-- Our Mission  --}}
    <section class="w-100 bg-blue text-white relative">
        {{-- <img loading="lazy" src="{{ asset('img/home/element/Programs1.webp') }}"
            class="md:w-[150px] w-[80px] absolute top-10 left-0">
        <img loading="lazy" src="{{ asset('img/home/element/Programs2.webp') }}"
            class="md:w-[150px] w-[80px] absolute top-10 right-0"> --}}
        <div class="pt-16 md:py-16">
            <div class="text-center mb-12 md:mb-20">
                <h2 class="font-bold md:text-4xl text-2xl my-5 mb-10 text-[#F9DF6E] underline">
                    {!! __('home.mission_title') !!}
                </h2>
            </div>

            <div class="flex flex-wrap items-center flex-col md:flex-row">
                <!-- Right side image -->
                <div class="md:w-2/5 w-full order-2 md:order-1 md:pb-0 mt-12 md:mt-0">
                    <div class="inset-0 bg-gray-300 flex items-center justify-center">
                        <img loading="lazy" src="{{ asset('img/home/our_mission_web.webp') }}" alt="EduALL Junior"
                            class="w-full object-center object-contain md:block hidden">
                        <img loading="lazy" src="{{ asset('img/home/our_mission_mobile.webp') }}" alt="EduALL Junior"
                            class="w-full object-center object-contain md:hidden pl-8">
                    </div>
                </div>

                <!-- Left side content -->
                <div class="md:w-3/5 w-full px-6 main-container order-1 md:order-2">
                    <div class="mb-12 md:mb-24 md:pr-16">
                        <h3 class="text-xl md:text-3xl font-bold text-white mb-2 md:mb-6">
                            {{ __('home.mission_did_you_know_title') }}</h3>
                        <div class="text-white mb-2 text-base md:text-xl text-justify md:leading-9">
                            {!! __('home.mission_did_you_know_content') !!}
                        </div>
                    </div>

                    <div class="md:pr-16">
                        <h3 class="text-xl md:text-3xl font-bold text-white mb-2 md:mb-6 text-right">
                            {{ __('home.mission_well_prepared_title') }}
                        </h3>
                        <p class="text-white text-right text-base md:text-xl md:leading-9">
                            {!! __('home.mission_well_prepared_content') !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Programs Overview  --}}
    <section class="w-100 bg-red text-white relative">
        <img loading="lazy" src="{{ asset('img/home/element/Programs1.webp') }}"
            class="md:w-[150px] w-[80px] absolute top-10 left-0">
        <img loading="lazy" src="{{ asset('img/home/element/Programs2.webp') }}"
            class="md:w-[150px] w-[80px] absolute top-10 right-0">
        <div class="main-container py-[100px]">
            <div class="text-center mb-5">
                <div class="bg-blue py-1 px-4 mb-8 inline rounded-full text-white">
                    {!! __('home.program_badge') !!}
                </div>
                <h2 class="font-bold md:text-4xl text-2xl my-5 mb-10 text-white">
                    {!! __('home.program_title') !!}
                </h2>
            </div>
            <div class="flex flex-col md:flex-row w-full">
                <div class="flex flex-col items-center justify-center md:w-5/12">
                    <h2 class="font-bold md:text-2xl text-xl my-5 mb-4 md:mb-8 text-white">
                        {!! __('home.program_academic_title') !!}
                    </h2>
                    <div class="flex flex-wrap md:gap-4 gap-2 items-center justify-center">
                        @foreach (__('home.program_academic') as $item)
                            <div class="w-40">
                                <div class="relative pb-[20px] overflow-hidden rounded-[30px]">
                                    <img loading="lazy" src="{{ asset('img/home/' . $item['image']) }}" alt="EduALL Junior"
                                        class="relative rounded-xl mt-4 z-[0] shadow-lg hover:scale-105 transition-all duration-500 w-full">
                                    <div
                                        class="btn-primary hover:border-primary hover:bg-white hover:text-primary transition-all duration-500 h-10 md:h-9 flex items-center justify-center px-1.5 absolute left-[5%] bottom-0 z-[1] w-[90%] text-xs shadow-lg leading-3">
                                        {{ $item['title'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center mt-12 md:mt-0 md:w-6/12">
                    <h2 class="font-bold md:text-2xl text-xl my-5 mb-4 md:mb-8 text-white">
                        {!! __('home.program_content_title') !!}
                    </h2>
                    <div class="flex flex-wrap md:gap-4 gap-2 items-center justify-center">
                        @foreach (__('home.program_content') as $item)
                            <a href="{{ route($item['link'], ['locale' => app()->getLocale()]) }}" class="w-40">
                                <div class="relative pb-[20px] overflow-hidden rounded-[30px]">
                                    <img loading="lazy" src="{{ asset('img/home/' . $item['image']) }}" alt="EduALL Junior"
                                        class="relative rounded-xl mt-4 z-[0] shadow-lg hover:scale-105 transition-all duration-500 w-full">
                                    <div
                                        class="btn-primary hover:border-primary hover:bg-white hover:text-primary transition-all duration-500 h-10 md:h-9 flex items-center justify-center px-1.5 absolute left-[5%] bottom-0 z-[1] w-[90%] text-xs shadow-lg leading-3">
                                        {{ $item['title'] }} →
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Curriculum Overview  --}}
    <section class="w-100 bg-secondary text-white relative">
        <img loading="lazy" src="{{ asset('img/home/element/Jumbotron.webp') }}"
            class="md:w-[200px] w-[80px] absolute bottom-20 right-0 element-1 rotate-180">
        <img loading="lazy" src="{{ asset('img/home/element/LearningJourney.webp') }}"
            class="md:w-[150px] w-[80px] absolute top-10 left-0 rotate-180">
        <div class="main-container py-[100px]">
            <div class="text-center mb-24">
                <div class="bg-blue py-1 px-4 mb-8 inline rounded-full text-white uppercase">
                    {{ __('home.curriculum_overview') }}
                </div>
            </div>
            <div class="curriculum-animation-container relative w-full flex justify-center items-center my-8">
                <!-- Container untuk kedua gambar yang akan digabungkan -->
                <div class="flex flex-col md:flex-row w-full gap-8 justify-center items-center">
                    <!-- Gambar pertama -->
                    <div id="image-left" class="image-container transition-all duration-1000 transform">
                        <img loading="lazy" src="{{ asset('img/home/curriculum_overview_inside.webp') }}"
                            alt="EduALL Junior" class="max-w-72 md:max-w-96 w-full object-center object-contain">
                    </div>

                    <!-- Gambar kedua -->
                    <div id="image-right" class="image-container transition-all duration-1000 transform">
                        <img loading="lazy" src="{{ asset('img/home/curriculum_overview_outside.webp') }}"
                            alt="EduALL Junior" class="max-w-72 md:max-w-96 w-full object-center object-contain">
                    </div>
                </div>

                <!-- Gambar gabungan - awalnya tersembunyi -->
                <div id="image-combined"
                    class="absolute inset-0 flex justify-center items-center opacity-0 transition-opacity duration-1000">
                    <img loading="lazy" src="{{ asset('img/home/curriculum_overview.webp') }}" alt="EduALL Junior"
                        class="max-w-96 md:max-w-[480px] w-full object-center object-contain">
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonial  --}}
    <section class="w-100 bg-secondary relative">
        <div class="flex flex-wrap items-center md:py-0 py-[50px]">
            <div class="w-full md:w-2/5 md:px-0 px-6 mb-4">
                <img loading="lazy" src="{{ asset('img/home/Testimonials_Dummy.webp') }}" alt="EduALL Junior"
                    class="w-full object-cover">
            </div>
            <div class="w-full md:w-3/5 md:px-32 px-6">
                <div class="bg-yellow py-1 px-4 inline rounded-full text-white">
                    {!! __('home.testimonial_badge') !!}
                </div>
                <h2 class="font-bold md:text-4xl text-2xl my-5">
                    {!! __('home.testimonial_title') !!}
                </h2>

                <x-testimonial :color="'blue'" :testi="$testimonial" />
            </div>
        </div>
    </section>

    {{-- Our Event  --}}
    {{-- <section class="w-100 py-[50px] bg-secondary">
        <div class="main-container">
            <div class="flex flex-wrap items-center">
                <div class="w-full md:w-2/5">
                    <div class="bg-red py-1 px-4 inline rounded-full text-white">
                        {!! __('home.event_badge') !!}
                    </div>
                    <h2 class="font-bold md:text-4xl text-2xl mt-5 sm:mb-4">
                        {!! __('home.event_title') !!}
                    </h2>
                </div>
                <div class="w-full md:w-3/5">
                    <p class="font-light text-lg">
                        {!! __('home.event_content') !!}
                    </p>
                    <div class="flex flex-wrap mt-3 font-light text-lg">
                        <span class="p-2">
                            <i class="fas fa-phone me-1 text-primary"></i>
                            +628 111 2323 2342
                        </span>
                        <span class="p-2">
                            <i class="fas fa-envelope me-1 text-primary"></i>
                            hello@edualljunior.com
                        </span>
                    </div>
                </div>
            </div>

            <section class="splide mt-10" id="events">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="relative overflow-hidden rounded-lg shadow-md mb-3">
                                <img loading="lazy" src="{{ asset('img/home/coding-robotic.webp') }}" alt="EduALL Junior"
                                    class="w-full">
                                <div class="font-light mt-2 p-3">
                                    <h6 class="font-bold text-lg">
                                        Coding & Robotics EduFair
                                    </h6>
                                    <ul class="mt-4">
                                        <li>
                                            <i class="fas fa-calendar me-1 text-primary"></i>
                                            12 May 2024 | 14.00 - 16.00
                                        </li>
                                        <li>
                                            <i class="fas fa-map-pin text-primary me-2"></i>
                                            Kids Cafe, Jakarta Barat
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="relative overflow-hidden rounded-lg shadow-md mb-3">
                                <img loading="lazy" src="{{ asset('img/home/outstanding-skill.webp') }}" alt="EduALL Junior"
                                    class="w-full">
                                <div class="font-light mt-2 p-3">
                                    <h6 class="font-bold text-lg">
                                        Finding Your Kid's Outstanding Skill
                                    </h6>
                                    <ul class="mt-4">
                                        <li>
                                            <i class="fas fa-calendar me-1 text-primary"></i>
                                            12 May 2024 | 14.00 - 16.00
                                        </li>
                                        <li>
                                            <i class="fas fa-map-pin text-primary me-2"></i>
                                            Kids Cafe, Jakarta Barat
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="relative overflow-hidden rounded-lg shadow-md mb-3">
                                <img loading="lazy" src="{{ asset('img/home/entrepreneur.webp') }}" alt="EduALL Junior"
                                    class="w-full">
                                <div class="font-light mt-2 p-3">
                                    <h6 class="font-bold text-lg">
                                        Entrepreneur Workshop
                                    </h6>
                                    <ul class="mt-4">
                                        <li>
                                            <i class="fas fa-calendar me-1 text-primary"></i>
                                            12 May 2024 | 14.00 - 16.00
                                        </li>
                                        <li>
                                            <i class="fas fa-map-pin text-primary me-2"></i>
                                            Kids Cafe, Jakarta Barat
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="relative overflow-hidden rounded-lg shadow-md mb-3">
                                <img loading="lazy" src="{{ asset('img/home/coding.webp') }}" alt="EduALL Junior"
                                    class="w-full">
                                <div class="font-light mt-2 p-3">
                                    <h6 class="font-bold text-lg">
                                        Coding & Robotics EduFair
                                    </h6>
                                    <ul class="mt-4">
                                        <li>
                                            <i class="fas fa-calendar me-1 text-primary"></i>
                                            12 May 2024 | 14.00 - 16.00
                                        </li>
                                        <li>
                                            <i class="fas fa-map-pin text-primary me-2"></i>
                                            Kids Cafe, Jakarta Barat
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="flex gap-2 mt-3">
                    <button class="bg-yellow/30 hover:bg-yellow/50 text-yellow w-[30px] h-[30px] rounded-full"
                        onclick="arrowSplide('prev')">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="bg-yellow/30  hover:bg-yellow/50  text-yellow w-[30px] h-[30px] rounded-full"
                        onclick="arrowSplide('next')">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </section>
        </div>
    </section> --}}

    {{-- Schedule Form  --}}
    <x-contact :color="'blue'" />

@endsection
@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Elements untuk animasi
            const container = document.querySelector('.curriculum-animation-container');
            const imageLeft = document.getElementById('image-left');
            const imageRight = document.getElementById('image-right');
            const imageCombined = document.getElementById('image-combined');

            let isAnimated = false;
            const isMobile = window.innerWidth < 768;

            // Buat Intersection Observer untuk mendeteksi kapan elemen terlihat
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    // Jika scrolling ke bawah dan elemen terlihat setidaknya 60%
                    if (entry.isIntersecting && entry.intersectionRatio > 0.6 && !isAnimated) {
                        // Animasi bergabung
                        combineImages();
                        isAnimated = true;
                    }
                    // Jika scrolling ke atas dan elemen tidak lagi terlihat
                    else if (!entry.isIntersecting && isAnimated) {
                        // Animasi memisah
                        separateImages();
                        isAnimated = false;
                    }
                });
            }, {
                root: null,
                rootMargin: '-210px',
                threshold: [0.1, 0.3, 0.6, 0.9]
            });

            // Fungsi untuk menggabungkan gambar
            function combineImages() {
                setTimeout(() => {
                    if (isMobile) {
                        imageLeft.style.transform = 'translateY(50%) scale(1.1)';
                        imageLeft.style.opacity = '0';

                        imageRight.style.transform = 'translateY(-50%) scale(1.1)';
                        imageRight.style.opacity = '0';
                    } else {
                        imageLeft.style.transform = 'translateX(50%) scale(1.1)';
                        imageLeft.style.opacity = '0';

                        imageRight.style.transform = 'translateX(-50%) scale(1.1)';
                        imageRight.style.opacity = '0';
                    }

                    // Tampilkan gambar gabungan
                    setTimeout(() => {
                        imageCombined.style.opacity = '1';
                    }, 500);
                }, 300);
            }

            // Fungsi untuk memisahkan gambar
            function separateImages() {
                imageCombined.style.opacity = '0';

                setTimeout(() => {
                    imageLeft.style.transform = 'translateX(0) translateY(0) scale(1)';
                    imageLeft.style.opacity = '1';

                    imageRight.style.transform = 'translateX(0) translateY(0) scale(1)';
                    imageRight.style.opacity = '1';
                }, 300);
            }

            observer.observe(container);
        });
    </script>
    <script>
        document.querySelectorAll('.accordion-button').forEach(button => {
            button.addEventListener('click', function() {
                // Reset Disabled
                document.querySelectorAll('.accordion-button').forEach(item => {
                    item.removeAttribute('disabled')
                });

                // Add Disabled for Actively button
                this.setAttribute('disabled', true)
            });
        });

        var banners = new Splide('#banners', {
            type: 'loop',
            perPage: 1,
            pagination: false,
            arrows: false,
        });
        banners.mount();

        // var events = new Splide('#events', {
        //     type: 'loop',
        //     perPage: 3,
        //     gap: 20,
        //     padding: {
        //         left: 5,
        //         right: 40
        //     },
        //     breakpoints: {
        //         640: {
        //             perPage: 1,
        //             padding: {
        //                 left: 5,
        //                 right: 20
        //             },
        //             gap: 10,
        //         },
        //     },
        //     pagination: false,
        //     arrows: false,
        // });
        // events.mount();

        // function arrowSplide(type) {
        //     if (type == 'prev') {
        //         events.go('<')
        //     } else {
        //         events.go('>')
        //     }
        // }
    </script>
@endpush
