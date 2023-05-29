<h2>Detail Pemesanan</h2>

<a href="Tambah" class="btn">Tambah Detail</a>

<table>
    <tr>
        <th>ID USER</th>
        <th>ID PRODUK</th>
        <th>HARGA</th>
        <th>JUMLAH</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($data["detpemesanan"] as $row) { ?>
    <tr>
        <td><?php echo $row['detail_id_order']; ?></td>
        <td><?php echo $row['detail_id_produk']; ?></td>
        <td><?php echo $row['detail_harga']; ?></td>
        <td><?php echo $row['detail_jml']; ?></td>
        <td><a href="Edit/<?php echo $row['detail_id_order']; ?>" class="btn">Edit</a></td>
        <td><a href="Delete/<?php echo $row['detail_id_order']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>