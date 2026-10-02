<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="web_standard" name="shell-type">

  <title>{{ config('app.name', 'Laravel') }} — Katalog Undangan</title>

  {{-- Google Fonts --}}
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

  {{-- Vite-built CSS + JS --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-surface text-on-surface font-sans">
  <main class="min-h-screen">
    @yield('content')
  </main>
</body>
</html>
