<?php
class ThanhToan extends Controller
{
    protected $dCart;
    protected $dLap;
    protected $data;
    function __construct()
    {
        $this->dCart = $this->model("CartModel");
        $this->dLap = $this->model("LaptopModel");
        $this->data["domain"] = $this->domain;
        $this->data["controller"] = get_class($this);
        $this->data["dir"] = $this->fixDir("App.js");
        $this->data["url"] = "/" . $this->data['domain'] . "/" . $this->data['controller'];
    }
    // action mặc định
    function DefaultAction()
    {
        $this->data["page"] = "ThanhToan";
        $this->data['title'] = "Thanh toán";
        if (isset($_SESSION['user']['id'])) {
            $this->data['dCart'] = $this->dCart->GetCart();
        } else
            header("Location: /$this->domain/Login");
        $this->view("ClientLayout", $this->data);
    }
}
