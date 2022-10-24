<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash();?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/Mahasiswa/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Mahasiswa..." name="keyword" id="keyword" aria-describedby="button-addon2" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6">

        <!-- Button trigger modal -->

            <h3>Daftar Mahasiswa</h3>

                    <ul class="list-group">
                        <?php foreach($data['mhs'] as $mhs): ?>
                            <li class="list-group-item">
                                <?= $mhs['nama']; ?>

                                <a href="<?= BASEURL;?>/Mahasiswa/hapus/<?= $mhs['id'];?>" class="badge text-bg-danger float-end" onclick="return confirm('Yakin?');" style="text-decoration:none;">hapus</a>
                                <a href="<?= BASEURL;?>/Mahasiswa/ubah/<?= $mhs['id'];?>" class="badge text-bg-success float-end tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal"  style="text-decoration:none; margin-right:3px;" data-id="<?= $mhs['id']; ?>">ubah</a>
                                <a href="<?= BASEURL;?>/Mahasiswa/detail/<?= $mhs['id'];?>" class="badge text-bg-primary float-end" style="text-decoration:none; margin-right:3px;">detail</a>
                            </li>
                        <?php endforeach; ?>
                    </ul>

        </div>
    </div>

</div>







<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/Mahasiswa/tambah" method="post">
            <input type="hidden" name="id" id="id">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
            </div>

            <div class="mb-3">
                <label for="nrp" class="form-label">NRP</label>
                <input type="number" class="form-control" id="nrp" name="nrp" placeholder="nrp">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="divisi">Divisi</label>
                <select class="form-control" name="divisi" id="divisi">
                    <option value="Backend">Backend</option>
                    <option value="Frontend">Frontend</option>
                    <option value="Mobile">Mobile</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Tambah Data</button>


        </form>

      </div>
    </div>
  </div>
</div>