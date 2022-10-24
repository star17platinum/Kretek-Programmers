$(function() {

    $('.tombolTambahData').on('click', function() {
        
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');

    })

    $('.tampilModalUbah').on('click', function() {
        
        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/Mahasiswa/ubah');


        const id = $(this).data('id');
  
        $.ajax({
            url: 'http://localhost/phpmvc/public/Mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#divisi').val(data.divisi);
                $('#id').val(data.id);


                console.log(data.nama);


            }
        })

    });
});
