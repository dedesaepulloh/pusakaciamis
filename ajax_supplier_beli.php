<?php
  include 'koneksi.php';
  $sql = mysqli_query($koneksi,"SELECT * FROM t_pembelian_head INNER JOIN t_pembelian_detail ON t_pembelian_head.id_pembelian = t_pembelian_detail.id_pembelian where t_pembelian_detail.supplier = '$_POST[id_supplier]'");
  while ($data = mysqli_fetch_array($sql)) {
    ?>

<tr>
  <td><?= $data['id_pembelian']; ?></td>
  <td><?= $data['id_po']; ?></td>
  <td><?= $data['supplier']; ?></td>
  <td><?= $data['tanggal']; ?></td>
  <td><?= $data['tanaman']; ?></td>
  <td><?= $data['satuan']; ?></td>
  <td><?= $data['harga_beli']; ?></td>
  <td><?= $data['qty']; ?></td>
  <td><?= $data['harga_total']; ?></td>
  <td><?= $data['total_harga']; ?></td>
</tr>

    <?php
  }
?>