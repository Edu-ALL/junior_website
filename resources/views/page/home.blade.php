@extends('layout.user.main')

@section('title', 'EduALL Junior')

@section('content')
    {{-- Banner & Description --}}
    <section class="w-100 bg-secondary pt-[100px]">
        <div class="main-container">
            <div class="max-w-xl mx-auto text-center">
                <div class="flex justify-center">
                    <img src="{{ asset('img/logo/eduall.png') }}" alt="EduALL Junior" class="md:w-[200px] w-[150px] flex justify-center">
                </div>
                <h1 class="font-bold md:text-[2em] text-[1.5em] font-primary">
                    One-stop solution to unlock <br>
                    your <span class="text-blue/60">kid's potential</span>
                </h1>
                <p class="mt-3">
                    Playful Learning Center for Kid’s Interests & Skills Exploration
                </p>
            </div>
            <div class="flex flex-nowrap mt-5 md:gap-5 gap-1">
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
            <div class="w-full md:w-3/5 text-white md:px-32">
                <div class="mb-10">
                    <div class="flex">
                        <div class="w-full md:w-6/7">
                            <h3 class="font-bold text-lg">
                                Programs developed by <span class="text-yellowLight"> experts, research-informed,</span> and <span class="text-yellowLight">expert-approved</span>
                            </h3>
                        </div>
                    </div>
                    <p class="font-light mt-3">
                        We understand that raising kids requires diverse perspectives and opinions. That's why we collaborate with international and local educators, industry professionals, parents, and tested the courses with kids to ensure our curriculum and lessons are relevant to today's world while being relatable and fun for kids.
                    </p>
                </div>

                <div class="mb-10">
                    <div class="flex">
                        <div class="w-full md:w-6/7">
                            <h3 class="font-bold text-lg">
                                <span class="text-yellowLight">Personalized student journey </span> by  in-house psychologists & experts
                            </h3>
                        </div>
                    </div>
                    <p class="font-light mt-3">
                        Our educators and psychologists will closely observe and monitor each child's progress in class and through their projects. By evaluating and assessing the development of kid's interests and early skills, they can provide personalized recommendations, pathways, and modules. This approach ensures that each kid's unique needs are met, allowing them to fully develop and maximize their potential.
                    </p>
                </div>
                <div class="mb-10">
                    <div class="flex">
                        <div class="w-full md:w-6/7">
                            <h3 class="font-bold text-lg">
                                Offering <span class="text-yellowLight"> holistic</span> & <span class="text-yellowLight">playful approach</span> for your kids education
                            </h3>
                        </div>
                    </div>
                    <p class="font-light mt-3">
                        Kids thrive when they're having fun because it sparks their imagination, creativity, and social skills. By tapping into their love for play, we can seamlessly weave in educational thoughts and values suited to their age. This playful learning approach ensures that during their crucial developmental stages, children grow holistically, optimizing their cognitive, emotional, and social development.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- How it Works  --}}
    <section class="h-[800px] w-100 bg-yellow/20">

    </section>

    {{-- Programs  --}}
    <section class="h-[800px] w-100 bg-red">

    </section>

    {{-- Testimonial  --}}
    <section class="h-[800px] w-100 bg-secondary">

    </section>

    {{-- Our Event  --}}
    <section class="h-[800px] w-100 bg-secondary">

    </section>

    {{-- Schedule Form  --}}
    <section class="h-[800px] w-100 bg-blue">

    </section>
@endsection
