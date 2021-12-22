<?php
class Manufacturer extends Controller
{
     protected $dManu;
     protected $data;
     function __construct()
     {
          $this->dManu = $this->model("ManufacturerModel");
          $this->data["domain"] = $this->domain;
          $this->data["dir"] = $this->fixDir();
          $this->data["controller"] = get_class($this);
          $this->data["url"] = "/" . $this->data['domain'] . "/" . $this->data['controller'];
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
               $check = $this->validate([$this->dManu->CheckID($_POST['ma']), $this->dManu->CheckName($_POST['ten'])]);
               if ($check) {
                    $this->data["goDefault"] = $this->dManu->Add($_POST['ma'], $_POST['ten']);
                    if ($this->data["goDefault"] == 0) {
                         $this->data["tb"] = "Vui lòng điền thông tin chính xác";
                    }
               } else
                    $this->data["tb"] = "Lỗi";
          }
          $this->view("AdminLayout", $this->data);
     }
     function Edit($id)
     {
          $this->data["page"] = "EditManufacturer";
          $this->data['title'] = "Sửa Hảng";
          $this->data['action'] = "Edit";
          $this->data["dl"] = $this->dManu->GetByID($id);;
          if ($this->data["dl"] == 0)
               header("Location: /$this->domain/" . $this->data['controller']);
          if (isset($_POST['sm'])) {
               $check = $this->validate([$this->dManu->CheckName($_POST['ten'])]);
               if ($check) {
                    $this->data["goDefault"] = $this->dManu->Edit($id, $_POST['ten']);
                    if ($this->data["goDefault"] == 0) {
                         $this->data["tb"] = "Vui lòng điền thông tin chính xác";
                    }
               } else
                    $this->data["tb"] = "Lỗi";
          }
          $this->view("AdminLayout", $this->data);
     }
     function Delete($id)
     {
          $this->data["page"] = "DeleteManufacturer";
          $this->data['title'] = "Xóa Hảng";
          $this->data['action'] = "Delete";
          $this->data["dl"] = $this->dManu->GetByID($id);
          if ($this->data["dl"] == "")
               header("Location: /$this->domain/" . $this->data['controller']);
          if (isset($_POST['sm'])) {
               $this->data["goDefault"] = $this->dManu->Delete($id);
               if ($this->data["goDefault"] == 0)
                    $this->data["tb"] = "Lỗi";
          }
          $this->view("AdminLayout", $this->data);
     }
}
