<h1 style='color: blue;' align='center'>THÊM KHÁCH HÀNG</h1>

<form action="/<?php echo $data['domain'] ?>/Customer/Add" method="post" class="row g-3">

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="firstname" placeholder="Họ" value='<?php if (isset($_POST["firstname"])) echo $_POST["firstname"] ?>' required>
        <label mess="firstname">
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="lastname" placeholder="Tên" value='<?php if (isset($_POST["lastname"])) echo $_POST["lastname"] ?>' required>
        <label mess="lastname">
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="address" placeholder="Địa chỉ" value='<?php if (isset($_POST["address"])) echo $_POST["address"] ?>' required>
        <label mess="address">
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="phone" placeholder="Số điện thoại" value='<?php if (isset($_POST["phone"])) echo $_POST["phone"] ?>' required>
        <label mess="phone">
    </div>

    <div class="col-12 my-0 p-1 input-group mb-3">
        <input type="text" class="form-control" name="email" placeholder="Email" value='<?php if (isset($_POST["email"])) echo $_POST["email"] ?>' required>
        <label mess="email">
        <!-- <span class="input-group-text" id="basic-addon2">@gmail.com</span> -->
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