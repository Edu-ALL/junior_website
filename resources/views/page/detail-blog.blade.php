@extends('layout.user.main')

@section('title', 'Detail Blog | EduALL Junior')

@section('content')
    {{-- Banner & Description --}}
    <section class="w-100 bg-primaryBg pt-[100px] relative pb-24">

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
                                Blog Detail
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>


        <div class="flex w-full mt-8 md:mt-24 main-container justify-end md:w-full">
            <div class="w-1/2">
                <div class="flex flex-wrap items-center justify-end md:py-0">
                    <div class="w-full">
                        {{-- Testimonial Component --}}
                        <div class="mt-5 relative overflow-x-hidden" id="testimonial">
                            <li class=" flex flex-col items-start">
                                <div class="flex items-center gap-4">
                                    <div class="bg-yellow py-1 px-4 inline rounded-full text-white text-sm font-semibold">
                                        CODING & ROBOTICS
                                    </div>
                                    <span class="text-sm text-dark">24 Apr 2024</span>
                                </div>
                                <h2 class="font-bold text-3xl my-5">
                                    Creative Coding & Robotics Bootcamp Summer Holiday 2024
                                    {{-- {{ __('science.testimonials_title') }} <span class="text-blue">{{ __('science.about_us') }}</span> --}}
                                </h2>
                                <p class="font-semibold mb-4">
                                    “The nurturing environment, combined with engaging activities, has sparked a
                                    newfound
                                    curiosity and love for learning. I'm grateful for the dedicated teachers who go
                                    above
                                    and beyond to support my child's growth and development.”
                                </p>
                            </li>
                        </div>
                    </div>
                </div>

                <div class="bg-blue rounded-2xl flex flex-row p-6 mt-12">
                    <div class="flex flex-col gap-2">
                        <h2 class="text-white font-semibold text-base">
                            Creative Coding & Robotics Bootcamp Summer Holiday 2024
                        </h2>
                        <p class="text-white text-base leading-6 font-light">
                            Schedule a consultation with us today. Our experts will help you to discover their potential skills.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full md:w-2/5 absolute left-0 bottom-0 md:top-[35%] top-full md:block hidden z-0">
            <img loading="lazy" src="{{ asset('img/blog/image/Why.png') }}" alt="" class="w-full object-cover">
        </div>

    </section>

    <section class="pt-32 pb-24 bg-primaryBg">

        {{-- Blog Body --}}

        <div class="text-dark main-container">
            <p>
                Lorem ipsum dolor sit amet consectetur. Ornare bibendum a nunc est blandit diam donec nibh. Leo in dictum
                sed sed auctor elit. Sed adipiscing massa duis arcu quam nibh a ultrices euismod. Tempor pellentesque sit
                nec condimentum lobortis adipiscing donec amet. Nulla viverra in et dignissim platea pulvinar in platea ac.
                Ullamcorper facilisi enim tincidunt risus adipiscing tristique consectetur velit. Risus ipsum quis
                pellentesque malesuada. Arcu lectus vel arcu aenean orci imperdiet potenti integer nulla. Nullam suscipit
                dignissim sem proin non. Facilisi at maecenas tincidunt sagittis orci fames suspendisse sed. Enim ac proin
                ac urna lacus at morbi volutpat. Sed amet arcu posuere ut velit ornare feugiat quis tempor. Nisl quisque
                fermentum integer in ultrices amet. Amet tincidunt odio quis varius morbi faucibus mi. Velit augue lobortis
                et semper. Ante est scelerisque platea amet arcu cras sit.
                <br><br>
                Lorem ipsum dolor sit amet consectetur. Ornare bibendum a nunc est blandit diam donec nibh. Leo in dictum
                sed sed auctor elit. Sed adipiscing massa duis arcu quam nibh a ultrices euismod. Tempor pellentesque sit
                nec condimentum lobortis adipiscing donec amet. Nulla viverra in et dignissim platea pulvinar in platea ac.
                Ullamcorper facilisi enim tincidunt risus adipiscing tristique consectetur velit. Risus ipsum quis
                pellentesque malesuada. Arcu lectus vel arcu aenean orci imperdiet potenti integer nulla. Nullam suscipit
                dignissim sem proin non. Facilisi at maecenas tincidunt sagittis orci fames suspendisse sed. Enim ac proin
                ac urna lacus at morbi volutpat. Sed amet arcu posuere ut velit ornare feugiat quis tempor. Nisl quisque
                fermentum integer in ultrices amet. Amet tincidunt odio quis varius morbi faucibus mi. Velit augue lobortis
                et semper. Ante est scelerisque platea amet arcu cras sit.
                <br><br>
                Lorem ipsum dolor sit amet consectetur. Ornare bibendum a nunc est blandit diam donec nibh. Leo in dictum
                sed sed auctor elit. Sed adipiscing massa duis arcu quam nibh a ultrices euismod. Tempor pellentesque sit
                nec condimentum lobortis adipiscing donec amet. Nulla viverra in et dignissim platea pulvinar in platea ac.
                Ullamcorper facilisi enim tincidunt risus adipiscing tristique consectetur velit. Risus ipsum quis
                pellentesque malesuada. Arcu lectus vel arcu aenean orci imperdiet potenti integer nulla. Nullam suscipit
                dignissim sem proin non. Facilisi at maecenas tincidunt sagittis orci fames suspendisse sed. Enim ac proin
                ac urna lacus at morbi volutpat. Sed amet arcu posuere ut velit ornare feugiat quis tempor. Nisl quisque
                fermentum integer in ultrices amet. Amet tincidunt odio quis varius morbi faucibus mi. Velit augue lobortis
                et semper. Ante est scelerisque platea amet arcu cras sit.
            </p>
        </div>
    </section>

    {{-- All Blog --}}
    <section class="bg-orangeBg py-24">
        <div class="main-container">
            <div class="flex flex-col md:flex-row justify-between items-center w-full py-8">
                <h2 class="font-bold text-3xl my-2 md:my-0 text-center">
                    Related Articles
                </h2>
            </div>
            <div class="flex flex-wrap items-start justify-center gap-8">
                <x-blog-card :tag="'SCIENCE'" :title="'Trials & Errors for Kids'" :date="'24 July 2024'" :description="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros. Placerat dignissim duis ultrices gravida pharetra rhoncus adipiscing.'" :thumbnail="'https://placehold.co/400x300'"
                    :thumbnail_alt="'thumbnail alt'" />
                <x-blog-card :tag="'SCIENCE'" :title="'Participating in Science Experiments for Educational'" :date="'24 July 2024'" :description="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros. Placerat dignissim duis ultrices gravida pharetra rhoncus adipiscing.'" :thumbnail="'https://placehold.co/400x300'"
                    :thumbnail_alt="'thumbnail alt'" />
                <x-blog-card :tag="'SCIENCE'" :title="'Kids and Adult Science Curriculum'" :date="'24 July 2024'" :description="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros. Placerat dignissim duis ultrices gravida pharetra rhoncus adipiscing.'" :thumbnail="'https://placehold.co/400x300'"
                    :thumbnail_alt="'thumbnail alt'" />
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
    <x-contact :color="'blue'" />
@endsection


@push('script')
    <script>
        var testimonial = new Splide('#testimonial', {
            type: 'loop',
            perPage: 1,
            pagination: false,
            arrows: false,
        });
        testimonial.mount();

        function arrowSlide(type) {
            if (type == 'prev') {
                testimonial.go('<')
            } else {
                testimonial.go('>')
            }
        }
    </script>
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