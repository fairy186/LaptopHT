<?php
class controller
{
     public $domain = "LaptopHT";
     public function model($model)
     {
          require_once "./mvc/models/" . $model . ".php";
          return new $model;
     }
     public function view($layout, $data = [])
     {
          if (@file_exists("./mvc/views/layout/" . $layout . ".php")) {
               require_once "./mvc/views/layout/" . $layout . ".php";
          } else require_once "./mvc/views/layout/NonLayout.php";
     }
     function validate($allcheck)
     {
          foreach ($allcheck as $value){
               if($value!=1)
                    return 0;
          }
          return 1;
     }
     public function fixDir()
     {
          $dir = "";
          if (isset($_GET['url'])) {
               $url= explode('/', filter_var(trim($_GET['url'], '/')));
               $i = count($url)-1;
               while ($i>0) {
                    $dir = "../" . $dir;
                    $i--;
               }
          }
          return $dir;
     }
}
