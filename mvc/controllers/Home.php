<?php
class Home extends Controller
{
     protected $dLap;
     protected $data;
     function __construct()
     {
          $this->dLap = $this->model("LaptopModel");
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
          $this->data['dLap'] = $this->dLap->Get();
          $this->view("ClientLayout", $this->data);
     }
}
