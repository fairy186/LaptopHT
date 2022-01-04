<h1 style='color: blue;' align='center'>THÊM QUẢN TRỊ VIÊN</h1>

<form action="" method="post" class="row g-3">

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="firstname" placeholder="Họ" value='<?php if (isset($_POST["firstname"])) echo $_POST["firstname"] ?>' required>
        <label mess="firstname">
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="lastname" placeholder="Tên" value='<?php if (isset($_POST["lastname"])) echo $_POST["lastname"] ?>' required>
        <label mess="lastname">
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="account" placeholder="Tài khoản" value='<?php if (isset($_POST["account"])) echo $_POST["account"] ?>' required>
        <label mess="account">
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="password" placeholder="Mật khẩu" value='<?php if (isset($_POST["password"])) echo $_POST["password"] ?>' required>
        <label mess="password">
    </div>

    <div class="col-12 my-0 p-1">
        <center><button class="btn btn-primary disabled" type="submit" name="sm">Thêm</button></center>
    </div>

    <div class="col-12 my-0 p-1">
        <label>
            <?php
            if (isset($data['tb'])) {
                echo $data['tb'];
            }
            ?>
        </label>
    </div>
</form>