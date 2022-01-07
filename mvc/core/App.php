<?php
class App
{
     protected $domain;
     protected $area;
     protected $controller = "Home";
     protected $action = "DefaultAction";
     protected $params = [];
     function __construct()
     {
          $arr = $this->UrlProcess();
          $control = new Controller();
          $this->domain = $control->domain;
          // Xử lý Controllers
          $dir = "./mvc/controllers/client";
          if (isset($arr[0])) {
               if (strtolower(trim($arr[0])) == "admin") {
                    $dir = "./mvc/controllers/admin";
                    $this->area="Admin";
                    array_splice($arr, 0, 1);
               }
               if (@file_exists("$dir/$arr[0].php"))
                    $this->controller = $arr[0];
               else {
                    $dir = "./mvc/controllers";
                    if (@file_exists("$dir/$arr[0].php"))
                         $this->controller = $arr[0];
                    else
                         if($this->area != "Admin")
                              header("Location: /$this->domain");
                         else
                              header("Location: /$this->domain/Admin/Laptop");
               }
               array_splice($arr, 0, 1);     
          }
          require_once "$dir/$this->controller" . ".php";
          // xử lý Action
          if (isset($arr[0]))
               if (method_exists($this->controller, $arr[0]) && !method_exists("Controller", $arr[0])) {
                    $this->action = $arr[0];
                    array_splice($arr, 0, 1);
               }
          // Xử lý params
          if ($arr != [])
               $this->params = $arr;
          $this->HistoryPage(); // lưu lịch sử duyệt web 
          // echo ($this->controller);
          // echo ("</br>");
          // echo ($this->action);
          // echo ("</br>");
          // print_r($this->params);
          // print_r($_SESSION);
          $this->BlockAccessAdmin();
          $this->controller = new $this->controller;
          call_user_func_array([$this->controller, $this->action], $this->params);
     }
     function UrlProcess()
     {
          if (isset($_GET['url'])) {
               return explode('/', filter_var(trim($_GET['url'], '/')));
          }
     }
     function BlockAccessAdmin()
     {
          if ($this->area=="Admin" && $this->controller!="Login")
               if (!isset($_SESSION['user']['ad']))
                    header("Location: /$this->domain/Admin/Login");
     }
     function HistoryPage()
     {
          $url = @$_GET['url'];
          if (!isset($_SESSION['url'])) {
               $_SESSION['url'] = array();
               $_SESSION['url'][] = $url;
          } else
               if ($url != $_SESSION['url'][count($_SESSION['url']) - 1]&& strlen(strstr($url,"Ajax")))
               $_SESSION['url'][] = $url;
          if (count($_SESSION['url']) > 2)
               $_SESSION['url'] = array_slice($_SESSION['url'], 1, count($_SESSION['url']));
     }
}
