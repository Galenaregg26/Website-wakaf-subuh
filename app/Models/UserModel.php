<?php
class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function daftar($data)
    {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING) ?? null;
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING) ?? null;
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) ?? null;
        $password = password_hash($data["password"], PASSWORD_DEFAULT) ?? null;

        if ($_FILES['fp']['error'] === 4) {
            echo "<script>
                    alert('Upload Foto Profile terlebih dahulu');
                </script>";
            return false;
        } else {
            $fp = $this->uploadFp();
        }

        // enkripsi password
        // $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO tabel_user (id, name, username, email, password, fp) VALUES ('', :name, :username, :email, :password, :fp)";

        $this->db->query($query);
        $this->db->bind('name', $name);
        $this->db->bind('username', $username);
        $this->db->bind('email', $email);
        $this->db->bind('password', $password);
        $this->db->bind('fp', $fp);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function checkDataUsername($data)
    {
        $this->db->query("SELECT * FROM tabel_user WHERE username=:username");
        $this->db->bind('username', $data);
        $data = $this->db->single();
        return $data;
    }

    public function checkDataEmail($data)
    {
        $this->db->query("SELECT * FROM tabel_user WHERE email=:email");
        $this->db->bind('email', $data);
        $data = $this->db->single();
        return $data;
    }

    public function dataUser($usernameEmail)
    {
        $this->db->query("SELECT * FROM tabel_user WHERE username=:username OR email=:email");
        $this->db->bind('username', $usernameEmail);
        $this->db->bind('email', $usernameEmail);
        $data = $this->db->single();
        return $data;
    }

    public function resultData($data)
    {

        $this->db->query("SELECT * FROM tabel_user WHERE username=:username");
        $this->db->bind('username', $data);
        return $this->db->resultSet();
    }

    function uploadFp()
    {
        $namaFile = $_FILES['fp']['name'];
        $ukuranFile = $_FILES['fp']['size'];
        $error = $_FILES['fp']['error'];
        $tmpName = $_FILES['fp']['tmp_name'];
        // cek apakah yang diupload adalah file gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>
                    alert('Format Gambar Tidak Didukung! Format Yang Didukung (jpg/jpeg/png).');
                </script>";
            return false;
        }
        // cek jika ukurannya terlalu besar
        if ($ukuranFile > 5000000) {
            echo "<script>
                    alert('Ukuran File Terlalu Besar!');
                </script>";
            return false;
        }
        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = 'profil-';
        $namaFileBaru .= uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        move_uploaded_file($tmpName, LOCALURL . '/img/fp/' . $namaFileBaru);
        return $namaFileBaru;
    }
}
