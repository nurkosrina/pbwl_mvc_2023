<?php

namespace App\Models;

use App\Core\Model as Model;

class DetPemesanan extends Model {
    public function tampil()
    {
        $sql = "SELECT * FROM tb_order_detail ";
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
        $detail_id_order = $_POST['detail_id_order'];
        $detail_id_produk = $_POST['detail_id_produk'];
        $detail_harga= $_POST['detail_harga'];
        $detail_jml = $_POST['detail_jml'];

        $sql = "INSERT INTO tb_order_detail (detail_id_order, detail_id_produk, detail_harga, detail_jml) VALUES (:detail_id_order, :detail_id_produk, :detail_harga, :detail_jml)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":detail_id_order", $detail_id_order);
        $stmt->bindParam(":detail_id_produk", $detail_id_produk);
        $stmt->bindParam(":detail_harga", $detail_harga);
        $stmt->bindParam(":detail_jml", $detail_jml);
        $stmt->execute();

    }
    public function edit($id)
    {

        $sql = "SELECT * FROM tb_order_detail WHERE detail_id_order=:detail_id_order";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":detail_id_order", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $detail_id_order = $_POST['detail_id_order'];
        $detail_id_produk = $_POST['detail_id_produk'];
        $detail_harga= $_POST['detail_harga'];
        $detail_jml = $_POST['detail_jml'];

        $sql = "UPDATE tb_order_detail SET detail_id_produk=:detail_id_produk, detail_harga=:detail_harga, detail_jml=:detail_jml WHERE detail_id_order=:detail_id_order";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":detail_id_order", $detail_id_order);
        $stmt->bindParam(":detail_id_produk", $detail_id_produk);
        $stmt->bindParam(":detail_harga", $detail_harga);
        $stmt->bindParam(":detail_jml", $detail_jml);
        $stmt->execute();

    }

    public function delete()
    {
$id = $_POST["detail_id_order"];
        $sql = "DELETE FROM tb_order_detail WHERE detail_id_order=:detail_id_order";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":detail_id_order", $id);
        $stmt->execute();

    }

}