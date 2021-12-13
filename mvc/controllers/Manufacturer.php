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
               $data = [
                    "page" => "AddManufacturer",
                    "dManu" => $this->dManu->Add($_POST['ma'], $_POST['ten'])
               ];
          } else {
               $data = [
                    "page" => "AddManufacturer",
               ];
          }
          $this->view("Layout1", $data);
     }


     function Edit($id)
     {
          if (isset($_POST['sm'])) {
               $data = [
                    "page" => "EditManufacturer",
                    "id" => $id,
                    "dManu" => $this->dManu->Edit($_POST['ma'], $_POST['ten'])
               ];
          } else {
               $data = [
                    "page" => "EditManufacturer",
                    "id" => $id
               ];
          }
          $this->view("Layout1", $data);
     }

     function Delete($id)
     {
          if (isset($_POST['sm'])) {
               $data = [
                    "page" => "DeleteManufacturer",
                    "id" => $id,
                    "dManu" => $this->dManu->Delete($_POST['ma'])
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
