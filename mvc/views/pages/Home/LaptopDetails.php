<div class="row row-cols-1">
    <?php
  $dLap = $data['dLap'];
  // print_r($dLap);
  for ($i = 0; $i < count($dLap); $i++) {
    $id = $dLap[$i]['ID_Lap'];
    $images = json_decode($dLap[$i]['Images']);
    $name = $dLap[$i]['Name_Lap'];
    $price = $dLap[$i]['Price'];
    $insur = $dLap[$i]['Insurance'];
    $type = $dLap[$i]['Name_Type'];
    $manu = $dLap[$i]['Name_Manu'];
    $r_t = $dLap[$i]['Release_Time'];
    $cpu = $dLap[$i]['CPU'];
    $gpu = $dLap[$i]['GPU'];
    $ram = $dLap[$i]['RAM'];
    $st = $dLap[$i]['Storage'];
    $sr = $dLap[$i]['Screen'];
    $audio = $dLap[$i]['Audio'];
    $cn = $dLap[$i]['Connection'];
    $o_f = $dLap[$i]['Other_Feature'];
    $d_w = $dLap[$i]['Dimen_Wei'];
    $mate = $dLap[$i]['Material'];
    $batt = $dLap[$i]['Battery'];
    $os = $dLap[$i]['OS'];
    echo "
    <div class='col-12'>
    <div class='card mb-3' style='width: 640px; '>
        <div class='row'>
            <div class='col-12' align='center'>
                <img class='col' src='$data[dir]images/$id/$images[0]' style='max-height:400px;' />
                <h3 class='card-title'>$name</h3>
            </div>
            <div class='col-12'>
                <div class='card-body'>
                    <p class='card-text'>Hảng: $manu</p>
                    <p class='card-text'>Loại: $type</p>
                    <p class='card-text'>Năm: $r_t</p>
                    <p class='card-text'>Bảo hành: $insur</p>

                    <div class='card border-light card-header'>Bộ xử lí</div>
                    <div class='card-body'>
                        <p class='card-text'>CPU: $cpu</p>
                        <p class='card-text'>GPU: $gpu</p>
                    </div>

                    <div class='card border-light card-header'>Bộ nhớ RAM, Ổ cứng</div>
                    <div class='card-body'>
                        <p class='card-text'>RAM: $ram</p>
                        <p class='card-text'>Ổ cứng: $st</p>
                    </div>
                    <div class='card border-light card-header'>Màn hình và Âm thanh </div>
                    <div class='card-body'>
                        <p class='card-text'>Màn hình: $sr</p>
                    <p class='card-text'>Ảm thanh: $audio</p>

                    </div>

                    <div class='card border-light card-header'>Cổng kết nối và Tính năng khác</div>
                    <div class='card-body'>
                    <p class='card-text'>Kết nối: $cn</p>
                    <p class='card-text'>Tính năng khác: $o_f</p>
                    </div>
                    

                    <div class='card border-light card-header'>Kích thước và Trọng lượng</div>
                    <div class='card-body'>
                    <p class='card-text'>Trọng lượng & kích thước: $d_w</p>
                    <p class='card-text'>Chất liệu: $mate</p>
                    </div>

                    <div class='card border-light card-header'>Thông tin khác</div>
                    <div class='card-body'>
                    <p class='card-text'>Pin: $batt</p>
                    <p class='card-text'>Hệ điều hành: $os</p>
                    </div>
                    
                    <h1 class='card-title' style='text-align: right;'>$price</h1>
                </div>
            </div>
        </div>
    </div>
</div>
   ";
  }
  ?>
</div>
