<?php
class Search extends Controller
{
     function __construct(){
          $this->dLap = $this->model("LaptopModel");
          $this->data["domain"] = $this->domain;
          $this->data["controller"] = get_class($this);
          $this->data["url"] = "/" . $this->data['domain'] . "/" . $this->data['controller'];
     }
     function DefaultAction($info="")
     {
          $this->data["page"] = "Search";
          $this->data['title'] = "Tìm kiếm";
          if(empty($info))
               header("Location: /$this->domain");
          else
               $this->data['dLap'] = $this->dLap->Search($info);
          $this->view("ClientLayout", $this->data);
     }
}