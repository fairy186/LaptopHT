<?php
//      echo "<table>";
//      foreach ($_SERVER as $key => $value) {
//           echo "<tr><td>$key</td><td>$value</td></tr>";
//      }
//      echo "</table>";
//
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
          label[mess] {
               margin: 5px;
          }

          .form-label {
               color: blueviolet;
               font-weight: bolder;
          }

     </style>
</head>

<body class="container-fruilt">
     <div id="header" class="bg-dark">
          <nav class="navbar navbar-expand-sm navbar-dark bg-dark container">
               <div class="container-fluid d-flex">
                    <a class="navbar-brand text-danger fw-bold fst-italic" href="#"><i class="bi bi-laptop"></i> LaptopHT</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <form class="mb-0">
                              <div class="input-group">
                                   <input class="form-control border-1 border-primary" type="search" placeholder="Search" aria-label="Search">
                                   <button class="btn btn-outline-primary border-1 border-primary" type="submit"><i class="bi bi-search"></i></button>
                              </div>
                         </form>
                         <div class="mx-auto"></div>
                         <ul class="navbar-nav">
                              <li class="nav-item dropdown">
                                   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-person-circle"></i> <?php echo @$_SESSION['user']['ten']  ?>
                                   </a>
                                   <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                        <li class="nav-item">
                                             <a class="nav-link" href='<?php echo "/$data[domain]/Login"; ?>'>Đăng Nhập</a>
                                        </li>
                                        <li class="nav-item bg-dark">
                                             <a class="nav-link" href='<?php echo "/$data[domain]/Login/SignOut"; ?> '>Đăng xuất</a>
                                        </li>
                                   </ul>
                              </li>
                         </ul>
                    </div>
               </div>
          </nav>
     </div>

     <div id="content" class="container">
          <?php
          require_once "./mvc/views/pages/$data[controller]/" . $data['page'] . ".php"
          ?>
     </div>
     <div id="footer">
          <h1> Footer</h1>
     </div>
     <script src='<?php echo "$data[dir]" ?>public/App.js'></script>
     <script>
          $(document).ready(function() {
               $("input[vali]").keyup(function() {
                    check(this, "<?php echo $data['domain'] ?>", "<?php echo $data['controller'] ?>");
               }).change(function() {
                    check(this, "<?php echo $data['domain'] ?>", "<?php echo $data['controller'] ?>");
               });
          });

          function validate() {
               $("input[vali]").each(function() {
                    check(this, "<?php echo $data['domain'] ?>", "<?php echo $data['controller'] ?>");
               });
          }
     </script>
</body>

</html>