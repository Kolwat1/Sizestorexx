<?php
$thxk = new member;
$notify_config = $thxk->notify_config();
?>
<div class="container-fluid mt-2 p-0">
    <?php include 'layouts/nav_admin.php'; ?>
    <div class="container p-4 pt-0 pb-0 m-cent">
        <div class="class-thxk mt-4 p-4 mb-3" data-aos="zoom-in">
            <div class="container-fluid btn btn-dark p-3 mb-3" style="border-radius: 1vh;">
                <a id="submit_notify" style="text-decoration: none;">
                    <center>
                        <i class="fa-sharp fa-solid fa-floppy-disk fa-xl" style="color: #ffffff;"></i>
                        <h5 class="ms-1 mb-0">บันทึกการตั้งค่า</h5>
                    </center>
                </a>
            </div>
            <div class="col-md-12 mt-3">
                <h5 class="text-center">แจ้งเตือน DISCORD WEBHOOK (URL)<span style="font-size:15px;background-color:#41B01F;">
                </h5>
                <hr>
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <p class="m-0"><i class="fa-brands fa-discord"></i> แจ้งเตือนสมัครสมาชิก</p> <!--- NOTIFY DISCORD --->
                        <input type="text" id="dis_registered" class="form-control" value="<?php echo $notify_config['dis_registered']; ?>">
                    </div>
                    <div class="col-md-6 mb-2">
                        <p class="m-0"><i class="fa-brands fa-discord"></i> แจ้งเตือนเข้าสู่ระบบ</p> <!--- NOTIFY DISCORD --->
                        <input type="text" id="dis_login" class="form-control" value="<?php echo $notify_config['dis_login']; ?>">
                    </div>
                    <div class="col-md-6 mb-2">
                        <p class="m-0"><i class="fa-brands fa-discord"></i> แจ้งเตือนเติมเงิน</p> <!--- NOTIFY DISCORD --->
                        <input type="text" id="dis_topup" class="form-control" value="<?php echo $notify_config['dis_topup']; ?>">
                    </div>
                    <div class="col-md-6 mb-2">
                        <p class="m-0"><i class="fa-brands fa-discord"></i> แจ้งเตือนซื้อสินค้า</p> <!--- NOTIFY DISCORD --->
                        <input type="text" id="dis_buy" class="form-control" value="<?php echo $notify_config['dis_buy']; ?>">
                    </div>
                    <div class="col-md-6 mb-2">
                        <p class="m-0"><i class="fa-brands fa-discord"></i> แจ้งเตือนเติมเกมและปั้มโซเชียล</p> <!--- NOTIFY DISCORD --->
                        <input type="text" id="dis_system" class="form-control" value="<?php echo $notify_config['dis_system']; ?>">
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <h5 class="text-center">แจ้งเตือน LINE NOTIFY (TOKEN)<span style="font-size:15px;background-color:#41B01F;">
                </h5>
                <hr>
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <p class="m-0"><i class="fa-brands fa-line fa-xl"></i> แจ้งเตือนสมัครสมาชิก</p> <!--- NOTIFY LINE --->
                        <input type="text" id="line_registered" class="form-control" value="<?php echo $notify_config['line_registered']; ?>">
                    </div>
                    <div class="col-md-6 mb-2">
                        <p class="m-0"><i class="fa-brands fa-line fa-xl"></i> แจ้งเตือนเข้าสู่ระบบ</p> <!--- NOTIFY LINE --->
                        <input type="text" id="line_login" class="form-control" value="<?php echo $notify_config['line_login']; ?>">
                    </div>
                    <div class="col-md-6 mb-2">
                        <p class="m-0"><i class="fa-brands fa-line fa-xl"></i> แจ้งเตือนเติมเงิน</p> <!--- NOTIFY LINE --->
                        <input type="text" id="line_topup" class="form-control" value="<?php echo $notify_config['line_topup']; ?>">
                    </div>
                    <div class="col-md-6 mb-2">
                        <p class="m-0"><i class="fa-brands fa-line fa-xl"></i> แจ้งเตือนซื้อสินค้า</p> <!--- NOTIFY LINE --->
                        <input type="text" id="line_buy" class="form-control" value="<?php echo $notify_config['line_buy']; ?>">
                    </div>
                    <div class="col-md-6 mb-2">
                        <p class="m-0"><i class="fa-brands fa-line fa-xl"></i> แจ้งเตือนเติมเกมและปั้มโซเชียล</p> <!--- NOTIFY LINE --->
                        <input type="text" id="line_system" class="form-control" value="<?php echo $notify_config['line_system']; ?>">
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <span class="text-center" style="color:red;">ถ้าไม่ต้องการให้แจ้งเตือน กรุณาใส่ค่า ( - หรือเครื่องหมายลบ ) ไว้ในช่องนะครับ</span>
            </div>
        </div>
    </div>
</div>
<script src="/js/notify.js"></script>