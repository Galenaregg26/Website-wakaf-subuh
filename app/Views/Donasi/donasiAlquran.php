<div class="flash-data" data-flashdata="<?= Flasher::sweatAlert(); ?>"></div>
<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">Donasi</h3>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Donasi</p>
        </div>
    </div>
</div>
<!-- Header End -->

<!--Donasi Start-->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <p class="section-title pr-5"><span class="pr-2">Wakaf Subuh</span></p>
                <h1 class="mb-4">Ayo Sisihkan sebagian hartamu untuk berwakaf</h1>
                <p>Untuk para Donatur silahkan donasi ke rekening dibawah ini A/N Yayasan Wakaf Subuh. PERHATIAN! Wakaf Subuh hanya memiliki 3 rekening dan 3 e-wallet yang ber A/N Yayasan Wakaf Subuh jika ada transaksi diluar rekening dibawah ini dan e-walet Atas nama lain maka bukan tanggung jawab kami.</P>
                <ul class="list-inline m-0">
                    <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Mandiri : 123.888.666.5678</li>
                    <li class="py-2"><i class="fa fa-check text-success mr-3"></i>BCA : 897.890.6783</li>
                    <li class="py-2"><i class="fa fa-check text-success mr-3"></i>BRI : 053.406.000.765.308</li>
                    <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Dana : 085844213455</li>
                    <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Gopay : 085844213455</li>
                    <li class="py-2"><i class="fa fa-check text-success mr-3"></i>OVO: 085844213455</li>
                </ul>
            </div>
            <div class="col-lg-5">
                <div class="card border-0">
                    <div class="card-header bg-secondary text-center p-4">
                        <h1 class="text-white m-0">Data Donatur</h1>
                    </div>
                    <div class="card-body rounded-bottom bg-primary p-5">
                        <form action="<?= BASEURL; ?>/donasi/getAlquran" method="post" id="form" enctype="multipart/form-data">
                            <input type="hidden" name="username" value="<?= $_SESSION['username']; ?>">
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control border-0 p-4" placeholder="Nama Wakil" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control border-0 p-4" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" name="phone" class="form-control border-0 p-4" placeholder="phone (+xxxxxxxxxxxxx)" required>
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" name="kategori" style="height: 47px;">
                                    <option value="">Kategori Wakaf</option>
                                    <option value="alQuran">Wakaf Al-Qur'an</option>
                                </select required>
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" name="tempat" style="height: 47px;">
                                    <option value>Tempat Wakaf</option>
                                    <optgroup label="Wakaf Al-Qur'an">
                                        <option value="Desa Suru-Suru">Desa Suru-Suru</option>
                                        <option value="Desa Kobisonta">Desa Kobisonta </option>
                                        <option value="Desa Cunca Wulang">Desa Cunca Wulang</option>
                                </select required>
                            </div>
                            <div class="form-group">
                                <label for="donasi" class="text-white m-0">Nominal Donasi: </label><br>
                                <select class="custom-select border-0 px-4" id="donasi" name="donasi" style="height: 47px;">
                                    <option value="200000">Rp. 200.000</option>
                                    <option value="500000">Rp. 500.000</option>
                                    <option value="1000000">Rp. 1.000.000</option>
                                    <option value="2500000">Rp. 2.500.000</option>
                                    <option value="donasiLainya">Nominal Donasi Lainnya</option>
                                </select required>
                            </div>
                            <div class="form-group" id="form_input" style="display:none">
                                <input type="number" id="donasiLainya" name="donasiLainya" class="form-control border-0 p-4">
                            </div>
                            <div class="form-group">
                                <select name="transaksi" class="custom-select border-0 px-4" style="height: 47px;">
                                    <option value>Metode Pembayaran</option>
                                    <optgroup label="E-wallet dan M-Banking">
                                        <option>Gopay</option>
                                        <option>OVO</option>
                                        <option>Dana</option>
                                        <option>BRI</option>
                                        <option>BCA</option>
                                        <option>Mandiri</option>
                                </select required>
                            </div>
                            <div class="form-group">
                                <div class="form-control border-0 px-4" style="height: 67px;">
                                    <label for="fp">Upload bukti transaksi : </label>
                                    <input type="file" name="gambar" id="fp" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="doa" class="form-control" rows="6" id="message" placeholder="Do'a dan dukungan untuk Program Wakaf" data-validation-required-message="Please enter your message"></textarea required>
                                </div>
                                <a><button type="submit" name="go" id="go" value="go">lanjut</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Donasi End -->