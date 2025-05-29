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
        "description" => "แจ้งเตือนการเติมเกม $game",
        "color" => 65280,
        "fields" => [
            ["name" => "ชื่อผู้ใช้", "value" => $username, "inline" => true],
            ["name" => "UID", "value" => $uid, "inline" => true],
            ["name" => "จำนวนเงิน", "value" => $amount, "inline" => true],
            ["name" => "รายการสั่งซื้อ", "value" => $list, "inline" => true],
            ["name" => "สถานะ", "value" => "เติมสำเร็จ", "inline" => true]
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
        เติมเกม $game
        ---------------------
        ชื่อผู้ใช้: $username
        UID: $uid
        ราคา: $amount
        สินค้า: $list
        สถานะ: เติมสำเร็จ
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
    if (isset($_SESSION['id'])) {
        if (!isset($_POST['userid'])) {
            dd_return(false, "กรุณากรอกข้อมูลให้ครบถ่วน");
        }

        $id = $_POST['id'];
        $userid = $_POST['userid'];
        $plr1 = dd_q("SELECT * FROM users WHERE id = ?", [$_SESSION['id']])->fetch(PDO::FETCH_ASSOC);

            $p = dd_q("SELECT * FROM pubg WHERE id = ?", [$id]);

            if ($p !== false && $p->rowCount() == 1) {
                $plr = $p->fetch(PDO::FETCH_ASSOC);

                if ($plr['status'] == 'เปิดขาย') {
                    $amountToDeduct = (int)$plr['amount'];

                    if ($plr1['point'] >= $amountToDeduct) {
                        
                        $loginUrl = 'https://www.khanthep.in.th/api/v1/login';

                        $loginData = array(
                            'Username' =>  $accktx['username'],
                            'Password' => $accktx['password'],
                            'g-recaptcha-response' => ''
                        );

                        $loginHeaders = array(
                            'Host: www.khanthep.in.th',
                            'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
                            'User-Agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Mobile Safari/537.36',
                            'Origin: https://www.khanthep.in.th',
                            'Referer: https://www.khanthep.in.th/login'
                        );

                        $loginContext = stream_context_create([
                            'http' => [
                                'method' => 'POST',
                                'header' => implode("\r\n", $loginHeaders),
                                'content' => http_build_query($loginData)
                            ]
                        ]);

                        $loginResponse = file_get_contents($loginUrl, false, $loginContext);
                        $phpsessid = '';
                        foreach ($http_response_header as $header) {
                            if (strpos($header, 'Set-Cookie: PHPSESSID=') !== false) {
                                $phpsessid = str_replace('Set-Cookie: PHPSESSID=', '', $header);
                                $phpsessid = strtok($phpsessid, ';');
                                break;
                            }
                        }

                        $apiUrl = 'https://www.khanthep.in.th/api/v1/termgame/pubgmobilegb';
                        $apiData = array(
                            'BuyId' => $plr['number'],
                            'Ref1' => $userid,
                            'Ref2' => 'NO_SERVER',
                            'Ref3' => 'pubgmobilegb',
                        );

                        $apiContext = stream_context_create([
                            'http' => [
                                'method' => 'POST',
                                'header' => "Content-type: application/x-www-form-urlencoded\r\n" .
                                    "Cookie: PHPSESSID=$phpsessid\r\n",
                                'content' => http_build_query($apiData)
                            ]
                        ]);

                        $apiResponse = file_get_contents($apiUrl, false, $apiContext);
                        $responseData = json_decode($apiResponse, true);
                        $statusCode = $responseData['Code'];
                        $dkdkkxx = $responseData['Message'];

                        if ($statusCode == 200) {
                            $upt = dd_q("UPDATE users SET point = point - ? WHERE id = ?", [$amountToDeduct, $_SESSION['id']]);
                            $query1 = dd_q("
                                INSERT INTO `history_game` (`topupby`, `topuptime`, `price`, `list`, `status`, `username`) 
                                VALUES (
                                    'PUBG Mobile (GLOBAL)', 
                                    NOW(), 
                                    '" . $plr['amount'] . "', 
                                    '" . $plr['name'] . "',
                                    '1', 
                                    '" . $plr1['username'] . "'
                                );
                            ");
                            notifyDiscord($notify['dis_system'], $plr1['username'], $userid, $plr['amount'], $plr['name'], 'Ace Racer');
                            notifyLine($notify['line_system'], $plr1['username'], $userid, $plr['amount'], $plr['name'], 'Ace Racer');
                            dd_return(true, "เติมตรง PUBG Mobile (GLOBAL) เข้าไอดี {$userid} ราคา {$plr['amount']} บาท สำเร็จ (รอ 1 - 15 นาที) !!");
                        } else {
                            // $addFundsQuery = dd_q("UPDATE users SET point = point + ? WHERE id = ?", [$amountToDeduct, $_SESSION['id']]);
                            dd_return(false, "เกิดข้อผิดพลาดกรุณาของใหม่อีกครั้งในภายหลัง");
                        }
                    } else {
                        dd_return(false, "ยอดเงินของคุณไม่เพียงพอ");
                    }
                } else {
                    dd_return(false, "รายการนี้ถูกปิดไว้");
                }
            } else {
                dd_return(false, "ไม่พบรายการ กรุณาลองใหม่อีกครั้ง");
            }
    } else {
        dd_return(false, "เข้าสู่ระบบก่อนดำเนินการ");
    }
} else {
    dd_return(false, "Method '{$_SERVER['REQUEST_METHOD']}' not allowed!");
}
?>