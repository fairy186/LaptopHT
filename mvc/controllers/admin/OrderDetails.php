<?php
class OrderDetails extends Controller
{
    protected $dOrDe;
    protected $dLap;
    protected $dOrIn;
    protected $data;
    function __construct()
    {
        $this->dOrDe = $this->model("OrderInfoModel");
        $this->dLap = $this->model("LaptopModel");
        $this->dOrDe = $this->model("OrderDetailsModel");
        $this->data["domain"] = $this->domain;
        $this->data["controller"] = get_class($this);
        $this->data["url"] = "/" . $this->data['domain'] . "/" . $this->data['controller'];
    }
    // action mặc định
    function DefaultAction()
    {
        $this->data["page"] = "OrderDetails";
        $this->data['title'] = "Chi tết đơn hàng";
        $this->data['dOrDe'] = $this->dOrDe->Get();
        $this->view("AdminLayout", $this->data);
    }
}
