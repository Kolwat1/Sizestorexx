<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../config/connect.php';

function dd_return($status, $message) {
    $json = ['message' => $message];

    if ($status) {
        http_response_code(200);
        die(json_encode($json));
    } else {
        http_response_code(400);
        die(json_encode($json));
    }
}

header('Content-Type: application/json; charset=utf-8;');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_SESSION['id'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $img = $_POST['img'];
        $link = $_POST['link'];
        $des = $_POST['des'];
        $status = $_POST['status'];
        $table = $_POST['table'];

        if (!empty($id) && !empty($name) && !empty($img) && !empty($link) && !empty($des) && !empty($status) && !empty($table)) {
            $q_1 = dd_q('SELECT * FROM users WHERE id = ? AND rank = 1', [$_SESSION['id']]);
            
            if ($q_1->rowCount() >= 1) {
                $update = dd_q("UPDATE $table SET name = ?, img = ?, link = ?, des = ?, status = ? WHERE id = ?", [
                    $name,
                    $img,
                    $link,
                    $des,
                    $status,
                    $id,
                ]);

                if ($update) {
                    dd_return(true, "บันทึกสำเร็จ");
                } else {
                    dd_return(false, "SQL ผิดพลาด");
                }
            } else {
                dd_return(false, "เซสชั่นผิดพลาด โปรดล็อกอินใหม่");
                session_destroy();
            }
        } else {
            dd_return(false, "กรุณากรอกข้อมูลให้ครบ");
        }
    } else {
        dd_return(false, "เข้าสู่ระบบก่อน");
    }
} else {
    dd_return(false, "Method '{$_SERVER['REQUEST_METHOD']}' not allowed!");
}
?>