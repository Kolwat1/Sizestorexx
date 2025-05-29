<?php
$thxk = new member;
$byshopme = $thxk->byshopme_api();

function check_balance_api()
{
    $thxk = new member;
    $byshopme = $thxk->byshopme_api();
    $apiUrl = 'https://byshop.me/api/money';
    $apiKey = $byshopme['apikey_byshopme']; // ใช้ API Key จาก $byshopme
    $postData = array(
        'keyapi' => $apiKey,
        'action' => 'check_balance'
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
    $response = curl_exec($ch);
    if ($response === false) {
        return false;
    }

    $responseData = json_decode($response, true);
    if (isset($responseData['status']) && $responseData['status'] === 'success' && isset($responseData['money'])) {
        return $responseData['money'];
    } else {
        return false;
    }
}
?>
<div class="container-fluid mt-2 p-0">
    <?php include 'layouts/nav_admin.php'; ?>
    <div class="container p-4 pt-0 pb-0 m-cent">
        <div class="class-thxk p-4 mt-3 mb-3">
            <h3 class="text-center"><i class="fa-solid fa-folder-gear fa-xl" style="color: #ffffff;"></i> ตั้งค่าระบบ API (BYSHOPME)</h3>
        </div>
        <div class="class-thxk p-4 mb-3" data-aos="zoom-in">
            <div class="container-fluid btn btn-dark p-3 mb-3" style="border-radius: 1vh;">
                <a id="submit_webconfig" style="text-decoration: none;">
                    <center>
                        <i class="fa-sharp fa-solid fa-floppy-disk fa-xl" style="color: #ffffff;"></i>
                        <h5 class="ms-1 mb-0">บันทึกการตั้งค่า</h5>
                    </center>
                </a>
            </div>
            <div class="col-lg-12 m-cent">
                <div class="text-center" style="font-size:24px;">
                    <?php $balance = check_balance_api();
                    if ($balance !== false) {
                        echo '<p>ยอดเงินคงเหลือ  ' . $balance . '</p>';
                    } else {
                        echo '<p>ไม่สามารถดึงข้อมูลยอดเงินได้</p>';
                    }
                    $money = $balance; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-2">
                        <p class="mb-1">USERNAME <span class="text-danger">* (BYSHOPME)</span></p>
                        <input type="text" id="username-byshopme" class="form-control" value="<?php echo $byshopme['username_byshopme'] ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-2">
                        <p class="mb-1">APIKEY <span class="text-danger">* (BYSHOPME)</span></p>
                        <input type="text" id="apikey-byshopme" class="form-control" value="<?php echo $byshopme['apikey_byshopme'] ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/byshopme.js"></script>