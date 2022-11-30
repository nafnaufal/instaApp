<?= $this->extend('templates/sidebar') ?>

<?= $this->section('content') ?>
<main>
    <div class="card m-4 mx-auto" style="width: 30rem;">
        <div class="card-header bg-white">
            Nama
        </div>

        <img src="https://img.okezone.com/content/2022/09/30/33/2678269/iu-jalani-isolasi-mandiri-setelah-kontak-erat-dengan-pasien-covid-19-di-italia-xNpKnKQvLj.jpeg" alt="IU">

        <div class="card-body">
            <div class="row mb-2">
                <a class="col col-1" href="#">
                    <i class="bi bi-heart text-dark fs-5"></i>
                </a>
                <a class="col col-auto" href="#">
                    <i class="bi bi-chat text-dark fs-5"></i>
                </a>
            </div>
            <p class="card-text">100 Like</p>
            <p class="card-text fw-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a class="col col-auto" href="#">
                <p class="text-muted fw-light">Lihat komentar</p>
            </a>
        </div>
        <div class="card-footer bg-white">
            <form action="">
                <div class="row">
                    <div class="col col-10">
                        <input class="form-control form-control-sm rounded-0" type="text" placeholder="Tambahkan komentar..." style="border-top: 0;border-bottom: 0;border-left: 0;border-right: 0;">
                    </div>
                    <button type="submit" class="col col-2 bg-white text-primary" href="#" style="border-top: 0;border-bottom: 0;border-left: 0;border-right: 0;">
                        Kirim
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
<?= $this->endSection() ?>