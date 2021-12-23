<?php
class Ajax extends controller
{
     protected $md;
     protected $val;
     function __construct()
     {
          $this->val = $_POST['val'];
          $this->md = $this->model($_POST['md'] . "Model");
          $this->fn = $_POST['fn'];
          $this->mt = "Check_".$_POST['fn'];
     }
     public function Check()
     {
          $mess = 1;
          $mess=call_user_func_array([$this->md,$this->mt],[$this->val]);
          if ($mess == 1)
               echo json_encode(["<i class='bi bi-check2-circle'></i>"]);
          else {
               echo json_encode([$mess, 0]);
          }
     }
}
