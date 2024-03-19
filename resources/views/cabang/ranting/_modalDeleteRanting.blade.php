<dialog id="delete_{{ $key }}" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box bg-white dark:bg-gray-600 text-gray-900 dark:text-white">
        <form action="/cabang/ranting/delete/{{ $item->id }}" method="POST">
            @csrf
            <h3 class="font-bold text-lg text-left">Konfirmasi hapus data</h3>
            <p class="mt-4 text-left">Apakah anda yakin mau menghapus data ini ?</p>
            <div class="flex gap-4 mt-8 justify-end">
                <label for="closeDeleteModal" class="btn bg-white hover:bg-gray-200 border-none text-black">Batal</label>
                <button type="submit" class="btn bg-red-600 hover:bg-red-700 border-none">Hapus</button>
            </div>
        </form>
        <form method="dialog" class="hidden">
            <div class="modal-action">
                <!-- if there is a button in form, it will close the modal -->
                <button class="btn bg-red-600" id="closeDeleteModal">Close</button>
            </div>
        </form>
    </div>
</dialog>