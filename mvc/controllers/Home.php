<?php
class Home extends Controller
{
     protected $dLap;
     function __construct()
     {
          $this->dLap = $this->model("Join")->Get([["laptop", "laptop_type", "ID_Type"], ["laptop", "manufacturer", "ID_Manu"]]);
     }
     // action mặc định
     function DefaultAction()
     {
          $this->view(
               "Layout2",
               [
                    "page" => "Home",
                    "dLap" => $this->dLap
               ]
          );
     }
}
