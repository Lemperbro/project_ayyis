@include('globalPartials.start')

@php
    if (Auth()->user()->role == 'admin') {
        $url = '/admin';
    } elseif (Auth()->user()->role == 'cabang') {
        $url = '/cabang';
    } elseif (Auth()->user()->role == 'ranting') {
        $url = '/ranting';
    }
@endphp
@include('globalPartials.navbar')
<div class="pt-32 px-4 md:container">
    <a href="{{ $url }}" class="inline-block text-white bg-blue-700 p-2 rounded-lg mb-8">
        <- Kembali </a>
            <div class="bg-white dark:bg-gray-800 px-4 py-10 rounded-lg">
                <h1 class="text-gray-900 dark:text-white text-xl font-semibold">Edit Profile</h1>
                <form action="/edit-profile/{{ $data->id }}" method="POST" class="mt-4 ">
                    @csrf
                    <div class="grid grid-cols-2 gap-8">
                        <div class="w-full">
                            <h1 class="text-gray-900 dark:text-white">Username</h1>
                            <input type="text" name="username"
                                class="bg-gray-200 dark:bg-gray-700 p-2 rounded-lg mt-2 w-full text-gray-900 dark:text-white @error('username')
                                peer
                                 @enderror"
                                value="{{ $data->username }}">
                            @error('username')
                                <p class="peer-invalid:visible text-red-700 font-light">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="w-full">
                            <h1 class="text-gray-900 dark:text-white">NIA</h1>
                            <input type="text" name="nia"
                                class="bg-gray-200 dark:bg-gray-700 p-2 rounded-lg mt-2 w-full text-gray-900 dark:text-white @error('nia')
                                peer
                                 @enderror"
                                value="{{ $data->nia }}">
                            @error('nia')
                                <p class="peer-invalid:visible text-red-700 font-light">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="w-full">
                            <h1 class="text-gray-900 dark:text-white">No Telphone</h1>
                            <input type="text" name="telp"
                                class="bg-gray-200 dark:bg-gray-700 p-2 rounded-lg mt-2 w-full text-gray-900 dark:text-white @error('telp')
                                peer
                                 @enderror"
                                value="{{ $data->telp }}">
                            @error('telp')
                                <p class="peer-invalid:visible text-red-700 font-light">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="w-full">
                            <h1 class="text-gray-900 dark:text-white">Email</h1>
                            <input type="email" name="email"
                                class="bg-gray-200 dark:bg-gray-700 p-2 rounded-lg mt-2 w-full text-gray-900 dark:text-white @error('email')
                                peer
                                 @enderror"
                                value="{{ $data->email }}">
                            @error('email')
                                <p class="peer-invalid:visible text-red-700 font-light">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        @if (Auth()->user()->role !== 'admin')
                            @if (Auth()->user()->role == 'ranting')
                                <div class="w-full">
                                    <h1 class="text-gray-900 dark:text-white">Ranting</h1>
                                    <input type="text" name="ranting"
                                        class="bg-gray-200 dark:bg-gray-700 p-2 rounded-lg mt-2 w-full text-gray-900 dark:text-white"
                                        value="{{ $data->ranting }}" disabled>
                                </div>
                            @endif
                            <div class="w-full">
                                <h1 class="text-gray-900 dark:text-white">Cabang</h1>
                                <input type="text" name="cabang"
                                    class="bg-gray-200 dark:bg-gray-700 p-2 rounded-lg mt-2 w-full text-gray-900 dark:text-white"
                                    value="{{ $data->cabang }}" disabled>
                            </div>
                        @endif
                    </div>
                    <div class="mt-8">
                        <h1 class="text-gray-900 dark:text-white text-xl font-semibold">Ubah Password</h1>

                        @if (session('changePasswordTrue'))
                            <div id="alert-border-3"
                                class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-600 dark:border-green-800 mt-4"
                                role="alert">
                                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <div class="ml-3 text-sm font-medium">
                                    {{ session('changePasswordTrue') }}
                                </div>
                                <button type="button"
                                    class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                                    data-dismiss-target="#alert-border-3" aria-label="Close">
                                    <span class="sr-only">Dismiss</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                </button>
                            </div>
                        @elseif (session('changePasswordFalse'))
                            <div id="alert-border-2"
                                class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800"
                                role="alert">
                                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <div class="ml-3 text-sm font-medium">
                                    {{ session('changePasswordFalse') }}
                                </div>
                                <button type="button"
                                    class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                                    data-dismiss-target="#alert-border-2" aria-label="Close">
                                    <span class="sr-only">Dismiss</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                </button>
                            </div>
                        @endif

                        <div class="grid grid-cols-2 gap-8 mt-4">
                            <div class="w-full">
                                <h1 class="text-gray-900 dark:text-white">Password</h1>
                                <input type="password" name="password"
                                    class="bg-gray-200 dark:bg-gray-700 p-2 rounded-lg mt-2 w-full text-gray-900 dark:text-white @error('password')
                                    peer
                                     @enderror">
                                @error('password')
                                    <p class="peer-invalid:visible text-red-700 font-light">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-full">
                                <h1 class="text-gray-900 dark:text-white">Konfirmasi Password</h1>
                                <input type="password" name="password_confirmation"
                                    class="bg-gray-200 dark:bg-gray-700 p-2 rounded-lg mt-2 w-full text-gray-900 dark:text-white @error('password')
                                    peer
                                     @enderror">
                                @error('password')
                                    <p class="peer-invalid:visible text-red-700 font-light">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="bg-blue-700 p-2 rounded-lg text-white mt-8">Simpan</button>
                </form>

            </div>
</div>
@include('globalPartials.end')
