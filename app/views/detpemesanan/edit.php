<?php
$row = $data['detpemesanan'];
?>

<h2>Edit detail pemesanan</h2>

<form action="../Proses" method="post">
    <input type="hidden" name="detail_id_order" value="<?php echo $row['detail_id_order']; ?>">
    <table>
        <tr>
            <td>ID PRODUK</td>
            <td><input type="text" name="detail_id_produk" value="<?php echo $row['detail_id_produk']; ?>"></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="detail_harga" value="<?php echo $row['detail_harga']; ?>"></td>
        </tr>
        <tr>
            <td>JUMLAH</td>
            <td><input type="text" name="detail_jml" value="<?php echo $row['detail_jml']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>