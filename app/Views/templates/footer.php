               <!-- Footer Start -->
               <div class="container-fluid bg-secondary text-white mt-5 py-3 px-sm-3 px-md-5">
                   <div class="row pt-4">
                       <div class="col-lg-3 col-md-6 mb-3">
                           <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0" style="font-size: 30px; line-height: 40px;">
                               <img class src="<?= BASEURL; ?>/img/logo.png" style="width: 50px;" alt="Image">
                               <span class="text-white" style="font-size: 25px;">Wakaf Subuh</span>
                           </a>
                           <p>Merupakan lembaga pengelolaan wakaf yang berfungsi sebagai website penggalangan dana dari beberapa macam program wakaf, sedekah, infak dan beberapa donasi lainnya yang dilakukan secara online.</p>
                           <div class="d-flex justify-content-start mt-4">
                               <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                               <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa fa-phone"></i></a>
                               <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                               <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                           </div>
                       </div>
                       <div class="col-lg-2 col-md-6 mb-5">
                           <h3 class="text-primary mb-4">Menu</h3>
                           <div class="d-flex flex-column justify-content-start">
                               <a class="text-white mb-2" href="<?= BASEURL; ?>"><i class="fa fa-angle-right mr-2"></i>Beranda</a>
                               <a class="text-white mb-2" href="<?= BASEURL; ?>/about"><i class="fa fa-angle-right mr-2"></i>Tentang Kami </a>
                               <a class="text-white" href="<?= BASEURL; ?>/contact"><i class="fa fa-angle-right mr-2"></i>Kontak Kami</a>
                           </div>
                       </div>
                       <div class="col-lg-3 col-md-6 mb-5">
                           <h3 class="text-primary mb-4">Media Partner</h3>
                           <div class="d-flex flex-column justify-content-start">
                               <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Telkomsel</a>
                               <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>SM Entertainment</a>
                           </div>
                       </div>
                       <div class="col-lg-3 col-md-6 mb-5">
                           <h3 class="text-primary mb-4">Temukan Kami</h3>
                           <div class="d-flex">
                               <h4 class="fa fa-map-marker-alt text-primary"></h4>
                               <div class="pl-3">
                                   <h5 class="text-white">Alamat Pusat</h5>
                                   <p>Jl.Menteng 1 Kav IV,Menteng Dalam,Jakarta Pusat, DKI Jakarta, Indonesia</p>
                               </div>
                           </div>
                       </div>
                       <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, .2);;">
                           <p class="m-0 text-center text-white">
                               &copy; <a class="text-primary font-weight-bold" href="#">2022 WakafSubuh</a>. Designed
                               by Reggina Indriani and Team
                               <a class="text-primary font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
                           </p>
                       </div>
                   </div>
               </div>
               <!-- Footer End -->
               </div>
               </div>
               </div>

               <script>
                   var select = document.getElementById('donasi');

                   // Mendapatkan element <div> yang berisi form input
                   var formInput = document.getElementById('form_input');

                   // Menambahkan event listener untuk menangani perubahan pilihan di <select>
                   select.addEventListener('change', function() {
                       // Jika pilihan "Lainnya" dipilih, maka form input akan ditampilkan
                       if (this.value === 'donasiLainya') {
                           formInput.style.display = 'block';
                       } else {
                           formInput.style.display = 'none';
                       }
                   });
               </script>


               <!-- Back to Top -->
               <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


               <!-- JavaScript Libraries -->
               <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
               <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
               <script src="<?= BASEURL ?>/lib/easing/easing.min.js"></script>
               <script src="<?= BASEURL ?>/lib/owlcarousel/owl.carousel.min.js"></script>
               <script src="<?= BASEURL ?>/lib/isotope/isotope.pkgd.min.js"></script>
               <script src="<?= BASEURL ?>/lib/lightbox/js/lightbox.min.js"></script>
               <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.16/dist/sweetalert2.all.min.js"></script>

               <!-- Contact Javascript File -->
               <script src="<?= BASEURL ?>/mail/jqBootstrapValidation.min.js"></script>
               <script src="<?= BASEURL ?>/mail/contact.js"></script>

               <!-- Template Javascript -->
               <script src="<?= BASEURL; ?>/js/main.js"></script>
               <script src="<?= BASEURL; ?>/js/script.js"></script>
               <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
               </body>

               </html>