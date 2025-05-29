<?php
$thxk = new member;
$contact = $thxk->contact();
?>
<div class="container-fluid mt-2 p-0">
    <?php include 'layouts/nav_admin.php'; ?>
    <div class="container p-4 pt-0 pb-0 m-cent">
        <div class="class-thxk mt-4 p-4 mb-3" data-aos="zoom-in">
            <div class="container-fluid btn btn-dark p-3 mb-3" style="border-radius: 1vh;">
                <a id="submit_contact" style="text-decoration: none;">
                    <center>
                        <i class="fa-sharp fa-solid fa-floppy-disk fa-xl" style="color: #ffffff;"></i>
                        <h5 class="ms-1 mb-0">บันทึกการตั้งค่า</h5>
                    </center>
                </a>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-2">
                        <p class="m-0"><i class="fa-brands fa-square-facebook fa-lg" style="color: #ffffff;"></i> ช่องทางการติดต่อ FACEBOOK (ลิงก์)</p>
                        <input type="text" id="facebook" class="form-control" value="<?php echo $contact['facebook']; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-2">
                        <p class="m-0"><i class="fa-brands fa-line fa-lg" style="color: #ffffff;"></i> ช่องทางการติดต่อ LINE (ลิงก์)</p>
                        <input type="text" id="line" class="form-control" value="<?php echo $contact['line']; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-2">
                        <p class="m-0"><i class="fa-brands fa-discord fa-lg" style="color: #ffffff;"></i> Widget Discord (ID ดิสคอร์ดเซิร์ฟเวอร์) <span class="text-danger">(* เปิดใช้งาน Widget ในตั้งค่าดิสคอร์ด)</span></p>
                        <input type="text" id="discord" class="form-control" value="<?php echo $contact['discord']; ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#submit_contact").click(function() {
        var facebook = $("#facebook").val();
        var line = $("#line").val();
        var discord = $("#discord").val();
        $.ajax({
            type: "POST",
            url: "../systems/contact.php",
            dataType: "json",
            data: {
                facebook,
                line,
                discord,
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
</script>