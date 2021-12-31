<?php
class Home extends Controller
{
     protected $dLap;
     protected $data;
     function __construct()
     {
          $this->dLap = $this->model("LaptopModel");
          $this->dComm = $this->model("CommentModel");
          $this->data["domain"] = $this->domain;
          $this->data["controller"] = get_class($this);
          $this->data["dir"] = $this->fixDir("App.js");
          $this->data["url"] = "/" . $this->data['domain'] . "/" . $this->data['controller'];
     }
     // action mặc định
     function DefaultAction()
     {
          $this->data["page"] = "Home";
          $this->data['title'] = "Trang chủ";
          $this->data['dLap'] = $this->dLap->GetFullInfo();
          $this->view("ClientLayout", $this->data);
     }

     function LaptopDetails($id)
     {
          $this->data["page"] = "LaptopDetails";
          $this->data["title"] = "Chi tiết sản phẩm";
          $this->data['dComm'] = $this->dComm->GetCommByID_Lap($id);
          $this->data['dLap'] = $this->dLap->GetFullInfoByID($id);
          $this->view("ClientLayout", $this->data);
     }
}