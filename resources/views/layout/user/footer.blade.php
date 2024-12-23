<footer class="bg-[#f4f3ff] pt-[150px]  pb-6">
    <div class="main-container">
        <div class="flex flex-wrap">
            <!-- Column 1 -->
            <div class="w-full md:w-2/4 px-4 md:text-start text-center md:mb-0 mb-5">
                <div class="flex md:justify-start justify-center">
                    <img loading="lazy" src="{{ asset('img/logo/EduALL.webp') }}" alt="EduALL Junior"
                        class="md:w-[150px] w-[100px]">
                </div>
                <p class="mt-2">
                    Sentra Niaga Puri Indah, Jl. Puri Indah Raya Lingkar Blok T 2 No.19-20, RT.1/RW.2, 
                     Kembangan Sel., Kec. Kembangan, <br> Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11610
                </p>
            </div>

            <!-- Column 2 -->
            <div class="w-full md:w-1/4 px-4 md:text-start text-center md:mb-0 mb-5">
                <h2 class="text-lg font-semibold mb-4 text-primary">Company</h2>
                <ul>
                    <li class="mb-3">
                        <a href="{{ route('home', ['locale' => app()->getLocale()]) }}">
                            {{ __('navbar.home') }}
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="{{ route('about-us', ['locale' => app()->getLocale()]) }}">
                            {{ __('navbar.about') }}
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="{{ route('programs', ['locale' => app()->getLocale()]) }}">
                            {{ __('navbar.program') }}
                        </a>
                    </li>
                    {{-- <li class="mb-3">
                        <a href="{{ route('blogs', ['locale' => app()->getLocale()]) }}">
                            {{ __('navbar.blog') }}
                        </a>
                    </li> --}}
                    <li class="mb-3">
                        <a href="{{ route('contact-us', ['locale' => app()->getLocale()]) }}">
                            {{ __('navbar.contact') }}
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Column 3 -->
            <div class="w-full md:w-1/4 px-4 md:text-end text-center md:mb-0 mb-5">
                <h2 class="text-lg font-semibold mb-4 text-primary">Follow Us</h2>
                <ul>
                    <li class="mb-3">
                        <a href="#">
                            Facebook
                            <i class="fa-brands fa-facebook ms-2 text-primary"></i>
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="https://www.instagram.com/eduall.junior/" target="_blank">
                            Instagram
                            <i class="fa-brands fa-instagram ms-2 text-primary"></i>
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#">
                            Youtube
                            <i class="fa-brands fa-youtube ms-2 text-primary"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="w-full md:w-4/4 px-4 text-center mt-5">
                <hr class="mb-5">
                Copyright ©EduALL Junior {{ date('Y') }}. All rights reserved.
            </div>
        </div>
</footer>

<!--Fontawesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

{{-- GSAP  --}}
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
@stack('script')
