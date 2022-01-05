<?php
class Ajax extends controller
{
     protected $md;
     protected $val;
     function __construct()
     {
     }
     public function Check_Input()
     {
          $this->val = $_POST['val'];
          $this->md = $this->model($_POST['md'] . "Model");
          $this->mt = "Check_" . $_POST['fn'];
          $mess = 1;
          if (method_exists($this->md, $this->mt))
               $mess = call_user_func_array([$this->md, $this->mt], [$this->val]);
          else
               $mess = $this->md->check($this->val, 0, 255);
          if ($mess == 1)
               echo json_encode(["<i class='bi bi-check2-circle'></i>"]);
          else {
               echo json_encode([$mess, 0]);
          }
     }
     public function GetDistrict($id)
     {
          $md = $this->model("AddressModel");
          echo json_encode($md->GetDistrict($id), JSON_UNESCAPED_UNICODE);
     }
     public function GetWard($id)
     {
          $md = $this->model("AddressModel");
          echo json_encode($md->GetWard($id), JSON_UNESCAPED_UNICODE);
     }
     public function GetNumPro(){
          $md=$this->model("CartModel");
          if(isset($_SESSION['user']['id']) || !isset($_SESSION['user']['ad']))
               echo json_encode($md->GetNumPro($_SESSION['user']['id']), JSON_UNESCAPED_UNICODE);
          else
               echo json_encode(" ", JSON_UNESCAPED_UNICODE);
     }
     public function AddCart($id_lap, $id_cus){
          $md = $this->model("CartModel");
          echo json_encode($md->AddCart($id_lap, $id_cus),JSON_UNESCAPED_UNICODE);
     }
}
