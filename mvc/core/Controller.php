<?php
     class controller{
          public function model($model){
               require_once "./mvc/models/".$model.".php";
               return new $model;
          }
          public function view($layout, $data=[]){
               if(@file_exists("./mvc/views/layout/".$layout.".php")){
                    require_once "./mvc/views/layout/".$layout.".php";
               }
               else require_once "./mvc/views/layout/NonLayout.php";
          }
     }
?>