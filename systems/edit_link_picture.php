<?php
include '../config/class.php';
$thxk = new admin;
if (empty($_SESSION['id'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณาเข้าสู่ระบบ"));
} elseif (empty($_POST['id_picture'] || $_POST['edit_link_picture'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณากรอกข้อมูลให้ครบ"));
} else {
    $edit_link_picture = $thxk->edit_link_picture($_POST['id_picture'], $_POST['edit_link_picture']);
}
