@extends('data.layouts.main')

@section('container')
    <div class="flex justify-end ">
        <a href="" class="text-white bg-blue-600 py-1 px-3 font-semibold rounded-lg text-xl mt-5">
            Login
        </a>
    </div>

    <div class="flex flex-col items-center justify-center px-6 mx-auto md:h-screen lg:py-0">

        <a href="#" class="flex items-center mb-10 text-4xl font-semibold text-gray-900 dark:text-white">
            <img class="w-20 h-20 mr-2" src="{{ asset('img/cipta.png') }}" alt="logo">
            <p>Cipta Sejati</p>
        </a>

        {{-- <h1 class="text-2xl mb-8 mt-8 font-semibold text-yellow-500 uppercase">
        cari data anggota
    </h1> --}}

        <form class="flex items-center w-[40%]" action="/">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="simple-search" name="nia"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-14"
                    placeholder="MASUKAN NIA" value="{{ request('nia') }}" required>
            </div>
            <button type="submit"
                class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 h-14 w-14 flex gap-x-2">
                <svg class="w-5 h-5 m-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </form>


        <div class="relative overflow-x-auto mt-8">
            @if ($data !== null)
                <div class="flex gap-x-4 p-4 bg-white shadow-best rounded-md">
                    <img src="{{ asset('ft_anggota/'.$data->image) }}" alt="" class="object-contain w-[40%]">
                    <div class="flex gap-x-4 w-[60%]">
                        <div class="font-semibold flex flex-col justify-between">
                            <h1>Nama</h1>
                            <h1>NIA</h1>
                            <h1>TTL</h1>
                            <h1>Alamat</h1>
                            <h1>Ranting</h1>
                            <h1>Cabang</h1>
                            <h1>Tingkatan</h1>
                        </div>

                        <div class="flex flex-col justify-between">
                            <h1>:</h1>
                            <h1>:</h1>
                            <h1>:</h1>
                            <h1>:</h1>
                            <h1>:</h1>
                            <h1>:</h1>
                            <h1>:</h1>
                        </div>
                        <div class="flex flex-col justify-between">
                            <h1>{{ $data->nama }}</h1>
                            <h1>{{ $data->nia }}</h1>
                            <h1>{{ $data->ttl }}</h1>
                            <h1>{{ $data->alamat }}</h1>
                            <h1>{{ $data->ranting }}</h1>
                            <h1>{{ $data->cabang }}</h1>
                            <h1>{{ $data->tingkatan }}</h1>
                        </div>
                    </div>
                </div>
            @endif

        </div>


    </div>
@endsection
