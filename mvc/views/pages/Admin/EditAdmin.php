<?php
$admin = $data['admin'];
?>
<h1 style='color: blue;' align='center'> CHỈNH SỬA QUẢN TRỊ VIÊN</h1>
<form action="" method="post">
    <div class="row">
        <div class="col-8 mb-3">
            <label for="field1" class="form-label">Mã khách hàng</label>
            <input id="field1" type="text" name="ma" value="<?php echo $admin['ID_Admin'] ?>" class="form-control" disabled>
        </div>
        <div class="col-5 mb-3">
            <label for="field2" class="form-label">Họ</label>
            <input id="field2" type="text" name="firstname" value="<?php echo $admin['First_Name'] ?>" class="form-control">
            <label mess="firstname">
        </div>

        <div class="col-5 mb-3">
            <label for="field3" class="form-label">Tên</label>
            <input id="field3" type="text" name="lastname" value="<?php echo $admin['Last_Name'] ?>" class="form-control">
            <label mess="lastname">
        </div>

        <div class="col-5 mb-3">
            <label for="field7" class="form-label">Tài khoản</label>
            <input id="field7" type="text" name="account" value="<?php echo $admin['Account'] ?>" class="form-control">
            <label mess="account">
        </div>

        <div class="col-5 mb-3">
            <label for="field8" class="form-label">Mật khẩu</label>
            <input id="field8" type="text" name="password" value="<?php echo $admin['Password'] ?>" class="form-control">
            <label mess="password">
        </div>

        <div class="col-12 my-0 p-1">
            <center><button class="btn btn-primary disabled" type="submit" name="sm">Cập nhật</button></center>
        </div>
    </div>
</form>
<?php
if (isset($data['tb'])) {
    echo $data['tb'];
}
?>