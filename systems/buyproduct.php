<?php
include '../config/class.php';
$thxk = new member;

if (empty($_SESSION['id'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณาเข้าสู่ระบบก่อนทำรายการ"));
} elseif (empty($_POST['productId']) || empty($_POST['productPrice'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณากรอกข้อมูลให้ครบ"));
} else {
    $buyproduct = $thxk->buyproduct($_POST['productId'], $_POST['productPrice']);
}
