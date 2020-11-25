<?php


include_once("../dbconn.php");
include_once("../funcs.php");




$table = "companies";
$id_name = "company_id";
$id = strval($_POST['company_id']);
$st_id = 1;
$del_check = db_delete($conn,$table,$id_name,$id,$st_id);

if ($del_check) {
    # code...
    $arr = array("true");
    echo json_encode($arr);
}

else{
    # code...
    $arr = array("false");
    echo json_encode($arr);
}


?>

