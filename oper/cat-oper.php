<?php 
include '../Codes.php';
$co = new Codes();

$id = $_POST['txt_id_cat']; // update/delete
$cat_name = $_POST['txt_cat_names'];
$oper = $_POST['oper'];

$sql = $co->generateSQL([
    "categories_pro",   // magaca procedure
    $cat_name,          // 1st param
    $oper,              // 2nd param
    $id                 // 3rd param
]);
$co->setSql($sql);
?>
