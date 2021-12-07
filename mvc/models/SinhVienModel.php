<?php
     class SinhVienModel extends DB{
          public function GetSV(){
               return "a";
          }
          public function Tong($n,$m){
               return $n+$m;
          }
          public function SinhVien(){
               $qr="Select * from sinhvien";
               return mysqli_query($this->con,$qr);
          }
     }
?>