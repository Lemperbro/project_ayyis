@extends('ranting.layouts.main')

@section('container')
    <div class="w-full mt-8 container">
        <form action="/ranting/add" method="POST" class=" rounded-md h-screen  shadow-best" enctype="multipart/form-data">
            <h1 class="text-center font-semibold text-2xl text-gray-900 dark:text-white">Tambah Anggota</h1>
            @csrf

            <div class="mt-4">

                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                    Image</label>
                <input id="file_input" type="file" name="image"
                    class="block w-full text-sm text-gray-900 font-semibold border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('nama')
                    peer
                     @enderror"
                    value="{{ old('image') }}" />

                @error('image')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            <div class="mt-4">
                <label for="nama" class="text-gray-900 dark:text-white">Nama</label>
                <input type="text" name="nama" id="nama" placeholder="Ex: Ayis"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 
                    @error('nama')
                    peer
                     @enderror"
                    value="{{ old('nama') }}" />

                @error('nama')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            <div class="mt-4">
                <label for="nia" class="text-gray-900 dark:text-white">NIA</label>
                <input type="text" name="nia" id="nia" placeholder="Contoh: 12.23.2021.1232"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                    @error('nia')
                    peer
                     @enderror"
                    value="{{ old('nia') }}" />

                @error('nia')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="mt-4">
                <label for="ranting" class="text-gray-900 dark:text-white">Ranting</label>
                <input type="text" name="ranting" id="ranting" placeholder="ex: parengan"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 capitalize dark:focus:border-primary-500"
                    value="{{ Auth()->user()->ranting }}" disabled/>

            </div>

            <div class="mt-4">
                <label for="alamat" class="text-gray-900 dark:text-white">Alamat</label>
                <input type="alamat" name="alamat" id="alamat" placeholder="Parengan Maduran Lamongan"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                    @error('alamat')
                    peer
                     @enderror"
                    value="{{ old('alamat') }}" />

                @error('alamat')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="mt-4">
                <label for="ttl" class="text-gray-900 dark:text-white">Tempat Tanggal Lahir</label>
                <input type="text" name="ttl" id="ttl" placeholder="ex: Lamongan, 07 juni 1999"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                    @error('ttl')
                    peer
                     @enderror"
                    value="{{ old('ttl') }}" />

                @error('ttl')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="mt-4">
                <label for="tingkatan" class="text-gray-900 dark:text-white">Tingkatan</label>
                <input type="tingkatan" name="tingkatan" id="tingkatan" placeholder="Ex: siswa"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('tingkatan')
                    peer
                     @enderror"
                    value="{{ old('tingkatan') }}" />

                @error('tingkatan')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="flex gap-x-4 mt-4">
                <button type="submit" class="bg-green-600 py-2 px-4 rounded-md text-white">kirim</button>
                <a href="/ranting/anggota" class="bg-red-600 px-4 py-2 text-white rounded-md">batal</a>
            </div>
        </form>
    </div>
@endsection
