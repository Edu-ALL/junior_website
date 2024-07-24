<nav class="bg-white/0 border-gray-200 dark:bg-gray-900 fixed w-[100%] transition-all duration-300 ease-in-out z-[9999]"
    id="navbar">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img loading="lazy" src="{{ asset('img/logo/eduall.png') }}" alt="EduALL Junior" class="w-100 h-14">
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white/0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>

                    <a href="{{ route('home', ['locale' => app()->getLocale()]) }}"
                        class="block py-2 px-3  {{ Route::currentRouteName() == 'home' ? 'text-white bg-blue rounded md:bg-transparent md:text-blue md:p-0 dark:text-white md:dark:text-blue' : 'text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue md:p-0 dark:text-white md:dark:hover:text-blue dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
                        {{ __('navbar.home') }}
                        @if (Route::currentRouteName() == 'home')
                            <div class="md:flex justify-center mt-2 hidden">
                                <span class="h-1 w-[50%] bg-blue flex rounded-sm"></span>
                            </div>
                        @endif
                    </a>
                </li>
                <li>
                    <a href="{{ route('about-us', ['locale' => app()->getLocale()]) }}"
                        class="block py-2 px-3  {{ Route::currentRouteName() == 'about-us' ? 'text-white bg-blue rounded md:bg-transparent md:text-blue md:p-0 dark:text-white md:dark:text-blue' : 'text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue md:p-0 dark:text-white md:dark:hover:text-blue dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
                        {{ __('navbar.about') }}
                        @if (Route::currentRouteName() == 'about-us')
                            <div class="md:flex justify-center mt-2 hidden">
                                <span class="h-1 w-[50%] bg-blue flex rounded-sm"></span>
                            </div>
                        @endif
                    </a>
                </li>
                <li>
                    <div class="flex">
                        <a href="{{ route('programs', ['locale' => app()->getLocale()]) }}"
                            class="w-full py-2 px-3 {{ Route::currentRouteName() == 'programs' ? 'text-white bg-blue rounded md:bg-transparent md:text-blue md:p-0 dark:text-white md:dark:text-blue' : 'text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue md:p-0 dark:text-white md:dark:hover:text-blue dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">{{ __('navbar.program') }}
                        </a>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar">
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                    </div>

                    @if (Request()->segment(2) == 'programs')
                        <div class="md:flex justify-center mt-2 hidden">
                            <span class="h-1 w-[50%] bg-blue flex rounded-sm"></span>
                        </div>
                    @endif
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-60 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ route('programs.science', ['locale' => app()->getLocale()]) }}"
                                    class="block px-4 py-2 {{ Route::currentRouteName() == 'programs.science' ? 'text-primary' : '' }} hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Science</a>
                            </li>
                            <li>
                                <a href="{{ route('programs.creative-communication', ['locale' => app()->getLocale()]) }}"
                                    class="block px-4 py-2 {{ Route::currentRouteName() == 'programs.creative-communication' ? 'text-primary' : '' }} hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Communications</a>
                            </li>
                            <li>
                                <a href="{{ route('programs.entrepreneurship', ['locale' => app()->getLocale()]) }}"
                                    class="block px-4 py-2 {{ Route::currentRouteName() == 'programs.entrepreneurship' ? 'text-primary' : '' }} hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Entrepreneurship</a>
                            </li>
                            <li>
                                <a href="{{ route('programs.coding-robotics', ['locale' => app()->getLocale()]) }}"
                                    class="block px-4 py-2 {{ Route::currentRouteName() == 'programs.coding-robotics' ? 'text-primary' : '' }} hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Creative
                                    Coding
                                    & Robotics</a>
                            </li>
                            <li>
                                <a href="{{ route('programs.visual-arts', ['locale' => app()->getLocale()]) }}"
                                    class="block px-4 py-2 {{ Route::currentRouteName() == 'programs.visual-arts' ? 'text-primary' : '' }} hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Visual Arts</a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- <li>
                    <a href="{{ route('blogs', ['locale' => app()->getLocale()]) }}"
                        class="block py-2 px-3  {{ Route::currentRouteName() == 'blogs' ? 'text-white bg-blue rounded md:bg-transparent md:text-blue md:p-0 dark:text-white md:dark:text-blue' : 'text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue md:p-0 dark:text-white md:dark:hover:text-blue dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
                        {{ __('navbar.blog') }}
                        @if (Route::currentRouteName() == 'blogs')
                            <div class="md:flex justify-center mt-2 hidden">
                                <span class="h-1 w-[50%] bg-blue flex rounded-sm"></span>
                            </div>
                        @endif
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('contact-us', ['locale' => app()->getLocale()]) }}"
                        class="block py-2 px-3  {{ Route::currentRouteName() == 'contact-us' ? 'text-white bg-blue rounded md:bg-transparent md:text-blue md:p-0 dark:text-white md:dark:text-blue' : 'text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue md:p-0 dark:text-white md:dark:hover:text-blue dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
                        {{ __('navbar.contact') }}
                        @if (Route::currentRouteName() == 'contact-us')
                            <div class="md:flex justify-center mt-2 hidden">
                                <span class="h-1 w-[50%] bg-blue flex rounded-sm"></span>
                            </div>
                        @endif
                    </a>
                </li>
                <li>
                    <label class="inline-flex items-center cursor-pointer md:ps-8 md:pe-2 ps-12">
                        <input type="checkbox" value="" class="sr-only peer"
                            {{ app()->getLocale() == 'id' ? 'checked' : '' }}
                            onchange="changeLang('{{ app()->getLocale() }}')">
                        <span
                            class="-me-[61px] z-[9999] text-[12px] font-extrabold peer-checked:text-blue text-dark dark:text-gray-300">ID</span>
                        <div
                            class="relative w-[70px] h-6 bg-[#D8D9F4] rounded-full peer peer-focus:ring-4 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[1px] peer-checked:after:start-[12px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-7 after:transition-all dark:border-gray-600 peer-checked:bg-[#D8D9F4]">
                        </div>
                        <span
                            class="-ms-[63px] z-[9999] text-[12px] font-extrabold peer-checked:text-dark text-blue dark:text-gray-300">EN</span>
                    </label>
                </li>
                <li>
                    <button type="button"
                        class="text-white bg-[#0004f6] hover:bg-blue focus:outline-none focus:ring-4 focus:ring-blue rounded-full text-sm px-5 pt-1 pb-1.5 text-center me-2 mb-2 dark:bg-[#0004f6] dark:hover:bg-blue dark:focus:ring-blue md:ms-0 md:mt-0 ms-3 mt-3 w-full font-bold">
                        {{ __('navbar.schedule') }}
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>

@push('script')
    <script>
        function changeLang(lang) {
            var locale = lang == 'en' ? 'id' : 'en'
            var route_name = '{{ Route::currentRouteName() }}'
            var segment2 = '{{ Request()->segment(2) ? Request()->segment(2) . '/' : '' }}'
            var segment3 = '{{ Request()->segment(3) ? Request()->segment(3) . '/' : '' }}'

            var url = '{{ url('') }}/' + locale + '/' + segment2 +
            segment3; // Constructing the URL with the updated locale
            window.location.href = url;
        }
    </script>
@endpush
