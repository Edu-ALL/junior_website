@extends('layout.user.main')

@section('title', 'Programs | EduALL Junior')

@section('content')
    {{-- OUR PROGRAM --}}
    <section class="w-100 bg-secondary pt-[120px] pb-[100px] relative z-20">
        <img loading="lazy" src="{{ asset('img/home/element/Jumbotron.png') }}"
            class="md:w-[200px] w-[80px] absolute top-20 left-0">
        <img loading="lazy" src="{{ asset('img/program/element/Programs_2.png') }}"
            class="md:w-[200px] w-[80px] absolute bottom-20 right-0">
        <div class="main-container">
            <div class="text-center md:px-[200px] px-6">
                <h2 class="md:text-4xl text-2xl font-bold ">
                    {!! __('programs.program_header') !!}
                </h2>
            </div>

            <div class="grid md:grid-cols-3 grid-cols-1 mt-[100px] md:gap-5 gap-0">
                <div class="w-full">
                    <h3 class="md:text-3xl text-xl font-bold mb-6">
                        {!! __('programs.our_programs_title') !!}
                    </h3>
                    <p class="text-lg">
                        {!! __('programs.our_programs_description') !!}
                    </p>
                </div>
                @foreach (__('programs.our_programs_content') as $item)
                    <div class="w-full">
                        <div class="relative">
                            <img loading="lazy" src="{{ asset('img/program/' . $item['content_image']) }}" alt=""
                                class="w-100">

                            <div class="text-white absolute bottom-5 left-0 p-10">
                                <h5 class="text-xl font-bold mb-3">
                                    {{ $item['content_title'] }}
                                </h5>
                                <p class="font-light text-sm">
                                    {{ $item['content_description'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- HOW IT WORKS  --}}
    <section class="w-100 bg-red text-white relative">
        <img loading="lazy" src="{{ asset('img/program/element/HowItWorks.png') }}"
            class="md:w-[300px] w-[80px] absolute bottom-0 right-0">
        <div class="main-container py-[100px]">
            <div class="text-start mb-5">
                <div class="bg-blue py-1 px-4 inline rounded-full text-white">
                    {!! __('programs.the_journey_badge') !!}
                </div>
                <h2 class="font-bold text-4xl my-5 mb-10">
                    {!! __('programs.the_journey_title') !!}
                </h2>
            </div>
            <div class="grid md:grid-cols-3 grid-cols-1 md:gap-20 gap-10 mt-[70px]">
                @foreach (__('programs.the_journey_content') as $key => $item)
                    <div class="w-full h-[380px] bg-white rounded-2xl text-dark px-10 relative shadow-lg mb-10">
                        <img loading="lazy" src="{{ asset('img/program/element/arrow.png') }}"
                            class="w-20 absolute md:-right-[60px] md:top-40 right-0 -bottom-10 md:rotate-0 rotate-90 {{ $key == 2 ? 'hidden' : '' }}">
                        <div class="flex w-full justify-center">
                            <img loading="lazy" src="{{ asset('img/program/element/Journey' . ($key + 1) . '.png') }}"
                                class="w-20 absolute -top-10">
                        </div>
                        <h3 class="text-2xl font-bold text-primary pt-[70px] mb-4">
                            {{ $item['header'] }}
                        </h3>
                        <p class="text-lg">
                            {{ $item['content'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Schedule Form  --}}
    <x-contact :color="'blue'" />
@endsection
