<?php
class About extends Controller
{

    public function index()
    {
        $user = isset($_SESSION["username"]) ? $_SESSION["username"] : null;
        $data['result'] = $this->model('UserModel')->resultData($user);
        $data['judul'] = 'About | ';
        $this->view('templates/header', $data);
        $this->view('About/about', $data);
        $this->view('templates/footer', $data);
    }
}
