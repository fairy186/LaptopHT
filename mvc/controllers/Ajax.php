<?php
class Ajax extends controller
{
     function __construct()
     {
     }
     public function Check_Input()
     {
          $val = $_POST['val'];
          $md = $this->model($_POST['md'] . "Model");
          $this->mt = "Check_" . $_POST['fn'];
          $mess = 1;
          if (method_exists($md, $this->mt))
               $mess = call_user_func_array([$md, $this->mt], [$val]);
          else
               $mess = $md->check($val, 0, 255);
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
     public function Comment($id_Lap, $id_Cus, $content){
          $md = $this->model("CommentModel");
          $data=$this->convert_time($md->AddComment($id_Lap, $id_Cus, $content));
          echo json_encode($data, JSON_UNESCAPED_UNICODE);
     }
     public function Update_Cart($id_lap, $quantity){
          $md = $this->model("CartModel");
          echo json_encode($md->Edit($id_lap, $_SESSION['user']['id'], $quantity), JSON_UNESCAPED_UNICODE);
     }
     public function Remove_Form_Cart($id_lap){
          $md = $this->model("CartModel");
          if($md->Delete($id_lap, $_SESSION['user']['id']))
               echo "Deleted";
     }
}
