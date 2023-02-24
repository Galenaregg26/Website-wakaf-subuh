<?php
if (is_array($data['result']) || is_object($data['result'])) {
    foreach ($data['result'] as $row) {
        $username = $row['username'];
        $fp = $row['fp'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WAKAF SUBUH</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="<?= BASEURL; ?>/img/favicon.ico" rel="icon">

    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style-v1.6.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="<?= BASEURL; ?>/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= BASEURL; ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= BASEURL; ?>/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/loginStyle.css">
    <title><?= $data['judul'] ?> WakafSubuh</title>
</head>

<body>
    <!-- Navbar Start -->
    <?php if (!isset($_SESSION['success'])) : ?>
        <div class="container">
            <nav class="navbar bg-light">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="<?= PATH; ?>/Regist/" class="btn btn-primary me-md-2" type="button">Register</a>
                    <a href="<?= PATH; ?>/Regist/" class="btn btn-primary" type="button">Login</a>
                </div>
            </nav>
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['success'])) : ?>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="pp-status" src="<?= PATH; ?>/img/fp/<?= $fp; ?>" alt="<?= $username; ?>"> Welcome <?= $username; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="<?= BASEURL; ?>/logout">Logout</a>
                    </ul>
                </div>
            </div>
        </nav>
    <?php endif; ?>

    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="" class="navbar-brand font-weight-bold text-secondary">
                <img class src="<?= PATH; ?>/img/logo.png" style="width: 100px;" alt="Image">
            </a>
            <h1 class="text-primary">Wakaf Subuh</h1>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="<?= PATH; ?>" class="nav-item nav-link active">Beranda</a>
                    <a href="<?= PATH; ?>/About" class="nav-item nav-link">Tentang Kami</a>
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Program</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="<?= PATH ?>/Wakaf/wakafMasjid" class="dropdown-item">Wakaf Masjid</a>
                            <a href="<?= PATH ?>/Wakaf/wakafRS" class="dropdown-item">Wakaf Rumah Sakit</a>
                            <a href="<?= PATH ?>/Wakaf/wakafAlquran" class="dropdown-item">Wakaf Al-Qur'an </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Donasi</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="<?= BASEURL; ?>/donasi/masjid" class="dropdown-item">Donasi Wakaf Masjid</a>
                            <a href="<?= BASEURL; ?>/donasi/rs" class="dropdown-item">Donasi Wakaf Rumah Sakit</a>
                            <a href="<?= BASEURL; ?>/donasi/alquran" class="dropdown-item">Donasi Wakaf Al-Qur'an </a>
                        </div>
                    </div>
                    <a href="<?= BASEURL ?>/Contact" class="nav-item nav-link">Kontak Kami </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->