<div class="row row-cols-1 row-cols-md-2 g-4">
     <?php 
$dLap=$data['dLap'];
// print_r($dLap);
for ($i=0; $i < count($dLap) ; $i++) {
     $img="./images/".$dLap[$i]['ID_Lap']."/h1.jpg";
     $name=$dLap[$i]['Name_Lap'];
     $cpu=$dLap[$i]['CPU'];
     $gpu=$dLap[$i]['GPU'];
     $price=$dLap[$i]['Price'];
     $screen=$dLap[$i]['Screen'];
     $pin=$dLap[$i]['Battery'];
     $rt=$dLap[$i]['Release_Time'];
     echo "<div class='col'>
     <div class='card mb-3' style='max-width: 640px;'>
     <div class='row g-0'>
       <div class='col-md-8'>
         <img src='$img' class='img-fluid rounded-start' alt='...'>
         <h6 class='card-title'>$name</h6>
       </div>
       <div class='col-md-4'>
         <div class='card-body'>
           <p class='card-text'>$screen</p>
           <p class='card-text'>$cpu</p>
           <p class='card-text'>$gpu</p>
           <p class='card-text'>$pin</p>
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