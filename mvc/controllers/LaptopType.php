<?php
class LaptopType extends Controller{
     //protected $dType = $this->model("LaptopTypeModel");
     // action mặc định
     function DefaultAction()
     {
          $dType = $this->model("LaptopTypeModel");
          $this->view("Layout1",
               ["page"=>"LaptopType",
               "dType"=>$dType->Get()
          ]);
     }

     function Add(){
          $dType = $this->model("LaptopTypeModel");
          $this->view("Layout1",
               ["page"=>"AddLaptopType",
               "dType"=>$dType->Add(4, 5)
          ]);
     }
}