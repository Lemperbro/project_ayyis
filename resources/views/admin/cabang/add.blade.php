@extends('admin.layout.main')

@section('container')
    <div class="w-full mt-8 px-4 md:px-0 md:container">
        <form action="/admin/cabang/add" method="POST" class=" rounded-md h-screen  shadow-best" enctype="multipart/form-data">
            <h1 class="text-center font-semibold text-2xl text-gray-900 dark:text-white">Tambah Data Cabang</h1>
            @csrf

            <div class="mt-4">
                <label for="nama" class="text-gray-900 dark:text-white">Username</label>
                <input type="text" name="nama" id="nama"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 
                    @error('name')
                    peer
                     @enderror"
                    value="{{ old('name') }}" />

                @error('name')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            <div class="mt-4">
                <label for="nia" class="text-gray-900 dark:text-white">NIA</label>
                <input type="text" name="nia" id="nia"
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
                <label for="cabang" class="text-gray-900 dark:text-white">Cabang</label>
                <input type="text" name="cabang" id="cabang"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                    @error('cabang')
                    peer
                     @enderror"
                    value="{{ old('cabang') }}" />

                    @error('cabang')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="mt-4">
                <label for="email" class="text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email" id="email"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                    @error('email')
                    peer
                     @enderror"
                    value="{{ old('email') }}" />

                    @error('email')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="mt-4">
                <label for="telp" class="text-gray-900 dark:text-white">No Telpon</label>
                <input type="number" name="telp" id="telp"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                    @error('name')
                    peer
                     @enderror"
                    value="{{ old('telp') }}" />

                    @error('telp')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="mt-4">
                <label for="password" class="text-gray-900 dark:text-white">Password</label>
                <input type="password" name="password" id="password"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('password')
                    peer
                     @enderror"
                    value="{{ old('password') }}" />

                    @error('password')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="flex gap-x-4 mt-4">
                <button type="submit" class="bg-green-600 py-2 px-4 rounded-md text-white">kirim</button>
                <a href="/admin/cabang" class="bg-red-600 px-4 py-2 text-white rounded-md">batal</a>
            </div>
        </form>
    </div>
@endsection
