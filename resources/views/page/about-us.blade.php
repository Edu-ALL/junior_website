@extends('layout.user.main')

@section('title', 'EduALL Junior')

@section('content')
    {{-- WHO WE ARE --}}
    <section class="w-100 bg-secondary pt-[100px] relative z-20">
        <img src="{{ asset('img/home/element/Jumbotron.png') }}" class="md:w-[200px] w-[80px] absolute top-20 left-0">
        <div class="flex flex-nowrap mt-5 gap-5 pt-[25px] pb-[100px] relative overflow-hidden">
            <div class="w-full md:w-3/5 md:px-32 px-8">
                <div class="bg-red py-1 px-4 inline rounded-full text-white">
                    WHO WE ARE
                </div>
                <h2 class="font-bold text-3xl my-4">
                    We are on mission to empower your kids to become future change-makers
                </h2>
                <p class="text-lg mb-4">
                    At EduALL Junior, we spark curiosity in every kid, celebrating their unique interests, talents, and
                    learning styles.
                </p>
                <p class="text-lg mb-4">
                    Our mission is to foster an entrepreneurial mindset, equipping individuals to be adaptable and resilient
                    in our rapidly changing world. Those who can swiftly adjust, adapt, and bounce back from setbacks are
                    better positioned for success. This mindset empowers individuals to confidently and creatively navigate
                    uncertainties and challenges. Embracing diversity and fostering exploration through play-based methods,
                    kids develop skills at their own pace. Interactive games, hands-on activities, and creative exploration
                    offer meaningful opportunities for them to pursue their interests and express creativity.
                </p>
                <p class="text-lg mb-4">
                    Our dedicated educators prioritize both academic growth and social-emotional development, nurturing each
                    kids within a supportive and inclusive environment at the playful learning center.
                </p>
            </div>
            <div class="w-full md:w-2/5 absolute right-0 bottom-40 md:block hidden">
                <img src="{{ asset('img/about/WhoWeAre.png') }}" alt="" class="w-full">
            </div>
        </div>
    </section>

    {{-- Our Methodology and Pedagogy  --}}
    <section class="w-100 bg-blue py-[80px] relative z-10">
        <div class="flex justify-end mt-10">
            <div class="w-full md:w-2/5 absolute left-0 mt-[1%] md:block hidden">
                <img src="{{ asset('img/about/OurMethodology.png') }}" alt="" class="w-[100%]">
            </div>
            <div class="w-full md:w-3/5 text-white md:px-32 px-8">
                <div class="mb-10">
                    <h3 class="font-bold text-4xl mb-10">
                        Our <span class="text-yellowLight underline">Methodology</span>
                        and
                        <span class="text-yellowLight underline">Pedagogy</span>
                    </h3>
                    <p class="font-light text-lg mt-3">
                        Preparing kids for the future involves cultivating a multifaceted skill set and fostering a growth
                        mindset. Encourage curiosity and a love for learning by exposing them to diverse experiences and
                        supporting their interests.
                    </p>

                    <ol class="text-lg mt-6">
                        <li class="mb-3">
                            <div class="flex flex-nowrap">
                                <div
                                    class="bg-primary text-white w-[25px] h-[25px] p-1 rounded-full flex justify-center items-center">
                                    <span class="fa-solid fa-1 "></span>
                                </div>
                                <div class="w-full ps-3">
                                    We develop our program by involving international and local educators, psychologists,
                                    industry experts, parents, and kids to ensure it is high-quality, relevant to today's
                                    needs, and enjoyable for the kids. By mixing the kids in various activities and
                                    exercises, we enable them to gain ideas from different cultures, backgrounds, abilities,
                                    and perspectives.
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="flex flex-nowrap">
                                <div
                                    class="bg-primary text-white w-[25px] h-[25px] p-1 rounded-full flex justify-center items-center">
                                    <span class="fa-solid fa-2"></span>
                                </div>
                                <div class="w-full ps-3">
                                    We build confidence in our students through collaborative work, fostering positive
                                    learning environment, and encouraging mutual feedback.
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    {{-- CREST Award Certifications  --}}
    <section class="w-100 bg-yellow/20 relative z-5">
        <img src="{{ asset('img/about/element/CrestAward_1.png') }}"
            class="md:w-[150px] w-[80px] absolute md:bottom-10 bottom-0 left-0">
        <img src="{{ asset('img/home/element/LearningJourney.png') }}"
            class="md:w-[150px] w-[80px] absolute md:top-10 top-0 right-0">
        <div class="main-container">
            <div class="flex flex-wrap items-center md:pt-[200px] md:pb-[100px] py-[50px]">
                <div class="w-full px-2 mb-3 mt-5 text-center">
                    <h2 class="font-extrabold text-4xl mb-10">
                        <span class="text-red underline">
                            CREST Award
                        </span>
                        Certifications
                    </h2>

                    <div class="flex justify-center my-10">
                        <img src="{{ asset('img/logo/CrestAward.png') }}" alt="" class="w-[300px] object-cover">
                    </div>

                    <h5 class="text-xl my-5 font-bold">
                        <i class="fas fa-check-circle me-2 text-primary"></i>
                        International certifications
                    </h5>
                    <p class="text-lg my-5 md:px-[150px] px-6">
                        CREST Awards is internationally recognized scheme for student-led project work in the STEM subjects
                        (science, technology, engineering and maths) founded by the British Science Association. EduALL
                        Programs in science, creative coding & robotics, creative communication, entrepreneurship & visual
                        arts have been certified by CREST Award, so the student's activities can count toward their CREST
                        certifications.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Programs Co-Developers  --}}
    <section class="w-100 bg-red text-white relative">
        <img src="{{ asset('img/about/element/OurPeople.png') }}" class="md:w-[300px] w-[80px] absolute top-0 right-0">
        <div class="main-container py-[100px]">
            <div class="text-start mb-5">
                <div class="bg-blue py-1 px-4 inline rounded-full text-white">
                    OUR PEOPLE
                </div>
                <h2 class="font-bold text-4xl my-5 mb-10">
                    Program
                    <span class="text-yellowLight underline">Co-developers</span>
                </h2>
            </div>
            <div class="flex flex-wrap justify-center">
                <div class="md:w-1/2 w-full  relative md:pe-3 pe-0">
                    <div class="h-[350px] relative overflow-hidden">
                        <img src="https://placehold.co/800x300" alt=""
                            class="relative z-[0] w-full h-[350px] object-cover rounded-xl">

                        <i
                            class="fa-solid fa-arrow-up-right-from-square text-yellowLight text-xl mt-1 absolute top-5 left-5"></i>
                        <div class="py-2 px-20 bg-primary rounded-full absolute bottom-10 -left-10 text-lg font-bold">
                            Francisco Castro, PhD
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 w-full relative md:ps-3 ps-0">
                    <div class="h-[350px] relative overflow-hidden">
                        <img src="https://placehold.co/800x300" alt=""
                            class="relative z-[0] w-full h-[350px] object-cover rounded-xl">

                        <i
                            class="fa-solid fa-arrow-up-right-from-square text-yellowLight text-xl mt-1 absolute top-5 left-5 rotate-180"></i>
                        <div class="py-2 px-20 bg-primary rounded-full absolute bottom-10 -left-10 text-lg font-bold">
                            Noora Noushad, PhD
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Facilities  --}}
    <section class="w-100 bg-secondary relative">
        <img src="{{ asset('img/about/element/Facilities.png') }}" class="md:w-[200px] w-[80px] absolute top-0 right-0">

        <div class="main-container py-[100px]">
            <div class="bg-yellow py-1 px-4 inline rounded-full text-white">
                FACILITIES
            </div>
            <h2 class="font-bold text-4xl mt-4 mb-7">
                <span class="text-blue">EduALL Junior</span> Playful Learning Center
            </h2>
            <div class="flex flex-wrap items-center">
                <div class="w-full md:w-2/4 md:pe-10 pe-0 md:px-0 px-6 mb-4">
                    <section id="main-slider" class="splide"
                        aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide rounded-lg">
                                    <img src="https://placehold.co/500x300" alt="">
                                </li>
                                <li class="splide__slide rounded-lg">
                                    <img src="https://placehold.co/500x400" alt="">
                                </li>
                                <li class="splide__slide rounded-lg">
                                    <img src="https://placehold.co/500x500" alt="">
                                </li>
                            </ul>
                        </div>
                    </section>

                    <section id="thumbnail-slider" class="splide mt-3"
                        aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide rounded-lg">
                                    <img src="https://placehold.co/500x300" alt="">
                                </li>
                                <li class="splide__slide rounded-lg">
                                    <img src="https://placehold.co/500x400" alt="">
                                </li>
                                <li class="splide__slide rounded-lg">
                                    <img src="https://placehold.co/500x500" alt="">
                                </li>
                            </ul>
                        </div>
                    </section>

                </div>
                <div class="w-full md:w-2/4 md:ps-10 ps-0 md:px-0 px-6">
                    <p class="text-lg my-4">
                        Our brand new center provides a warm and welcoming atmosphere where kids feel comfortable and
                        motivated to learn, equipped with:
                    </p>
                    <ol class="text-lg">
                        <li class="my-3">Makerspace</li>
                        <li class="my-3">Classroom</li>
                        <li class="my-3">Mini Library</li>
                        <li class="my-3">Public Speaking Corner</li>
                        <li class="my-3">Multi Function Area</li>
                    </ol>

                    <p class="text-lg my-4">
                        We also provide kids with a unique chance to connect with nature through active participation in
                        physical activities and hands-on, experiential learning. Our learning activities extends beyond
                        classrooms, enabling kids to explore and learn directly from their environment.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Schedule Form  --}}
    <x-contact :color="'blue'" />
@endsection

@push('script')
    <script>
        var main = new Splide('#main-slider', {
            type: 'fade',
            heightRatio: 0.5,
            pagination: false,
            arrows: false,
            cover: true,
        });

        var thumbnails = new Splide('#thumbnail-slider', {
            rewind: true,
            fixedWidth: '30%',
            fixedHeight: 100,
            isNavigation: true,
            gap: 10,
            focus: 'center',
            pagination: false,
            cover: true,
            arrows: false,
            dragMinThreshold: {
                mouse: 4,
                touch: 10,
            },
            breakpoints: {
                640: {
                    fixedWidth: 66,
                    fixedHeight: 38,
                },
            },
        });

        main.sync(thumbnails);
        main.mount();
        thumbnails.mount();
    </script>
@endpush
