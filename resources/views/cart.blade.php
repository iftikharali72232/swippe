@extends('layouts.app')

@section('title', 'Cart')

@section('content')

<div class="container-box py-10">
    <div class="flex lg:flex-row flex-col justify-between gap-6">
        <div class="lg:w-4/6">
            <div class="flex md:flex-row flex-col justify-between items-center mb-4">
                <h2 class="text-emerald-950 text-lg font-semibold">1 item available in the cart</h2>
                <button class="border border-emerald-600 hover:text-emerald-50 text-emerald-600 px-4 py-2 rounded-lg hover:bg-emerald-600 cursor-pointer md:w-auto w-full">
                    Add another item
                </button>
            </div>
            
            <div class="border-2 border-emerald-950 rounded-lg mb-4 md:overflow-x-hidden overflow-x-auto">
                <table class="w-full border-collapse ">
                    <thead class="bg-emerald-50 font-semibold">
                        <tr>
                            <th class="px-5 py-3 text-start rounded-tl-lg whitespace-nowrap">Shipping Company</th>
                            <th class="px-5 py-3 text-start whitespace-nowrap">City of Delivery</th>
                            <th class="px-5 py-3 text-start whitespace-nowrap">Cost</th>
                            <th class="px-5 py-3 text-start rounded-tr-lg whitespace-nowrap">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td class="flex items-center space-x-3 px-5 py-4 whitespace-nowrap">
                                <img src="{{ asset('images/offer-1.png') }}" alt="cart-img" class="w-[70px]">
                                <span class="text-emerald-700 truncate">Torod | E-Commerce Logistics</span>
                            </td>
                            <td class="text-emerald-600 px-5 py-4 whitespace-nowrap">AlUla, Saudi Arabia</td>
                            <td class="text-emerald-600 px-5 py-4 whitespace-nowrap">99.00 SR</td>
                            <td class="text-emerald-600 px-5 py-4 whitespace-nowrap">10</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="flex justify-between items-center">
                <button class="bg-roti-50 px-4 py-3 cursor-pointer rounded-lg hover:bg-roti-100 text-red-700 shadow-sm">
                    <i class="fa-solid fa-trash-can"></i>
                </button>

                <button type="button" class="bg-emerald-700 cursor-pointer text-white px-10 py-3 rounded-lg hover:bg-emerald-800">Payment</button>
            </div>
        </div>

        <div class="lg:w-2/6">
            <div class="border-2 border-emerald-950 rounded-lg p-5">
                <div class="">
                    <h3 class="text-2xl text-emerald-900 font-semibold mb-2">Order details</h3>
                    <div class="flex justify-between py-2 text-emerald-700">
                        <span class="font-semibold">Quantity</span>
                        <span>10 Policy</span>
                    </div>
                    <div class="flex justify-between border-b py-2 text-emerald-700">
                        <span class="font-semibold">Subtotal</span>
                        <span>990.00 SR</span>
                    </div>
                    <div class="flex justify-between font-bold py-2 text-emerald-950">
                        <span class="font-semibold">Total</span>
                        <span>990.00 SR</span>
                    </div>
                </div>
                
                <div class="mt-10 mb-2">
                    <h3 class="text-2xl text-emerald-900 font-semibold mb-2">Discount code</h3>
                    <div class="flex">
                        <input type="text" placeholder="Enter discount code" class="bg-roti-50 border border-gray-100 p-2 flex-1 rounded-l-lg focus:outline-none">
                        <button class="bg-green-700 text-white px-4 py-2 rounded-r-lg hover:bg-green-800">Apply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection