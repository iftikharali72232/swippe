@extends('layouts.app')

@section('title', 'Forgot Password')

@section('content')

<div class="container-box py-10">
    <!-- Heading -->
    <h2 class="text-3xl font-bold text-emerald-900 mb-2">{{ __('messages.forgot_password') }}</h2>

    <!-- Warning -->
    <p class="mb-4">
            {{ __('messages.enter_your_email_to_change_password') }}
    </p>

    <!-- Form Box -->
    <div class="border border-emerald-900 rounded-2xl p-8">
        <div class="grid grid-cols-1 md:grid-cols-2 md:gap-10 gap-6">

            <!-- Full Name -->
            <div>
                <label class="block text-emerald-900 font-semibold mb-1">{{ __('messages.email') }}</label>
                <input type="text" placeholder="Example@hotmail.com" class="w-full px-4 py-3 bg-roti-50 border border-gray-300 rounded-xl focus:outline-none" />
            </div>

        </div>
    </div>

    <!-- Register Button -->
    <div class="flex justify-end mt-6">
        <button type="button" id="openModalBtn" class="bg-emerald-800 cursor-pointer text-white font-semibold px-8 py-2.5 rounded-md hover:bg-emerald-900 transition">
            {{ __('messages.next') }}
        </button>
    </div>
</div>

<!-- Modal -->
<div id="checkEmail" class="fixed inset-0 bg-black/60 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-xl shadow-lg px-10 py-14 max-w-lg w-full text-center">
        <p class="text-emerald-900 text-lg mb-2">
        {{ __('messages.we_have_sent_you_a_link') }}
        </p>

        <div class="mb-4">
            <a href="#" class="text-emerald-900 text-lg font-semibold mt-2 mb-6">
            {{ __('messages.please_check_your_email') }}
            </a>
        </div>

        <button type="button" id="closeModalBtn" class="bg-emerald-800 cursor-pointer text-white px-8 py-2 rounded-md hover:bg-emerald-900 transition">
        {{ __('messages.close') }}
        </button>
    </div>
</div>

<script>
  $(document).ready(function() {
    $('#openModalBtn').on('click', function() {
      $('#checkEmail').removeClass('hidden');
    });

    $('#closeModalBtn').on('click', function() {
      $('#checkEmail').addClass('hidden');
    });
  });
</script>

@endsection