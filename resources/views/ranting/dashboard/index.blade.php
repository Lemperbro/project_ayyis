@extends('ranting.layouts.main')

@section('container')
    <div class="px-4 pt-2">

        <h1 class="text-grey-900 dark:text-white font-semibold capitalize text-xl">Dashboard Ranting
            {{ Auth()->user()->ranting }}</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full items-center gap-x-8 justify-center mt-4 pb-4 ">

            <div
                class="items-center  justify-between p-4 bg-yellow-300 border border-gray-200 relative rounded-lg shadow-sm dark:border-gray-700 sm:p-6 ">
                <div class="w-full">

                    <div class="flex justify-between pt-4 pb-12">
                        <div>
                            <h1 class="font-bold text-6xl">{{ $anggotaCount }}</h1>
                            <h1 class="capitalize">Total Anggota Ranting {{ Auth()->user()->ranting }}</h1>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-28 opacity-50" viewBox="0 0 640 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z" />
                        </svg>

                    </div>

                    <a href=""
                        class="absolute bottom-0  left-0 right-0 bg-yellow-400/50 font-semibold text-lg text-center rounded-b-md p-2">Lihat
                        Detail</a>


                </div>
                <div class="w-full" id="new-products-chart"></div>
            </div>


            <div
                class="items-center p-4 bg-green-500 border border-gray-200 relative rounded-lg shadow-sm dark:border-gray-700 sm:p-6 ">
                <div class="w-full">

                    <div class="flex justify-between pt-4 pb-12">
                        <div>
                            <h1 class="font-bold text-6xl">{{ $adminRantingCount->count() }}</h1>
                            <h1 class="capitalize">Admin Ranting {{ Auth()->user()->ranting }}</h1>
                        </div>


                        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 opacity-50" fill="currentcolor"
                            viewBox="0 0 24 24">
                            <path
                                d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z">
                            </path>
                        </svg>


                    </div>



                </div>
            </div>



        </div>

        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">


            <div class="items-center justify-between lg:flex">
                <div class="mb-4 lg:mb-0">
                    <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">List Anggota</h3>
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
                                            NIA
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
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @foreach ($dataAnggota as $item)
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
                                                {{ $item->nia }}
                                            </td>
                                            <td
                                                class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $item->ranting }}
                                            </td>

                                            <td
                                                class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $item->cabang }}
                                            </td>
                                            <td
                                                class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white flex">
                                                <div class="view_anggota mx-auto"
                                                    onclick="view_anggota_{{ $item->id }}.showModal()">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                        width="24" height="24" class="fill-cyan-400">
                                                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                        <path
                                                            d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                                                    </svg>
                                                </div>
                                            </td>


                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                        {{ $dataAnggota->links('vendor.pagination.simple-tailwind') }}
                    </div>
                </div>



            </div>

        </div>



    </div>
@endsection


{{-- modal card anggota start --}}

@foreach ($dataAnggota as $view)
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
