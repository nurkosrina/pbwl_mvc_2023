<h2>Produk</h2>

<a href="Tambah" class="btn">Tambah Produk</a>

<table>
    <tr>
        <th>NO</th>
        <th>ID KATEGORI</th>
        <th>ID USER</th>
        <th>KODE</th>
        <th>NAMA</th>
        <th>HARGA</th>
        <th>KETERANGAN</th>
        <th>STOCK</th>
        <th>PHOTO</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($data["produk"] as $row) { ?>
    <tr>
        <td><?php echo $row['produk_id']; ?></td>
        <td><?php echo $row['produk_id_kat']; ?></td>
        <td><?php echo $row['produk_id_user']; ?></td>
        <td><?php echo $row['produk_kode']; ?></td>
        <td><?php echo $row['produk_nama']; ?></td>
        <td><?php echo $row['produk_hrg']; ?></td>
        <td><?php echo $row['produk_keterangan']; ?></td>
        <td><?php echo $row['produk_stock']; ?></td>
        <td><?php echo $row['produk_photo']; ?></td>
        <td><a href="Edit/<?php echo $row['produk_id']; ?>" class="btn">Edit</a></td>
        <td><a href="Delete/<?php echo $row['produk_id']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>