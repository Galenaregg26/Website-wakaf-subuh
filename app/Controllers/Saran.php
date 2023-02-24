<?php
class Saran extends Controller
{
    public function add()
    {
        $this->view('check/akses');

        $username = $_POST['nama'];
        $subjek = $_POST['subject'];
        $saran = $_POST['message'];

        if ($this->model('SaranModel')->addSaran($subjek, $saran, $username) > 0) {
            header("Location: " . PATH . "/Contact");
        }
    }

    public function hapus($id)
    {
        if ($this->model('SaranModel')->delete($id) > 0) {
            header("Location: " . PATH . "/Contact");
        }
    }
}
