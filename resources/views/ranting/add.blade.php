@extends('ranting.layouts.main')

@section('container')
    <div class="px-4 py-6 overflow-hidden">


        <form class="w-[80%] mx-auto my-5" action="/ranting">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" id="default-search" name="search" value="{{ request('search') }}"
                    class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="">
                <button type="submit"
                    class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>

        <!-- Modal toggle -->
        <button data-modal-target="defaultModal" data-modal-toggle="defaultModal"
            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">
            Tambah anggota
        </button>

        <div class="flex flex-col mt-8 rounded-lg ">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-x-auto">


                        <table class="w-full">
                            <thead>
                                <tr
                                    class="text-xs font-semibold tracking-wide text-gray-700 uppercase border-b dark:border-gray-700 bg-gray-300 dark:text-gray-400 dark:bg-gray-800 text-center">
                                    <th class="border px-4 py-3">No</th>
                                    <th class="border px-4 py-3">Name</th>
                                    <th class="border px-4 py-3">Profile</th>
                                    <th class="border px-4 py-3">Phone</th>
                                    <th class="px-2 border">Address</th>
                                    <th class="px-2 border">Status</th>
                                    <th class="px-2 border">Action</th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800 border ">

                                <tr
                                    class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3 text-sm border text-center"></td>

                                    <td class="px-4 py-3 text-sm border text-center w-32 h-32 object-cover">
                                    </td>


                                    <td class="px-4 py-3  border text-center w-32 h-32 object-cover">
                                        {{-- <img src="{{ asset('image/'.$user->image) }}" alt=""> --}}
                                    </td>

                                    <td class="px-4 py-3 text-sm border text-center">
                                    </td>

                                    <td class="px-4 py-3 text-sm border text-center">
                                    </td>

                                    <td class="px-4 py-3 text-sm border text-center">

                                    </td>

                                    <td class="px-4 py-10 text-sm text-center flex gap-x-4 justify-center">
                                        <button type="button"
                                            class="inline-block px-2 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-[40%]"
                                            {{-- data-bs-toggle="modal" data-bs-target="#exampleModalLong-{{ $user->id }}"> --}} Edit </button>
                                            {{-- <form action="admin/guide/delete/{{ $user->id }}" method="post" class=""> --}}
                                            @csrf
                                            <button type="submit"
                                                class="bg-red-600 p-2 rounded-md text-white">Delete</button>
                                            </form>
                                    </td>

                                </tr>


                            </tbody>
                        </table>





                    </div>
                </div>
            </div>
        </div>

    </div>


    {{-- modal edit start --}}
    {{-- @foreach ($data as $edit) --}}
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto "
        id="exampleModalLong-" tabindex="-1" aria-labelledby="exampleModalLongLabel" aria-hidden="true">
        <div class="modal-dialog relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-[800px] pointer-events-auto dark:bg-slate-800 bg-white bg-clip-padding rounded-md outline-none text-current m-auto">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">

                    <form action="/admin/guide/edit/" method="POST" class="w-full px-4" enctype="multipart/form-data">
                        <h1 class="text-center font-semibold text-2xl dark:text-white">EDIT GUIDE</h1>
                        @csrf

                        <img src="" alt="" class="flex w-36 h-36 justify-center object-cover">
                        <div class="mt-4">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="file_input">Upload Image</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="file_input" type="file" name="image">
                        </div>

                        <div class="mt-4">
                            <label class="dark:text-white font-semibold" for="nama">Name</label>
                            <input type="text" name="nama" id="nama"
                                class="dark:bg-gray-600 dark:text-white w-full h-12 rounded-md p-2 border mt-4"
                                value="">
                        </div>
                        <div class="mt-4">
                            <label class="dark:text-white font-semibold" for="no_tlpn">Telephone</label>
                            <input type="number" name="no_tlpn" id="no_tlpn"
                                class="dark:bg-gray-600 dark:text-white w-full h-12 rounded-md p-2 border mt-4"
                                value="">
                        </div>
                        <div class="mt-4">
                            <label class="dark:text-white font-semibold" for="alamat">Address</label>
                            <input type="text" name="alamat" id="alamat"
                                class="dark:bg-gray-600 dark:text-white w-full h-12 rounded-md p-2 border mt-4"
                                value="">
                        </div>

                        <div class="flex gap-x-4 mt-4">
                            <button type="submit" id="btn-select-file"
                                class="bg-green-600 py-2 px-4 rounded-md text-white">SEND</button>
                            <a href="/guide" class="bg-red-600 px-4 py-2 text-white rounded-md">UNDO</a>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    {{-- modal edit end --}}






    <!-- Main modal -->
    {{-- <div id="defaultModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div
            class="relative max-w-2xl h-full border-none shadow-lg  flex flex-col w-[800px] pointer-events-auto dark:bg-slate-800 bg-white bg-clip-padding rounded-md outline-none text-current m-auto">
            <!-- Modal content -->
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">

                <form action="/ranting/add" method="POST" class="w-full px-4" enctype="multipart/form-data">
                    <h1 class="text-center font-semibold text-2xl dark:text-white">Tambah Anggota</h1>

                    @csrf

                    <div class="mt-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="file_input">Upload Foto</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="file_input" type="file" name="foto">
                    </div>

                    <div class="mt-4">
                        <label class="dark:text-white font-semibold" for="nama">Nama</label>
                        <input type="text" name="nama" id="nama"
                            class="dark:bg-gray-600 dark:text-white w-full h-12 rounded-md p-2 border mt-4">
                    </div>
                    <div class="mt-4">
                        <label class="dark:text-white font-semibold" for="no_tlpn">Tanggal Lahir</label>
                        <input type="date" id="date" name="tanggal_lahir"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Select date" autocomplete="off" />
                    </div>
                    <div class="mt-4">
                        <label class="dark:text-white font-semibold" for="alamat">Nomor induk Anggota</label>
                        <input type="text" name="nia" id="alamat"
                            class="dark:bg-gray-600 dark:text-white w-full h-12 rounded-md p-2 border mt-4">
                    </div>

                    <div class="mt-4">
                        <label class="dark:text-white font-semibold" for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat"
                            class="dark:bg-gray-600 dark:text-white w-full h-12 rounded-md p-2 border mt-4">
                    </div>

                    <div class="mt-4">
                        <label class="dark:text-white font-semibold" for="alamat">Ranting</label>
                        <input type="text" name="ranting" id="ranting"
                            class="dark:bg-gray-600 dark:text-white w-full h-12 rounded-md p-2 border mt-4">
                    </div>

                    <div class="mt-4">
                        <label class="dark:text-white font-semibold" for="alamat">Cabang</label>
                        <input type="text" name="cabang" id="cabang"
                            class="dark:bg-gray-600 dark:text-white w-full h-12 rounded-md p-2 border mt-4">
                    </div>

                    <div class="flex gap-x-4 mt-4">
                        <button type="submit" class="bg-green-600 py-2 px-4 rounded-md text-white">Send</button>
                        <a href="/ranting" class="bg-red-600 px-4 py-2 text-white rounded-md">Undo</a>
                    </div>
                </form>

            </div>
        </div>
    </div> --}}


    {{-- modal add start --}}
    <div id="defaultModal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="modal-dialog relative w-auto pointer-events-none">
    <div
      class="modal-content border-none shadow-lg relative flex flex-col w-[800px] pointer-events-auto dark:bg-slate-800 bg-white bg-clip-padding rounded-md outline-none text-current m-auto">
      <div
        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
           
        <form action="/ranting/add" method="POST" class="w-full px-4" enctype="multipart/form-data">
          <h1 class="text-center font-semibold text-2xl dark:text-white">Tambah Anggota</h1>

          @csrf

          <div class="mt-4">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                  for="file_input">Upload Foto</label>
              <input
                  class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                  id="file_input" type="file" name="foto">
          </div>

          <div class="mt-4">
              <label class="dark:text-white font-semibold" for="nama">Nama</label>
              <input type="text" name="nama" id="nama"
                  class="dark:bg-gray-600 dark:text-white w-full h-12 rounded-md p-2 border mt-4">
          </div>
          <div class="mt-4">
              <label class="dark:text-white font-semibold" for="no_tlpn">Tanggal Lahir</label>
              <input type="date" id="date" name="tanggal_lahir"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                  placeholder="Select date" autocomplete="off" />
          </div>
          <div class="mt-4">
              <label class="dark:text-white font-semibold" for="alamat">Nomor induk Anggota</label>
              <input type="text" name="nia" id="alamat"
                  class="dark:bg-gray-600 dark:text-white w-full h-12 rounded-md p-2 border mt-4">
          </div>

          <div class="mt-4">
              <label class="dark:text-white font-semibold" for="alamat">Alamat</label>
              <input type="text" name="alamat" id="alamat"
                  class="dark:bg-gray-600 dark:text-white w-full h-12 rounded-md p-2 border mt-4">
          </div>

          <div class="mt-4">
              <label class="dark:text-white font-semibold" for="alamat">Ranting</label>
              <input type="text" name="ranting" id="ranting"
                  class="dark:bg-gray-600 dark:text-white w-full h-12 rounded-md p-2 border mt-4">
          </div>

          <div class="mt-4">
              <label class="dark:text-white font-semibold" for="alamat">Cabang</label>
              <input type="text" name="cabang" id="cabang"
                  class="dark:bg-gray-600 dark:text-white w-full h-12 rounded-md p-2 border mt-4">
          </div>

          <div class="flex gap-x-4 mt-4">
              <button type="submit" class="bg-green-600 py-2 px-4 rounded-md text-white">Send</button>
              <a href="/ranting/add" class="bg-red-600 px-4 py-2 text-white rounded-md">Undo</a>
          </div>
      </form>

  
      </div>
  
    </div>
  </div>
  </div>
@endsection
