<?php

class Login extends Controller
{
    protected $dCus;
    protected $dAddress;
    protected $data;
    function __construct()
    {
        $this->dCus = $this->model("CustomerModel");
        $this->dAddress = $this->model("AddressModel");
        $this->data["domain"] = $this->domain;
        $this->data["controller"] = get_class($this);
        $this->data["url"] = "/" . $this->data['domain'] . "/" . $this->data['controller'];
    }

    function DefaultAction()
    {
        $this->data["page"] = "Login";
        $this->data['title'] = "Đăng nhập";
        $this->data['action'] = "";
        if (isset($_SESSION['user'])) {
            header("Location: /$this->domain/" . @$_SESSION['url'][0]);
        }
        if (isset($_POST['sm'])) {
            $u = $this->dCus->Login($_POST['account'], $_POST['password']);
            if ($u != 0) {
                $_SESSION['user'] = ['id' => "$u[ID_Cus]", 'ho' => "$u[First_Name]", 'ten' => "$u[Last_Name]", 'dc' => "$u[Address]", 'sdt' => "$u[Phone]"];
                header("Location: /$this->domain/" . @$_SESSION['url'][0]);
            }
            else
                $_SESSION['Notification'] = "Tài khoản hoặc mật sai!";
        }

        $this->view("Login", $this->data);
    }
    function SignOut()
    {
        unset($_SESSION['user']);
        header("Location: /$this->domain/" . @$_SESSION['url'][0]);
    }
    function SignUp()
    {
        $this->data["page"] = "SignUp";
        $this->data['title'] = "Đăng ký";
        $this->data['action'] = "SignUp";
        $this->data['dProvince'] = $this->dAddress->GetProvince();
        // $this->data['dDistrict'] = $this->dAddress->GetDistrict();
        // $this->data['dWard'] = $this->dAddress->GetWard();
        if (isset($_POST['sm'])) {
            $check = $this->validate($this->dCus, $_POST);
            $address=$this->dAddress->GetAddress($_POST['province'],$_POST['district'],$_POST['ward']);
            if ($check && $_POST['password']== $_POST['confirmPassword']) {
                $address = $_POST['spe']  .", ".$address;
                $this->dCus->Add($_POST['firstname'], $_POST['lastname'], $address, $_POST['phone'], $_POST['email'], $_POST['account'], $_POST['password']);
                $u = $this->dCus->Login($_POST['account'], $_POST['password']);
                $_SESSION['user'] = ['id' => "$u[ID_Cus]", 'ho' => "$u[First_Name]", 'ten' => "$u[Last_Name]", 'dc' => "$u[Address]", 'email' => "$u[Email]", 'sdt' => "$u[Phone]"];
                header("Location: /$this->domain");
            } else
                $this->data["tb"] = "Lỗi";
        }
        $this->view("Login", $this->data);
    }
}
