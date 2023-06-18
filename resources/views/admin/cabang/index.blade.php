@extends('admin.layout.main')

@section('container')
    <div class="w-full mt-8 pb-4 p-6 h-screen">

        <div
            class="items-center justify-between p-4 bg-white dark:bg-gray-800 border border-gray-200 relative rounded-lg shadow-sm dark:border-gray-700 sm:p-6 ">
            <div class="w-full">
                <h1 class="text-white font-semibold text-xl">Data Admin Cabang</h1>

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

                    <button type="button"
                        class="focus:outline-none text-white bg-red-700 hover:bg-yellow-500  rounded-lg text-base font-semibold px-5 py-2 mr-2 mb-2 ">
                        Cari
                    </button>

                    <button 
                        class="focus:outline-none text-white bg-blue-700 hover:bg-yellow-500 rounded-lg text-base font-semibold px-5 py-2 mr-2 mb-2"type="button">
                        Tambah Cabang
                    </button>


                    <button 
                        class="focus:outline-none text-white bg-green-700 hover:bg-yellow-500 rounded-lg text-base flexfont-semibold px-5 py-2 mr-2 mb-2 gap-x-2 flex" type="button">

                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M288 109.3V352c0 17.7-14.3 32-32 32s-32-14.3-32-32V109.3l-73.4 73.4c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l128-128c12.5-12.5 32.8-12.5 45.3 0l128 128c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L288 109.3zM64 352H192c0 35.3 28.7 64 64 64s64-28.7 64-64H448c35.3 0 64 28.7 64 64v32c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V416c0-35.3 28.7-64 64-64zM432 456a24 24 0 1 0 0-48 24 24 0 1 0 0 48z"/></svg>

                        <span>import</span>

                    </button>


                </form>
            </div>
            <div class="w-full" id="new-products-chart"></div>
        </div>

        <div class="flex flex-col mt-6">
            <div class="overflow-x-auto rounded-lg">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        No
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
                                        Telepon
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        Administrator
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800">
                                <tr>
                                    <td
                                        class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        1.
                                    </td>
                                    <td
                                        class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        Lamongan
                                    </td>
                                    <td
                                        class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        agungandhita@gmail.com
                                    </td>
                                    <td
                                        class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        08887686245986
                                    </td>

                                    <td
                                        class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        Andhi
                                    </td>

                                </tr>
                                <tr>
                                    <td
                                        class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        1.
                                    </td>
                                    <td
                                        class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        Lamongan
                                    </td>
                                    <td
                                        class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        agungandhita@gmail.com
                                    </td>
                                    <td
                                        class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        08887686245986
                                    </td>

                                    <td
                                        class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        Andhi
                                    </td>

                                </tr>
                                <tr>
                                    <td
                                        class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        1.
                                    </td>
                                    <td
                                        class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        Lamongan
                                    </td>
                                    <td
                                        class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        agungandhita@gmail.com
                                    </td>
                                    <td
                                        class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        08887686245986
                                    </td>

                                    <td
                                        class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        Andhi
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>


        {{-- modal tambah cabang --}}
        <div id="updateProductModal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                    <!-- Modal header -->
                    <div
                        class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Tambah Cabang
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="updateProductModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="#">
                        <div class="grid gap-4 mb-4 sm:grid-cols-2">
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                <input type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Adnhi">
                            </div>
                            <div>
                                <label for="brand"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cabang</label>
                                <input type="text" name="brand" id="brand"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Lamongan">
                            </div>
                            <div>
                                <label for="price"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="text" name="price" id="price"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="agungandhita@gmail.com">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Telpon</label>
                                <input type="number" name="price" id="price"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder='0878139879'>
                            </div>
                        </div>
                        <div class="flex gap-x-4 mt-4">
                            <button type="submit" class="bg-green-600 py-2 px-4 rounded-md text-white">Send</button>
                            <a href="#" class="bg-red-600 px-4 py-2 text-white rounded-md">Undo</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- modal tambah end --}}


    </div>
@endsection
