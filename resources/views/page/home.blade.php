@extends('layout.user.main')

@section('title', 'EduALL Junior')

@section('content')
    {{-- Banner & Description --}}
    <section class="w-100 bg-secondary pt-[100px] relative z-20">
        <img loading="lazy" src="{{ asset('img/home/element/Jumbotron.webp') }}"
            class="md:w-[200px] w-[80px] absolute top-20 left-0 element-1">
        <div class="splide" id="banners">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="main-container">
                            <div class="max-w-2xl mx-auto text-center">
                                <div class="flex justify-center">
                                    <img loading="lazy" src="{{ asset('img/logo/EduALL.webp') }}" alt="EduALL Junior"
                                        class="md:w-[200px] w-[150px] flex justify-center">
                                </div>
                                <h1 class="font-bold md:text-[45px] text-[1.5em] font-primary leading-[1.4]">
                                    {!! __('home.banner_title') !!}
                                </h1>
                                <p class="mt-10 md:text-[26px] text-lg leading-[1.25]">
                                    {!! __('home.banner_content') !!}
                                </p>
                            </div>
                            <div class="flex flex-nowrap md:gap-7 gap-1 md:mt-0 mt-[40px]">
                                <div class="w-full md:w-1/4 md:px-4 px-1 md:-mt-[150px] -mt-[20px]">
                                    <img loading="lazy" src="{{ asset('img/home/Jumbotron_1.webp') }}" alt="EduALL Junior"
                                        class="w-full drop-shadow-md">
                                </div>
                                <div class="w-full md:w-1/4 md:px-4 px-1">
                                    <img loading="lazy" src="{{ asset('img/home/Jumbotron_2.webp') }}" alt="EduALL Junior"
                                        class="w-full drop-shadow-md">
                                </div>
                                <div class="w-full md:w-1/4 md:px-4 px-1">
                                    <img loading="lazy" src="{{ asset('img/home/Jumbotron_3.webp') }}" alt="EduALL Junior"
                                        class="w-full drop-shadow-md">
                                </div>
                                <div class="w-full md:w-1/4 md:px-4 px-1 md:-mt-[150px] -mt-[20px]">
                                    <img loading="lazy" src="{{ asset('img/home/Jumbotron_4.webp') }}" alt="EduALL Junior"
                                        class="w-full drop-shadow-md">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex flex-wrap mt-5 gap-5 md:py-[100px] py-[50px] relative overflow-hidden">
            <div class="md:w-3/5 w-full md:px-32 px-8">
                <div class="bg-red py-1 px-4 inline rounded-full text-white">
                    {!! __('home.future_badge') !!}
                </div>
                <h2 class="font-bold md:text-3xl text-2xl mt-3 mb-7">
                    {!! __('home.future_title') !!}
                </h2>
                <p class="text-lg">
                    {!! __('home.future_content') !!}
                </p>
            </div>
            <div class="md:w-2/5 w-full md:absolute relative right-0 md:bottom-0 -bottom-20 flex justify-end">
                <img loading="lazy" src="{{ asset('img/home/KidsFuture.webp') }}" alt="EduALL Junior"
                    class="md:w-[600px] w-[80%]">
            </div>
        </div>
    </section>

    {{-- Why EduALL Junior  --}}
    <section class="w-100 bg-blue py-[100px] relative z-10">
        <img loading="lazy" src="{{ asset('img/home/element/Values.webp') }}"
            class="md:w-[400px] w-[200px] absolute md:-top-20 -top-10 right-0">
        <div class="flex justify-center">
            <div class="text-center">
                <div class="bg-red py-1 px-4 inline rounded-full text-white mb-10">
                    {!! __('home.why_eduall_badge') !!}
                </div>

                <h2 class="md:text-4xl text-2xl font-bold mt-5 text-white mb-[50px]">
                    {!! __('home.why_eduall_title') !!}
                </h2>
            </div>
        </div>

        <div class="flex justify-end mt-10 relative">
            <div class="w-full md:w-2/5 absolute left-0 top-0 md:block hidden">
                <img loading="lazy" src="{{ asset('img/home/Values.webp') }}" alt="EduALL Junior"
                    class="w-full object-cover h-[675px] object-left-top rounded-e-[4rem]">
            </div>
            <div class="w-full md:w-3/5 text-white md:px-32 px-8">
                <div id="accordion-flush" data-accordion="collapse"
                    data-active-classes="dark:bg-gray-900 text-gray-900 dark:text-white"
                    data-inactive-classes="text-gray-500 dark:text-gray-400">
                    @foreach (__('home.why_eduall_content') as $item)
                        <h2 id="accordion-why-heading-{{ $loop->index }}" class="mt-2">
                            <button type="button"
                                class="flex flex-nowrap justify-between items-start gap-3 font-bold md:text-2xl text-xl bg-primary/10 px-5 py-2 rounded-lg"
                                data-accordion-target="#accordion-why-{{ $loop->index }}" aria-expanded="true"
                                aria-controls="accordion-why-{{ $loop->index }}">
                                <div class="text-start text-white">
                                    {!! $item['subtitle'] !!}
                                </div>
                                <svg data-accordion-icon class="w-5 h-5 mt-3 rotate-180 shrink-0 text-white"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-why-{{ $loop->index }}" class="hidden px-5"
                            aria-labelledby="accordion-why-heading-{{ $loop->index }}">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700 mb-5">
                                <p class="font-light text-lg">
                                    {!! $item['content'] !!}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- How it Works  --}}
    <section class="w-100 bg-yellow/20 relative z-5">
        <img loading="lazy" src="{{ asset('img/home/element/LearningJourney.webp') }}"
            class="md:w-[150px] w-[80px] absolute md:top-10 top-0 right-0">
        <div class="main-container">
            <div class="flex flex-wrap items-center md:pt-[200px] md:pb-[100px] py-[50px]">
                <div class="w-full md:w-2/4 px-2 mb-3 mt-5">
                    <div class="bg-blue py-1 px-4 inline rounded-full text-white">
                        {!! __('home.how_it_work_badge') !!}
                    </div>
                    <h2 class="font-bold md:text-4xl text-2xl my-5">
                        {!! __('home.how_it_work_title') !!}
                    </h2>
                    <p class="text-lg mb-5">
                        {!! __('home.how_it_work_paragraph1') !!}
                    </p>
                    <ol class="text-lg">
                        @foreach (__('home.how_it_work_paragraph2') as $key => $item)
                            <li class="mb-3">
                                <div class="flex flex-nowrap">
                                    <div
                                        class="bg-primary text-white w-[25px] h-[25px] p-1 rounded-full flex justify-center items-center">
                                        <span class="fa-solid fa-{{ $key + 1 }}"></span>
                                    </div>
                                    <div class="w-full ps-3">

                                        {!! $item['title'] !!}
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ol>
                    <p class="text-lg mb-5">
                        {!! __('home.how_it_work_paragraph3') !!}
                    </p>
                    <button type="button"
                        class="text-white bg-primary shadow-2xl hover:bg-orange transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-primary/30 font-medium rounded-full text-sm px-5 py-2 text-center me-2 mb-2 dark:bg-primary/60 dark:hover:bg-primary dark:focus:ring-primary">
                        {!! __('home.how_it_work_button') !!}
                    </button>
                </div>
                <div class="w-full md:w-2/4 md:ps-10">
                    <img loading="lazy" src="{{ asset('img/home/LearningJourney.webp') }}" alt="EduALL Junior"
                        class="w-full object-cover">
                </div>
            </div>
        </div>
    </section>

    {{-- Programs  --}}
    <section class="w-100 bg-red text-white relative">
        <img loading="lazy" src="{{ asset('img/home/element/Programs1.webp') }}"
            class="md:w-[150px] w-[80px] absolute top-10 left-0">
        <img loading="lazy" src="{{ asset('img/home/element/Programs2.webp') }}"
            class="md:w-[150px] w-[80px] absolute top-10 right-0">
        <div class="main-container py-[100px]">
            <div class="text-center mb-5">
                <div class="bg-blue py-1 px-4 inline rounded-full text-white">
                    {!! __('home.program_badge') !!}
                </div>
                <h2 class="font-bold md:text-4xl text-2xl my-5 mb-10">
                    {!! __('home.program_title') !!}
                </h2>
            </div>
            <div class="grid md:grid-cols-5 grid-cols-1 md:gap-4 gap-2 justify-center">
                @foreach (__('home.program_content') as $item)
                    <a href="{{ route($item['link'], ['locale' => app()->getLocale()]) }}">
                        <div class="relative pb-[20px] overflow-hidden rounded-[30px]">
                            <img loading="lazy" src="{{ asset('img/home/' . $item['image']) }}" alt="EduALL Junior"
                                class="relative rounded-xl mt-4 z-[0] shadow-lg hover:scale-105 transition-all duration-500 w-full">
                            <div
                                class="btn-primary hover:border-primary hover:bg-white hover:text-primary transition-all duration-500 py-2 absolute left-[5%] bottom-0 z-[1] w-[90%] text-sm shadow-lg">
                                {{ $item['title'] }}
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Testimonial  --}}
    <section class="w-100 bg-secondary">
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
