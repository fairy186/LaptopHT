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
          if (@file_exists("./mvc/views/layout/" . $layout . ".php"))
               require_once "./mvc/views/layout/" . $layout . ".php";
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
     function upFile($folderName)
     {
          $imgdata = [];
          $target_dir = "images/$folderName/";
          $folder = "images/$folderName";
          if (!is_dir($folder))
               mkdir($folder);
          $files = glob("$folder/*"); // get all file names
          foreach ($files as $file) { // iterate files
               if (is_file($file)) {
                    unlink($file); // delete file
               }
          }
          foreach ($_FILES["img"]["name"] as $key => $value) {
               $target_file = $target_dir . basename($_FILES["img"]["name"][$key]);
               $uploadOk = 1;
               $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
               $check = getimagesize($_FILES["img"]["tmp_name"][$key]);
               if ($check !== false) {
                    // echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
               } else {
                    // echo "File is not an image.";
                    $uploadOk = 0;
               }
               // Check file size
               if ($_FILES["img"]["size"][$key] > 40 * 1024 * 1024) {
                    echo "Sorry, your file is too large.";
                    $uploadOk = 0;
               }
               // Allow certain file formats
               if (
                    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif"
               ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
               }
               // Check if $uploadOk is set to 0 by an error
               if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
               } else {
                    if (move_uploaded_file($_FILES["img"]["tmp_name"][$key], $target_file)) {
                         $imgdata[] = htmlspecialchars(basename($_FILES["img"]["name"][$key]));
                    } else {
                         echo "Sorry, there was an error uploading your file.";
                    }
               }
          }
          return json_encode($imgdata, JSON_UNESCAPED_UNICODE);
     }
     function delFile($folderName)
     {
          $folder = "images/$folderName";
          if (is_dir($folder)) {
               $files = glob("$folder/*"); // get all file names
               foreach ($files as $file) { // iterate files
                    if (is_file($file)) {
                         unlink($file); // delete file
                    }
               }
               rmdir($folder);
          }
     }
}
