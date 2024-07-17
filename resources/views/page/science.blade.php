@extends('layout.user.main')

@section('title', 'Science | EduALL Junior')

@section('content')
    {{-- Banner & Description --}}
    <section class="w-100 bg-orangeBg pt-[100px] relative pb-36">
        {{-- Accent --}}
        <img src="{{ asset('img/science/accent/Why.png') }}" class="md:w-[200px] w-[80px] absolute top-60 right-0 z-0">

        <div class="main-container  z-10">
            {{-- Breadcrumb --}}
            <nav class="flex py-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="/programs"
                            class="inline-flex items-center text-lg font-bold text-blue hover:text-orange dark:text-gray-400 dark:hover:text-white">
                            Programs
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <span class="mx-2 text-lg text-gray">/</span>
                            <span class="ms-1 text-lg font-medium text-gray-500 md:ms-2 dark:text-gray-400">
                                Science
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="main-container relative">
            <div class="flex flex-col items-center py-12 max-w-3xl mx-auto gap-5">
                <h1 class="text-5xl font-bold text-center text-orange">
                    Science
                </h1>
                <p class="text-lg text-dark text-center leading-8">
                    A thrilling, hands-on exploration through the wonders of the natural world, sparking curiosity and
                    critical thinking in young minds with exciting experiments and discoveries, empowering them to become
                    inventors and innovators.
                </p>
            </div>
        </div>


        <div class="flex w-full justify-end mt-8 md:mt-24 main-container">
            <div class="w-full md:w-3/5 flex flex-col items-start md:pl-12">
                <div class="bg-yellow py-1 px-4 inline rounded-full text-white">
                    WHY
                </div>
                <h2 class="text-3xl font-bold text-dark mt-4">
                    Why learn Science?
                </h2>
                <p class="font-light text-dark mt-4">
                    Recent studies highlight the benefit of integrating environmental education into a science program,
                    which will enhance kid’s awareness and promote essential executive functions like problem-solving and
                    cognitive flexibility. Early exposure to science aids in developing spatial reasoning and ignites a
                    passion for inquiry-based learning, which contributes significantly to their intellectual growth.
                    Through engaging hands-on activities and exploration, students not only acquire foundational knowledge
                    about the world but also cultivate critical thinking skills needed for interpreting scientific
                    information in everyday life.
                </p>
            </div>
        </div>

        <div class="w-full md:w-2/5 absolute left-0 bottom-0 md:top-[55%] top-full md:block hidden">
            <img src="{{ asset('img/science/image/Why.png') }}" alt="" class="w-full object-cover">
        </div>
    </section>

    {{-- What your kids will learn --}}
    <section class="w-100 bg-orange pt-20 pb-12 md:pt-48 md:pb-20 relative -z-10">
        {{-- Accent --}}
        <img src="{{ asset('img/science/accent/WhatYourKidsWillLearn_1.png') }}" class="md:w-[500px] w-[200px] absolute top-0 right-0">
        <img src="{{ asset('img/science/accent/WhatYourKidsWillLearn_2.png') }}" class="md:w-[200px] w-[100px] absolute top-32 md:top-60 left-0">
        <img src="{{ asset('img/science/accent/WhatYourKidsWillLearn_3.png') }}" class="md:w-[200px] w-[120px] absolute bottom-12 right-0">

        <div class="flex justify-center main-container mb-12">
            <h2 class="text-3xl font-bold text-white text-center ">
                What your kids <span class="text-yellowLight underline">will learn</span>
            </h2>
        </div>

        <div class="relative py-8 md:py-20">
            <div class="w-full md:w-2/5 absolute right-0 bottom-0 top-0 md:block hidden">
                <img src="{{ asset('img/science/image/WhatYourKidsWillLearn_2.png') }}" alt=""
                    class="w-full h-full object-contain">
            </div>

            <div class="mb-10 main-container text-white w-full flex flex-col items-start">
                <div class="w-full md:w-1/2">
                    <div class="">
                        <div class="w-full">
                            <h3 class="font-bold text-2xl">
                                Engaging Explorations and Discoveries into the sciences of the daily lives and environment
                            </h3>
                        </div>
                    </div>
                    <p class="font-light text-base text-white mt-4 leading-6">
                        EduALL Junior's Science Program provides an exciting after-school opportunity designed for kids aged
                        5-12. Through hands-on experiments like observing natural phenomena to creating simple chemical
                        reactions, students will explore various scientific concepts. Moreover, interactive discussions on
                        topics like ecosystems and physical sciences will foster curiosity and a profound understanding of
                        foundational science principles.
                    </p>
                </div>
            </div>
        </div>

        <div class="relative py-8 md:py-20">
            <div class="w-full md:w-2/5 absolute left-0 bottom-0 top-0 md:block hidden">
                <img src="{{ asset('img/science/image/WhatYourKidsWillLearn_1.png') }}" alt=""
                    class="w-full h-full object-contain">
            </div>

            <div class="mb-10 main-container text-white w-full flex flex-col items-end">
                <div class="w-full md:w-1/2">
                    <div class="">
                        <div class="w-full">
                            <h3 class="font-bold text-2xl">
                                Progressive Curriculum with Real-World Application
                            </h3>
                        </div>
                    </div>
                    <p class="font-light text-base text-white mt-4 leading-6">
                        Structured into age-appropriate levels, each session builds upon kids' knowledge progressively. With
                        a focus on real-world observations and applications, our program integrates classroom learning with
                        practical experiences that are authentic and relevant such as experimenting with renewable energy
                        sources and exploring environmental sciences. Through inquiry-based learning and interactive
                        activities, kids not only grasp scientific concepts but also develop critical thinking,
                        problem-solving, and collaboration skills essential for success in today's world.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonial  --}}
    <section class="w-100 bg-secondary pb-24 relative">
        {{-- Accent --}}
        <img src="{{ asset('img/science/accent/Testimonials.png') }}" class="md:w-[200px] w-[80px] absolute top-[45%] right-0">

        <div class="flex flex-wrap items-center md:py-0 py-[50px]">
            <div class="w-full md:w-2/5 md:px-0 px-6 mb-4">
                <img src="{{ asset('img/home/Testimonials_Dummy.png') }}" alt="" class="w-full object-cover">
            </div>
            <div class="w-full md:w-3/5 md:px-32 px-6">
                <div class="bg-yellow py-1 px-4 inline rounded-full text-white">
                    TESTIMONIALS
                </div>
                <h2 class="font-bold text-3xl my-5">
                    What parents say <span class="text-blue">about us</span>
                </h2>

                {{-- Testimonial Component  --}}
                <x-testimonial :color="'blue'" />
            </div>
        </div>

        <x-gallery />
    </section>

    {{-- Blog --}}
    <section class="bg-orangeBg py-24">
        <div class="main-container">
            <div class="flex flex-col md:flex-row justify-between items-center w-full py-8">
                <h2 class="font-bold text-3xl my-2 md:my-0 text-center">
                    Learn more about <span class="text-orange underline decoration-orangeLight">Science</span>
                </h2>
                <div class="flex flex-row items-center mt-2 md:mt-0">
                    <a href=""
                        class="flex flex-row items-center gap-2 text-lg text-blue font-bold justify-center md:gap-0">
                        See More Blogs
                        <span
                            class="ml-0 bg-blue text-white rounded-full h-8 w-8 flex items-center justify-center md:ml-2"><i
                                class="fas fa-arrow-right text-base"></i></span>
                    </a>
                </div>
            </div>

            <div class="flex flex-wrap items-start justify-center gap-8">
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
    <x-contact :color="'orange'" />
@endsection


@push('script')
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