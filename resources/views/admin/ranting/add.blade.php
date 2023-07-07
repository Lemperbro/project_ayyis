@extends('admin.layout.main')

@section('container')
    <div class="w-full mt-8 container">
        <form action="/admin/ranting/add" method="POST" class=" rounded-md h-screen" enctype="multipart/form-data">
            <h1 class="text-center font-semibold text-2xl text-gray-900 dark:text-white">Tambah Data Ranting</h1>
            @csrf
            <div class="mt-4">
                <label for="nama" class="text-gray-900 dark:text-white">Username</label>
                <input type="text" name="nama" id="nama"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 
                    @error('nama')
                    peer
                     @enderror"
                    value="{{ old('nama') }}" required/>
            </div>

            <div class="mt-4">
                <label for="nia" class="text-gray-900 dark:text-white">NIA</label>
                <input type="text" name="nia" id="nia" placeholder="Contoh: 12.23.2021.1232"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                    @error('nia')
                    peer
                     @enderror"
                    value="{{ old('nia') }}" required/>
            </div>

            <div class="mt-4">
                <label for="ranting" class="text-gray-900 dark:text-white">Ranting</label>
                <input type="text" name="ranting" id="ranting"  placeholder="Contoh: Maduran" 
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                     @error('ranting')
                    peer
                     @enderror"
                    value="{{ old('ranting') }}" required/>
            </div>

            <div class="mt-4">
                <label for="cabang" class="text-gray-900 dark:text-white">Cabang</label>
                <input type="text" name="cabang" id="cabang" placeholder="Contoh: Lamongan" 
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                     @error('cabang')
                    peer
                     @enderror"
                    value="{{ old('cabang') }}" required/>
            </div>

            <div class="mt-4">
                <label for="email" class="text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email" id="email" placeholder="Contoh: Example@gmail.com"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                    @error('email')
                    peer
                     @enderror"
                    value="{{ old('email') }}" required/>
            </div>

            <div class="mt-4">
                <label for="telp" class="text-gray-900 dark:text-white">No Telpon</label>
                <input type="number" name="telp" id="telp" placeholder="Contoh: 081423242242"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 
                    @error('telp')
                    peer
                     @enderror"
                    value="{{ old('telp') }}" required/>
            </div>

            <div class="mt-4">
                <label for="password" class="text-gray-900 dark:text-white">Password</label>
                <input type="password" name="password" id="password" placeholder="......." 
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
            </div>

            <div class="flex gap-x-4 mt-4">
                <button type="submit" class="bg-green-600 py-2 px-4 rounded-md text-white">kirim</button>
                <a href="/admin/ranting" class="bg-red-600 px-4 py-2 text-white rounded-md">batal</a>
            </div>
        </form>
    </div>
@endsection
