<?php
$thxk = new member;
$promptpay_config = $thxk->promptpay_config();
?>
<div class="container-fluid mt-2 p-0">
    <?php include 'layouts/nav_admin.php'; ?>
    <div class="container p-4 pt-0 pb-0 m-cent">
        <div class="class-thxk p-4 mt-3 mb-3">
            <h3 class="text-center"><i class="fa-solid fa-folder-gear fa-xl" style="color: #ffffff;"></i> ตั้งค่าระบบเติมเงิน</h3>
        </div>
        <div class="class-thxk p-2 mb-3" data-aos="zoom-in">
            <div class="container-fluid btn btn-dark p-3 mb-3" style="border-radius: 1vh;">
                <a id="submit_promptpay" style="text-decoration: none;">
                    <center>
                        <i class="fa-sharp fa-solid fa-floppy-disk fa-xl" style="color: #ffffff;"></i>
                        <h5 class="ms-1 mb-0">บันทึกการตั้งค่า</h5>
                    </center>
                </a>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container-fluid class-menu p-4 pt-5 rounded shadow-sm border-ys count-only" style="border-radius: 1vh;">
                            <div style="text-decoration: none;">
                                <center>
                                    <h5><i class="fa-duotone fa-wallet" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff;"></i> PROMPTPAY ตั้งค่าระบบเติมเงินสแกนจ่าย (tmweasy)</h5>
                                </center>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-2">ชื่อบัญชี</p>
                                        <input type="text" id="tmw_name" class="form-control mb-2" value="<?php echo $promptpay_config['tmw_name'] ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-2">เลขบัญชีธนาคาร</p>
                                        <input type="text" id="tmw_account" class="form-control mb-2" value="<?php echo $promptpay_config['tmw_account'] ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-2">เบอร์พร้อมเพย์</p>
                                        <input type="text" id="tmw_phone" class="form-control mb-2" value="<?php echo $promptpay_config['tmw_phone'] ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-2">Username <span class="text-danger">(tmweasy)</span></p>
                                        <input type="text" id="tmw_username" class="form-control mb-2" value="<?php echo $promptpay_config['tmw_username'] ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-2">Password <span class="text-danger">(tmweasy)</span></p>
                                        <input type="password" id="tmw_password" class="form-control mb-2" value="<?php echo $promptpay_config['tmw_password'] ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-2">CONID <span class="text-danger">(tmweasy)</span></p>
                                        <input type="text" id="tmw_conid" class="form-control mb-2" value="<?php echo $promptpay_config['tmw_conid'] ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-2">ACCODE <span class="text-danger">(tmweasy)</span></p>
                                        <input type="text" id="tmw_accode" class="form-control mb-2" value="<?php echo $promptpay_config['tmw_accode'] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/promptpay_config.js"></script>