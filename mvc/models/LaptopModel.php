<?php
     class LaptopModel extends DB{
          public function Get(){
               $qr="Select * from laptop";
               $sql=mysqli_query($this->con,$qr);
               $kq=array();
               while($row=mysqli_fetch_assoc($sql)){
                    $kq[]=$row;
               }
               // $kq=json_encode($kq);
               return $kq;
          }
     }
?>