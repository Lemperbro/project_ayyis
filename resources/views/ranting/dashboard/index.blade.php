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

        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">


        <div class="items-center justify-between lg:flex">
            <div class="mb-4 lg:mb-0">
                <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">List Anggota</h3>
            </div>
        </div>
        <div class="flex flex-col mt-6">
            <div class="overflow-x-auto rounded-lg">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="p-4 text-lg font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        No
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-lg font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        Nama
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-lg font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        Foto
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-lg font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        Tingkatan
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-lg font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        NIA
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-lg font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        Ranting
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-lg font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="">
                                    <tr class="bg-white dark:bg-gray-800 border-b-[1px] border-gray-600">
                                        <td
                                            class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        </td>
                                        <td
                                            class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        </td>
                                        <td
                                            class="p-4 text-sm flex justify-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            <img src="" alt="" class="w-28 object-contain">
                                           
                                        </td>
                                        <td
                                            class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        </td>
                                        <td
                                            class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        </td>
    
                                        <td
                                            class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        </td>
                                        <td
                                            class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            <form action="#" method="POST">
                                                <button type="submit" class="bg-red-600 p-2 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"
                                                        class="fill-white">
                                                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                        <path
                                                            d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
    
    
                                    </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>

    </div>
        


    </div>
@endsection
