@extends ('layouts.guest-navbar')

<meta charset="UTF-8" class="">
<meta name="viewport" content="width=device-width, initial-scale=1.0" class="">

<!-- Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    class="">

<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&amp;display=swap" class="">

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

@vite(['resources/css/app.css', 'resources/js/app.js'])

<title class="">Home Page</title>

@section('content')
    <hero class="grid w-full h-screen bg-gray-700 text-white text-center bg-center bg-cover"
        style="background-image: url('{{ asset('images/canopyhome.png') }}');">
        <div class="col-start-1 row-start-1 bg-gray-800/30 w-full h-full"></div>
        <div class="col-start-1 row-start-1 py-24 px-10 flex flex-col items-center justify-center">
            <h1 class="drop-shadow-[2px_2px_4px_rgba(0,0,0,0.8)] text-4xl md:text-6xl font-bold">Canopy Farm</h1>
            <p class=" drop-shadow-[2px_2px_4px_rgba(0,0,0,0.8)] text-lg font-bold mb-5 mt-4">where nature meets elegance
            </p>
            <a href="" class="btn-primary" style="padding: 1rem 1.125rem; font-size: 1.2rem;">
                Book Now
            </a>
        </div>
    </hero>

    <!-- SERVICES -->
    {{-- TODO: gawing mobile responsive </33 --}}
    <div class="py-5">
        <div class="container mx-auto">
            <div class="lg:w-full px-2 mb-4 text-center">
                <h2 class="text-2xl text-primary font-bold">OUR SERVICES</h2>
            </div>

            <div class="relative overflow-hidden w-full" x-data="{ activeSlide: 0 }">

                <!-- Navigation Buttons (Prev & Next) -->
                <button @click="activeSlide = (activeSlide - 1 + 2) % 2"
                    class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-white text-black px-3 py-2 rounded-full shadow-md z-10">
                    <i class="fas fa-chevron-left"></i>
                </button>

                <button @click="activeSlide = (activeSlide + 1) % 2"
                    class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-white text-black px-3 py-2 rounded-full shadow-md z-10">
                    <i class="fas fa-chevron-right"></i>
                </button>

                <!-- Slides Wrapper -->
                <div class="overflow-hidden">
                    <div class="flex transition-transform duration-700"
                        :style="'transform: translateX(-' + (activeSlide * 100) + '%);'">

                        <!-- Slide 1 -->
                        <div class="flex min-w-full justify-center space-x-4">
                            <!-- Card 1 -->
                            <div
                                class="w-1/3 bg-white border border-gray-200 rounded-lg overflow-hidden flex flex-col h-[450px]">
                                <img src="{{ asset('images/canopyhome.png') }}" class="w-full h-[300px] object-cover"
                                    alt="Service 1">
                                <div class="p-4 flex-grow flex flex-col">
                                    <h5 class="text-lg text-center font-semibold">Canopy Home 1</h5>
                                    <p class="text-sm text-center text-gray-600 flex-grow">Experience the ultimate comfort
                                        in our canopy
                                        home.</p>
                                    <div class=" text-center">
                                        <a href="#" class="btn-primary">
                                            Book Now
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div
                                class="w-1/3 bg-white border border-gray-200 rounded-lg overflow-hidden flex flex-col h-[450px]">
                                <img src="{{ asset('images/canopypool.png') }}" class="w-full h-[300px] object-cover"
                                    alt="Service 2">
                                <div class="p-4 flex-grow flex flex-col">
                                    <h5 class="text-lg text-center font-semibold">Lakeview Resort 2</h5>
                                    <p class="text-sm text-center text-gray-600 flex-grow">Enjoy stunning lake views and
                                        relax in
                                        nature.</p>
                                    <div class="mt-auto text-center">
                                        <a href="#" class="btn-primary">
                                            Book Now
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div
                                class="w-1/3 bg-white border border-gray-200 rounded-lg overflow-hidden flex flex-col h-[450px]">
                                <img src="{{ asset('images/poolhouse.png') }}" class="w-full h-[300px] object-cover"
                                    alt="Service 3">
                                <div class="p-4 flex-grow flex flex-col">
                                    <h5 class="text-lg text-center font-semibold">Adventure Park 3</h5>
                                    <p class="text-sm text-center text-gray-600 flex-grow">Thrilling rides and exciting
                                        experiences
                                        await.</p>
                                    <div class="mt-auto text-center">
                                        <a href="#" class="btn-primary">
                                            Book Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Slide 1 -->

                        <!-- Slide 2 -->
                        <div class="flex min-w-full justify-center space-x-4">
                            <!-- Card 1 -->
                            <div
                                class="w-1/3 bg-white border border-gray-200 rounded-lg overflow-hidden flex flex-col h-[450px]">
                                <img src="{{ asset('images/canopyhome.png') }}" class="w-full h-[300px] object-cover"
                                    alt="Service 1">
                                <div class="p-4 flex-grow flex flex-col">
                                    <h5 class="text-lg text-center font-semibold">Canopy Home 4</h5>
                                    <p class="text-sm text-center text-gray-600 flex-grow">Experience the ultimate comfort
                                        in our canopy
                                        home.</p>
                                    <div class="mt-auto text-center">
                                        <a href="#" class="btn-primary">
                                            Book Now
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div
                                class="w-1/3 bg-white border border-gray-200 rounded-lg overflow-hidden flex flex-col h-[450px]">
                                <img src="{{ asset('images/canopypool.png') }}" class="w-full h-[300px] object-cover"
                                    alt="Service 2">
                                <div class="p-4 flex-grow flex flex-col">
                                    <h5 class="text-lg text-center font-semibold">Lakeview Resort 5</h5>
                                    <p class="text-sm text-center text-gray-600 flex-grow">Enjoy stunning lake views and
                                        relax in
                                        nature.</p>
                                    <div class="mt-auto text-center">
                                        <a href="#" class="btn-primary">
                                            Book Now
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div
                                class="w-1/3 bg-white border border-gray-200 rounded-lg overflow-hidden flex flex-col h-[450px]">
                                <img src="{{ asset('images/poolhouse.png') }}" class="w-full h-[300px] object-cover"
                                    alt="Service 3">
                                <div class="p-4 flex-grow flex flex-col">
                                    <h5 class="text-lg text-center font-semibold">Adventure Park 6</h5>
                                    <p class="text-sm text-center text-gray-600 flex-grow">Thrilling rides and exciting
                                        experiences
                                        await.</p>
                                    <div class="mt-auto text-center">
                                        <a href="#" class="btn-primary">
                                            Book Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Slide 2 -->
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!----CONTACT / GOOGLE MAP---->
    <div class="py-5">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Message Form -->
                <div>
                    <h2 class="text-primary text-xl font-bold mb-4">CONTACT US</h2>
                    <form id="request" class="space-y-3">
                        <input type="text" class="w-full p-3 border rounded-md focus:ring focus:ring-green-300"
                            placeholder="Name" name="Name">
                        <input type="email" class="w-full p-3 border rounded-md focus:ring focus:ring-green-300"
                            placeholder="Email" name="Email">
                        <input type="tel" class="w-full p-3 border rounded-md focus:ring focus:ring-green-300"
                            placeholder="Phone Number" name="Phone Number">
                        <textarea class="w-full p-3 border rounded-md focus:ring focus:ring-green-300" placeholder="Message" name="Message"></textarea>
                        <div class="flex items-center justify-between">
                            <p class="text-sm">ano mas okay</p>
                            <button type="submit" class="px-4 py-2 btn-primary rounded-md">
                                Send
                            </button>
                        </div>
                        <button type="submit" class=" w-full px-4 py-2 btn-primary rounded-md">
                            Send
                        </button>
                    </form>
                </div>
                <!-- Google Map -->
                <div>
                    <iframe class="w-full h-[450px] rounded-md shadow-md"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3868.2502287794205!2d120.885106586352!3d14.180116951815094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd83d64e074a45%3A0x74d9317979d3664b!2sThe%20Canopy%20Farm%20PH!5e0!3m2!1sen!2sph!4v1732550161255!5m2!1sen!2sph"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- Chatbot Interface -->
<script class="">
    var botmanWidget = {
        aboutText: 'Chat with us for assistance!',
        introMessage: "Welcome to Canopy Farm Resort! Where nature meets elegance. How can I assist you today?",
        title: 'Canopy Farm Chat Support',
        placeholderText: 'Type "Start" to begin...',
        mainColor: '#4CAF50',
        aboutText: '',
        bubbleBackground: '#4CAF50',
        bubbleAvatarUrl: '/images/whitelogochatbot.png',
        headerTextColor: '#fff',
        displayMessageTime: true,
        dateTimeFormat: 'm/d/yy HH:MM',
        // onInit: function() {
        // this.sendMessage("start"); // Automatically sends 'start' to initiate the conversation
        // }

    };
</script>
<script src="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js" class=""></script>
