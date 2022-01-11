<form action='/<?php echo $data['domain'] ?>/Order' name="order" class="py-3" method='post'>
    <div class="row border">
        <center>
            <div class="row col-12 mb-3">
                <div class='col-1 mt-3'>
                    <input class='form-check-input p-2' checked type='checkbox' id='check_all'>
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
    <div id="ProductInCart">
        <?php
        foreach ($data['dCart'] as $key => $value) {
            $id = $value['ID_Lap'];
            $name = $value['Name_Lap'];
            $quantity = $value['Quantity'];
            $price = $this->num_to_price($value['Price']);
            $images = json_decode($value['Images'], 1);
            echo "
                <div id_lap='$id' class='row mt-2 border product'>
                    <center>
                        <div  class='row col-12 mb-2 mt-2'>
                            <div class='col-1 mt-5'>
                                <input class='form-check-input p-2' checked name='id_lap[]' type='checkbox' value='$id'>
                            </div>
                            <div class='col-3'>
                                <img src='/$data[domain]/images/$id/$images[2]' style='max-height:90px;'>
                                <label>$name</label>
                            </div>
                            <div class='col-2 mt-5'>
                                <label gia='$value[Price]'>$price</label>
                            </div>
                            <div class='col-2 mt-5 d-flex align-items-start justify-content-center' >
                                <button id_lap='$id' type='button' class='btn-outline-dark border p-1 fw-bold Q_reduc' style='width: 30px;'>-</button><input class='quantity p-1 border' type='number' min='1' max='99' id_lap='$id' value='$quantity' style='text-align:center;width:50px;'><button id_lap='$id'  type='button' class='btn-outline-dark border p-1 fw-bold Q_incre' style='width: 30px;'>+</button>
                            </div>
                            <div sotien class='col-2 mt-5 text-danger'>
                            </div>
                            <div class='col-2 mt-5'>
                                <button type='button' id_lap='$id' class='btn btn-outline-danger py-0 remove_from_cart' style='font-size: 15px;'><i class='bi bi-x-lg'></i></button>
                            </div>
                        </div>
                    </center>
                </div>
                ";
        }
        ?>
    </div>
    <div class="border mt-2 fw-bold text-danger">
        <center>
            <div class='row col-12 mb-2 mt-2'>
                <div class='col-1'>
                </div>
                <div class='col-3'>
                </div>
                <div class='col-2'>
                </div>
                <div class='col-2 '>
                    Tổng:
                </div>
                <div tong class='col-2'>
                </div>
                <div class='col-2'>
                </div>
            </div>
        </center>
    </div>
    <div class="mt-3">
        <center>
            <button type='submit' name='sm_Order' class='btn btn-warning'>Đặt hàng</button>
        </center>
    </div>
</form>
<script>
    $(document).ready(function() {
        updateCost()
        $("form").keypress(function(event) {
            if (event.which == 13)
                return false;
        });
        $("#check_all").change(function() {
            if (this.checked) {
                $("input[name='id_lap[]'").each(function() {
                    this.checked = true;
                })
            } else {
                $("input[name='id_lap[]'").each(function() {
                    this.checked = false;
                })
            }
        });
        $("input[name='id_lap[]'").change(function() {
            var i = 1;
            $("input[name='id_lap[]'").each(function() {
                if (this.checked == false)
                    i = 0;
            });
            console.log(i);
            if (i == 1) {
                $("#check_all").attr("checked", "checked");
            } else {
                $("#check_all").removeAttr("checked");
            }
        });
        $(".Q_incre").click(function() {
            var id_lap = $(this).attr("id_lap");
            var val = parseInt($(".quantity[id_lap=" + id_lap + "]").val()) + 1;
            $.post('<?php echo "/$data[domain]/Ajax/Update_Cart/" ?>' + id_lap + '/' + val, {}, function(data) {
                if (JSON.parse(data))
                    $(".quantity[id_lap=" + id_lap + "]").val(val);
                updateCost();
                console.log(data);
            });
        })
        $(".Q_reduc").click(function() {
            var id_lap = $(this).attr("id_lap");
            var val = parseInt($(".quantity[id_lap=" + id_lap + "]").val()) - 1;
            $.post('<?php echo "/$data[domain]/Ajax/Update_Cart/" ?>' + id_lap + '/' + val, {}, function(data) {
                if (JSON.parse(data))
                    $(".quantity[id_lap=" + id_lap + "]").val(val);
                updateCost();
            });
        })
        $(".quantity").change(function() {
            var val = $(this).val();
            var id_lap = $(this).attr("id_lap");
            updateCost();
            $.post('<?php echo "/$data[domain]/Ajax/Update_Cart/" ?>' + id_lap + '/' + val, {}, function(data) {});
        })
        $(".remove_from_cart").click(function() {
            var id_lap = $(this).attr("id_lap");
            $.post('<?php echo "/$data[domain]/Ajax/Remove_Form_Cart/" ?>' + id_lap, {}, function(data) {
                $("div[id_lap=" + id_lap + "]").remove();
            })
        })
    })

    function updateCost() {
        s = 0
        $(".product").each(function() {
            dg = $(this).find("label[gia]").attr('gia')
            sl = $(this).find(".quantity").val()
            s = s + dg * sl;
            a = numberWithCommas(dg * sl)
            $(this).find("div[sotien]").html(a)
            console.log(a)
        })
        $("div[tong]").html(numberWithCommas(s));
    }

    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + 'đ';
    }
</script>