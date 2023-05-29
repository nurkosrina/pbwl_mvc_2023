<?php
$row = $data['user'];
?>

<h2>Edit user</h2>

<form action="../Proses" method="post">
    <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
    <table>
    <tr>
            <td>EMAIL</td>
            <td><input type="text" name="user_email" value="<?php echo $row['user_email']; ?>"></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input name="user_password" type="text"value="<?php echo $row['user_password']; ?>"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input name="user_nama" type="text"value="<?php echo $row['user_nama']; ?>"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input name="user_alamat" type="text"value="<?php echo $row['user_alamat']; ?>"></td>
        </tr>
        <tr>
            <td>HP</td>
            <td><input name="user_hp" type="text"value="<?php echo $row['user_hp']; ?>"></td>
        </tr>
        <tr>
            <td>POS</td>
            <td><input name="user_pos" type="text"value="<?php echo $row['user_pos']; ?>"></td>
        </tr>
        <tr>
            <td>ROLE</td>
            <td><input name="user_role" type="text"value="<?php echo $row['user_role']; ?>"></td>
        </tr>
        <tr>
            <td>AKTIF</td>
            <td><input name="user_aktif" type="text"value="<?php echo $row['user_aktif']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>