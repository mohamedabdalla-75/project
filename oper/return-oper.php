<?php 
include '../Codes.php';
$co=new Codes();
$oper=$_POST['txt_id_ret'];
$people=$_POST['cbm_ret_peobar_print'];
$retdate=$_POST['txt_ret_retdate'];
$desc=$_POST['txt_aut_names'];
$oper=$_POST['oper'];
if($oper=="insert"){
    $sql="call return_book_pro('$people','$retdate','$desc','insert',null)";
    $co->setSql($sql);
}else if($oper=="update"){
    $sql="call return_book_pro('$people','$retdate','$desc','update','$id')";
    $co->setSql($sql);
}else if($oper=="delete"){
    $sql="call return_book_pro('$people','$retdate','$desc','delete','$id')";
    $co->setSql($sql);
}
?>