@extends('layout.user.main')

@section('title', 'Science | EduALL Junior')

@section('content')
    {{-- Banner & Description --}}
    <section class="w-100 bg-orangeBg pt-[100px] relative pb-36">
        {{-- Accent --}}
        <img loading="lazy" src="{{ asset('img/science/accent/Why.png') }}" class="md:w-[200px] w-[80px] absolute top-60 right-0 z-0">

        <div class="main-container z-10">
            {{-- Breadcrumb --}}
            <nav class="flex py-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="/programs"
                            class="inline-flex items-center text-lg font-bold text-blue hover:text-orange dark:text-gray-400 dark:hover:text-white">
                            {{ __('science.programs') }}
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <span class="mx-2 text-lg text-gray">/</span>
                            <span class="ms-1 text-lg font-medium text-gray-500 md:ms-2 dark:text-gray-400">
                                {{ __('science.science') }}
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="main-container relative">
            <div class="flex flex-col items-center py-12 max-w-4xl mx-auto gap-5">
                <h1 class="text-4xl md:text-5xl font-bold text-center text-orange">
                    {!! __('science.science_title') !!}
                </h1>
                <p class="text-xl text-dark text-center leading-8">
                    {!! __('science.science_description') !!}
                </p>
            </div>
        </div>

        <div class="flex w-full justify-end mt-8 md:mt-24 main-container">
            <div class="w-full md:w-3/5 flex flex-col items-start md:pl-12">
                <div class="bg-yellow py-1 px-4 inline rounded-full text-white">
                    {{ __('science.science_why_badge') }}
                </div>
                <h2 class="text-3xl font-bold text-dark mt-4">
                    {{ __('science.science_why_learn') }}
                </h2>
                <p class="font-light text-dark mt-4 text-lg">
                    {!! __('science.science_why_description') !!}
                </p>
            </div>
        </div>

        <div class="w-full md:w-2/5 absolute left-0 bottom-0 md:top-[55%] top-full md:block hidden">
            <img loading="lazy" src="{{ asset('img/science/image/Why.png') }}" alt="" class="w-full object-cover">
        </div>
    </section>

    {{-- What your kids will learn --}}
    <section class="w-100 bg-orange pt-20 pb-12 md:pt-48 md:pb-20 relative -z-10">
        {{-- Accent --}}
        <img src="{{ asset('img/science/accent/WhatYourKidsWillLearn_1.png') }}"
            class="md:w-[500px] w-[200px] absolute top-0 right-0">
        <img src="{{ asset('img/science/accent/WhatYourKidsWillLearn_2.png') }}"
            class="md:w-[200px] w-[100px] absolute top-32 md:top-60 left-0">
        <img src="{{ asset('img/science/accent/WhatYourKidsWillLearn_3.png') }}"
            class="md:w-[200px] w-[120px] absolute bottom-12 right-0">

        <div class="flex justify-center main-container mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-white text-center ">
                {{ __('science.what_your_kids_learn_title') }}
            </h2>
        </div>

        <div class="relative py-8 md:py-20">
            <div class="w-full md:w-2/5 absolute right-0 bottom-0 top-0 md:block hidden">
                <img loading="lazy" src="{{ asset('img/science/image/WhatYourKidsWillLearn_2.png') }}" alt=""
                    class="w-full h-full object-contain">
            </div>

            <div class="mb-10 main-container text-white w-full flex flex-col items-start">
                <div class="w-full md:w-1/2">
                    <div class="">
                        <div class="w-full">
                            <h3 class="font-bold text-2xl md:text-3xl">
                                {{ __('science.what_your_kids_learn_content.0.title') }}
                            </h3>
                        </div>
                    </div>
                    <p class="font-light text-lg text-white mt-4 leading-6">
                        {{ __('science.what_your_kids_learn_content.0.description') }}
                    </p>
                </div>
            </div>
        </div>

        <div class="relative py-8 md:py-20">
            <div class="w-full md:w-2/5 absolute left-0 bottom-0 top-0 md:block hidden">
                <img loading="lazy" src="{{ asset('img/science/image/WhatYourKidsWillLearn_1.png') }}" alt=""
                    class="w-full h-full object-contain">
            </div>

            <div class="mb-10 main-container text-white w-full flex flex-col items-end">
                <div class="w-full md:w-1/2">
                    <div class="">
                        <div class="w-full">
                            <h3 class="font-bold text-2xl md:text-3xl">
                                {{ __('science.what_your_kids_learn_content.1.title') }}
                            </h3>
                        </div>
                    </div>
                    <p class="font-light text-lg text-white mt-4 leading-6">
                        {{ __('science.what_your_kids_learn_content.1.description') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonial & Gallery --}}
    <section class="w-100 bg-secondary pb-24 relative">
        <img src="{{ asset('img/science/accent/Testimonials.png') }}"
            class="md:w-[200px] w-[80px] absolute top-[45%] right-0">

        <div class="flex flex-wrap items-center md:py-0 py-[50px]">
            <div class="w-full md:w-2/5 md:px-0 px-6 mb-4">
                <img loading="lazy" src="{{ asset('img/home/Testimonials_Dummy.png') }}" alt="" class="w-full object-cover">
            </div>
            <div class="w-full md:w-3/5 md:px-32 px-6">
                <div class="bg-yellow py-1 px-4 inline rounded-full text-white">
                    {{ __('science.testimonials_badge') }}
                </div>
                <h2 class="font-bold text-3xl my-5">
                    {!! __('science.testimonials_title') !!}
                </h2>

                <x-testimonial :color="'blue'" />
            </div>
        </div>

        {{-- <x-gallery /> --}}
    </section>

    {{-- Blog --}}
    {{-- <section class="bg-orangeBg py-24">
        <div class="main-container">
            <div class="flex flex-col md:flex-row justify-between items-center w-full py-8">
                <h2 class="font-bold text-3xl my-2 md:my-0 text-center">
                    {{ __('science.learn_more_title') }} <span
                        class="text-orange underline decoration-orangeLight">{{ __('science.learn_more_highlight') }}</span>
                </h2>
                <div class="flex flex-row items-center mt-2 md:mt-0">
                    <a href=""
                        class="flex flex-row items-center gap-2 text-lg text-blue font-bold justify-center md:gap-0">
                        {{ __('science.learn_more_see_more') }}
                        <span
                            class="ml-0 bg-blue text-white rounded-full h-8 w-8 flex items-center justify-center md:ml-2"><i
                                class="fas fa-arrow-right text-base"></i></span>
                    </a>
                </div>
            </div>

            <div class="flex flex-wrap items-start justify-center gap-8">
                @foreach (__('science.learn_more_content') as $content)
                    <x-blog-card :tag="'SCIENCE'" :title="$content['title']" :date="'24 July 2024'" :description="$content['description']" :thumbnail="'https://placehold.co/400x300'"
                        :thumbnail_alt="'thumbnail alt'" />
                @endforeach
            </div>
        </div>
    </section> --}}

    {{-- Schedule Form --}}
    <x-contact :color="'orange'" />
@endsection
