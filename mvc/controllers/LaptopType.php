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
               $data = [
                    "page" => "AddLaptopType",
                    "dType" => $this->dType->Add($_POST['ma'], $_POST['ten'])
               ];
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
               $data = [
                    "page" => "EditLaptopType",
                    "id" => $id,
                    "dType" => $this->dType->Edit($_POST['ma'], $_POST['ten'])
               ];
          } else {
               $data = [
                    "page" => "EditLaptopType",
                    "id" => $id
               ];
          }
          $this->view("Layout1", $data);
     }

     function Delete($id)
     {
          if (isset($_POST['sm'])) {
               $data = [
                    "page" => "DeleteLaptopType",
                    "id" => $id,
                    "dType" => $this->dType->Delete($_POST['ma'])
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
