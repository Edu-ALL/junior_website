@extends('layout.user.main')

@section('title', 'About Us | EduALL Junior')

@section('content')
    {{-- WHO WE ARE --}}
    <section class="w-100 bg-secondary pt-[100px] relative z-20">
        <img loading="lazy" src="{{ asset('img/home/element/Jumbotron.png') }}"
            class="md:w-[200px] w-[80px] absolute top-20 left-0">
        <div class="flex flex-nowrap mt-5 gap-5 pt-[25px] pb-[100px] relative overflow-hidden">
            <div class="w-full md:w-3/5 md:px-32 px-8">
                <div class="bg-red py-1 px-4 inline rounded-full text-white">
                    {!! __('about.who_we_are_badge') !!}
                </div>
                <h2 class="font-bold text-3xl my-4">
                    {!! __('about.who_we_are_title') !!}
                </h2>
                <p>
                    {!! __('about.who_we_are_content') !!}
                </p>
            </div>
            <div class="w-full md:w-2/5 absolute right-0 bottom-40 md:block hidden">
                <img loading="lazy" src="{{ asset('img/about/WhoWeAre.png') }}" alt="" class="w-full">
            </div>
        </div>
    </section>

    {{-- Our Methodology and Pedagogy  --}}
    <section class="w-100 bg-blue md:py-[80px] py-10 relative z-10">
        <div class="flex justify-end mt-10">
            <div class="w-full md:w-2/5 absolute left-0 mt-[3%] md:block hidden">
                <img loading="lazy" src="{{ asset('img/about/OurMethodology.png') }}" alt="" class="w-[100%]">
            </div>
            <div class="w-full md:w-3/5 text-white md:px-32 px-8">
                <div class="mb-10">
                    <h3 class="font-bold md:text-4xl text-2xl mb-10">
                        {!! __('about.methodology_title') !!}
                    </h3>
                    <p class="font-light text-lg mt-3">
                        {!! __('about.methodology_description') !!}
                    </p>

                    <ol class="font-light text-lg mt-6">
                        @foreach (__('about.methodology_content') as $item)
                            <li class="mb-3">
                                <div class="flex items-start">
                                    <img loading="lazy" src="{{ asset('img/about/element/Point.png') }}" alt=""
                                        class="w-4 h-4 me-3 mt-2">
                                    <div class="w-full ps-3">
                                        {!! $item['content'] !!}
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </section>

    {{-- CREST Award Certifications  --}}
    <section class="w-100 bg-yellow/20 relative z-5">
        <img loading="lazy" src="{{ asset('img/about/element/CrestAward_1.png') }}"
            class="md:w-[150px] w-[80px] absolute md:bottom-10 bottom-0 left-0">
        <img loading="lazy" src="{{ asset('img/home/element/LearningJourney.png') }}"
            class="md:w-[150px] w-[80px] absolute md:top-10 top-0 right-0">
        <div class="main-container">
            <div class="flex flex-wrap items-center md:pt-[200px] md:pb-[100px] py-[50px]">
                <div class="w-full px-2 mb-3 mt-5 text-center">
                    <h2 class="font-extrabold md:text-4xl text-2xl mb-10">
                        {!! __('about.certification_title') !!}
                    </h2>

                    <div class="flex justify-center my-10">
                        <img loading="lazy" src="{{ asset('img/logo/CrestAward.png') }}" alt=""
                            class="w-[300px] object-cover">
                    </div>

                    <h5 class="text-xl my-5 font-bold">
                        <i class="fas fa-check-circle me-2 text-primary"></i>
                        {!! __('about.certification_badge') !!}
                    </h5>
                    <p class="text-lg my-5 md:px-[150px] px-6">
                        {!! __('about.certification_description') !!}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Programs Co-Developers  --}}
    <section class="w-100 bg-red text-white relative">
        <img loading="lazy" src="{{ asset('img/about/element/OurPeople.png') }}"
            class="md:w-[300px] w-[80px] absolute top-0 right-0">
        <div class="main-container md:py-[100px] py-[50px]">
            <div class="text-start mb-5">
                <div class="bg-blue py-1 px-4 inline rounded-full text-white">
                    {!! __('about.our_people_badge') !!}
                </div>
                <h2 class="font-bold md:text-4xl text-2xl my-5 mb-10">
                    {!! __('about.our_people_title') !!}
                </h2>
            </div>
            <div class="grid md:grid-cols-2 grid-cols-1 gap-10 justify-center">
                @foreach (__('about.our_people_content') as $item)
                    <div class="relative">
                        <div class="relative overflow-hidden">
                            <img loading="lazy" src="{{ asset('img/about/' . $item['content_image']) }}" alt=""
                                class="relative z-[0] w-full rounded-xl">

                            <i
                                class="fa-solid fa-arrow-up-right-from-square text-yellow text-xl mt-1 absolute top-5 left-5"></i>
                            <div
                                class="md:py-4 py-1 px-20 bg-primary text-yellow rounded-full absolute md:bottom-10 bottom-3 -left-10 md:text-lg text-md font-bold">
                                {{ $item['content_name'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Facilities  --}}
    <section class="w-100 bg-secondary relative">
        <img loading="lazy" src="{{ asset('img/about/element/Facilities.png') }}"
            class="md:w-[200px] w-[80px] absolute top-0 right-0">

        <div class="main-container md:py-[100px] py-[50px]">
            <div class="bg-yellow py-1 px-4 inline rounded-full text-white">
                {!! __('about.facilities_badge') !!}
            </div>
            <h2 class="font-bold md:text-4xl text-2xl mt-4 mb-7">
                {!! __('about.facilities_title') !!}
            </h2>
            <div class="grid md:grid-cols-2 grid-cols-1 gap-10 items-center">
                <div class="relative">
                    <section id="main-slider" class="splide"
                        aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide rounded-lg">
                                    <img loading="lazy" src="https://placehold.co/500x300" alt="">
                                </li>
                                <li class="splide__slide rounded-lg">
                                    <img loading="lazy" src="https://placehold.co/500x400" alt="">
                                </li>
                                <li class="splide__slide rounded-lg">
                                    <img loading="lazy" src="https://placehold.co/500x500" alt="">
                                </li>
                            </ul>
                        </div>
                    </section>

                    <section id="thumbnail-slider" class="splide mt-3"
                        aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide rounded-lg">
                                    <img loading="lazy" src="https://placehold.co/500x300" alt="">
                                </li>
                                <li class="splide__slide rounded-lg">
                                    <img loading="lazy" src="https://placehold.co/500x400" alt="">
                                </li>
                                <li class="splide__slide rounded-lg">
                                    <img loading="lazy" src="https://placehold.co/500x500" alt="">
                                </li>
                            </ul>
                        </div>
                    </section>

                </div>
                <div class="relative">
                    <p class="text-lg my-4">
                        {!! __('about.facilities_header') !!}
                    </p>
                    <ol class="text-lg">
                        @foreach (__('about.facilities_list') as $item)
                            <li class="my-3 flex items-center">
                                <img loading="lazy" src="{{ asset('img/about/element/Point_Blue.png') }}" alt=""
                                    class="w-4 h-4 me-3">
                                {{ $item['content'] }}
                            </li>
                        @endforeach
                    </ol>

                    <p class="text-lg my-4">
                        {!! __('about.facilities_description') !!}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Schedule Form  --}}
    <x-contact :color="'blue'" />
@endsection

@push('script')
    <script>
        var main = new Splide('#main-slider', {
            type: 'fade',
            heightRatio: 0.5,
            pagination: false,
            arrows: false,
            cover: true,
        });

        var thumbnails = new Splide('#thumbnail-slider', {
            rewind: true,
            fixedWidth: '35%',
            fixedHeight: 100,
            isNavigation: true,
            gap: 10,
            focus: 'center',
            pagination: false,
            cover: true,
            arrows: false,
            dragMinThreshold: {
                mouse: 4,
                touch: 10,
            },
            breakpoints: {
                640: {
                    fixedWidth: 150,
                    fixedHeight: 75,
                },
            },
        });

        main.sync(thumbnails);
        main.mount();
        thumbnails.mount();
    </script>
@endpush
