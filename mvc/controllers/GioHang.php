<?php
class GioHang extends Controller
{
     protected $dCart;
     protected $dCus;
     protected $data;
     function __construct()
     {
          $this->dCart = $this->model("CartModel");
          $this->dCus = $this->model("CustomerModel");
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
          if (isset($_SESSION['user']['id'])) {
               $this->data['dCart'] = $this->dCart->GetCart();
               if (isset($_POST['delete'])) {
                    $this->dCart->Delete();
                    $this->data['dCart'] = $this->dCart->GetCart();
               }
          } else
               header("Location: /$this->domain/Login");
          $this->view("ClientLayout", $this->data);
     }
}
