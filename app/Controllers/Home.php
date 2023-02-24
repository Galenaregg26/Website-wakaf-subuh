<?php
class Home extends Controller
{

    public function index($user)
    {
        if (isset($_SESSION["username"])) {
            $user = $_SESSION["username"];
        }

        $data['donasi'] = $this->model('DonasiModel')->dataDonasi();
        $data['tDonasiAlQuran'] = $this->model('DonasiModel')->tDonasiAlQuran();
        $data['tDonasiMasjid'] = $this->model('DonasiModel')->tDonasiMasjid();
        $data['tDonasiRs'] = $this->model('DonasiModel')->tDonasiRs();
        $data['result'] = $this->model('UserModel')->resultData($user);
        $data['judul'] = 'Beranda | ';

        $this->view('templates/header', $data);
        $this->view('home/home', $data);
        $this->view('templates/footer', $data);
    }
}
