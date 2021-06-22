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
<title>Laporan Penjualan</title>
</head>
<body>
    <h2>LAPORAN PENJUALAN</h2>
    <table border="1" cellpadding="10" cellspacing="0" width="800px">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Penjualan</th>
                <th>ID Pelanggan</th>
                <th>Tanggal</th>
                <th>ID Tanaman</th>
                <th>Harga</th>
                <th>Potongan</th>
                <th>Qty</th>
                <th>Harga Total</th>
            </tr>
        </thead>
        <tbody>';
            $no = 1; 
            if(isset($_POST['cetak'])){ 
                $awal = $_POST['tanggal_awal']; 
                $akhir = $_POST['tanggal_akhir']; 
                $sql = mysqli_query($koneksi, "SELECT * FROM t_penjualan_head INNER JOIN t_penjualan_detail ON t_penjualan_head.id_penjualan = t_penjualan_detail.id_penjualan WHERE tanggal BETWEEN '$awal' AND '$akhir' OR t_penjualan_detail.id_penjualan = '$_POST[id_penjualan]' OR id_pelanggan = '$_POST[id_pelanggan]' "); 
            }else if(isset($_POST['cetak'])){
                $awal = $_POST['tanggal_awal']; 
                $akhir = $_POST['tanggal_akhir']; 
                $sql = mysqli_query($koneksi, "SELECT * FROM t_penjualan_head INNER JOIN t_penjualan_detail ON t_penjualan_head.id_penjualan = t_penjualan_detail.id_penjualan WHERE tanggal BETWEEN '$awal' AND '$akhir' AND t_penjualan_detail.id_penjualan = '$_POST[id_penjualan]' AND id_pelanggan = '$_POST[id_pelanggan]' "); 
            }else{ $sql = mysqli_query($koneksi,"SELECT * FROM t_penjualan_head INNER JOIN t_penjualan_detail ON t_penjualan_head.id_penjualan = t_penjualan_detail.id_penjualan"); 
            } 
            while($data=mysqli_fetch_array($sql)){ 

                $html .= '<tr>
                    <td>'. $no++ .'</td> 
                    <td>'. $data["id_penjualan"] .'</td>  
                    <td>'. $data["id_pelanggan"] .'</td>  
                    <td>'. $data["tanggal"] .'</td> 
                    <td>'. $data["id_tanaman"] .'</td> 
                    <td>Rp. '. number_format($data["harga"]) .'</td> 
                    <td>'. $data["potongan"] .'</td> 
                    <td>'. $data["qty"] .'</td> 
                    <td>Rp. '. number_format($data["harga_total"]) .'</td> 
                </tr>';
            }
$html .= '</tbody>
    </table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();

?>