<?php

class Login extends Controller
{
    protected $dCus;
    protected $data;
    function __construct()
    {
        $this->dCus = $this->model("CustomerModel");
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
        if (isset($_POST['sm'])) {
            $check = $this->validate([
                $this->dCus->CheckFirstName($_POST['firstname']),
                $this->dCus->CheckLastName($_POST['lastname']),
                $this->dCus->CheckPhone($_POST['phone']),
                $this->dCus->CheckAccount($_POST['account']),
                $this->dCus->CheckPassword($_POST['password'])
            ]);
            if ($check)
                $this->data["goDefault"] = $this->dCus->Add($_POST['firstname'], $_POST['lastname'], $_POST['address'], $_POST['phone'], $_POST['email'], $_POST['account'], $_POST['password']);
            else
                $this->data["tb"] = "Lỗi";
        }
        $this->view("ClientLayout", $this->data);
    }
}
