@extends('layouts.app')

@section('title', 'Order Process')

@section('content')

<div class="container-box py-10">
    <div class="flex md:flex-row flex-col md:space-y-none space-y-4 items-center justify-between bg-green-900 lg:px-20 md:px-6 py-8 rounded-lg">
        <div class="flex items-center cursor-pointer" onclick="showTab('sender')">
            <div id="tab-sender" class="w-[150px] h-[150px] overflow-hidden flex flex-col items-center justify-center bg-white rounded-full shadow-md">
                <img src="{{ asset('images/sender-tab.png') }}" alt="Sender" class="w-[60px] mb-2">
                <p class="text-emerald-800 font-semibold text-[14px]">Sender Details</p>
            </div>
        </div>
        <div class="md:block flex-1 hidden border-t-10 border-white"></div>
        <div class="flex items-center cursor-pointer" onclick="showTab('recipient')">
            <div id="tab-recipient" class="w-[150px] h-[150px] overflow-hidden flex flex-col items-center justify-center bg-roti-200 rounded-full shadow-md">
                <img src="{{ asset('images/recipient-tab.png') }}" alt="Recipient" class="w-[60px] mb-2">
                <p class="text-emerald-800 font-semibold text-[14px]">Recipient Details</p>
            </div>
        </div>
        <div class="md:block flex-1 hidden border-t-10 border-roti-200" id="second-divider"></div>
        <div class="flex items-center cursor-pointer" onclick="showTab('shipment')">
            <div id="tab-shipment" class="w-[150px] h-[150px] overflow-hidden flex flex-col items-center justify-center bg-roti-200 rounded-full shadow-md">
                <img src="{{ asset('images/shipment-tab.png') }}" alt="Shipment" class="w-[60px] mb-2">
                <p class="text-emerald-800 font-semibold text-[14px]">Shipment Details</p>
            </div>
        </div>
    </div>
    
    <div id="content-sender" class="mt-6">
        <div class="md:p-4">
            <p class="text-red-600 font-semibold text-lg mb-3">
                * Enter the data in English to ensure accuracy in processing & shipping
            </p>
            
            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 border-2 border-emerald-800 p-8 rounded-lg">
                    <div class="md:col-span-2">
                        <h2 class="text-2xl font-semibold text-emerald-800">Sender Information</h2>
                        <p class="text-gray-600 mb-4">Please fill in the following information</p>
                        <hr class="border-[1.5px] border-emerald-600 w-[150px] mb-5">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Email *</label>
                        <input type="email" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example@hotmail.com" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Full Name *</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Phone Number *</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="+966**********">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Country *</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example: KSA" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">City *</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example: AlUla" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Street Name *</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example: AlUla west" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Building Name or Number *</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example: 4259" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Nearest landmark</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example: Habitas Resort">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Zip Code *</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example: 9696874" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">ID/Residence Number *</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example: E85967423" required>
                    </div>

                    <div class="md:col-span-2 mt-6 flex justify-end">
                        <button class="bg-emerald-700 text-white px-6 py-2 rounded-md font-semibold flex items-center gap-2 hover:bg-emerald-800 cursor-pointer" onclick="nextTab('recipient')">
                            <span>Next</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>               
            </form>
        </div>
    </div>

    <div id="content-recipient" class="mt-6 hidden">
        <div class="md:p-4">
            <p class="text-red-600 font-semibold text-lg mb-3">
                * Enter the data in English to ensure accuracy in processing & shipping
            </p>
            
            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 border-2 border-emerald-800 p-8 rounded-lg">
                    <div class="md:col-span-2">
                        <h2 class="text-2xl font-semibold text-emerald-800">Recipient Information</h2>
                        <p class="text-gray-600 mb-4">Please fill in the following information</p>
                        <hr class="border-[1.5px] border-emerald-600 w-[150px] mb-5">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Email *</label>
                        <input type="email" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example@hotmail.com" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Full Name *</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Phone Number *</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="+966**********">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Country *</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example: KSA" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">City *</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example: AlUla" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Street Name *</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example: AlUla west" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Building Name or Number *</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example: 4259" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Nearest landmark</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example: Habitas Resort">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Zip Code *</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example: 9696874" required>
                    </div>

                    <div class="md:col-span-2 mt-6 flex justify-between">
                        <button class="bg-emerald-400 text-emerald-950 px-6 py-2 rounded-md font-semibold flex items-center gap-2 hover:bg-emerald-600 cursor-pointer" onclick="prevTab('sender')">
                            <i class="fa-solid fa-arrow-left"></i>
                            <span>Back</span>
                        </button>
                        <button class="bg-emerald-700 text-white px-6 py-2 rounded-md font-semibold flex items-center gap-2 hover:bg-emerald-800 cursor-pointer" onclick="nextTab('shipment')">
                            <span>Next</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>               
            </form>
        </div>
    </div>

    <div id="content-shipment" class="mt-6 hidden">
        <div class="md:p-4">
            <p class="text-red-600 font-semibold text-lg mb-3">
                * Enter the data in English to ensure accuracy in processing & shipping
            </p>
            
            <form>
                <div class="grid lg:grid-cols-3 md:grid-cols-2  gap-4 border-2 border-emerald-800 p-8 rounded-lg">
                    <div class="lg:col-span-3 md:col-span-2">
                        <h2 class="text-2xl font-semibold text-emerald-800">Shipping Information</h2>
                        <p class="text-gray-600 mb-4">Please fill in the following information</p>
                        <hr class="border-[1.5px] border-emerald-600 w-[150px] mb-5">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Approximate weight (kg)*</label>
                        <input type="email" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example: 10 kg" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Quantity*</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example: 20" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Product Price*</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example 100 SR" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Length*</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Width*</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Height*</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Specify the shipment type*</label>
                        <select class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example">
                            <option value="1">Express</option>
                            <option value="2">Standard</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Product description / Product notes*</label>
                        <textarea class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:outline-none bg-[#FAF8EC80]" placeholder="Example" required></textarea>
                    </div>

                    <div class="lg:col-span-3 md:col-span-2 mt-6 flex justify-end">
                        <button class="bg-emerald-400 text-emerald-950 px-6 py-2 rounded-md font-semibold flex items-center gap-2 hover:bg-emerald-600 cursor-pointer" onclick="prevTab('recipient')">
                            <i class="fa-solid fa-arrow-left"></i>
                            <span>Back</span>
                        </button>
                    </div>
                </div>               
            </form>
        </div>
    </div>
</div>

<script>
    function showTab(tab) {
        const tabs = ['sender', 'recipient', 'shipment'];
        let activeIndex = tabs.indexOf(tab);
        
        tabs.forEach((t, index) => {
            document.getElementById('content-' + t).classList.add('hidden');
            document.getElementById('tab-' + t).classList.remove('bg-roti-200', 'bg-white');
            document.getElementById('tab-' + t).classList.add(index <= activeIndex ? 'bg-white' : 'bg-roti-200');
        });

        document.getElementById('content-' + tab).classList.remove('hidden');

        // Change the border color of second-divider
        const secondDivider = document.getElementById('second-divider');
        if (tab === 'sender') {
            secondDivider.classList.remove('border-white');
            secondDivider.classList.add('border-roti-200');
        } else {
            secondDivider.classList.remove('border-roti-200');
            secondDivider.classList.add('border-white');
        }
    }
    
    function nextTab(tab) {
        showTab(tab);
    }
    
    function prevTab(tab) {
        showTab(tab);
    }
</script>


@endsection