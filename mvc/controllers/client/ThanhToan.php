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
        $this->dCart = $this->model("CartModel");
        $this->data["domain"] = $this->domain;
        $this->data["controller"] = get_class($this);
        $this->data["url"] = "/" . $this->data['domain'] . "/" . $this->data['controller'];
    }
    // action mặc định
    function DefaultAction()
    {
        $this->data["page"] = "ThanhToan";
        $this->data['title'] = "Thanh toán";
        $this->data['dLap'] = [];
        $this->data['dCart'] = $this->dCart->GetCart();
        if (isset($_SESSION['user']['id'])) {
            if (isset($_POST['id_lap'])) {
                $price = [];
                $id_lap = $_POST['id_lap'];
                $qtt = $_POST['quantity'];
                
                foreach ($id_lap as $value) {
                    $price[] = $this->dLap->GetByID($value)['Price'];
                }
                $_SESSION['order'] = [$id_lap, $qtt, $price];
                foreach ($_SESSION['order'][0] as $value) {
                    $this->data['dLap'][] = $this->dLap->GetByID($value);
                }
            }
            $s = 0;
            for ($i = 0; $i < count($_SESSION['order'][0]); $i++) {
                $s += $_SESSION['order'][1][$i] * $_SESSION['order'][2][$i];
            }
            $this->data['cost'] = $s;
            
            if (isset($_POST['payment'])) {
                $id_order = $this->dOrIn->autoID();
                $this->dOrIn->Add($id_order, $_SESSION['user']['id'], 1, $s);
                for ($i = 0; $i < count($_SESSION['order'][0]); $i++) {
                    $this->dOrDe->Add($id_order, $_SESSION['order'][0][$i], $_SESSION['order'][1][$i], $_SESSION['order'][2][$i]);
                }
                unset($_SESSION['order']);
            }
        } else
            header("Location: /$this->domain/Login");
        $this->view("ClientLayout", $this->data);
    }
}
