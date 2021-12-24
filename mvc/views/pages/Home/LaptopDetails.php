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
        echo "<div class='col-12'>
     <div class='card mb-3' style='width: 640px; '>
     <div class='row'  >
       <div class='col-12' align='center'>
         <img class='col' src='$data[dir]images/$id/$images[0]' style='max-height:400px;'/>
         <h3 class='card-title'>$name</h3>
       </div>
       <div class='col-12'>
         <div class='card-body'>
           <p class='card-text'>$manu</p>
           <p class='card-text'>$type</p>
           <p class='card-text'>$r_t</p>
           <p class='card-text'>$insur</p>
           <p class='card-text'>$cpu</p>
           <p class='card-text'>$gpu</p>
           <p class='card-text'>$ram</p>
           <p class='card-text'>$st</p>
           <p class='card-text'>$sr</p>
           <p class='card-text'>$audio</p>
           <p class='card-text'>$cn</p>
           <p class='card-text'>$o_f</p>
           <p class='card-text'>$d_w</p>
           <p class='card-text'>$mate</p>
           <p class='card-text'>$batt</p>
           <p class='card-text'>$os</p>
           <h5 class='card-title'>$price</h5>
         </div>
       </div>
     </div>
   </div>
   </div>
   ";
    }
    ?>
</div>