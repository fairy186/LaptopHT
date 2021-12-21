<?php
class ManufacturerModel extends DB
{
     public function Get()
     {
          $qr = "SELECT * FROM `manufacturer`";
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
          $qr = "SELECT * FROM `manufacturer` WHERE `ID_Manu` ='$id'";
          $sql = mysqli_query($this->con, $qr);
          $row = ["Name_Manu" => ""];
          if (mysqli_num_rows($sql) == 1)
               $row = mysqli_fetch_array($sql);
          return $row;
     }

     public function Add($id, $name)
     {
          $qr = "INSERT INTO `manufacturer`(`ID_Manu`, `Name_Manu`) VALUES ('$id','$name')";
          $sql = mysqli_query($this->con, $qr);
          return $sql;
     }

     public function Edit($id, $name)
     {
          $qr = "UPDATE `manufacturer` SET `Name_Manu`='$name' WHERE `ID_Manu`='$id'";
          $sql = mysqli_query($this->con, $qr);
          return $sql;
     }

     public function Delete($id)
     {
          $qr = "DELETE FROM `manufacturer` WHERE `ID_Manu` = '$id'";
          $sql = mysqli_query($this->con, $qr);
          return $sql;
     }
     function CheckID($val)
     {
          $qr = "SELECT * FROM `manufacturer` WHERE `ID_Manu` = '$val'";
          $sql = mysqli_query($this->con, $qr);
          if (mysqli_num_rows($sql) > 0)
               return " Mã hảng đã tồn tại";
          return $this->check($val, 4, 10);
     }
     function CheckName($val)
     {
          return $this->check($val, 1, 100, 11100);
     }
}
