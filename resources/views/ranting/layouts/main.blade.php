@include('globalPartials.start')

@include('globalPartials.navbar')

<div class="flex pt-28 pb-10 bg-gray-100 dark:bg-gray-900">

@include('ranting.partials.sidebar')

<div id="main-content" class="relative w-full h-full bg-gray-100 lg:ml-64 dark:bg-gray-900">
    <main>

@yield('container')

    <main>


</div>

</div>

@include('globalPartials.end')