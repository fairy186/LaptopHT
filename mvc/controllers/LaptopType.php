<?php
class LaptopType extends Controller
{
     protected $dType;
     protected $data;
     function __construct()
     {
          $this->dType = $this->model("LaptopTypeModel");
          $this->data["domain"] = $this->domain;
          $this->data["controller"] = get_class($this);
          $this->data["dir"] = $this->fixDir("App.js");
          $this->data["url"] = "/".$this->data['domain']."/".$this->data['controller'];
     }
     // action mặc định
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
               $check = $this->validate([$this->dType->CheckID($_POST['ma']),$this->dType->CheckName($_POST['ten'])]);
               if ($check) 
                    $this->data["goDefault"]=$this->dType->Add($_POST['ma'], $_POST['ten']);
               else
                    $this->data["tb"] = "Lỗi";
          }
          $this->view("AdminLayout", $this->data);
     }
     function Edit($id)
     {
          $this->data["page"] = "EditLaptopType";
          $this->data['title'] = "Sửa loại laptop";
          $this->data['action'] = "Edit";
          $this->data["id"] = $id;
          $this->data["name"] = $this->dType->GetByID($id)["Name_Type"];
          if($this->data["name"]==""){
               header("Location: /$this->domain/".$this->data['controller']);
          }
          if (isset($_POST['sm'])) {
               $check = $this->validate([$this->dType->CheckName($_POST['ten'])]);
               if ($check) 
                    $this->data["goDefault"]=$this->dType->Edit($id, $_POST['ten']);
               else 
                    $this->data["tb"] = "Lỗi";
          }
          $this->view("AdminLayout", $this->data);
     }
     function Delete($id)
     {
          $this->data["page"] = "DeleteLaptopType";
          $this->data['title'] = "Xóa loại laptop";
          $this->data['action'] = "Delete";
          $this->data['id'] = $id;
          $this->data["name"] = $this->dType->GetByID($id)["Name_Type"];
          if($this->data["name"]==""){
               header("Location: /$this->domain/".$this->data['controller']);
          }
          if (isset($_POST['sm'])) {
               $this->data["goDefault"]=$this->dType->Delete($id);
          }
          $this->view("AdminLayout", $this->data);
     }
}
