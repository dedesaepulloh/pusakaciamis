<?php
include "koneksi.php";
$arr=array();
$tampil=mysqli_query($koneksi,"SELECT * FROM t_tanaman where id_tanaman='$_GET[id_tanaman]'");
while($data=mysqli_fetch_array($tampil)){
	$temp = array(
	"id_tanaman" => $data["id_tanaman"],
	"harga_jual" => $data["harga_jual"]);
	array_push($arr, $temp);
}

$data= json_encode($arr);
echo"$data";
?>