<?php
$thxk = new member;
$byshopme = $thxk->byshopme_api();
$resultuser = $thxk->resultuser();
$keyapi = $byshopme['apikey_byshopme'];
$curl = curl_init();
$url = "https://byshop.me/api/history-all";
$data = array(
    'keyapi' => $keyapi,
);
curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => array(
        'Cookie: PHPSESSID=u8df3d96ij8re36ld76cl64t3p',
    ),
));
$response = curl_exec($curl);
curl_close($curl);
$load_packz = json_decode($response);
?>
<style>
    .modal-content {
        background: rgba(0, 0, 0, 0.4);
        backdrop-filter: blur(5px);
        border: none;
        color: #fff;
        border-radius: 1vw;
        padding: 20px;
        box-shadow: 2px rgba(11, 11, 11, 0.3);
    }
</style>
<div class="container-fluid mt-2 p-0">
    <?php include 'layouts/nav_admin.php'; ?>
    <div class="container p-4 pt-0 pb-0 m-cent">
        <div class="class-thxk p-3 mt-4 mb-3" data-aos="zoom-in" data-aos="700">
            <center>
                <h4>ประวัติการซื้อแอพสตรีมมิ่ง</h4>
                <hr>
            </center>
            <div class="table-responsive">
                <table id="history_app" class="table table-striped table-dark text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th width="23%">สินค้า</th>
                            <th width="30%">ข้อมูลสินค้า</th>
                            <th>ลูกค้า</th>
                            <th width="15%">เวลา</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($load_packz as $data) { ?>
                            <tr>
                                <td><?= $data->id; ?></td>
                                <td><?= $data->name; ?></td>
                                <td width="8%">
                                    <a style="width: 8rem;" type="button" class="btn btn-primary open-modal-button" data-bs-toggle="modal" data-bs-target="#data<?= $data->id; ?>" href="#">
                                        <i class="fa-duotone fa-file"></i> ดูข้อมูล
                                    </a>
                                    <a style="width: 8rem;" type="button" class="btn btn-dark open-modal-button" data-bs-toggle="modal" data-bs-target="#report<?= $data->id; ?>" href="#">
                                        <i class="fa fa-wrench"></i> แจ้งปัญหา
                                    </a>
                                </td>
                                <td><?= $data->username_customer; ?></td>
                                <!--- <td>
                                    <?php
                                    $status_fix = $data->status_fix;
                                    $status_text = '';

                                    switch ($status_fix) {
                                        case 0:
                                            $status_text = 'ปกติ';
                                            break;
                                        case 2:
                                            $status_text = 'รอแก้ไข...';
                                            break;
                                        case 3:
                                            $status_text = 'แก้ไขสำเร็จ';
                                            break;
                                        case 4:
                                            $status_text = 'หมดอายุแล้ว!';
                                            break;
                                        case 5:
                                            $status_text = 'ติดต่อแอดมิน';
                                            break;
                                        case 6:
                                            $status_text = 'กดเข้าร่วม Youtube Family ให้สำเร็จ!';
                                            break;
                                        case 7:
                                            $status_text = 'ยืนยันตัวตนที่ Gmail';
                                            break;
                                        case 8:
                                            $status_text = 'เข้าร่วม Youtube Family สำเร็จแล้ว!!';
                                            break;
                                        case 9:
                                            $status_text = 'อัพเดท (รหัสใหม่)';
                                            break;
                                        case 10:
                                            $status_text = 'OTP เกินเวลา (ติดต่อแอดมิน)';
                                            break;
                                        case 11:
                                            $status_text = 'คืนยอดเงินในระบบ สำเร็จ! (คืนยอดเงินตามจำนวนวันที่คงเหลือ) *คืนยอดผ่าน API BYShop*';
                                            break;
                                        case 12:
                                            $status_text = 'กดรับสิทธ์ Youtube Premium ใหม่!!';
                                            break;
                                        case 13:
                                            $status_text = 'แพคเกจ : จอแชร์';
                                            break;
                                        case 14:
                                            $status_text = 'อัพเดท (PINใหม่)';
                                            break;
                                        default:
                                            $status_text = 'ไม่ระบุ';
                                    }

                                    echo $status_text;
                                    ?>
                                </td> --->
                                <td><?= $data->time; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $('#history_app').dataTable({
        "order": [
            [0, 'desc']
        ],
        "columnDefs": [{
            "className": "dt-center text-white", // เพิ่ม class text-white ที่นี่
            "targets": "_all"
        }],
        "oLanguage": {
            "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
            "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
            "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
            "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
            "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
            "sSearch": "ค้นหา :",
            "aaSorting": [
                [0, 'asc']
            ],
            "oPaginate": {
                "sFirst": "หน้าแรก",
                "sPrevious": "ก่อนหน้า",
                "sNext": "ถัดไป",
                "sLast": "หน้าสุดท้าย"
            },
        }
    });
</script>
<?php foreach ($load_packz as $data) { ?>
    <div class="modal fade" id="report<?= $data->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-wrench"></i> แจ้งปัญหา</h5>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <iframe frameborder="0" height="450" src="https://report_product.byshop.me/api/report/?OrderID=<?= $data->id; ?>" width="100%"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php foreach ($load_packz as $data) { ?>
    <div class="modal fade" id="data<?= $data->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-wrench"></i> รายละเอียดสินค้า</h5>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <p><?= $data->email; ?></p>
                        <p><?= $data->password; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const modalButtons = document.querySelectorAll(".open-modal-button");

        modalButtons.forEach(button => {
            button.addEventListener("click", function() {
                const targetModalId = button.getAttribute("data-bs-target").replace("#", "");
                const targetModal = new bootstrap.Modal(document.getElementById(targetModalId));
                targetModal.show();
            });
        });
    });
</script>
<?php echo file_get_contents("https://byshop.me/buy/otp_auto/script_smsotp.php"); ?>