<?php
class Order extends Controller
{
    protected $dOrIn;
    protected $dOrDe;
    protected $dCart;
    protected $data;
    function __construct()
    {
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
        $this->data["page"] = "Order";
        $this->data['title'] = "Đặt hàng";
        if (isset($_SESSION['user']['id'])) {
            if (isset($_POST['sm_Order'])) {
                $_SESSION['order'] = [];
                $_SESSION['cost'] = 0;
                if (isset($_POST['id_lap']) && $_POST['id_lap'] != [])
                    foreach ($_POST['id_lap'] as $value) {
                        $od = $this->dCart->GetByOrder($_SESSION['user']['id'], $value);
                        $_SESSION['order'][] = $od;
                        $_SESSION['cost'] += $od['Quantity'] * $od['Price'];
                    }
            }
            if (isset($_POST['confirm'])) {
                if (isset($_SESSION['order']) && $_SESSION['order']!=[] ) {
                    $id_order = $this->dOrIn->autoID();
                    $this->dOrIn->Add($id_order, $_SESSION['user']['id'], 1, $_SESSION['cost']);
                    foreach ($_SESSION['order'] as $key => $value) {
                        $this->dOrDe->Add($id_order, $value['ID_Lap'], $value['Quantity'], $value['Price']);
                        $this->dCart->Delete($value['ID_Lap'], $_SESSION['user']['id']);
                        $_SESSION['notify'] = "Đặt hàng thành công!";
                    }
                    unset($_SESSION['order']);
                    unset($_SESSION['cost']);
                } else
                    $_SESSION['notify'] = "Vui lòng chọn sản phẩm trong giỏ hàng!";
            }
        } else
            header("Location: /$this->domain/Login");
        $this->view("ClientLayout", $this->data);
    }
}
