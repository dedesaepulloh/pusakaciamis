<?php
  include 'koneksi.php';
  $sql = mysqli_query($koneksi,"SELECT * FROM t_preorder where tanggal between '$_POST[tanggal_awal]' and '$_POST[tanggal_akhir]'");
  while ($data = mysqli_fetch_array($sql)) {
    ?>

<tr>
  <td><?= $data['id_po']; ?></td>
  <td><?= $data['tanggal']; ?></td>
  <td><?= $data['supplier']; ?></td>
  <td><?= $data['tanaman']; ?></td>
  <td><?= $data['qty']; ?></td>
  <td><?= $data['satuan']; ?></td>
</tr>

    <?php
  }
?>