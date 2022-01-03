<?php
class App
{
     protected $domain;
     protected $controller = "Home";
     protected $action = "DefaultAction";
     protected $params = [];
     function __construct()
     {
          $arr = $this->UrlProcess();
          $control = new Controller();
          $this->domain = $control->domain;
          // Xử lý Controllers
          if (isset($arr[0]))
               if (@file_exists("./mvc/controllers/$arr[0].php")) {
                    $this->controller = $arr[0];
               } else
                    header("Location: /$this->domain");

          require_once "./mvc/controllers/" . $this->controller . ".php";
          if (isset($arr[1]))
               if (method_exists($this->controller, $arr[1]) && !method_exists("Controller", $arr[1])) {
                    $this->action = $arr[1];
                    if (isset($arr[2]))
                         $this->params = [$arr[2]];
                    if (isset($arr[3]))
                         header("Location: /$this->domain/$this->controller/$this->action/" . $this->params[0]);
               } else {
                    $this->params = [$arr[1]];
                    if (isset($arr[2]))
                         header("Location: /$this->domain/$this->controller/" . $this->params[0]);
               }
          // $this->params = $arr ? array_values($arr):[];
          $url = @$_GET['url'];
          if (!isset($_SESSION['url'])) {
               $_SESSION['url'] = array();
               $_SESSION['url'][] = $url;
          } else
               if ($url != $_SESSION['url'][count($_SESSION['url']) - 1])
               $_SESSION['url'][] = $url;
          if (count($_SESSION['url']) > 2)
               $_SESSION['url'] = array_slice($_SESSION['url'], 1, count($_SESSION['url']));
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
          if (strlen(strstr("$this->controller", "Admin")) && $this->controller != "AdminLogin")
               if (isset($_SESSION['user']['ad']) && $_SESSION['user']['ad'] == 1)
                    header("Location: /$this->domain/AdminLogin");
     }
}
