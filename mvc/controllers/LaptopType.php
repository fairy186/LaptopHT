<?php
class LaptopType extends Controller
{
     protected $dType;
     protected $data;

     function __construct()
     {
          $this->dType = $this->model("LaptopTypeModel");
     }

     // action mặc định

     function DefaultAction()
     {
          $this->view(
               "Layout1",
               [
                    "page" => "LaptopType",
                    "dType" => $this->dType->Get()
               ]
          );
     }

     function Add()
     {
          if (isset($_POST['sm'])) {
               $check = $this->dType->CheckID($_POST['ma'])[0] &&$this->dType->CheckName($_POST['ten'])[0];
               if ($check) {
                    $this->dType->Add($_POST['ma'], $_POST['ten']);
                    $data = [
                         "page" => "AddLaptopType",
                         "dType" => $this->dType->Add($_POST['ma'], $_POST['ten']),
                         "url"=> "../LaptopType",
                         "tb" => "Đã thêm"
                    ];
               } else {
                    $data = [
                         "page" => "AddLaptopType",
                         "tb" => "Lỗi"
                    ];
               }
          } else {
               $data = [
                    "page" => "AddLaptopType",
               ];
          }
          $this->view("Layout1", $data);
     }


     function Edit($id)
     {
          if (isset($_POST['sm'])) {
               print_r($_POST);
               $check =$this->dType->CheckName($_POST['ten'])[0];
               if ($check) {
                    $this->dType->Edit($id, $_POST['ten']);
                    $data = [
                         "page" => "EditLaptopType",
                         "dType" => $this->dType->Edit($_POST['ma'], $_POST['ten']),
                         "url"=> "../../LaptopType",
                         "tb" => "Đã thêm"
                    ];
               } else {
                    $data = [
                         "page" => "EditLaptopType",
                         "id"=> $id,
                         "tb" => "Lỗi"
                    ];
               }
          } else {
               $data = [
                    "page" => "EditLaptopType",
                    "id"=> $id
               ];
          }
          $this->view("Layout1", $data);
     }

     function Delete($id)
     {
          if (isset($_POST['sm'])) {
               $this->dType->Delete($_POST['ma']);
               $data = [
                    "page" => "DeleteLaptopType",
                    "id" => $id,
                    "url" => "../../LaptopType"
               ];
          } else {
               $data = [
                    "page" => "DeleteLaptopType",
                    "id" => $id
               ];
          }
          $this->view("Layout1", $data);
     }
     
}
