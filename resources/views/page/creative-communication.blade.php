@extends('layout.user.main')

@section('title', 'Creative Communication | EduALL Junior')

@section('content')
    {{-- Banner & Description --}}
    <section class="w-100 bg-purpleBg pt-[100px] relative pb-36">
        {{-- Accent --}}
        <img loading="lazy" src="{{ asset('img/creative-communications/accent/Why_1.webp') }}"
            class="md:w-[150px] w-[80px] absolute top-60 left-0 z-10">
        <img loading="lazy" src="{{ asset('img/creative-communications/accent/Why_2.webp') }}"
            class="md:w-[200px] w-[70px] absolute top-60 right-0 z-10">

        <div class="main-container z-10">
            {{-- Breadcrumb --}}
            <nav class="flex py-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="/programs"
                            class="inline-flex items-center text-lg font-bold text-blue hover:text-orange dark:text-gray-400 dark:hover:text-white">
                            {{ __('communication.programs') }}
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <span class="mx-2 text-lg text-gray">/</span>
                            <span class="ms-1 text-lg font-medium text-gray-500 md:ms-2 dark:text-gray-400">
                                {{ __('communication.creative_communications') }}
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="main-container relative">
            <div class="flex flex-col items-center py-12 max-w-4xl mx-auto gap-5">
                <h1 class="text-4xl md:text-5xl font-bold text-center text-purple">
                    {{ __('communication.comms_title') }}
                </h1>
                <p class="text-lg md:text-xl text-dark text-center leading-8">
                    {{ __('communication.comms_description') }}
                </p>
            </div>
        </div>

        <div class="flex w-full justify-start mt-8 md:mt-24 main-container">
            <div class="w-full md:w-3/5 flex flex-col items-start md:pr-12">
                <div class="bg-purple py-1 px-4 inline rounded-full text-white">
                    {{ __('communication.comms_why_badge') }}
                </div>
                <h2 class="text-2xl font-bold text-dark mt-4">
                    {{ __('communication.comms_why_title') }}
                </h2>
                <p class="font-light text-dark mt-4 text-lg">
                    {{ __('communication.comms_why_content') }}
                </p>
            </div>
        </div>

        <div class="w-full md:w-2/5 absolute right-0 bottom-0 md:top-[45%] top-full md:block hidden z-0">
            <img loading="lazy" src="{{ asset('img/creative-communications/image/Communications_Why.webp') }}" alt=""
                class="w-[45rem] object-cover absolute right-0">
        </div>
    </section>

    {{-- What your kids will learn --}}
    <section class="w-100 bg-purple pt-20 pb-12 md:pt-48 md:pb-20 relative -z-10">
        {{-- Accent --}}
        <img loading="lazy" src="{{ asset('img/creative-communications/accent/WhatYourKidsWillLearn.webp') }}"
            class="md:w-[250px] w-[80px] absolute bottom-0 right-0">

        <div class="flex flex-col justify-center items-start main-container mb-12 relative">
            <h2 class="text-3xl font-bold text-white text-center ">
                {{ __('communication.will_learn_title') }} <span class="text-yellowLight">{{ __('communication.will_learn_highlight') }}</span>
            </h2>

            <p class="font-light text-lg text-center md:text-left text-white mt-4 leading-6 md:w-8/12">
                {{ __('communication.will_learn_description') }}
            </p>

            <div class="flex justify-between items-center flex-wrap gap-6 mt-12">
                @foreach(__('communication.will_learn_content') as $content)
                    <div class="flex items-center justify-between md:min-w-64 min-w-full bg-white rounded-2xl overflow-hidden">
                        <img src="{{ asset('img/creative-communications/image/will-learn/'.$content['image']) }}" alt="{{ $content['image'] }}"
                            class="aspect-square object-cover w-[110px] h-[110px]">
                        <span class="text-lg px-4 font-bold text-[#A024A2] text-center w-full">{{ $content['title'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Testimonial --}}
    <section class="w-100 bg-secondary pb-24 relative">
        {{-- Accent --}}
        <img loading="lazy" src="{{ asset('img/home/Testimonials_Dummy.webp') }}" alt="EduALL Junior"
            class="md:w-[35rem] w-[80%] md:absolute top-0 left-0 relative">
        <div class="main-container flex justify-end">
            <div class="w-full md:w-3/5 md:py-[8rem] py-[2rem]">
                <div class="bg-purple py-1 px-4 inline rounded-full text-white">
                    {!! __('home.testimonial_badge') !!}
                </div>
                <h2 class="font-bold md:text-4xl text-2xl my-5">
                    {!! __('home.testimonial_title') !!}
                </h2>

                <x-testimonial :color="'blue'" :testi="$testimonial" />
            </div>
        </div>

        {{-- <x-gallery /> --}}
    </section>

    {{-- Blog --}}
    {{-- <section class="bg-purpleBg py-24">
        <div class="main-container">
            <div class="flex flex-col md:flex-row justify-between items-center w-full py-8">
                <h2 class="font-bold text-3xl my-2 md:my-0 text-center">
                    {{ __('communication.learn_more_title') }} <span class="text-purple underline decoration-purple/50">{{ __('communication.learn_more_highlight') }}</span>
                </h2>
                <div class="flex flex-row items-center mt-2 md:mt-0">
                    <a href=""
                        class="flex flex-row items-center gap-2 text-lg text-blue font-bold justify-center md:gap-0">
                        {{ __('communication.learn_more_see_more') }}
                        <span
                            class="ml-0 bg-blue text-white rounded-full h-8 w-8 flex items-center justify-center md:ml-2"><i
                                class="fas fa-arrow-right text-base"></i></span>
                    </a>
                </div>
            </div>

            <div class="flex flex-wrap items-start justify-center gap-8">
                @foreach(__('communication.learn_more_content') as $content)
                    <x-blog-card :tag="'COMMUNICATIONS'" :title="$content['title']" :date="'24 July 2024'" :description="$content['description']" :thumbnail="'https://placehold.co/400x300'"
                        :thumbnail_alt="'thumbnail alt'" />
                @endforeach
            </div>
        </div>
    </section> --}}

    {{-- Schedule Form --}}
    <x-contact :color="'purple'" />
@endsection
