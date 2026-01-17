<?php 
include '../Codes.php';
$co=new Codes();
$id=$_POST['txt_id_sh'];
$shelf=$_POST['txt_sh_name'];
$oper=$_POST['oper'];
if($oper=="insert"){
	$sql="call shelves_pro('$shelf','insert',null)";
	$co->setSql($sql);
}
elseif ($oper=="update") {
	$sql="call shelves_pro('$shelf','update','$id')";
	$co->setSql($sql);
}elseif ($oper=="delete") {
	$sql="call shelves_pro('$shelf','delete','$id')";
	$co->setSql($sql);	
}
?>