@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <div class="container-box relative w-full">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide relative">
                    <img src="{{ asset('images/slide-img1.png') }}" class="w-full lg:h-[400px] md:h-auto h-[150px] object-cover md:rounded-3xl rounded-xl" />
                    <div class="absolute inset-0 flex items-center justify-center">
                        <h2 class="text-emerald-700 mix-blend-multiply font-bold lg:text-[80px] md:text-[45px] text-[30px]">
                            {!! __('messages.you_will_gain_with_us') !!}
                        </h2>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                <div class="swiper-slide relative">
                    <img src="{{ asset('images/slide-img1.png') }}" class="w-full lg:h-[400px] object-cover md:rounded-3xl rounded-xl" />
                    <div class="absolute inset-0 flex items-center justify-center">
                        <h2 class="text-emerald-700 mix-blend-multiply font-bold lg:text-[80px] md:text-[45px] text-[30px]">
                            {!! __('messages.you_will_gain_with_us') !!}
                        </h2>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div class="container-box py-20">
        <div class="relative w-full bg-emerald-gradient-to-b text-white p-8 rounded-lg">
            <!-- Top Text -->
            <h2 class="text-2xl font-bold mb-8">
                {{ __('messages.we_have_made_it') }}
            </h2>
            
            <div class="">
                <div class="flex justify-between">
                    <div class="bg-emerald-50 text-emerald-900 font-bold px-4 py-2 rounded-t-lg">
                        {{ __('messages.local_shipping') }}
                    </div>

                    <div class="md:block hidden">
                        <div class="mt-[-154px] lg:mr-[20px] mr-[10px]">
                            <img src="{{ asset('images/undraw_destination.png') }}" alt="Illustration" class="w-[240px]" />
                        </div>
                    </div>
                </div>

                <!-- Form Section -->
                <div class="border-2 border-emerald-50 px-5 py-8 rounded-b-lg rounded-tr-lg shadow-lg flex flex-col md:flex-row items-center justify-between gap-4 relative">
                    <div class="flex md:flex-row flex-col gap-4 md:w-3/5">
                        <!-- City of Dispatch -->
                        <div class="flex items-center bg-gray-100 p-3 rounded-lg flex-1">
                            <span class="text-emerald-950 text-lg">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <input type="text" placeholder="{{ __('messages.city_of_dispatch') }}"
                            class="bg-transparent outline-none ml-2 text-gray-700 w-full" />
                        </div>

                        <!-- Destination City -->
                        <div class="flex items-center bg-gray-100 p-3 rounded-lg flex-1">
                            <span class="text-emerald-950 text-lg">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <input type="text" placeholder="{{ __('messages.destination_city') }}"
                            class="bg-transparent outline-none ml-2 text-gray-700 w-full" />
                        </div>
                    </div>

                    <div class="flex justify-end md:w-2/5 w-full">
                        <button type="button" class="bg-roti-100 text-emerald-900 font-bold cursor-pointer px-6 py-3.5 rounded-lg hover:bg-roti-200 transition md:w-auto w-full">
                            {{ __('messages.get_the_offers') }}
                        </button>
                    </div>
                </div>
            
            </div>
        </div>
    </div>

    <div class="container-box">
        <div class="bg-roti-50 px-10 pt-6 lg:pb-[200px] md:pb-[150px] pb-[80px] we-stand-out rounded-2xl">
            <div class="relative mb-10">
                <h2 class="absolute w-full md:text-[55px] text-[35px] text-emerald-950/5 font-bold text-center">{{ __('messages.we_stand_out') }}</h2>
                <h2 class="md:text-[35px] text-[30px] text-emerald-950 font-bold text-center pt-10">{{ __('messages.we_stand_out') }}</h2>
            </div>

            <div class="flex lg:flex-row flex-col lg:justify-between">
                <div class="">
                    <div class="flex md:flex-row flex-col items-center">
                        <div class="relative">
                            <img src="{{ asset('images/star-shape.png') }}" alt="Illustration" class="w-[90px]" />
                            <img src="{{ asset('images/customer-service.png') }}" alt="Illustration" class="absolute inset-0 m-auto w-[40px]" />
                        </div>
                        <div class="bg-roti-100 py-3 px-4 md:rounded-r-full rounded-full ms-[-30px]">
                            <p class="lg:text-xl md:text-lg md:text-start text-center text-emerald-800 font-semibold md:ms-6 md:me-2">{{ __('messages.top_customer_service') }}</p>
                        </div>
                    </div>

                    <div class="flex md:flex-row flex-col items-center">
                        <div class="relative">
                            <img src="{{ asset('images/star-shape.png') }}" alt="Illustration" class="w-[90px]" />
                            <img src="{{ asset('images/email-icon.png') }}" alt="Illustration" class="absolute inset-0 m-auto w-[40px]" />
                        </div>
                        <div class="bg-roti-100 py-3 px-4 md:rounded-r-full rounded-full ms-[-30px]">
                            <p class="lg:text-xl md:text-lg md:text-start text-center text-emerald-800 font-semibold md:ms-6 md:me-2">{{ __('messages.best_prices_from_trusted_shippers') }}</p>
                        </div>
                    </div>
                </div>

                <div class="flex lg:justify-normal justify-center">
                    <img src="{{ asset('images/delivery-address.png') }}" alt="Illustration" class="md:mt-0 mt-10 w-[260px]" />
                </div>
            </div>
        </div>
    </div>

    <div class="container-box py-20">
        <div class="relative mb-10">
            <h2 class="absolute w-full md:text-[55px] text-[35px] text-emerald-950/5 font-bold text-center">{{ __('messages.partners') }}</h2>
            <h2 class="md:text-[35px] text-[30px] text-emerald-950 font-bold text-center pt-10">{{ __('messages.partners') }}</h2>
        </div>
        
        <div class="swiper partnerSwiper">
            <div class="swiper-wrapper">
                <!-- Row 1 -->
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-1.png" alt="Partner 1" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-2.png" alt="Partner 2" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-3.png" alt="Partner 3" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-4.png" alt="Partner 4" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-5.png" alt="Partner 5" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-6.png" alt="Partner 6" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-7.png" alt="Partner 7" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-8.png" alt="Partner 8" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-9.png" alt="Partner 9" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-10.png" alt="Partner 10" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-11.png" alt="Partner 11" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-12.png" alt="Partner 12" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-7.png" alt="Partner 7" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-8.png" alt="Partner 8" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-9.png" alt="Partner 9" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-10.png" alt="Partner 10" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-11.png" alt="Partner 11" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-12.png" alt="Partner 12" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-1.png" alt="Partner 1" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-2.png" alt="Partner 2" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-3.png" alt="Partner 3" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-4.png" alt="Partner 4" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-5.png" alt="Partner 5" class="rounded-full shadow-lg" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="images/partner-6.png" alt="Partner 6" class="rounded-full shadow-lg" />
                </div>
            </div>

            <!-- Navigation Buttons -->
             <div class="flex justify-center items-center gap-10">
                 <div class="swiper-button-prev !text-green-700"></div>
                 <div class="swiper-button-next !text-green-700"></div>
             </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            new Swiper(".mySwiper", {
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            });
        });

        document.addEventListener("DOMContentLoaded", function () {
            var swiper = new Swiper(".partnerSwiper", {
            slidesPerView: 6, // Show 6 images per row
            grid: {
                rows: 2, // Two rows
                fill: "row",
            },
            spaceBetween: 20, // Space between images
            loop: true,
            autoplay: {
                delay: 2000000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".pswiper-pagination",
                clickable: false,
            },
            breakpoints: {
                320: { slidesPerView: 2, grid: { rows: 2 } },
                640: { slidesPerView: 4, grid: { rows: 2 } },
                1024: { slidesPerView: 6, grid: { rows: 2 } },
            },
            });
        });
    </script>
@endsection