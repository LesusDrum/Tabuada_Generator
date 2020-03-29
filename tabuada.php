<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type='text/css' href="style.css">

    <title>Tabuada Generator 1.0</title>

        <?php
        $num = $_POST['numi'];
        $f = $_POST['numf'];
        $i = 0;
        $skin = $_POST['skin'];
        

  echo "</head>
  <body class='$skin'>
  <div class='container mt-4 rounded border border-white shadow-lg $skin-impar d-flex justify-content-around'>
  <a href='index.html'><img class='mt-2 align-self-start' src='./svg/arrow-left-circle.svg' /> </a>
  <h1 class='text-dark d-flex justify-content-center font-weight-bold flex-fill'>
  Tabuadas</h1>
  </div>";
  ?>
  <div class="row mx-3 my-4"> 

  
<?php

    function par_impar($pro) {
      $res = $pro%2==0;
      return $res;
    }

    while ($num <= $f) {

    echo "<div class='col my-3 d-flex justify-content-center '>
    <div class='card shadow-lg' style='width: 18rem;'>
    
    <div class='card-header d-flex justify-content-center $skin-par text-white-50 font-weight-bolder'>
            Tabuada do número $num
        </div>";
    echo "<ul class='list-group list-group-flush'>";
  while ($i<=10) {
        $tab = $num * $i;
        if (par_impar($tab)==true) {
				echo "<li class='$skin-par text-white-50 d-flex justify-content-center' style='height:30px'> $num x $i = $tab </li><hr class='my-0'>";	
      } else {
        echo "<li class='$skin-impar text-gray-800 d-flex justify-content-center' style='height:30px'> $num x $i = $tab </li><hr class='my-0'>";
      }
        $i++;
			}
    echo "</ul></div>";

    echo "</div>";
    $i=0;
    $num++;
        }
    ?>
    
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>