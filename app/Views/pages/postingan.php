<?= $this->extend('templates/header') ?>

<?= $this->section('content') ?>
<main>

    <div class="justify-content-start container mx-auto mt-5 p-4 my-2 bg-white rounded">

        <div class="align-item-center">
            <a href="/" type="button" class="btn-close" aria-label="Close"></a>
        </div>
        <img class="rounded mx-auto mt-2 d-block img-fluid" src="https://img.okezone.com/content/2022/09/30/33/2678269/iu-jalani-isolasi-mandiri-setelah-kontak-erat-dengan-pasien-covid-19-di-italia-xNpKnKQvLj.jpeg" alt="IU">
    </div>

    <div class="container mx-auto p-4 mb-2 bg-white mt-4 rounded">

        <h5>Nama</h5>
        <a href="#">
            <i class="bi bi-heart text-dark fs-5"></i>
        </a>
        <p>100 Like</p>


        <p class="fw-light">Caption.</p>
        <hr>
        <form action="" class="mb-4">
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

    <div class="container mx-auto p-4 mb-2 bg-white rounded">
        <p class="fw-bold">asdas</p>
        <p>komentar 1</p>
    </div>

    <button type="button" class="btn btn-dark btn-floating" id="back-to-top" style="position: fixed;bottom: 40px;right: 40px; display: none;">
        <i class="bi bi-arrow-up-circle"></i>
    </button>
</main>
<script>
    let mybutton = document.getElementById("back-to-top");

    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<?= $this->endSection() ?>