<?php
include '../config/class.php';
$thxk = new admin;

if (empty($_SESSION['id'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณาเข้าสู่ระบบ"));
} else {
    $topup_verifyslip = $thxk->topup_verifyslip($_POST['slipverify']);
}
