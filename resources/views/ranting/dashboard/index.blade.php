@extends('ranting.layouts.main')

@section('container')
    <div class="px-4 pt-6">
        {{-- card-1 start --}}



        <div class="p-4 bg-slate-700 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <!-- Card header -->
            <div class="items-center justify-between lg:flex">
                <div class="mx-4 min-h-screen w-full sm:mx-8 xl:mx-auto">
                    <h1 class="pb-2 text-4xl font-semibold dark:text-gray-300">Profile ranting</h1>



                    <div class="col-span-8 overflow-hidden rounded-xl sm:px-8 sm:shadow py-10">
                        <div class="pt-4">
                            @if (session('success'))
                                <div class="alert bg-green-200 rounded-lg py-5 px-6 mb-8 text-base text-black inline-flex items-center w-full alert-dismissible fade show "
                                    role="alert">
                                    <strong class="mr-1">{{ session('success') }}</strong>
                                    <button type="button"
                                        class="btn-close box-content w-4 h-4 p-1 ml-auto text-yellow-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline"
                                        data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert bg-green-200 rounded-lg py-5 px-6 mb-8 text-base text-white inline-flex items-center w-full alert-dismissible fade show "
                                    role="alert">
                                    <strong class="mr-1">{{ session('error') }}</strong>
                                    <button type="button"
                                        class="btn-close box-content w-4 h-4 p-1 ml-auto text-yellow-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline"
                                        data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                        </div>
                        <hr class="mt-4 mb-8" />
                        <form method="post" action="/profile/update" enctype="multipart/form-data">
                            <img src="" alt="" id="view_image"
                                class="w-20 h-20 object-cover flex justify-center m-auto rounded-full">
                            <div class="flex flex-col mx-auto my-4 justify-center gap-y-4 mb-4">
                                <input type="file" name="image" class=" mx-auto w-[10%] rounded-md" id="image">
                                <label for="image" class="text-center font-semibold">Ubah Foto Profile</label>
                            </div>

                            <div class="grid grid-cols-2 gap-8">
                                <div>
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="w-full h-10 rounded-md mt-2">
                                </div>
                                <div>
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="w-full h-10 rounded-md mt-2">
                                </div>
                                <div>
                                    <label for="no_tlpn">No Telephone</label>
                                    <input type="text" name="no_tlpn" class="w-full h-10 rounded-md mt-2">
                                </div>
                                <div>
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="w-full h-10 rounded-md mt-2">
                                </div>
                            </div>

                            <button type="submit" class="bg-orange-600 text-white p-2 rounded-md mt-8">Simpan</button>

                        </form>


                    </div>
                @endsection
