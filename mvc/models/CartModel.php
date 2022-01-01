<?php
class CartModel extends DB
{
     public function Get()
     {
          $qr = "SELECT * FROM `cart`";
          $sql = mysqli_query($this->con, $qr);
          $kq = array();
          while ($row = mysqli_fetch_array($sql)) {
               $kq[] = $row;
          }
          // $kq=json_encode($kq);
          return $kq;
     }

     public function GetCart()
     {
          $qr = "SELECT * FROM `cart`,`laptop` WHERE cart.ID_Lap = laptop.ID_Lap";
          $sql = mysqli_query($this->con, $qr);
          $kq = array();
          while ($row = mysqli_fetch_assoc($sql)) {
               $kq[] = $row;
          }
          return $kq;
     }

     public function Add($id_lap, $id_cus, $quantity=1)
     {
          $qr = "INSERT INTO `cart`(`ID_Lap`, `ID_Cus`, `Quantity`) VALUES ('$id_lap','$id_cus','$quantity')";
          $sql = mysqli_query($this->con, $qr);
          return $sql;
     }
     public function Delete($id)
     {
          $qr = "DELETE FROM `cart` WHERE `ID_Lap` = '$id'";
          $sql = mysqli_query($this->con, $qr);
          return $sql;
     }

     
}
