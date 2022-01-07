<div class="row row-cols-1 row-cols-lg-4 g-4">
    <?php
    $dLap = $data['dLap'];
    // print_r($dLap);
    if ($dLap != 0)
        foreach ($dLap as $key => $value) {
            $id = $value['ID_Lap'];
            $images = json_decode($value['Images']);
            $name = $value['Name_Lap'];
            $price = $this->num_to_price($value['Price']);
            $screen = json_decode($value['Screen'], 1);
            $cpu = $value['CPU'];
            $gpu = $value['GPU'];
            $pin = $value['Battery'];
            $ram = json_decode($value['RAM'], 1);
            
            echo "
       <a href='/$data[domain]/LaptopDetails/$id' style='text-decoration: none; color: black'>
         <div class='col'>
             <div class='card mb-2 row'>
                 <div class='ml-3'>
                     <img src='/$data[domain]/images/$id/$images[0]' class='card-img-top' style='max-height:200px;'>
                     <h5 class='card-title'>$name</h5>
                 </div>
                 <div>
                     <div class='card-body'>
                         <h5 class='card-title'>$price</h5>
                         <div class='row'>
                             <label class='card-title col-md-4 col-label'>Màn hình</label>
                             <div class='col-md-8'>
                                 <p class='card-text'>$screen[sizeSC], $screen[resoSC], $screen[freSC]</p>
                             </div>
                             <label class='card-title col-md-4 col-label'>CPU</label>
                             <div class='col-md-8'>
                                 <p class='card-text'>$cpu</p>
                             </div>
                             <label class='card-title col-md-4 col-label'>GPU</label>
                             <div class='col-md-8'>
                                 <p class='card-text'>$gpu</p>
                             </div>
                             <label class='card-title col-md-4 col-label'>RAM</label>
                            <div class='col-md-8'>
                                <p class='card-text'>$ram[memRAM]</p>
                            </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </a>
       
    ";
        }
    ?>
</div>