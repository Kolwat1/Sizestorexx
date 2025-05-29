<?php
include '../config/class.php';
$thxk = new admin;

session_start();
if (empty($_SESSION['id'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณาเข้าสู่ระบบ"));
} elseif (empty($_POST['edit_id']) || empty($_POST['edit_idapi']) || empty($_POST['edit_name']) || empty($_POST['edit_desss']) || empty($_POST['edit_price'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณากรอกข้อมูลให้ครบ"));
} else {
    $edit_service = $thxk->edit_service($_POST['edit_id'], $_POST['edit_idapi'], $_POST['edit_name'], $_POST['edit_desss'], $_POST['edit_price']);
}