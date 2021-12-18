<?php
class Laptop extends Controller
{
    protected $dLap;
    protected $dType;
    protected $dManu;
    protected $data;

    function __construct()
    {
        $this->dLap = $this->model("LaptopModel");
        $this->dType = $this->model("LaptopTypeModel");
        $this->dManu = $this->model("ManufacturerModel");
        $this->data["domain"] = $this->domain;
        $this->data["controller"] = get_class($this);
        $this->data["dir"] = $this->fixDir("App.js");
        $this->data["url"] = "/" . $this->data['domain'] . "/" . $this->data['controller'];
    }

    // action mặc định

    function DefaultAction()
    {
        $this->data["page"] = "Laptop";
        $this->data['title'] = "Laptop";
        $this->data['dLap'] = $this->dLap->Get();
        $this->view("AdminLayout", $this->data);
    }

    function Add()
    {
        $this->data["page"] = "AddLaptop";
        $this->data['title'] = "Thêm laptop";
        $this->data['action'] = "Add";
        $this->data['dType'] = $this->dType->Get();
        $this->data['dManu'] = $this->dManu->Get();
        if (isset($_POST['sm'])) {
            $check = $this->dLap->CheckID($_POST['ma'])[0];
            if ($check)
                $this->data["goDefault"] = $this->dLap->Add($_POST['id'], $_POST['name'], $_POST['price'], $_POST['insur'], $_POST['laptype'], $_POST['manu'], $_POST['img'], $_POST['cpu'], $_POST['gpu'], $_POST['ram'], $_POST['storage'], $_POST['screen'], $_POST['audio'], $_POST['connec'], $_POST['o_f'], $_POST['d_w'], $_POST['mate'], $_POST['batte'], $_POST['os'], $_POST['r_t']);
            else
                $this->data["tb"] = "Lỗi";
        }
        $this->view("AdminLayout", $this->data);
    }

    function Edit($id)
    {
        $this->data["page"] = "EditLaptop";
        $this->data['title'] = "Sửa laptop";
        $this->data['action'] = "Edit";
        $this->data['dType'] = $this->dType->Get();
        $this->data['dManu'] = $this->dManu->Get();
        $this->data["id"] = $id;
        $this->data["name"] = $this->dLap->GetByID($id)["Name_Lap"];;
        if (isset($_POST['sm'])) {
            $check = $this->dLap->CheckName($_POST['name'])[0];//cái này xử lý bên model nè
            if ($check)
                $this->data["goDefault"] = $this->dLap->Edit($id, $_POST['ten'],  $_POST['name'], $_POST['price'], $_POST['insur'], $_POST['laptype'], $_POST['manu'], $_POST['img'], $_POST['cpu'], $_POST['gpu'], $_POST['ram'], $_POST['storage'], $_POST['screen'], $_POST['audio'], $_POST['connec'], $_POST['o_f'], $_POST['d_w'], $_POST['mate'], $_POST['batte'], $_POST['os'], $_POST['r_t']);
            else
                $this->data["tb"] = "Lỗi";
        }
        $this->view("AdminLayout", $this->data);
    }

    function Delete($id)
    {
        $this->data["page"] = "DeleteLaptop";
        $this->data['title'] = "Xóa laptop";
        $this->data['action'] = "Delete";
        $this->data['id'] = $id;
        if (isset($_POST['sm'])) {
            $this->data["goDefault"] = $this->dLap->Delete($id);
        }
        $this->view("AdminLayout", $this->data);
    }
}
