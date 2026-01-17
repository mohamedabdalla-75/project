<?php 
include '../Codes.php';
$co=new Codes();
$id=$_POST['txt_id_aut'];
$name=$_POST['txt_aut_name'];
$desc=$_POST['txt_aut_des'];
$oper=$_POST['oper'];

if($oper=='insert'){
	$sql="call authors_pro('$name','$desc','insert',null)";
	$co->setSql($sql);
}else if($oper=='update'){
	$sql="call authors_pro('$name','$desc','update','$id')";
	$co->setSql($sql);
}else if($oper=='delete'){
	$sql="call authors_pro('$name','$desc','delete','$id')";
	$co->setSql($sql);
}
?>