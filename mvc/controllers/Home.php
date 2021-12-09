<?php
class Home extends Controller{
     function SayHi()
     {
          $teo = $this->model("SinhVienModel");
          echo $teo->GetSV();
          echo $teo->GetSV();
         
     }
     function Show($a,$b){
          $teo = $this->model("SinhVienModel");
          $tong = $teo->Tong($a,$b);
          $this->view("aoxau",["page"=>"news","number"=>$tong,"SV"=>$teo->SinhVien()]);
     }
}
?>