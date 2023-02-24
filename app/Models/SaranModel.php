<?php
class SaranModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addSaran($subject, $saran, $username)
    {
        $query = "INSERT INTO tbl_saran VALUES('', :subjek, :saran, :username)";
        $this->db->query($query);
        $this->db->bind('subjek', $subject);
        $this->db->bind('saran', $saran);
        $this->db->bind('username', $username);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function dataSaran()
    {
        $query = "SELECT * FROM tbl_saran";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function delete($id)
    {
        $query = "DELETE FROM tbl_saran WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function editSaran($subject, $saran, $username)
    {
        $query = "UPDATE tbl_saran SET subjek=:subjek, saran=:saran, username=:username WHERE id=:id ";
        $this->db->query($query);
        $this->db->bind('subjek', $subject);
        $this->db->bind('saran', $saran);
        $this->db->bind('username', $username);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
