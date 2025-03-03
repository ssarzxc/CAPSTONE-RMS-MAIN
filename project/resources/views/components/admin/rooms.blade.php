<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Rooms</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>
        <div class="container mx-auto p-6">
            <!-- Label and Confirm Button -->
            <div class="flex justify-between items-center mb-4">
                <div>
                    <h2 class="text-2xl subheader">All Rooms</h2>
                    <p class="text-gray-600">Manage all room details here!</p>
                </div>
            </div>


            <!-- Table -->
            <div class="bg-white p-4 rounded-lg shadow-md overflow-x-auto border">
                <table class="w-full">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="p-2 border text-center">Room ID</th>
                            <th class="p-2 border text-center">Room Name</th>
                            <th class="p-2 border text-center">Category Name</th>
                            <th class="p-2 border text-center">Ideal Guests</th>
                            <th class="p-2 border text-center">Max Adults</th>
                            <th class="p-2 border text-center">Max Kids</th>
                            <th class="p-2 border text-center">Room Status</th>
                            <th class="p-2 border text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="border-b">
                            <td class="p-2 border">1</td>
                            <td class="p-2 border">Sola</td>
                            <td class="p-2 border">Cozy Room</td>
                            <td class="p-2 border">2</td>
                            <td class="p-2 border">4</td>
                            <td class="p-2 border">2</td>
                            <td class="p-2 border">Available</td>
                            <td class="p-2 space-x-2 border text-center">
                                <a href="#" class="text-black hover:text-green-600">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="text-black hover:text-blue-600">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="#" class="text-black hover:text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-2 border">1</td>
                            <td class="p-2 border">Sola</td>
                            <td class="p-2 border">Cozy Room</td>
                            <td class="p-2 border">2</td>
                            <td class="p-2 border">4</td>
                            <td class="p-2 border">2</td>
                            <td class="p-2 border">Available</td>
                            <td class="p-2 space-x-2 border text-center">
                                <a href="#" class="text-black hover:text-green-600">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="text-black hover:text-blue-600">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="#" class="text-black hover:text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-2 border">1</td>
                            <td class="p-2 border">Sola</td>
                            <td class="p-2 border">Cozy Room</td>
                            <td class="p-2 border">2</td>
                            <td class="p-2 border">4</td>
                            <td class="p-2 border">2</td>
                            <td class="p-2 border">Available</td>
                            <td class="p-2 space-x-2 border text-center">
                                <a href="#" class="text-black hover:text-green-600">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="text-black hover:text-blue-600">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="#" class="text-black hover:text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-2 border">1</td>
                            <td class="p-2 border">Sola</td>
                            <td class="p-2 border">Cozy Room</td>
                            <td class="p-2 border">2</td>
                            <td class="p-2 border">4</td>
                            <td class="p-2 border">2</td>
                            <td class="p-2 border">Available</td>
                            <td class="p-2 space-x-2 border text-center">
                                <a href="#" class="text-black hover:text-green-600">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="text-black hover:text-blue-600">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="#" class="text-black hover:text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-2 border">1</td>
                            <td class="p-2 border">Sola</td>
                            <td class="p-2 border">Cozy Room</td>
                            <td class="p-2 border">2</td>
                            <td class="p-2 border">4</td>
                            <td class="p-2 border">2</td>
                            <td class="p-2 border">Available</td>
                            <td class="p-2 space-x-2 border text-center">
                                <a href="#" class="text-black hover:text-green-600">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="text-black hover:text-blue-600">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="#" class="text-black hover:text-red-600">
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