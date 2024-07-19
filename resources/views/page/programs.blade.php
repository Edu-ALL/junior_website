@extends('layout.user.main')

@section('title', 'Programs | EduALL Junior')

@section('content')
    {{-- OUR PROGRAM --}}
    <section class="w-100 bg-secondary pt-[120px] pb-[100px] relative z-20">
        <img loading="lazy" src="{{ asset('img/home/element/Jumbotron.png') }}" class="md:w-[200px] w-[80px] absolute top-20 left-0">
        <img loading="lazy" src="{{ asset('img/program/element/Programs_2.png') }}" class="md:w-[200px] w-[80px] absolute bottom-20 right-0">
        <div class="main-container">
            <div class="text-center md:px-[200px] px-6">
                <h2 class="md:text-4xl text-2xl font-bold ">
                    <span class="text-blue">Research-Informed</span> and <span class="text-blue">Expert-Approved</span> STEAM,
                    Enterpreneurship and Creative Communication Programs for Your
                    Kids
                </h2>
            </div>

            <div class="grid md:grid-cols-3 grid-cols-1 mt-[100px] md:gap-5 gap-0">
                <div class="w-full">
                    <h3 class="md:text-3xl text-xl font-bold mb-6">
                        Our Programs
                    </h3>
                    <p class="text-lg">
                        Inspiring your kids through engaging contextual activities and integrative programs for holistic
                        development and ensuring a love for lifelong learning.
                    </p>
                </div>
                <div class="w-full">
                    <div class="relative">
                        <img loading="lazy" src="{{ asset('img/program/Science.png') }}" alt="" class="w-100">

                        <div class="text-white absolute bottom-5 left-0 p-10">
                            <h5 class="text-xl font-bold mb-3">
                                Science
                            </h5>
                            <p class="font-light text-sm">
                                A thrilling, hands-on exploration through the wonders of the natural world, sparking
                                curiosity and critical thinking in young minds with exciting experiments and discoveries,
                                empowering them to become inventors and innovators.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <div class="relative">
                        <img loading="lazy" src="{{ asset('img/program/Coding.png') }}" alt="" class="w-100">

                        <div class="text-white absolute bottom-5 left-0 p-10">
                            <h5 class="text-xl font-bold mb-3">
                                Creative Coding & Robotics
                            </h5>
                            <p class="font-light text-sm">
                                A thrilling, hands-on exploration through the wonders of the natural world, sparking
                                curiosity and critical thinking in young minds with exciting experiments and discoveries,
                                empowering them to become inventors and innovators.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <div class="relative">
                        <img loading="lazy" src="{{ asset('img/program/Enterpreneurship.png') }}" alt="" class="w-100">

                        <div class="text-white absolute bottom-5 left-0 p-10">
                            <h5 class="text-xl font-bold mb-3">
                                Enterpreneurship
                            </h5>
                            <p class="font-light text-sm">
                                Empowering young minds to be agile and thrive in the fast-paced and ever-changing world
                                through hands-on projects and real-world problem solving
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <div class="relative">
                        <img loading="lazy" src="{{ asset('img/program/VisualArts.png') }}" alt="" class="w-100">

                        <div class="text-white absolute bottom-5 left-0 p-10">
                            <h5 class="text-xl font-bold mb-3">
                                Visual Arts
                            </h5>
                            <p class="font-light text-sm">
                                Think like an artist, create like a designer, act like a human
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <div class="relative">
                        <img loading="lazy" src="{{ asset('img/program/CreativeCommunications.png') }}" alt="" class="w-100">

                        <div class="text-white absolute bottom-5 left-0 p-10">
                            <h5 class="text-xl font-bold mb-3">
                                Creative Communications
                            </h5>
                            <p class="font-light text-sm">
                                Equip young learners with essential skills for effective expression, active listening, and
                                constructive interaction in various contexts, building their confidence to socialize and
                                express ideas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- HOW IT WORKS  --}}
    <section class="w-100 bg-red text-white relative">
        <img loading="lazy" src="{{ asset('img/program/element/HowItWorks.png') }}" class="md:w-[300px] w-[80px] absolute bottom-0 right-0">
        <div class="main-container py-[100px]">
            <div class="text-start mb-5">
                <div class="bg-blue py-1 px-4 inline rounded-full text-white">
                    THE JOURNEY
                </div>
                <h2 class="font-bold text-4xl my-5 mb-10">
                    How
                    <span class="text-yellowLight underline">it works</span>
                </h2>
            </div>
            <div class="grid md:grid-cols-3 grid-cols-1 md:gap-20 gap-10 mt-[70px]">
                <div class="w-full h-[350px] bg-white rounded-2xl text-dark px-10 relative shadow-lg mb-10">
                    <img loading="lazy" src="{{ asset('img/program/element/arrow.png') }}" class="w-20 absolute md:-right-[60px] md:top-40 right-0 -bottom-10 md:rotate-0 rotate-90">
                    <div class="flex w-full justify-center">
                        <img loading="lazy" src="{{ asset('img/program/element/Journey1.png') }}" class="w-20 absolute -top-10">
                    </div>
                    <h3 class="text-2xl font-bold text-primary pt-[80px] mb-4">
                        Contact us to schedule a consultation
                    </h3>
                    <p class="text-lg">
                        Fill in our contact form below and our team will get back to you to schedule a consultation
                    </p>
                </div>
                <div class="w-full h-[350px] bg-white rounded-2xl text-dark px-10 relative shadow-lg mb-10">
                    <img loading="lazy" src="{{ asset('img/program/element/arrow.png') }}" class="w-20 absolute md:-right-[60px] md:top-40 right-0 -bottom-10 md:rotate-0 rotate-90">
                    <div class="flex w-full justify-center">
                        <img loading="lazy" src="{{ asset('img/program/element/Journey2.png') }}" class="w-20 absolute -top-10">
                    </div>
                    <h3 class="text-2xl font-bold text-primary pt-[80px] mb-4">
                        Assessment by in-house educational psychologist
                    </h3>
                    <p class="text-lg">
                        Your kids will be assessed and observed by our in-house educational psychologist to know
                        their passion and interests
                    </p>
                </div>
                <div class="w-full h-[350px] bg-white rounded-2xl text-dark px-10 relative shadow-lg mb-10">
                    <div class="flex w-full justify-center">
                        <img loading="lazy" src="{{ asset('img/program/element/Journey3.png') }}" class="w-20 absolute -top-10">
                    </div>
                    <h3 class="text-2xl font-bold text-primary pt-[80px] mb-4">
                        Personalized program based on assessment and observation result
                    </h3>
                    <p class="text-lg">
                        We will design your kid’s personalized learning journey based on the assessment and observation
                        results
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Schedule Form  --}}
    <x-contact :color="'blue'" />
@endsection
