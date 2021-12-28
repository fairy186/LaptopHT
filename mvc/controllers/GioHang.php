<?php
class GioHang extends Controller
{
     protected $dCart;
     protected $data;
     function __construct()
     {
          $this->dCart = $this->model("CartModel");
          $this->data["domain"] = $this->domain;
          $this->data["controller"] = get_class($this);
          $this->data["dir"] = $this->fixDir("App.js");
          $this->data["url"] = "/" . $this->data['domain'] . "/" . $this->data['controller'];
     }
     // action mặc định
     function DefaultAction()
     {
          $this->data["page"] = "GioHang";
          $this->data['title'] = "Giỏ hàng";
          $this->data['dCart'] = $this->dCart->Get();
          $this->view("ClientLayout", $this->data);
     }
}
