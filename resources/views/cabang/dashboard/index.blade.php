@extends('cabang.layouts.main')


@section('container')
    <div class="px-4 pt-6">





        {{-- card-1 start --}}
        <div class="grid w-full gap-4 mt-4 xl:grid-cols-2 2xl:grid-cols-2 pb-4 ">




            <div
                class="items-center justify-between p-4 bg-yellow-300 border border-gray-200 relative rounded-lg shadow-sm dark:border-gray-700 sm:p-6 ">
                <div class="w-full">

                    <div class="flex justify-between pt-4 pb-12">
                        <div>
                            <h1 class="font-bold text-6xl">{{ $ranting->count() }}</h1>
                            <h1 class="capitalize">Total Ranting Di {{ Auth()->user()->cabang }}</h1>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-28 opacity-50" viewBox="0 0 640 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z" />
                        </svg>

                    </div>

                    <a href="/cabang/ranting"
                        class="absolute bottom-0  left-0 right-0 bg-yellow-400/50 font-semibold text-lg text-center rounded-b-md p-2">Lihat
                        Detail</a>


                </div>
                <div class="w-full" id="new-products-chart"></div>
            </div>
            {{-- card-1 end --}}


            {{-- card-3 start --}}

            <div
                class="items-center justify-between p-4 bg-green-500 border border-gray-200 relative rounded-lg shadow-sm dark:border-gray-700 sm:p-6 ">
                <div class="w-full">

                    <div class="flex justify-between pt-4 pb-12">
                        <div>
                            <h1 class="font-bold text-6xl">{{ $anggota->count() }}</h1>
                            <h1 class="capitalize">Total Anggota Di {{ Auth()->user()->cabang }}</h1>
                        </div>


                        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 opacity-50" fill="currentcolor"
                            viewBox="0 0 24 24">
                            <path
                                d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z">
                            </path>
                        </svg>


                    </div>

                    <a href="/cabang/anggota"
                        class="absolute bottom-0 left-0 right-0 bg-green-600/50 font-semibold text-lg text-center rounded-b-md p-2">Lihat
                        Detail</a>


                </div>
                <div class="w-full" id="new-products-chart"></div>
            </div>
            {{-- card-3 end --}}




        </div>

        <div class="w-full mt-8 pb-4 ">


            {{-- table admin start --}}
            <div
                class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <!-- Card header -->
                <div class="items-center justify-between lg:flex">
                    <div class="mb-4 lg:mb-0">
                        <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">List Admin Ranting</h3>
                    </div>
                </div>
                <!-- Table -->
                <div class="flex flex-col mt-6">
                    <div class="overflow-x-auto rounded-lg scrollbar">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden shadow sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                    <thead class="bg-gray-50 dark:bg-gray-700">
                                        <tr>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                                no
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                                Administrator
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                                Email
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                                No Telpon
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                                Cabang
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                                Ranting
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                                Role
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody class="bg-white dark:bg-gray-800">
                                        @foreach ($ranting as $item)
                                            <tr class="text-center border-b-[1px] border-gray-600">
                                                <td
                                                    class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td
                                                    class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    {{ $item->username }}
                                                </td>
                                                <td
                                                    class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    {{ $item->email }}
                                                </td>
                                                <td
                                                    class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    {{ $item->telp }}
                                                </td>
                                                <td
                                                    class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    {{ $item->cabang }}
                                                </td>
                                                <td
                                                    class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    {{ $item->ranting }}
                                                </td>
                                                <td
                                                    class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    {{ $item->role }}
                                                </td>
                                            </tr>
                                        @endforeach



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card Footer -->
                <div class="flex items-center justify-end pt-3 sm:pt-6 ">

                    <div class="flex-shrink-0 ">
                        <a href="#"
                            class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                            Lihat Selengkapnya
                            <svg class="w-4 h-4 ml-1 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            {{-- table admin end --}}


        </div>
    </div>
@endsection
