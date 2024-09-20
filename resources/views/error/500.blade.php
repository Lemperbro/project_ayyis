<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <div class="grid h-screen px-4 bg-white place-content-center">
        <div class="text-center">
            <h1 class="font-black text-gray-200 text-9xl">500</h1>

            <p class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                Uh-oh!
            </p>

            <p class="mt-4 text-gray-500">Internal Server Error.</p>

            <a href="{{ redirect()->back()->getTargetUrl() }}"
                class="inline-block px-5 py-3 mt-6 text-sm font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700 focus:outline-none focus:ring">
                Go Back Home
            </a>
        </div>
    </div>
</body>

</html>
