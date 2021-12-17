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
     <title><?php echo $data['title'] ?></title>
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
     <table>
          <?php
          // foreach ($_SERVER as $key => $value) {
          //     echo "<tr><td>$key</td><td>$value</td></tr>";
          // }
          ?>
     </table>
     <div class="container row">
          <div class="col-2">
               <ul class="nav flex-column" style="font-weight:bold;">
                    <li class="nav-item <?php if (strlen(strstr($_GET['url'] . "/", "LaptopType" . "/")) > 0) echo "border border-primary rounded" ?>">
                         <a class="nav-link" aria-current="page" href="/LaptopHT/LaptopType">Laptop Type</a>
                    </li>
                    <li class="nav-item <?php if (strlen(strstr($_GET['url'] . "/", "Manufacturer" . "/")) > 0) echo "border border-primary rounded" ?>">
                         <a class="nav-link" href="/LaptopHT/Manufacturer">Manufacturer</a>
                    </li>
                    <li class="nav-item <?php if (strlen(strstr($_GET['url'] . "/", "Laptop" . "/")) > 0) echo "border border-primary rounded" ?>">
                         <a class="nav-link" href="/LaptopHT/Laptop">Laptop</a>
                    </li>
               </ul>
          </div>
          <div id="content" class="col-10">
               <?php
               require_once "./mvc/views/pages/" . $data['page'] . ".php"
               ?>
          </div>
     </div>
     <div id="footer">
          <h1> Footer</h1>
     </div>
     <script>
          $(document).ready(function() {
               $("input[type='text']").keyup(function() {
                    var val = $(this).val();
                    var n = $(this).attr("name");
                    $.post(
                         "<?php echo $data['js'] ?>" + "Ajax/Check/" + n, {
                              val: val,
                         },
                         function(data) {
                              var d = JSON.parse(data);
                              $("label[mess=" + n + "]").html(d[1]);
                              if (d[0] == 1) {
                                   $("label[mess=" + n + "]").css("color", "blue");
                                   $("label[mess=" + n + "]").addClass("blue");
                                   $("label[mess=" + n + "]").removeClass("red");
                              } else {
                                   $("label[mess=" + n + "]").css("color", "red");
                                   $("label[mess=" + n + "]").addClass("red");
                                   $("label[mess=" + n + "]").removeClass("blue");
                              }
                              var mess = $("label[mess]");
                              var messblue = $(".blue");
                              if (mess.length == messblue.length)
                                   $("button[name='sm']").removeClass("disabled");
                              else $("button[name='sm']").addClass("disabled");
                         }
                    );

               });
          });
     </script>
</body>

</html>