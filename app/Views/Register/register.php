<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Wakaf Subuh</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/newDesign.css">
</head>

<body>
    <div>
        <?php Flasher::flash(); ?>
    </div>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <form action="<?= PATH ?>/Oauth/loginUser" class="input-group" id="login" method="post">
                <input type="text" class="input-field" placeholder="Username/Email" name="usernameEmail" id="usernameEmail" required>
                <input type="password" class="input-field" placeholder="Password" name="password" id="password" required>
                <button type="submit" name="submit-login" class="submit-btn">Log In</button>
            </form>
            <form action="<?= PATH ?>/Oauth/daftarUser" class="input-group" id="register" method="post" enctype="multipart/form-data" autocomplete="off">
                <input type="text" class="input-field" placeholder="Name" name="name" id="name" required>
                <input type="text" class="input-field" placeholder="Username" name="username" id="username" required>
                <input type="text" class="input-field" placeholder="Email" name="email" id="email" required>
                <input type="password" class="input-field" placeholder="Password" name="password" id="password" required>
                <input type="file" class="input-field" placeholder="Foto profile" name="fp" id="fp" required>
                <button type="submit" name="submit-regist" class="submit-btn">Register</button>
            </form>
        </div>
    </div>


    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
    </script>
    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script> --> -->

    <!-- Contact Javascript File -->
    <!-- <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <!-- <script src="js/main.js"></script>
    <script src="alertOption.js"></script> --> -->
</body>

</html>