<?php
include '../config/class.php';
$thxk = new member;

if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['password_confirm'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณากรอกข้อมูลให้ครบ"));
} elseif ($_POST['password'] != $_POST['password_confirm']) {
    echo json_encode(array('status' => "error", 'message' => "กรอกรหัสผ่านไม่ตรงกัน"));
} elseif (!preg_match('/^[a-zA-Z0-9]+$/', $_POST['username'])) {
    echo json_encode(array('status' => "error", 'message' => "ชื่อผู้ใช้ต้องประกอบด้วยตัวอักษรภาษาอังกฤษและตัวเลขเท่านั้น"));
} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo json_encode(array('status' => "error", 'message' => "รูปแบบอีเมล์ไม่ถูกต้อง"));
} elseif (strlen($_POST['password']) <= 6) {
    echo json_encode(array('status' => "error", 'message' => "รหัสผ่านต้องมีความยาวมากกว่า 6 ตัวอักษร"));
} else {
    // เรียกใช้ฟังก์ชัน register และส่ง reCAPTCHA response ไปด้วย
    $register = $thxk->register($_POST['username'], $_POST['email'], $_POST['password'], $_POST['recaptchaResponse']);
}
