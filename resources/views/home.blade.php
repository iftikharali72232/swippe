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
                    <img src="{{ asset('images/slide-img1.png') }}" class="w-full h-[400px] object-cover rounded-3xl" />
                    <div class="absolute inset-0 flex items-center justify-center">
                        <h2 class="text-emerald-700 mix-blend-multiply font-bold text-[80px]">
                            You <span class="text-green-600">will gain with us</span>
                        </h2>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                <div class="swiper-slide relative">
                    <img src="{{ asset('images/slide-img1.png') }}" class="w-full h-[400px] object-cover rounded-3xl" />
                    <div class="absolute inset-0 flex items-center justify-center">
                        <h2 class="text-emerald-700 mix-blend-multiply font-bold text-[80px]">
                            You <span class="text-green-600">will gain with us2</span>
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
            <h2 class="text-2xl font-bold mb-8">We've made it easy for you ...</h2>
            
            <div class="">
                <div class="flex justify-between">
                    <div class="bg-emerald-50 text-emerald-900 font-bold px-4 py-2 rounded-t-lg">
                        Local Shipping
                    </div>

                    <div class="">
                        <div class="mt-[-154px] mr-[20px]">
                            <img src="{{ asset('images/undraw_destination.png') }}" alt="Illustration" class="w-[240px]" />
                        </div>
                    </div>
                </div>

                <!-- Form Section -->
                <div class="border-2 border-emerald-50 px-5 py-8 rounded-b-lg rounded-tr-lg shadow-lg flex flex-col md:flex-row items-center justify-between gap-4 relative">
                    <div class="flex gap-4 w-3/5">
                        <!-- City of Dispatch -->
                        <div class="flex items-center bg-gray-100 p-3 rounded-lg flex-1">
                            <span class="text-emerald-950 text-lg">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <input type="text" placeholder="City of Dispatch"
                            class="bg-transparent outline-none ml-2 text-gray-700 w-full" />
                        </div>

                        <!-- Destination City -->
                        <div class="flex items-center bg-gray-100 p-3 rounded-lg flex-1">
                            <span class="text-emerald-950 text-lg">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <input type="text" placeholder="Destination City"
                            class="bg-transparent outline-none ml-2 text-gray-700 w-full" />
                        </div>
                    </div>

                    <div class="flex justify-end w-2/5">
                        <button type="button" class="bg-roti-100 text-emerald-900 font-bold cursor-pointer px-6 py-3.5 rounded-lg hover:bg-roti-200 transition">
                            Get the Offers
                        </button>
                    </div>
                </div>
            
            </div>
        </div>
    </div>

    <div class="container-box">
        <div class="bg-roti-50 px-10 pt-6 pb-[200px] we-stand-out rounded-2xl">
            <div class="relative mb-10">
                <h2 class="absolute w-full text-[55px] text-emerald-950/5 font-bold text-center">We Stand Out</h2>
                <h2 class="text-[35px] text-emerald-950 font-bold text-center pt-10">We Stand Out</h2>
            </div>

            <div class="flex justify-between">
                <div class="">
                    <div class="flex items-center">
                        <div class="relative">
                            <img src="{{ asset('images/star-shape.png') }}" alt="Illustration" class="w-[90px]" />
                            <img src="{{ asset('images/customer-service.png') }}" alt="Illustration" class="absolute inset-0 m-auto w-[40px]" />
                        </div>
                        <div class="bg-roti-100 py-3 px-4 rounded-r-full ms-[-30px]">
                            <p class="text-xl text-emerald-800 font-semibold ms-6 me-2">Top customer service for you</p>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="relative">
                            <img src="{{ asset('images/star-shape.png') }}" alt="Illustration" class="w-[90px]" />
                            <img src="{{ asset('images/email-icon.png') }}" alt="Illustration" class="absolute inset-0 m-auto w-[40px]" />
                        </div>
                        <div class="bg-roti-100 py-3 px-4 rounded-r-full ms-[-30px]">
                            <p class="text-xl text-emerald-800 font-semibold ms-6 me-2">Best prices from trusted shippers guaranteed</p>
                        </div>
                    </div>
                </div>

                <div class="">
                    <img src="{{ asset('images/delivery-address.png') }}" alt="Illustration" class="w-[260px]" />
                </div>
            </div>
        </div>
    </div>

    <div class="container-box py-20">
        <div class="relative mb-10">
            <h2 class="absolute w-full text-[55px] text-emerald-950/5 font-bold text-center">Partners</h2>
            <h2 class="text-[35px] text-emerald-950 font-bold text-center pt-10">Partners</h2>
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