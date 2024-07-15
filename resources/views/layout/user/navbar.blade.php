<nav class="bg-white/0 border-gray-200 dark:bg-gray-900 fixed w-[100%] transition-all duration-300 ease-in-out z-[9999]" id="navbar">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('img/logo/eduall.png') }}" alt="EduALL Junior" class="w-100 h-14">
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
                    <a href="#"
                        class="block py-2 px-3 text-white bg-blue rounded md:bg-transparent md:text-blue md:p-0 dark:text-white md:dark:text-blue"
                        aria-current="page">
                        Home
                        <div class="md:flex justify-center mt-2 hidden">
                            <span class="h-1 w-[50%] bg-blue flex rounded-sm"></span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue md:p-0 dark:text-white md:dark:hover:text-blue dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About
                        Us</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue md:p-0 dark:text-white md:dark:hover:text-blue dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Programs</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue md:p-0 dark:text-white md:dark:hover:text-blue dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Blogs</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue md:p-0 dark:text-white md:dark:hover:text-blue dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact
                        Us</a>
                </li>
                <li>
                    <label class="inline-flex items-center cursor-pointer md:ps-8 md:pe-2 ps-12">
                        <input type="checkbox" value="" class="sr-only peer">
                        <span
                            class="-me-[48px] z-[9999] text-[12px] font-medium peer-checked:text-blue text-white dark:text-gray-300">ID</span>
                        <div
                            class="relative w-[55px] h-6 bg-[#0004f6] rounded-full peer peer-focus:ring-4 peer-focus:ring-blue dark:peer-focus:ring-blue dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] peer-checked:after:start-[12px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[#0004f6]">
                        </div>
                        <span
                            class="-ms-[51px] z-[9999] text-[12px] font-medium peer-checked:text-white text-blue dark:text-gray-300">EN</span>
                    </label>
                </li>
                <li>
                    <button type="button"
                        class="text-white bg-[#0004f6] hover:bg-blue focus:outline-none focus:ring-4 focus:ring-blue font-medium rounded-full text-sm px-5 \ pt-1 pb-1 text-center me-2 mb-2 dark:bg-[#0004f6] dark:hover:bg-blue dark:focus:ring-blue md:ms-0 md:mt-0 ms-3 mt-3 w-full">
                        Schedule Your Trial
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
