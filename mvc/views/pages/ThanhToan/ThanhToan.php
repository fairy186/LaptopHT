<div>
    <?php
    echo "</br>";
    print_r($data['dLap']);
    echo $data['cost'];
    
    ?>

</div>
    <?php
    foreach ($data['dLap'] as $key => $value) {
        $id = $value['ID_Lap'];
        $name = $value['Name_Lap'];
        $cost = $data['cost'];
        $price = num_to_price($value['Price']);
        $images = json_decode($value['Images'], 1);
        $name_user = $_SESSION['user']['ho']." ".$_SESSION['user']['ten'];
        echo "
    <div class='row border'>
    <center>
        <div class='row col-12 mb-2 mt-2'>
            <div class='col-3'>
                <img src='/$data[domain]/images/$id/$images[2]' style='max-height:90px;'>
                <label>$name</label>
            </div>
            <div class='col-2 mt-5'>
                <label>$price</label>
            </div>
            <div class='col-2 mt-5'>
            <label>$name_user</label>
            </div>
            <div class='col-2 mt-5'>
            </div>
        </div>
    </center>
</div>
    ";
    }
    echo $cost;

    ?>

    <form action="" method="post">
    <div class="mt-3">
        <center>
            <button type='submit' name='payment' class='btn btn-warning'>Thanh toán</button>
        </center>
    </div>
    </form>

</div>