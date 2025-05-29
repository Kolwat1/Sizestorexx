<?php
$thxk = new member;
$products = $thxk->products_byshopme();
$thxk->product_apibyshop();
?>
<div class="container-fluid mt-2 p-0">
    <?php include 'layouts/nav_admin.php'; ?>
    <div class="container p-4 pt-0 pb-0 m-cent">
        <div class="class-thxk p-4 mt-3 mb-3">
            <h3 class="text-center"><i class="fa-solid fa-folder-gear fa-xl" style="color: #ffffff;"></i> ระบบสินค้า BYSHOPME</h3>
        </div>
        <div class="class-thxk p-5 mb-3" data-aos="zoom-in">
            <div class="text-end mb-3">
                <!--- <button class="btn btn-primary" id="check">ตรวจสอบยอดเงิน</button> --->
                <button class="btn btn-primary" id="updateButton"><i class="fa-duotone fa-loader fa-spin"></i> อัพเดทข้อมูล</button>
            </div>
            <div class="table-responsive">
                <table id="productTable" class="table table-striped table-dark text-center" style="width:100%"> <!--- table-striped -->
                    <thead>
                        <tr>
                            <th width="9%">รหัสสินค้า</th>
                            <th>ชื่อสินค้า</th>
                            <th>ราคาส่ง</th>
                            <th>ราคาขาย</th>
                            <th>สต็อกสินค้า</th>
                            <th>สถานะ</th>
                            <th>จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product) { ?>
                            <tr>
                                <td><?php echo $product['product_code']; ?></td>
                                <td><?php echo $product['product_name']; ?></td>
                                <td><?php echo $product['product_price']; ?></td>
                                <td><?php echo $product['product_sell']; ?></td>
                                <td><?php echo $product['api_stock']; ?></td>
                                <td> <?php if ($product['product_status'] == 'on') {
                                            echo '<span style="font-size:15px;background-color:#41B01F;" class="badge"><i class="fa-duotone fa-loader fa-spin" style="--fa-secondary-opacity: 0.6;"></i> เปิดขาย</span>';
                                        } else {
                                            echo '<span style="font-size:15px" class="badge text-bg-danger"><i class="fa-duotone fa-loader" style="--fa-secondary-opacity: 0.6;"></i> ปิดขาย</span>';
                                        }
                                        ?>
                                </td>
                                <td>
                                    <button data-id="<?php echo $product['product_code']; ?>" data-bs-toggle="modal" data-bs-target="#editProductModal" class="btn btn-thxk"><i class="fa-solid fa-pencil"></i>&nbsp;แก้ไข</button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById("updateButton").addEventListener("click", function() {
        Swal.fire({
            text: 'กำลังอัพเดทข้อมูลล่าสุด',
            icon: 'info',
            timer: 1300,
            timerProgressBar: true,
            showConfirmButton: false,
            didOpen: () => {
                setTimeout(() => {
                    Swal.fire({
                        text: 'อัพเดทข้อมูลล่าสุดเรียบร้อย',
                        icon: 'success',
                        timer: 1500,
                        timerProgressBar: true,
                        showConfirmButton: false,
                    }).then(() => {
                        location.reload();
                    });
                }, 1350); // รอเป็นเวลา 2 วินาที
            }
        });
    });
</script>


<!--- <script>
    $(document).ready(function() {
        $('#productTable').DataTable({
            "language": {
                "url": "",
                "lengthMenu": "แสดง _MENU_ รายการ",
                "search": "ค้นหารายละเอียดสินค้า",
                "info": "แสดง _START_ ถึง _END_ จากทั้งหมด _TOTAL_ รายการ",
                "paginate": {
                    "previous": "ก่อนหน้า",
                    "next": "ถัดไป"
                }
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#productTable').DataTable();
    });
</script> --->
<div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" style="font-weight:bold" id="exampleModalLabel"><i class="fa-duotone fa-pencil"></i>&nbsp;&nbsp;แก้ไขสินค้า&nbsp;</h5>
                <h5 class="modal-title text-dark" style="font-weight:bold" id="title_product_name"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-2">
                            <p class="mb-1 text-dark">รหัสสินค้า</p>
                            <input type="text" id="product_code" class="form-control" value="" disabled>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-2">
                            <p class="mb-1 text-dark">ราคาส่ง</p>
                            <input type="text" id="product_price" class="form-control" value="" disabled>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-2">
                        <p class="mb-1 text-dark">ชื่อสินค้า</p>
                        <input type="text" id="product_name" class="form-control" value="" disabled>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-2">
                        <p class="mb-1 text-dark">รูปภาพ (ลิงค์)</p>
                        <input type="text" id="product_image" class="form-control" value="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-2">
                        <p class="mb-1 text-dark">ราคาขาย</p>
                        <input type="number" id="product_sell" class="form-control" value="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-2">
                        <p class="mb-1 text-dark">สถานะ</p>
                        <select id="product_status" class="form-control">
                            <option value="on">เปิดขาย</option>
                            <option value="off">ปิดขาย</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger ps-4 pe-4" id="edit_product" data-id="">บันทึก</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on('click', '[data-bs-toggle="modal"][data-bs-target="#editProductModal"]', function() {
        var product_code = $(this).data('id');
        var product = <?php echo json_encode($products); ?>;
        var selectedData = product.find(function(item) {
            return item.product_code == product_code;
        });
        if (selectedData) {
            $("#product_code_edit").val(selectedData.product_code);
            $("#product_code").val(selectedData.product_code);
            $("#product_name").val(selectedData.product_name);
            $("#product_price").val(selectedData.product_price);
            $("#product_sell").val(selectedData.product_sell);
            $("#product_status").val(selectedData.product_status);
            $("#product_image").val(selectedData.product_image);
            $("#title_product_name").text(selectedData.product_name);
        }
    });
</script>
<script src="/js/edit_products.js"></script>