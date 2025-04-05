@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')

<div class="container-box py-10">
    <h1 class="text-3xl md:text-3xl font-bold text-emerald-900 mb-6">Privacy Policy</h1>
    
    <p class="mb-8">
        At <span class="text-roti-400 font-semibold">SWIPPE</span> we place great importance on the privacy of our users and are committed to
        protecting your personal information according to the highest security standards.
    </p>

    <div class="space-y-6 text-sm md:text-base text-emerald-900">
        <div>
            <h2 class="font-semibold text-xl text-emerald-800">1. Collection of Personal Information</h2>
            <p class="ml-4 mt-2 text-emerald-700">
                We collect the personal information that you provide when using our website, including:
            </p>
            <ul class="list-disc list-inside ml-8 text-emerald-700">
                <li>Name</li>
                <li>Email address</li>
                <li>Shipping address</li>
                <li>Phone number</li>
                <li>Payment details (if available)</li>
            </ul>
        </div>

        <div>
        <h2 class="font-semibold text-xl text-emerald-800">2. Use of Information</h2>
            <p class="ml-4 mt-2 text-emerald-700">
                We use the information we collect to better provide our services, such as:
            </p>
            <ul class="list-disc list-inside ml-8 text-emerald-700">
                <li>Creating shipping labels</li>
                <li>Processing orders</li>
                <li>Sending updates about the shipping status</li>
                <li>Improving user experience</li>
            </ul>
        </div>

        <div>
            <h2 class="font-semibold text-xl text-emerald-800">3. Protection of Information</h2>
            <p class="ml-4 mt-2 text-emerald-700">
                We are committed to protecting your personal data from unauthorized access or manipulation by using modern encryption techniques and appropriate security measures.
            </p>
        </div>

        <div>
            <h2 class="font-semibold text-xl text-emerald-800">4. Sharing of Information</h2>
            <p class="ml-4 mt-2 text-emerald-700">
                We do not sell or rent your personal information to any third party. We may share some information with shipping companies or trusted third parties only to facilitate the shipping service.
            </p>
        </div>

        <div>
            <h2 class="font-semibold text-xl text-emerald-800">5. Cookies</h2>
            <p class="ml-4 mt-2 text-emerald-700">
                We use cookies to improve website performance and offer a personalized user experience. You can disable cookies through your browser settings.
            </p>
        </div>

        <div>
            <h2 class="font-semibold text-xl text-emerald-800">6. Right to Access and Modify</h2>
            <p class="ml-4 mt-2 text-emerald-700">
                You can request access to your personal information or modify it at any time through your account on our website.
            </p>
        </div>
    </div>
</div>

@endsection