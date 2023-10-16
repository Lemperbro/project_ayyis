@extends('auth.layouts.main')

@section('container')
    <div class="flex flex-col items-center justify-center py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-4xl font-semibold text-gray-900 dark:text-white">
            <img class="w-20 h-20 mr-2" src="{{ asset('img/cipta.png') }}" alt="logo">
            Cipta Sejati
        </a>
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white mt-2">
                    Lupa Password
                </h1>
                <form class="space-y-4 md:space-y-6" action="/lupa-password" method="POST">
                    @csrf
                    <div>
                        <label for="email"
                            class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email" placeholder="name@company.com" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('username')
                            peer
                          @enderror'
                                    value="{{ old('email') }}" />
                                @error('username')
                                    <p class="peer-invalid:visible text-red-700 font-light">
                                        {{ $message }}
                                    </p>
                                @enderror

                    </div>
                    <button type="submit"
                        class="w-full text-white text-xl bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Lupa Password</button>

                </form>
            </div>
        </div>
    </div>
@endsection
