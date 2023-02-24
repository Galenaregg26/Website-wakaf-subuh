<?php
class DonasiModel
{
    private $db;
    private $tabel = 'tbl_donasi';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insertDonasi($data)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $data['username'];
            $nama = $data['nama'];
            $email = $data['email'];
            $phone = $data['phone'];
            $kategori = $data['kategori'];
            $tempat = $data['tempat'];
            $donasi = $data['donasi'];

            $transaksi = $data['transaksi'];

            if ($_FILES['gambar']['error'] === 4) {
                echo "<script>
                    alert('Upload Foto bukti transaksi terlebih dahulu');
                </script>";
                return false;
            } else {
                $gambar = $this->uploadTransaksi();
            }

            $doa = $data['doa'];

            if ($donasi == "donasiLainya") {
                $donasi = $data['donasiLainya'];
            }

            $query =  "INSERT INTO " . $this->tabel . " VALUES('', :username, :Name, :Email, :phone, :kategori, :tempat, :donasi, :transaksi, :gambar, :doa)";
            $this->db->query($query);
            $this->db->bind('username', $username);
            $this->db->bind('Name', $nama);
            $this->db->bind('Email', $email);
            $this->db->bind('phone', $phone);
            $this->db->bind('kategori', $kategori);
            $this->db->bind('tempat', $tempat);
            $this->db->bind('donasi', $donasi);
            $this->db->bind('transaksi', $transaksi);
            $this->db->bind('gambar', $gambar);
            $this->db->bind('doa', $doa);
            $this->db->execute();

            return $this->db->rowCount();
        }
    }

    public function dataDonasi()
    {
        $query = "SELECT * FROM " . $this->tabel;
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function tDonasiAlQuran()
    {
        $query = "SELECT SUM(donasi) as hasil FROM " . $this->tabel . " WHERE kategori = 'alQuran';
        ";
        $this->db->query($query);
        return $this->db->single();
    }

    public function tDonasiMasjid()
    {
        $query = "SELECT SUM(donasi) as hasil FROM " . $this->tabel . " WHERE kategori = 'Masjid';
        ";
        $this->db->query($query);
        return $this->db->single();
    }
    
    public function tDonasiRs()
    {
        $query = "SELECT SUM(donasi) as hasil FROM " . $this->tabel . " WHERE kategori = 'Rumah Sakit';
        ";
        $this->db->query($query);
        return $this->db->single();
    }

    function uploadTransaksi()
    {
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];
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
        $namaFileBaru = 'bukti-transaksi-';
        $namaFileBaru .= uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        move_uploaded_file($tmpName, LOCALURL . '/img/transaksi/' . $namaFileBaru);
        return $namaFileBaru;
    }
}
