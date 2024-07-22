@extends('layout.user.main')

@section('title', 'Science | EduALL Junior')

@section('content')
    {{-- Banner & Description --}}
    <section class="w-100 bg-redBg pt-[100px] relative pb-24">
        {{-- Accent --}}
        <img loading="lazy" src="{{ asset('img/visual-arts/accent/Why.png') }}"
            class="md:w-[200px] w-[80px] absolute top-60 right-0 z-10">

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
                                Visual Arts
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="main-container relative z-20">
            <div class="flex flex-col items-center py-12 max-w-3xl mx-auto gap-5">
                <h1 class="text-4xl md:text-5xl font-bold text-center text-red">
                    Visual Arts
                </h1>
                <p class="text-lg text-dark text-center leading-8">
                    Think like an artist, create like a designer, act like a human.
                </p>
            </div>
        </div>


        <div class="flex w-full justify-end mt-8 md:mt-24 main-container">
            <div class="w-full md:w-3/5 flex flex-col items-start md:pl-12">
                <div class="bg-red py-1 px-4 inline rounded-full text-white">
                    WHY
                </div>
                <h2 class="text-3xl font-bold text-dark mt-4">
                    Why Learning Visual Arts is Necessary for Kids?
                </h2>
                <p class="font-light text-dark mt-4">
                    Learning visual arts is essential for kids as it provides a powerful outlet for emotional expression and
                    communication. Through arts education, students can articulate their thoughts and emotions across
                    various mediums, fostering practical communication skills and boosting self- assurance. Additionally, it
                    promotes empathy by exposing students to diverse viewpoints and cultural expressions. Visual arts
                    facilitate hands-on, design thinking and EduALL Visual Art pedagogy framework, enriching personal
                    expression and creativity while fostering resilience and a growth mindset for academic and lifelong
                    success.
                </p>
            </div>
        </div>

        <div class="w-full md:w-2/5 absolute left-0 bottom-0 md:top-[50%] top-full md:block hidden z-0">
            <img loading="lazy" src="{{ asset('img/visual-arts/image/Why.png') }}" alt=""
                class="w-full object-cover">
        </div>
    </section>

    {{-- What your kids will learn --}}
    <section class="w-100 bg-red pt-20 pb-12 md:pt-48 md:pb-20 relative -z-10">
        <div class="relative py-8 md:py-20">
            <div class="w-full md:w-2/5 absolute right-0 bottom-0 top-0 md:block hidden">
                <img loading="lazy" src="{{ asset('img/visual-arts/image/Curriculum.png') }}" alt=""
                    class="w-full h-full object-contain">
            </div>

            <div class="main-container">
                <div class="flex justify-start main-container">
                    <h2 class="text-3xl font-bold text-white text-center md:text-left -ml-12">
                        Our curriculum aims for kids to:
                    </h2>
                </div>
                <ul class="font-light text-base text-white py-8 gap-4 flex flex-col md:w-1/2">
                    <li class="flex items-start gap-2">
                        <div class="w-3 h-3 mr-4">
                            <svg width="24" height="24" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_608_6897)">
                                    <path
                                        d="M15.9999 31.4667C24.5419 31.4667 31.4665 24.542 31.4665 16C31.4665 7.45799 24.5419 0.533325 15.9999 0.533325C7.45787 0.533325 0.533203 7.45799 0.533203 16C0.533203 24.542 7.45787 31.4667 15.9999 31.4667Z"
                                        fill="#FF9600" />
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
                            Produce creative work, exploring their ideas, creativity and recording their experiences
                        </p>
                    </li>
                    <li class="flex items-start gap-2">
                        <div class="w-3 h-3 mr-4">
                            <svg width="24" height="24" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_608_6897)">
                                    <path
                                        d="M15.9999 31.4667C24.5419 31.4667 31.4665 24.542 31.4665 16C31.4665 7.45799 24.5419 0.533325 15.9999 0.533325C7.45787 0.533325 0.533203 7.45799 0.533203 16C0.533203 24.542 7.45787 31.4667 15.9999 31.4667Z"
                                        fill="#FF9600" />
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
                            Expressing their emotion and creativity through art through their surroundings
                        </p>
                    </li>
                    <li class="flex items-start gap-2">
                        <div class="w-3 h-3 mr-4">
                            <svg width="24" height="24" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_608_6897)">
                                    <path
                                        d="M15.9999 31.4667C24.5419 31.4667 31.4665 24.542 31.4665 16C31.4665 7.45799 24.5419 0.533325 15.9999 0.533325C7.45787 0.533325 0.533203 7.45799 0.533203 16C0.533203 24.542 7.45787 31.4667 15.9999 31.4667Z"
                                        fill="#FF9600" />
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
                            Enable the kid to develop natural abilities and potential, to acquire techniques, and to
                            practise the skills necessary for creative expression and for joyful participation in different
                            art forms
                        </p>
                    </li>
                    <li class="flex items-start gap-2">
                        <div class="w-3 h-3 mr-4">
                            <svg width="24" height="24" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_608_6897)">
                                    <path
                                        d="M15.9999 31.4667C24.5419 31.4667 31.4665 24.542 31.4665 16C31.4665 7.45799 24.5419 0.533325 15.9999 0.533325C7.45787 0.533325 0.533203 7.45799 0.533203 16C0.533203 24.542 7.45787 31.4667 15.9999 31.4667Z"
                                        fill="#FF9600" />
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
                            Enable the kid to see and to solve problems creatively through imaginative thinking, and value
                            the child’s confidence and self-esteem through valuing self-expression
                        </p>
                    </li>
                    <li class="flex items-start gap-2">
                        <div class="w-3 h-3 mr-4">
                            <svg width="24" height="24" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_608_6897)">
                                    <path
                                        d="M15.9999 31.4667C24.5419 31.4667 31.4665 24.542 31.4665 16C31.4665 7.45799 24.5419 0.533325 15.9999 0.533325C7.45787 0.533325 0.533203 7.45799 0.533203 16C0.533203 24.542 7.45787 31.4667 15.9999 31.4667Z"
                                        fill="#FF9600" />
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
                            Provide for aesthetic experiences and to develop aesthetic awareness in the visual arts
                        </p>
                    </li>
                </ul>
            </div>
    </section>

    {{-- What your kids will learn --}}
    <section class="w-100 bg-redBg pt-20 pb-12 md:pt-20 md:pb-20 relative -z-10">
        <div class="flex flex-col justify-center main-container mb-12">
            <div class="flex items-center gap-8">
                <h2 class="w-1/2 text-3xl font-bold text-dark text-center md:text-left">
                    What your kids <span class="text-red underline">will learn</span>
                </h2>
                <p class="text-dark w-1/2">
                    The EduALL Visual Arts curriculum framework aims to nurture creativity by fostering open-ended projects
                    that prioritize the process of working with visual materials. The visual arts curriculum comprises
                    interrelated activities in making art and in looking at responding to art.
                </p>
            </div>

            <div class="flex flex-col md:flex-row gap-8 mt-12">
                <div class="flex justify-between items-center flex-wrap gap-6 mt-12">
                    @foreach(__('communication.will_learn_content') as $content)
                        <div class="flex items-center justify-between w-[30%] bg-white rounded-2xl overflow-hidden">
                            <img src="https://placehold.co/120" alt=""
                                class="aspect-square object-cover w-[110px] h-[110px]">
                            <span class="text-lg px-4 font-bold text-red text-center w-full">{{ $content['title'] }}</span>
                        </div>
                    @endforeach
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
                <img loading="lazy" src="{{ asset('img/home/Testimonials_Dummy.png') }}" alt=""
                    class="w-full object-cover">
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
    <section class="bg-redBg py-24">
        <div class="main-container">
            <div class="flex flex-col md:flex-row justify-between items-center w-full py-8">
                <h2 class="font-bold text-3xl my-2 md:my-0 text-center">
                    Learn more about <span class="text-red underline decoration-red/50">Creative Coding & Robotics</span>
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
    <x-contact :color="'red'" />
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
