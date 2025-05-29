<?php
include '../config/class.php';
$thxk = new admin;
if(empty($_SESSION['id'])){
    echo json_encode(array('status'=>"error",'message'=>"กรุณาเข้าสู่ระบบ"));
}elseif($_POST['type'] == "del_picture"){
    if(empty($_POST['id_picture'])){
        echo json_encode(array('status'=>"error",'message'=>"กรุณากรอกข้อมูลให้ครบ"));
    }else{
        $del_picture = $thxk->del_link_picture($_POST['id_picture']);
    }
}