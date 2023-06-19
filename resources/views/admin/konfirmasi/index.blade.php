@extends('admin.layout.main')

@section('container')
    <div class="px-4 pt-6">
        {{-- card-1 start --}}

        <div class="w-full mt-4 pb-4 ">

            <div
                class="items-center justify-between p-4 bg-white dark:bg-gray-800 border border-gray-200 relative rounded-lg shadow-sm dark:border-gray-700 sm:p-6 ">
                <div class="w-full">
                    <h1 class="text-white font-semibold text-xl">Konfirmasi</h1>

                    <form class="">


                        <div class="flex gap-x-4 my-2">
                            <div class="my-2 w-[30%]">

                                <label for="username"
                                    class="dark:text-white text-grey-900 font-semibold inline-block">Search</label>

                                <div class="relative w-full mt-2">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input type="text" id="voice-search"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Username">

                                </div>

                            </div>

                            <div class="mt-4">
                                <button type="submit"
                                    class="focus:outline-none text-white bg-yellow-500  rounded-lg text-base font-semibold p-2 h-10 mt-7">
                                    Cari Data
                                </button>
                            </div>

                        </div>


                    </form>
                </div>
                <div class="w-full" id="new-products-chart"></div>
            </div>
            {{-- card-1 end --}}

        </div>
        <div class="w-full pb-4 ">

            {{-- table matakuliah start --}}
            <div
                class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <!-- Card header -->
                <div class="items-center justify-between lg:flex">
                    <div class="mb-4 lg:mb-0">
                        <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Permintaan konfirmasi</h3>
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
                                                class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                                no
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                                Cabang
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                                Email
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                                Administrator
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                                No Telpon
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white dark:bg-gray-800">

                                        <tr>
                                            <td
                                                class="p-4 text-center text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                <h1>1</h1>
                                            </td>
                                            <td
                                                class="p-4 text-center text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                <h1>kaka</h1>
                                            </td>
                                            <td
                                                class="p-4 text-center text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                <h1>Admin</h1>
                                            </td>
                                            <td
                                                class="p-4 text-center text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                <h1>jono</h1>
                                            </td>

                                            <td
                                                class="p-4 text-center text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                <p>97389071370734</p>
                                            </td>

                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <div class="flex gap-x-4 justify-center items-center">

                                                    <a href="" class="inline-block  p-2 rounded-md bg-green-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class=" w-5 text-white"
                                                            fill="currentColor" viewBox="0 0 512 512">
                                                            <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                            <path
                                                                d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                                                        </svg>
                                                    </a>

                                                    <form action="">
                                                        <button type="submit" class="bg-red-500 p-2 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 text-white"
                                                                fill="currentColor" viewBox="0 0 448 512">
                                                                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                <path
                                                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                                            </svg>
                                                        </button>
                                                    </form>


                                                </div>
                                            </td>



                            </div>
                            </td>
                            </tr>

                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- table matakuliah end --}}








    </div>

    {{-- content-1 end --}}


    </div>
@endsection
