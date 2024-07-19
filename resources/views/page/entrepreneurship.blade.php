@extends('layout.user.main')

@section('title', 'Science | EduALL Junior')

@section('content')
    {{-- Banner & Description --}}
    <section class="w-100 bg-greenBg pt-[100px] relative pb-24">
        {{-- Accent --}}
        <img loading="lazy" src="{{ asset('img/science/accent/Why.png') }}" class="md:w-[200px] w-[80px] absolute top-60 right-0 z-0">

        <div class="main-container z-10">
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
                                Entrepreneurship
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="main-container relative">
            <div class="flex flex-col items-center py-12 max-w-3xl mx-auto gap-5">
                <h1 class="text-4xl md:text-5xl font-bold text-center text-green">
                    {{ __('entrepreneurship.entrepreneurship_title') }}
                </h1>
                <p class="text-lg text-dark text-center leading-8">
                    {{ __('entrepreneurship.entrepreneurship_description') }}
                </p>
            </div>
        </div>


        <div class="flex w-full justify-end mt-8 md:mt-24 main-container">
            <div class="w-full md:w-3/5 flex flex-col items-start md:pl-12">
                <div class="bg-green py-1 px-4 inline rounded-full text-white">
                    WHY
                </div>
                <h2 class="text-3xl font-bold text-dark mt-4">
                    Why learn Entrepreneurship?
                </h2>
                <div class="relative bg-white shadow-lg rounded-b-3xl rounded-tr-3xl mt-10">
                    <div
                        class="absolute -translate-y-1/2 px-4 py-1 md:text-base text-sm bg-green text-white rounded-full font-bold flex items-center gap-2">
                        <img loading="lazy" src="{{ asset('img/enterpreneruship/accent/Why.png') }}" class="w-4 h-4">
                        Future-Proofing Skills
                    </div>
                    <p class="font-light text-sm text-dark mt-7 py-4 px-8">
                        With the majority of future jobs yet to be invented, it's crucial to equip students with skills that
                        transcend specific roles. An entrepreneurial mindset fosters adaptability, creativity, and a
                        commitment
                        to continuous learning, empowering students to thrive in an ever-changing landscape (IFTF, 2017;
                        Obschonka et al., 2012).
                    </p>
                </div>
                <div class="relative bg-white shadow-lg rounded-b-3xl rounded-tr-3xl mt-10">
                    <div
                        class="absolute -translate-y-1/2 px-4 py-1 md:text-base text-sm bg-green text-white rounded-full font-bold flex items-center gap-2">
                        <img loading="lazy" src="{{ asset('img/enterpreneruship/accent/Why.png') }}" class="w-4 h-4">
                        Early Development of Entrepreneurial Mindset
                    </div>
                    <p class="font-light text-sm text-dark mt-14 md:mt-7 py-4 px-8">
                        Research suggests that elementary and middle school students are naturally more open and
                        imaginative, making it an opportune time to instill entrepreneurial behaviors. By nurturing these
                        mindsets from an early age, kids are better prepared to tap into their creativity, take risks, and
                        develop the adaptability needed for future success (Gemino et al., 2020; Krueger Jr, Reilly, &
                        Carsrud, 2000)
                    </p>
                </div>
            </div>
        </div>

        <div class="w-full md:w-2/5 absolute left-0 bottom-0 md:top-[42%] top-full md:block hidden">
            <img loading="lazy" src="{{ asset('img/enterpreneruship/image/Why.png') }}" alt="" class="w-full object-cover">
        </div>
        {{-- Accent --}}
        <img loading="lazy" src="{{ asset('img/enterpreneruship/accent/EarlyEducation.png') }}"
            class="md:w-[200px] w-[80px] absolute -bottom-52 right-0 z-20">
    </section>

    {{-- Why Early Entrepreneurial Education is Necessary? --}}
    <section class="w-100 bg-green pt-20 pb-12 md:pt-48 md:pb-20 relative -z-10">

        <div class="flex justify-center main-container mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-white text-center ">
                Why Early Entrepreneurial Education <br> is Necessary?
            </h2>
        </div>

        <div class="relative py-8 md:py-20">
            <div class="w-full md:w-2/5 absolute right-0 bottom-0 top-0 md:block hidden">
                <img loading="lazy" src="{{ asset('img/enterpreneruship/image/Why_2.png') }}" alt=""
                    class="w-full h-full object-contain">
            </div>

            <div class="mb-10 main-container text-white w-full flex flex-col items-start">
                <div class="w-full md:w-1/2">
                    <div class="">
                        <div class="w-full">
                            <h3 class="font-bold text-2xl md:text-3xl">
                                Predictive of Future Behaviors
                            </h3>
                        </div>
                    </div>
                    <p class="font-light text-lg text-white mt-4 leading-6">
                        Introducing entrepreneurial education at a young age not only cultivates crucial skills but also
                        shapes students' intentions and aspirations for their future careers. Research demonstrates that
                        entrepreneurial intentions are powerful predictors of future behaviors, highlighting the importance
                        of early exposure to entrepreneurial concepts (Krueger Jr, Reilly, & Carsrud, 2000).
                    </p>
                </div>
            </div>
        </div>

        <div class="relative py-8 md:py-20">
            <div class="w-full md:w-2/5 absolute left-0 bottom-0 top-0 md:block hidden">
                <img loading="lazy" src="{{ asset('img/enterpreneruship/image/Why_3.png') }}" alt=""
                    class="w-full h-full object-contain">
            </div>

            <div class="mb-10 main-container text-white w-full flex flex-col items-end">
                <div class="w-full md:w-1/2">
                    <div class="">
                        <div class="w-full">
                            <h3 class="font-bold text-2xl md:text-3xl">
                                Teachability of Entrepreneurial Mindset
                            </h3>
                        </div>
                    </div>
                    <p class="font-light text-lg text-white mt-4 leading-6">
                        Contrary to the belief that entrepreneurial mindset is innate, scholars argue that it can be learned
                        and taught. By integrating entrepreneurial education into primary and secondary school curricula,
                        kids can develop the skills and mindset necessary to navigate the complexities of the modern world
                        and contribute to a more productive society (Henry, Hill, & Leitch, 2005; World Economic Forum,
                        2019).
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- What your kids will learn --}}
    <section class="w-100 bg-greenBg pt-20 pb-12 md:pt-48 md:pb-20 relative -z-10">
        <div class="flex flex-col justify-center main-container mb-12">
            <h2 class="text-3xl font-bold text-dark text-center md:text-left">
                What your kids <span class="text-green underline">will learn</span>
            </h2>

            <div class="flex flex-col mt-8">
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2 relative">
                        <div
                            class="absolute px-4 py-1 text-base bg-green text-white rounded-full font-bold flex items-center gap-2">
                            <img loading="lazy" src="{{ asset('img/enterpreneruship/accent/Why.png') }}" class="w-4 h-4">
                            Entrepreneurial Mindset
                        </div>
                        <ul class="font-light text-base text-dark mt-8 py-6 gap-4 flex flex-col">
                            <li class="flex items-start gap-2">
                                <div class="w-3 h-3 mr-4">
                                    <svg width="24" height="24" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_608_6897)">
                                            <path
                                                d="M15.9999 31.4667C24.5419 31.4667 31.4665 24.542 31.4665 16C31.4665 7.45799 24.5419 0.533325 15.9999 0.533325C7.45787 0.533325 0.533203 7.45799 0.533203 16C0.533203 24.542 7.45787 31.4667 15.9999 31.4667Z"
                                                fill="#0004F6" />
                                            <path
                                                d="M12.9395 22.4373L9.31284 18.8949C9.2344 18.8187 9.17204 18.7275 9.12946 18.6267C9.08688 18.5259 9.06494 18.4176 9.06494 18.3082C9.06494 18.1988 9.08688 18.0906 9.12946 17.9898C9.17204 17.889 9.2344 17.7978 9.31284 17.7216L10.5155 16.5482C10.6768 16.392 10.8925 16.3046 11.1171 16.3046C11.3417 16.3046 11.5574 16.392 11.7187 16.5482L13.8776 18.6586L19.9326 9.45331C20.0575 9.26756 20.2498 9.13766 20.4687 9.09108C20.6877 9.0445 20.9162 9.08489 21.1059 9.20371L22.5374 10.1029C22.6309 10.1604 22.7119 10.2361 22.7756 10.3255C22.8393 10.4148 22.8844 10.5161 22.9082 10.6233C22.932 10.7304 22.9341 10.8412 22.9143 10.9492C22.8945 11.0571 22.8532 11.16 22.7928 11.2517L15.6232 22.1552C15.4796 22.3686 15.2909 22.5479 15.0704 22.6805C14.8499 22.8131 14.6031 22.8958 14.3472 22.9227C14.0914 22.9496 13.8327 22.9201 13.5895 22.8362C13.3463 22.7524 13.1244 22.6162 12.9395 22.4373Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_608_6897">
                                                <rect width="32" height="32" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <p>
                                    <span class="font-bold">Problem-Solving:</span> Our program teaches kids how to identify
                                    challenges and devise
                                    effective solutions, fostering their ability to think critically and creatively.
                                </p>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-3 h-3 mr-4">
                                    <svg width="24" height="24" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_608_6897)">
                                            <path
                                                d="M15.9999 31.4667C24.5419 31.4667 31.4665 24.542 31.4665 16C31.4665 7.45799 24.5419 0.533325 15.9999 0.533325C7.45787 0.533325 0.533203 7.45799 0.533203 16C0.533203 24.542 7.45787 31.4667 15.9999 31.4667Z"
                                                fill="#0004F6" />
                                            <path
                                                d="M12.9395 22.4373L9.31284 18.8949C9.2344 18.8187 9.17204 18.7275 9.12946 18.6267C9.08688 18.5259 9.06494 18.4176 9.06494 18.3082C9.06494 18.1988 9.08688 18.0906 9.12946 17.9898C9.17204 17.889 9.2344 17.7978 9.31284 17.7216L10.5155 16.5482C10.6768 16.392 10.8925 16.3046 11.1171 16.3046C11.3417 16.3046 11.5574 16.392 11.7187 16.5482L13.8776 18.6586L19.9326 9.45331C20.0575 9.26756 20.2498 9.13766 20.4687 9.09108C20.6877 9.0445 20.9162 9.08489 21.1059 9.20371L22.5374 10.1029C22.6309 10.1604 22.7119 10.2361 22.7756 10.3255C22.8393 10.4148 22.8844 10.5161 22.9082 10.6233C22.932 10.7304 22.9341 10.8412 22.9143 10.9492C22.8945 11.0571 22.8532 11.16 22.7928 11.2517L15.6232 22.1552C15.4796 22.3686 15.2909 22.5479 15.0704 22.6805C14.8499 22.8131 14.6031 22.8958 14.3472 22.9227C14.0914 22.9496 13.8327 22.9201 13.5895 22.8362C13.3463 22.7524 13.1244 22.6162 12.9395 22.4373Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_608_6897">
                                                <rect width="32" height="32" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <p>
                                    <span class="font-bold"> Creativity with Limited Resources:</span> Through
                                    discovery-driven or effectual
                                    thinking, kids learn to innovate and adapt by making the most out of available resources
                                    to achieve their goals.
                                </p>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-3 h-3 mr-4">
                                    <svg width="24" height="24" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_608_6897)">
                                            <path
                                                d="M15.9999 31.4667C24.5419 31.4667 31.4665 24.542 31.4665 16C31.4665 7.45799 24.5419 0.533325 15.9999 0.533325C7.45787 0.533325 0.533203 7.45799 0.533203 16C0.533203 24.542 7.45787 31.4667 15.9999 31.4667Z"
                                                fill="#0004F6" />
                                            <path
                                                d="M12.9395 22.4373L9.31284 18.8949C9.2344 18.8187 9.17204 18.7275 9.12946 18.6267C9.08688 18.5259 9.06494 18.4176 9.06494 18.3082C9.06494 18.1988 9.08688 18.0906 9.12946 17.9898C9.17204 17.889 9.2344 17.7978 9.31284 17.7216L10.5155 16.5482C10.6768 16.392 10.8925 16.3046 11.1171 16.3046C11.3417 16.3046 11.5574 16.392 11.7187 16.5482L13.8776 18.6586L19.9326 9.45331C20.0575 9.26756 20.2498 9.13766 20.4687 9.09108C20.6877 9.0445 20.9162 9.08489 21.1059 9.20371L22.5374 10.1029C22.6309 10.1604 22.7119 10.2361 22.7756 10.3255C22.8393 10.4148 22.8844 10.5161 22.9082 10.6233C22.932 10.7304 22.9341 10.8412 22.9143 10.9492C22.8945 11.0571 22.8532 11.16 22.7928 11.2517L15.6232 22.1552C15.4796 22.3686 15.2909 22.5479 15.0704 22.6805C14.8499 22.8131 14.6031 22.8958 14.3472 22.9227C14.0914 22.9496 13.8327 22.9201 13.5895 22.8362C13.3463 22.7524 13.1244 22.6162 12.9395 22.4373Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_608_6897">
                                                <rect width="32" height="32" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <p>
                                    <span class="font-bold">Teamwork:</span> Through various collaborative projects, kids
                                    learn to develop strong interpersonal skills and the ability to work effectively with
                                    others.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full md:w-1/2 mt-6 md:mt-0">
                        <img loading="lazy" src="{{ asset('img/enterpreneruship/image/WhatYourKidsWillLearn.png') }}" alt=""
                            class="w-full object-contain">
                    </div>
                </div>
                </div>
                <div class="flex flex-col md:flex-row mt-16 gap-8">
                    <div class="w-full md:w-1/2 relative">
                        <div
                            class="absolute px-4 py-1 text-base bg-green text-white rounded-full font-bold flex items-center gap-2">
                            <img loading="lazy" src="{{ asset('img/enterpreneruship/accent/Why.png') }}" class="w-4 h-4">
                            Entrepreneurial Skills
                        </div>
                        <ul class="font-light text-base text-dark mt-8 py-6 gap-4 flex flex-col">
                            <li class="flex items-start gap-2">
                                <div class="w-3 h-3 mr-4">
                                    <svg width="24" height="24" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_608_6897)">
                                            <path
                                                d="M15.9999 31.4667C24.5419 31.4667 31.4665 24.542 31.4665 16C31.4665 7.45799 24.5419 0.533325 15.9999 0.533325C7.45787 0.533325 0.533203 7.45799 0.533203 16C0.533203 24.542 7.45787 31.4667 15.9999 31.4667Z"
                                                fill="#0004F6" />
                                            <path
                                                d="M12.9395 22.4373L9.31284 18.8949C9.2344 18.8187 9.17204 18.7275 9.12946 18.6267C9.08688 18.5259 9.06494 18.4176 9.06494 18.3082C9.06494 18.1988 9.08688 18.0906 9.12946 17.9898C9.17204 17.889 9.2344 17.7978 9.31284 17.7216L10.5155 16.5482C10.6768 16.392 10.8925 16.3046 11.1171 16.3046C11.3417 16.3046 11.5574 16.392 11.7187 16.5482L13.8776 18.6586L19.9326 9.45331C20.0575 9.26756 20.2498 9.13766 20.4687 9.09108C20.6877 9.0445 20.9162 9.08489 21.1059 9.20371L22.5374 10.1029C22.6309 10.1604 22.7119 10.2361 22.7756 10.3255C22.8393 10.4148 22.8844 10.5161 22.9082 10.6233C22.932 10.7304 22.9341 10.8412 22.9143 10.9492C22.8945 11.0571 22.8532 11.16 22.7928 11.2517L15.6232 22.1552C15.4796 22.3686 15.2909 22.5479 15.0704 22.6805C14.8499 22.8131 14.6031 22.8958 14.3472 22.9227C14.0914 22.9496 13.8327 22.9201 13.5895 22.8362C13.3463 22.7524 13.1244 22.6162 12.9395 22.4373Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_608_6897">
                                                <rect width="32" height="32" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <p>
                                    <span class="font-bold">Public Speaking:</span>
                                    Kids learn to communicate ideas effectively and practice to articulate thoughts clearly
                                    and persuasively.
                                </p>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-3 h-3 mr-4">
                                    <svg width="24" height="24" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_608_6897)">
                                            <path
                                                d="M15.9999 31.4667C24.5419 31.4667 31.4665 24.542 31.4665 16C31.4665 7.45799 24.5419 0.533325 15.9999 0.533325C7.45787 0.533325 0.533203 7.45799 0.533203 16C0.533203 24.542 7.45787 31.4667 15.9999 31.4667Z"
                                                fill="#0004F6" />
                                            <path
                                                d="M12.9395 22.4373L9.31284 18.8949C9.2344 18.8187 9.17204 18.7275 9.12946 18.6267C9.08688 18.5259 9.06494 18.4176 9.06494 18.3082C9.06494 18.1988 9.08688 18.0906 9.12946 17.9898C9.17204 17.889 9.2344 17.7978 9.31284 17.7216L10.5155 16.5482C10.6768 16.392 10.8925 16.3046 11.1171 16.3046C11.3417 16.3046 11.5574 16.392 11.7187 16.5482L13.8776 18.6586L19.9326 9.45331C20.0575 9.26756 20.2498 9.13766 20.4687 9.09108C20.6877 9.0445 20.9162 9.08489 21.1059 9.20371L22.5374 10.1029C22.6309 10.1604 22.7119 10.2361 22.7756 10.3255C22.8393 10.4148 22.8844 10.5161 22.9082 10.6233C22.932 10.7304 22.9341 10.8412 22.9143 10.9492C22.8945 11.0571 22.8532 11.16 22.7928 11.2517L15.6232 22.1552C15.4796 22.3686 15.2909 22.5479 15.0704 22.6805C14.8499 22.8131 14.6031 22.8958 14.3472 22.9227C14.0914 22.9496 13.8327 22.9201 13.5895 22.8362C13.3463 22.7524 13.1244 22.6162 12.9395 22.4373Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_608_6897">
                                                <rect width="32" height="32" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <p>
                                    <span class="font-bold"> Opportunity Analysis: </span>
                                    Acting as entrepreneurs, kids are encouraged to observe patterns and trends to assess
                                    the viability of their ideas, ensuring they embark on ventures with potential for
                                    success.
                                </p>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-3 h-3 mr-4">
                                    <svg width="24" height="24" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_608_6897)">
                                            <path
                                                d="M15.9999 31.4667C24.5419 31.4667 31.4665 24.542 31.4665 16C31.4665 7.45799 24.5419 0.533325 15.9999 0.533325C7.45787 0.533325 0.533203 7.45799 0.533203 16C0.533203 24.542 7.45787 31.4667 15.9999 31.4667Z"
                                                fill="#0004F6" />
                                            <path
                                                d="M12.9395 22.4373L9.31284 18.8949C9.2344 18.8187 9.17204 18.7275 9.12946 18.6267C9.08688 18.5259 9.06494 18.4176 9.06494 18.3082C9.06494 18.1988 9.08688 18.0906 9.12946 17.9898C9.17204 17.889 9.2344 17.7978 9.31284 17.7216L10.5155 16.5482C10.6768 16.392 10.8925 16.3046 11.1171 16.3046C11.3417 16.3046 11.5574 16.392 11.7187 16.5482L13.8776 18.6586L19.9326 9.45331C20.0575 9.26756 20.2498 9.13766 20.4687 9.09108C20.6877 9.0445 20.9162 9.08489 21.1059 9.20371L22.5374 10.1029C22.6309 10.1604 22.7119 10.2361 22.7756 10.3255C22.8393 10.4148 22.8844 10.5161 22.9082 10.6233C22.932 10.7304 22.9341 10.8412 22.9143 10.9492C22.8945 11.0571 22.8532 11.16 22.7928 11.2517L15.6232 22.1552C15.4796 22.3686 15.2909 22.5479 15.0704 22.6805C14.8499 22.8131 14.6031 22.8958 14.3472 22.9227C14.0914 22.9496 13.8327 22.9201 13.5895 22.8362C13.3463 22.7524 13.1244 22.6162 12.9395 22.4373Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_608_6897">
                                                <rect width="32" height="32" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <p>
                                    <span class="font-bold">Market Research: </span>
                                    Kids learn to gather insights about potential users to tailor their products or services
                                    to meet customer needs.
                                </p>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-3 h-3 mr-4">
                                    <svg width="24" height="24" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_608_6897)">
                                            <path
                                                d="M15.9999 31.4667C24.5419 31.4667 31.4665 24.542 31.4665 16C31.4665 7.45799 24.5419 0.533325 15.9999 0.533325C7.45787 0.533325 0.533203 7.45799 0.533203 16C0.533203 24.542 7.45787 31.4667 15.9999 31.4667Z"
                                                fill="#0004F6" />
                                            <path
                                                d="M12.9395 22.4373L9.31284 18.8949C9.2344 18.8187 9.17204 18.7275 9.12946 18.6267C9.08688 18.5259 9.06494 18.4176 9.06494 18.3082C9.06494 18.1988 9.08688 18.0906 9.12946 17.9898C9.17204 17.889 9.2344 17.7978 9.31284 17.7216L10.5155 16.5482C10.6768 16.392 10.8925 16.3046 11.1171 16.3046C11.3417 16.3046 11.5574 16.392 11.7187 16.5482L13.8776 18.6586L19.9326 9.45331C20.0575 9.26756 20.2498 9.13766 20.4687 9.09108C20.6877 9.0445 20.9162 9.08489 21.1059 9.20371L22.5374 10.1029C22.6309 10.1604 22.7119 10.2361 22.7756 10.3255C22.8393 10.4148 22.8844 10.5161 22.9082 10.6233C22.932 10.7304 22.9341 10.8412 22.9143 10.9492C22.8945 11.0571 22.8532 11.16 22.7928 11.2517L15.6232 22.1552C15.4796 22.3686 15.2909 22.5479 15.0704 22.6805C14.8499 22.8131 14.6031 22.8958 14.3472 22.9227C14.0914 22.9496 13.8327 22.9201 13.5895 22.8362C13.3463 22.7524 13.1244 22.6162 12.9395 22.4373Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_608_6897">
                                                <rect width="32" height="32" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <p>
                                    <span class="font-bold"> Design Thinking: </span>
                                    Kids are encouraged to practice user-centric design and seek continuous feedback to
                                    develop solutions that address user challenges.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full md:w-1/2 relative">
                        <ul class="font-light text-base text-dark md:mt-8 md:py-6 gap-4 flex flex-col">
                            <li class="flex items-start gap-2">
                                <div class="w-3 h-3 mr-4">
                                    <svg width="24" height="24" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_608_6897)">
                                            <path
                                                d="M15.9999 31.4667C24.5419 31.4667 31.4665 24.542 31.4665 16C31.4665 7.45799 24.5419 0.533325 15.9999 0.533325C7.45787 0.533325 0.533203 7.45799 0.533203 16C0.533203 24.542 7.45787 31.4667 15.9999 31.4667Z"
                                                fill="#0004F6" />
                                            <path
                                                d="M12.9395 22.4373L9.31284 18.8949C9.2344 18.8187 9.17204 18.7275 9.12946 18.6267C9.08688 18.5259 9.06494 18.4176 9.06494 18.3082C9.06494 18.1988 9.08688 18.0906 9.12946 17.9898C9.17204 17.889 9.2344 17.7978 9.31284 17.7216L10.5155 16.5482C10.6768 16.392 10.8925 16.3046 11.1171 16.3046C11.3417 16.3046 11.5574 16.392 11.7187 16.5482L13.8776 18.6586L19.9326 9.45331C20.0575 9.26756 20.2498 9.13766 20.4687 9.09108C20.6877 9.0445 20.9162 9.08489 21.1059 9.20371L22.5374 10.1029C22.6309 10.1604 22.7119 10.2361 22.7756 10.3255C22.8393 10.4148 22.8844 10.5161 22.9082 10.6233C22.932 10.7304 22.9341 10.8412 22.9143 10.9492C22.8945 11.0571 22.8532 11.16 22.7928 11.2517L15.6232 22.1552C15.4796 22.3686 15.2909 22.5479 15.0704 22.6805C14.8499 22.8131 14.6031 22.8958 14.3472 22.9227C14.0914 22.9496 13.8327 22.9201 13.5895 22.8362C13.3463 22.7524 13.1244 22.6162 12.9395 22.4373Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_608_6897">
                                                <rect width="32" height="32" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <p>
                                    <span class="font-bold">Prototyping:</span>
                                    Kids will create prototypes to visualize and refine their ideas, gather feedback, and
                                    iteratively improve their products or services before full-scale production.
                                </p>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-3 h-3 mr-4">
                                    <svg width="24" height="24" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_608_6897)">
                                            <path
                                                d="M15.9999 31.4667C24.5419 31.4667 31.4665 24.542 31.4665 16C31.4665 7.45799 24.5419 0.533325 15.9999 0.533325C7.45787 0.533325 0.533203 7.45799 0.533203 16C0.533203 24.542 7.45787 31.4667 15.9999 31.4667Z"
                                                fill="#0004F6" />
                                            <path
                                                d="M12.9395 22.4373L9.31284 18.8949C9.2344 18.8187 9.17204 18.7275 9.12946 18.6267C9.08688 18.5259 9.06494 18.4176 9.06494 18.3082C9.06494 18.1988 9.08688 18.0906 9.12946 17.9898C9.17204 17.889 9.2344 17.7978 9.31284 17.7216L10.5155 16.5482C10.6768 16.392 10.8925 16.3046 11.1171 16.3046C11.3417 16.3046 11.5574 16.392 11.7187 16.5482L13.8776 18.6586L19.9326 9.45331C20.0575 9.26756 20.2498 9.13766 20.4687 9.09108C20.6877 9.0445 20.9162 9.08489 21.1059 9.20371L22.5374 10.1029C22.6309 10.1604 22.7119 10.2361 22.7756 10.3255C22.8393 10.4148 22.8844 10.5161 22.9082 10.6233C22.932 10.7304 22.9341 10.8412 22.9143 10.9492C22.8945 11.0571 22.8532 11.16 22.7928 11.2517L15.6232 22.1552C15.4796 22.3686 15.2909 22.5479 15.0704 22.6805C14.8499 22.8131 14.6031 22.8958 14.3472 22.9227C14.0914 22.9496 13.8327 22.9201 13.5895 22.8362C13.3463 22.7524 13.1244 22.6162 12.9395 22.4373Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_608_6897">
                                                <rect width="32" height="32" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <p>
                                    <span class="font-bold"> Business Model:</span>
                                    Kids will learn to create a business model to understand how to create a profitable
                                    business by considering production costs, pricing strategies, and revenue streams.
                                </p>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-3 h-3 mr-4">
                                    <svg width="24" height="24" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_608_6897)">
                                            <path
                                                d="M15.9999 31.4667C24.5419 31.4667 31.4665 24.542 31.4665 16C31.4665 7.45799 24.5419 0.533325 15.9999 0.533325C7.45787 0.533325 0.533203 7.45799 0.533203 16C0.533203 24.542 7.45787 31.4667 15.9999 31.4667Z"
                                                fill="#0004F6" />
                                            <path
                                                d="M12.9395 22.4373L9.31284 18.8949C9.2344 18.8187 9.17204 18.7275 9.12946 18.6267C9.08688 18.5259 9.06494 18.4176 9.06494 18.3082C9.06494 18.1988 9.08688 18.0906 9.12946 17.9898C9.17204 17.889 9.2344 17.7978 9.31284 17.7216L10.5155 16.5482C10.6768 16.392 10.8925 16.3046 11.1171 16.3046C11.3417 16.3046 11.5574 16.392 11.7187 16.5482L13.8776 18.6586L19.9326 9.45331C20.0575 9.26756 20.2498 9.13766 20.4687 9.09108C20.6877 9.0445 20.9162 9.08489 21.1059 9.20371L22.5374 10.1029C22.6309 10.1604 22.7119 10.2361 22.7756 10.3255C22.8393 10.4148 22.8844 10.5161 22.9082 10.6233C22.932 10.7304 22.9341 10.8412 22.9143 10.9492C22.8945 11.0571 22.8532 11.16 22.7928 11.2517L15.6232 22.1552C15.4796 22.3686 15.2909 22.5479 15.0704 22.6805C14.8499 22.8131 14.6031 22.8958 14.3472 22.9227C14.0914 22.9496 13.8327 22.9201 13.5895 22.8362C13.3463 22.7524 13.1244 22.6162 12.9395 22.4373Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_608_6897">
                                                <rect width="32" height="32" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <p>
                                    <span class="font-bold">Pitching: </span>
                                    Mastering the art of pitching is essential for entrepreneurs to convincingly communicate
                                    their ideas to potential users and investors. Kids will learn to deliver concise,
                                    compelling presentations that inspire support and investment.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonial  --}}
    <section class="w-100 bg-secondary pb-24 relative">
        {{-- Accent --}}
        <img loading="lazy" src="{{ asset('img/science/accent/Testimonials.png') }}"
            class="md:w-[200px] w-[80px] absolute top-[45%] right-0">

        <div class="flex flex-wrap items-center md:py-0 py-[50px]">
            <div class="w-full md:w-2/5 md:px-0 px-6 mb-4">
                <img loading="lazy" src="{{ asset('img/home/Testimonials_Dummy.png') }}" alt="" class="w-full object-cover">
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
    <section class="bg-greenBg py-24">
        <div class="main-container">
            <div class="flex flex-col md:flex-row justify-between items-center w-full py-8">
                <h2 class="font-bold text-3xl my-2 md:my-0 text-center">
                    Learn more about <span class="text-green underline decoration-green/60">Entrepreneurship</span>
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
    <x-contact :color="'green'" />
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
