<?= $this->extend('templates/header') ?>

<?= $this->section('content') ?>
<main>
    <div class="card mt-5 m-4 mx-auto p-2" style="width: 30rem;">
        <div class="card-header mx-auto pb-0 text-left bg-transparent">
            <h3 class="font-weight-bolder text-dark"><span class="text-dark text-gradient" style='font-family: "Oleo Script", cursive;'>instaApp</span></h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>

            <form role="form" method="post" action="<?= base_url(); ?>/login/process">
                <?= csrf_field(); ?>
                <label>Username</label>
                <div class="mb-3">
                    <input type="username" class="form-control" id="username" name="username" placeholder="Username" aria-label="Username" aria-describedby="username-addon" required autofocus>
                </div>
                <label>Password</label>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-label="Password" aria-describedby="password-addon" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn bg-primary w-50 mt-4 mb-0 text-white">Login</button>
                </div>
            </form>
        </div>
        
        <div class="card-footer text-center p-2 bg-white">
            <p class="mb-4 text-sm mx-auto">
                Belum punya akun?
                <a href="register" class="text-primary text-gradient font-weight-bold">Daftar</a>
            </p>
        </div>
    </div>
</main>
<?= $this->endSection() ?>
