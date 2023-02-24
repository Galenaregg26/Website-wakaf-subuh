<?php
class Donasi extends Controller
{

    public function alquran()
    {
        $user = isset($_SESSION["username"]) ? $_SESSION["username"] : null;
        $data['result'] = $this->model('UserModel')->resultData($user);
        $data['judul'] = 'Donasi | ';
        $this->view('check/akses');
        $this->view('templates/header', $data);
        $this->view('Donasi/donasiAlquran', $data);
        $this->view('templates/footer', $data);
    }

    public function masjid()
    {
        $user = isset($_SESSION["username"]) ? $_SESSION["username"] : null;
        $data['result'] = $this->model('UserModel')->resultData($user);
        $data['judul'] = 'Donasi | ';
        $this->view('check/akses');
        $this->view('templates/header', $data);
        $this->view('Donasi/donasimasjid', $data);
        $this->view('templates/footer', $data);
    }

    public function rs()
    {
        $user = isset($_SESSION["username"]) ? $_SESSION["username"] : null;
        $data['result'] = $this->model('UserModel')->resultData($user);
        $data['judul'] = 'Donasi | ';
        $this->view('check/akses');
        $this->view('templates/header', $data);
        $this->view('Donasi/donasirumahsakit', $data);
        $this->view('templates/footer', $data);
    }

    public function getAlquran()
    {
        if ($this->model('DonasiModel')->insertDonasi($_POST) > 0) {
            Flasher::setSwal('Yeyy, Berhasil Donasi');
            header("Location: " . BASEURL . "/Donasi/alquran");
        }
    }
    public function getMasjid()
    {
        if ($this->model('DonasiModel')->insertDonasi($_POST) > 0) {
            Flasher::setSwal('Yeyy, Berhasil Donasi');
            header("Location: " . BASEURL . "/Donasi/masjid");
        }
    }
    public function getRs()
    {
        if ($this->model('DonasiModel')->insertDonasi($_POST) > 0) {
            Flasher::setSwal('Yeyy, Berhasil Donasi');
            header("Location: " . BASEURL . "/Donasi/rs");
        }
    }
}
