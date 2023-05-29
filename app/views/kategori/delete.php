<?php
$row = $data['kategori'];
?>

<h2>Delete kategory</h2>

<form action="../Proses" method="post">
    <input type="hidden" name="kat_id" value="<?php echo $row['kat_id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="kat_nama" value="<?php echo $row['kat_nama']; ?>"></td>
        </tr>
        <tr>
            <td>KETERANGAN</td>
            <td><textarea name="kat_keterangan" id="" cols="30" rows="10"><?php echo $row['kat_keterangan']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_delete" value="HAPUS"></td>
        </tr>
    </table>
</form>