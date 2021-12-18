<?php
class controller
{
     protected $domain = "LaptopHT";
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
