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
<title>Laporan Preorder</title>
</head>
<body>
    <h2>LAPORAN PRE ORDER</h2>
    <table border="1" cellpadding="10" cellspacing="0" width="800px">
        <thead>
        <tr>
            <th>No</th>
            <th>ID Pre Order</th>
            <th>Tanggal</th>
            <th>Supplier</th>
            <th>Tanaman</th>
            <th>Qty</th>
            <th>Satuan</th>
        </tr>
        </thead>
        <tbody>';
            $no = 1; 
            if(isset($_POST['cetak'])){ 
                $awal = $_POST['tanggal_awal']; 
                $akhir = $_POST['tanggal_akhir']; 
                $sql = mysqli_query($koneksi, "SELECT * FROM t_preorder WHERE t_preorder.tanggal BETWEEN '$awal' AND '$akhir' OR id_po = '$_POST[id_po]' OR supplier = '$_POST[id_supplier]'");
            }else if(isset($_POST['cetak'])){
                $awal = $_POST['tanggal_awal']; 
                $akhir = $_POST['tanggal_akhir']; 
                $sql = mysqli_query($koneksi, "SELECT * FROM t_preorder WHERE t_preorder.tanggal BETWEEN '$awal' AND '$akhir' AND id_po = '$_POST[id_po]' AND supplier = '$_POST[id_supplier]'");
            }else{
                $sql = mysqli_query($koneksi, "SELECT * FROM t_preorder ");
            }
            while($data=mysqli_fetch_array($sql)){
                $html .= '<tr>
                    <td>'. $no++ .'</td> 
                    <td>'. $data["id_po"] .'</td> 
                    <td>'. $data["tanggal"] .'</td> 
                    <td>'. $data["supplier"] .'</td> 
                    <td>'. $data["tanaman"] .'</td> 
                    <td>'. $data["qty"] .'</td> 
                    <td>'. $data["satuan"] .'</td> 
                </tr>';
            }
$html .= '</tbody>
    </table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();

?>