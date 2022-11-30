<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script&display=swap" rel="stylesheet">
    <title>Timeline</title>
</head>

<body class="bg-light">
    <!-- JavaScript Bundle with Popper -->
    <div class="container-sm">
        <nav class="py-2 px-5 navbar fixed-bottom navbar-light bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style='font-family: "Oleo Script", cursive;'>instaApp</a>
                <a href="#">
                    <i class="bi bi-plus-square text-dark fs-1"></i>
                </a>
                <a href="#">
                    <i class="bi bi-power text-danger fs-3"></i>
                </a>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <?= $this->renderSection('content') ?>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>