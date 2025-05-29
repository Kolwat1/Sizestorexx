<?php
include '../config/class.php';
$thxk = new admin;
if (empty($_SESSION['id'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณาเข้าสู่ระบบ"));
} elseif (empty($_POST['link_picture'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณากรอกข้อมูลให้ครบ"));
} else {
    $link_picture = $thxk->link_picture($_POST['link_picture']);
}
