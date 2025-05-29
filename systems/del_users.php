<?php
include '../config/class.php';
$thxk = new admin;
if(empty($_SESSION['id'])){
    echo json_encode(array('status'=>"error",'message'=>"กรุณาเข้าสู่ระบบ"));
}elseif($_POST['type'] == "del_users"){
    if(empty($_POST['id_users'])){
        echo json_encode(array('status'=>"error",'message'=>"กรุณากรอกข้อมูลให้ครบ"));
    }else{
        $del_users = $thxk->del_users($_POST['id_users']);
    }
}