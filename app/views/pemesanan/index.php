<h2>Pemesanan</h2>

<a href="Tambah" class="btn">Add pemesanan</a>

<table>
    <tr>
        <th>NO</th>
        <th>ID USER</th>
        <th>TANGGAL</th>
        <th>KODE</th>
        <th>TTL</th>
        <th>KURIR</th>
        <th>ONGKIR</th>
        <th>BAYAR DEADLINE</th>
        <th>BATAL</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($data["pemesanan"] as $row) { ?>
    <tr>
        <td><?php echo $row['order_id']; ?></td>
        <td><?php echo $row['order_id_user']; ?></td>
        <td><?php echo $row['order_tgl']; ?></td>
        <td><?php echo $row['order_kode']; ?></td>
        <td><?php echo $row['order_ttl']; ?></td>
        <td><?php echo $row['order_kurir']; ?></td>
        <td><?php echo $row['order_ongkir']; ?></td>
        <td><?php echo $row['order_byr_deadline']; ?></td>
        <td><?php echo $row['order_batal']; ?></td>
        <td><a href="Edit/<?php echo $row['order_id']; ?>" class="btn">Edit</a></td>
        <td><a href="Delete/<?php echo $row['order_id']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>