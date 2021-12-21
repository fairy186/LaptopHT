<?php
class OrderInfoModel extends DB
{
     public function Get()
     {
          $qr = "SELECT * FROM `order_info`";
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
          $qr = "SELECT * FROM `order_info`,`customer` WHERE order_info.ID_Cus = customer.ID_Cus";
          $sql = mysqli_query($this->con, $qr);
          $kq = array();
          while ($row = mysqli_fetch_array($sql)) {
               $kq[] = $row;
          }
          // $kq=json_encode($kq);
          return $kq;
     }

     public function GetByID($id)
     {
          $qr = "SELECT * FROM `order_info` WHERE `ID_Order` ='$id'";
          $sql = mysqli_query($this->con, $qr);
          $row = ["ID_Cus" => ""];
          if (mysqli_num_rows($sql) == 1)
               $row = mysqli_fetch_array($sql);
          return $row;
     }

     public function Edit($id, $status_order)
     {
          $qr = "UPDATE `order_info` SET `Status_Order`='$status_order' WHERE `ID_Order`='$id'";
          $sql = mysqli_query($this->con, $qr);
          return $sql;
     }
}
