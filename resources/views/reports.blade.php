@extends('layouts.app')

@section('title', 'Reports')

@section('content')

<div class="container-box py-10">
    <h2 class="text-2xl font-bold mb-6">Your Reports</h2>
    
    <div class="flex md:flex-row flex-col md:justify-between gap-4 mb-10">
        <div class="flex md:flex-row flex-col md:items-center gap-4">
            <div>
                <label class="block text-gray-700">From</label>
                <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none" />
            </div>
            <div>
                <label class="block text-gray-700">To</label>
                <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none" />
            </div>
        </div>

        <div class="flex flex-col justify-end">
            <div class="flex items-center bg-green-50 px-4 rounded-full w-80">
                <i class="fa-solid fa-bars text-gray-700"></i>
                <input type="text" placeholder="Search" class="flex-grow px-2 py-3 bg-transparent outline-none text-gray-800" />
                <button type="button" class="p-0 bg-transparent border-0 outline-none cursor-pointer">
                    <i class="fa-solid fa-magnifying-glass text-gray-700"></i>
                </button>
            </div>
        </div>
    </div>

    <hr class="border-[1.5px] border-black/30 mb-5" />

    <div class="flex md:flex-row flex-col md:justify-between md:items-center mb-6">
        <div class="md:w-auto w-full">
            <h3 class="text-xl font-semibold mb-2">Reports for the Month of January</h3>
        </div>

        <div class="">
            <label class="block text-gray-700">Filter</label>
            <select class="lg:w-[310px] md:w-[200px] w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none">
                <option>Choose</option>
            </select>
        </div>
    </div>
    
    <div class="overflow-x-auto">
        <table class="swippe-table">
            <thead>
                <tr>
                    <td class="font-semibold whitespace-nowrap">B/L Number</td>
                    <td class="font-semibold whitespace-nowrap">Shipping Co.</td>
                    <td class="font-semibold whitespace-nowrap">Shipment Rec.</td>
                    <td class="font-semibold whitespace-nowrap">Amount</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="whitespace-nowrap">#5267125364</td>
                    <td class="whitespace-nowrap">SAMSA</td>
                    <td class="whitespace-nowrap">Mr. Ali Hamdy</td>
                    <td class="whitespace-nowrap">125 SR</td>
                </tr>
                <tr>
                    <td class="whitespace-nowrap">#5267125364</td>
                    <td class="whitespace-nowrap">SAMSA</td>
                    <td class="whitespace-nowrap">Mr. Ali Hamdy</td>
                    <td class="whitespace-nowrap">125 SR</td>
                </tr>
                <tr>
                    <td class="whitespace-nowrap">#5267125364</td>
                    <td class="whitespace-nowrap">SAMSA</td>
                    <td class="whitespace-nowrap">Mr. Ali Hamdy</td>
                    <td class="whitespace-nowrap">125 SR</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection