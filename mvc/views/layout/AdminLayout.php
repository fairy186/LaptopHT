<?php
// print_r($data);
if (isset($data['goDefault'], $data['url']))
     header('location:' . $data['url']);
function listitem($controller, $itemname)
{
     $item = "<li class='nav-item'>
     <a class='nav-link' aria-current='page' href='/LaptopHT/$controller'>$itemname</a></li>";
     if (strlen(strstr($_GET['url'] . '/', $controller . '/')))
          $item = "<li class='nav-item border border-dark bg-primary bg-opacity-10'>
          <a class='nav-link' aria-current='page' href='/LaptopHT/$controller'>$itemname</a></li>";
     echo $item;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <title><?php echo $data['title'] ?></title>
     <style>
          #content,
          #header,
          #footer {
               padding: 20px;
          }

          .row {
               margin: 0;
               padding: 0;
          }
          
          label[mess] {
               font-style: italic;
               margin:5px 15px;
          }
          .form-label {
               margin: 0;
               padding: 0;
               color: blueviolet;
               font-weight: bolder;
          }

          #header,
          #footer {
               background-color: yellow;
          }
     </style>
</head>

<body class="container-fruilt m-0 p-0" <?php if(@$data['action']=="Edit"|| isset($_POST['sm'])) echo"onload='validate()'"?>>
     <div id="header">
          <h1>Header</h1>
     </div>

     <div class="d-flex flex-row " style="margin-bottom:95px; ">
          <p></p>
          <div class="border m-0 p-0" style="min-width: 150px !important;">
               <ul class="nav flex-column d-block" style="font-weight:bold;">
                    <?php listitem("LaptopType", "Loại laptop") ?>
                    <?php listitem("Manufacturer", "Hảng laptop") ?>
                    <?php listitem("Laptop", "Laptop") ?>
                    <?php listitem("Customer", "Khách hàng") ?>
                    <?php listitem("Cart", "Giỏ hàng") ?>
                    <?php listitem("OrderInfo", "Đơn hàng") ?>
                    <?php listitem("Admin", "Quản trị") ?>
               </ul>
          </div>
          <div id="content" class="flex-grow-1 border">
               <?php
               require_once "./mvc/views/pages/$data[controller]/" . $data['page'] . ".php"
               ?>
          </div>
     </div>
     <div id="footer" class="fixed-bottom">
          <h1> Footer</h1>
     </div>
     <script src='<?php echo "$data[dir]"?>public/App.js'></script>
     <script>
          $(document).ready(function() {
               $("input[type='text']").keyup(function() {
                    check(this,"<?php echo $data['domain'] ?>","<?php echo $data['controller'] ?>");
               });
          });
          function validate() {
               $("input[type='text']").each(function(){
                    check(this,"<?php echo $data['domain'] ?>","<?php echo $data['controller'] ?>");
               });
          }
     </script>
</body>

</html>