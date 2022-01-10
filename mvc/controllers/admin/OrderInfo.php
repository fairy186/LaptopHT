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
    }
    // action mặc định
    function DefaultAction()
    {
        $this->data["page"] = "OrderInfo";
        $this->data['title'] = "Đơn hàng";
        $this->data['dOr_Cus'] = $this->dOrIn->GetFullInfo();
        $this->view("AdminLayout", $this->data);

    }
    function OrderDetails($id)
    {
        $this->data["page"] = "OrderDetails";
        $this->data['title'] = "Chi tiết đơn hàng";
        $this->data['action'] = "Details";
        $this->data["id"] = $id;
        $this->data["dOrIn"] = $this->dOrIn->GetByID($id);
        $this->data["dOrDe"] = $this->dOrDe->GetByID($id);
        if (isset($_POST['sm'])) {
            if ($_POST['status'] >= 0 && $_POST['status'] <= 5)
                if ($this->dOrIn->Edit($id, $_POST['status'])) 
                    $_SESSION['Notification'] = "Cập nhật thành công!";
            else
                $_SESSION['Notification'] = "Vui lòng kiểm tra lại dữ liệu nhập!";
        }
        $this->view("AdminLayout", $this->data);
    }
}
