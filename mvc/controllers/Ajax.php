<?php
class Ajax extends controller{
     protected $dType;
     protected $val;
     function __construct()
     {
          $this->dType = $this->model("LaptopTypeModel");
          $this->val = $_POST['val'];
     }

     public function Check($fn)
     {
          if($fn=='ma')
               echo json_encode($this->dType->CheckID($this->val)) ;
          else
               echo json_encode($this->dType->CheckName($this->val)) ;
     }
}
?>