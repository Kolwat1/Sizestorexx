<?php
$thxk = new member;
$resultuser = $thxk->resultuser();
$all_history_social = $thxk->all_history_social();
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
                <h4>ประวัติการปั้มโซเชียล</h4>
                <hr>
            </center>
            <div class="table-responsive">
                <table id="history_buy1" class="table table-striped table-dark text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th width="23%">ลิ้งค์</th>
                            <th width="30%">จำนวน</th>
                            <th>บริการ</th>
                            <th width="15%">ราคา</th>
                            <th width="15%">ผู้ซื้อ</th>
                            <th width="15%">เวลา</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_history_social as $history_social) { ?>
                            <tr>
                                <td><?= $history_social['id'] ?></td>
                                <td><?= $history_social['link'] ?></td>
                                <td><?= $history_social['quantity'] ?></td>
                                <td><?= $history_social['list'] ?></td>
                                <td><?= $history_social['amount'] ?></td>
                                <td><?= $history_social['username'] ?></td>
                                <td><?= $history_social['timeadd'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $('#history_buy1').dataTable({
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