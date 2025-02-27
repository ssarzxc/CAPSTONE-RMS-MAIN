<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="min-h-screen flex flex-col">

    <header x-data="{ mobilenavOpen: false }"
        class="bg-primary h-20 text-white sticky top-0 z-50 flex items-center justify-between px-8">

        <!-- Logo & Mobile Toggle -->
        <div class="flex items-center justify-between w-full md:w-auto">
            <a class="flex items-center gap-1" href="">
                <i class="fas fa-leaf text-2xl text-white"></i>
                <span> Canopy Farm</span>
            </a>
            <button @click="mobilenavOpen = !mobilenavOpen"
                class="md:hidden h-12 w-12 flex items-center justify-center cursor-pointer hover:bg-green-700 rounded-lg">
                <img x-show="!mobilenavOpen" class="w-6 h-6 select-none"
                    src="https://img.icons8.com/small/64/ffffff/menu.png" />
                <img x-show="mobilenavOpen" x-cloak class="w-6 h-6 select-none"
                    src="https://img.icons8.com/small/64/ffffff/delete-sign.png" />
            </button>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-6">
            <ul class="flex items-center nav-items space-x-4">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('test-dashboard')}}">Dashboard</a></li>
                <li><a href="{{route('reservations')}}">Reservations</a></li>
                <li><a href="{{route('rooms')}}">Rooms</a></li>
                <li><a href="{{route('settings')}}">Settings</a></li>
                {{-- <li x-data="{ dropdownOpen: false }" class="relative">
                    <a @click="dropdownOpen =! dropdownOpen" @click.away="dropdownOpen = false"
                        class="flex items-center gap-2 cursor-pointer select-none">
                        {{-- <i class="fa-solid fa-circle-user text-xl text-white"></i>
                        Contact Us
                        <i x-bind:class="dropdownOpen ? 'rotate-180 duration-300' : ''"
                            class="fa-solid fa-chevron-down w-4"></i>
                    </a>
                    <div x-show="dropdownOpen" x-cloak
                        class="absolute right-0 mt-2 bg-white text-black shadow-md rounded-lg w-40 p-2 z-20"
                        x-transition:enter="duration-300 ease-out"
                        x-transition:enter-start="opacity-0 -translate-y-5 scale-90"
                        x-transition:enter-end="opacity-100 translate-y-0 scale-100">
                        <ul class="hoverlist [&>li>a]:justify-end">
                            <li><a href="" class="block px-4 py-2 hover:bg-gray-100">FAQs</a></li>
                            <li><a href="" class="block px-4 py-2 hover:bg-gray-100">Feedback Form</a></li>
                        </ul>
                    </div>
                </li> --}}
            </ul>
        </nav>

        <!-- Mobile Navigation -->
        <div x-show="mobilenavOpen" x-cloak
            class="absolute top-full left-0 w-full bg-green-800 shadow-md z-40 md:hidden">
            <ul class="flex flex-col items-start space-y-2 p-4">
                <li><a href="" class="block w-full py-2 hover:bg-green-700 px-4">Home</a></li>
                <li><a href="" class="block w-full py-2 hover:bg-green-700 px-4">Rooms</a></li>
                <li><a href="" class="block w-full py-2 hover:bg-green-700 px-4">Event Halls</a></li>
                <li x-data="{ dropdownOpen: false }" class="w-full">
                    <a @click="dropdownOpen =! dropdownOpen"
                        class="w-full py-2 hover:bg-green-700 px-4 cursor-pointer flex justify-between">
                        Contact Us
                        <i x-bind:class="dropdownOpen ? 'rotate-180 duration-300' : ''"
                            class="fa-solid fa-chevron-down"></i>
                    </a>
                    <div x-show="dropdownOpen" x-cloak class="pl-4 bg-green-800">
                        <a href="" class="block py-2 hover:bg-green-700 px-4">FAQs</a>
                        <a href="" class="block py-2 hover:bg-green-700 px-4">Feedback Form</a>
                    </div>
                </li>
            </ul>
        </div>
    </header>

    @yield('content')

    @include('layouts.guest-footer')

</body>

</html>
