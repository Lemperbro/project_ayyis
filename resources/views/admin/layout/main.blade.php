@include('globalPartials.start')

@include('globalPartials.navbar')

<div class="flex pt-16 overflow-hidden bg-gray-100 dark:bg-gray-900">

@include('admin.partials.sidebar')

<div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-100 lg:ml-64 dark:bg-gray-900">
    <main>

@yield('container')

    <main>


</div>

</div>

@include('globalPartials.end')