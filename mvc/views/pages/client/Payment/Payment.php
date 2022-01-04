<section>
    <div class="container" >
        <div>
            <?php
            foreach ($data['dLap'] as $key => $value) {
                $id = $value['ID_Lap'];
                $name = $value['Name_Lap'];
                $price = num_to_price($value['Price']);
                $images = json_decode($value['Images'], 1);

                echo "
            <div class='row' style='text-align: none;'>
                <div class='row col-9 mb-2 mt-2 border d-inline-flex' style='max-width:600px;'>
                    <div class='col-3 '>
                        <img src='/$data[domain]/images/$id/$images[0]' style='max-height:70px;'>
                    </div>
                    <div class='col-4 '>
                        <h5 class='float-start '>$name</h5>
                    </div>
                    <div class='col-2 '>
                        <span class='float-end'>$price</span>
                    </div>
                </div>
            </div>
            ";
            }
            $cost = num_to_price($data['cost']);
            $name_user = $_SESSION['user']['ho'] . " " . $_SESSION['user']['ten'];
            $address = $_SESSION['user']['dc'];

            echo "
            <div class='row '>
            <div>
                <h4>$name_user</h4>
                <h6 >$cost</h6>
            </div>
            <div> <span>
            $address
            </span></div>
        </div>
            ";

            ?>
            <form action="" method="post">
                <div class="mt-3">
                    <center>
                        <button type='submit' name='payment' class='btn btn-warning'>Thanh toán</button>
                    </center>
                </div>
            </form>
        </div>
    </div>
</section>