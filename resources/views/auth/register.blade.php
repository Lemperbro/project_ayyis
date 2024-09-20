@extends('auth.layouts.main')

@section('container')
    <div class="flex flex-col items-center justify-center py-8 mx-auto lg:py-10">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img class="w-10 h-10 mr-2" src="{{ asset('img/cipta.png') }}" alt="logo">
            Cipta Sejati
        </a>
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-xl xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1
                    class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white text-center">
                    Daftar Akun Kamu
                </h1>
                <form class="space-y-4 md:space-y-6" action="/register" method="POST">
                    @csrf

                    <div class="w-full">
                        <h1 class='block mb-2 text-xl font-medium text-gray-900 dark:text-white'>Username</h1>
                        <input type="text" placeholder='Andhi Satria' name="username"
                            class='rounded-md w-full border h-12 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white @error('username')
                    peer
                  @enderror'
                            value="{{ old('username') }}" />
                        @error('username')
                            <p class="peer-invalid:visible text-red-700 font-light">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="w-full">
                        <h1 class='block mb-2 text-xl font-medium text-gray-900 dark:text-white'>NIA</h1>
                        <input type="text" placeholder='10.21.2002.1213' name="nia"
                            class='rounded-md w-full border h-12 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white @error('nia')
                    peer
                  @enderror'
                            value="{{ old('nia') }}" />
                        @error('nia')
                            <p class="peer-invalid:visible text-red-700 font-light">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="w-full">
                        <h1 class='block mb-2 text-xl font-medium text-gray-900 dark:text-white'>Email</h1>
                        <input type="email" placeholder='Andhi@gmail.com' name="email"
                            class='rounded-md w-full border h-12 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white @error('email')
                    peer
                  @enderror'
                            value="{{ old('email') }}" />
                        @error('email')
                            <p class="peer-invalid:visible text-red-700 font-light">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="w-full">
                        <h1 class='block mb-2 text-xl font-medium text-gray-900 dark:text-white'>Telephone</h1>
                        <input type="number" name="telp" placeholder="08677598542"
                            class='rounded-md w-full border h-12 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white @error('telp')
                    peer
                  @enderror'
                            value="{{ old('telp') }}" />
                        @error('telp')
                            <p class="peer-invalid:visible text-red-700 font-light">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="">
                        <h1 class='block mb-2 text-xl font-medium text-gray-900 dark:text-white'>Role</h1>
                        <select id="role" name="role"
                            class="block w-full p-4 mb-6 text-sm text-gray-900 border rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            onclick="roles()">
                            <option selected>Pilih Sebagai</option>
                            <option value="ranting">Ranting</option>
                            <option value="cabang">Cabang</option>
                            @if ($admin < 1)
                                <option value="admin">Admin</option>
                            @endif
                        </select>
                    </div>
                    <div id="input-cabang" class="hidden ">
                        <h1 for="nama_cabang" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Cabang
                        </h1>
                        {{-- <input type="text" id="nama_cabang" name="cabang" class="rounded-md w-full border h-12 p-2"
                            placeholder="Lamongan"> --}}
                        <select name="cabang" id="cabang_select"
                            class="h-12 p-2 rounded-md w-full border dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                            <option selected>Pilih Cabang</option>
                            @foreach ($cabang as $item)
                                <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div id="input-ranting" class="hidden">
                        <label for="nama_ranting"
                            class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Ranting</label>
                        {{-- <input type="text" id="nama_ranting" name="ranting" class="rounded-md w-full border h-12 p-2"
                            placeholder="Maduran"> --}}
                        <select name="ranting" id="ranting"
                            class="h-12 p-2 rounded-md w-full border dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            disabled>
                            <option value="" selected>Pilih Ranting</option>
                        </select>

                    </div>
                    <div class="w-full">
                        <h1 class='block mb-2 text-xl font-medium text-gray-900 dark:text-white'>Password</h1>
                        <input type="password" placeholder='Password' name="password"
                            class='rounded-md w-full border h-12 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white @error('password')
                  peer
                @enderror' />
                        @error('password')
                            <p class="peer-invalid:visible text-red-700 font-light">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="w-full">
                        <h1 class='block mb-2 text-xl font-medium text-gray-900 dark:text-white'>Confirm Password</h1>
                        <input type="password" placeholder='Password' name="password_confirmation"
                            class='rounded-md w-full border h-12 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white @error('password')
                peer
              @enderror' />
                        @error('password')
                            <p class="peer-invalid:visible text-red-700 font-light">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>



                    <button type="submit"
                        class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Daftar</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Sudah Punya Akun? <a href="/login"
                            class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('searchRantingRegister')
<script src="{{ asset('js/searchRantingApi.js') }}"></script>
@endpush
