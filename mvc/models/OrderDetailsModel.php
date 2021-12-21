<?php
     class OrderDetailsModel extends DB
     {
          public function Get()
          {
               $qr="SELECT * FROM `order_details`";
               $sql=mysqli_query($this->con,$qr);
               $kq=array();
               while($row=mysqli_fetch_array($sql)){
                    $kq[]=$row;
               }
               // $kq=json_encode($kq);
               return $kq;
          }
     }
