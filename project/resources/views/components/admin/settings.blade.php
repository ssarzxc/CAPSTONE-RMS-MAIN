<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Management</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body>
        <div class="container p-6 mx-auto max-w-7xl">
            <!-- Header Section -->
            <div class="flex justify-between items-center mb-4">
                <div>
                    <h2 class="text-2xl subheader">User Management</h2>
                    <p class="text-gray-600">Manage all users and role permissions here!</p>
                </div>
                <a href="{{route('add-user')}}"
                    class="bg-green-700 text-white px-3 py-2 rounded flex items-center space-x-2 text-sm hover:bg-green-800">
                    <i class="fa-solid fa-plus text-xl"></i>
                    <span>Add New User</span>
                </a>
            </div>


            <!-- User Table -->
            <div class="overflow-x-auto bg-white rounded-lg shadow-md">
                <table class="w-full border-collapse border border-gray-300 text-sm text-left">
                    <thead class="bg-gray-200">
                        <tr class="text-center">
                            <th class="p-3 border">Role</th>
                            <th class="p-3 border">Name</th>
                            <th class="p-3 border">Email</th>
                            <th class="p-3 border">Status</th>
                            <th class="p-3 border">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border text-center">
                            <td class="p-3 border">Admin</td>
                            <td class="p-3 border">John Doe</td>
                            <td class="p-3 border">johndoe@example.com</td>
                            <td class="p-3 border text-green-600">Active</td>
                            <td class="p-3 border space-x-2">
                                <a href="{{route('edit-user')}}" class="text-black hover:text-blue-600">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="#" class="text-black hover:text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="border text-center">
                            <td class="p-3 border">Admin</td>
                            <td class="p-3 border">John Doe</td>
                            <td class="p-3 border">johndoe@example.com</td>
                            <td class="p-3 border text-green-600">Active</td>
                            <td class="p-3 border space-x-2">
                                <a href="{{route('edit-user')}}" class="text-black hover:text-blue-600">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="#" class="text-black hover:text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="border text-center">
                            <td class="p-3 border">Admin</td>
                            <td class="p-3 border">John Doe</td>
                            <td class="p-3 border">johndoe@example.com</td>
                            <td class="p-3 border text-green-600">Active</td>
                            <td class="p-3 border space-x-2">
                                <a href="{{route('edit-user')}}" class="text-black hover:text-blue-600">
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


            <!-- Header Section -->
            <div class="flex justify-between items-center mb-3 mt-10">
                <div>
                    <h2 class="text-2xl subheader">Roles and Permissions</h2>
                </div>
                <a href="{{route('add-role')}}"
                    class="bg-green-700 text-white px-3 py-2 rounded flex items-center space-x-2 text-sm hover:bg-green-800">
                    <i class="fa-solid fa-plus text-xl"></i>
                    <span>Add New Role</span>
                </a>
            </div>


            <!-- User Table -->
            <div class="overflow-x-auto bg-white rounded-lg shadow-md mb-4">
                <table class="w-full border-collapse border border-gray-300 text-sm text-left">
                    <thead class="bg-gray-200">
                        <tr class="">
                            <th class="p-3 border">Role</th>
                            <th class="p-3 border">Permissions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border">
                            <td class="p-3 border">Admin</td>
                            <td class="p-3 border">Rooms, Reservations, Dashboard</td>
                        </tr>
                        <tr class="border">
                            <td class="p-3 border">Admin</td>
                            <td class="p-3 border">Rooms, Reservations, Dashboard</td>
                        </tr>
                        <tr class="border">
                            <td class="p-3 border">Admin</td>
                            <td class="p-3 border">Rooms, Reservations, Dashboard</td>
                        </tr>
                    </tbody>
                </table>
            </div>




        </div>

</body>


</html>
