<h2>Keranjang</h2>

<a href="Tambah" class="btn">Add keranjang</a>

<table>
    <tr>
        <th>NO</th>
        <th>ID USER</th>
        <th>ID PRODUK</th>
        <th>HARGA</th>
        <th>JUMLAH</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($data["keranjang"] as $row) { ?>
    <tr>
        <td><?php echo $row['ker_id']; ?></td>
        <td><?php echo $row['ker_id_user']; ?></td>
        <td><?php echo $row['ker_id_produk']; ?></td>
        <td><?php echo $row['ker_harga']; ?></td>
        <td><?php echo $row['ker_jml']; ?></td>
        <td><a href="Edit/<?php echo $row['ker_id']; ?>" class="btn">Edit</a></td>
        <td><a href="Delete/<?php echo $row['ker_id']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>