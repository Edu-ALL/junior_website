@extends('layout.user.main')

@section('title', 'About Us | EduALL Junior')

@section('content')
    {{-- WHO WE ARE --}}
    <section class="w-100 bg-secondary pt-[100px] relative z-20">
        <div class="main-container py-[50px] relative z-1">
            <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
                <div class="w-full">
                    <h2 class="font-extrabold text-4xl my-4 mb-6">
                        <span class="text-red underline">
                            Schedule
                        </span>
                        your FREE trial now!
                    </h2>
                    <p class="text-lg mb-4">
                        Experience our programs in one-week trial where your kid can explore the classes they are interested in. Each kid will be observed by our mentors and psychologists, with a personalized assessment at the end of the trial period.
                    </p>
                    <ul class="text-lg">
                        <li class="mb-3">
                            <i class="fas fa-map-location-dot me-1 text-primary"></i> Jalan Kembangan 23, Jakarta Barat
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-phone me-1 text-primary"></i> +628 111 2323 2342
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-envelope me-1 text-primary"></i> hello@edualljunior.com
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2437.5046257097642!2d106.7480001090433!3d-6.171440381104894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7a250d0273b%3A0xa00e3e0e92c3bcc5!2sJl.%20Kembangan%20No.23%2C%20RT.1%2FRW.10%2C%20Kembangan%20Utara%2C%20Kec.%20Kembangan%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2011610!5e0!3m2!1sen!2sid!4v1721354288212!5m2!1sen!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
@endsection
