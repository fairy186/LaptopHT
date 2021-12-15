<?php
class ManufacturerModel extends DB
{
     public function Get()
     {
          $qr = "Select * from manufacturer";
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
               return [0, "đã tồn tại"];
          $pattern = "/[^A-Za-z0-9]/u";
          if (strlen($val) < 4 || strlen($val) > 10) return [0, "độ dài phải từ 4 đến 10 ký tự"];
          if (preg_match($pattern, $val)) return [0, "chỉ gồm chữ số và chữ cái không dấu"];
          return [1, "Hợp lệ"];
     }

     function CheckName($val)
     {
          // $pattern = "/^([a-zA-Z0-9\s]+)$/i";
          $pattern = "/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i";
          if (strlen($val) < 1 || strlen($val) > 100) return [0, " độ dài phải từ 1 đến 100 ký tự"];
          if (!preg_match($pattern, $val)) return [0, "không gồm ký tự đặc biệt hoặc chữ số"];
          return [1, " Hợp lệ"];
     }
}
