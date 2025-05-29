<?php
include '../config/class.php';
$thxk = new admin;

if (empty($_SESSION['id'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณาเข้าสู่ระบบ"));
} else {
    $topup_config = $thxk->topup_config($_POST['wallet_phone'], $_POST['wallet_fee'], $_POST['name_account'], $_POST['name_bank'], $_POST['number_bank'], $_POST['client_id'], $_POST['client_secret'], $_POST['client_account']);
}
