<?php
class Search extends Controller
{
     function __construct()
     {
          $this->data["domain"] = $this->domain;
          $this->data["controller"] = get_class($this);
     }
     function DefaultAction($info = "")
     {
          $this->data["page"] = "Search";
          $this->data['title'] = "Tìm kiếm";
          $this->data['info'] = $info;
          if (empty($info)) {
               header("Location: /$this->domain");
               return;
          } else
               $this->view("ClientLayout", $this->data);
     }
}
