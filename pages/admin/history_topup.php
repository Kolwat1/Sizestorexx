<?php
$thxk = new member;
$resultuser = $thxk->resultuser();
$history_w = $thxk->history_wallet();
$history_verifyslip = $thxk->history_verifyslip();
?>
<div class="container-fluid mt-2 p-0">
    <?php include 'layouts/nav_admin.php'; ?>
    <div class="container p-4 pt-0 pb-0 m-cent">
        <div class="class-thxk p-4 mt-3 mb-3">
            <h3 class="text-center text-thxk"><i class="fa-duotone fa-clock-rotate-left fa-xl" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff;"></i> ประวัติการเติมเงิน Truewallet และ Verify Slip</h3>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="zoom-in">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="truewallet-tab" data-toggle="tab" href="#truewallet" role="tab" aria-controls="truewallet" aria-selected="true">ประวัติการเติมเงิน Truewallet</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="verifyslip-tab" data-toggle="tab" href="#verifyslip" role="tab" aria-controls="verifyslip" aria-selected="false">ประวัติการเติมเงิน ธนาคาร (Verify Slip)</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent" data-aos="zoom-in">
            <div class="tab-pane fade show active" id="truewallet" role="tabpanel" aria-labelledby="truewallet-tab">
                <div class="class-thxk p-4 mt-2 mb-3">
                    <h5>ประวัติการเติมเงิน TrueWallet</h5>
                    <hr>
                    <table id="truewalletTable" class="table table-striped table-dark text-center" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ชื่อบัญชี</th>
                                <th>จำนวน</th>
                                <th>ค่าธรรมเนียม</th>
                                <th>สถานะ</th>
                                <th>เวลาทำรายการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (array_reverse($history_w) as $history_wallet) { ?>
                                <tr>
                                    <td><?= $history_wallet['id']; ?></td>
                                    <td><?= $history_wallet['name']; ?></td>
                                    <td><?= $history_wallet['amount']; ?></td>
                                    <td><span class="badge text-bg-danger" style="font-size:15px"> 0%</span></td>
                                    <td><span class="badge text-bg-success" style="font-size:15px"><i class="fa-sharp fa-regular fa-circle-check"></i> สำเร็จ</span></td>
                                    <td><?= $history_wallet['date']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="verifyslip" role="tabpanel" aria-labelledby="verifyslip-tab">
                <div class="class-thxk p-4 mt-2 mb-3">
                    <h5>ประวัติการเติมเงิน ธนาคาร (Verify Slip)</h5>
                    <hr>
                    <table id="verifyslipTable" class="table table-striped table-dark text-center" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ชื่อบัญชี</th>
                                <th>จำนวนเงิน</th>
                                <th>ค่าธรรมเนียม</th>
                                <th>สถานะ</th>
                                <th>เวลาทำรายการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach (array_reverse($history_verifyslip) as $history_slip) { ?>
                                <tr>
                                    <td><?= $history_slip['id']; ?></td>
                                    <td><?= $history_slip['customer_name']; ?></td>
                                    <td><?= $history_slip['amount']; ?></td>
                                    <td><span class="badge text-bg-danger" style="font-size:15px"> 0%</span></td>
                                    <td><span class="badge text-bg-success" style="font-size:15px"><i class="fa-sharp fa-regular fa-circle-check"></i> สำเร็จ</span></td>
                                    <td><?= $history_slip['date']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#myTab a').on('click', function(e) {
            e.preventDefault();
            $(this).tab('show');
        });
    });
</script>
<script>
    $('#truewalletTable').dataTable({
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
<script>
    $('#verifyslipTable').dataTable({
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