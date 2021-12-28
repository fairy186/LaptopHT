<div class="container" style="max-width: 600px;">
    <h1 style='color: blue;' align='center'>ĐĂNG KÝ</h1>
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
            <input type="password" vali class="form-control" name="confirmPassword" placeholder="Xác nhận mật khẩu" value='<?php if (isset($_POST["password"])) echo $_POST["password"] ?>' required>
            <label mess="confirmPassword"></label>
        </div>
        <div class="row">
            <div class="col-3">
                <select class="form-select" name="province" required>
                    <option selected disabled value="">Tỉnh</option>
                    <?php
                    $dprovince = $data['dProvince'];
                    for ($i = 0; $i < count($dprovince); $i++) {
                        $pv = $dprovince[$i];
                        echo "<option value='$pv[_name]'>$pv[_name]</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-3">
                <select class="form-select" name="district" required>
                    <option selected disabled value="">Quận, Huyện, Thị xã, Thành phố</option>
                    <?php
                    $ddistrict = $data['dDistrict'];
                    for ($i = 0; $i < count($ddistrict); $i++) {
                        $dt = $ddistrict[$i];
                        echo "<option value='$dt[_prefix] $dt[_name]'>$dt[_prefix] $dt[_name]</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-3">
                <select class="form-select" name="ward" required>
                    <option selected disabled value="">Xã, Phường, Thị trấn</option>
                    <?php
                    $dward = $data['dWard'];
                    for ($i = 0; $i < count($dward); $i++) {
                        $w = $dward[$i];
                        echo "<option value='$w[_prefix] $w[_name]'>$w[_prefix] $w[_name]</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-3">
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
                <button class="btn btn-outline-dark mt-3" name="sm" type="submit">
                    <h4 class="mx-3 my-1">Đăng ký</h4>
                </button>
            </center>
        </div>
    </form>
</div>