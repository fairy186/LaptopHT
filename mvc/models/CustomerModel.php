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

     public function Add($first_name, $last_name, $address, $phone, $email, $account, $password)
     {
          $qr = "INSERT INTO `customer`(`First_Name`, 
                                        `Last_Name`, `Address`, 
                                        `Phone`, `Email`, `Account`, `Password`)
               VALUES ('$first_name','$last_name','$address','$phone','$email','$account','$password')";
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
          return $this->check($val, 1, 100, 11100);
     }

     function CheckLastName($val)
     {
          return $this->check($val, 1, 20, 11100);
     }

     function CheckPhone($val)
     {
          return $this->check($val, 10, 10, 10);
     }

     function CheckAccount($val)
     {
          return $this->check($val, 8, 32, 10010);
     }
     
     function CheckPassword($val)
     {
          return $this->check($val, 8, 32, 10011);
     }
     function CheckEmail($val)
     {
          return $this->check($val, 8, 32, 10011);
     }
     function CheckAddress($val)
     {
          return $this->check($val, 8, 32, 10011);
     }


}
