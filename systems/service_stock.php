<?php
include '../config/class.php';
$thxk = new admin;

if (empty($_SESSION['id'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณาเข้าสู่ระบบ"));
} elseif (empty($_POST['idapi']) || empty($_POST['name']) || empty($_POST['des']) || empty($_POST['price'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณากรอกข้อมูลให้ครบ"));
} else {
    $add_service = $thxk->add_service($_POST['idapi'], $_POST['name'], $_POST['des'], $_POST['price']);
}
