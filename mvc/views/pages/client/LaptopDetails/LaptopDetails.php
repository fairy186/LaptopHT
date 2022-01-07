<?php
$id = $data['dLap']['ID_Lap'];
$name = $data['dLap']['Name_Lap'];
$audio = $data['dLap']['Audio'];
$images = json_decode($data['dLap']['Images'], 1);
$ram = json_decode($data['dLap']['RAM'], 1);
$connection = json_decode($data['dLap']['Connection'], 1);
$other_Feature = json_decode($data['dLap']['Other_Feature'], 1);
$screen = json_decode($data['dLap']['Screen'], 1);
$price = $this->num_to_price($data['dLap']['Price']);
$id_user = $_SESSION['user']['id'];
?>
<div class="container-fruit row">
    <div class="col-6">
        <div id="carouselExampleInterval" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                foreach ($images as $key => $value) {
                    if ($key == 0) {
                        echo "<div class='carousel-item active'>
                                <img src='/$data[domain]/images/$id/$value' class='d-block w-100'>
                            </div>";
                    } else {
                        echo "<div class='carousel-item'>
                                <img src='/$data[domain]/images/$id/$value' class='d-block w-100'>
                            </div>";
                    }
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div>
            <h4 style="color: red;" align="right">Giá <?php echo $price ?></h4>
        </div>
        <div class="row">
            <div class="col ml-4">
                <button id="addCart" class="btn btn-success text-light" type="button"><span style="font-size:20px;"><i class="bi bi-cart-plus"></i> Thêm vào giỏ hàng</span></button>
                <button id="buyNow" type="button" class="btn btn-danger"> <span style="color:#FFFFFF; font-size:20px;">Mua ngay</span></button>
            </div>
        </div>
        <div class="border p-2 m-2">
            <h2>Bình luận</h2>
            <div class="d-flex flex-row mb-3 border rounded-pill p-2 m-2">
                <img src='https://scontent.fdad2-1.fna.fbcdn.net/v/t39.30808-1/c549.60.714.715a/s240x240/259366947_1606516443012722_4802412669079552611_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=7206a8&_nc_ohc=nkNANSnkU-EAX8d7S7n&_nc_ht=scontent.fdad2-1.fna&oh=00_AT-rmilFRplYiVQThMhrqytX67-nhK9oDgDYK6CcCzP4Bw&oe=61D90829' class='rounded-circle' style="width:50px; height:50px;" />
                <textarea id="inp_comment" class="form-control flex-grow-1 mx-2 rounded-pill scroll" placeholder="bình luận" style="height:50px;"></textarea>
                <button id="btn_comment" class="btn btn-outline-primary rounded-pill m-0" tybe="button"><i class="bi bi-send fs-4"></i></button>
            </div>
            <div id="body_comment">
                <?php
                foreach ($data['dComm'] as $key => $value) {
                    $time_comm = $this->convert_time($value['Time_Comm']);
                    echo "
                    <div class='border rounded p-2 m-2 comment' >
                        <div>
                        <img src='https://scontent.fdad2-1.fna.fbcdn.net/v/t39.30808-1/c549.60.714.715a/s240x240/259366947_1606516443012722_4802412669079552611_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=7206a8&_nc_ohc=nkNANSnkU-EAX8d7S7n&_nc_ht=scontent.fdad2-1.fna&oh=00_AT-rmilFRplYiVQThMhrqytX67-nhK9oDgDYK6CcCzP4Bw&oe=61D90829' class='rounded-circle' style='width:50px; height:50px;' />
                        <span class='fw-bold name_cm'>$value[First_Name] $value[Last_Name]</span>        
                        </div>
                        <div>
                            <p class='ct_cm' style='margin-left:50px;'>$value[Content]</p>
                            <p align = 'right'> <small class='small text-muted'>$time_comm</small></p>
                        </div>
                    </div>
                    ";
                }
                ?>
            </div>
        </div>
    </div>
    <div class="col-6">
        <h2><?php echo $name ?></h2>
        <div class="card border-light mb-3" style="max-width: 100rem;">
            <div class="col-12 ">
                <h5 class="card-header" style="background-color: #C6DEF7;">Tổng quan</h5>
                <div class="card-body">
                    <div class="row">
                        <label class="card-title col-md-4 col-label">CPU</label>
                        <div class="col-md-8 ">
                            <p class="card-text"><?php echo $data['dLap']['CPU'] ?></p>
                        </div>
                        <label class="card-title col-md-4 col-label">GPU</label>
                        <div class="col-md-8 ">
                            <p class="card-text"><?php echo $data['dLap']['GPU'] ?></p>
                        </div>
                        <label class="card-title col-md-4 col-label">Bảo hành</label>
                        <div class="col-md-8 ">
                            <p class="card-text"><?php echo $data['dLap']['Insurance'] ?></p>
                        </div>
                        <label class="card-title col-md-4 col-label">Năm ra mắt</label>
                        <div class="col-md-8 ">
                            <p class="card-text"><?php echo $data['dLap']['Release_Time'] ?></p>
                        </div>
                    </div>
                </div>

                <h5 class="card-header" style="background-color: #C6DEF7;">Bộ nhớ RAM, Ổ cứng</h5>
                <div class="card-body">
                    <div class="row">
                        <label class="card-title col-md-4 col-label">Dung lượng</label>
                        <div class="col-md-8 ">
                            <p class="card-text"><?php echo $ram['memRAM'] ?></p>
                        </div>
                        <label class="card-title col-md-4 col-label">Loại RAM</label>
                        <div class="col-md-8 ">
                            <p class="card-text"><?php echo $ram['typeRAM'] ?></p>
                        </div>
                        <label class="card-title col-md-4 col-label">Bus RAM</label>
                        <div class="col-md-8 ">
                            <p class="card-text"><?php echo $ram['busRAM'] ?></p>
                        </div>
                        <label class="card-title col-md-4 col-label">Hỗ trợ tối đa</label>
                        <div class="col-md-8 ">
                            <p class="card-text"><?php echo $ram['maxRAM'] ?></p>
                        </div>
                    </div>
                </div>

                <h5 class="card-header" style="background-color: #C6DEF7;">Màn hình</h5>
                <div class="card-body">
                    <div class="row">
                        <label class="card-title col-md-4 col-label">Kích thước</label>
                        <div class="col-md-8 ">
                            <p class="card-text"><?php echo $screen['sizeSC'] ?></p>
                        </div>
                        <label class="card-title col-md-4 col-label">Độ phân giải</label>
                        <div class="col-md-8 ">
                            <p class="card-text"><?php echo $screen['resoSC'] ?></p>
                        </div>
                        <label class="card-title col-md-4 col-label">Tần số quét</label>
                        <div class="col-md-8 ">
                            <p class="card-text"><?php echo $screen['freSC'] ?></p>
                        </div>
                        <label class="card-title col-md-4 col-label">Công nghệ</label>
                        <div class="col-md-8 ">
                            <p class="card-text"><?php echo $screen['techSC'] ?></p>
                        </div>
                    </div>
                </div>
                <h5 class="card-header" style="background-color: #C6DEF7;">Kết nối & Tính năng</h5>
                <div class="card-body">
                    <div class="row">
                        <label class="card-title col-md-4 col-label">Cổng kết nối</label>
                        <div class="col-md-8 ">
                            <p class="card-text"><?php echo $connection['port'] ?></p>
                        </div>
                        <label class="card-title col-md-4 col-label">Kết nối không dây</label>
                        <div class="col-md-8 ">
                            <p class="card-text"><?php echo $connection['wireless'] ?></p>
                        </div>
                        <label class="card-title col-md-4 col-label">Âm thanh</label>
                        <div class="col-md-8 ">
                            <p class="card-text"><?php echo $audio ?></p>
                        </div>
                        <label class="card-title col-md-4 col-label">Webcam</label>
                        <div class="col-md-8 ">
                            <p class="card-text"><?php echo $other_Feature['webcam'] ?></p>
                        </div>
                        <label class="card-title col-md-4 col-label">Đèn bàn phím</label>
                        <div class="col-md-8 ">
                            <p class="card-text"><?php echo $other_Feature['ledKB'] ?></p>
                        </div>
                    </div>
                </div>
                <h5 class="card-header" style="background-color: #C6DEF7;">Thông tin khác</h5>
                <div class="card-body">
                    <div class="row">
                        <label class="card-title col-md-4 col-label">Thông số vật lý</label>
                        <div class="col-md-8 ">
                            <p class="card-text"><?php echo $data['dLap']['Dimen_Wei'] ?></p>
                        </div>
                        <label class="card-title col-md-4 col-label">Chất liệu</label>
                        <div class="col-md-8 ">
                            <p class="card-text"><?php echo $data['dLap']['Material'] ?></p>
                        </div>
                        <label class="card-title col-md-4 col-label">Pin</label>
                        <div class="col-md-8 ">
                            <p class="card-text"><?php echo $data['dLap']['Battery'] ?></p>
                        </div>
                        <label class="card-title col-md-4 col-label">Tính năng khác</label>
                        <div class="col-md-8 ">
                            <p class="card-text"><?php echo $other_Feature['otherF'] ?></p>
                        </div>
                        <label class="card-title col-md-4 col-label">Hệ điều hành</label>
                        <div class="col-md-8 ">
                            <p class="card-text"><?php echo $data['dLap']['OS'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        var btnAddCart = document.getElementById('addCart')
        var toastLive = document.getElementById('liveToast')
        if (btnAddCart) {
            btnAddCart.addEventListener('click', function() {
                addCart();
                update_cart();
                var toast = new bootstrap.Toast(toastLive)
                toast.show()
            })
        }
        $("#btn_comment").click(function() {
            comment();
        });
    });

    function comment() {
        var content = $("#inp_comment").val();
        $("#inp_comment").val('');
        console.log(content);
        $.post('<?php echo "/$data[domain]/Ajax/Comment/$id/$id_user/" ?>' + content, {}, function(data) {
            console.log(data);
            var d=JSON.parse(data);
            var newComment = $("#fram_comment").clone().val("id","").css("display","block");
            newComment.find(".name_cm").html('<?php echo $_SESSION['user']['ho']." ".$_SESSION['user']['ten'];?>');
            newComment.find(".ct_cm").html(content);
            newComment.find(".small").html(d);
            $("#body_comment").prepend(newComment);
        })
    }

    function addCart() {
        $.post('<?php echo "/$data[domain]/Ajax/AddCart/$id/" . $_SESSION['user']['id']; ?>', {}, function(data) {
            $(".toast-body").html(JSON.parse(data));
        })
    };
</script>
<div id="fram_comment" class='border rounded p-2 m-2 comment' style=" display: none;">
    <div>
        <img src='https://scontent.fdad2-1.fna.fbcdn.net/v/t39.30808-1/c549.60.714.715a/s240x240/259366947_1606516443012722_4802412669079552611_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=7206a8&_nc_ohc=nkNANSnkU-EAX8d7S7n&_nc_ht=scontent.fdad2-1.fna&oh=00_AT-rmilFRplYiVQThMhrqytX67-nhK9oDgDYK6CcCzP4Bw&oe=61D90829' class='rounded-circle' style='width:50px; height:50px;' />
        <span class='fw-bold name_cm'></span>
    </div>
    <div>
        <p class='ct_cm' style='margin-left:50px;'></p>
        <p align='right'> <small class='small text-muted'></small></p>
    </div>
</div>