<!DOCTYPE HTML>
<html>
    <head>
        <title>Cetak Struk</title>
    </head>
        <?php
        include "koneksi.php";
        $tampil=mysqli_query($koneksi, "SELECT * FROM t_preorder WHERE id_po = '$_GET[id_po]'");
        $data=mysqli_fetch_array($tampil);
        ?>
        <body onload="print()">
            <center>
            <hr>
            <h2> Cetak Struk Pre Order</h2>
            <h3> Pers. Pusaka Ciamis </h3>
            </center>
            <hr>
            <p>ID. Pre Order : <?php echo"$data[id_po]" ?></p>
            <p>Tanggal : <?php echo date("d-m-Y") ?></p>
            <hr>
            <p>Supplier : <?php echo"$data[supplier]" ?></p>
            <hr>
            
            <table align="center" border="1px"; width="800px" cellpadding="5" cellspacing="0">
                <tr>
                <th>No</th>
                <th>Nama Tanaman</th>
                <th>Qty</th>
                <th>Satuan</th>
                <tr>
                <?php 
                    $i=1;
                    $tampil1 = mysqli_query($koneksi, "SELECT * FROM t_preorder WHERE id_po = '$_GET[id_po]'");
                    while($data1 = mysqli_fetch_array($tampil1)){
                ?>
                <tr align="center">
                <td><?php echo $i++; ?></td>
                <td><?php echo"$data1[tanaman]" ?></td>
                <td><?php echo"$data1[qty]" ?></td>
                <td><?php echo"$data1[satuan]" ?></td>
                <tr>
                <?php } ?>
            </table>
            <center>
            <p> Pers. Pusaka Ciamis </p>
            <script>
                    $date=new Date();
                    document.write($date);
                </script>
            </center>
            <hr>

            <h3><a href="preorder.php"> Kembali </a></h3>

        </body>
                    <script>
                        function print(){
                        window.print();
                    }
                        <script>

</html>