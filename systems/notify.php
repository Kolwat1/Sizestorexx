<?php
include '../config/class.php';
$thxk = new admin;
if (empty($_SESSION['id'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณาเข้าสู่ระบบ"));
} else {
    $setting_notify = $thxk->setting_notify($_POST['dis_registered'], $_POST['dis_login'], $_POST['dis_topup'], $_POST['dis_buy'], $_POST['dis_system'], $_POST['line_registered'], $_POST['line_login'], $_POST['line_topup'], $_POST['line_buy'], $_POST['line_system']);
}
