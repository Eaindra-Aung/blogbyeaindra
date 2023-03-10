<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--- === Font Sizes-->
    <link rel="stylesheet" href="{{ asset ('/css/app.css')}}">
    <!-- <script src="http://apis.google.com/js/platform.js"></script> -->
</head>
<body class="antialiased text-gray-800 dark:text-gray-200">
  <div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
    <x-layout.navbar />
      {{$slot}}
    <x-layout.footer />
  </div>
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>