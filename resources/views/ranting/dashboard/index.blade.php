@extends('ranting.layouts.main')

@section('container')
    <div class="px-4">
   

        <div class="w-full mt-4 pb-4 ">

            <div
                class="items-center justify-between p-4 bg-white dark:bg-gray-800 border border-gray-200 relative rounded-lg shadow-sm dark:border-gray-700 sm:p-6 ">
                <div class="w-full">
                    <h1 class="text-white font-semibold text-xl">Cari...</h1>

                    <form class="">


                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-4 justify-between my-5">
                            <div class="my-4">

                                <label for="username"
                                    class="dark:text-white text-grey-900 font-semibold inline-block">Cabang</label>
                                <input type="text" id="username"
                                    class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            </div>

                            <div class="my-4">

                                <label for="thn_masuk"
                                    class="dark:text-white text-grey-900 font-semibold inline-block">NIA</label>
                                <input type="text" id="thn_masuk"
                                    class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            </div>

                        </div>
                        <div class="flex">

                        <button type="button"
                            class="focus:outline-none text-white bg-primary-700 dark:bg-green-600 hover:bg-yellow-500  rounded-lg text-base font-semibold px-5 py-2 mr-2 mb-2 ">Cari</button>

                            <button 
                            class="focus:outline-none text-white bg-green-700 hover:bg-yellow-500 rounded-lg text-base flexfont-semibold px-5 py-2 mr-2 mb-2 gap-x-2 flex" type="button">
    
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M288 109.3V352c0 17.7-14.3 32-32 32s-32-14.3-32-32V109.3l-73.4 73.4c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l128-128c12.5-12.5 32.8-12.5 45.3 0l128 128c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L288 109.3zM64 352H192c0 35.3 28.7 64 64 64s64-28.7 64-64H448c35.3 0 64 28.7 64 64v32c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V416c0-35.3 28.7-64 64-64zM432 456a24 24 0 1 0 0-48 24 24 0 1 0 0 48z"/></svg>
    
                            <span>import</span>
    
                        </button>
                    </div>

                    </form>
                </div>
                <div class="w-full" id="new-products-chart"></div>
            </div>
            {{-- card-1 end --}}

        </div>

        <div class="p-4 bg-slate-700 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <section class="bg-white dark:bg-gray-900">
                <div
                    class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                    <img class="w-full hidden dark:block"
                        src="{{ asset('img/y.jpg') }}"
                        alt="dashboard image">
                    <div class="mt-4 md:mt-0">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Let's create
                            more tools and ideas that brings us together.</h2>
                        <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">Flowbite helps you connect
                            with friends and communities of people who share your interests. Connecting with your friends
                            and family as well as discovering new ones is easy with features like Groups.</p>
                        <a href="#"
                            class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                            Get started
                            <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    @endsection
