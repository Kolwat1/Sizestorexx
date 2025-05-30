<?php include 'layouts/nav_admin.php'; ?>
<div class="container-sm p-4" data-aos="<?php echo $anim; ?>">
        </div>
    </div>
    <div class="container-sm bg-navvx shadow-sm p-4 mb-4" style="border-radius: 1vh;" data-aos="fade-down">
        <center>
            <div class="col-12 col-lg-12 p-2 mb-2" style="border-radius: 1vh;">
                <div class="d-flex justify-content-between">
                    <div class="text-center text-lg-start">
                    <h3 class="m-0">จัดการหมวดหมู่บริการ</h3>
                    </div>
                </div>
            </div>
        </center>
    <div class="d-flex justify-content-center">
        <button class="ms-2 me-2 mt-3 mb-0 btn btn-success col-12 col-lg-5 text-white" id="open_insert"> เพิ่มหมวดหมู่ใหม่</button>
    </div>
    <div class="table-responsive mt-3 ">
        <table id="table" class="table table-striped table-dark mt-2">
            <thead class="">
                <tr class="">
                    <th class="sorting sorting_asc">id</th>
                    <th> ภาพหมวดหมู่</th>
                    <th> ชื่อหมวดหมู่</th>
                    <th> คำอธิบาย</th>
                    <th> แก้ไข</th>
                    <th> ลบ</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $get_user = dd_q("SELECT * FROM service_cate ORDER BY s_id DESC");
                while ($row = $get_user->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <tr>
                        <td class=""><?php echo $row['s_id']; ?></td>
                        <td class=""><img src="<?php echo htmlspecialchars($row['img']); ?>" width="100px" alt=""></td>
                        <td class=""><?php echo htmlspecialchars($row['name']); ?></td>
                        <td class=""><?php echo htmlspecialchars($row['des']); ?></td>
                        <td><button class="btn btn-warning  w-100" style="width : 130px!important" onclick="get_detail(<?php echo $row['s_id']; ?>)"><i class="fa-solid fa-pencil"></i>&nbsp;แก้ไข</button></td>
                        <td><button class="btn btn-danger  w-100" style="width : 130px!important" onclick="del('<?php echo $row['s_id']; ?>','<?php echo htmlspecialchars($row['username']); ?>')"><i class="fa-solid fa-trash"></i> ลบ</button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="category_insert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-glass">
            <div class="modal-header">
                <h5 class="modal-title" style="color: var(--font);" id="exampleModalLabel"><i class="fa-duotone fa-pencil"></i>&nbsp;&nbsp;แก้ไขหมวดหมู่</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-lg-10 m-cent ">
                    <div class="mb-2">
                        <div class="mb-2">
                            <p class=" mb-1" style="color: var(--font);">ชื่อหมวดหมู่ <span class="text-danger">*</span></p>
                            <input type="text" id="p_name" class="form-control" value="">
                        </div>
                        <div class="mb-2">
                            <p class=" mb-1" style="color: var(--font);">รายละเอียด <span class="text-danger">*</span></p>
                            <textarea id="p_des" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                        </div>
                        <div class="mb-2">
                            <p class=" mb-1" style="color: var(--font);">ลิงค์รูปภาพ <span class="text-danger">*</span></p>
                            <input type="text" id="p_img" class="form-control" value="">
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิดหน้านี้</button>
                <button type="button" class="btn btn-primary ps-4 pe-4" id="insert_btn" data-id="">เพิ่มหมวดหมู่</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="category_detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-glass">
            <div class="modal-header">
                <h5 class="modal-title" style="color: var(--font);" id="exampleModalLabel"><i class="fa-duotone fa-pencil"></i>&nbsp;&nbsp;แก้ไขหมวดหมู่</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-lg-10 m-cent ">
                    <div class="mb-2">
                        <div class="mb-2">
                            <p class=" mb-1" style="color: var(--font);">ชื่อหมวดหมู่ <span class="text-danger">*</span></p>
                            <input type="text" id="name" class="form-control" value="username">
                        </div>
                        <div class="mb-2">
                            <p class=" mb-1" style="color: var(--font);">รายละเอียด <span class="text-danger">*</span></p>
                            <textarea id="des" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                        </div>
                        <div class="mb-2">
                            <p class=" mb-1" style="color: var(--font);">ลิงค์รูปภาพ <span class="text-danger">*</span></p>
                            <input type="text" id="img" class="form-control" value="">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                <button type="button" class="btn btn-primary" id="save_btn" data-id="">บันทึก</button>
            </div>
        </div>
    </div>
</div>
<script>
    $("#open_insert").click(function() {
        const myModal = new bootstrap.Modal('#category_insert', {
            keyboard: false
        })
        myModal.show();
    });
    $("#save_btn").click(function() {
        var formData = new FormData();
        formData.append('c_id', $("#save_btn").attr("data-id"));
        formData.append('c_name', $("#name").val());
        formData.append('des', $("#des").val());
        formData.append('img', $("#img").val());
        $.ajax({
            type: 'POST',
            url: '../systems/service_cate_update.php',
            data: formData,
            contentType: false,
            processData: false,
        }).done(function(res) {
            result = res;
            Swal.fire({
                icon: 'success',
                title: 'สำเร็จ',
                text: result.message
            }).then(function() {
                window.location = "?page=<?php echo $_GET['page']; ?>";
            });
        }).fail(function(jqXHR) {
            console.log(jqXHR);
            res = jqXHR.responseJSON;
            Swal.fire({
                icon: 'error',
                title: 'เกิดข้อผิดพลาด',
                text: res.message
            })
        });
    });
    $("#insert_btn").click(function() {
        var formData = new FormData();
        formData.append('img', $("#p_img").val());
        formData.append('c_name', $("#p_name").val());
        formData.append('des', $("#p_des").val());
        $.ajax({
            type: 'POST',
            url: '../systems/service_cate_insert.php',
            data: formData,
            contentType: false,
            processData: false,
        }).done(function(res) {
            result = res;
            Swal.fire({
                icon: 'success',
                title: 'สำเร็จ',
                text: result.message
            }).then(function() {
                window.location = "?page=<?php echo $_GET['page']; ?>";
            });
        }).fail(function(jqXHR) {
            console.log(jqXHR);
            res = jqXHR.responseJSON;
            Swal.fire({
                icon: 'error',
                title: 'เกิดข้อผิดพลาด',
                text: res.message
            })
        });
    });
    function get_detail(id) {
        var formData = new FormData();
        formData.append('s_id', id);

        $.ajax({
            type: 'POST',
            url: '../systems/service_cate_detail.php',
            data: formData,
            contentType: false,
            processData: false,
        }).done(function(res) {
            console.log(res);
            $("#name").val(res.c_name);
            $("#des").val(res.des);
            $("#img").val(res.img);
            $("#save_btn").attr("data-id", id);
            const myModal = new bootstrap.Modal('#category_detail', {
                keyboard: false
            })
            myModal.show();
        }).fail(function(jqXHR) {
            console.log(jqXHR);
            res = jqXHR.responseJSON;
            Swal.fire({
                icon: 'error',
                title: 'เกิดข้อผิดพลาด',
                text: res.message
            })
        });

    }
    function del(id, username) {
        Swal.fire({
            title: 'ยืนยันที่จะลบ?',
            text: "คุณแน่ใจหรอที่จะลบผู้ใช้  " + username,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ลบเลย'
        }).then((result) => {
            if (result.isConfirmed) {
                var formData = new FormData();
                formData.append('c_id', id);
                $.ajax({
                    type: 'POST',
                    url: '../systems/service_cate_del.php',
                    data: formData,
                    contentType: false,
                    processData: false,
                }).done(function(res) {
                    result = res;
                    Swal.fire({
                        icon: 'success',
                        title: 'สำเร็จ',
                        text: result.message
                    }).then(function() {
                        window.location = "?page=<?php echo $_GET['page']; ?>";
                    });
                }).fail(function(jqXHR) {
                    console.log(jqXHR);
                    res = jqXHR.responseJSON;
                    Swal.fire({
                        icon: 'error',
                        title: 'เกิดข้อผิดพลาด',
                        text: res.message
                    })
                    //console.clear();
                });
            }
        })


    }
</script>