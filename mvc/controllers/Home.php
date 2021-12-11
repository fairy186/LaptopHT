<?php
class Home extends Controller{
     protected $dLap;
     protected $dManu;
     protected $dType;
     function __construct()
     {
          $this->dLap = $this->model("LaptopModel");
          $this->dManu = $this->model("ManufacturerModel");
          $this->dType = $this->model("LaptopTypeModel");
     }
     // action mặc định
     function DefaultAction()
     {
          $this->view("Layout1",
               ["page"=>"Home",
               "dLap"=>$this->dLap->Get(),
               "dManu"=>$this->dLap->Get(),
               "dType"=>$this->dLap->Get()
          ]);
     }
}
?>