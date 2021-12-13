<?php
class Ajax extends controller{
     protected $dType;
     function __construct()
     {
          $this->dType = $this->model("LaptopTypeModel");
     }

     public function CheckID()
     {
          $id = $_POST['id'];
          $mes=$this->dType->CheckID($id);
          echo $mes;
     }
     public function CheckName()
     {
          $name = $_POST['name'];
          $mes=$this->dType->CheckName($name);
          echo $mes;
     }
}
?>