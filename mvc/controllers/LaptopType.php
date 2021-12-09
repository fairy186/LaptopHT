<?php
class LaptopType extends Controller{
     // action mặc định
     function DefaultAction()
     {
          $dType = $this->model("LaptopTypeModel");
          $this->view("Layout1",
               ["page"=>"LaptopType",
               "dType"=>$dType->Get()
          ]);
     }
}