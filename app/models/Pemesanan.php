<?php

namespace App\Models;

use App\Core\Model as Model;

class Pemesanan extends Model {
    public function tampil()
    {
        $sql = "SELECT * FROM tb_order ";
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
        $order_id_user = $_POST['order_id_user'];
        $order_kode = $_POST['order_kode'];
        $order_ttl= $_POST['order_ttl'];
        $order_kurir = $_POST['order_kurir'];
        $order_ongkir = $_POST['order_ongkir'];
        $order_byr_deadline = $_POST['order_byr_deadline'];

        $sql = "INSERT INTO tb_order (order_id_user, order_kode, order_ttl, order_kurir, order_ongkir, order_byr_deadline) VALUES (:order_id_user, :order_kode, :order_ttl, :order_kurir, :order_ongkir,:order_byr_deadline)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":order_id_user", $order_id_user);
        $stmt->bindParam(":order_kode", $order_kode);
        $stmt->bindParam(":order_ttl", $order_ttl);
        $stmt->bindParam(":order_kurir", $order_kurir);
        $stmt->bindParam(":order_ongkir", $order_ongkir);
        $stmt->bindParam(":order_byr_deadline", $order_byr_deadline);
        $stmt->execute();

    }
    public function edit($id)
    {

        $sql = "SELECT * FROM tb_order WHERE order_id=:order_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":order_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $order_id_user = $_POST['order_id_user'];
        $order_kode = $_POST['order_kode'];
        $order_ttl= $_POST['order_ttl'];
        $order_kurir = $_POST['order_kurir'];
        $order_ongkir = $_POST['order_ongkir'];
        $order_byr_deadline = $_POST['order_byr_deadline'];
        $order_batal= $_POST['order_batal'];
        $order_id = $_POST['order_id'];

        $sql = "UPDATE tb_order SET order_id_user=:order_id_user, order_kode=:order_kode, order_ttl=:order_ttl, order_kurir=:order_kurir, order_ongkir=:order_ongkir, order_byr_deadline=:order_byr_deadline, order_batal=:order_batal WHERE order_id=:order_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":order_id_user", $order_id_user);
        $stmt->bindParam(":order_kode", $order_kode);
        $stmt->bindParam(":order_ttl", $order_ttl);
        $stmt->bindParam(":order_kurir", $order_kurir);
        $stmt->bindParam(":order_ongkir", $order_ongkir);
        $stmt->bindParam(":order_byr_deadline", $order_byr_deadline);
        $stmt->bindParam(":order_batal", $order_batal);
        $stmt->bindParam(":order_id", $order_id);
        $stmt->execute();

    }

    public function delete()
    {
$id = $_POST["order_id"];
        $sql = "DELETE FROM tb_order WHERE order_id=:order_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":order_id", $id);
        $stmt->execute();

    }

}