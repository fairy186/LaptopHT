<?php

class CustomerModel extends DB
{
     public function Get()
     {
          $qr = "SELECT * FROM `customer`";
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
          $qr = "SELECT * FROM `customer` WHERE `ID_Cus` ='$id'";
          $sql = mysqli_query($this->con, $qr);
          $row = ["Last_Name" => ""];
          if (mysqli_num_rows($sql) == 1)
               $row = mysqli_fetch_array($sql);
          return $row;
     }

     public function Add($id, $first_name, $last_name, $address, $phone, $email, $account, $password)
     {
          $qr = "INSERT INTO `customer`(`ID_Cus`, `First_Name`, 
                                        `Last_Name`, `Address`, 
                                        `Phone`, `Email`, `Account`, `Password`)
               VALUES ('$id','$first_name','$last_name','$address','$phone','$email','$account','$password')";
          $sql = mysqli_query($this->con, $qr);
          return $sql;
     }

     public function Edit($id, $first_name, $last_name, $address, $phone, $email, $account, $password)
     {
          $qr = "UPDATE `customer` SET `First_Name`='$first_name',`Last_Name`='$last_name',
                                        `Address`='$address',`Phone`='$phone',
                                        `Email`='$email',`Account`='$account',
                                        `Password`='$password'  
                              WHERE `ID_Cus`='$id'";
          $sql = mysqli_query($this->con, $qr);
          return $sql;
     }

     public function Delete($id)
     {
          $qr = "DELETE FROM `customer` WHERE `ID_Cus` = '$id'";
          $sql = mysqli_query($this->con, $qr);
          return $sql;
     }

     function CheckFirstName($val)
     {
          // $pattern = "/^([a-zA-Z0-9\s]+)$/i";
          $pattern = "/^([a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i";
          if (strlen($val) < 1 || strlen($val) > 100) return [0, "<i class='bi bi-x-circle'></i>  Độ dài tên chỉ được từ 1 đến 100 ký tự"];
          if (!preg_match($pattern, $val)) return [0, "<i class='bi bi-x-circle'></i> Tên không gồm ký tự đặc biệt"];
          return [1, "<i class='bi bi-check2-circle'></i> Hợp lệ"];
     }

     function CheckLastName($val)
     {
          // $pattern = "/^([a-zA-Z0-9\s]+)$/i";
          $pattern = "/^([a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i";
          if (strlen($val) < 1 || strlen($val) > 20) return [0, "<i class='bi bi-x-circle'></i>  Độ dài tên chỉ được từ 1 đến 20 ký tự"];
          if (!preg_match($pattern, $val)) return [0, "<i class='bi bi-x-circle'></i> Tên không gồm ký tự đặc biệt"];
          return [1, "<i class='bi bi-check2-circle'></i> Hợp lệ"];
     }

     function CheckPhone($val)
     {
          // $pattern = "/^([a-zA-Z0-9\s]+)$/i";
          $pattern = "/^([0-9]+)$/i";
          if (strlen($val) < 1 || strlen($val) > 10) return [0, "<i class='bi bi-x-circle'></i>  Độ dài số điện thoại chỉ được từ 1 đến 10 ký tự"];
          if (!preg_match($pattern, $val)) return [0, "<i class='bi bi-x-circle'></i> Số điện thoại chỉ bao gồm số"];
          return [1, "<i class='bi bi-check2-circle'></i> Hợp lệ"];
     }

     function CheckAccount($val)
     {
          // $pattern = "/^([a-zA-Z0-9\s]+)$/i";
          $pattern = "/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i";
          if (strlen($val) < 10 || strlen($val) > 32) return [0,"<i class='bi bi-x-circle'></i>  Độ dài tên tài khoản phải được từ 10 đến 32 ký tự"];
          if (!preg_match($pattern, $val)) return [0,"<i class='bi bi-x-circle'></i> Tên tài khoản không gồm ký tự đặc biệt"];
          return [1,"<i class='bi bi-check2-circle'></i> Hợp lệ"];
     }
}
