<?php
class Search extends Controller
{
     function __construct(){
          $this->dLap = $this->model("LaptopModel");
          $this->data["domain"] = $this->domain;
          $this->data["controller"] = get_class($this);
          $this->data["url"] = "/" . $this->data['domain'] . "/" . $this->data['controller'];
     }
     function DefaultAction()
     {
          $this->data["page"] = "Search";
          $this->data['title'] = "Tìm kiếm";
          if(empty($_POST['info']))
               $this->data['dLap'] = $this->dLap->GetFullInfo();
          else
               $this->data['dLap'] = $this->dLap->Search($_POST['info']);
          $this->view("ClientLayout", $this->data);
     }
}