<section class="bg-{{ $color }} text-white py-12 relative scroll-mt-10" id="contact">
    <div class="main-container">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-4 items-start">
            <div class="w-full md:mt-24">
                <div class="bg-red py-1 px-4 inline rounded-full text-white hover:bg-primary">
                    {{ __('contact-component.contact_badge') }}
                </div>
                <h2 class="font-bold text-3xl md:text-4xl mt-5 text-white leading-10">
                    {!! __('contact-component.contact_title') !!}
                </h2>
                {{-- <p class="text-lg font-light mt-5">
                    {!! __('contact-component.contact_content') !!}
                </p> --}}
            </div>
            <div class="w-full md:shadow-none rounded-lg bg-black ">
                {{-- <x-form-mailerlite /> --}}
                <x-mailerlite-form />
                {{-- <x-google-form /> --}}
            </div>
        </div>
    </div>
    <img loading="lazy" src="{{ asset('img/home/ContactUs.webp') }}" alt="EduALL Junior"
        class="md:w-[50%] w-4/5 absolute left-0 md:-bottom-[15%] -bottom-[12%]">
</section>
