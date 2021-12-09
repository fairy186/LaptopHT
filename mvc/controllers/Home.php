<?php
class Home extends Controller{
     function SayHi()
     {
          $data = $this->model("LaptopModel");
          foreach ($data->Get() as $key => $value) {
               echo "</br>";
               echo "---------------";
               print_r($value);
               echo "</br>";
          }
     }

     function Show($a,$b){
          // gọi model
          $data = $this->model("LaptopModel");
          $tong = $data->Tong($a,$b);

          // view
          $this->view("aodep",
               ["page"=>"",
               "number"=>$tong,
               "SV"=>$data->SinhVien()
          ]);
     }
}
