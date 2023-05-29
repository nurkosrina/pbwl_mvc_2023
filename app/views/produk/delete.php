<?php
$row = $data['produk'];
?>

<h2>Delete produk</h2>

<form action="../Proses" method="post">
<input type="hidden" name="produk_id" value="<?php echo $row['produk_id']; ?>">
    <table>
    <table>
        <tr>
            <td>ID KATEGORI</td>
            <td><input type="text" name="produk_id_kat" value="<?php echo $row['produk_id_kat']; ?>"></td>
        </tr>
        <tr>
            <td>ID USER</td>
            <td><input type="text" name="produk_id_user" value="<?php echo $row['produk_id_user']; ?>"></td>
        </tr>
        <tr>
            <td>KODE</td>
            <td><input type="text" name="produk_kode" value="<?php echo $row['produk_kode']; ?>"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="produk_nama" value="<?php echo $row['produk_nama']; ?>"></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="produk_hrg" value="<?php echo $row['produk_hrg']; ?>"></td>
        </tr>
        <tr>
            <td>KETERANGAN</td>
            <td><input type="text" name="produk_keterangan" value="<?php echo $row['produk_keterangan']; ?>"></td>
        </tr>
        <tr>
            <td>STOCK</td>
            <td><input type="text" name="produk_stock" value="<?php echo $row['produk_stock']; ?>"></td>
        </tr>
        <tr>
            <td>PHOTO</td>
            <td><input type="text" name="produk_photo" value="<?php echo $row['produk_photo']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_delete" value="HAPUS"></td>
        </tr>
    </table>
</form>