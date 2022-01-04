<?php
$customer = $data['customer'];
?>
<h1 style='color: blue;' align='center'> CHỈNH SỬA KHÁCH HÀNG</h1>
<form action="" method="post">
    <div class="row">
        <div class="col-12 mb-3">
            <div class="col-sm-1">
                <label for="field1" class="form-label">Mã khách hàng</label>
                <input id="field1" type="text" name="ma" value="<?php echo $customer['ID_Cus'] ?>" class="form-control" disabled>
            </div>
        </div>
        <div class="col-5 mb-3">
            <label for="field2" class="form-label">Họ</label>
            <input id="field2" type="text" name="firstname" value="<?php echo $customer['First_Name'] ?>" class="form-control">
            <label mess="firstname">
        </div>

        <div class="col-5 mb-3">
            <label for="field3" class="form-label">Tên</label>
            <input id="field3" type="text" name="lastname" value="<?php echo $customer['Last_Name'] ?>" class="form-control">
            <label mess="lastname">
        </div>
        <div class="col-4 mb-3">
            <label for="field4" class="form-label">Địa chỉ</label>
            <input id="field4" type="text" name="address" value="<?php echo $customer['Address'] ?>" class="form-control">
            <label mess="address">
        </div>

        <div class="col-4 mb-3">
            <label for="field5" class="form-label">Số điện thoại</label>
            <input id="field5" type="text" name="phone" value="<?php echo $customer['Phone'] ?>" class="form-control">
            <label mess="phone">
        </div>

        <div class="col-4 mb-3">
            <label for="field5" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="<?php echo $customer['Email'] ?>">
        </div>

        <div class="col-5 mb-3">
            <label for="field7" class="form-label">Tài khoản</label>
            <input id="field7" type="text" name="account" value="<?php echo $customer['Account'] ?>" class="form-control">
            <label mess="account">
        </div>

        <div class="col-5 mb-3">
            <label for="field8" class="form-label">Mật khẩu</label>
            <input id="field8" type="text" name="password" value="<?php echo $customer['Password'] ?>" class="form-control">
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