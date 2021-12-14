<?php
class App
{
     protected $controller = "Home";
     protected $action = "DefaultAction";
     protected $params = [];

     function __construct()
     {
          $arr = $this->UrlProcess();
          // $arr= array_unique($arr);
          // array_splice($arr,0,0);
          // print_r($arr);
          // Xử lý Controllers
          if(@file_exists("./mvc/controllers/$arr[0].php")){
               $this->controller= $arr[0];
               unset($arr[0]);
          }
          require_once "./mvc/controllers/".$this->controller.".php";
          // xử lý Actions
          if(isset($arr[1])){
               if(method_exists($this->controller,$arr[1])){
               $this->action = $arr[1];
               }
          }
          unset($arr[1]);
          // Xử lý Params
          $this->params = $arr ? array_values($arr):[];
          // echo $this->controller."</br>";
          // echo $this->action."</br>";
          // print_r($this->params);
          $this->controller = new $this->controller;
          call_user_func_array([$this->controller, $this->action], $this->params );
     }
     function UrlProcess(){
          if(isset($_GET['url'])){
               return explode('/',filter_var(trim($_GET['url'],'/')));
          }
     }
}
?>