<?php
$thxk = new member;
$show_category = $thxk->show_category();
?>
<div class="container-fluid mt-2 p-0">
    <?php include 'layouts/nav_admin.php'; ?>
    <div class="container p-4 pt-0 pb-0 m-cent">
        <div class="class-thxk p-4 mt-3 mb-3">
            <h3 class="text-center"><i class="fa-duotone fa-layer-group"></i> จัดการระบบหมวดหมู่สินค้า</h3>
        </div>
        <div class="class-thxk text-center p-4 mb-3" data-aos="zoom-in">
            <div class="table-responsive">
                <table class="table table-striped table-dark" style="width:100%">
                    <div class="container-fluid btn btn-dark p-3 mb-3" style="border-radius: 1vh;">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#addCategoryModel" style="text-decoration: none;">
                            <center>
                                <i class="fa-duotone fa-layer-group fa-xl" style="color: #ffffff;"></i>
                                <h5 class="ms-1 mb-0 mt-2">เพิ่มหมวดหมู่สินค้า</h5>
                            </center>
                        </a>
                    </div>
                    <thead>
                        <tr>
                            <th width="40%">รูปภาพ</th>
                            <th>หมวดหมู่</th>
                            <th>รายละเอียดสินค้า</th>
                            <th>จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($show_category as $category) { ?>
                            <tr>
                                <td class=""><img src="<?php echo $category['img']; ?>" height="150px"></td>
                                <td class=""><?php echo $category['name']; ?></td>
                                <td class=""><?php echo $category['details']; ?></td>
                                <td>
                                    <button id="<?php echo $category['id']; ?>" data-name="<?php echo $category['name']; ?>" class="btn btn-sm btn-danger del_category"><i class="fa-duotone fa-trash"></i> ลบ</button>
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
<div class="modal fade" id="addCategoryModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" style="font-weight:bold" id="exampleModalLabel"><i class="fa-duotone fa-layer-group"></i>&nbsp;&nbsp;เพิ่มหมวดหมู่สินค้า</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12 m-cent ">
                    <div class="mb-2">
                        <div class="mb-2">
                            <p class="mb-2 text-dark">ชื่อหมวดหมู่ <span class="text-danger">*</span></p>
                            <input type="text" id="name_category" class="form-control" value="">
                        </div>
                        <div class="mb-2">
                            <p class="mb-2 text-dark">รายละเอียดหมวดหมู่ <span class="text-danger">*</span></p>
                            <input type="text" id="details_category" class="form-control" value="">
                        </div>
                        <div class="mb-2">
                            <p class="mb-2 text-dark">URL รูปภาพ <span class="text-danger">*</span></p>
                            <input type="text" id="picture_category" class="form-control" value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary ps-4 pe-4" id="submit_addCategory" data-id="">บันทึก</button>
            </div>
        </div>
    </div>
</div>
<script>
    $("#submit_addCategory").click(function() {
        var name = $("#name_category").val();
        var details = $("#details_category").val();
        var img = $("#picture_category").val();

        console.log(name, details, img)
        $.ajax({
            type: "POST",
            url: "../systems/add_category.php",
            dataType: "json",
            data: {
                name,
                details,
                img,
            },
            success: function(data) {
                if (data.status == "success") {
                    Swal.fire({
                        icon: 'success',
                        text: data.message,
                    }).then(function() {
                        window.location.reload();
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        text: data.message,
                    })
                }
            }
        })
    })
    $(".del_category").click(function() {
        var id = this.id;
        var name = $(this).data("name");
        Swal.fire({
            text: "คุณแน่ใจที่ต้องการลบหมวดหมู่สินค้า " + name,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ใช่',
            cancelButtonText: 'ไม่'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "../systems/del_category.php",
                    dataType: "json",
                    data: {
                        id
                    },
                    success: function(data) {
                        if (data.status == "success") {
                            Swal.fire({
                                icon: 'success',
                                text: data.message,
                            }).then(function() {
                                window.location.reload();
                            })
                        } else {
                            Swal.fire({
                                icon: 'error',
                                text: data.message,
                            })
                        }
                    }
                })
            }
        })
    })
</script>
