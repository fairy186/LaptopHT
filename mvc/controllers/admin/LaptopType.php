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
               if ($check)
                    if ($this->dType->Add($_POST['id'], $_POST['name'])) {
                         $_SESSION['Notification'] = "Thêm thành công!";
                         header("Location: /$this->domain/Admin/" . $this->data['controller']);
                    } else
                         $_SESSION['Notification'] = "Có lỗi xảy ra! Vui lòng thử lại";
               else
                    $_SESSION['Notification'] = "Vui lòng kiểm tra lại dữ liệu nhập!";
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
               header("Location: /$this->domain/Admin/" . $this->data['controller']);
          if (isset($_POST['sm'])) {
               $check = $this->validate($this->dType, $_POST);
               if ($check) {
                    if ($this->dType->Edit($id, $_POST['name'])) {
                         $_SESSION['Notification'] = "Cập nhật thành công!";
                         header("Location: /$this->domain/Admin/" . $this->data['controller']);
                    } else
                         $_SESSION['Notification'] = "Có lỗi xảy ra! Vui lòng thử lại";
               } else
                    $_SESSION['Notification'] = "Vui lòng kiểm tra lại dữ liệu nhập!";
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
               header("Location: /$this->domain/Admin/" . $this->data['controller']);
          if (isset($_POST['sm'])) {
               if ($this->dType->Delete($id)) {
                    $_SESSION['Notification'] = "Xóa thành công!";
                    $this->delFile($id);
                    header("Location: /$this->domain/Admin/" . $this->data['controller']);
               } else
                    $_SESSION['Notification'] = "Có lỗi xảy ra! Vui lòng thử lại";
          }
          $this->view("AdminLayout", $this->data);
     }
}
