@extends('cabang.layouts.main')

@section('container')
    <div class="w-full mt-8 pb-4 p-6 h-screen">

        <div
            class="items-center justify-between p-4 bg-white dark:bg-gray-800 border border-gray-200 relative rounded-lg shadow-sm dark:border-gray-700 sm:p-6 ">
            <div class="w-full">
                <h1 class="text-white font-semibold text-xl">Data Anggota</h1>

                <form class="" action="/cabang/anggota">

                    <div class="grid grid-cols-1 lg:grid-cols-4 gap-x-4 justify-between my-5">
                        <div class="mt-4">

                            <label for="nama"
                                class="dark:text-white text-grey-900 font-semibold inline-block">Nama</label>
                            <input type="text" id="nama" name="nama"
                                class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-12"
                                placeholder="Ex : Paijo" value="{{ request('nama') }}">

                        </div>

                        <div class="mt-4">

                            <label for="ranting"
                                class="dark:text-white text-grey-900 font-semibold inline-block">Ranting</label>
                            <select name="ranting" id="ranting"
                                class="w-full h-12 bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white ">
                                <option value="" selected>Pilih Ranting</option>
                                @foreach ($ranting as $item)
                                    <option value="{{ $item['name'] }}"
                                        {{ $item['name'] == request('ranting') ? 'selected' : '' }}>{{ $item['name'] }}
                                    </option>
                                @endforeach
                            </select>

                        </div>



                        <div class="mt-4">

                            <label for="nia"
                                class="dark:text-white text-grey-900 font-semibold inline-block">NIA</label>
                            <input type="text" id="nia" name="nia"
                                class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-12"
                                placeholder="12.313.2012.1212" value="{{ request('nia') }}">

                        </div>
                        <div class="mt-4 flex gap-x-4">
                            <button type="submit"
                                class="focus:outline-none text-white bg-yellow-500 text-center py-2.5 rounded-lg text-base font-semibold p-2 h-12 w-full mt-8">Cari
                                Data
                            </button>

                            <a href="/cabang/anggota"
                                class="bg-red-700 py-2.5 p-2 rounded-lg text-base text-white font-semibold inline-block text-center h-12 w-full mt-8 ">
                                Reset
                                Filter
                            </a>
                        </div>


                    </div>

                </form>

            </div>

        </div>

        <div class="flex flex-col mt-6">
            <div class="overflow-x-auto rounded-lg">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-x-auto shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        No
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        Nama
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        Tingkatan
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
                                        NIA
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @foreach ($data as $item)
                                    <tr class="bg-white dark:bg-gray-800 border-b-[1px] border-gray-600">
                                        <td
                                            class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td
                                            class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->nama }}
                                        </td>
                                        <td
                                            class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->tingkatan }}
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
                                            {{ $item->nia }}
                                        </td>
                                        <td
                                            class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            <div class="flex gap-x-4 m-auto justify-center">

                                                <div class="view_anggota my-auto"
                                                    onclick="view_anggota_{{ $item->id }}.showModal()">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                        width="24" height="24" class="fill-cyan-400">
                                                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                        <path
                                                            d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                                                    </svg>
                                                </div>
                                                <form action="#" method="POST" class="my-auto">
                                                    <button type="submit" class="bg-red-600 p-2 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                            viewBox="0 0 448 512" class="fill-white">
                                                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                            <path
                                                                d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>

                                        </td>


                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>



    </div>
@endsection

{{-- modal card anggota start --}}

@foreach ($data as $view)
    <dialog id="view_anggota_{{ $view->id }}" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box px-4 py-10">
            <form method="dialog" class="modal-box bg-white dark:bg-gray-600 text-gray-900 dark:text-white">
                <h3 class="font-bold text-lg">Detail Anggota</h3>
                <div class="w-full mt-4">
                    <img src="{{ asset('ft_anggota/' . $view->image) }}" alt=""
                        class="w-full h-auto object-contain">
                </div>
                <div class=" my-4">

                    <div class="grid grid-cols-2">
                        <h1 class="font-semibold">Nama Lengkap</h1>
                        <div class="flex gap-x-2">
                            <h1 class="font-semibold">:</h1>
                            <h1>{{ $view->nama }}</h1>
                        </div>
                    </div>
                    <div class="grid grid-cols-2">
                        <h1 class="font-semibold">NIA</h1>
                        <div class="flex gap-x-2">
                            <h1 class="font-semibold">:</h1>
                            <h1>{{ $view->nia }}</h1>
                        </div>
                    </div>
                    <div class="grid grid-cols-2">
                        <h1 class="font-semibold">Tempat, Tanggal Lahir</h1>
                        <div class="flex gap-x-2">
                            <h1 class="font-semibold">:</h1>
                            <h1>{{ $view->ttl }}</h1>
                        </div>
                    </div>
                    <div class="grid grid-cols-2">
                        <h1 class="font-semibold">Alamat</h1>
                        <div class="flex gap-x-2">
                            <h1 class="font-semibold">:</h1>
                            <h1>{{ $view->alamat }}</h1>
                        </div>
                    </div>
                    <div class="grid grid-cols-2">
                        <h1 class="font-semibold">Cabang</h1>
                        <div class="flex gap-x-2">
                            <h1 class="font-semibold">:</h1>
                            <h1>{{ $view->cabang }}</h1>
                        </div>
                    </div>
                    <div class="grid grid-cols-2">
                        <h1 class="font-semibold">Ranting</h1>
                        <div class="flex gap-x-2">
                            <h1 class="font-semibold">:</h1>
                            <h1>{{ $view->ranting }}</h1>
                        </div>
                    </div>



                </div>
                <div class="modal-action">
                    <!-- if there is a button in form, it will close the modal -->
                    <button class="btn bg-red-600">Close</button>
                </div>
            </form>
        </div>
    </dialog>
@endforeach
{{-- modal card anggota end --}}
