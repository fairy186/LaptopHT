<?php
class MyOrder extends Controller
{
     protected $dOrIn;
     protected $dOrDe;
     protected $data;
     function __construct()
     {
          if (!isset($_SESSION['user'])) {
               header("Location: /$this->domain/Login");
               return;
          }
          if (isset($_SESSION['user']['ad'])) {
               header("Location: /$this->domain");
               return;
          }
          $this->dOrIn = $this->model("OrderInfoModel");
          $this->dOrDe = $this->model("OrderDetailsModel");
          $this->data["domain"] = $this->domain;
          $this->data["controller"] = get_class($this);
     }
     // action mặc định
     function DefaultAction()
     {
          $this->data["page"] = "MyOrder";
          $this->data['title'] = "Đơn hàng của tôi";
          $this->data['dOrder'] = $this->dOrIn->getMyOrder($_SESSION['user']['id']);
          foreach ($this->data['dOrder'] as $key => $value) {
               $this->data['dOrder'][$key]['Details'] = $this->dOrDe->GetMyOrderDetails($value['ID_Order']);
          }
          foreach ($this->data['dOrder'] as $key => $value) {
               switch ($value['Status_Order']) {
                    case 1: {
                              $this->data['dOrder'][$key]['Status_Order'] = "chờ xác nhận";
                              break;
                         }
                    case 2: {
                              $this->data['dOrder'][$key]['Status_Order'] = "xác nhận , đóng gói";
                              break;
                         }
                    case 3: {
                              $this->data['dOrder'][$key]['Status_Order'] = "đang vận chuyển";
                              break;
                         }
                    case 4: {
                              $this->data['dOrder'][$key]['Status_Order'] = "Đang đang giao hàng";
                              break;
                         }
                    case 5: {
                              $this->data['dOrder'][$key]['Status_Order'] = "đã giao hàng";
                              break;
                         }
                    default: {
                              $this->data['dOrder'][$key]['Status_Order'] = "đơn hàng bị hủy";
                              break;
                         }
               };
          }
          $this->view("ClientLayout", $this->data);
     }
}
