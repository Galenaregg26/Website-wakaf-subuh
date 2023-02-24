<?php
class Oauth extends Controller
{
    public function daftarUser()
    {
        $rowUsername = $this->model('UserModel')->checkDataUsername($_POST['username']);
        $rowEmail = $this->model('UserModel')->checkDataEmail($_POST['email']);
        if ($rowUsername['username'] == $_POST['username']) {
            Flasher::setFlash('Username Sudah ada ', 'Gagal register', 'danger');
            header('location: ' . PATH . '/Regist');
            exit;
        } else if ($rowEmail['email'] == $_POST['email']) {
            Flasher::setFlash('Email Sudah ada ', 'Gagal register', 'danger');
            header('location: ' . PATH . '/Regist');
            exit;
        } else {
            if ($this->model('UserModel')->daftar($_POST) > 0) {
                Flasher::setFlash('Berhasil Register ', 'Silahkan login', 'success');
                header('location: ' . PATH . '/Regist');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Register', 'danger');
                header('location: ' . PATH . '/Regist');
                exit;
            }
        }
    }

    public function loginUser()
    {
        $row = $this->model('UserModel')->dataUser($_POST['usernameEmail']);
        if (!empty($row)) {
            if (password_verify($_POST['password'], $row['password'])) {
                $_SESSION["username"] = $row["username"];
                $_SESSION['islogin'] = true;
                $_SESSION['success'] = true;

                header("location: " . PATH . "/");
            } else {
                Flasher::setFlash('Password salah', ' Gagal login', 'danger');
                header('location: ' . PATH . '/Regist');
                exit;
            }
        } else {
            Flasher::setFlash('Belum register', ' silahkan register', 'danger');
            header('location: ' . PATH . '/Regist');
            exit;
        }
    }
}
