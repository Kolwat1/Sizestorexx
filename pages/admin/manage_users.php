<?php
$thxk = new member;
$users = $thxk->users_list();
?>
<div class="container-fluid mt-2 p-0">
    <?php include 'layouts/nav_admin.php'; ?>
    <div class="container p-4 pt-0 pb-0 m-cent">
        <div class="class-thxk p-4 mt-3 mb-3">
            <h3 class="text-center"><i class="fa-solid fa-folder-user fa-xl" style="color:#fff"></i> ระบบแก้ไขเว็บไซต์</h3>
        </div>
        <div class="class-thxk p-4 mb-3" data-aos="zoom-in">
            <div class="table-responsive">
                <table id="userTable" class="table table-striped table-dark text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th>ไอดี</th>
                            <th>ชื่อผู้ใช้งาน</th>
                            <th>อีเมล</th>
                            <th>ยอดเงิน</th>
                            <th>ระดับยศ</th>
                            <th>สมัครสมาชิกเมื่อ</th>
                            <th width="23%">จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $resultuser) { ?>
                            <tr>
                                <td><?php echo $resultuser['id']; ?></td>
                                <td><?php echo $resultuser['username']; ?></td>
                                <td><?php echo $resultuser['email']; ?></td>
                                <td><?php echo $resultuser['point']; ?> บาท</td>
                                <td>
                                    <?php
                                    if ($resultuser['rank'] == 0) {
                                        echo "สมาชิกทั่วไป";
                                    } elseif ($resultuser['rank'] == 1) {
                                        echo "แอดมินดูแลระบบ";
                                    } else {
                                        echo "ยังไม่ได้รับการยืนยัน";
                                    }
                                    ?>
                                </td>
                                <td><?php echo $resultuser['date']; ?></td>
                                <td>
                                    <button data-id="<?php echo $resultuser['id']; ?>" data-bs-toggle="modal" data-bs-target="#editUsers" class="btn btn-thxk w-100 p-2 mb-2" style="width: 130px!important"><i class="fa-solid fa-pencil"></i>&nbsp;แก้ไข</button>
                                    <button id_users="<?php echo $resultuser['id']; ?>" class="btn btn-thxk w-100 p-2 mb-2 del_users" style="width: 130px!important"><i class="fa-solid fa-trash"></i> ลบ</button>
                                </td>
                            <?php } ?>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editUsers" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" style="font-weight:bold" id="exampleModalLabel"><i class="fa-duotone fa-pencil"></i>&nbsp;&nbsp;แก้ไขผู้ใช้งาน</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12 m-cent">
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-2">
                                    <p class="mb-1 text-dark">ไอดี <span class="text-danger">*</span></p>
                                    <input type="text" id="edit-id" class="form-control" value="" disabled>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <p class="mb-1 text-dark">ชื่อผู้ใช้งาน <span class="text-danger">*</span></p>
                                    <input type="text" id="edit-username" class="form-control" value="" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <p class=" mb-1 text-dark">รหัสผ่าน <span class="text-danger"></span></p>
                            <input type="password" id="edit-password" class="form-control" placeholder="ไม่ต้องการเปลี่ยนรหัสผ่าน ห้ามกรอกข้อมูล" value="">
                        </div>
                        <div class="mb-2">
                            <p class=" mb-1 text-dark">อีเมล <span class="text-danger">*</span></p>
                            <input type="email" id="edit-email" class="form-control" value="">
                        </div>
                        <div class="mb-2">
                            <p class=" mb-1 text-dark">ยอดเงิน <span class="text-danger">*</span></p>
                            <input type="number" id="edit-point" class="form-control" value="">
                        </div>
                        <div class="mb-2">
                            <p class="mb-1 text-dark">ระดับยศ <span class="text-danger">*</span></p>
                            <select id="edit-rank" class="form-control" disabled>
                                <option value="0">สมาชิกทั่วไป</option>
                                <option value="1">แอดมินดูแลระบบ</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary ps-4 pe-4" id="edit_users" data-id="">บันทึก</button>
            </div>
        </div>
    </div>
</div>
<!--- <script>
    $(document).ready(function() {
        $('#userTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/th.json"
            },
            "dom": ''
            // "dom": '<"top"i>rt<"bottom"flp><"clear">'
        });
    });
</script> --->
<script>
            $('#userTable').dataTable({
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
    $(document).on('click', '[data-bs-toggle="modal"][data-bs-target="#editUsers"]', function() {
        var id = $(this).data('id');
        var usersData = <?php echo json_encode($users); ?>;
        var selectedData = usersData.find(function(item) {
            return item.id == id;
        });
        if (selectedData) {
            $("#edit-id").val(selectedData.id);
            $("#edit-username").val(selectedData.username);
            $("#edit-email").val(selectedData.email);
            $("#edit-point").val(selectedData.point);
            $("#edit-rank").val(selectedData.rank);
        }
    });
</script>
<script src="/js/edit_users.js"></script>
<script src="/js/del_users.js"></script>