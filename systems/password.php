<?php
include '../config/class.php';
$thxk = new member;
if (empty($_SESSION['id'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณาเข้าสู่ระบบ"));
} elseif (empty($_POST['password_old'] and $_POST['password_new'] and $_POST['password_new_confirm'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณากรอกข้อมูลให้ครบ"));
} elseif ($_POST['password_new'] != $_POST['password_new_confirm']) {
    echo json_encode(array('status' => "error", 'message' => "กรุณากรอกรหัสให้ตรงกัน"));
} else {
    $passsword = $thxk->password($_POST['password_old'], $_POST['password_new'], $_POST['recaptchaResponse']);
}
