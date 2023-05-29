<?php
$row = $data['pemesanan'];
?>

<h2>Edit pemesanan</h2>

<form action="../Proses" method="post">
    <input type="hidden" name="order_id" value="<?php echo $row['order_id']; ?>">
    <table>
    <tr>
            <td>ID USER</td>
            <td><input type="text" name="order_id_user" value="<?php echo $row['order_id_user']; ?>"></td>
        </tr>
        <tr>
            <td>KODE</td>
            <td><input type="text" name="order_kode" value="<?php echo $row['order_kode']; ?>"></td>
        </tr>
        <tr>
            <td>TTL</td>
            <td><input type="text" name="order_ttl" value="<?php echo $row['order_ttl']; ?>"></td>
        </tr>
        <tr>
            <td>KURIR</td>
            <td><input type="text" name="order_kurir" value="<?php echo $row['order_kurir']; ?>"></td>
        </tr>
        <tr>
            <td>ONGKIR</td>
            <td><input type="text" name="order_ongkir" value="<?php echo $row['order_ongkir']; ?>"></td>
        </tr>
        <tr>
            <td>BAYAR DEADLINE</td>
            <td><input type="text" name="order_byr_deadline" value="<?php echo $row['order_byr_deadline']; ?>"></td>
        </tr>
        <tr>
            <td>BATAL</td>
            <td><input type="text" name="order_batal" value="<?php echo $row['order_batal']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>