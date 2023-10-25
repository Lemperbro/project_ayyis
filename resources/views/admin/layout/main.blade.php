@include('globalPartials.start')

@include('globalPartials.navbar')

<div class="flex pt-16 overflow-hidden bg-gray-100 dark:bg-gray-900">

    @include('admin.partials.sidebar')

    <div id="main-content" class="relative w-full h-full bg-gray-100 lg:ml-64 dark:bg-gray-900 pt-6 pb-20">
        <main>

            @yield('container')

            <main>


    </div>

</div>

@include('globalPartials.end')
