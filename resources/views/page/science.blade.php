@extends('layout.user.main')

@section('title', 'Science | EduALL Junior')

@section('content')
    {{-- Banner & Description --}}
    <section class="w-100 bg-orangeBg pt-[100px] pb-36">
        <div class="main-container">
            {{-- Breadcrumb --}}
            <nav class="flex py-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="/programs"
                            class="inline-flex items-center text-lg font-bold text-purple hover:text-orange dark:text-gray-400 dark:hover:text-white">
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

        <div class="flex flex-col items-center py-12 max-w-4xl mx-auto gap-5">
            <h1 class="text-5xl font-bold text-center text-orange">
                Science
            </h1>
            <p class="text-xl text-dark text-center leading-8">
                A thrilling, hands-on exploration through the wonders of the natural world, sparking curiosity and critical
                thinking in young minds with exciting experiments and discoveries, empowering them to become inventors and
                innovators.
            </p>
        </div>

        <div class="flex w-full justify-end mt-24 main-container">
            <div class="w-3/5 flex flex-col items-start pl-12">
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange text-white">
                    WHY
                </span>
                <h2 class="text-2xl font-bold text-dark mt-4">
                    Why learn Science?
                </h2>
                <p class="text-base text-dark mt-4">
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

        <div class="w-full md:w-2/5 absolute left-0 bottom-0 top-[50%] md:block hidden">
            <img src="https://placehold.co/800x700" alt="" class="w-full">
        </div>
    </section>

    {{-- What your kids will learn --}}
    <section class="w-100 bg-orange py-48">
        <div class="flex justify-center">
            <h2 class="text-3xl font-bold text-white">
                What your kids <span class="text-yellowLight underline">will learn</span>
            </h2>
        </div>

        <div class="relative py-36">
            <div class="w-full md:w-2/5 absolute right-0 bottom-0 top-0 md:block hidden">
                <img src="https://placehold.co/800x500" alt="" class="w-full h-full">
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

        <div class="relative py-36">
            <div class="w-full md:w-2/5 absolute left-0 bottom-0 top-0 md:block hidden">
                <img src="https://placehold.co/800x500" alt="" class="w-full h-full">
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
@endsection
