<?php
     class LaptopTypeModel extends DB{
          public function Get(){
               $qr="Select * from laptop_type";
               $sql=mysqli_query($this->con,$qr);
               $kq=array();
               while($row=mysqli_fetch_array($sql)){
                    $kq[]=$row;
               }
               // $kq=json_encode($kq);
               return $kq;
          }

          public function Add($id, $name){
               $qr="INSERT INTO `laptop_type`(`ID_Type`, `Name_Type`) VALUES ('[$id]','[$name]')";
               $sql=mysqli_query($this->con,$qr);
               return $sql;
          }
     }
?>