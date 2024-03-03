<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="secured message" />
    <meta name="description" content="secured message" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content=" the secrete massage" />
    <meta property="og:description" content=" the secrete massage" />
    <meta property="og:site_name" content=" the secrete massage" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @stack('before-styles')
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

    @stack('after-styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Scripts wfcqfqwfqwf-->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black bg-main bg-[length:100%] text-white font-raleway">
    <div class="flex flex-col min-h-[100vh]">
        @include('backend.includes.header')
        @yield('content')
        @include('backend.includes.footer')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    <script src="{{ asset('js/tailwindConfig.js') }}"></script>
    <script src="{{ asset('js/lottie.min.js') }}"></script>
    @yield('after-scripts')
    @include('backend.includes.flash-messages')

    @yield('popup')
</body>
</html>
