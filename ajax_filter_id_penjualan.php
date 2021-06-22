<?php
  include 'koneksi.php';
  $sql = mysqli_query($koneksi,"SELECT * FROM t_penjualan_head INNER JOIN t_penjualan_detail ON t_penjualan_head.id_penjualan = t_penjualan_detail.id_penjualan where t_penjualan_detail.id_penjualan = '$_POST[id_penjualan]'");
  while ($data = mysqli_fetch_array($sql)) {
    ?>

<tr>
  <td><?= $data['id_penjualan']; ?></td>
  <td><?= $data['id_pelanggan']; ?></td>
  <td><?= $data['tanggal']; ?></td>
  <td><?= $data['id_tanaman']; ?></td>
  <td><?= $data['harga']; ?></td>
  <td><?= $data['qty']; ?></td>
  <td><?= $data['harga_total']; ?></td>
  <td><?= $data['potongan']; ?></td>
  <td><?= $data['bayar']; ?></td>
  <td><?= $data['kembali']; ?></td>
</tr>

    <?php
  }
?>