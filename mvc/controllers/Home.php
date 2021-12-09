<?php
class Home extends Controller{
     // action mặc định
     function DefaultAction()
     {
          $dManu = $this->model("ManufacturerModel");
          $this->view("Layout1",
               ["page"=>"Home",
               "SV"=>$dManu->Get()
          ]);
     }

     function Show($a,$b){
          // gọi model
          $data = $this->model("LaptopModel");
          // view
          
     }
}