<?php
     class ManufacturerModel extends DB{
          public function Get(){
               $qr="Select * from manufacturer";
               $sql=mysqli_query($this->con,$qr);
               $kq=array();
               while($row=mysqli_fetch_array($sql)){
                    $kq[]=$row;
               }
               // $kq=json_encode($kq);
               return $kq;
          }

          public function Add($id, $name){
               $qr="INSERT INTO `manufacturer`(`ID_Manu`, `Name_Manu`) VALUES ('$id','$name')";
               $sql=mysqli_query($this->con,$qr);
               return $sql;
          }

          public function Edit($id, $name){
               $qr="UPDATE `manufacturer` SET `Name_Manu`='$name' WHERE `ID_Manu`='$id'";
               $sql=mysqli_query($this->con,$qr);
               return $sql;
          }

          public function Delete($id){
               $qr="DELETE FROM `manufacturer` WHERE `ID_Manu` = '$id'";
               $sql=mysqli_query($this->con,$qr);
               return $sql;
          }
     }
?>