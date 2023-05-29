<?php

namespace App\Models;

use App\Core\Model as Model;

class Kategori extends Model {
    public function tampil()
    {
        $sql = "SELECT * FROM tb_kategori ORDER BY kat_nama ASC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }
    public function simpan()
    {
        $kat_nama = $_POST['kat_nama'];
        $kat_keterangan = $_POST['kat_keterangan'];

        $sql = "INSERT INTO tb_kategori (kat_nama, kat_keterangan) VALUES (:kat_nama, :kat_keterangan)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kat_nama", $kat_nama);
        $stmt->bindParam(":kat_keterangan", $kat_keterangan);
        $stmt->execute();

    }
    public function edit($id)
    {

        $sql = "SELECT * FROM tb_kategori WHERE kat_id=:kat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kat_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $kat_nama = $_POST['kat_nama'];
        $kat_keterangan = $_POST['kat_keterangan'];
        $kat_id = $_POST['kat_id'];

        $sql = "UPDATE tb_kategori SET kat_nama=:kat_nama, kat_keterangan=:kat_keterangan WHERE kat_id=:kat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kat_nama", $kat_nama);
        $stmt->bindParam(":kat_keterangan", $kat_keterangan);
        $stmt->bindParam(":kat_id", $kat_id);
        $stmt->execute();

    }

    public function delete()
    {
$id = $_POST["kat_id"];
        $sql = "DELETE FROM tb_kategori WHERE kat_id=:kat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kat_id", $id);
        $stmt->execute();

    }

}