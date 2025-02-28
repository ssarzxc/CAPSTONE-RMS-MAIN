<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservations</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>


<body>

        <div class="container mx-auto p-6">
            <!-- Label and Confirm Button -->
            <div class="flex justify-between items-center mb-4">
                <div>
                    <h2 class="text-2xl subheader">New Reservations</h2>
                    <p class="text-gray-600">Manage all pending room reservations here!</p>
                </div>
            </div>


            <!-- Tabs -->
            {{-- <div class="border-b mb-4">
                <nav class="flex items-center justify-between">
                    <a href="" class="text-primary font-bold py-2 border-b-2 border-green-700">New Bookings</a>
                    <a href=""
                        class="bg-green-700 text-white px-3 py-2 rounded flex items-center space-x-2 text-sm mb-2 hover:bg-green-800">
                        <i class="fa-solid fa-circle-check text-xl"></i>
                        <span>Confirm Reservations</span>
                    </a>
                    {{-- <a href="" class="text-gray-500 hover:text-green-700 py-2">Confirmed Bookings</a>
            <a href="" class="text-gray-500 hover:text-green-700 py-2">On-Going Bookings</a>
            <a href="" class="text-gray-500 hover:text-green-700 py-2">Old Bookings</a>
                </nav>
            </div> --}}


            <!-- Table -->
            {{-- TODO: make select all checkboxes work --}}
            <div class="bg-white p-4 rounded-lg shadow-md overflow-x-auto border">
                <table class="w-full text-md text-left">
                    <thead class="bg-gray-200">
                        <tr>
                            {{-- <th class="p-2"><input type="checkbox" id="selectAll"
                                x-model="selectAll" @change="selected = selectAll ? " /></th> --}}
                            <th class="p-2"><input type="checkbox" id="selectAll"/></th>
                            <th class="p-2">Reservation ID</th>
                            <th class="p-2">Guest Name</th>
                            <th class="p-2">Email</th>
                            <th class="p-2">Pax</th>
                            <th class="p-2">Room</th>
                            <th class="p-2">Check-In</th>
                            <th class="p-2">Check-Out</th>
                            <th class="p-2">Payment Receipt</th>
                            <th class="p-2 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="p-2"><input type="checkbox" disabled></td>
                            <td class="p-2">010824</td>
                            <td class="p-2">Carl Capilitan</td>
                            <td class="p-2">wow@gmail.com</td>
                            <td class="p-2">2</td>
                            <td class="p-2">Sola</td>
                            <td class="p-2">01-08-2024</td>
                            <td class="p-2">01-10-2024</td>
                            <td class="p-2">
                                <a href="#" class="text-yellow-500" data-bs-toggle="modal"
                                    data-bs-target="#viewDetailsModal">Confirm Receipt</a>
                            </td>
                            <td class="p-2 flex space-x-2">
                                <a href="" class="text-black hover:text-green-600">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="" class="text-black hover:text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-2"><input type="checkbox" disabled></td>
                            <td class="p-2">010824</td>
                            <td class="p-2">Carl Capilitan</td>
                            <td class="p-2">wow@gmail.com</td>
                            <td class="p-2">2</td>
                            <td class="p-2">Sola</td>
                            <td class="p-2">01-08-2024</td>
                            <td class="p-2">01-10-2024</td>
                            <td class="p-2">
                                <a href="#" class="text-yellow-500" data-bs-toggle="modal"
                                    data-bs-target="#viewDetailsModal">Confirm Receipt</a>
                            </td>
                            <td class="p-2 flex space-x-2">
                                <a href="" class="text-black hover:text-green-600">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="" class="text-black hover:text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-2"><input type="checkbox" disabled></td>
                            <td class="p-2">010824</td>
                            <td class="p-2">Carl Capilitan</td>
                            <td class="p-2">wow@gmail.com</td>
                            <td class="p-2">2</td>
                            <td class="p-2">Sola</td>
                            <td class="p-2">01-08-2024</td>
                            <td class="p-2">01-10-2024</td>
                            <td class="p-2">
                                <a href="#" class="text-yellow-500" data-bs-toggle="modal"
                                    data-bs-target="#viewDetailsModal">Confirm Receipt</a>
                            </td>
                            <td class="p-2 flex space-x-2">
                                <a href="" class="text-black hover:text-green-600">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="" class="text-black hover:text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="mt-4 text-right text-sm">
                <button class="bg-green-700 text-white px-3 py-1 rounded">1</button>
                <button class="bg-green-700 text-white px-3 py-1 rounded">2</button>
                <button class="bg-green-700 text-white px-3 py-1 rounded">3</button>
                <button class="bg-green-700 text-white px-3 py-1 rounded">4</button>
            </div>
        </div>
    

</body>


</html>


