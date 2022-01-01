<?php
class ThanhToan extends Controller
{
    protected $dLap;
    protected $dOrIn;
    protected $dOrDe;
    protected $data;
    function __construct()
    {
        $this->dLap = $this->model("LaptopModel");
        $this->dOrIn = $this->model("OrderInfoModel");
        $this->dOrDe = $this->model("OrderDetailsModel");
        $this->data["domain"] = $this->domain;
        $this->data["controller"] = get_class($this);
        $this->data["url"] = "/" . $this->data['domain'] . "/" . $this->data['controller'];
    }
    // action mặc định
    function DefaultAction()
    {
        $this->data["page"] = "ThanhToan";
        $this->data['title'] = "Thanh toán";
        if (isset($_SESSION['user']['id'])) {
            $price=[];
            foreach ($_POST['check'] as $value){
                $price[]=$this->dLap->GetByID($value)['Price'];
            }
            if (isset($_POST['payment'])) {
                $s=0;
                for ($i=0; $i < count($price); $i++) { 
                    $this->dOrDe->Add();
                }
                $this->dOrIn->Add($_SESSION['user']['id']);
            }
        } else
            header("Location: /$this->domain/Login");
        $this->view("ClientLayout", $this->data);
    }
}
