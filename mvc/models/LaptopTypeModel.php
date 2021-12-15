<?php
class LaptopTypeModel extends DB
{
     public function Get()
     {
          $qr = "SELECT * FROM `laptop_type`";
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
          $qr = "SELECT * FROM `laptop_type` WHERE `ID_Type` ='$id'";
          $sql = mysqli_query($this->con, $qr);
          $row=["Name_Type"=>""];
          if(mysqli_num_rows($sql)==1)
               $row = mysqli_fetch_array($sql);
          return $row;
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
     function CheckID($val)
     {   
          $qr = "SELECT * FROM `laptop_type` WHERE `ID_Type` = '$val'";
          $sql = mysqli_query($this->con, $qr);
          if(mysqli_num_rows($sql)>0)
               return [0,"đã tồn tại"];
          $pattern = "/[^A-Za-z0-9]/u";
          if (strlen($val) < 4 || strlen($val) > 10) return [0,"độ dài phải từ 4 đến 10 ký tự"];
          if (preg_match($pattern, $val)) return [0,"chỉ gồm chữ số và chữ cái không dấu"];
          return [1,"Hợp lệ"];
     }
     function CheckName($val)
     {
          // $pattern = "/^([a-zA-Z0-9\s]+)$/i";
          $pattern = "/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i";
          if (strlen($val) < 1 || strlen($val) > 100) return [0," độ dài phải từ 1 đến 100 ký tự"];
          if (!preg_match($pattern, $val)) return [0,"không gồm ký tự đặc biệt hoặc chữ số"];
          return [1," Hợp lệ"];
     }
}
