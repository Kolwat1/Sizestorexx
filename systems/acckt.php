<?php
include '../config/class.php';
$thxk = new admin;

if (empty($_SESSION['id'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณาเข้าสู่ระบบ"));
} elseif (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['token'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณากรอกข้อมูลให้ครบ"));
} else {
    $acckt = $thxk->acckt($_POST['username'], $_POST['password'], $_POST['token']);
}
