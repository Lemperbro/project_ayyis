@extends('cabang.layouts.main')

@section('container')
    <div class="w-full mt-8 container">



        <form action="/cabang/ranting/create" method="POST" class=" rounded-md h-screen  shadow-best"
            enctype="multipart/form-data">
            @csrf
            <h1 class="text-center font-semibold text-2xl text-gray-900 dark:text-white">Tambah Data Ranting</h1>

            <div class="mt-4">
                <label for="nama" class="text-gray-900 dark:text-white">Administrator</label>
                <input type="text" name="username" id="username" placeholder="Contoh: Ayis"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
            @error('username')
                    peer
                     @enderror"
                    value="{{ old('username') }}" />

                @error('username')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mt-4">
                <label for="nia" class="text-gray-900 dark:text-white">Nia</label>
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
                <select name="ranting" id="ranting"
                    class="w-full rounded-lg bg-gray-50 border border-gray-300 text-gray-900 text-sm p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                    @error('ranting')
                            peer
                             @enderror">
                    <option value="" selected>Pilih Ranting</option>
                    @foreach ($ranting as $item)
                        <option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
                    @endforeach
                </select>

                @error('ranting')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mt-4">
                <label for="email" class="text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email" id="email" placeholder="ex : example@gmail.com"
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
                <input type="number" name="telp" id="telp" placeholder="ex : 0833291937891"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
            @error('telp')
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
                <input type="password" name="password" id="password" placeholder=". . . . . "
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
            @error('password')
                    peer
                     @enderror"
                    value="{{ old('password') }}" />

                @error('password')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mt-4">
                <label for="password_confirmation" class="text-gray-900 dark:text-white">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" id="password" placeholder=". . . . ."
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                @error('password')
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
                <a href="/cabang/ranting" class="bg-red-600 px-4 py-2 text-white rounded-md">batal</a>
            </div>
        </form>
    </div>
@endsection
