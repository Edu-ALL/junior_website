<footer class="bg-[#f4f3ff]  py-6">
    <div class="main-container">
        <div class="flex flex-wrap">
            <!-- Column 1 -->
            <div class="w-full md:w-2/4 px-4 md:text-start text-center md:mb-0 mb-5">
                <img src="{{ asset('img/logo/eduall.png') }}" alt="EduALL Junior" class="md:w-[150px]">
                <p class="mt-2">
                    Jl Kembangan 23, Jakarta Barat <br>
                    DKI Jakarta
                </p>
            </div>

            <!-- Column 2 -->
            <div class="w-full md:w-1/4 px-4 md:text-start text-center md:mb-0 mb-5">
                <h2 class="text-lg font-semibold mb-4">Company</h2>
                <ul>
                    <li>Home</li>
                    <li>About Us</li>
                    <li>Programs</li>
                </ul>
            </div>

            <!-- Column 3 -->
            <div class="w-full md:w-1/4 px-4 md:text-end text-center md:mb-0 mb-5">
                <h2 class="text-lg font-semibold mb-4">Follow Us</h2>
                <ul>
                    <li>Facebook</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                </ul>
            </div>

            <div class="w-full md:w-4/4 px-4 text-center mt-5">
                <hr class="mb-5">
                Copyright ©EduALL Junior {{ date('Y') }}. All rights reserved.
            </div>
        </div>
</footer>

<!--Fontawesome-->
<script src="https://kit.fontawesome.com/d11faf3e43.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
@yield('script')
