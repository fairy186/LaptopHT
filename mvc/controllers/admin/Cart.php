<?php
class Cart extends Controller
{
    protected $dCart;
    protected $data;
    function __construct()
    {
        $this->dCart = $this->model("CartModel");
        $this->data["domain"] = $this->domain;
        $this->data["controller"] = get_class($this);
    }
    // action mặc định
    function DefaultAction()
    {
        $this->data["page"] = "Cart";
        $this->data['title'] = "Giỏ hàng";
        $this->data['dCart'] = $this->dCart->GetFullInfo();
        $this->view("AdminLayout", $this->data);
    }
}
