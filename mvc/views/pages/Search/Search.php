<div class="row row-cols-1 row-cols-md-2 g-4">
  <?php
  $dLap = $data['dLap'];
  // print_r($dLap);
  if ($dLap != 0)
    foreach ($dLap as $key => $value){
      $id = $value['ID_Lap'];
      $images = json_decode($value['Images']);
      $name = $value['Name_Lap'];
      $price = $value['Price'];
      $insur = $value['Insurance'];
      $type = $value['Name_Type'];
      $manu = $value['Name_Manu'];
      $r_t = $value['Release_Time'];
      echo "<div class='col'>
     <div class='card mb-3' style='max-width: 640px;'>
     <div class='row g-0'>
       <div class='col-md-8'>
         <img class='col' src='/$data[domain]/images/$id/$images[0]' style='max-height:200px;'/>
         <h6 class='card-title'>$name</h6>
       </div>
       <div class='col-md-4'>
         <div class='card-body'>
           <p class='card-text'>$manu</p>
           <p class='card-text'>$type</p>
           <p class='card-text'>$r_t</p>
           <p class='card-text'>$insur</p>
           <h5 class='card-title'>$price</h5>
           <a href='/$data[domain]/Home/LaptopDetails/$id'>Chi tiết</a>
         </div>
       </div>
     </div>
   </div>
   </div>
   ";
    }
  ?>
</div>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>