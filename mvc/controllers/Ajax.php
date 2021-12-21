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
          $mess = 1;
          switch ($this->fn) {
               case "ma":
                    $mess = $this->md->CheckID($this->val);
                    break;
               case "ten":
                    $mess = $this->md->CheckName($this->val);
                    break;
               case "firstname":
                    $mess = $this->md->CheckFirstName($this->val);
                    break;
               case "lastname":
                    $mess = $this->md->CheckLastName($this->val);
                    break;
               case "price":
                    $mess = $this->md->Check($this->val, 3, 10, 10);
               case "phone":
                    $mess = $this->md->CheckPhone($this->val);
                    break;
               case "account":
                    $mess = $this->md->CheckAccount($this->val);
                    break;
               case "password":
                    $mess = $this->md->CheckPassword($this->val);
                    break;
               case "img[]":
                    echo "aaaaaa";
                    break;
          }
          if ($mess == 1)
               echo json_encode(["<i class='bi bi-check2-circle'></i>"]);
          else {
               echo json_encode([$mess, 0]);
          }
     }
}
