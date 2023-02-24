<?php
class Contact extends Controller
{

    public function index()
    {
        $user = isset($_SESSION["username"]) ? $_SESSION["username"] : null;
        $data['user'] = array();
        $data['saranData'] = $this->model('SaranModel')->dataSaran();
        foreach($data['saranData'] as $row) {
            $userDetail = $row['username'];
            array_push($data['user'], $this->model('UserModel')->checkDataUsername($userDetail));
        }

        $data['result'] = $this->model('UserModel')->resultData($user);
        $data['judul'] = 'Contact | ';
        $this->view('templates/header', $data);
        $this->view('Contact/contact', $data);
        $this->view('templates/footer', $data);
    }
}
