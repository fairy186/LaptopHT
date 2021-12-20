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
     }

     public function Check()
     {
          switch ($this->fn) {
               case "ma":
                    echo json_encode($this->md->CheckID($this->val));
                    break;
               case "ten":
                    echo json_encode($this->md->CheckName($this->val));
                    break;
               case "img[]":
                    echo "aaaaaa";
                    break;
          }
     }
}
