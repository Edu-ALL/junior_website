@extends('layout.user.main')

@section('title', 'EduALL Junior')

@section('content')
    {{-- Banner & Description --}}
    <section class="w-100 bg-secondary pt-[100px]">
        <div class="main-container">
            <div class="max-w-xl mx-auto text-center">
                <div class="flex justify-center">
                    <img src="{{ asset('img/logo/eduall.png') }}" alt="EduALL Junior"
                        class="md:w-[200px] w-[150px] flex justify-center">
                </div>
                <h1 class="font-bold md:text-[2.3em] text-[1.5em] font-primary">
                    One-stop solution to unlock <br>
                    your <span class="text-blue/60">kid's potential</span>
                </h1>
                <p class="mt-3">
                    Playful Learning Center for Kid’s Interests & Skills Exploration
                </p>
            </div>
            <div class="flex flex-nowrap mt-5 md:gap-7 gap-1">
                <div class="w-full md:w-1/4 md:px-4 px-1 md:-mt-[150px] -mt-[20px]">
                    <img src="{{ asset('img/home/Jumbotron_1.png') }}" alt="EduALL Junior" class="w-full drop-shadow-md">
                </div>
                <div class="w-full md:w-1/4 md:px-4 px-1">
                    <img src="{{ asset('img/home/Jumbotron_2.png') }}" alt="EduALL Junior" class="w-full drop-shadow-md">
                </div>
                <div class="w-full md:w-1/4 md:px-4 px-1">
                    <img src="{{ asset('img/home/Jumbotron_3.png') }}" alt="EduALL Junior" class="w-full drop-shadow-md">
                </div>
                <div class="w-full md:w-1/4 md:px-4 px-1 md:-mt-[150px] -mt-[20px]">
                    <img src="{{ asset('img/home/Jumbotron_4.png') }}" alt="EduALL Junior" class="w-full drop-shadow-md">
                </div>
            </div>

        </div>
        <div class="flex flex-nowrap mt-5 gap-5 md:py-[150px] py-[50px] relative overflow-hidden">
            <div class="w-full md:w-3/5 md:px-32 px-8">
                <div class="bg-red py-1 px-4 inline rounded-full text-white">
                    KID'S FUTURE
                </div>
                <h2 class="font-bold text-xl my-3">
                    We empower kids to become future change-makers and leaders by developing an entrepreneurial mindset
                </h2>
                <p>
                    At EduALL Junior, we empower kids aged 5-12 to become future change-makers and leaders through our
                    programs focused on developing an entrepreneurial mindset. Our courses are crafted to ignite
                    curiosity, nurture creativity, and cultivate essential skills—all while ensuring a fun learning
                    experience.
                </p>
            </div>
            <div class="w-full md:w-2/5 absolute right-0 bottom-0 md:block hidden">
                <img src="https://placehold.co/800x600" alt="" class="w-full">
            </div>
        </div>
    </section>

    {{-- Why EduALL Junior  --}}
    <section class="w-100 bg-blue py-[50px]">
        <div class="flex justify-center">
            <h2 class="text-2xl font-bold text-white">
                Why <span class="text-yellowLight underline">EduALL Junior</span>?
            </h2>
        </div>

        <div class="flex justify-end mt-10">
            <div class="w-full md:w-2/5 absolute left-0 mt-[50px] md:block hidden">
                <img src="https://placehold.co/600x700" alt="" class="w-full">
            </div>
            <div class="w-full md:w-3/5 text-white md:px-32 px-8">
                <div class="mb-10">
                    <div class="flex">
                        <div class="w-full md:w-6/7">
                            <h3 class="font-bold text-lg">
                                Programs developed by <span class="text-yellowLight"> experts, research-informed,</span> and
                                <span class="text-yellowLight">expert-approved</span>
                            </h3>
                        </div>
                    </div>
                    <p class="font-light mt-3">
                        We understand that raising kids requires diverse perspectives and opinions. That's why we
                        collaborate with international and local educators, industry professionals, parents, and tested the
                        courses with kids to ensure our curriculum and lessons are relevant to today's world while being
                        relatable and fun for kids.
                    </p>
                </div>

                <div class="mb-10">
                    <div class="flex">
                        <div class="w-full md:w-6/7">
                            <h3 class="font-bold text-lg">
                                <span class="text-yellowLight">Personalized student journey </span> by in-house
                                psychologists & experts
                            </h3>
                        </div>
                    </div>
                    <p class="font-light mt-3">
                        Our educators and psychologists will closely observe and monitor each child's progress in class and
                        through their projects. By evaluating and assessing the development of kid's interests and early
                        skills, they can provide personalized recommendations, pathways, and modules. This approach ensures
                        that each kid's unique needs are met, allowing them to fully develop and maximize their potential.
                    </p>
                </div>
                <div class="mb-10">
                    <div class="flex">
                        <div class="w-full md:w-6/7">
                            <h3 class="font-bold text-lg">
                                Offering <span class="text-yellowLight"> holistic</span> & <span
                                    class="text-yellowLight">playful approach</span> for your kids education
                            </h3>
                        </div>
                    </div>
                    <p class="font-light mt-3">
                        Kids thrive when they're having fun because it sparks their imagination, creativity, and social
                        skills. By tapping into their love for play, we can seamlessly weave in educational thoughts and
                        values suited to their age. This playful learning approach ensures that during their crucial
                        developmental stages, children grow holistically, optimizing their cognitive, emotional, and social
                        development.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- How it Works  --}}
    <section class="w-100 bg-yellow/20">
        <div class="main-container">
            <div class="flex flex-wrap items-center md:py-[150px] py-[50px]">
                <div class="w-full md:w-2/4 px-2 mb-3 mt-5">
                    <div class="bg-blue py-1 px-4 inline rounded-full text-white">
                        HOW IT WORKS
                    </div>
                    <h2 class="font-bold text-3xl my-5">
                        The <span class="text-yellow">learning journey</span> for your kid
                    </h2>
                    <p class="text-lg mb-5">
                        We believe that each kid should embark on a personal learning journey based on their individual
                        interests and skill levels. Our goals focus on fostering entrepreneurial mindset through a
                        three-stage process:
                    </p>
                    <ol>
                        <li class="mb-3">
                            <strong> Exploration stage:</strong> Kids discover their interest across diverse streams
                            offered. For instance, a kid interested in robotics starts by building foundational skills in
                            robotics.
                        </li>
                        <li class="mb-3">
                            <strong>Development stage:</strong> Kids will progress through specialized modules in their
                            respective streams to enhance their abilities.
                        </li>
                        <li class="mb-3">
                            <strong>Enrichment stage:</strong> Kids will apply their skills in real-world applications such
                            as competitions and community projects.
                        </li>
                    </ol>
                    <p class="text-lg mb-5">
                        Throughout these stages, kids tackle increasingly complex challenges, refining problem-solving and
                        conflict-resolution skills to become well-rounded individuals capable of making a positive impact in
                        this world.
                    </p>
                    <button type="button"
                        class="text-white bg-primary shadow-2xl hover:bg-primary focus:outline-none focus:ring-4 focus:ring-primary/30 font-medium rounded-full text-sm px-5 py-2 text-center me-2 mb-2 dark:bg-primary/60 dark:hover:bg-primary dark:focus:ring-primary">
                        See Our Programs
                    </button>
                </div>
                <div class="w-full md:w-2/4 md:ps-10">
                    <img src="https://placehold.co/600x600" alt="" class="w-full object-cover">
                </div>
            </div>
        </div>
    </section>

    {{-- Programs  --}}
    <section class="w-100 bg-red text-white">
        <div class="main-container py-[50px]">
            <div class="text-center mb-5">
                <div class="bg-blue py-1 px-4 inline rounded-full text-white">
                    PROGRAMS
                </div>
                <h2 class="font-bold text-3xl my-5 mb-10">
                    <span class="text-yellowLight">Expert-approved programs</span> for your kids
                </h2>
            </div>
            <div class="flex flex-wrap justify-center">
                <div class="w-1/2  md:w-1/5 relative md:p-5 p-3">
                    <img src="https://placehold.co/400x500" alt="" class="relative rounded-xl z-[0]">
                    <button class="btn-primary py-2 absolute left-[10%] -bottom-[2%] z-[1] w-[80%]">Science</button>
                </div>
                <div class="w-1/2 md:w-1/5 relative md:p-5 p-3">
                    <img src="https://placehold.co/400x500" alt="" class="relative rounded-xl z-[0]">
                    <button class="btn-primary py-2 absolute left-[10%] -bottom-[2%] z-[1] w-[80%]">Coding &
                        Robotics</button>
                </div>
                <div class="w-1/2 md:w-1/5 relative md:p-5 p-3">
                    <img src="https://placehold.co/400x500" alt="" class="relative rounded-xl z-[0]">
                    <button
                        class="btn-primary py-2 absolute left-[10%] -bottom-[2%] z-[1] w-[80%]">Entrepreneurship</button>
                </div>
                <div class="w-1/2 md:w-1/5 relative md:p-5 p-3">
                    <img src="https://placehold.co/400x500" alt="" class="relative rounded-xl z-[0]">
                    <button class="btn-primary py-2 absolute left-[10%] -bottom-[2%] z-[1] w-[80%]">Visual Arts</button>
                </div>
                <div class="w-1/2 md:w-1/5 relative md:p-5 p-3">
                    <img src="https://placehold.co/400x500" alt="" class="relative rounded-xl z-[0]">
                    <button class="btn-primary py-2 absolute left-[10%] -bottom-[2%] z-[1] w-[80%]">Communications</button>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonial  --}}
    <section class="w-100 bg-secondary">
        <div class="flex flex-wrap items-center md:py-0 py-[50px]">
            <div class="w-full md:w-2/5 md:px-0 px-6 mb-4">
                <img src="https://placehold.co/600x600" alt="" class="w-full object-cover">
            </div>
            <div class="w-full md:w-3/5 md:px-32 px-6">
                <div class="bg-yellow py-1 px-4 inline rounded-full text-white">
                    TESTIMONIALS
                </div>
                <h2 class="font-bold text-3xl my-5">
                    What parents say <span class="text-blue">about us</span>
                </h2>

                <section class="splide mt-5 relative overflow-hidden" id="testimonial">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @for ($i = 0; $i < 2; $i++)
                                <li class="splide__slide">
                                    <h5 class="font-bold text-md mb-4">
                                        “My child has flourished since joining EduALL Junior.”
                                    </h5>
                                    <p class="font-light mb-4">
                                        “The nurturing environment, combined with engaging activities, has sparked a
                                        newfound
                                        curiosity and love for learning. I'm grateful for the dedicated teachers who go
                                        above
                                        and beyond to support my child's growth and development.”
                                    </p>

                                    <div class="flex gap-5 flex-nowrap">
                                        <div class="w-1/12">
                                            <img src="https://placehold.co/80x80" alt="" class="rounded-full">
                                        </div>
                                        <div class="w-5/12">
                                            <h5 class="font-bold text-md text-primary mb-0">
                                                Leslie Chung
                                            </h5>
                                            <p>
                                                Mom of Bryan Chung, 6 y.o
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <div class="flex gap-2 absolute bottom-[10px] right-[20px]">
                        <button class="bg-primary/30 hover:bg-primary/50 text-primary w-[30px] h-[30px] rounded-full"
                            onclick="arrowSplide('prev', testimonial)">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="bg-primary/30  hover:bg-primary/50  text-primary w-[30px] h-[30px] rounded-full"
                            onclick="arrowSplide('next', testimonial)">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </section>
            </div>
        </div>
    </section>

    {{-- Our Event  --}}
    <section class="w-100 py-[50px] bg-secondary">
        <div class="main-container">
            <div class="flex flex-wrap items-center">
                <div class="w-full md:w-2/5">
                    <div class="bg-red py-1 px-4 inline rounded-full text-white">
                        OUR EVENTS
                    </div>
                    <h2 class="font-bold text-3xl mt-5 sm:mb-4">
                        Let's <span class="text-yellow">Collaborate!</span>
                    </h2>
                </div>
                <div class="w-full md:w-3/5">
                    <p class="font-light text-lg">
                        Book our exciting and engaging class for pop-up events or birthdays at your venue. For further
                        information, please contact us.
                    </p>
                    <div class="flex flex-wrap mt-3 font-light text-lg">
                        <span class="p-2">
                            <i class="fas fa-phone me-1 text-primary"></i>
                            +628 111 2323 2342
                        </span>
                        <span class="p-2">
                            <i class="fas fa-envelope me-1 text-primary"></i>
                            hello@edualljunior.com
                        </span>
                    </div>
                </div>
            </div>

            <section class="splide mt-10" id="events">
                <div class="splide__track">
                    <ul class="splide__list">
                        @for ($i = 0; $i < 6; $i++)
                            <li class="splide__slide">
                                <div class="border relative overflow-hidden rounded-lg shadow-md mb-3">
                                    <img src="https://placehold.co/500x300" alt="" class="w-full">
                                    <div class="font-light mt-2 p-3">
                                        <h6 class="font-bold text-lg">
                                            Coding & Robotics EduFair
                                        </h6>
                                        <ul class="mt-4">
                                            <li>
                                                <i class="fas fa-calendar me-1 text-primary"></i>
                                                12 May 2024 | 14.00 - 16.00
                                            </li>
                                            <li>
                                                <i class="fas fa-map-pin text-primary me-2"></i>
                                                Kids Cafe, Jakarta Barat
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        @endfor
                    </ul>
                </div>
                <div class="flex gap-2 mt-3">
                    <button class="bg-yellow/30 hover:bg-yellow/50 text-yellow w-[30px] h-[30px] rounded-full"
                        onclick="arrowSplide('prev', events)">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="bg-yellow/30  hover:bg-yellow/50  text-yellow w-[30px] h-[30px] rounded-full"
                        onclick="arrowSplide('next', events)">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </section>
        </div>
    </section>

    {{-- Schedule Form  --}}
    <section class="bg-blue text-white py-[50px]">
        <div class="main-container">
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2">
                    <div class="bg-red py-1 px-4 inline rounded-full text-white">
                        CONTACT US
                    </div>
                    <h2 class="font-bold text-3xl mt-5">
                        <span class="text-yellowLight underline">Schedule</span> your FREE trial now!
                    </h2>
                    <p class="text-lg font-light mt-5">
                        Experience our programs in one-week trial where your kid can explore the classes they are interested
                        in. Each kid will be observed by our mentors and psychologists, with a personalized assessment at
                        the end of the trial period.
                    </p>
                </div>

                <div class="w-full md:w-1/2">

                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        var testimonial = new Splide('#testimonial', {
            type: 'loop',
            perPage: 1,
            pagination: false,
            arrows: false,
        });
        testimonial.mount();

        var events = new Splide('#events', {
            type: 'loop',
            perPage: 3,
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
        events.mount();

        function arrowSplide(type, element) {
            if (type == 'prev') {
                element.go('<')
            } else {
                element.go('>')
            }
        }
    </script>
@endsection
