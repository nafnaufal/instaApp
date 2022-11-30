<?= $this->extend('templates/sidebar') ?>

<?= $this->section('content') ?>
<main>

    <?php foreach ($post as $p) {

        if (strlen($p['caption']) > 40) {
            $caption = substr($p['caption'], 37) . '...';
        } else {
            $caption = $p['caption'];
        }
    ?>
        <div class="card m-4 mx-auto" style="width: 30rem;">
            <div class="card-header bg-white">
                <?= $p['username'] ?>
            </div>

            <img class="img-fluid" src="<?= base_url() . '/' . $p['path'] ?>" alt="<?= $p['id'] ?>">

            <div class="card-body">
                <div class="row mb-2">
                    <a class="col col-1" href="#">
                        <i class="bi bi-heart text-dark fs-5"></i>
                    </a>
                    <a class="col col-auto" href="postingan/<?= $p['id'] ?>">
                        <i class="bi bi-chat text-dark fs-5"></i>
                    </a>
                </div>
                <p class="card-text"><?= $p['likes'] ?> Like</p>
                <p class="card-text fw-light"><?= $caption ?></p>
                <a class="col col-auto" href="postingan/<?= $p['id'] ?>">
                    <p class="text-muted fw-light">Lihat komentar</p>
                </a>
            </div>
            <div class="card-footer bg-white">
                <form action="comment" method="post">
                    <div class="row">
                        <div class="col col-10">
                            <input type="hidden" id="id_user" name="id_user" value="<?= $p['id_user'] ?>">
                            <input type="hidden" id="id_post" name="id_post" value="<?= $p['id'] ?>">
                            <input name="comment" class="form-control form-control-sm rounded-0" type="text" placeholder="Tambahkan komentar..." style="border-top: 0;border-bottom: 0;border-left: 0;border-right: 0;">
                        </div>
                        <button type="submit" class="col col-2 bg-white text-primary" href="#" style="border-top: 0;border-bottom: 0;border-left: 0;border-right: 0;">
                            Kirim
                        </button>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>
</main>
<?= $this->endSection() ?>