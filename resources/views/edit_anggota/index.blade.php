@include('globalPartials.start')
{{-- 1. image
2. nama
3. nia
4. ttl
5. alamat
6. ranting
7. cabang
8. tingkatan --}}
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
                <form action="/update-anggota/{{ $data->id }}" method="POST" class="mt-4 " id="editForm" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-2 gap-8">
                        <div class="w-full">
                            <h1 class="text-gray-900 dark:text-white">Foto</h1>
                            <input type="file" name="image"
                                class="bg-gray-200 dark:bg-gray-700 rounded-lg mt-2 w-full text-gray-900 dark:text-white @error('image')
                                peer
                                 @enderror">
                            @error('image')
                                <p class="peer-invalid:visible text-red-700 font-light">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="w-full">
                            <h1 class="text-gray-900 dark:text-white">Nama</h1>
                            <input type="text" name="nama"
                                class="bg-gray-200 dark:bg-gray-700 p-2 rounded-lg mt-2 w-full text-gray-900 dark:text-white @error('nama')
                                peer
                                 @enderror"
                                value="{{ $data->nama }}">
                            @error('nama')
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
                            <h1 class="text-gray-900 dark:text-white">Tempat, Tanggal Lahir</h1>
                            <input type="text" name="ttl"
                                class="bg-gray-200 dark:bg-gray-700 p-2 rounded-lg mt-2 w-full text-gray-900 dark:text-white @error('ttl')
                                peer
                                 @enderror"
                                value="{{ $data->ttl }}">
                            @error('ttl')
                                <p class="peer-invalid:visible text-red-700 font-light">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="w-full">
                            <h1 class="text-gray-900 dark:text-white">Alamat</h1>
                            <input type="text" name="alamat"
                                class="bg-gray-200 dark:bg-gray-700 p-2 rounded-lg mt-2 w-full text-gray-900 dark:text-white @error('alamat')
                                peer
                                 @enderror"
                                value="{{ $data->alamat }}">
                            @error('alamat')
                                <p class="peer-invalid:visible text-red-700 font-light">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div id="input-ranting">
                            <h1 class="text-gray-900 dark:text-white">Ranting</h1>

                            {{-- <input type="text" id="nama_ranting" name="ranting" class="rounded-md w-full border h-12 p-2"
                                placeholder="Maduran"> --}}
                            <select name="ranting" id="ranting"
                                class="mt-2 p-2 rounded-md w-full border dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                @foreach ($ranting as $item)
                                    <option value="{{ $item['id'] }}"
                                        {{ $item['name'] == strtoupper($data->ranting) ? 'selected' : '' }}>
                                        {{ $item['name'] }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div id="input-cabang">
                            <h1 class="text-gray-900 dark:text-white">Cabang</h1>

                            {{-- <input type="text" id="nama_cabang" name="cabang" class="rounded-md w-full border h-12 p-2"
                                placeholder="Lamongan"> --}}
                            <select name="cabang" id="cabang_select"
                                class="mt-2 p-2 rounded-md w-full border dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                @foreach ($cabang as $item)
                                    <option value="{{ $item['id'] }}"
                                        {{ $item['name'] == strtoupper($data->cabang) ? 'selected' : '' }}>
                                        {{ $item['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="w-full">
                            <h1 class="text-gray-900 dark:text-white">Tingkatan</h1>
                            <input type="text" name="tingkatan"
                                class="bg-gray-200 dark:bg-gray-700 p-2 rounded-lg mt-2 w-full text-gray-900 dark:text-white"
                                value="{{ $data->tingkatan }}">
                        </div>
                    </div>

                    <button type="submit" class="bg-blue-700 p-2 rounded-lg text-white mt-8">Simpan</button>
                </form>

            </div>
</div>

@push('editAnggota')
    <script>
        $(document).ready(function() {
            $('#cabang_select').on('input', function() {
                var ranting_area = document.getElementById('ranting');
                var form = document.getElementById('editForm')
                var cabang = $(this).val();
                var id = @json($data->id);
                $.ajax({
                    url: '/edit-anggota/'+id,
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
                            ranting_area.innerHTML = '';
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
    </script>
@endpush
@include('globalPartials.end')
