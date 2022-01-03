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
     function validate($model, $data)
     {
          $all_check = get_class_methods($model);
          $pattern = "/^Check_/i";
          foreach ($all_check as $key => $value) {
               if (preg_match($pattern, $value)) {
                    $param = explode("_", $value, 2);
                    if (call_user_func([$model, $value], $data[$param[1]]) == 0)
                         return 0;
               }
          }
          return 1;
     }
     public function fixDir()
     {
          $dir = "";
          if (isset($_GET['url'])) {
               $url = explode('/', filter_var(trim($_GET['url'], '/')));
               $i = count($url) - 1;
               while ($i > 0) {
                    $dir = "../" . $dir;
                    $i--;
               }
          }
          return $dir;
     }
}
