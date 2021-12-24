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
        $this->data["dir"] = $this->fixDir();
        $this->data["controller"] = get_class($this);
        $this->data["url"] = "/" . $this->data['domain'] . "/" . $this->data['controller'];
    }

    function DefaultAction()
    {
        $this->data["page"] = "Login";
        $this->data['title'] = "Đăng nhập";
        if (isset($_POST['sm'])) {
            if (($this->dCus->CheckLogin($_POST['account'], $_POST['password'])) == 1)
                header("Location: /$this->domain/");
        }
        $this->view("ClientLayout", $this->data);
    }

    function Regis()
    {
        $this->data["page"] = "Regis";
        $this->data['title'] = "Đăng ký";
        $this->data['action'] = "Regis";
        $this->data['dProvince'] = $this->dAddress->GetProvince();
        $this->data['dDistrict'] = $this->dAddress->GetDistrict();
        $this->data['dWard'] = $this->dAddress->GetWard();
        if (isset($_POST['sm'])) {
            $check = $this->validate($this->dCus, $_POST);
            if ($check && $this->dCus->confirmPassword($_POST['password'], $_POST['confirmPassword'])) {
                $address = $_POST['spe']  . ", " . $_POST['ward'] . ", " . $_POST['district'] . ", " .  $_POST['province'];
                print_r($_POST);
                $this->data["goDefault"] = $this->dCus->Add($_POST['firstname'], $_POST['lastname'], $address, $_POST['phone'], $_POST['email'], $_POST['account'], $_POST['password']);
            } else
                $this->data["tb"] = "Lỗi";
        }
        $this->view("ClientLayout", $this->data);
    }
}
