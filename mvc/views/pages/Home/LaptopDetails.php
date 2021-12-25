<?php
$id = $data['dLap']['ID_Lap'];
$name = $data['dLap']['Name_Lap'];
$audio = $data['dLap']['Audio'];
$images = json_decode($data['dLap']['Images'], 1);
$ram = json_decode($data['dLap']['RAM'], 1);
$connection = json_decode($data['dLap']['Connection'], 1);
$other_Feature = json_decode($data['dLap']['Other_Feature'], 1);
$screen = json_decode($data['dLap']['Screen'], 1);

?>
<div class="container-fruit row">
    <div class="col-6">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                foreach ($images as $key => $value) {
                    if ($key == 0) {
                        echo "<div class='carousel-item active'>
                                <img src='$data[dir]images/$id/$value' class='d-block w-100'>
                            </div>";
                    } else {
                        echo "<div class='carousel-item'>
                                <img src='$data[dir]images/$id/$value' class='d-block w-100'>
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
    </div>
    <div class="col-6">
        <h3><?php echo $name ?></h3>
        <div class="card border-light mb-3" style="max-width: 100rem;">
            <div class="col-12 ">
                <h5 class="card-header">Tổng quan</h5>
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

                <h5 class="card-header">Bộ nhớ RAM, Ổ cứng</h5>
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

                <h5 class="card-header">Màn hình</h5>
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

                <h5 class="card-header">Kết nối & Tính năng</h5>
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

                <h5 class="card-header">Thông tin khác</h5>
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
        <h2 style="" align="right"> Giá <?php echo $data['dLap']['Price'] ?></h2>
    </div>
</div>