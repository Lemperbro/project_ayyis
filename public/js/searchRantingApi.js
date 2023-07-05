$(document).ready(function () {
    $('#cabang').on('input', function () {
        var ranting_area = document.getElementById('ranting');
        var cabang = $(this).val();

        $.ajax({
            url: '/register', 
            method: 'GET',
            data: { cabang: cabang },
            beforeSend: function() {
                $('#loading').show(); // Menampilkan elemen loading sebelum permintaan dikirim
              },
            success: function (response) {
                var hasil = response['data'];
                if (hasil !== null) {
                    ranting_area.removeAttribute("disabled");
                    ranting_area.innerHTML = '';
                    ranting_area.innerHTML = '<option selected>Pilih Ranting</option>';
                    for (var i = 0; i < hasil.length; i++) {
                        // console.log(hasil[i]['id']);
                        $(ranting_area).append('<option value="' + hasil[i]['id'] + '" > ' + hasil[i]['name'] + '</option> ');
                    }
                }else{
                    ranting_area.setAttribute("disabled","");
                }
            },
            error: function (xhr, status, error) {
                // Jika ada kesalahan
                console.log(xhr.responseText);
            },
            complete: function() {
                $('#loading').hide(); // Menyembunyikan elemen loading setelah permintaan selesai
              }
        });
    });
});