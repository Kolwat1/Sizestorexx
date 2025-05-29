<?php
include '../config/class.php';
$thxk = new admin;

if (empty($_SESSION['id'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณาเข้าสู่ระบบ"));
} elseif (empty($_POST['name_product']) || empty($_POST['price_product']) || empty($_POST['details_product']) || empty($_POST['image_product'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณากรอกข้อมูลให้ครบ"));
} else {
    $add_product = $thxk->add_product($_POST['name_product'], $_POST['price_product'], $_POST['details_product'], $_POST['image_product']);
}
