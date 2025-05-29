<?php
$thxk = new admin;
$stock_id_id = $thxk->stock_id_id($_GET['id']);
?>
<div class="container-fluid mt-2 p-0">
    <?php include 'layouts/nav_admin.php'; ?>
    <div class="container p-4 pt-0 pb-0 m-cent">
        <div class="class-thxk p-4 mt-3 mb-3">
            <h3 class="text-center"><i class="fa-duotone fa-cart-shopping"></i> จัดการระบบสินค้า</h3>
        </div>
        <div class="class-thxk text-center p-4 mb-3" data-aos="zoom-in">
            <div class="table-responsive">
                <table class="table table-striped table-dark" style="width:100%">
                    <div class="container-fluid btn btn-dark p-3 mb-3" style="border-radius: 1vh;">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add_stock_id" style="text-decoration: none;">
                            <center>
                                <i class="fa-duotone fa-cart-shopping fa-xl" style="color: #ffffff;"></i>
                                <h5 class="ms-1 mb-0 mt-2">เพิ่มสต็อกของสินค้า : #<?php echo $_GET['id'] ?></h5>
                                <?php echo $stock_id_id['id'] ?>
                            </center>
                        </a>
                    </div>
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="30%">รายละเอียด</th>
                            <th width="5%">จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($stock_id_id as $stock_id_id) { ?>
                            <tr>
                                <td><?php echo $stock_id_id['id']; ?></td>
                                <td><?php echo $stock_id_id['details']; ?></td>
                                <td>
                                    <button class="btn btn-danger del_stock_id" id_stock="<?php echo $stock_id_id['id']; ?>">ลบ</button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="add_stock_id">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content card">
            <div class="modal-header">
                <h5 class="modal-title text-dark" style="font-weight:bold" id="exampleModalLabel"><i class="fa-duotone fa-cart-shopping"></i>&nbsp;&nbsp;เพิ่มสต็อกสินค้า</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <center>
                        <h6 class="ml-auto text-black">สต็อกสินค้า <span style="color:red;" id="stock"> 0</span> ID</h6>
                        <span class="text-dark">รายละเอียด ( 1 บรรทัดต่อ 1 ไอดี )</span>
                    </center>
                    <textarea id="add_details_stock_id" placeholder="ตัวอย่างการเพิ่ม Email : TEST@TEST.COM | Pass : Password " class="text-input-none1 text-black" style="font-size:16px"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
                <button type="button" class="btn btn-success" id="submit_add_stock_id" id_product="<?php echo $_GET['id']; ?>">เพิ่มข้อมูล</button>
            </div>
        </div>
    </div>
</div>
<script src="/js/add_stock_id.js"></script>
<script src="/js/del_stock_id.js"></script>