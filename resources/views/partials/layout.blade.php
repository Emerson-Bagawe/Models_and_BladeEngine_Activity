<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
    @vite('resources/css/app.css')
</head>

    <header class="bg-gray-800 p-4 sticky top-0 ">
        <div class="container mx-auto text-center">
            <p class="text-blue-200 font-bold text-2xl">Book List</p>
        </div>
    </header>

    <body class="bg-[#0d1117] text-white">
        @yield('content')
    </body>

    <footer class="bg-gray-800 p-4 mt-4">
        <div class="container mx-auto text-center">
            <span class="text-blue-200">Made by EMS</span>
        </div>
    </footer>
</html>