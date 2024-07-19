<section class="bg-{{$color}} text-white py-[100px] relative">
    <div class="main-container">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-4 items-start">
            <div class="w-full">
                <div class="bg-red py-1 px-4 inline rounded-full text-white hover:bg-primary">
                    CONTACT US
                </div>
                <h2 class="font-bold text-3xl mt-5">
                    <span class="text-yellowLight underline">Schedule</span> your FREE trial now!
                </h2>
                <p class="text-lg font-light mt-5">
                    Experience our programs in one-week trial where your kid can explore the classes they are interested
                    in. Each kid will be observed by our mentors and psychologists, with a personalized assessment at
                    the end of the trial period.
                </p>
            </div>
            <div class="w-full md:shadow-none shadow-2xl rounded-lg">
                <x-mailerlite-form />
            </div>
        </div>
    </div>
    <img loading="lazy" src="{{asset('img/home/ContactUs.png')}}" alt="" class="md:w-[50%] w-[80%] absolute left-0 md:-bottom-[15%] -bottom-[8%]" >
</section>
