<?php
class AdminModel extends DB
{
    public function Get()
    {
        $qr = "SELECT * FROM `admin`";
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
        $qr = "SELECT * FROM `admin` WHERE `ID_Admin` ='$id'";
        $sql = mysqli_query($this->con, $qr);
        $row = ["Last_Name" => ""];
        if (mysqli_num_rows($sql) == 1)
            $row = mysqli_fetch_array($sql);
        return $row;
    }

    public function Add($id, $first_name, $last_name, $account, $password)
    {
        $qr = "INSERT INTO `admin`(`ID_Admin`,`First_Name`,`Last_Name`,`Account`, `Password`)
               VALUES ('$id','$first_name','$last_name','$account','$password')";
        $sql = mysqli_query($this->con, $qr);
        return $sql;
    }

    public function Edit($id, $first_name, $last_name, $account, $password)
    {
        $qr = "UPDATE `admin` SET `First_Name`='$first_name',`Last_Name`='$last_name',`Account`='$account',`Password`='$password'  
                              WHERE `ID_Admin`='$id'";
        $sql = mysqli_query($this->con, $qr);
        return $sql;
    }

    public function Delete($id)
    {
        $qr = "DELETE FROM `admin` WHERE `ID_Admin` = '$id'";
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

    function CheckAccount($val)
    {
        // $pattern = "/^([a-zA-Z0-9\s]+)$/i";
        $pattern = "/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i";
        if (strlen($val) < 10 || strlen($val) > 32) return [0, "<i class='bi bi-x-circle'></i>  Độ dài tên tài khoản phải được từ 10 đến 32 ký tự"];
        if (!preg_match($pattern, $val)) return [0, "<i class='bi bi-x-circle'></i> Tên tài khoản không gồm ký tự đặc biệt"];
        return [1, "<i class='bi bi-check2-circle'></i> Hợp lệ"];
    }
}
