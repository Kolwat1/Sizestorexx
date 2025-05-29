<?php
$thxk = new member;
$card_product = $thxk->card_product();
$product_category = $thxk->show_category();
?>
<div class="container-fluid mt-2 p-0">
    <?php include 'layouts/nav_admin.php'; ?>
    <div class="container p-4 pt-0 pb-0 m-cent">
        <div class="class-thxk p-4 mt-3 mb-3">
            <h3 class="text-center"><i class="fa-duotone fa-cart-shopping"></i> จัดการระบบสินค้า</h3>
        </div>
        <div class="class-thxk text-center p-4 mb-3" data-aos="zoom-in">
            <div class="table-responsive">
                <table id="productstorck" class="table table-striped table-dark" style="width:100%">
                    <div class="container-fluid btn btn-dark p-3 mb-3" style="border-radius: 1vh;">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#addProductModel" style="text-decoration: none;">
                            <center>
                                <i class="fa-duotone fa-cart-shopping fa-xl" style="color: #ffffff;"></i>
                                <h5 class="ms-1 mb-0 mt-2">เพิ่มสินค้า</h5>
                            </center>
                        </a>
                    </div>
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="20%">ชื่อสินค้า</th>
                            <th width="5%">ราคา</th>
                            <th width="30%">รายละเอียดสินค้า</th>
                            <th width="10%">หมวดหมู่สินค้า</th>
                            <th width="15%">จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($card_product as $product) { ?>
                            <tr>
                                <td class=""><?php echo $product['id']; ?></td>
                                <td class=""><img src="<?php echo $product['image_product']; ?>" height="250px">
                                    <p class="mt-2"><?php echo $product['name_product']; ?>
                                </td>
                                </p>
                                <td class=""><?php echo $product['price_product']; ?></td>
                                <td class=""><?php echo $product['details_product']; ?></td>
                                <td class=""><?php echo $product['type']; ?></td>
                                <td>
                                    <a href="/admin/product_stock/add_stock?id=<?php echo $product['id']; ?>" class="btn btn-primary w-100 p-2 mb-2" style="width: 130px!important">
                                        <i class="fa-solid fa-cog"></i>&nbsp;จัดการสต็อก
                                    </a>
                                    <button data-id="<?php echo $product['id']; ?>" data-bs-toggle="modal" data-bs-target="#editProductModal" class="btn btn-warning w-100 p-2 mb-2" style="width: 130px!important"><i class="fa-solid fa-pencil"></i>&nbsp;แก้ไข</button>
                                    <button id_picture="<?php echo $product['id']; ?>" class="btn btn-danger w-100 del_product_id p-2 mb-2" style="width: 130px!important"><i class="fa-solid fa-trash"></i> ลบ</button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- addProductModel -->
<div class="modal fade" id="addProductModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" style="font-weight:bold" id="exampleModalLabel"><i class="fa-duotone fa-cart-shopping"></i>&nbsp;&nbsp;เพิ่มสินค้า</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12 m-cent ">
                    <div class="mb-2">
                        <div class="mb-2">
                            <p class="mb-2 text-dark">ชื่อสินค้า <span class="text-danger">*</span></p>
                            <input type="text" id="name_product" class="form-control" value="">
                        </div>
                        <div class="mb-2">
                            <p class="mb-2 text-dark">ราคาขาย <span class="text-danger">*</span></p>
                            <input type="text" id="price_product" class="form-control" value="">
                        </div>
                        <div class="mb-2">
                            <p class="mb-2 text-dark">รายละเอียดสินค้า <span class="text-danger">*</span></p>
                            <textarea type="text" id="details_product" class="form-control" value=""></textarea>
                        </div>
                        <div class="mb-2">
                            <p class="mb-2 text-dark">URL รูปภาพสินค้า <span class="text-danger">*</span></p>
                            <input type="text" id="picture_product" class="form-control" value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary ps-4 pe-4" id="submit_add_product" data-id="">เพิ่มสินค้า</button>
            </div>
        </div>
    </div>
</div>
<!-- editProductModel -->
<div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-id="" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" style="font-weight:bold" id="exampleModalLabel"><i class="fa-duotone fa-pencil"></i>&nbsp;&nbsp;แก้ไขสินค้า</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12 m-cent">
                    <div class="mb-2">
                        <div class="mb-2">
                            <input type="hidden" id="id_product" value="">
                            <p class="mb-2 text-dark">ชื่อสินค้า <span class="text-danger">*</span></p>
                            <input type="text" id="edit_name_product" class="form-control" value="">
                            <p class="mb-2 text-dark">ราคาขาย <span class="text-danger">*</span></p>
                            <input type="text" id="edit_price_product" class="form-control" value="">
                            <p class="mb-2 text-dark">รายละเอียดสินค้า <span class="text-danger">*</span></p>
                            <textarea type="text" id="edit_details_product" class="form-control" value=""></textarea>
                            <p class="mb-2 mt-2 text-dark">รูปภาพสินค้า <span class="text-danger">*</span></p>
                            <input type="text" id="edit_image_product" class="form-control" value="">
                            <p class="mb-2 mt-2 text-dark">หมวดหมู่สินค้า <span class="text-danger">*</span></p>
                            <select id="edit_category_product" class="form-control mb-1">
                                <?php foreach ($product_category as $category) { ?>
                                    <option value="<?= $category['name'] ?>">
                                        <?= $category['name'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary ps-4 pe-4" id="submit_edit_product" data-id="">อัพเดท</button>
            </div>
        </div>
    </div>
</div>
<script>
            $('#productstorck').dataTable({
                "order": [
                    [0, 'asc']
                ],
                "columnDefs": [{
                    "className": "dt-center",
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
                        [0, 'desc']
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
<script>
    $(document).on('click', '[data-bs-toggle="modal"][data-bs-target="#editProductModal"]', function() {
        var id = $(this).data('id');
        var productData = <?php echo json_encode($card_product); ?>;
        var selectedData = productData.find(function(item) {
            return item.id == id;
        });
        if (selectedData) {
            $("#id_product").val(selectedData.id);
            $("#edit_name_product").val(selectedData.name_product);
            $("#edit_price_product").val(selectedData.price_product);
            $("#edit_details_product").val(selectedData.details_product);
            $("#edit_image_product").val(selectedData.image_product);
            $("#edit_category_product").val(selectedData.type);


        }
    });
</script>
<script src="/js/product_stock.js"></script>
<script src="/js/edit_product_stock.js"></script>
<script src="/js/del_product_stock.js"></script>