<?php 
include '../Codes.php';
$co=new Codes();
$id=$_POST['txt_id_peo']; // Waxaa loo baahan yahay update-ka
$name=$_POST['txt_peo_names'];
$tell=$_POST['txt_peo_tell'];
$sex=$_POST['sex'];
$oper=$_POST['oper'];

if($oper=='insert'){
	$sql="call people_pro('$name','$tell','$sex','insert',null)";
	$co->setSql($sql);
}elseif ($oper=='update') {
	$sql="call people_pro('$name','$tell','$sex','update','$id')";
	$co->setSql($sql);
}elseif ($oper=='delete') {
	$sql="call people_pro('$name','$tell','$sex','delete','$id')";
	$co->setSql($sql);
}
?>