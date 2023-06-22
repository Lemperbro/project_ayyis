@extends('data.layouts.main')

@section('container')

<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
    <a href="#" class="flex items-center mb-6 text-4xl font-semibold text-gray-900 dark:text-white">
        <img class="w-20 h-20 mr-2" src="{{ asset('img/cipta.png') }}" alt="logo">
        <p>Cipta Sejati</p>
    </a>
    <div
        class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                Cek Data Anggota
            </h1>
            <form class="space-y-4 md:space-y-6" action="/login" method="POST">
                <div>
                    <label for="nama"
                        class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="nama" name="nama" id="nama" placeholder="Andhi" required=""
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                        @error('nama')
                        peer
                         @enderror"
                        value="{{ old('nama') }}" />
    
                    @error('nia')
                        <p class="peer-invalid:visible text-red-700 font-light">
                            {{ $message }}
                        </p>
                    @enderror>

                </div>
                <div>
                    <label for="nia"
                        class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Nia</label>
                    <input type="nia" name="nia" id="nia" placeholder="1x.0xx.0xx.2xxx" required=""
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                        @error('nia')
                        peer
                         @enderror"
                        value="{{ old('nia') }}" />
    
                    @error('nia')
                        <p class="peer-invalid:visible text-red-700 font-light">
                            {{ $message }}
                        </p>
                    @enderror>

                </div>
                <div>
                    <label for="Ranting"
                        class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Ranting</label>
                    <input type="Ranting" name="Ranting" id="Ranting" placeholder="Maduran" required=""
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                        @error('ranting')
                        peer
                         @enderror"
                        value="{{ old('ranting') }}" />
    
                    @error('ranting')
                        <p class="peer-invalid:visible text-red-700 font-light">
                            {{ $message }}
                        </p>
                    @enderror>
                </div>

                <button type="submit"
                    class="w-full text-white text-xl bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Cek</button>

            </form>
        </div>
    </div>
</div>
    
@endsection