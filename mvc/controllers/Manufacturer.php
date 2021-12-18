<?php
class Manufacturer extends Controller
{
     protected $dManu;
     protected $data;
     function __construct()
     {
          $this->dManu = $this->model("ManufacturerModel");
          $this->data["domain"] = $this->domain;
          $this->data["controller"] = get_class($this);
          $this->data["dir"] = $this->fixDir("App.js");
          $this->data["url"] = "/".$this->data['domain']."/".$this->data['controller'];
     }
     // action mặc định
     function DefaultAction()
     {
          $this->data["page"] = "Manufacturer";
          $this->data['title'] = "Hảng Laptop";
          $this->data['dManu'] = $this->dManu->Get();
          $this->view("AdminLayout", $this->data);
     }
     function Add()
     {
          $this->data["page"] = "AddManufacturer";
          $this->data['title'] = "Thêm Hảng";
          $this->data['action'] = "Add";
          if (isset($_POST['sm'])) {
               // validate  check = 1 nếu tất cả các input đều đúng
               $check = $this->dManu->CheckID($_POST['ma'])[0] && $this->dManu->CheckName($_POST['ten'])[0];
               if ($check) 
                    $this->data["goDefault"]=$this->dManu->Add($_POST['ma'], $_POST['ten']);
               else
                    $this->data["tb"] = "Lỗi";
          }
          $this->view("AdminLayout", $this->data);
     }
     function Edit($id)
     {
          $this->data["page"] = "EditManufacturer";
          $this->data['title'] = "Sửa Hảng";
          $this->data['action'] = "Edit";
          $this->data["id"] = $id;
          $this->data["name"] = $this->dManu->GetByID($id)["Name_Manu"];;
          if (isset($_POST['sm'])) {
               $check = $this->dManu->CheckName($_POST['ten'])[0];
               if ($check) 
                    $this->data["goDefault"]=$this->dManu->Edit($id, $_POST['ten']);
               else 
                    $this->data["tb"] = "Lỗi";
          }
          $this->view("AdminLayout", $this->data);
     }
     function Delete($id)
     {
          $this->data["page"] = "DeleteManufacturer";
          $this->data['title'] = "Xóa Hảng";
          $this->data['action'] = "Delete";
          $this->data['id'] = $id;
          if (isset($_POST['sm'])) {
               $this->data["goDefault"]=$this->dManu->Delete($id);
          }
          $this->view("AdminLayout", $this->data);
     }
}
