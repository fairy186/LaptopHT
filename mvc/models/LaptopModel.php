<?php
class LaptopModel extends DB
{
     public function Get()
     {
          $qr = "Select * from laptop";
          $sql = mysqli_query($this->con, $qr);
          $kq = array();
          while ($row = mysqli_fetch_array($sql)) {
               $kq[] = $row;
          }
          return $kq;
     }

     public function GetByID($id)
     {
          $qr = "SELECT * FROM `laptop` WHERE `ID_Lap` ='$id'";
          $sql = mysqli_query($this->con, $qr);
          $row = ["Name_Lap" => ""];
          if (mysqli_num_rows($sql) == 1)
               $row = mysqli_fetch_array($sql);
          return $row;
     }

     public function Add(
          $id,
          $name,
          $price,
          $insur,
          $id_type,
          $id_manu,
          $img,
          $cpu,
          $gpu,
          $ram,
          $storage,
          $screen,
          $audio,
          $connec,
          $o_f,
          $d_w,
          $material,
          $battery,
          $os,
          $r_t
     ) 
     {
          $qr = "INSERT INTO `laptop`(`ID_Lap`,`Name_Lap`, `Price`, `Insurance`, 
                                        `ID_Type`, `ID_Manu`, `Images`, `CPU`, 
                                        `GPU`, `RAM`, `Storage`, `Screen`, `Audio`, 
                                        `Connection`, `Other_Feature`, `Dimen_Wei`, 
                                        `Material`, `Battery`, `OS`, `Release_Time`) 
                    VALUES ('$id','$name','$price','$insur','$id_type',
                         '$id_manu','$img','$cpu','$gpu','$ram','$storage',
                         '$screen','$audio','$connec','$o_f','$d_w','$material',
                         '$battery','$os','$r_t')";
          echo $qr;
          $sql = mysqli_query($this->con, $qr);
          return $sql;
     }

     public function Edit(
          $id,
          $name,
          $price,
          $insur,
          $id_type,
          $id_manu,
          $img,
          $cpu,
          $gpu,
          $ram,
          $storage,
          $screen,
          $audio,
          $connec,
          $o_f,
          $d_w,
          $material,
          $battery,
          $os,
          $r_t
     ) 
     {
          $qr = "UPDATE `laptop` SET `Name_Lap`='$name',`Price`='$price',
                                   `Insurance`='$insur',`ID_Type`='$id_type',
                                   `ID_Manu`='$id_manu',`Images`='$img',
                                   `CPU`='$cpu',`GPU`='$gpu',`RAM`='$ram',
                                   `Storage`='$storage',`Screen`='$screen',
                                   `Audio`='$audio',`Connection`='$connec',
                                   `Other_Feature`='$o_f',`Dimen_Wei`='$d_w',
                                   `Material`='$material',`Battery`='$battery',
                                   `OS`='$os',`Release_Time`='$r_t' WHERE `ID_Lap`='$id'";
          $sql = mysqli_query($this->con, $qr);
          return $sql;
     }

     public function Delete($id)
     {
          $qr = "DELETE FROM `laptop` WHERE `ID_Lap` = '$id'";
          $sql = mysqli_query($this->con, $qr);
          return $sql;
     }
     
     function CheckID($val)
     {
          $qr = "SELECT * FROM `laptop` WHERE `ID_Lap` = '$val'";
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
