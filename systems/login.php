<?php
include '../config/class.php';
$thxk = new member;

if (empty($_POST['username']) || empty($_POST['password'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณากรอกข้อมูลให้ครบ"));
}

$login = $thxk->login($_POST['username'], $_POST['password'], $_POST['recaptchaResponse']);
