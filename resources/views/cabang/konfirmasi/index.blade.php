@extends('cabang.layouts.main')

@section('container')
    <div class="px-4 pt-6">
        {{-- card-1 start --}}

        <div class="w-full mt-4 pb-4 ">

            <div
                class="items-center justify-between p-4 bg-white dark:bg-gray-800 border border-gray-200 relative rounded-lg shadow-sm dark:border-gray-700 sm:p-6 ">
                <div class="w-full">
                    <h1 class="text-white font-semibold text-xl">Konfirmasi</h1>

                    <form class="/cabang/confirmation" method="GET">


                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-4 justify-between my-5">
                            <div class="my-4">

                                <label for="ranting"
                                    class="dark:text-white text-grey-900 font-semibold inline-block">Ranting</label>
                                <input type="text" id="ranting" name="ranting" placeholder="Parengan"
                                    class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-12" value="{{ request('ranting') }}">

                            </div>
                            <div class="mt-4 grid grid-cols-2 gap-x-3">
                                <button type="submit"
                                class="focus:outline-none text-white bg-yellow-500  rounded-lg text-base font-semibold px-5 py-2 mr-2 mb-2 h-12 mt-8">Cari Data</button>
                                <a href="/cabang/confirmation"
                                class="focus:outline-none text-white text-center bg-red-600  rounded-lg text-base font-semibold px-5 py-3 mr-2 mb-2 h-12 mt-8">Reset Filter</a>
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
                                                class="p-4 text-center text-xs font-medium tracking-wider text-gray-500 uppercase dark:text-white">
                                                No
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-center text-xs font-medium tracking-wider text-gray-500 uppercase dark:text-white">
                                                Ranting
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-center text-xs font-medium tracking-wider text-gray-500 uppercase dark:text-white">
                                                Cabang
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-center text-xs font-medium tracking-wider text-gray-500 uppercase dark:text-white">
                                                NIA
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-center text-xs font-medium tracking-wider text-gray-500 uppercase dark:text-white">
                                                Email
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-center text-xs font-medium tracking-wider text-gray-500 uppercase dark:text-white">
                                                Administrator
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-center text-xs font-medium tracking-wider text-gray-500 uppercase dark:text-white">
                                                No Telphone
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-center text-xs font-medium tracking-wider text-gray-500 uppercase dark:text-white">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white dark:bg-gray-800">


                                        @foreach ($data as $item)
                                            <tr class="text-center border-b-[1px] border-gray-600">
                                                <td
                                                    class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td
                                                    class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $item->ranting }}
                                                </td>
                                                <td
                                                    class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $item->cabang }}
                                                </td>
                                                <td
                                                    class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $item->nia }}
                                                </td>
                                                <td
                                                    class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $item->email }}
                                                </td>
                                                <td
                                                    class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $item->username }}
                                                </td>
                                                <td
                                                    class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $item->telp }}
                                                </td>

                                                <td
                                                    class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    <div class="flex gap-x-4 justify-center items-center">

                                                        <button class="bg-red-500 p-2 rounded-md"
                                                            onclick="tolak_{{ $item->id }}.showModal()">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                                viewBox="0 0 448 512" class="fill-white">
                                                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                <path
                                                                    d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                                            </svg>
                                                        </button>

                                                        <button class="bg-green-500 p-2 rounded-md"
                                                            onclick="confirm_{{ $item->id }}.showModal()">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                                viewBox="0 0 448 512" class="fill-white">
                                                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                <path
                                                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                                                            </svg>
                                                        </button>


                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="mt-4">
                                    {{ $data->appends($appendsPaginate)->links('vendor.pagination.tailwind') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- modal confirm start --}}

@foreach ($data as $confirm)
    <dialog id="confirm_{{ $confirm->id }}" class="modal modal-bottom sm:modal-middle">
        <form action="/cabang/confirmation/{{ $confirm->id }}" method="POST" class="modal-box dark:bg-gray-600">
            @csrf
            <h3 class="font-bold text-lg text-gray-900 dark:text-white">Konfirmasi Akun</h3>
            <p class="py-4 text-gray-900 dark:text-white">Apakah Kamu Yakin Mau Mengkonfirmasi Akun Ini ? </p>
            <div class="modal-action">
                <label for="close" class="btn bg-red-600 hover:bg-red-700 text-white border-none">Tidak</label>
                <button type="submit" class="btn bg-green-600 hover:bg-green-700 text-white border-none">Ya</button>
            </div>
        </form>
        <form method="dialog" class="hidden">
            <div class="modal-action">
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
        <form action="/cabang/tolak/{{ $tolak->id }}" method="POST" class="modal-box dark:bg-gray-600">
            @csrf
            <h3 class="font-bold text-lg text-gray-900 dark:text-white">Konfirmasi Akun</h3>
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
