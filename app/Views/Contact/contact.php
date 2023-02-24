<?php
if (!empty($data['result'])) {
    foreach ($data['result'] as $row) {
        $username = isset($row['username']) ? $row['username'] : null;
    }
}
?>

<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">Kontak Kami</h3>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Kontak Kami</p>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Kontak Kami</span></p>
            <h1 class="mb-4">Saran&Masukkan</h1>
        </div>
        <div class="row">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <form action="<?= PATH ?>/saran/add" method="post">
                        <div class="control-group">
                            <input type="hidden" class="form-control" name="id">
                        </div>
                        <div class="control-group">
                            <input type="hidden" class="form-control" name="nama" value="<?= $username ?? null ?>" />
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="6" name="message" placeholder="Saran dan Masukkan" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <button type="submit" name="tombol">Kirim</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <p>Detail Info Alamat dan Kontak Kami</p>
                <div class="d-flex">
                    <i class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                    <div class="pl-3">
                        <h5>Alamat Pusat</h5>
                        <p>Jl.Menteng 1 Kav IV,Menteng Dalam,Jakarta Pusat, DKI Jakarta, Indonesia</p>
                    </div>
                </div>
                <div class="d-flex">
                    <i class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                    <div class="pl-3">
                        <h5>Email</h5>
                        <p>yayasanwakafsubuh@gmail.com</p>
                    </div>
                </div>
                <div class="d-flex">
                    <i class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                    <div class="pl-3">
                        <h5>Telpon</h5>
                        <p>+012 345 67890</p>
                    </div>
                </div>
                <div class="d-flex">
                    <i class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                    <div class="pl-3">
                        <h5>Jam Buka Kantor Pusat</h5>
                        <strong>Senin - Jum'at :</strong>
                        <p class="m-0">08:00 AM - 05:00 PM </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<!-- saran -->
<div class="container-fluid py-5">
    <div class="container p-0">
        <div class="child">
            <div class="owl-carousel testimonial-carousel">
                <?php for ($i = 0; $i < count($data['saranData']); $i++) { ?>
                    <div class="testimonial-item px-4">
                        <div class="bg-light shadow-sm rounded mb-4 p-4" text-align:justify>
                            <?= $data['saranData'][$i]['subjek']; ?>
                        </div>
                        <div class="bg-light shadow-sm rounded mb-4 p-4" text-align:justify>
                            <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                            <?= $data['saranData'][$i]['saran']; ?>
                        </div>
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="<?= PATH ?>/img/fp/<?= $data['user'][$i]['fp']; ?>" style="width: 70px; height: 70px;" alt="<?= $data['user'][$i]['name']; ?>">
                            <div class="pl-3">
                                <h5><?= $data['user'][$i]['username']; ?></h5>
                            </div>
                            <?php if (isset($_SESSION['islogin'])) : ?>
                                <?php if ($_SESSION['username'] === $data['user'][$i]['username']) : ?>
                                    <!-- <div class="pl-3">
                                        <a href="">
                                            <button type="button" class="btn btn-primary">
                                                Edit
                                            </button>
                                        </a>
                                    </div> -->
                                    <div class="pl-3">
                                        <a href="<?= PATH ?>/saran/hapus/<?= $data['saranData'][$i]['id']; ?>">
                                            <button type="button" class="btn btn-danger">
                                                Hapus
                                            </button>
                                        </a>
                                        <a href="<?= PATH ?>/saran/edit/<?= $data['saranData'][$i]['id']; ?>">
                                            <button type="button" class="btn btn-warning">
                                                Edit
                                            </button>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>