<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js'])
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title>ANIMAL TALENT - @yield('title')</title>
</head>

<body>

  <header class="bg-white">
    <nav class="mx-auto" aria-label="Global">

      <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
        <a href="{{ url('/') }}" class="flex -m-1.5 p-1.5">
          <img class="h-8 w-auto" src="{{ asset('/logo/animalPaw.png') }}" alt="logo">
          <span class="text-3xl font-semibold">AnimalTalent</span>
        </a>

        <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
          <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">Participate <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
          </button>
          <div id="dropdown" class="z-10 hidden bg-white divide-y divide-indigo-100 rounded-lg shadow w-44">
            <ul class="py-2 text-sm text-indigo-700 aria-labelledby=" dropdownDefaultButton">
              <li class="w-full pl-8 p-2 hover:bg-indigo-200">
                <a href="{{ route('create_judge') }}" class="text-sm font-semibold leading-6 text-indigo-900">New Judge<span aria-hidden="true">&rarr;</span></a>
              </li>
              <li class="w-full pl-8 p-2 hover:bg-indigo-200">
                <a href="{{ route('animals.create') }}" class="text-sm font-semibold leading-6 text-indigo-900">New Participate<span aria-hidden="true">&rarr;</span></a>
              </li>
              <li class="w-full pl-8 p-2 hover:bg-indigo-200">
                <a href="{{ route('add_new_animal') }}" class="text-sm font-semibold leading-6 text-indigo-900">Add New Animal<span aria-hidden="true">&rarr;</span></a>
              </li>
            </ul>
          </div>

          <button data-collapse-toggle="mega-menu-full-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu-full-cta" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
          </button>
        </div>

        <div id="mega-menu-full-cta" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
          <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
            <x-navbar.links />
          </ul>
        </div>
        
      </div>

    </nav>

  </header>

  @yield('content')
</body>

</html>