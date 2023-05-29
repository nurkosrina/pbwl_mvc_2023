<h2>Kategori</h2>

<a href="Tambah" class="btn">Add Category</a>

<table>
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>KETERANGAN</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($data["kategori"] as $row) { ?>
    <tr>
        <td><?php echo $row['kat_id']; ?></td>
        <td><?php echo $row['kat_nama']; ?></td>
        <td><?php echo $row['kat_keterangan']; ?></td>
        <td><a href="Edit/<?php echo $row['kat_id']; ?>" class="btn">Edit</a></td>
        <td><a href="Delete/<?php echo $row['kat_id']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>