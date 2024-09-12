@extends('layout.user.main')

@section('title', 'Contact Us | EduALL Junior')

@section('content')
    {{-- WHO WE ARE --}}
    <section class="w-100 bg-secondary pt-[100px] relative z-20">
        <div class="main-container py-[50px] relative z-1">
            <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
                <div class="w-full">
                    <h2 class="font-extrabold text-4xl my-4 mb-6">
                        {!! __('contact.title') !!}
                    </h2>
                    <p class="text-lg mb-4">
                        {!! __('contact.subtitle') !!}
                    </p>
                    <ul class="text-lg">
                        <li class="mb-3 flex items-start">
                            <i class="fas fa-map-location-dot me-2 mt-1 text-primary"></i> <p>Sentra Niaga Puri Indah, Jl. Puri Indah Raya Lingkar Blok T 2 No.19-20, RT.LuarRT.1/RW.2, Kembangan Sel., Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11610</p>
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-phone me-1 text-primary"></i> +62 819 1164 5771
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-envelope me-1 text-primary"></i> info@junior.edu-all.com
                        </li>
                    </ul>
                </div>
                <div class="w-full md:shadow-none shadow-2xl rounded-lg">
                    <x-mailerlite-form :textColor="'black'" :buttonColor="'primary'" />
                </div>
            </div>
        </div>

        {{-- Embed Maps  --}}

        <div class="w-full -mb-[100px]">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d895.2799870870804!2d106.7351580939352!3d-6.187201425367406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c14d5833b072cf3%3A0xcaac697513b6dc07!2sEduALL%20Junior!5e0!3m2!1sen!2sid!4v1725346024999!5m2!1sen!2sid"  width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
@endsection
