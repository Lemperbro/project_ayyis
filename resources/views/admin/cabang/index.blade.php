@extends('admin.layout.main')

@section('container')
<div class="w-full mt-8 pb-4 p-6 h-screen">

    <div
        class="items-center justify-between p-4 bg-white dark:bg-gray-800 border border-gray-200 relative rounded-lg shadow-sm dark:border-gray-700 sm:p-6 ">
        <div class="w-full">
            <h1 class="text-white font-semibold text-xl">Data Admin Cabang</h1>

            <form class="">


                <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-4 justify-between my-5">
                    <div class="my-4">

                        <label for="username"
                            class="dark:text-white text-grey-900 font-semibold inline-block">Cabang</label>
                        <input type="text" id="username"
                            class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    </div>

                    <div class="my-4">

                        <label for="thn_masuk"
                            class="dark:text-white text-grey-900 font-semibold inline-block">NIA</label>
                        <input type="text" id="thn_masuk"
                            class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    </div>

                </div>

                <button type="button"
                    class="focus:outline-none text-white bg-primary-700 dark:bg-green-600 hover:bg-yellow-500  rounded-lg text-base font-semibold px-5 py-2 mr-2 mb-2 ">Cari</button>
                </form>
        </div>
        <div class="w-full" id="new-products-chart"></div>
    </div>

    <div class="flex flex-col mt-6">
        <div class="overflow-x-auto rounded-lg">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th scope="col"
                                    class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                    No
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                    Cabang
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                    Email
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                    Telepon
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                    Administrator
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800">
                            <tr>
                                <td
                                    class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                    1.
                                </td>
                                <td
                                    class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                    Lamongan
                                </td>
                                <td
                                    class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    agungandhita@gmail.com
                                </td>
                                <td
                                    class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                    08887686245986
                                </td>

                                <td
                                    class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    Andhi
                                </td>

                            </tr>
                            <tr>
                                <td
                                    class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                    1.
                                </td>
                                <td
                                    class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                    Lamongan
                                </td>
                                <td
                                    class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    agungandhita@gmail.com
                                </td>
                                <td
                                    class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                    08887686245986
                                </td>

                                <td
                                    class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    Andhi
                                </td>

                            </tr>
                            <tr>
                                <td
                                    class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                    1.
                                </td>
                                <td
                                    class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                    Lamongan
                                </td>
                                <td
                                    class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    agungandhita@gmail.com
                                </td>
                                <td
                                    class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                    08887686245986
                                </td>

                                <td
                                    class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    Andhi
                                </td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection