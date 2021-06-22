<?php
  include 'koneksi.php';
  $sql = mysqli_query($koneksi,"SELECT * FROM t_preorder where id_po = '$_POST[id_po]'");
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