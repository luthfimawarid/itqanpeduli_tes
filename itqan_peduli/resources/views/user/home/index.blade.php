<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css"  rel="stylesheet" />

    <title>Document</title>
</head>

<body class="bg-gray-200 max-w-[512px] mx-auto overflow-auto">
    {{-- <div class=""> --}}
        <!-- <header class="z-50">
            @include('user.home.navbar')
        </header> -->
        @yield('content')       
        <footer>
            @include('user.home.footer')
        </footer>
    {{-- </div> --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

</body>

</html>
