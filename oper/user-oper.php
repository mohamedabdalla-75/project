<?php 
include '../Codes.php';
$co=new Codes();
$id=$_POST['txt_id_user'];
$username=$_POST['txt_user_name'];
$password=$_POST['txt_user_pass'];
$tell=$_POST['txt_user_tell'];
$type=$_POST['type'];
$image=$_POST['txt_user_image'];
$oper=$_POST['oper'];

if($oper=='insert'){
	$sql="call user_info_pro('$username','$password','$tell','$type','$image','insert',null)";
	$co->setSql($sql);
}else if($oper=='update'){
	$sql="call user_info_pro('$username','$password','$tell','$type','$image','update','$id')";
	$co->setSql($sql);
}else if($oper=='delete'){
	$sql="call user_info_pro('$username','$password','$tell','$type','$image','delete','$id')";
	$co->setSql($sql);
}
?>