@extends('admin.layout.main')


@section('container')
    <div class="px-4 pt-6">
        {{-- card-1 start --}}

        <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-2 2xl:grid-cols-3 pb-4 ">

            <div
                class="items-center justify-between p-4 bg-yellow-300 border border-gray-200 relative rounded-lg shadow-sm dark:border-gray-700 sm:p-6 ">
                <div class="w-full">

                    <div class="flex justify-between pt-4 pb-12">
                        <div>
                            <h1 class="font-bold text-6xl">{{ $ranting->count() }}</h1>
                            <h1>Total Ranting</h1>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-20 opacity-50" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M256 288A144 144 0 1 0 256 0a144 144 0 1 0 0 288zm-94.7 32C72.2 320 0 392.2 0 481.3c0 17 13.8 30.7 30.7 30.7H481.3c17 0 30.7-13.8 30.7-30.7C512 392.2 439.8 320 350.7 320H161.3z" />
                        </svg>
                    </div>

                    <a href=""
                        class="absolute bottom-0  left-0 right-0 bg-yellow-400/50 font-semibold text-lg text-center rounded-b-md p-2">Lihat
                        Detal</a>


                </div>
                <div class="w-full" id="new-products-chart"></div>
            </div>
            {{-- card-1 end --}}


            {{-- card-2 start --}}
            <div
                class="items-center justify-between p-4 bg-cyan-500 border border-gray-200 relative rounded-lg shadow-sm dark:border-gray-700 sm:p-6 ">
                <div class="w-full">

                    <div class="flex justify-between pt-4 pb-12">
                        <div>
                            <h1 class="font-bold text-6xl">{{ $cabang->count() }}</h1>
                            <h1>Total Cabang</h1>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-20 opacity-50" viewBox="0 0 448 512">
                            <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M224 16c-6.7 0-10.8-2.8-15.5-6.1C201.9 5.4 194 0 176 0c-30.5 0-52 43.7-66 89.4C62.7 98.1 32 112.2 32 128c0 14.3 25 27.1 64.6 35.9c-.4 4-.6 8-.6 12.1c0 17 3.3 33.2 9.3 48H45.4C38 224 32 230 32 237.4c0 1.7 .3 3.4 1 5l38.8 96.9C28.2 371.8 0 423.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7c0-58.5-28.2-110.4-71.7-143L415 242.4c.6-1.6 1-3.3 1-5c0-7.4-6-13.4-13.4-13.4H342.7c6-14.8 9.3-31 9.3-48c0-4.1-.2-8.1-.6-12.1C391 155.1 416 142.3 416 128c0-15.8-30.7-29.9-78-38.6C324 43.7 302.5 0 272 0c-18 0-25.9 5.4-32.5 9.9c-4.7 3.3-8.8 6.1-15.5 6.1zm56 208H267.6c-16.5 0-31.1-10.6-36.3-26.2c-2.3-7-12.2-7-14.5 0c-5.2 15.6-19.9 26.2-36.3 26.2H168c-22.1 0-40-17.9-40-40V169.6c28.2 4.1 61 6.4 96 6.4s67.8-2.3 96-6.4V184c0 22.1-17.9 40-40 40zm-88 96l16 32L176 480 128 288l64 32zm128-32L272 480 240 352l16-32 64-32z" />
                        </svg>
                    </div>

                    <a href=""
                        class="absolute bottom-0 left-0 right-0 bg-cyan-600/50 font-semibold text-lg text-center rounded-b-md p-2">Lihat
                        Detal</a>


                </div>
                <div class="w-full" id="new-products-chart"></div>
            </div>
            {{-- card-2 end --}}

            {{-- card-3 start --}}

            <div
                class="items-center justify-between p-4 bg-green-500 border border-gray-200 relative rounded-lg shadow-sm dark:border-gray-700 sm:p-6 ">
                <div class="w-full">

                    <div class="flex justify-between pt-4 pb-12">
                        <div>
                            <h1 class="font-bold text-6xl">10</h1>
                            <h1>Total Anggota</h1>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-20 opacity-50" viewBox="0 0 448 512">
                            <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M219.3 .5c3.1-.6 6.3-.6 9.4 0l200 40C439.9 42.7 448 52.6 448 64s-8.1 21.3-19.3 23.5L352 102.9V160c0 70.7-57.3 128-128 128s-128-57.3-128-128V102.9L48 93.3v65.1l15.7 78.4c.9 4.7-.3 9.6-3.3 13.3s-7.6 5.9-12.4 5.9H16c-4.8 0-9.3-2.1-12.4-5.9s-4.3-8.6-3.3-13.3L16 158.4V86.6C6.5 83.3 0 74.3 0 64C0 52.6 8.1 42.7 19.3 40.5l200-40zM111.9 327.7c10.5-3.4 21.8 .4 29.4 8.5l71 75.5c6.3 6.7 17 6.7 23.3 0l71-75.5c7.6-8.1 18.9-11.9 29.4-8.5C401 348.6 448 409.4 448 481.3c0 17-13.8 30.7-30.7 30.7H30.7C13.8 512 0 498.2 0 481.3c0-71.9 47-132.7 111.9-153.6z" />
                        </svg>
                    </div>

                    <a href=""
                        class="absolute bottom-0 left-0 right-0 bg-green-600/50 font-semibold text-lg text-center rounded-b-md p-2">Lihat
                        Detal</a>


                </div>
                <div class="w-full" id="new-products-chart"></div>
            </div>
            {{-- card-3 end --}}

            {{-- card-4 start --}}




        </div>
        <div class="grid w-full grid-cols-1 gap-4 xl:grid-cols-2 pb-4 ">

            {{-- table matakuliah start --}}
            <div
                class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <!-- Card header -->
                <div class="items-center justify-between lg:flex">
                    <div class="mb-4 lg:mb-0">
                        <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">List Cabang</h3>
                    </div>
                </div>
                <!-- Table -->
                <div class="flex flex-col mt-6">
                    <div class="overflow-x-auto rounded-lg">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden shadow sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                    <thead class="bg-gray-50 dark:bg-gray-700">
                                        <tr>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                                No
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                                Username
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                                Email
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                                Tahun
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                                Role
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white dark:bg-gray-800">
                                        <tr>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                1.
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                9093023
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                agungandhita@gmail.com
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                2020
                                            </td>

                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                2
                                            </td>

                                        </tr>
                                        <tr class="bg-gray-50 dark:bg-gray-700">
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                2.
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                9093023
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                agungandhita@gmail.com
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                2020
                                            </td>

                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                3.
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                9093023
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                agungandhita@gmail.com
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                2020
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                2
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card Footer -->
                <div class="flex items-center justify-between pt-3 sm:pt-6 float-right">

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
            {{-- table matakuliah end --}}





            {{-- table admin start --}}
            <div
                class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <!-- Card header -->
                <div class="items-center justify-between lg:flex">
                    <div class="mb-4 lg:mb-0">
                        <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">List Ranting</h3>
                    </div>
                </div>
                <!-- Table -->
                <div class="flex flex-col mt-6">
                    <div class="overflow-x-auto rounded-lg">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden shadow sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                    <thead class="bg-gray-50 dark:bg-gray-700">
                                        <tr>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                                no
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                                Username
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                                Email
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                                No Telpon
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                                Role
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody class="bg-white dark:bg-gray-800">
                                        <tr>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                1.
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                Gresik
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Example74@gmail.com
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                082230736205
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Admin
                                            </td>


                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                1.
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                Gresik
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Example74@gmail.com
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                082230736205
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Admin
                                            </td>


                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                1.
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                Gresik
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Example74@gmail.com
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                082230736205
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Admin
                                            </td>


                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                1.
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                Gresik
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Example74@gmail.com
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                082230736205
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Admin
                                            </td>


                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                1.
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                Gresik
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Example74@gmail.com
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                082230736205
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Admin
                                            </td>


                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                1.
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                Gresik
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Example74@gmail.com
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                082230736205
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Admin
                                            </td>


                                        </tr>

                                        <tr>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                1.
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                Gresik
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Example74@gmail.com
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                082230736205
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Admin
                                            </td>


                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                1.
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                Gresik
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Example74@gmail.com
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                082230736205
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Admin
                                            </td>


                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                1.
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                Gresik
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Example74@gmail.com
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                082230736205
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Admin
                                            </td>


                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                1.
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                Gresik
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Example74@gmail.com
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                082230736205
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Admin
                                            </td>


                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card Footer -->
                <div class="flex items-center justify-between pt-3 sm:pt-6 float-right">

                    <div class="flex-shrink-0 ">
                        <a href="#"
                            class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                            Lihat Selengkapnya
                            <svg class="w-4 h-4 ml-1 sm:w-5 sm:h-5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
