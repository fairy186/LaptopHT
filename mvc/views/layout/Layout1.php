<?php
if (isset($data['url']))
     header('location:' . $data['url']);
// echo("<script>location.href = '".$_SERVER["PHP_SELF"]."</script>");
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
     <title>Document</title>
     <style>
          #content,
          #header,
          #footer {
               padding: 20px;
          }

          label {
               margin: 5px;
               color: blue;
          }

          #header,
          #footer {
               background-color: yellow;
          }
     </style>
</head>

<body>
     <div id="header">
          <h1>Header</h1>
     </div>
     <div id="content">
          <?php
          if(isset($tb)) echo "<script> arlet($tb)</script>";
          require_once "./mvc/views/pages/" . $data['page'] . ".php"
          ?>
     </div>
     <div id="footer">
          <h1> Footer</h1>
     </div>
     <script src="../public/App.js">
     </script>
</body>

</html>