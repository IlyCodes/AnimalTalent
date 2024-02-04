<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>ANIMAL TALENT - @yield('title')</title>
</head>
<body>

<header class="bg-white">

  <nav class="mx-auto flex items-center justify-center p-6 lg:px-8" aria-label="Global">
    <x-navbar.links />
  </nav>

</header>

    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    
</body>
</html>