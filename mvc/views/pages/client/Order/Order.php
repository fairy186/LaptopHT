<div class="row pt-4">
    <div class="col-8 p-3">
        <?php
        $totalCost = $this->num_to_price(@$_SESSION['cost']);
        if (isset($_SESSION['order']) && $_SESSION['order'] != [])
            foreach ($_SESSION['order'] as $key => $value) {
                $img = json_decode($value['Images'], 1)[0];
                $price = $this->num_to_price($value['Price']);
                $c = $this->num_to_price($value['Price'] * $value['Quantity']);
                echo "
                    <div class='d-flex rounded border p-3 my-2'>
                        <img class='me-3' src='/$data[domain]/images/$value[ID_Lap]/$img' style='height:100px'/>
                        <div>
                            <div><span class='fw-bold'>$value[Name_Lap]</span></div>
                            <div><span class='fw-bold'>Số lượng:</span> $value[Quantity]</div>
                            <div><span class='fw-bold'>Đơn giá:</span> $price</div>
                        </div>
                        <div class='mx-auto'></div>
                        <div class='d-flex align-items-center fw-bold'>
                            <div> $c</div>
                        </div>
                    </div>
                        ";
            }
        else {
            echo "
                <center>
                <h5 class='fst-italic'>
                    Ko có sản phẩm nào !
                </h5>
                <a class='btn btn-primary mt-5' href='/$data[domain]/Cart'>Quay lại</a>
                </center>
            ";
        }
        ?>
    </div>
    <form class="col-4 border p-3" action="" method="post">
        <div><span class="fw-bold">Giao tới:</span> <?php echo @$_SESSION['user']['ho'] . " " . @$_SESSION['user']['ten'] ?></div>
        <div><span class="fw-bold">SDT:</span> <?php echo @$_SESSION['user']['sdt'] ?></div>
        <div><span class="fw-bold">Địa chỉ:</span> <?php echo @$_SESSION['user']['dc'] ?></div>
        <div class='fs-5 text-danger my-5'><span class="fw-bold ">Tổng:</span> <?php echo @$totalCost ?></div>
        <p align="center" class="m-0"><button type="submit" name="confirm" class="btn btn-primary"> Đặt hàng</button></p>
    </form>
</div>