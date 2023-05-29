<?php

namespace App\Models;

use App\Core\Model as Model;

class Keranjang extends Model {
    public function tampil()
    {
        $sql = "SELECT * FROM tb_keranjang ";
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
        $ker_id_user = $_POST['ker_id_user'];
        $ker_id_produk = $_POST['ker_id_produk'];
        $ker_harga = $_POST['ker_harga'];
        $ker_jml = $_POST['ker_jml'];

        $sql = "INSERT INTO tb_keranjang (ker_id_user, ker_id_produk, ker_harga, ker_jml) VALUES (:ker_id_user, :ker_id_produk, :ker_harga, :ker_jml)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ker_id_user", $ker_id_user);
        $stmt->bindParam(":ker_id_produk", $ker_id_produk);
        $stmt->bindParam(":ker_harga", $ker_harga);
        $stmt->bindParam(":ker_jml", $ker_jml);
        $stmt->execute();

    }
    public function edit($id)
    {

        $sql = "SELECT * FROM tb_keranjang WHERE ker_id=:ker_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ker_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $ker_id_user = $_POST['ker_id_user'];
        $ker_id_produk = $_POST['ker_id_produk'];
        $ker_harga = $_POST['ker_harga'];
        $ker_jml = $_POST['ker_jml'];
        $ker_id = $_POST['ker_id'];

        $sql = "UPDATE tb_keranjang SET ker_id_user=:ker_id_user, ker_id_produk=:ker_id_produk, ker_harga=:ker_harga, ker_jml=:ker_jml WHERE ker_id=:ker_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ker_id_user", $ker_id_user);
        $stmt->bindParam(":ker_id_produk", $ker_id_produk);
        $stmt->bindParam(":ker_harga", $ker_harga);
        $stmt->bindParam(":ker_jml", $ker_jml);
        $stmt->bindParam(":ker_id", $ker_id);
        $stmt->execute();

    }

    public function delete()
    {
$id = $_POST["ker_id"];
        $sql = "DELETE FROM tb_keranjang WHERE ker_id=:ker_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ker_id", $id);
        $stmt->execute();

    }

}