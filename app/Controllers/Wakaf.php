<?php
class Wakaf extends Controller
{

    public function wakafAlquran()
    {
        $user = isset($_SESSION["username"]) ? $_SESSION["username"] : null;
        $data['result'] = $this->model('UserModel')->resultData($user);
        $data['judul'] = 'Wakaf Al-Quran | ';
        $this->view('check/akses');
        $this->view('templates/header', $data);
        $this->view('Wakaf/wakafAlquran', $data);
        $this->view('templates/footer', $data);
    }
    public function wakafMasjid()
    {
        $user = isset($_SESSION["username"]) ? $_SESSION["username"] : null;
        $data['result'] = $this->model('UserModel')->resultData($user);
        $data['judul'] = 'Wakaf Masjid | ';
        $this->view('check/akses');
        $this->view('templates/header', $data);
        $this->view('Wakaf/wakafMasjid', $data);
        $this->view('templates/footer', $data);
    }
    public function wakafRS()
    {
        $user = isset($_SESSION["username"]) ? $_SESSION["username"] : null;
        $data['result'] = $this->model('UserModel')->resultData($user);
        $data['judul'] = 'Wakaf Rumah Sakit | ';
        $this->view('check/akses');
        $this->view('templates/header', $data);
        $this->view('Wakaf/wakafRS', $data);
        $this->view('templates/footer', $data);
    }
}
