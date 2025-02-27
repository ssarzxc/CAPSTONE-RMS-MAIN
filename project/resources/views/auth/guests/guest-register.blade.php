<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Guest Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto"
        src="https://tailwindui.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
      <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-gray-900">Register for an Account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{ route('guest.register') }}" method="POST">
        <div>
          {{-- Display All Validation Errors --}}
          @if ($errors->any())
          <div class="mb-4 p-3 bg-red-100 border border-red-400 text-red-700 rounded">
            <ul class="list-disc pl-5">
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
        </div>
        
        @csrf
        <div>
          <label for="first_name" class="block text-sm font-medium text-gray-900">First Name</label>
          <input type="text" name="first_name" id="first_name" required
            class="mt-2 block w-full rounded-md border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

        <div>
          <label for="middle_name" class="block text-sm font-medium text-gray-900">Middle Name</label>
          <input type="text" name="middle_name" id="middle_name"
            class="mt-2 block w-full rounded-md border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

        <div>
          <label for="last_name" class="block text-sm font-medium text-gray-900">Last Name</label>
          <input type="text" name="last_name" id="last_name" required
            class="mt-2 block w-full rounded-md border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

        <div>
          <label for="email" class="block text-sm font-medium text-gray-900">Email Address</label>
          <input type="email" name="email" id="email" autocomplete="email" required
            class="mt-2 block w-full rounded-md border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
          <input type="password" name="password" id="password" autocomplete="new-password" required
            class="mt-2 block w-full rounded-md border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

        <div>
          <button type="submit"
            class="flex w-full justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500">Register</button>
        </div>
      </form>

      <p class="mt-10 text-center text-sm text-gray-500">
        Already have an account?
        <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Log in</a>
      </p>
    </div>
  </div>
</body>

</html>