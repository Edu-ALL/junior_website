<footer class="bg-[#f4f3ff]  py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap">
            <!-- Column 1 -->
            <div class="w-full md:w-2/4 px-4">
                <img src="{{ asset('img/logo/eduall.png') }}" alt="EduALL Junior" class="md:w-[150px]">
                <p class="mt-2">
                    Jl Kembangan 23, Jakarta Barat <br>
                    DKI Jakarta
                </p>
            </div>

            <!-- Column 2 -->
            <div class="w-full md:w-1/4 px-4">
                <h2 class="text-lg font-semibold mb-4">Company</h2>
                <ul>
                    <li>Home</li>
                    <li>About Us</li>
                    <li>Programs</li>
                </ul>
            </div>

            <!-- Column 3 -->
            <div class="w-full md:w-1/4 px-4 text-end">
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




@vite('resources/js/app.js')
