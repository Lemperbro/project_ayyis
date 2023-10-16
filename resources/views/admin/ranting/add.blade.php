@extends('admin.layout.main')

@section('container')
    <div class="w-full mt-8 container">
        <form action="/admin/ranting/add" method="POST" class=" rounded-md h-screen" enctype="multipart/form-data">
            <h1 class="text-center font-semibold text-2xl text-gray-900 dark:text-white">Tambah Admin Ranting</h1>
            @csrf
            <div class="mt-4">
                <label for="nama" class="text-gray-900 dark:text-white">Username</label>
                <input type="text" name="nama" id="nama"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 
                    @error('nama')
                    peer
                     @enderror"
                    value="{{ old('nama') }}" placeholder="Contoh: Andhi" required />
            </div>

            <div class="mt-4">
                <label for="nia" class="text-gray-900 dark:text-white">NIA</label>
                <input type="text" name="nia" id="nia" placeholder="Contoh: 12.23.2021.1232"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                    @error('nia')
                    peer
                     @enderror"
                    value="{{ old('nia') }}" required />
            </div>

            <div id="input-cabang" class="mt-4">
                <label for="cabang_select" class="text-gray-900 dark:text-white">Cabang</label>
                <select name="cabang" id="cabang_select"
                    class="h-12 p-2 rounded-md w-full border dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                    <option selected>Pilih Cabang</option>
                    @foreach ($cabang as $item)
                        <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                    @endforeach
                </select>
            </div>

            <div id="input-ranting" class=" mt-4">
                <label for="ranting" class="text-gray-900 dark:text-white">Ranting</label>

                <select name="ranting" id="ranting"
                    class="h-12 p-2 rounded-md w-full border dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    disabled>
                    <option value="" selected>Pilih Ranting</option>
                </select>

            </div>

            <div class="mt-4">
                <label for="email" class="text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email" id="email" placeholder="Contoh: Example@gmail.com"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                    @error('email')
                    peer
                     @enderror"
                    value="{{ old('email') }}" required />
            </div>

            <div class="mt-4">
                <label for="telp" class="text-gray-900 dark:text-white">No Telpon</label>
                <input type="number" name="telp" id="telp" placeholder="Contoh: 081423242242"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 
                    @error('telp')
                    peer
                     @enderror"
                    value="{{ old('telp') }}" required />
            </div>

            <div class="mt-4">
                <label for="password" class="text-gray-900 dark:text-white">Password</label>
                <input type="password" name="password" id="password" placeholder="......."
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
            </div>

            <div class="flex gap-x-4 mt-4">
                <button type="submit" class="bg-green-600 py-2 px-4 rounded-md text-white">kirim</button>
                <a href="/admin/ranting" class="bg-red-600 px-4 py-2 text-white rounded-md">batal</a>
            </div>
        </form>
    </div>
@endsection


@push('searchRantingAdmin')
    <script>
        $(document).ready(function() {
            $('#cabang_select').on('input', function() {
                var ranting_area = document.getElementById('ranting');
                var cabang = $(this).val();

                $.ajax({
                    url: '/admin/ranting/add',
                    method: 'GET',
                    data: {
                        cabang: cabang
                    },
                    beforeSend: function() {
                        $('#loading')
                            .show(); // Menampilkan elemen loading sebelum permintaan dikirim
                    },
                    success: function(response) {
                        var hasil = response['data'];
                        if (hasil !== null) {
                            ranting_area.removeAttribute("disabled");
                            ranting_area.innerHTML = '';
                            ranting_area.innerHTML = '<option selected>Pilih Ranting</option>';
                            for (var i = 0; i < hasil.length; i++) {
                                $(ranting_area).append('<option value="' + hasil[i]['id'] +
                                    '" > ' + hasil[i]['name'] + '</option> ');
                            }
                        } else {
                            ranting_area.setAttribute("disabled", "");
                        }
                    },
                    error: function(xhr, status, error) {
                        // Jika ada kesalahan
                        console.log(xhr.responseText);
                    },
                    complete: function() {
                        $('#loading')
                            .hide(); // Menyembunyikan elemen loading setelah permintaan selesai
                    }
                });
            });
        });
        window.addEventListener("unload", function(event) {
            var cabang = document.getElementById('cabang');
            cabang.selectedIndex = 0;
        });
    </script>
@endpush
