<?php
class Customer extends Controller
{
    protected $dCus;
    protected $data;
    function __construct()
    {
        $this->dCus = $this->model("CustomerModel");
        $this->data["domain"] = $this->domain;
        $this->data["controller"] = get_class($this);
        $this->data["dir"] = $this->fixDir("App.js");
        $this->data["url"] = "/" . $this->data['domain'] . "/" . $this->data['controller'];
    }
    // action mặc định
    function DefaultAction()
    {
        $this->data["page"] = "Customer";
        $this->data['title'] = "Khách hàng";
        $this->data['dCus'] = $this->dCus->Get();
        $this->view("AdminLayout", $this->data);
    }
    function Add()
    {
        $this->data["page"] = "AddCustomer";
        $this->data['title'] = "Thêm khách hàng";
        $this->data['action'] = "Add";
        if (isset($_POST['sm'])) {
            // validate  check = 1 nếu tất cả các input đều đúng
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
        $this->view("AdminLayout", $this->data);
    }
    function Edit($id)
    {
        $this->data["page"] = "EditCustomer";
        $this->data['title'] = "Sửa khách hàng";
        $this->data['action'] = "Edit";
        $this->data["customer"] = $this->dCus->GetByID($id);
        if (isset($_POST['sm'])) {
            $check = $this->validate([
                $this->dCus->CheckFirstName($_POST['firstname']),
                $this->dCus->CheckLastName($_POST['lastname']),
                $this->dCus->CheckPhone($_POST['phone']),
                $this->dCus->CheckAccount($_POST['account']),
                $this->dCus->CheckPassword($_POST['password'])
            ]);
            if ($check)
                $this->data["goDefault"] = $this->dCus->Edit($id, $_POST['firstname'], $_POST['lastname'], $_POST['address'], $_POST['phone'], $_POST['email'], $_POST['account'], $_POST['password']);
            else
                $this->data["tb"] = "Lỗi";
        }
        $this->view("AdminLayout", $this->data);
    }
    function Delete($id)
    {
        $this->data["page"] = "DeleteCustomer";
        $this->data['title'] = "Xóa khách hàng";
        $this->data['action'] = "Delete";
        $this->data["customer"] = $this->dCus->GetByID($id);
        if (isset($_POST['sm'])) {
            $this->data["goDefault"] = $this->dCus->Delete($id);
        }
        $this->view("AdminLayout", $this->data);
    }
}
