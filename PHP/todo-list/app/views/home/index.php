<nav id="#">
    <a href="#">Beranda</a>
    <a>Pengaturan</a>
    <a>Tentang</a>
</nav>
<div class="container border-radius">
    <form action="home/create" method="POST">
        <input class="width-80" type="text" name="judul" id="" placeholder="Judul"><input type="submit" value="Buat" autocomplete="off" autofocus>
    </form>
</div>

<div class="container padding-3 width-100">
    <?php foreach ($data['todo'] as $dat) : ?>
        <form action="home/update/<?= $dat['id'] ?>" method="POST">
            <div class="card">
                <div class="checkbox center">
                    <input class=" hidden" type="checkbox" name="checkbox" id="checkbox<?= $dat['id'] ?>">
                    <label for="checkbox<?= $dat['id'] ?>">&#x2713;</label>
                </div>
                <input type="text" class="content bg-invis" name="judul" value="<?= $dat['judul'] ?>" autocomplete="off">
                <a href="<?= HOME_URL ?>/home/delete/<?= $dat['id'] ?>" class="delete center">X</a>
            </div>
        </form>
    <?php endforeach ?>
</div>