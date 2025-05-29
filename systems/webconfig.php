<?php
include '../config/class.php';
$thxk = new admin;

if (empty($_SESSION['id'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณาเข้าสู่ระบบ"));
} elseif (empty($_POST['name']) || empty($_POST['logo_icon']) || empty($_POST['logo']) || empty($_POST['background']) || empty($_POST['description']) || empty($_POST['keywords']) || empty($_POST['main_color']) || empty($_POST['sec_color']) || empty($_POST['font_color'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณากรอกข้อมูลให้ครบ"));
} else {
    $webconfig = $thxk->webconfig($_POST['name'], $_POST['logo_icon'], $_POST['logo'], $_POST['background'], $_POST['description'], $_POST['keywords'], $_POST['main_color'], $_POST['sec_color'], $_POST['font_color']);
}
