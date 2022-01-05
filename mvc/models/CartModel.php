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

     public function GetFullInfo()
     {
          $qr = "SELECT * FROM `cart` JOIN `laptop` ON cart.ID_Lap = laptop.ID_lap
                                        JOIN `customer` ON cart.ID_Cus = customer.ID_Cus";
          $sql = mysqli_query($this->con, $qr);
          $kq = array();
          while ($row = mysqli_fetch_array($sql)) {
               $kq[] = $row;
          }
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


     public function GetNumPro($id)
     {
          $qr = "SELECT * FROM `cart` WHERE `ID_Cus` = '$id'";
          $sql = mysqli_query($this->con, $qr);
          if (mysqli_num_rows($sql) > 0)
               return mysqli_num_rows($sql);
          else
               return 0;
     }
     public function AddCart($id_lap, $id_cus)
     {
          $qr = "SELECT * FROM `cart` WHERE `ID_Lap`='$id_lap' and `ID_Cus`='$id_cus'";
          $sql = mysqli_query($this->con, $qr);
          if (mysqli_num_rows($sql)) {
               $qtt = mysqli_fetch_assoc($sql)['Quantity']+1;
               if ($this->Edit($id_lap, $id_cus, $qtt))
                    return "Số lượng + 1 ($qtt)";
               return "Thêm thất bại";
          }
          if ($this->Add($id_lap, $id_cus))
               return "Đã thêm vào giỏ hàng";
          return "Thêm thất bại";
     }
     public function Add($id_lap, $id_cus, $quantity = "")
     {
          if (empty($quantity))
               $quantity = 1;
          $qr = "INSERT INTO `cart`(`ID_Lap`, `ID_Cus`, `Quantity`) VALUES ('$id_lap','$id_cus','$quantity')";
          $sql = mysqli_query($this->con, $qr);
          return $sql;
     }
     public function Edit($id_lap, $id_cus, $quantity)
     {
          $qr = "UPDATE `cart` SET `Quantity`='$quantity'
                              WHERE `ID_Lap`='$id_lap' and `ID_Cus`='$id_cus'";
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
