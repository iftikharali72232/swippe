@extends('layouts.app')

@section('title', 'FAQs')

@section('content')

<div class="container-box py-10">
  <h1 class="text-2xl md:text-3xl font-bold text-emerald-800 mb-4 md:text-start text-center">
    {{ __('messages.faq_title') }}
  </h1>
  <div class="m-0 p-0 flex md:justify-normal justify-center">
    <hr class="border-t-3 border-emerald-600 mb-6 w-[150px]" />
  </div>

  <div class="px-6 py-10 border border-emerald-800 rounded-xl">
    <div id="faq-list" class="space-y-3">
      @foreach(__('messages.faq_questions') as $faq)
        <div class="faq-item">
          <button onclick="toggleFaq(this)" class="faq-button cursor-pointer w-full flex items-center justify-between px-6 py-4 bg-green-50 text-green-900 font-medium text-left border border-green-200 rounded-full focus:outline-none focus:ring-0 focus:border-transparent">
            <span>{{ $faq['question'] }}</span>
            <span class="text-xl">+</span>
          </button>
          <div class="faq-answer hidden bg-green-50 text-green-800 text-sm px-6 py-4 rounded-b-xl -mt-2">
            {{ $faq['answer'] }}
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>

<script>
    function toggleFaq(button) {
        var $button = $(button);
        var $item = $button.closest('.faq-item');
        var $answer = $item.find('.faq-answer');
        var $icon = $button.find('span:last-child');

        var isOpen = !$answer.hasClass('hidden');

        // Reset all items
        $('.faq-item').removeClass('border border-green-200 rounded-xl');
        $('.faq-button')
            .addClass('border border-green-200 rounded-full')
            .removeClass('rounded-xl');
        $('.faq-answer').addClass('hidden');
        $('.faq-button span:last-child').text('+');

        // Expand clicked one if it was closed
        if (!isOpen) {
            $answer.removeClass('hidden');
            $icon.text('−');

            $item.addClass('border border-green-200 rounded-xl');
            $button.removeClass('border rounded-full').addClass('rounded-xl');
        }
    }

    $(document).ready(function () {
        var $openAnswer = $('.faq-answer.block');
        if ($openAnswer.length) {
            var $item = $openAnswer.closest('.faq-item');
            var $button = $item.find('.faq-button');
            var $icon = $button.find('span:last-child');

            $item.addClass('border border-green-200 rounded-xl');
            $button.removeClass('border rounded-full').addClass('rounded-xl');
            $icon.text('−');
        }
    });
</script>

@endsection