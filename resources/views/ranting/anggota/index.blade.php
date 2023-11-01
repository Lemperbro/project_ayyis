@extends('ranting.layouts.main')

@section('container')
    <div class="w-full px-4 min-h-screen">
        <div
            class="items-center justify-between p-4 bg-white dark:bg-gray-800 border border-gray-200 relative rounded-lg shadow-sm dark:border-gray-700 sm:p-6 ">
            <div class="w-full">
                <h1 class="text-white font-semibold text-xl capitalize">Data Anggota Di Ranting {{ Auth()->user()->ranting }}
                </h1>

                <form class="" action="/ranting/anggota" method="GET">

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-4 justify-between my-5">
                        <div class="mt-4">

                            <label for="nama"
                                class="dark:text-white text-grey-900 font-semibold inline-block">Nama</label>
                            <input type="text" id="nama" name="nama"
                                class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-12"
                                placeholder="Ex : Paijo" value="{{ request('nama') }}">

                        </div>
                        <div class="mt-4">

                            <label for="nia"
                                class="dark:text-white text-grey-900 font-semibold inline-block">NIA</label>
                            <input type="text" id="nia" name="nia"
                                class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-12"
                                placeholder="12.313.2012.1212" value="{{ request('nia') }}">

                        </div>
                        <div class="mt-4 grid grid-cols-2 gap-x-4">

                            <button type="submit"
                                class="focus:outline-none text-white bg-yellow-500 text-center py-2.5 rounded-lg text-base font-semibold p-2 h-12 mt-8">
                                Cari Data
                            </button>
                            <a href="/ranting/anggota"
                                class="focus:outline-none text-white bg-red-700 rounded-lg text-base font-semibold py-3 px-2 h-12 mt-8 text-center">Reset
                                Filter</a>
                        </div>


                    </div>
                </form>


            </div>
        </div>
        <div
            class="mt-6 items-center justify-between p-4 bg-white dark:bg-gray-800 border border-gray-200 relative rounded-lg shadow-sm dark:border-gray-700 sm:p-6 ">
            <div class="grid grid-cols-1 md:grid-cols-2 w-full md:w-[60%] lg:w-[30%] gap-4">
                <a href="/ranting/anggota?{{ http_build_query(array_merge(request()->all(), ['download' => 'true'])) }}"
                    class="focus:outline-none text-white bg-primary-600 p-3 h-12 rounded-lg text-base flex  font-semibold gap-x-2">

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-white" style="transform: ;msFilter:;">
                        <path d="m12 16 4-5h-3V4h-2v7H8z">
                        </path>
                        <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                    </svg>

                    <span>Download Data</span>

                </a>
                {{-- <button
                    class="focus:outline-none text-white bg-green-600 p-3 h-12 rounded-lg text-base flex  font-semibold gap-x-2"
                    type="button" onclick="import_1.showModal()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-white" style="transform: ;msFilter:;">
                        <path
                            d="M20 14V8l-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-4h-7v3l-5-4 5-4v3h7zM13 4l5 5h-5V4z">
                        </path>
                    </svg>

                    <span>Import Dari Excel</span>

                </button> --}}

            </div>
        </div>

        <div class="flex flex-col mt-6">
            <div class="overflow-x-auto rounded-lg">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600" id="dataPrint">
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
                                        NIA
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        Tempat, Tanggal Lahir
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
                                            class="p-4 text-sm text-center capitalize font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->nama }}
                                        </td>
                                        <td
                                            class="p-4 text-sm text-center capitalize font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->nia }}
                                        </td>
                                        <td
                                            class="p-4 text-sm text-center capitalize font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->ttl }}
                                        </td>
                                        <td
                                            class="p-4 text-sm text-center capitalize font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->tingkatan }}
                                        </td>

                                        <td
                                            class="p-4 text-sm text-center capitalize font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->cabang }}
                                        </td>
                                        <td
                                            class="p-4 text-sm text-center capitalize font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->ranting }}
                                        </td>
                                        <td
                                            class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            <div class="flex gap-x-3 m-auto justify-center">
                                                <div class="pt-1">
                                                    <a href="{{ route('anggota.edit', ['id' => $item->id]) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="28"
                                                            height="28" viewBox="0 0 24 24"
                                                            transform="matrix(1, 0, 0, 1, 0, 0)">
                                                            <path
                                                                d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"
                                                                fill="#37801b" />
                                                            <path
                                                                d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"
                                                                fill="#37801b" />
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="view_anggota my-auto"
                                                    onclick="view_anggota_{{ $item->id }}.showModal()">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                        width="24" height="24" class="fill-cyan-400">
                                                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                        <path
                                                            d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                                                    </svg>
                                                </div>

                                                <div class="my-auto">
                                                    <button type="button" class="bg-red-600 p-2 rounded-md"
                                                        onclick="delete_{{ $item->id }}.showModal()">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                            viewBox="0 0 448 512" class="fill-white">
                                                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                            <path
                                                                d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>


                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                        {{ $data->appends($appendsPaginate)->links('vendor.pagination.tailwind') }}
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
                    <button class="btn bg-red-600 hover:bg-red-700 border-none outline-none">Close</button>
                </div>
            </form>
        </div>
    </dialog>
@endforeach
{{-- modal card anggota end --}}





<dialog id="import_1" class="modal modal-bottom sm:modal-middle">
    <form action="" class="modal-box bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
        <h3 class="font-bold text-lg">Import Data Anggota</h3>
        <input type="file"
            class="w-full rounded-md bg-slate-200 dark:bg-gray-800 text-gray-900 dark:text-white mt-4">

        <div class="modal-action">
            <label for="btn-close" class="btn bg-red-600 border-none hover:bg-red-700">BATAL</label>
            <button type="submit" class="btn bg-green-600 border-none hover:bg-green-700">Simpan</button>
        </div>
    </form>
    <form method="dialog" class="hidden">
        <h3 class="font-bold text-lg">Hello!</h3>
        <p class="py-4">Press ESC key or click the button below to close</p>
        <div class="modal-action">
            <!-- if there is a button in form, it will close the modal -->
            <button class="btn" id="btn-close">Close</button>
        </div>
    </form>
</dialog>



{{-- modal delete start --}}
@foreach ($data as $delete)
    <dialog id="delete_{{ $delete->id }}" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box bg-white dark:bg-gray-600">
            <form action="/ranting/delete/{{ $delete->id }}" method="POST">
                @csrf
                <h3 class="font-bold text-lg text-gray-900 dark:text-white">Hapus Data Anngota</h3>
                <p class="py-4 capitalize text-gary-900 dark:text-white">Apakah kamu yakin mau menghapus <span
                        class="font-semibold">{{ $delete->username }}</span></p>
                <div class="flex gap-x-4">

                    <button class="btn hidden" type="submit" id="hapus_btn">HAPUS</button>
                </div>
            </form>
            <form method="dialog">
                <div class="modal-action">
                    <!-- if there is a button in form, it will close the modal -->
                    <button class="btn bg-red-600 hover:bg-red-700 text-white border-none">TIDAK</button>
                    <label for="hapus_btn"
                        class="btn bg-green-600 hover:bg-green-700 text-white border-none">YA</label>
                </div>
            </form>
        </div>
    </dialog>
@endforeach

{{-- modal delete end --}}
