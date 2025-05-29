<?php
include '../config/class.php';
$thxk = new member;
if (empty($_SESSION['id'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณาเข้าสู่ระบบ"));
} else {
    $edit_users = $thxk->edit_users($_POST['id'], $_POST['password'], $_POST['email'], $_POST['point'], $_POST['rank']);
}
