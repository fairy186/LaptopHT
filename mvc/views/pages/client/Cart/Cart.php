<div class="row mt-3 border">
    <center>
        <div class="row col-12 mb-3">
            <div class='col-1 mt-3'>
            </div>
            <div class="col-3 mt-3">
                <label>Sản phẩm</label>
            </div>
            <div class="col-2 mt-3">
                <label>Đơn giá</label>
            </div>
            <div class="col-2 mt-3">
                <label>Số lượng</label>
            </div>
            <div class="col-2 mt-3">
                <label>Số tiền</label>
            </div>
            <div class="col-2 mt-3">
                <label>Thao tác</label>
            </div>
        </div>
    </center>
</div>
<form action='/<?php echo $data['domain'] ?>/Payment' method='post'>
    <?php
    foreach ($data['dCart'] as $key => $value) {
        $id = $value['ID_Lap'];
        $name = $value['Name_Lap'];
        $quantity = $value['Quantity'];
        $price = num_to_price($value['Price']);
        $images = json_decode($value['Images'], 1);
        echo "
    <div class='row mt-3 border'>
    <center>
        <div class='row col-12 mb-2 mt-2'>
            <div class='col-1 mt-5'>
                <input class='form-check-input' name='id_lap[]' type='checkbox' value='$id' id='flexCheckDefault'>
            </div>
            <div class='col-3'>
                <img src='/$data[domain]/images/$id/$images[2]' style='max-height:90px;'>
                <label>$name</label>
            </div>
            <div class='col-2 mt-5'>
                <label>$price</label>
            </div>
            <div class='col-2 mt-5'>
                <input type='number' name='quantity[]' value='$quantity'>
            </div>
            <div class='col-2 mt-5'>
            </div>
            <div class='col-2 mt-5'>
                <button type='' name='delete' class='btn btn-outline-danger' style='font-size: 10px;'><i class='bi bi-x-lg'></i></button>
            </div>
        </div>
    </center>
</div>
    ";
    }
    ?>
    <div class="mt-3">
        <center>
            <button type='submit' name='sm' class='btn btn-warning'>Thanh toán</button>
        </center>
    </div>
</form>