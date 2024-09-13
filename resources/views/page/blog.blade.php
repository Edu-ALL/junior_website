@extends('layout.user.main')

@section('title', 'Blog | EduALL Junior')

@section('content')
    {{-- Banner & Description --}}
    <section class="w-100 bg-primaryBg pt-[100px] relative pb-24 z-10">
        {{-- Accent --}}
        <img loading="lazy" src="{{ asset('img/blog/accent/Whatson.png') }}"
            class="md:w-[180px] w-[80px] absolute top-36 left-0 z-10">

        <div class="main-container relative z-20">
            <div class="flex flex-col items-center py-12 max-w-3xl mx-auto gap-5">
                <h1 class="text-4xl md:text-5xl font-bold text-center text-dark">
                    {!! __('blog.title') !!}
                </h1>
            </div>
        </div>


        <div class="flex w-full justify-start mt-8 md:mt-24 main-container flex-col">
            <h2 class="font-bold text-3xl text-center md:text-left underline text-blue decoration-primary/20 mb-8">
                What’s On
            </h2>
            <div class="flex flex-wrap items-center md:py-0 py-[50px]">
                <div class="w-full md:w-1/2">
                    {{-- Testimonial Component --}}
                    <div class="splide mt-5 relative overflow-x-hidden pb-20" id="blogs">
                        <div class="splide__track">
                            <ul class="splide__list">
                                @foreach ($latest as $item)
                                    <li class="splide__slide flex flex-col items-start">
                                        <div class="flex items-center gap-4">
                                            <div
                                                class="bg-yellow py-1 px-4 inline rounded-full text-white text-sm font-semibold uppercase">
                                                {{ $item->category->category_name }}
                                            </div>
                                            <span class="text-sm text-dark">
                                                {{ date('M dS Y', strtotime($item->created_at)) }}
                                            </span>
                                        </div>
                                        <h2 class="font-bold text-3xl my-5">
                                            {{ $item->blog_title }}
                                            {{-- {{ __('science.testimonials_title') }} <span class="text-blue">{{ __('science.about_us') }}</span> --}}
                                        </h2>
                                        <p class="font-light mb-4">
                                            {{ $item->blog_summary }}
                                        </p>
                                        <a href="{{ route('blog.detail', ['slug' => $item->slug, 'locale' => app()->getLocale()]) }}"
                                            class="flex items-center gap-2 text-base text-blue font-bold justify-center">
                                            Read More
                                            <span
                                                class="ml-1 bg-blue text-white rounded-full h-5 w-5 flex items-center justify-center"><i
                                                    class="fas fa-arrow-right text-xs"></i></span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="flex gap-2 absolute -bottom-0 left-0">
                            <button class="bg-primary/30 hover:bg-primary/50 text-primary w-[30px] h-[30px] rounded-full"
                                onclick="arrowSlide('prev')">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="bg-primary/30  hover:bg-primary/50  text-primary w-[30px] h-[30px] rounded-full"
                                onclick="arrowSlide('next')">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full md:w-2/5 absolute right-0 bottom-0 md:top-[40%] top-full md:block hidden z-1">
            <div class="splide" id="blog_gallery">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($latest as $item)
                            <li class="splide__slide">
                                <img loading="lazy"
                                    src="{{ asset('uploaded_files/blogs/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->blog_thumbnail) }}"
                                    alt="{{ $item->blog_thumbnail_alt }}" title="{{ $item->blog_title }}"
                                    class="w-full object-cover h-[650px] rounded-s-full">
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- What your kids will learn --}}
    <section class="w-100 bg-blue pt-20 pb-12 md:pt-24 md:pb-20 relative z-0">
        <div class="flex justify-start main-container mb-12">
            <h2 class="text-3xl font-bold text-white text-center md:text-left">
                {{ __('blog.featured_article') }}
            </h2>
        </div>

        <div class="flex flex-col md:flex-row main-container gap-12">
            <div class="flex flex-col items-start text-white md:w-2/5">
                <div class="rounded-3xl overflow-hidden mb-8 w-full aspect-square">
                    <img loading="lazy"
                        src="{{ asset('uploaded_files/blogs/' . $highlight[0]->created_at->format('Y') . '/' . $highlight[0]->created_at->format('m') . '/' . $highlight[0]->blog_thumbnail) }}"
                        alt="{{ $highlight[0]->blog_thumbnail_alt }}" title="{{ $highlight[0]->blog_title }}"
                        class="w-full object-cover h-full rounded-3xl">
                </div>
                <div class="flex items-center gap-4">
                    <h2 class="bg-purple py-1 px-4 inline rounded-full text-white text-sm font-semibold uppercase">
                        {{ $highlight[0]->category->category_name }}
                    </h2>
                    <span class="text-sm text-white">
                        {{ date('M dS Y', strtotime($highlight[0]->created_at)) }}
                    </span>
                </div>
                <h2 class="font-bold text-3xl my-5">
                    {{ $highlight[0]->blog_title }}
                </h2>
                <p class="font-light mb-4">
                    {{ $highlight[0]->blog_summary }}
                </p>
                <a href="{{ route('blog.detail', ['slug' => $highlight[0]->slug, 'locale' => app()->getLocale()]) }}"
                    class="flex items-center gap-2 text-base text-white font-bold justify-center">
                    Read More
                    <span class="ml-1 bg-white text-blue rounded-full h-5 w-5 flex items-center justify-center"><i
                            class="fas fa-arrow-right text-xs"></i></span>
                </a>
            </div>
            <ul class="flex flex-col md:w-3/5 gap-4">
                @foreach ($highlight as $item)
                    @if ($loop->index > 0)
                        <li class="grid md:grid-cols-2 grid-cols-1 items-stre gap-4 mb-3">
                            <div class="rounded-3xl overflow-hidden w-full aspect-square md:h-[200px]">
                                <img loading="lazy"
                                    src="{{ asset('uploaded_files/blogs/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->blog_thumbnail) }}"
                                    alt="{{ $item->blog_thumbnail_alt }}" title="{{ $item->blog_title }}"
                                    class="w-full object-cover h-full rounded-2xl">
                            </div>
                            <div class="flex flex-col items-start text-white">
                                <div class="flex items-center gap-4">
                                    <h2
                                        class="bg-purple py-1 px-4 inline rounded-full text-white text-sm font-semibold uppercase">
                                        {{ $item->category->category_name }}
                                    </h2>
                                    <span class="text-sm text-white">
                                        {{ date('M dS Y', strtotime($item->created_at)) }}
                                    </span>
                                </div>
                                <h2 class="font-bold text-2xl my-3">
                                    {{ $item->blog_title }}
                                </h2>
                                <p class="font-light mb-4">
                                    {{ Str::limit($item->blog_summary, 100) }}
                                </p>
                                <a href="{{ route('blog.detail', ['slug' => $item->slug, 'locale' => app()->getLocale()]) }}"
                                    class="flex items-center gap-2 text-base text-white font-bold justify-center">
                                    Read More
                                    <span
                                        class="ml-1 bg-white text-blue rounded-full h-5 w-5 flex items-center justify-center"><i
                                            class="fas fa-arrow-right text-xs"></i></span>
                                </a>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </section>

    {{-- All Blog --}}
    <section class="bg-primaryBg py-24" id="category">
        <div class="main-container">
            <div class="flex flex-col md:flex-row justify-between items-center w-full pt-8">
                <h2 class="font-bold text-3xl my-2 md:my-0 text-center">
                    {{ __('blog.latest_article') }}
                </h2>
            </div>
            <div class="flex whitespace-nowrap overflow-x-auto my-4 py-4 gap-2">
                <a href="{{ url(app()->getLocale() . '/blog#category') }}"
                    class="py-1 px-4 inline rounded-full uppercase  text-sm {{ !Request()->route('slug') ? 'bg-primary text-white' : 'text-dark bg-slate-300' }}">
                    All
                </a>
                @foreach ($categories as $item)
                    <a href="{{ route('blog.category', ['slug' => $item->slug, 'locale' => app()->getLocale()]).'#category' }}"
                        class="py-1 px-4 inline rounded-full  text-sm uppercase {{ Request()->route('slug') == $item->slug ? 'bg-primary text-white' : 'text-dark bg-slate-300' }}">
                        {{ $item->category_name }}
                    </a>
                @endforeach
            </div>

            <div class="flex flex-wrap items-start justify-start gap-8">
                @foreach ($blogs as $item)
                    <x-blog-card :slug="$item->slug" :thumbnail_alt="$item->blog_thumbnail_alt" :tag="strtoupper($item->category->category_name)" :title="$item->blog_title" :date="date('M dS Y', strtotime($item->publish_date))"
                        :description="$item->blog_summary" :thumbnail="asset(
                            'uploaded_files/blogs/' .
                                date('Y', strtotime($item->created_at)) .
                                '/' .
                                date('m', strtotime($item->created_at)) .
                                '/' .
                                $item->blog_thumbnail,
                        )" />
                @endforeach

            </div>
        </div>
        <div class="main-container flex justify-center mt-10">
            @if (count($blogs) > 0)
                {{ $blogs->links('layout.user.pagination', ['topic' => 'category']) }}
            @else
            <h5 class="text-xl text-gray">Blog Not Found!</h5>
            @endif
        </div>
    </section>

    {{-- Schedule Form  --}}
    <x-contact :color="'blue'" />
@endsection


@push('script')
    <script>
        var testimonial = new Splide('#blogs', {
            type: 'loop',
            perPage: 1,
            pagination: false,
            arrows: false,
        });
        testimonial.mount();

        var galery = new Splide('#blog_gallery', {
            type: 'fade',
            rewind: true,
            perPage: 1,
            gap: 10,
            pagination: false,
            arrows: false,
        });
        galery.mount();

        function arrowSlide(type) {
            if (type == 'prev') {
                testimonial.go('<')
                galery.go('<')
            } else {
                testimonial.go('>')
                galery.go('>')
            }
        }
    </script>
@endpush
