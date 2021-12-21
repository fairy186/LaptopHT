<?php
class App
{
     protected $controller = "Home";
     protected $action = "DefaultAction";
     protected $params = [];

     function __construct()
     {
          $arr = $this->UrlProcess();
          // Xử lý Controllers
          $control = new Controller();
          if (isset($arr[0]))
               if (@file_exists("./mvc/controllers/$arr[0].php")) {
                    $this->controller = $arr[0];
                    unset($arr[0]);
               } else
                    header("Location: /$control->domain");

          require_once "./mvc/controllers/" . $this->controller . ".php";
          // xử lý Actions
          if (isset($arr[1])) {
               if (method_exists($this->controller, $arr[1])) {
                    $this->action = $arr[1];
               } else {
                    header("Location: /$control->domain/$this->controller/");
               }
          }

          unset($arr[1]);
          if (isset($arr[2])) {
               $this->params = [$arr[2]];
          }
          if (isset($arr[3])) {
               header("Location: /$control->domain/$this->controller/$this->action/" . $this->params[0]);
          }
          // Xử lý Params
          // $this->params = $arr ? array_values($arr):[];
          // echo $this->controller."</br>";
          // echo $this->action."</br>";
          // print_r($this->params);
          $this->controller = new $this->controller;
          call_user_func_array([$this->controller, $this->action], $this->params);
     }
     function UrlProcess()
     {
          if (isset($_GET['url'])) {
               return explode('/', filter_var(trim($_GET['url'], '/')));
          }
     }
}
