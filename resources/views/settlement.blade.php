@extends('layouts.app')

@section('title', 'Settlement')

@section('content')

<div class="container-box py-10">

    <h2 class="text-2xl font-bold mb-6">Your Settlement</h2>
    
    <div class="flex md:flex-row flex-col md:justify-between gap-4 mb-10">
        <div class="flex md:flex-row flex-col md:items-center gap-4">
            <div>
                <label class="block text-gray-700">{{ __('messages.from') }}</label>
                <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none" />
            </div>
            <div>
                <label class="block text-gray-700">{{ __('messages.to') }}</label>
                <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none" />
            </div>
        </div>

        <div class="flex flex-col justify-end">
            <div class="">
                <label class="block text-gray-700">{{ __('messages.filter') }}</label>
                <select class="lg:w-[310px] md:w-[200px] w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none">
                    <option>{{ __('messages.choose') }}</option>
                </select>
            </div>
        </div>
    </div>

    <hr class="border-[1.5px] border-black/30 mb-5" />

    <div class="">
        <h3 class="text-xl font-semibold mb-10">{{ __('messages.a_comprehensive_reconciliation') }}</h3>
    </div>

    <!-- Accordion Item -->
    <div class="">
        <div class="accordion-header bg-roti-50 border border-gray-200 rounded-xl px-5 py-6 mb-4 cursor-pointer flex justify-between items-center text-lg font-semibold">
            <span>{{ __('messages.total_number_of_purchases') }}: <span class="text-green-700">56</span></span>
            <span>{{ __('messages.total_amount') }}: <span class="text-green-700">1,750 SR</span></span>
        </div>
        <div class="accordion-body p-8 hidden bg-white rounded-xl border border-gray-300 p-4 mb-6">
            Number of Purchases
        </div>
    </div>

    <div class="">
        <div class="accordion-header bg-roti-50 border border-gray-200 rounded-xl px-5 py-6 mb-4 cursor-pointer flex justify-between items-center text-lg font-semibold">
            <span>{{ __('messages.number_of_purchases_this_month') }}: <span class="text-green-700">30</span></span>
            <span>{{ __('messages.total_amount') }}: <span class="text-green-700">1,750 SR</span></span>
        </div>
        <div class="accordion-body p-8 hidden bg-white rounded-xl border border-gray-300 p-4 mb-6">
            Detailed information about total purchases...
        </div>
    </div>

    <div class="">
        <div class="accordion-header bg-roti-50 border border-gray-200 rounded-xl px-5 py-6 mb-4 cursor-pointer flex justify-between items-center text-lg font-semibold">
            <span>{{ __('messages.number_of_used_policies') }}: <span class="text-green-700">6</span></span>
            <span>{{ __('messages.total_amount') }}: <span class="text-green-700">1,750 SR</span></span>
        </div>
        <div class="accordion-body p-8 hidden bg-white rounded-xl border border-gray-300 p-4 mb-6">
            Detailed information about total purchases...
        </div>
    </div>
    
    <div class="">
        <div class="accordion-header bg-roti-50 border border-gray-200 rounded-xl px-5 py-6 mb-4 cursor-pointer flex justify-between items-center text-lg font-semibold">
            <span>{{ __('messages.number_of_archived_policies') }}: <span class="text-green-700">20</span></span>
            <span>{{ __('messages.total_amount') }}: <span class="text-green-700">1,750 SR</span></span>
        </div>
        <div class="accordion-body p-8 hidden bg-white rounded-xl border border-gray-300 p-4 mb-6">
            Detailed information about total purchases...
        </div>
    </div>
    
    <div class="">
        <div class="accordion-header bg-roti-50 border border-gray-200 rounded-xl px-5 py-6 mb-4 cursor-pointer flex justify-between items-center text-lg font-semibold">
            <span>{{ __('messages.number_of_unpaid_policies') }}: <span class="text-green-700">26</span></span>
            <span>{{ __('messages.total_amount') }}: <span class="text-green-700">1,750 SR</span></span>
        </div>

        <div class="accordion-body p-8 hidden bg-white rounded-xl border border-gray-300 p-4 mb-6">
            <p class="text-red-600 font-semibold text-lg mb-4">
                {{ __('messages.the_outstanding_balances_must_be_cleared') }} 15/05/2025
            </p>

            <p class="text-emerald-900">{{ __('messages.to_complete_the_payment_please_transfer') }}:</p>
            
            <div class="flex md:flex-row flex-col md:justify-between my-4">
                <div class="md:w-1/2">                    
                    <ul class="list-disc ps-6 text-emerald-900 space-y-1">
                        <li>{{ __('messages.bank_name') }}:</li>
                        <li>{{ __('messages.iban') }}:</li>
                        <li>{{ __('messages.account_number') }}:</li>
                    </ul>
                </div>
                <div class="md:w-1/2 flex justify-center ltr:md:border-l rtl:md:border-r md:border-gray-300 md:mt-0 mt-4">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=BankDetails" alt="QR Code" class=" object-cover" />
                </div>
            </div>

            <p class="text-emerald-900 mb-4">
                {{ __('messages.after_completing_the_transfer') }}
            </p>

            <form id="uploadForm">
                <div class="flex md:flex-row flex-col md:justify-between gap-6">
                    <div class="md:w-2/3">
                        <div class="border border-emerald-950 rounded-2xl p-3 mb-2 bg-emerald-50 min-h-[90px] flex flex-wrap items-center gap-3" id="previewArea">
                            <!-- Previews go here dynamically -->
                        </div>

                        <!-- File Input (Hidden) -->
                        <input type="file" id="fileInput" class="hidden" multiple accept=".png,.jpg,.jpeg,.pdf"/>

                        <p class="text-xs font-semibold text-red-500 mt-2">*{{ __('messages.max_upload_size') }}</p>
                    </div>

                    <div class="md:w-1/3 space-y-2">
                        <button type="button" onclick="document.getElementById('fileInput').click();" class="w-full bg-emerald-600 text-white font-semibold cursor-pointer px-6 py-2 rounded hover:bg-emerald-700">
                            {{ __('messages.upload') }}
                        </button>

                        <button type="submit" class="w-full bg-emerald-900 font-semibold cursor-pointer text-white px-6 py-2 rounded hover:bg-emerald-950">
                            {{ __('messages.send') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

<script>
  $(document).ready(function(){
    // Show last accordion body
    $(".accordion-body").hide().last().show();
    $(".accordion-header").removeClass("bg-roti-200");
    $(".accordion-header").last().addClass("bg-roti-200");

    $(".accordion-header").click(function(){
      var $this = $(this);
      var $body = $this.next(".accordion-body");

      if (!$body.is(":visible")) {
        $(".accordion-body").slideUp();
        $body.slideDown();

        // Change background
        $(".accordion-header").removeClass("bg-roti-200");
        $this.addClass("bg-roti-200");
      }
    });

    // File upload preview
    const uploadedFiles = new Map();

    $('#fileInput').on('change', function () {
      const files = this.files;

      $.each(files, function (i, file) {
        if (!uploadedFiles.has(file.name)) {
          uploadedFiles.set(file.name, file);

          const fileBox = $('<div>')
            .addClass('relative flex items-center space-x-2')
            .attr('data-filename', file.name);

          const iconPath = file.type.includes('pdf') ? '../images/pdf-file-img.png' : '../images/img-file-img.png';

          const icon = $('<img>')
            .attr('src', iconPath)
            .addClass('w-[50px] object-contain');

          const closeBtn = $('<button>')
            .text('✕')
            .addClass('absolute top-0 text-gray-500 text-[7px] bg-white rounded-full w-[12px] h-[12px] flex justify-center items-center border border-gray-200 hover:text-black cursor-pointer')
            .on('click', function () {
              uploadedFiles.delete(file.name);
              fileBox.remove();
            });

          fileBox.append(icon).append(closeBtn);
          $('#previewArea').append(fileBox);
        }
      });

      // Reset input to allow same file re-selection
      $(this).val('');
    });
  });
</script>
@endsection