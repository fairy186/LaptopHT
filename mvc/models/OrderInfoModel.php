<?php
     class OrderInfoModel extends DB{
          public function Get(){
               $qr="Select * from order_info";
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