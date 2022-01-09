<?php
class Home extends Controller
{
     protected $data;
     function __construct()
     {
          $this->dLap = $this->model("LaptopModel");
          $this->data["domain"] = $this->domain;
          $this->data["controller"] = get_class($this);
     }
     // action mặc định
     function DefaultAction()
     {
          $this->data["page"] = "Home";
          $this->data['title'] = "Trang chủ";
          $this->view("ClientLayout", $this->data);
     }
}