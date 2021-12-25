
<div class="row row-cols-1 row-cols-md-2 g-4">
     <?php 
$dLap=$data['dLap'];
// print_r($dLap);
for ($i=0; $i < count($dLap) ; $i++) {
     $id=$dLap[$i]['ID_Lap'];
     $images = json_decode($dLap[$i]['Images']);
     $name=$dLap[$i]['Name_Lap'];
     $price=$dLap[$i]['Price'];
     $insur=$dLap[$i]['Insurance'];
     $type=$dLap[$i]['Name_Type'];
     $manu=$dLap[$i]['Name_Manu'];
     $r_t=$dLap[$i]['Release_Time'];
     echo "<div class='col'>
     <div class='card mb-3' style='max-width: 640px;'>
     <div class='row g-0'>
       <div class='col-md-8'>
         <img class='col' src='$data[dir]images/$id/$images[0]' style='max-height:200px;'/>
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