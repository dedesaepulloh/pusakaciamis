<?php

require_once __DIR__ . '/vendor/autoload.php';
include "koneksi.php";

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Laporan Pembelian</title>
</head>
<body>
    <h2>LAPORAN PENJUALAN</h2>
    <table border="1" cellpadding="10" cellspacing="0" width="900px">
        <thead>
            <tr>
            <th>No</th>
            <th>ID Pembelian</th>
            <th>ID PO</th>
            <th>Supplier</th>
            <th>Tanggal</th>
            <th>Tanaman</th>
            <th>Satuan</th>
            <th>Harga Beli</th>
            <th>Qty</th>
            <th>Harga Total</th>
            <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>';
            $no = 1; 
            if(isset($_POST['cetak'])){ 
                $awal = $_POST['tanggal_awal']; 
                $akhir = $_POST['tanggal_akhir']; 
                $sql = mysqli_query($koneksi, "SELECT * FROM t_pembelian_head INNER JOIN t_pembelian_detail ON t_pembelian_head.id_pembelian = t_pembelian_detail.id_pembelian WHERE tanggal BETWEEN '$awal' AND '$akhir' OR t_pembelian_detail.id_pembelian = '$_POST[id_pembelian]' OR supplier = '$_POST[id_supplier]'"); 
            }else if(isset($_POST['cetak'])){
                $awal = $_POST['tanggal_awal']; 
                $akhir = $_POST['tanggal_akhir']; 
                $sql = mysqli_query($koneksi, "SELECT * FROM t_pembelian_head INNER JOIN t_pembelian_detail ON t_pembelian_head.id_pembelian = t_pembelian_detail.id_pembelian WHERE tanggal BETWEEN '$awal' AND '$akhir' AND t_pembelian_detail.id_pembelian = '$_POST[id_pembelian]' AND supplier = '$_POST[id_supplier]'");
            }else{ $sql = mysqli_query($koneksi,"SELECT * FROM t_pembelian_head INNER JOIN t_pembelian_detail ON t_pembelian_head.id_pembelian = t_pembelian_detail.id_pembelian"); 
            } 
            while($data=mysqli_fetch_array($sql)){ 

                $html .= '<tr>
                    <td>'. $no++ .'</td> 
                    <td>'. $data["id_pembelian"] .'</td>  
                    <td>'. $data["id_po"] .'</td>  
                    <td>'. $data["supplier"] .'</td>  
                    <td>'. $data["tanggal"] .'</td> 
                    <td>'. $data["tanaman"] .'</td> 
                    <td>'. $data["satuan"] .'</td> 
                    <td>Rp. '. number_format($data["harga_beli"]) .'</td> 
                    <td>'. $data["qty"] .'</td> 
                    <td>Rp. '. number_format($data["harga_total"]) .'</td> 
                    <td>Rp. '. number_format($data["total_harga"]) .'</td> 
                </tr>';
            }
$html .= '</tbody>
    </table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();

?>