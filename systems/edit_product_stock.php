<?php
include '../config/class.php';
$thxk = new admin;

if (empty($_SESSION['id'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณาเข้าสู่ระบบ"));
} elseif (empty($_POST['id_product']) || empty($_POST['edit_name_product']) || empty($_POST['edit_price_product']) || empty($_POST['edit_details_product']) || empty($_POST['edit_image_product']) || empty($_POST['edit_category_product'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณากรอกข้อมูลให้ครบ"));
} else {
    $edit_product = $thxk->edit_product($_POST['id_product'], $_POST['edit_name_product'], $_POST['edit_price_product'], $_POST['edit_details_product'], $_POST['edit_image_product'], $_POST['edit_category_product']);
}
