<?php
class LaptopTypeModel extends DB
{
     public function Get()
     {
          $qr = "Select * from laptop_type";
          $sql = mysqli_query($this->con, $qr);
          $kq = array();
          while ($row = mysqli_fetch_array($sql)) {
               $kq[] = $row;
          }
          // $kq=json_encode($kq);
          return $kq;
     }

     public function Add($id, $name)
     {
          $qr = "INSERT INTO `laptop_type`(`ID_Type`, `Name_Type`) VALUES ('$id','$name')";
          $sql = mysqli_query($this->con, $qr);
          return $sql;
     }

     public function Edit($id, $name)
     {
          $qr = "UPDATE `laptop_type` SET `Name_Type`='$name' WHERE `ID_Type`='$id'";
          $sql = mysqli_query($this->con, $qr);
          return $sql;
     }

     public function Delete($id)
     {
          $qr = "DELETE FROM `laptop_type` WHERE `ID_Type` = '$id'";
          $sql = mysqli_query($this->con, $qr);
          return $sql;
     }
     function CheckID($id)
     {   
          $pattern = "/[A-Za-z0-9]/u";
          if (strlen($id) < 4 || strlen($id) > 10) return "<div style='color:red;'>Độ dài phải từ 4 đến 10 ký tự</div>";
          if (!preg_match($pattern, $id)) return "<div style='color:red;'>Không gồm ký tự đặc biệt</div>";
          return "Hợp lệ";
     }
     function CheckName($id)
     {
          $pattern = "/[A-Za-z]/u";
          if (strlen($id) < 1 || strlen($id) > 100) return "<div style='color:red;'>Độ dài phải từ 1 đến 100 ký tự</div>";
          if (!preg_match($pattern, $id)) return "<div style='color:red;'>không gồm ký tự đặc biệt hoặc chữ số</div>";
          return "Hợp lệ";
     }
}
