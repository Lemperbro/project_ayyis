@include('admin.partials.start')

@include('admin.partials.navbar')

<div class="flex pt-28 h-screen overflow-hidden bg-gray-100 dark:bg-gray-900">

@include('admin.partials.sidebar3')

<div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-100 lg:ml-64 dark:bg-gray-900">
    <main>

@yield('container')

    <main>

@include('admin.partials.footer')

</div>

</div>

@include('admin.partials.end')