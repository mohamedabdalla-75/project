<?php 
include '../Codes.php';
$co=new Codes();
$id=$_POST['txt_id_read']; // Waxaa loo baahan yahay update-ka
$people=$_POST['cbm_read_peo_print'];
$date=$_POST['txt_read_date'];
$timeIn=$_POST['txt_time_in'];
$timeOut=$_POST['txt_time_out'];
$oper=$_POST['oper'];

if($oper=='insert'){
	$sql="call reading_pro('$people','$date','$timeIn','$timeOut','insert',null)";
	$co->setSql($sql);
}elseif ($oper=='update') {
	$sql="call reading_pro('$people','$date','$timeIn','$timeOut','update','$id')";
	$co->setSql($sql);
}elseif ($oper=='delete') {
	$sql="call reading_pro('$people','$date','$timeIn','$timeOut','delete','$id')";
	$co->setSql($sql);
}
?>
