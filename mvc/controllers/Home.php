<?php
class Home extends Controller{
     // action mặc định
     function DefaultAction()
     {
          $dLap = $this->model("ManufacturerModel");
          $this->view("Layout1",
               ["page"=>"Home",
               "dLap"=>$dLap->Get()
          ]);
     }
}
?>