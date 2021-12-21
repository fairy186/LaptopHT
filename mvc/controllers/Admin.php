<?php
class Admin extends Controller
{
    protected $dAdmin;
    protected $data;
    function __construct()
    {
        $this->dAdmin = $this->model("AdminModel");
        $this->data["domain"] = $this->domain;
        $this->data["controller"] = get_class($this);
        $this->data["dir"] = $this->fixDir("App.js");
        $this->data["url"] = "/" . $this->data['domain'] . "/" . $this->data['controller'];
    }
    // action mặc định
    function DefaultAction()
    {
        $this->data["page"] = "Admin";
        $this->data['title'] = "Quản trị";
        $this->data['dAdmin'] = $this->dAdmin->Get();
        $this->view("AdminLayout", $this->data);
    }
    function Add()
    {
        $this->data["page"] = "AddAdmin";
        $this->data['title'] = "Thêm quản trị viên";
        $this->data['action'] = "Add";
        if (isset($_POST['sm'])) {
            // validate  check = 1 nếu tất cả các input đều đúng
            $check = $this->dAdmin->CheckFirstName($_POST['firstname'])[0] && $this->dAdmin->CheckLastName($_POST['lastname'])[0];
            if ($check)
                $this->data["goDefault"] = $this->dAdmin->Add($_POST['firstname'], $_POST['lastname'], $_POST['account'], $_POST['password']);
            else
                $this->data["tb"] = "Lỗi";
        }
        $this->view("AdminLayout", $this->data);
    }
    function Edit($id)
    {
        $this->data["page"] = "EditAdmin";
        $this->data['title'] = "Sửa quản trị viên";
        $this->data['action'] = "Edit";
        $this->data["admin"] = $this->dAdmin->GetByID($id);
        if (isset($_POST['sm'])) {
            $check = $this->dAdmin->CheckFirstName($_POST['firstname'])[0] && $this->dAdmin->CheckLastName($_POST['lastname'])[0];
            if ($check)
                $this->data["goDefault"] = $this->dAdmin->Edit($id, $_POST['firstname'], $_POST['lastname'], $_POST['account'], $_POST['password']);
            else
                $this->data["tb"] = "Lỗi";
        }
        $this->view("AdminLayout", $this->data);
    }
    function Delete($id)
    {
        $this->data["page"] = "DeleteAdmin";
        $this->data['title'] = "Xóa quản trị viên";
        $this->data['action'] = "Delete";
        $this->data["admin"] = $this->dAdmin->GetByID($id);
        if (isset($_POST['sm'])) {
            $this->data["goDefault"] = $this->dAdmin->Delete($id);
        }
        $this->view("AdminLayout", $this->data);
    }
}
