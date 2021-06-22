<?php
include "koneksi.php";
$arr=array();
$tampil=mysqli_query($koneksi,"SELECT * FROM t_preorder where id_po='$_GET[id_po]'");
while($data=mysqli_fetch_array($tampil)){
	$temp = array(
	"id_po" => $data["id_po"],
	"supplier" => $data["supplier"]);
	array_push($arr, $temp);
}

$data= json_encode($arr);
echo"$data";
?>