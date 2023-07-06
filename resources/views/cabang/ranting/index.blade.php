@extends('cabang.layouts.main')


@section('container')
    <div class="w-full mt-8 pb-4 p-6 h-screen">

        <div
            class="items-center justify-between p-4 bg-white dark:bg-gray-800 border border-gray-200 relative rounded-lg shadow-sm dark:border-gray-700 sm:p-6 ">
            <div class="w-full">
                <h1 class="text-white font-semibold text-xl">Data Admin Ranting</h1>

                <form class="" action="/cabang/ranting">

                    <div class="grid grid-cols-1 lg:grid-cols-4 gap-x-4 justify-between my-5">
                        <div class="my-4">

                            <label for="nama"
                                class="dark:text-white text-grey-900 font-semibold inline-block">Nama</label>
                            <input type="text" id="nama" name="nama"
                                class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-12"
                                placeholder="Ex : Paijo" value="{{ request('nama') }}">

                        </div>

                        <div class="my-4">

                            <label for="ranting"
                                class="dark:text-white text-grey-900 font-semibold inline-block">Ranting</label>
                            {{-- <input type="text" id="ranting" name="ranting"
                                class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-12"
                                placeholder="Ex : Maduran" value="{{ request('ranting') }}"> --}}
                                <select name="ranting" id="ranting"
                                class="w-full rounded-lg bg-gray-50 border border-gray-300 text-gray-900 text-sm p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 h-12 mt-2">
                                <option value="" selected>Pilih Ranting</option>
                                @foreach ($filter_ranting as $item)
                                    <option value="{{ $item['name'] }}" {{ ($item['name'] == request('ranting')? 'selected' : '') }}>{{ $item['name'] }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="my-4">

                            <label for="nia"
                                class="dark:text-white text-grey-900 font-semibold inline-block">NIA</label>
                            <input type="text" id="nia" name="nia"
                                class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-12"
                                placeholder="12.313.2012.1212" value="{{ request('nia') }}">

                        </div>

                        <div class="my-4 grid grid-cols-2 gap-x-2">

                            <button type="submit"
                                class="focus:outline-none text-white bg-yellow-500  rounded-lg text-base font-semibold p-2 h-12 mt-8">
                                Cari Data
                            </button>
                            <a href="/cabang/ranting"
                                class="bg-red-700 py-2.5 rounded-lg text-base text-white font-semibold inline-block text-center h-12 mt-8">Reset
                                Filter</a>
                        </div>

                    </div>
                </form>


                <div class="flex gap-x-2">

                    <a href="/cabang/ranting/create"
                        class="focus:outline-none text-white bg-yellow-500 rounded-lg text-base font-semibold px-5 py-2 mr-2 mb-2">
                        Tambah Admin Ranting
                    </a>


                    <button
                        class="focus:outline-none text-white bg-green-600  rounded-lg text-base flexfont-semibold px-5 py-2 mr-2 mb-2 gap-x-2 flex"
                        type="button">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            class="fill-white" style="transform: ;msFilter:;">
                            <path d="m12 16 4-5h-3V4h-2v7H8z"></path>
                            <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                        </svg>

                        <span>Download Data Ke Excel</span>

                    </button>

                </div>

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
                                        Ranting
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
                                        NIA
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        Administrator
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @foreach ($ranting as $item)
                                    <tr class="bg-white dark:bg-gray-800 border-b-[1px] border-gray-600">
                                        <td
                                            class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td
                                            class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->cabang }}
                                        </td>
                                        <td
                                            class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->ranting }}
                                        </td>
                                        <td
                                            class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->email }}
                                        </td>
                                        <td
                                            class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->telp }}
                                        </td>

                                        <td
                                            class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->nia }}
                                        </td>
                                        <td
                                            class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->username }}
                                        </td>
                                    </tr>
                                @endforeach


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
