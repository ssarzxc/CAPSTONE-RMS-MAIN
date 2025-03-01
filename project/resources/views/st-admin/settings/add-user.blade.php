@extends('layouts.guest-navbar')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @section('content')
        <div class="container p-6 mx-auto max-w-5xl">
            <h1 class="text-2xl font-bold text-center mb-4 subheader">Add New User</h1>
            <div class="bg-white border shadow rounded-lg p-6">
                <form>
                    <!-- Name Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                        <!-- First Name -->
                        <div>
                            <label for="first_name" class="block text-md font-medium text-gray-700">First Name</label>
                            <input type="text" id="first_name" name="first_name"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500"
                                placeholder="Enter first name">
                        </div>

                        <!-- Middle Name -->
                        <div>
                            <label for="middle_name" class="block text-md font-medium text-gray-700">Middle Name</label>
                            <input type="text" id="middle_name" name="middle_name"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500"
                                placeholder="Enter middle name">
                        </div>

                        <!-- Last Name -->
                        <div>
                            <label for="last_name" class="block text-md font-medium text-gray-700">Last Name</label>
                            <input type="text" id="last_name" name="last_name"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500"
                                placeholder="Enter last name">
                        </div>
                    </div>

                    <!-- Role Dropdown -->
                    <div class="mb-4">
                        <label for="role_name" class="block text-md font-medium text-gray-700">Role</label>
                        <select id="role_name" name="role_name"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                            <option value="" disabled selected>Select Role</option>
                            <option value="SuperAdmin">Super Admin</option>
                            <option value="Admin">Admin</option>
                            <option value="Receptionist">Receptionist</option>
                        </select>
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-end gap-2">
                        <button type="submit" class="btn-primary">
                            Add
                        </button>
                        <button type="button" onclick="history.back()"
                            class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-md font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
</body>

</html>

