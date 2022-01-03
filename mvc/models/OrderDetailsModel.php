<?php
class OrderDetailsModel extends DB
{
     public function Get()
     {
          $qr = "SELECT * FROM `order_details`";
          $sql = mysqli_query($this->con, $qr);
          $kq = array();
          while ($row = mysqli_fetch_array($sql)) {
               $kq[] = $row;
          }
          // $kq=json_encode($kq);
          return $kq;
     }

     public function Add($id_order, $id_lap, $quantity, $price)
     {
          $qr = "INSERT INTO `order_details`(`ID_Order`,`ID_Lap`, `Quantity`, `Price`) VALUES ('$id_order','$id_lap','$quantity','$price')";
          $sql = mysqli_query($this->con, $qr);
          return $sql;
     }
}
