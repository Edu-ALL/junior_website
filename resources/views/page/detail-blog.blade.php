@extends('layout.user.main')

@section('title', 'EduALL Junior | ' . $blog->blog_title)

@section('meta_seo')
    <meta name="title" content="{{ $blog->seo_title }}">
    <meta name="keyword" content="{{ $blog->seo_keyword }}">
    <meta name="description" content="{{ $blog->seo_desc }}">
@endsection

@section('content')
    {{-- Banner & Description --}}
    <section class="w-100 bg-primaryBg pt-[100px] relative pb-24">

        <div class="main-container z-10">
            {{-- Breadcrumb --}}
            <nav class="flex py-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="{{ route('blogs', ['locale' => $locale]) }}"
                            class="inline-flex items-center text-lg font-bold text-blue hover:text-orange dark:text-gray-400 dark:hover:text-white">
                            Blogs
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <span class="mx-2 text-lg text-gray">/</span>
                            <span class="ms-1 text-lg font-medium text-gray-500 md:ms-2 dark:text-gray-400">
                                {{ $blog->blog_title }}
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
                                        {{ strtoupper($blog->category->category_name) }}
                                    </div>
                                    <span class="text-sm text-dark">24 Apr 2024</span>
                                </div>
                                <h2 class="font-bold text-3xl my-5">
                                    {{ $blog->blog_title }}
                                    {{-- {{ __('science.testimonials_title') }} <span class="text-blue">{{ __('science.about_us') }}</span> --}}
                                </h2>
                                <p class="font-semibold mb-4">
                                    “{{ $blog->blog_summary }}”
                                </p>
                            </li>
                        </div>
                    </div>
                </div>

                {{-- <div class="bg-blue rounded-2xl flex flex-row p-6 mt-12">
                    <div class="flex flex-col gap-2">
                        <h2 class="text-white font-semibold text-base">
                            Creative Coding & Robotics Bootcamp Summer Holiday 2024
                        </h2>
                        <p class="text-white text-base leading-6 font-light">
                            Schedule a consultation with us today. Our experts will help you to discover their potential
                            skills.
                        </p>
                    </div>
                </div> --}}
            </div>
        </div>

        <div class="w-full md:w-2/5 absolute left-0 bottom-0 md:top-[35%] top-full md:block hidden z-0">
            <img loading="lazy"
                src="{{ asset('uploaded_files/blogs/' . $blog->created_at->format('Y') . '/' . $blog->created_at->format('m') . '/' . $blog->blog_thumbnail) }}"
                alt="" class="w-full object-cover md:h-[450px] rounded-e-full">
        </div>

    </section>

    <section class="pt-16 pb-24 bg-primaryBg">

        {{-- Blog Body --}}

        <div class="text-dark main-container blog_style">
            {!! $blog->blog_description !!}
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
                @foreach ($related_blogs as $related_blog)
                    <x-blog-card :slug="$related_blog->slug" :tag="strtoupper($related_blog->category->category_name)" :title="$related_blog->blog_title" :date="date('M dS Y', strtotime($related_blog->publish_date))" :description="$related_blog->blog_summary"
                        :thumbnail="asset(
                            'uploaded_files/blogs/' .
                                date('Y', strtotime($related_blog->created_at)) .
                                '/' .
                                date('m', strtotime($related_blog->created_at)) .
                                '/' .
                                $related_blog->blog_thumbnail,
                        )" :thumbnail_alt="$related_blog->blog_thumbnail_alt" />
                @endforeach
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
