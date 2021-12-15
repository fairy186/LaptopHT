<?php
class Manufacturer extends Controller
{
     protected $dManu;
     protected $data;

     function __construct()
     {
          $this->dManu = $this->model("ManufacturerModel");
     }

     // action mặc định

     function DefaultAction()
     {
          $this->view(
               "Layout1",
               [
                    "page" => "Manufacturer",
                    "dManu" => $this->dManu->Get()
               ]
          );
     }

     function Add()
     {
          if (isset($_POST['sm'])) {
               $check = $this->dManu->CheckID($_POST['ma'])[0] && $this->dManu->CheckName($_POST['ten'])[0];
               if ($check) {
                    $this->dManu->Add($_POST['ma'], $_POST['ten']);
                    $data = [
                         "page" => "AddManufacturer",
                         "dManu" => $this->dManu->Add($_POST['ma'], $_POST['ten']),
                         "url" => "../Manufacturer",
                         "tb" => "Đã thêm"
                    ];
               } else {
                    $data = [
                         "page" => "AddManufacturer",
                         "tb" => "Lỗi"
                    ];
               }
          } else {
               $data = [
                    "page" => "AddManufacturer",
               ];
          }
          $this->view("Layout1", $data);
     }

     function Edit($id)
     {
          $name = $this->dManu->GetByID($id)["Name_Manu"];

          if (isset($_POST['sm'])) {
               //sau khi submit
               // print_r($_POST);
               $check = $this->dManu->CheckName($_POST['ten'])[0];
               if ($check) {
                    $this->dManu->Edit($id, $_POST['ten']);
                    $data = [
                         "page" => "EditManufacturer",
                         "dManu" => $this->dManu->Edit($_POST['ma'], $_POST['ten']),
                         "url" => "../../Manufacturer",
                         "tb" => "Đã thêm",
                    ];
               } else {
                    $data = [
                         "page" => "EditManufacturer",
                         "id" => $id,
                         "tb" => "Lỗi",
                         "name" => $name
                    ];
               }
          } else {
               //trước khi submit
               $data = [
                    "page" => "EditManufacturer",
                    "id" => $id,
                    "name" => $name
               ];
          }
          $this->view("Layout1", $data);
     }

     function Delete($id)
     {
          if (isset($_POST['sm'])) {
               $this->dManu->Delete($_POST['ma']);
               $data = [
                    "page" => "DeleteManufacturer",
                    "id" => $id,
                    "url" => "../../Manufacturer"
               ];
          } else {
               $data = [
                    "page" => "DeleteManufacturer",
                    "id" => $id
               ];
          }
          $this->view("Layout1", $data);
     }
}
