<?php
include '../config/class.php';
$thxk = new member;
if (empty($_SESSION['id'])) {
    echo json_encode(array('status' => "error", 'message' => "กรุณาเข้าสู่ระบบ"));
} elseif ($_POST['product_sell'] < $_POST['product_price']) { 
    echo json_encode(array('status' => "error", 'message' => "ราคาขาย < (น้อยกว่า) < ราคาส่ง"));
} else {
    $edit_products = $thxk->edit_products($_POST['product_code'], $_POST['product_price'], $_POST['product_image'], $_POST['product_sell'], $_POST['product_status']);
}
