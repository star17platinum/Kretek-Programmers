$(function() {

  $('.tombolTambahData').on('click', function(){
    $('#judulModal').html('Tambah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Tambah Data')
  })

  $('.tampilModalUbah').on('click', function() {
    $('#judulModal').html('Ubah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Ubah Data')
    $('.modal-body form').attr('action', 'http://localhost/Data/phpmvc/public/Mahasiswa/ubah')
    const id = $(this).data('id');
    $.ajax({
      url: 'http://localhost/Data/phpmvc/public/Mahasiswa/getubah',
      data: {id : id},
      method: 'post',
      dataType: 'json',
      success: function(data){
        $('#nama').val(data.nama);
        $('#jurusan').val(data.jurusan); 
        $('#nim').val(data.nim);
        $('#email').val(data.email);
        $('#id').val(data.id);

      }
    })
  });
}
  );