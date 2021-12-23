<?php
class DB
{
     protected $con;
     protected $servername = "localhost";
     protected $username = "root";
     protected $password = "";
     protected $dbname = "laptop_db";
     function __construct()
     {
          $this->con = mysqli_connect($this->servername, $this->username, $this->password);
          mysqli_select_db($this->con, $this->dbname);
          mysqli_query($this->con, "SET NAMES 'utf8'");
     }

     function Check($val, $minLen, $maxLen, $char = "10010") //char gồm 5 số ghép lại
     {
          if (strlen($val) < $minLen || strlen($val) > $maxLen)
               return "Độ dài chỉ được từ $minLen đến $maxLen ký tự";
          $c5 = $char % 10; // chứa ký tự đặc biệt
          $char = floor($char / 10);
          $c4 = $char % 10; // chứa sô
          $char = floor($char / 10);
          $c3 = $char % 10; // chứa khoảng trắng
          $char = floor($char / 10);
          $c2 = $char % 10; // chứa chữ có dấu
          $char = floor($char / 10);
          $c1 = $char % 10; // chứa chữ cái
          if ($c5 == 0) {
               $pattern = "/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i";
               if (!preg_match($pattern, $val)) return "Không gồm ký tự đặc biệt";
          } else
          if ($c5 == 1) {
               $pattern = "/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s_\.]+)$/i";
               if (!preg_match($pattern, $val)) return "Không gồm ký tự đặc biệt ngoài _ .";
          }
          if ($c3 == 0) {
               $pattern = "/[\s]/i";
               if (preg_match($pattern, $val)) return "Không gồm khoảng trắng";
          }
          if ($c2 == 0) {
               $pattern = "/[ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]/i";
               if (preg_match($pattern, $val)) return "Không gồm chữ có dấu";
          }
          if ($c4 == 0) {
               $pattern = "/[0-9]/i";
               if (preg_match($pattern, $val)) return "Không gồm chữ số";
          }

          if ($c1 == 0) {
               $pattern = "/[a-zA-z]/i";
               if (preg_match($pattern, $val)) return "Không gồm chữ cái";
          }
          return 1;
     }
}
