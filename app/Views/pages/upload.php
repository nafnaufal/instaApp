<?= $this->extend('templates/header') ?>

<?= $this->section('content') ?>
<main>
    <div class="card m-4 mx-auto" style="width: 30rem;">
        <div class="card-header bg-white">
            <a href="/" type="button" class="btn-close" aria-label="Close"></a>
        </div>

        <img class="preview" id="file-ip-1-preview">
        <form action="">

            <div class="card-body">
                <label class="btn btn-sm bg-dark text-white" for="file-ip-1">Choose Image</label>
                <input style="display:none;" class="form-control-file" type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">

                <div class="form-floating mt-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
                    <label for="floatingTextarea">Caption</label>
                </div>

            </div>

            <div class="card-footer bg-white">

                <button type="submit" class="btn col col-2 text-white bg-primary w-100" style="border-top: 0;border-bottom: 0;border-left: 0;border-right: 0;">
                    Upload
                </button>
            </div>
        </form>
    </div>
</main>
<script>
    function showPreview(event) {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("file-ip-1-preview");
            preview.src = src;
            preview.style.display = "block";
        }
    }
</script>
<?= $this->endSection() ?>