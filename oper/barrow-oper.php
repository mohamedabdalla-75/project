<?php 
include '../Codes.php';
$co=new Codes();
$id=$_POST['txt_id_bar'];
$people=$_POST['cbm_bar_peo_print'];
$book=$_POST['cbm_bar_book_print'];
$barrow=$_POST['txt_bar_bardate'];
$promise=$_POST['txt_pro_prodate'];
$oper=$_POST['oper'];

if($oper=="insert"){
	$sql="call barrow_book_pro('$people','$book','$barrow','$promise','insert',null)";
	$co->setSql($sql);
}else if($oper=="update"){
	$sql="call barrow_book_pro('$people','$book','$barrow','$promise','update','$id')";
	$co->setSql($sql);
}else if($oper=="delete"){
	$sql="call barrow_book_pro('$people','$book','$barrow','$promise','delete','$id')";
	$co->setSql($sql);
}
 ?>
 