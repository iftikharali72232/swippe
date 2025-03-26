@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

<div class="container-box">
    <div class="flex items-center justify-center py-14 rounded-2xl page-title-bg">
        <h1 class="md:text-4xl text-3xl text-white font-bold">Current Offers</h1>
    </div>
</div>

<div class="container-box py-14">
    <div class="flex lg:flex-row flex-col lg:justify-between pb-3">
        <div class="flex gap-3 lg:space-y-0 space-y-3 lg:w-auto w-full">
            <div class="lg:w-auto w-full">
                <label>From</label>
                <input type="text" placeholder="Medina" class="bg-[#FAF8EC80] outline-none px-6 py-2.5 rounded-lg text-gray-700 w-full" />
            </div>
            <div class="lg:w-auto w-full">
                <label>To</label>
                <input type="text" placeholder="AlUla" class="bg-[#FAF8EC80] outline-none px-6 py-2.5 rounded-lg text-gray-700 w-full" />
            </div>
        </div>

        <div class="flex items-end justify-end gap-3">
            <div class="lg:w-auto w-full">
                <button type="button" class="bg-roti-100 text-emerald-900 font-bold cursor-pointer px-6 py-2.5 rounded-lg hover:bg-roti-200 transition lg:w-auto w-full">
                    Quickest
                </button>
            </div>

            <div class="lg:w-auto w-full">
                <button type="button" class="bg-roti-400 text-emerald-900 font-bold cursor-pointer px-6 py-2.5 rounded-lg hover:bg-roti-200 transition lg:w-auto w-full">
                    Best Sales
                </button>
            </div>
        </div>
    </div>

    <div class="border border-emerald-800 rounded-3xl p-5 space-y-10">
        <!-- Offer Card 1 -->
        <div class="relative border border-emerald-800 rounded-3xl">
            <button type="button" class="md:absolute top-0 right-0 bg-roti-100 text-emerald-900 font-bold cursor-pointer px-6 py-2.5 rounded-tr-3xl md:rounded-tl-none rounded-tl-3xl md:rounded-bl-lg hover:bg-roti-200 transition md:w-auto w-full">
                Quickest
            </button>

            <div class="flex md:flex-row flex-col items-center space-x-4">
                <div class="flex-shrink-0 p-4">
                    <img src="{{ asset('images/offer-1.png') }}" alt="Offer1" class="lg:w-auto md:w-[150px]">
                </div>
                <div class="flex-1 lg:py-0 py-6 md:px-0 px-3">
                    <div class="grid lg:grid-cols-2">
                        <div class="md:text-start text-center">
                            <h2 class="text-lg text-emerald-950 font-semibold">Service Type</h2>
                            <p class="text-emerald-700">Torod | E-Commerce Logistics</p>

                            <div class="lg:mt-8">
                                <label class="flex md:flex-row flex-col items-center md:space-x-2">
                                    <input type="checkbox" class="form-checkbox text-emeral-700">
                                    <span>Delivery to the nearest branch (in person)</span>
                                </label>
                            </div>
                        </div>

                        <div class="lg:mt-0 mt-5 md:text-start text-center">
                            <h2 class="text-lg text-emerald-950 font-semibold">Expected arrival</h2>
                            <p class="text-emerald-700">2 to 4 days</p>

                            <div class="lg:mt-8">
                                <label class="flex md:flex-row flex-col items-center md:space-x-2 mt-1">
                                    <input type="checkbox" class="form-checkbox text-emeral-700">
                                    <span>
                                        Delivery to the courier from my address 
                                        <span class="text-gray-500">(10 SAR)</span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="flex mt-5">
                <div class="flex justify-between items-center bg-emerald-800 rounded-bl-3xl md:rounded-br-none rounded-br-3xl md:rounded-tr-lg px-4 py-2 lg:w-1/3 md:w-1/2 w-full">
                    <span class="text-lg font-semibold text-white">Price: 149.00 SR</span>
                    <button type="button" class="openCart bg-white hover:bg-roti-200 text-emerald-950 cursor-pointer p-2 w-[40px] h-[40px] rounded-full">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Offer Card 2 -->
        <div class="relative border border-emerald-800 rounded-3xl">
            <button type="button" class="md:absolute top-0 right-0 bg-roti-400 text-emerald-900 font-bold cursor-pointer px-6 py-2.5 rounded-tr-3xl md:rounded-tl-none rounded-tl-3xl md:rounded-bl-lg hover:bg-roti-200 transition md:w-auto w-full">
                Best Sales
            </button>

            <div class="flex md:flex-row flex-col items-center space-x-4">
                <div class="flex-shrink-0 p-4">
                    <img src="{{ asset('images/offer-2.png') }}" alt="Offer1" class="lg:w-auto md:w-[150px]">
                </div>
                <div class="flex-1 lg:py-0 py-6 md:px-0 px-3">
                    <div class="grid lg:grid-cols-2">
                        <div class="md:text-start text-center">
                            <h2 class="text-lg text-emerald-950 font-semibold">Service Type</h2>
                            <p class="text-emerald-700">aramex | delivery unlimited</p>

                            <div class="lg:mt-8">
                                <label class="flex md:flex-row flex-col items-center md:space-x-2">
                                    <input type="checkbox" class="form-checkbox text-emeral-700">
                                    <span>Delivery to the nearest branch (in person)</span>
                                </label>
                            </div>
                        </div>

                        <div class="lg:mt-0 mt-5 md:text-start text-center">
                            <h2 class="text-lg text-emerald-950 font-semibold">Expected arrival</h2>
                            <p class="text-emerald-700">3 to 6 days</p>

                            <div class="lg:mt-8">
                                <label class="flex md:flex-row flex-col items-center md:space-x-2 mt-1">
                                    <input type="checkbox" class="form-checkbox text-emeral-700">
                                    <span>
                                        Delivery to the courier from my address 
                                        <span class="text-gray-500">(10 SAR)</span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="flex mt-5">
                <div class="flex justify-between items-center bg-emerald-800 rounded-bl-3xl md:rounded-br-none rounded-br-3xl md:rounded-tr-lg px-4 py-2 lg:w-1/3 md:w-1/2 w-full">
                    <span class="text-lg font-semibold text-white">Price: 149.00 SR</span>
                    <button type="button" class="openCart bg-white hover:bg-roti-200 text-emerald-950 cursor-pointer p-2 w-[40px] h-[40px] rounded-full">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Overlay -->
