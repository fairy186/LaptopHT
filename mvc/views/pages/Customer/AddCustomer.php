<div class="container col-12 col-xl-6">
    <h1 style='color: blue;' align='center'>THÊM KHÁCH HÀNG</h1>
    <form action="/<?php echo $data['domain'] ?>/Customer/Add" method="post" class="row">
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
            <input type="text" vali class="form-control" name="address" placeholder="Địa chỉ" value='<?php if (isset($_POST["address"])) echo $_POST["address"] ?>'>
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
                    <h4 class="mx-3 my-1">Xác nhận</h4>
                </button>
            </center>
        </div>
    </form>
</div>