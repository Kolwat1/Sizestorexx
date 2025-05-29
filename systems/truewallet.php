<?php
include '../config/class.php';
$thxk = new admin;

if (empty($_SESSION['id'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณาเข้าสู่ระบบ"));
} elseif (empty($_POST['link_wallet'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณากรอกลิงค์ซองอั่งเปาให้ถูกต้อง"));
} else {
    $topup_wallet = $thxk->topup_wallet($_POST['link_wallet']);
}
