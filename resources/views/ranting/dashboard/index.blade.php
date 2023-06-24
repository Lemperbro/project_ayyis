@extends('ranting.layouts.main')

@section('container')
    <div class="px-4 pt-2">


        <div class="flex w-full items-center gap-x-8 justify-center gap-4 mt-4 pb-4 ">

            <div
                class="items-center w-[50%] justify-between p-4 bg-yellow-300 border border-gray-200 relative rounded-lg shadow-sm dark:border-gray-700 sm:p-6 ">
                <div class="w-full">

                    <div class="flex justify-between pt-4 pb-12">
                        <div>
                            <h1 class="font-bold text-6xl"></h1>
                            <h1>Total Anggota</h1>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-28 opacity-50" viewBox="0 0 640 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z" />
                        </svg>

                    </div>

                    <a href=""
                        class="absolute bottom-0  left-0 right-0 bg-yellow-400/50 font-semibold text-lg text-center rounded-b-md p-2">Lihat
                        Detail</a>


                </div>
                <div class="w-full" id="new-products-chart"></div>
            </div>


            <div
                class="items-center w-[50%] p-4 bg-green-500 border border-gray-200 relative rounded-lg shadow-sm dark:border-gray-700 sm:p-6 ">
                <div class="w-full">

                    <div class="flex justify-between pt-4 pb-12">
                        <div>
                            <h1 class="font-bold text-6xl"></h1>
                            <h1>Pengurus</h1>
                        </div>


                        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 opacity-50" fill="currentcolor"
                            viewBox="0 0 24 24">
                            <path
                                d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z">
                            </path>
                        </svg>


                    </div>

                    <a href=""
                        class="absolute bottom-0 left-0 right-0 bg-green-600/50 font-semibold text-lg text-center rounded-b-md p-2">Lihat
                        Detail</a>


                </div>
            </div>



        </div>


        <div class="flex flex-col justify-center items-center border w-full rounded-xl p-3 mb-4">
            
            <img class="w-24 h-24 rounded-full shadow-lg object-cover" src="{{ asset('img/y.jpg') }}" alt="Bonnie image" />
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Slamet Sejahatera</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">Ketua Ranting</span>
            <div class="flex mt-4 space-x-3 md:mt-6">
                <a href="#"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Perbarui
                    Profil</a>

            </div>
        </div>
        {{-- Ketua Ranting End --}}


    </div>
@endsection
