<?php
     class SliderModel extends DB{
          public function Get(){
               $qr="Select * from slider";
               $sql=mysqli_query($this->con,$qr);
               $kq=array();
               while($row=mysqli_fetch_array($sql)){
                    $kq[]=$row;
               }
               // $kq=json_encode($kq);
               return $kq;
          }
     }
?>