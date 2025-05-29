<?php
include '../config/class.php';
$thxk = new admin;

if (empty($_SESSION['id'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณาเข้าสู่ระบบ"));
} elseif (empty($_POST['username_byshopme']) || empty($_POST['apikey_byshopme'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณากรอกข้อมูลให้ครบ"));
} else {
    $byshopme = $thxk->byshopme($_POST['username_byshopme'], $_POST['apikey_byshopme']);
}
