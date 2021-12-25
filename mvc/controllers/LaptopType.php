<?php
class LaptopType extends Controller
{
     protected $dType;
     protected $data;
     function __construct()
     {
          $this->dType = $this->model("LaptopTypeModel");
          $this->data["domain"] = $this->domain;
          $this->data["dir"] = $this->fixDir();
          $this->data["controller"] = get_class($this);
          $this->data["url"] = "/" . $this->data['domain'] . "/" . $this->data['controller'];
     }
     function DefaultAction()
     {
          $this->data["page"] = "LaptopType";
          $this->data['title'] = "Loại laptop";
          $this->data['dType'] = $this->dType->Get();
          $this->view("AdminLayout", $this->data);
     }
     function Add()
     {
          $this->data["page"] = "AddLaptopType";
          $this->data['title'] = "Thêm loại laptop";
          $this->data['action'] = "Add";
          if (isset($_POST['sm'])) {
               $check = $this->validate($this->dType, $_POST);
               if ($check) {
                    $this->data["goDefault"] = $this->dType->Add($_POST['id'], $_POST['name']);
                    if ($this->data["goDefault"] == 0)
                         $this->data["tb"] = "Vui lòng điền thông tin chính xác";
               } else
                    $this->data["tb"] = "Lỗi";
          }
          $this->view("AdminLayout", $this->data);
     }
     function Edit($id)
     {
          $this->data["page"] = "EditLaptopType";
          $this->data['title'] = "Sửa loại laptop";
          $this->data['action'] = "Edit";
          $this->data['dType'] = $this->dType->GetByID($id);
          if ($this->data['dType'] == 0)
               header("Location: /$this->domain/" . $this->data['controller']);
          if (isset($_POST['sm'])) {
               $check = $this->validate($this->dType, $_POST);
               if ($check) {
                    $this->data["goDefault"] = $this->dType->Edit($id, $_POST['name']);
                    if ($this->data["goDefault"] == 0)
                         $this->data["tb"] = "Vui lòng điền thông tin chính xác";
               } else
                    $this->data["tb"] = "Lỗi";
          }
          $this->view("AdminLayout", $this->data);
     }
     function Delete($id)
     {
          $this->data["page"] = "DeleteLaptopType";
          $this->data['title'] = "Xóa loại laptop";
          $this->data['action'] = "Delete";
          $this->data['dType'] = $this->dType->GetByID($id);
          if ($this->data['dType'] == 0)
               header("Location: /$this->domain/" . $this->data['controller']);
          if (isset($_POST['sm'])) {
               $this->data["goDefault"] = $this->dType->Delete($id);
               if ($this->data["goDefault"] == 0)
                    $this->data["tb"] = "Lỗi";
          }
          $this->view("AdminLayout", $this->data);
     }
}
