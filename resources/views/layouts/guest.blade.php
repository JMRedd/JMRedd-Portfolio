<!DOCTYPE html>
<html>
<header>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Justin Redd - Portfolio</title>
    <link rel="icon" href="/media/JMREDD_Portrait.png" type="image/icon type">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script async charset="utf-8" src="//cdn.embedly.com/widgets/platform.js"></script>

</header>

<body class="bg-black min-h-screen flex items-center justify-center">

<div class="bg-zinc-900 w-full sm:w-11/12 md:w-11/12 xl:w-1/2 2xl:w-1/2 pt-2 pl-10 pr-10 border-zinc-500" style="border-style: solid; border-width: 1px; border-color: rgba(113,113,122,0.25);">

    @include('layouts.nav')

        <!-- Page Content -->
        <main class="min-h-screen md:pl-12 md:pr-12">
            {{ $slot }}
        </main>

</div>

</body>
</html>
