<?php include 'layouts/nav_admin.php'; ?>
<div class="container-sm p-4" data-aos="<?php echo $anim; ?>">
        </div>
    </div>
    <div class="container-sm bg-navvx  mt-5 shadow-sm p-4 mb-4" style="border-radius: 1vh;" data-aos="fade-down">
        <center>
            <div class="col-12 col-lg-12 bg-navvx shadow-sm p-2 mb-2" style="border-radius: 1vh;">
                <div class="d-flex justify-content-between">
                    <div class="text-center text-lg-start">
                    <h3 class="m-0">Order</h3>
                    </div>
                </div>
            </div>
        </center>
        <div class="d-flex justify-content-center">
    </div>
    <div class="table-responsive mt-3 ">
        <table id="table" class="table table-striped table-dark mt-2">
            <center>
                <h2>Order ยังไม่สำเร็จ</h2>
            </center>
            <thead class="">
                <tr class="">
                    <th class="sorting sorting_asc">id</th>
                    <th> </th>
                    <th> ชื่อสินค้า</th>
                    <th> ผู้สั่งซื้อ</th>
                    <th> สถานะ</th>
                    <th> Username</th>
                    <th> Password</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $get_user = dd_q("SELECT * FROM service_order WHERE status = ? AND del = 'no' ORDER BY id DESC", ["not"]);

                function st($text)
                {
                    if ($text == "no") {
                        return "กำลังดำเนินการ";
                    } elseif ($text == "yes") {
                        return "สำเร็จ";
                    } elseif ($text == "not") {
                        return "ไม่สำเร็จ";
                    }
                }
                function getimg($text)
                {

                    $i = dd_q("SELECT * FROM service_prod WHERE name = ?",  [$text]);
                    $is = $i->fetch(PDO::FETCH_ASSOC);
                    return $is["img"];
                    
                    
                }
                function getuser($text)
                {

                    $i = dd_q("SELECT * FROM users WHERE id = ?",  [$text]);
                    $is = $i->fetch(PDO::FETCH_ASSOC);
                    return $is["username"];
                    
                    
                }
                
                while ($row = $get_user->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <tr>
                        <td class=""><?php echo $row['id']; ?></td>
                        <td class=""><img src="<?php echo htmlspecialchars(getimg($row['prod'])); ?>" width="100px" alt=""></td>
                        <td class=""><?php echo htmlspecialchars($row['prod']); ?></td>
                        <td class=""><?php echo htmlspecialchars(getuser($row['cosid'])); ?></td>
                        <td class=""><?php echo htmlspecialchars(st($row['status'])); ?></td>
                        <td class=""><?php echo htmlspecialchars($row['user']); ?></td>
                        <td class=""><?php echo htmlspecialchars($row['pass']); ?></td>
                        <td><button class="btn btn-success  w-100" style="width : 130px!important" onclick="suc('<?php echo $row['id']; ?>')"><i class="fa-solid fa-check"></i>&nbsp;สำเร็จ</button></td>
                        <td><button class="btn btn-danger  w-100" style="width : 130px!important" onclick="unsuc('<?php echo $row['id']; ?>')"><i class="fa-solid fa-x"></i>&nbsp;ไม่สำเร็จ</button></td>
                        <td><button class="btn btn-warning  w-100" style="width : 130px!important" onclick="back('<?php echo $row['id']; ?>')"><i class="fa-solid fa-time"></i>&nbsp;เปลี่ยนกลับ</button></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    function suc(id) {
        Swal.fire({
            title: 'ยืนยันที่จะตั้งสถานะเป็นสำเร็จ',
            text: "คุณแน่ใจหรอที่จะตั้งสถานะ Order นี้เป็นสำเร็จ",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ยืนยัน'
        }).then((result) => {
            if (result.isConfirmed) {
                var formData = new FormData();
                formData.append('id', id);
                formData.append('st', "yes");
                $.ajax({
                    type: 'POST',
                    url: '../systems/order_update.php',
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
                        window.location = "";
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

    function unsuc(id) {
        Swal.fire({
            title: 'ยืนยันที่จะตั้งสถานะเป็นไม่สำเร็จ',
            text: "คุณแน่ใจหรอที่จะตั้งสถานะ Order นี้เป็นไม่สำเร็จ",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ยืนยัน'
        }).then((result) => {
            if (result.isConfirmed) {
                var formData = new FormData();
                formData.append('id', id);
                formData.append('st', "not");
                $.ajax({
                    type: 'POST',
                    url: '../systems/order_update.php',
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
                        window.location = "";
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

    function back(id) {
        Swal.fire({
            title: 'ยืนยันที่จะตั้งสถานะเป็นกำลังดำเนินการ',
            text: "คุณแน่ใจหรอที่จะตั้งสถานะ Order นี้เป็นกำลังดำเนินการ",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ยืนยัน'
        }).then((result) => {
            if (result.isConfirmed) {
                var formData = new FormData();
                formData.append('id', id);
                formData.append('st', "no");
                $.ajax({
                    type: 'POST',
                    url: '../systems/order_update.php',
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
                        window.location = "";
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