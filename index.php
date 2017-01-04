<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/bootstrap.min.css" media="screen" title="no title">
  <link rel="stylesheet" href="CSS/index.css" media="screen" title="no title">
  <title>Exercice 2 Helene</title>
</head>

<body>

    <div class="container-fluid">

      <div class="row">

        <?php

          for($i = 1; $i<5; $i++){
            echo '<div class="col-md-3 col-sm-4 col-xs-6">
                    <img src="Img/Img'.$i.'.jpg">
                  </div>';
          }



        ?>

      </div>

    </div>
          <p class="<?php echo "red"; ?>"> uuuuuuuuuuuuuuuu</p> 



  <script src="https://use.fontawesome.com/182356f2e8.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="JS/bootstrap.min.js"></script>
</body>

</html>
