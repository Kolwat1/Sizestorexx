<?php
include '../config/class.php';
$thxk = new admin;
if (empty($_SESSION['id'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณาเข้าสู่ระบบ"));
} elseif (empty($_POST['id_card'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณากรอกข้อมูลให้ครบ"));
} else {
    $buyproduct_stock = $thxk->buyproduct_stock($_POST['id_card']);
}
