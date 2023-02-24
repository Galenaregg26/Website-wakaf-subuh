<?php
class Logout extends Controller
{
    public function index()
    {
        $user = isset($_SESSION["username"]) ? $_SESSION["username"] : null;
        $data['result'] = $this->model('UserModel')->resultData($user);
        $data['judul'] = 'OUT | ';
        $this->view('check/akses');
        $this->view('templates/header', $data);
        $this->view('Logout/out');
        $this->view('templates/footer', $data);
    }
}
