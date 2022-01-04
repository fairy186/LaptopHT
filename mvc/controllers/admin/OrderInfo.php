<?php
class OrderInfo extends Controller
{
    protected $dOrIn;
    protected $dCus;
    protected $dOrDe;
    protected $data;
    function __construct()
    {
        $this->dOrIn = $this->model("OrderInfoModel");
        $this->dCus = $this->model("CustomerModel");
        $this->dOrDe = $this->model("OrderDetailsModel");
        $this->data["domain"] = $this->domain;
        $this->data["controller"] = get_class($this);
        $this->data["url"] = "/" . $this->data['domain'] . "/" . $this->data['controller'];
    }
    // action mặc định
    function DefaultAction()
    {
        $this->data["page"] = "OrderInfo";
        $this->data['title'] = "Đơn hàng";
        $this->data['dOr_Cus'] = $this->dOrIn->GetFullInfo();
        $this->view("AdminLayout", $this->data);

    }
    function Edit($id)
    {
        $this->data["page"] = "EditOrderInfo";
        $this->data['title'] = "Sửa đơn hàng";
        $this->data['action'] = "Edit";
        $this->data["id"] = $id;
        $this->data["status"] = $this->dOrIn->GetByID($id);
        if (isset($_POST['sm'])) {
            $check = $this->dOrIn->CheckName($_POST['ten'])[0];
            if ($check)
                $this->data["goDefault"] = $this->dOrIn->Edit($id, $_POST['']);
            else
                $this->data["tb"] = "Lỗi";
        }
        $this->view("AdminLayout", $this->data);
    }
}
