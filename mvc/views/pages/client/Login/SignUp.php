<?php
if (!empty($_SESSION['Notification'])) {
    echo "<script>$(document).ready(function(){alert('$_SESSION[Notification]');})</script>";
    unset($_SESSION['Notification']);
}
?>
<h2 class="my-5 text-primary fs-1 fw-bold" align='center'>ĐĂNG KÝ</h2>
<div class="container my-5 bg-dark bg-opacity-50 py-5 rounded" style="max-width: 600px;">
    <form action="" method="post" class="row">
        <div class="col-12 col-sm-6">
            <input type="text" vali class="form-control" name="firstname" placeholder="Họ và tên đệm" value='<?php if (isset($_POST["firstname"])) echo $_POST["firstname"] ?>' required>
            <label mess="firstname"></label>
        </div>
        <div class="col-12 col-sm-6">
            <input type="text" vali class="form-control" name="lastname" placeholder="Tên" value='<?php if (isset($_POST["lastname"])) echo $_POST["lastname"] ?>' required>
            <label mess="lastname"></label>
        </div>
        <div>
            <input type="text" vali class="form-control" name="account" placeholder="Tài khoản" value='<?php if (isset($_POST["account"])) echo $_POST["account"] ?>' required>
            <label mess="account"></label>
        </div>
        <div>
            <input type="password" vali class="form-control" name="password" placeholder="Mật khẩu" value='<?php if (isset($_POST["password"])) echo $_POST["password"] ?>' required>
            <label mess="password"></label>
        </div>
        <div>
            <input type="password" class="form-control" name="confirmPassword" placeholder="Xác nhận mật khẩu" value='<?php if (isset($_POST["password"])) echo $_POST["password"] ?>' required>
            <label mess="confirmPassword"></label>
        </div>
        <div class="row m-0 p-0">
            <div class="col-6 mb-3">
                <select id="province" class="form-select" name="province" required>
                    <option selected disabled value="">Tỉnh</option>
                    <?php
                    $dprovince = $data['dProvince'];
                    for ($i = 0; $i < count($dprovince); $i++) {
                        $pv = $dprovince[$i];
                        echo "<option value='$pv[id]'>$pv[_name]</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-6 mb-3">
                <select id="district" class="form-select" name="district" required>
                    <option disabled selected> quận, huyện</option>
                </select>
            </div>
            <div class="col-6 mb-3">
                <select id="ward" class="form-select" name="ward" required>
                    <option disabled selected> xã, phường</option>
                </select>
            </div>
            <div class="col-6 mb-3">
                <input type="text" vali class="form-control" name="spe" placeholder="Số nhà, đường" value='<?php if (isset($_POST["address"])) echo $_POST["address"] ?>'>
            </div>
            <label mess="address"></label>
        </div>
        <div>
            <input type="text" vali class="form-control" name="phone" placeholder="Số điện thoại" value='<?php if (isset($_POST["phone"])) echo $_POST["phone"] ?>'>
            <label mess="phone"></label>
        </div>
        <div>
            <input type="email" vali class="form-control" name="email" placeholder="Email" value='<?php if (isset($_POST["email"])) echo $_POST["email"] ?>'>
            <label mess="email"></label>
        </div>
        <div>
            <center>
                <button class="btn btn-outline-primary mt-3" name="sm" type="submit">
                    <h4 class="mx-3 my-1">Đăng ký</h4>
                </button>
            </center>
        </div>
    </form>
</div>
<script src='<?php echo "/$data[domain]/public/App.js" ?>'></script>
<script>
    function validate() {
        $("input[vali]").each(function() {
            check_Input(this, "<?php echo $data['domain'] ?>", "Customer");
        });
    }
    $(document).ready(function() {
        $("input[vali]").keyup(function() {
            check_Input(this, "<?php echo $data['domain'] ?>", "Customer");
        }).change(function() {
            check_Input(this, "<?php echo $data['domain'] ?>", "Customer");
        });
        $("input[name='confirmPassword']").keyup(function() {
            if ($(this).val() == $("input[name='password']").val()) {
                $("label[mess='confirmPassword']").html("<i class='bi bi-check2-circle'></i>").css("color", "blue");
                $("button[name='sm']").removeClass("disabled");
            } else {
                $("label[mess='confirmPassword']").html('Mật khẩu không khớp').css("color", "red");
                $("button[name='sm']").addClass("disabled");
            }
        });
        $("#province").change(function() {
            var id = $(this).val();
            $.post('<?php echo "/$data[domain]"; ?>/' + 'Ajax/GetDistrict/' + id, {}, function(data) {
                var d = JSON.parse(data);
                var dt = $("#district");
                dt.html("<option disabled selected> quận, huyện</option>");
                d.forEach(element => {
                    $($.parseHTML('<option>')).attr('value', element['id']).html(element['_prefix'] + ' ' + element['_name']).appendTo(dt);
                });
            });
        });
        $("#district").change(function() {
            var id = $(this).val();
            $.post('<?php echo "/$data[domain]"; ?>/' + 'Ajax/GetWard/' + id, {}, function(data) {
                var d = JSON.parse(data);
                var w = $("#ward");
                w.html("<option disabled selected> xã, phường</option>");
                d.forEach(element => {
                    $($.parseHTML('<option>')).attr('value', element['id']).html(element['_prefix'] + ' ' + element['_name']).appendTo(w);
                });
            });
        });
    });
</script>