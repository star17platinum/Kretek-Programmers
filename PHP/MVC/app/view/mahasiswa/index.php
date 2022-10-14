<div class="container mt-4">
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash()?>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col-lg-6">
      <button type="button" class="btn btn-secondary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Mahasiswa
      </button>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/Mahasiswa/cari" method="POST">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari Mahasiswa" name="keyword" id="keyword" autocomplete="off">
          <button class="btn btn-outline-secondary" type="submit">Cari</button>
        </div>
      </form>
     </div>
  </div>
    <div class="row">
    <div class="col-lg-6">
        <h3>Daftar Mahasiswa</h3>
        <ul class="list-group">
            <?php foreach($data['mahasiswa'] as $mhs): ?>
            <li class="list-group-item">
                <?= $mhs['nama'] ?>
                <a href="<?= BASEURL ?>/Mahasiswa/hapus/<?= $mhs['id'];?>" class="badge btn bg-danger float-sm-end ms-sm-1" onclick="return confirm('yakin?')">hapus</a>
                <a href="<?= BASEURL ?>/Mahasiswa/ubah/<?= $mhs['id'];?>" class="badge btn bg-success float-sm-end ms-sm-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">edit</a>
                <a href="<?= BASEURL ?>/Mahasiswa/detail/<?= $mhs['id'];?>" class="badge btn bg-secondary float-sm-end ms-sm-1">detail</a>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL ?>/Mahasiswa/tambah" method="POST">
        <input type="hidden" name="id" id="id">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan nama">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="number" class="form-control" id="nim" name="nim" placeholder="masukan nim">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select class="form-select" aria-label="Default select example" name="jurusan" id="jurusan">
                    <option>Teknik Informatika</option>
                    <option>Akutansi</option>
                    <option>Sistem Informasi</option>
                    <option>Desain Komunikasi Visual</option>
                    <option>Desain Produk</option>
                    <option>Teknik Sipil</option>
                    <option>Manajemen Bisnis</option>
                    <option>Teknik Industri</option>
                    <option>Teknik Lingukngan</option>
                    <option>Ilmu Komunikasi</option>
                    <option>Teknologi Pangan</option>
                    <option>Ilmu Politik</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="masukan email">
            </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>