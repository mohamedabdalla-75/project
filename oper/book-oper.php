<?php 
include '../Codes.php';
$co=new Codes();
$id=$_POST['txt_id_book'];
$book_name=$_POST['txt_book_names'];
$author=$_POST['cbm_book_aut_print'];
$category=$_POST['cbm_book_cat_print'];
$pages=$_POST['txt_book_pages'];
$qty=$_POST['txt_book_qty'];
$version=$_POST['txt_book_ver'];
$date=$_POST['txt_book_date'];
$shelf=$_POST['cbm_book_sh_print'];
$oper=$_POST['oper'];

if($oper=='insert'){
	$sql="call books_pro('$book_name','$author','$category','$pages','$qty','$version','$date','$shelf','insert',null)";
	$co->setSql($sql);
}else if($oper=='update'){
	$sql="call books_pro('$book_name','$author','$category','$pages','$qty','$version','$date','$shelf','update','$id')";
	$co->setSql($sql);
}else if($oper=='delete'){
	$sql="call books_pro('$book_name','$author','$category','$pages','$qty','$version','$date','$shelf','delete','$id')";
	$co->setSql($sql);
}
?>