<div class="overlay fixed inset-0 bg-black/50 hidden"></div>

<!-- Offcanvas Cart -->
<div class="cart fixed z-50 top-0 right-0 h-full w-[35%] bg-white shadow-lg transform translate-x-full transition-transform duration-300">

    <div class="flex flex-col justify-between h-full px-4">
        <div class="">
            <!-- Header -->
            <div class="flex justify-between items-center p-4 border-b border-emerald-100">
                <h2 class="text-lg font-semibold">Review Shopping Cart</h2>
                <button class="bg-emerald-600/10 hover:bg-emerald-600/15 shadow-sm w-[30px] h-[30px] rounded-full closeCart text-gray-600 text-sm cursor-pointer font-bold">
                    <i class="fa-solid fa-x"></i>
                </button>
            </div>

            <div class="p-4 flex gap-4">
                <div class="">
                    <img src="{{ asset('images/offer-1.png') }}" alt="offer-img" class="w-[80px] rounded">
                </div>

                <div class="flex-1 items-center">
                    <p class="text-emerald-950 font-bold">Service Type</p>
                    <p class="text-sm text-emerald-700 font-semibold">aramex | delivery unlimited</p>
                    <div class="flex justify-between items-center gap-2 mt-2">
                        <div class="">
                            <p class="font-semibold text-emerald-950">Price: <span id="pricePerItem" class="text-emerald-700">99 SR</span></p>
                        </div>

                        <div class="flex ">
                            <p class="font-semibold text-emerald-950 me-3">Quantity:</p>
                            <div class="bg-emerald-50 shadow-sm rounded-full">
                                <button type="button" class="cursor-pointer decreaseQty px-2 bg-transparent">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <span class="quantity text-sm font-semibold">10</span>
                                <button type="button" class="cursor-pointer increaseQty px-2 bg-transparent">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <!-- Total -->
            <div class="p-4 border-t border-emerald-100 flex justify-between text-lg">
                <span class="text-emerald-950 font-semi-bold">Total:</span>
                <span class="totalPrice text-emerald-700 font-bold">990 SR</span>
            </div>

            <!-- Buttons -->
            <div class="p-4 flex flex-col gap-2">
                <button class="bg-emerald-950 text-white py-3 rounded-lg">Payment</button>
                <button class="bg-emerald-700 text-white py-3 rounded-lg">View Shopping Cart</button>
            </div>
        </div>
    </div>
    
</div>

<script>
    const openCartBtns = document.querySelectorAll(".openCart");
    const closeCartBtn = document.querySelector(".closeCart");
    const cart = document.querySelector(".cart");
    const overlay = document.querySelector(".overlay");

    const quantityElem = document.querySelector(".quantity");
    const pricePerItem = parseInt(document.getElementById("pricePerItem").innerText);
    const totalPriceElem = document.querySelector(".totalPrice");

    let quantity = parseInt(quantityElem.innerText);

    openCartBtns.forEach(button => {
        button.addEventListener("click", () => {
            cart.classList.remove("translate-x-full");
            overlay.classList.remove("hidden");
        });
    });

    closeCartBtn.addEventListener("click", () => {
        cart.classList.add("translate-x-full");
        overlay.classList.add("hidden");
    });

    overlay.addEventListener("click", () => {
        cart.classList.add("translate-x-full");
        overlay.classList.add("hidden");
    });

    document.querySelector(".increaseQty").addEventListener("click", () => {
        quantity++;
        updateQuantity();
    });

    document.querySelector(".decreaseQty").addEventListener("click", () => {
        if (quantity > 1) quantity--;
        updateQuantity();
    });

    function updateQuantity() {
        quantityElem.innerText = quantity;
        totalPriceElem.innerText = `${quantity * pricePerItem} SR`;
    }
</script>

@endsection