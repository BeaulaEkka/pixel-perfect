<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Perfect</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="">
    <div>
        <nav class=" w-full h-20  shadow-md flex justify-between r">
            <div class="w-[80%] mx-auto"><a href=""><img class="w-40"
                        src={{ Vite::asset('resources/images/logo.png') }} alt=""></a></div>
            <div>links</div>
            <div>post a job</div>
        </nav>
        <main>{{ $slot }}</main>
    </div>

</body>

</html>
