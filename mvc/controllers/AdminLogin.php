<?php
class AdminLogin extends Controller
{
     protected $dAdmin;
     protected $data;
     function __construct()
     {
          $this->dAdmin = $this->model("AdminModel");
          $this->data["domain"] = $this->domain;
          $this->data["controller"] = get_class($this);
          $this->data["url"] = "/" . $this->data['domain'] . "/" . $this->data['controller'];
     }
     public function DefaultAction()
     {
          $this->data["page"] = "AdminLogin";
          $this->data['title'] = "Đăng nhập Admin";
          $this->data['dAdmin'] = $this->dAdmin->Get();
          if (isset($_SESSION['user'])) {
               header("Location: /$this->domain/Laptop");
           }
           if (isset($_POST['sm'])) {
               $u = $this->dAdmin->Login($_POST['account'], $_POST['password']);
               if ($u != 0) {
                   $_SESSION['user'] = ['id' => "$u[ID_Cus]", 'ho' => "$u[First_Name]", 'ten' => "$u[Last_Name]",'ad'=>1];
                   header("Location: /$this->domain/Laptop");
               }
           }
          $this->view("", $this->data);
     }
}
