<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../../config/connect.php';

function dd_return($status, $message) {
    $json = ['status' => ($status ? 'success' : 'fail'), 'message' => $message];
    http_response_code(200);
    die(json_encode($json));
}

function notifyDiscord($webhookUrl, $username, $uid, $amount, $list, $game) {
    $embed = [
        "title" => "แจ้งเตือนเว็ปไซต์",
        "description" => "รายการปั้มไลค์์",
        "color" => 65280,
        "fields" => [
            ["name" => "ชื่อผู้ใช้", "value" => $username, "inline" => true],
            ["name" => "ลิ้งค์", "value" => $uid, "inline" => true],
            ["name" => "จำนวน", "value" => $amount, "inline" => true],
            ["name" => "ราคา", "value" => $list, "inline" => true],
            ["name" => "สถานะ", "value" => "สำเร็จ", "inline" => true]
        ],
        "footer" => ["text" => "Developer : XdnvcCloud"],
        "thumbnail" => [
            "url" => ""
        ]
    ];

    $data = ["embeds" => [$embed]];
    $json_data = json_encode($data);

    $ch = curl_init($webhookUrl);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($ch);
    curl_close($ch);
}

function notifyLine($accessToken, $username, $uid, $amount, $list, $game) {
    $message = "
        รายการปั้มไลค์์
        ---------------------
        ชื่อผู้ใช้: $username
        ลิ้งค์: $uid
        จำนวน: $amount
        ราคา: $list
        สถานะ: สำเร็จ
        ---------------------
        Developer: XdnvcCloud
    ";

    $data = [
        "message" => $message
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://notify-api.line.me/api/notify");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/x-www-form-urlencoded",
        "Authorization: Bearer " . $accessToken
    ));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);
}

header('Content-Type: application/json; charset=utf-8;');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SESSION['id'])) {
        dd_return(false, "เข้าสู่ระบบก่อนดำเนินการ");
    }

    if (!isset($_POST['id']) || !isset($_POST['link']) || !isset($_POST['squantity'])) {
        dd_return(false, "กรุณากรอกข้อมูลให้ครบถ่วน");
    }

    $plr1 = dd_q("SELECT * FROM users WHERE id = ?", [$_SESSION['id']])->fetch(PDO::FETCH_ASSOC);

    $idshop = $_POST['id'];
    $squantity = $_POST['squantity'];
    $link = $_POST['link'];

    $p = dd_q("SELECT * FROM socialservice WHERE id = ?", [$idshop]);

    if ($p !== false && $p->rowCount() == 1) {
        $stock_api = $p->fetch(PDO::FETCH_ASSOC);

        $product_id = $stock_api['idapi'];
        $product_point = $stock_api['price']; //ราคาเรา
        $king = $product_point / 1000;
        $king2 = $king * $squantity;

        if ($plr1['point'] >= $king2) {
            $url = 'https://iplusview.store/api';
            $headers = array();

            $data = array(
                'key' => $accktx['token'],
                'action' => "add",
                'service' => $product_id,
                'link' => $link,
                'quantity' => $squantity
            );

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            $response = curl_exec($ch);
            curl_close($ch);

            if ($response === false) {
            } else {
                $data = json_decode($response, true);
                if (isset($data['order'])) {
                    $query = dd_q("INSERT INTO history_social (link , quantity , list , amount , username , timeadd)
                    VALUES ( ? , ? , ? , ? , ? , NOW() ) 
                    ", [
                        $_POST['link'],
                        $squantity,
                        $stock_api['name'],
                        $king2,
                        $plr1['username']
                    ]);
                    notifyDiscord($notify['dis_system'], $plr1['username'], $_POST['link'], $_POST['squantity'], $king2, 'บริการปั้มไลค์');
                    notifyLine($notify['line_system'], $plr1['username'], $_POST['link'], $_POST['squantity'], $king2, 'บริการปั้มไลค์');
                    $upt = dd_q("UPDATE users SET point = point - ? WHERE id = ?", [$king2, $_SESSION['id']]);
                    dd_return(true, "ทำรายการสำเร็จ ID รายการ : {$data['order']}");
                } else {
                    notifyDiscord($notify['dis_system'], $plr1['username'], $_POST['link'], $_POST['squantity'], $king2, 'บริการปั้มไลค์');
                    notifyLine($notify['line_system'], $plr1['username'], $_POST['link'], $_POST['squantity'], $king2, 'บริการปั้มไลค์');
                    dd_return(false, $data['error']);
                }
            }
        } else {
            dd_return(false, "ยอดเงินของคุณไม่เพียงพอ");
        }
    }
} else {
    dd_return(false, "Method '{$_SERVER['REQUEST_METHOD']}' not allowed!");
}
?>