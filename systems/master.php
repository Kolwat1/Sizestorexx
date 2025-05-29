<?php

if(isset($_GET['showinfo'])){

if($_POST['id']){
    $id = $_POST['id'];
    $info_shop = $connect->query("SELECT * FROM `pp_shop_stock_api` WHERE id = '".$id."'")->fetch_assoc();
    $put_data['info'] = $info_shop['info'] ;
    $put_data['price_web'] = $info_shop['price_web'] ;
    $put_data['stock'] = $info_shop['stock'] ;
}
echo json_encode($put_data);
}