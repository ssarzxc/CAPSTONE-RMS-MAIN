@extends('layouts.guest-navbar')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Role</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @section('content')
    <div class="container p-6 mx-auto max-w-5xl">
        <h1 class="text-2xl font-bold text-center mb-4 subheader">Add New Role</h1>
        <div class="bg-white border shadow rounded-lg p-6">
            <form>
                <!-- Name Field -->

                <form method="post" action="{{route('store-role')}}">
                    @csrf
                    @method('post')

                    <div class="mb-4">
                        <label for="first_name" class="block text-md font-medium text-gray-700">Role</label>
                        <input type="text" id="role" name="role"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500"
                            placeholder="Enter role name">
                    </div>

                    <div>
                        @if ($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>

                        @endif
                    </div>


                    <!-- Role Dropdown -->
                    <div class="mb-4">
                        <label class="block text-md font-medium text-gray-700">Permissions</label>
                        <div class="mt-2 space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" name="permissions[]" value="Dashboard" class="h-4 w-4 text-green-600 border-gray-300 rounded focus:ring-green-500">
                                <span class="ml-2 text-gray-700">Dashboard</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" name="permissions[]" value="Rooms" class="h-4 w-4 text-green-600 border-gray-300 rounded focus:ring-green-500">
                                <span class="ml-2 text-gray-700">Rooms</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" name="permissions[]" value="Reservations" class="h-4 w-4 text-green-600 border-gray-300 rounded focus:ring-green-500">
                                <span class="ml-2 text-gray-700">Reservations</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" name="permissions[]" value="GuestHome" class="h-4 w-4 text-green-600 border-gray-300 rounded focus:ring-green-500">
                                <span class="ml-2 text-gray-700">Guest Home Page</span>
                            </label>
                        </div>
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