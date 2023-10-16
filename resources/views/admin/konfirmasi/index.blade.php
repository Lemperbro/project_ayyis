@extends('admin.layout.main')

@section('container')
    <div class="px-4 pt-6">
        {{-- card-1 start --}}

        <div class="w-full mt-4 pb-4 ">

            <div
                class="items-center justify-between p-4 bg-white dark:bg-gray-800 border border-gray-200 relative rounded-lg shadow-sm dark:border-gray-700 sm:p-6 ">
                <div class="w-full">
                    <h1 class="text-white font-semibold text-xl">Konfirmasi</h1>

                    <form action="/admin/konfirmasi" method="GET" class="">


                        <div class="flex gap-x-4 my-2">
                            <div class="my-2 w-[30%]">

                                <label class="dark:text-white text-grey-900 font-semibold inline-block">Search</label>

                                <div class="relative w-full mt-2">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input type="text" name="search"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Cari Data" value="{{ request('search') }}">

                                </div>

                            </div>

                            <div class="mt-4 flex gap-x-2">
                                <button type="submit"
                                    class="focus:outline-none text-white bg-yellow-500  rounded-lg text-base font-semibold p-2 h-10 mt-7">
                                    Cari Data
                                </button>
                                <a href="/admin/konfirmasi"
                                    class="text-white bg-red-600 p-2 rounded-md h-10 mt-7 font-semibold text-base">
                                    Reset Search
                                </a>
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
                        <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Permintaan konfirmasi Akun
                        </h3>
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
                                                Ranting
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                                Email
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                                NIA
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
                                                Role
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="">

                                        @foreach ($data as $datas)
                                            <tr class="bg-white dark:bg-gray-800 border-b-[1px] border-gray-600">
                                                <td
                                                    class="p-4 text-center text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td
                                                    class="p-4 text-center text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $datas->cabang }}
                                                </td>
                                                <td
                                                    class="p-4 text-center text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    @if ($datas->ranting == null)
                                                        kosong
                                                    @else
                                                        {{ $datas->ranting }}
                                                    @endif
                                                </td>
                                                <td
                                                    class="p-4 text-center text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $datas->email }}
                                                </td>
                                                <td
                                                    class="p-4 text-center text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $datas->nia }}
                                                </td>
                                                <td
                                                    class="p-4 text-center text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $datas->username }}
                                                </td>

                                                <td
                                                    class="p-4 text-center text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $datas->telp }}
                                                </td>
                                                <td
                                                    class="p-4 text-center text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $datas->role }}
                                                </td>

                                                <td
                                                    class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    <div class="flex gap-x-4 justify-center items-center">

                                                        <button class="bg-red-500 p-2 rounded-md"
                                                            onclick="tolak_{{ $datas->id }}.showModal()">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                                viewBox="0 0 448 512" class="fill-white">
                                                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                <path
                                                                    d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                                            </svg>
                                                        </button>

                                                        <button class="bg-green-500 p-2 rounded-md"
                                                            onclick="confirm_{{ $datas->id }}.showModal()">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                                viewBox="0 0 448 512" class="fill-white">
                                                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                <path
                                                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                                                            </svg>
                                                        </button>


                                                    </div>
                                                </td>

                                                <!-- Open the modal using ID.showModal() method -->


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
        {{-- table matakuliah end --}}








    </div>

    {{-- content-1 end --}}


    </div>



    {{-- modal confirm start --}}

    @foreach ($data as $confirm)
        <dialog id="confirm_{{ $confirm->id }}" class="modal modal-bottom sm:modal-middle">
            <form action="/admin/konfirmasi/{{ $confirm->id }}" method="POST" class="modal-box dark:bg-gray-600 ">
                @csrf
                <h3 class="font-bold text-lg text-gray-900 dark:text-white">Konfirmasi Akun</h3>
                <p class="py-4 text-gray-900 dark:text-white">Apakah Kamu Yakin Mau Mengkonfirmasi Akun Ini ? </p>
                <div class="modal-action">
                    <label for="close" class="btn bg-red-600 hover:bg-red-700 text-white border-none">Tidak</label>
                    <button type="submit" class="btn bg-green-600 hover:bg-green-700 text-white border-none">Ya</button>
                </div>
            </form>
            <form method="dialog" class="hidden">
                <div class="modal-action ">
                    <!-- if there is a button in form, it will close the modal -->
                    <button id="close" class="btn bg-red-600 hover:bg-red-700 text-white border-none">Close</button>
            </form>
            </div>
        </dialog>
    @endforeach
    {{-- modal confirm end  --}}


    {{-- modal tolak start --}}

    @foreach ($data as $tolak)
        <dialog id="tolak_{{ $tolak->id }}" class="modal modal-bottom sm:modal-middle">
            <form action="/admin/tolak/{{ $tolak->id }}" method="POST" class="modal-box dark:bg-gray-600">
                @csrf
                <h3 class="font-bold text-lg text-gray-900 dark:text-white">Tolak Akun</h3>
                <p class="py-4 text-gray-900 dark:text-white">Apakah Kamu Yakin Mau Menolak Akun Ini ? </p>
                <div class="modal-action">
                    <label for="close_tolak" class="btn bg-red-600 hover:bg-red-700 text-white border-none">Tidak</label>
                    <button type="submit" class="btn bg-green-600 hover:bg-green-700 text-white border-none">Ya</button>
                </div>
            </form>
            <form method="dialog" class="hidden">
                <div class="modal-action">
                    <!-- if there is a button in form, it will close the modal -->
                    <button id="close_tolak" class="btn bg-red-600 hover:bg-red-700 text-white border-none">Close</button>
            </form>
            </div>
        </dialog>
    @endforeach
    {{-- modal tolak end  --}}
@endsection
