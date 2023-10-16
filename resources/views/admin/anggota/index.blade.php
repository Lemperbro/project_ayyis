@extends('admin.layout.main')

@section('container')
    <div class="w-full mt-8 pb-4 p-6 h-screen">

        <div
            class="items-center justify-between p-4 bg-white dark:bg-gray-800 border border-gray-200 relative rounded-lg shadow-sm dark:border-gray-700 sm:p-6 ">
            <div class="w-full">
                <h1 class="text-white font-semibold text-xl">Data Anggota</h1>

                <form class="" action="/admin/anggota">

                    <div class="grid grid-cols-1 lg:grid-cols-5 gap-x-4 justify-between my-5">
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
                            <input type="text" id="ranting" name="ranting"
                                class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-12"
                                placeholder="Ex : Gembong" value="{{ request('ranting') }}">

                        </div>

                        <div class="mt-4">

                            <label for="cabang"
                                class="dark:text-white text-grey-900 font-semibold inline-block">Cabang</label>
                            <input type="text" id="cabang" name="cabang"
                                class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-12"
                                placeholder="Ex : Gembong" value="{{ request('cabang') }}">

                        </div>

                        <div class="mt-4">

                            <label for="nia"
                                class="dark:text-white text-grey-900 font-semibold inline-block">NIA</label>
                            <input type="text" id="nia" name="nia"
                                class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-12"
                                placeholder="12.313.2012.1212" value="{{ request('nia') }}">

                        </div>

                        <div class="my-4 grid grid-cols-2 gap-x-2">
                            <button type="submit"
                                class="focus:outline-none text-white bg-yellow-500 text-center py-2.5 rounded-lg text-base font-semibold p-2 h-12 mt-8">Cari Data
                            </button>

                            <a href="/admin/anggota"
                                class="bg-red-700 py-2.5 rounded-lg text-base text-white font-semibold inline-block text-center h-12 mt-8 ">
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
                                        Nama
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        Tingkatan
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        Ranting
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        Cabang
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
                                @foreach ($data_anggota as $item) 
                                    <tr class="bg-white dark:bg-gray-800 border-b-[1px] border-gray-600">
                                        <td
                                            class="p-4 text-sm text-center capitalize font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td
                                            class="p-4 text-sm text-center capitalize font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->nama }}
                                        </td>
                                        <td
                                            class="p-4 text-sm text-center capitalize font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->tingkatan }}
                                        </td>
                                        <td
                                            class="p-4 text-sm text-center capitalize font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->ranting }}
                                        </td>
                                        <td
                                            class="p-4 text-sm text-center capitalize font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->cabang }}
                                        </td>
    
                                        <td
                                            class="p-4 text-sm text-center capitalize font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->nia }}
                                        </td>
                                        <td
                                            class=" text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white flex justify-center items-center gap-x-4 p-2">
                                            
                                            <div class="pt-1">
                                                <a href="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" transform="matrix(1, 0, 0, 1, 0, 0)"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z" fill="#37801b"/><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z" fill="#37801b"/></svg>
                                                </a>
                                            </div>
                                                <button type="button" class="bg-red-600 p-2 rounded-md" onclick="delete_{{ $item->id }}.showModal()">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"
                                                        class="fill-white">
                                                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                        <path
                                                            d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z" />
                                                    </svg>
                                                </button>
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

    {{-- modal delete start --}}
    @foreach ($data_anggota as $delete)
    <dialog id="delete_{{ $delete->id }}" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box bg-white dark:bg-gray-600">
            <form action="/anggota/delete/{{ $delete->id }}" method="POST">
                @csrf
                <h3 class="font-bold text-lg text-gray-900 dark:text-white">Hapus Admin Ranting</h3>
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
