<!DOCTYPE HTML>
<html>
    <head>
        <title>Cetak Struk</title>
    </head>
        <?php
        include "koneksi.php";
        $tampil=mysqli_query($koneksi, "SELECT * FROM t_penjualan_detail  WHERE id_penjualan='$_GET[id_penjualan]'");
        $data=mysqli_fetch_array($tampil);
        ?>
        <body onload="print()">
            <center>
            <hr>
            <h2> Cetak Struk Penjualan</h2>
            <h3> Pers. Pusaka Ciamis </h3>
            </center>
            <hr>
            <p>ID. Penjualan : <?php echo"$data[id_penjualan]" ?></p>
            <p>Tanggal : <?php echo date("d-m-Y") ?></p>
            <hr>
            
            <table align="center" border="1px"; width="800px" cellpadding="5" cellspacing="0">
                <tr>
                <th>No</th>
                <th>Nama Tanaman</th>
                <th>Harga Jual</th>
                <th>Qty</th>
                <th>Harga Total</th>
                <tr>
                <?php 
                    $i=1;
                    $tampil1 = mysqli_query($koneksi, "SELECT * FROM t_penjualan_detail INNER JOIN t_tanaman ON t_penjualan_detail.id_tanaman=t_tanaman.id_tanaman WHERE id_penjualan='$_GET[id_penjualan]'");
                    while($data1 = mysqli_fetch_array($tampil1)){
                ?>
                <tr align="center">
                <td><?php echo $i++; ?></td>
                <td><?php echo"$data1[nama_tanaman]" ?></td>
                <td>Rp. <?php echo number_format($data1['harga_jual']); ?></td>
                <td><?php echo"$data1[qty]" ?></td>
                <td>Rp. <?php echo number_format($data1['harga_total']); ?></td>
                <tr>
                <?php } ?>
            </table>
            <hr>
                <p> Total Harga : Rp. <?php echo number_format($data['total_harga']); ?> </p>
                <p> Potongan : Rp. <?php echo number_format($data['potongan']); ?> </p>
                <p> Total Bayar : Rp. <?php echo number_format($data['total_bayar']); ?> </p>
                <p> Bayar :  Rp. <?php echo number_format($data['bayar']); ?> </p>
                <p> Kembalian : Rp. <?php echo number_format($data['kembali']) ?> </p>
            <hr>
            <center>
            <p> Pers. Pusaka Ciamis </p>
            <script>
                    $date=new Date();
                    document.write($date);
                </script>
            </center>
            <hr>

            <h3><a href="penjualan.php"> Kembali </a></h3>

        </body>
                    <script>
                        function print(){
                        window.print();
                    }
                        <script>

</html>