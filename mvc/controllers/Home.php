<?php
class Home extends Controller{
     function SayHi()
     {
          $teo = $this->model("SinhVienModel");
          echo $teo->GetSV();
          echo $teo->GetSV();
         
     }

     function Show($a,$b){
          // gọi model
          $teo = $this->model("SinhVienModel");
          $tong = $teo->Tong($a,$b);

          // view
          $this->view("aodep",
               ["page"=>"news",
               "number"=>$tong,
               "SV"=>$teo->SinhVien()
          ]);
     }
}
