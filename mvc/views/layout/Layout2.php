<?php
// print_r($data);
// if (isset($data['goDefault'], $data['url']))
//      header('location:' . $data['url']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <style>
          #content,
          #header,
          #footer {
               padding: 20px;
          }

          label[mess] {
               margin: 5px;
          }

          .form-label {
               color: blueviolet;
               font-weight: bolder;
          }

          #header,
          #footer {
               background-color: yellow;
          }
     </style>
</head>

<body class="container-fruilt">
     <div id="header">
          <h1>Header</h1>
     </div>

     <div class="row">
          </p>
          <div class="col-2 border">
               <ul class="nav flex-column" style="font-weight:bold;">
                    <li class='nav-item'>
                         <a class='nav-link' aria-current='page' href='#'>Home</a>
                    </li>
               </ul>
          </div>
          <div id="content" class="col-10 border">
               <?php
               require_once "./mvc/views/pages/" . $data['page'] . ".php"
               ?>
          </div>
     </div>
     <div id="footer">
          <h1> Footer</h1>
     </div>
</body>

</html>