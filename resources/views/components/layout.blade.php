<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Perfect</title>
    @vite(['resources/js/app.js'])
</head>

<body class="">
    <div>
        <nav class="flex items-center w-full h-16 p-4 shadow-sm lg-p-10 ">
            <div class="w-full lg:w-[80%] mx-auto flex items-center justify-between ">
                <a href="/">
                    <!-- Corrected image path with Vite handling -->
                    <img class="w-40" src="{{ Vite::asset('resources/images/logo.png') }}" alt="Logo">
                </a>

                <div class="flex space-x-2 font-semibold capitalize lg:gap-8 "><a href="">Jobs</a>
                    <a href="">Careers</a>
                    <a href="">Salaries</a>
                    <a href="">Companies</a>
                </div>
                <div class="capitalize"><a href="">post a job</a></div>
            </div>
        </nav>
        <main class="mt-10 max-w-[80%] mx-auto ">{{ $slot }}</main>
    </div>

</body>

</html>
