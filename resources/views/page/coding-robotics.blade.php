@extends('layout.user.main')

@section('title', 'Science | EduALL Junior')

@section('content')
    {{-- Banner & Description --}}
    <section class="w-100 bg-pinkBg pt-[100px] relative pb-24">
        {{-- Accent --}}
        <img loading="lazy" src="{{ asset('img/science/accent/Why.png') }}" class="md:w-[200px] w-[80px] absolute top-60 right-0 z-10">

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
                                Coding & Robotics
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="main-container relative z-20">
            <div class="flex flex-col items-center py-12 max-w-4xl mx-auto gap-5">
                <h1 class="text-4xl md:text-5xl font-bold text-center text-pink">
                    Creative Coding & Robotics
                </h1>
                <p class="text-lg md:text-xl text-dark text-center leading-8">
                    Embark on an interactive journey into the world of technology, where young technologists unleash their
                    creativity and develop problem-solving skills through engaging, hands-on coding and robotics projects,
                    ultimately enhancing their system thinking abilities.
                </p>
            </div>
        </div>


        <div class="flex w-full justify-start mt-8 md:mt-24 main-container">
            <div class="w-full md:w-3/5 flex flex-col items-start md:pl-12">
                <div class="bg-pink py-1 px-4 inline rounded-full text-white">
                    WHY
                </div>
                <h2 class="text-3xl font-bold text-dark mt-4">
                    Why learn Creative Coding & Robotics?
                </h2>
                <p class="font-light text-dark mt-4 text-lg">
                    EduALL Junior's Creative Coding & Robotics class is an essential and exciting opportunity for young
                    learners to venture into the dynamic world of technology. Current research highlights the importance of
                    STEM (Science, Technology, Engineering, and Mathematics) competencies, especially in coding and
                    robotics, in preparing kids for the evolving job market. By fostering critical thinking, enhancing
                    problem-solving abilities, and sparking creativity from an early age, this program not only equips kids
                    with essential skills but also ignites a passion for technology-driven innovation. With a focus on
                    playful learning, EduALL Junior aims to provide a solid foundation in robotics and coding, empowering
                    kids to thrive in the digital era and pursue STEM-related careers with confidence and enthusiasm.
                </p>
            </div>
        </div>

        <div class="w-full md:w-2/5 absolute right-0 bottom-0 md:top-[50%] top-full md:block hidden z-0">
            <img loading="lazy" src="{{ asset('img/coding-robotics/image/Why.png') }}" alt="" class="w-full object-cover">
        </div>
    </section>

    {{-- What your kids will learn --}}
    <section class="w-100 bg-pink pt-20 pb-12 md:pt-48 md:pb-20 relative -z-10">
        <div class="flex justify-start main-container mb-12">
            <h2 class="text-3xl font-bold text-white text-center md:text-left">
                The importance of learning Creative <br> Coding & Robotics since young age
            </h2>
        </div>

        <div class="relative py-8 md:py-20">
            <div class="w-full md:w-2/5 absolute left-0 bottom-0 top-0 md:block hidden">
                <img loading="lazy" src="{{ asset('img/coding-robotics/image/TheImportance_1.png') }}" alt=""
                    class="w-full h-full object-contain">
            </div>

            <div class="mb-10 main-container text-white w-full flex flex-col items-end">
                <div class="w-full md:w-1/2">
                    <p class="font-light text-lg text-white mt-4 leading-6">
                        Introducing robotics to kids offers profound benefits for their cognitive and socio-emotional
                        development. It sparks an early interest in STEM while nurturing critical skills such as
                        problem-solving and spatial reasoning. By cultivating computational thinking, kids gain a vital
                        skillset for navigating the digital age. Furthermore, robotics fosters collaboration and teamwork,
                        as kids often work together to design, build, and program robots to accomplish specific tasks. This
                        collaborative aspect not only enhances social skills but also instills a sense of collective
                        achievement and responsibility.
                    </p>
                </div>
            </div>
        </div>

        <div class="relative py-8 md:py-20">
            <div class="w-full md:w-2/5 absolute right-0 bottom-0 top-0 md:block hidden">
                <img loading="lazy" src="{{ asset('img/coding-robotics/image/TheImportance_2.png') }}" alt=""
                    class="w-full h-full object-contain">
            </div>

            <div class="mb-10 main-container text-white w-full flex flex-col items-start">
                <div class="w-full md:w-1/2">
                    <p class="font-light text-lg text-white mt-4 leading-6">
                        Coding teaches kids to break down complex problems, develop algorithms, and debug errors, thereby
                        enhancing their logical reasoning and problem-solving abilities. Early coding experiences improves
                        in memory, attention, and executive function, while also nurturing creativity and self-expression as
                        children design interactive stories, animations, and games. By cultivating these skills early on,
                        coding not only prepares kids for future academic success but also equips them for an increasingly
                        technology-driven world!
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- What your kids will learn --}}
    <section class="w-100 bg-pinkBg pt-20 pb-12 md:pt-20 md:pb-20 relative -z-10">
        <div class="flex flex-col justify-center main-container mb-12">
            <h2 class="text-3xl font-bold text-dark text-center md:text-left">
                What your kids <span class="text-blue underline">will learn</span>
            </h2>

            <div class="flex flex-col md:flex-row gap-8">
                <div class="w-full md:w-1/2 mt-14">
                    <div class="relative bg-white shadow-lg rounded-b-3xl rounded-tr-3xl mt-6">
                        <div class="relative bg-white shadow-lg rounded-b-3xl rounded-tr-3xl">
                            <div
                                class="absolute -translate-y-1/2 px-4 py-1 md:text-lg text-sm bg-pink text-white rounded-full font-bold flex items-center gap-2">
                                <img loading="lazy" src="{{ asset('img/enterpreneruship/accent/Why.png') }}" class="w-4 h-4">
                                Engaging curriculum tailored for your kids
                            </div>
                            <p class="font-light text-sm md:text-lg text-dark mt-8 py-4 pt-6 px-8">
                                Our program is designed for kids aged 5-12. Each session is thoughtfully br crafted to
                                progressively build their skills and knowledge. Your kids will engage in our hands-on
                                projects that not only showcase their learning but also develop their problem-solving
                                abilities, design thinking skills, and entrepreneurial spirit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 mt-14">
                    <div class="relative bg-white shadow-lg rounded-b-3xl rounded-tr-3xl mt-6">
                        <div class="relative bg-white shadow-lg rounded-b-3xl rounded-tr-3xl">
                            <div
                                class="absolute -translate-y-1/2 px-4 py-1 md:text-lg text-sm bg-pink text-white rounded-full font-bold flex items-center gap-2">
                                <img loading="lazy" src="{{ asset('img/enterpreneruship/accent/Why.png') }}" class="w-4 h-4">
                                Real-world application & skill development
                            </div>
                            <p class="font-light text-sm md:text-lg text-dark mt-8 py-4 pt-6 px-8">
                                Our program integrates classroom learning with practical experiences, ensuring both
                                authenticity and relevance. With three modules per level, each spanning 3-4 months, your
                                kids will delve into various aspects of creative coding and robotics, progressing from
                                foundational knowledge and awareness to the implementation of innovative ideas.
                            </p>
                        </div>
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
    <section class="bg-pinkBg py-24">
        <div class="main-container">
            <div class="flex flex-col md:flex-row justify-between items-center w-full py-8">
                <h2 class="font-bold text-3xl my-2 md:my-0 text-center">
                    Learn more about <span class="text-pink underline decoration-pink/50">Creative Coding & Robotics</span>
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
    <x-contact :color="'pink'" />
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
