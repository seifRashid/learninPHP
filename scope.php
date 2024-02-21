<?php
    $title = 'while Loop';

//     $greeting = "Hello, Rashid";
//     //anything defined inside this function is only usable inside the function thus is a local variable
//     function sum($a,$b)
//     {
//         //to use a global variable inside a function you have to use the word global
//         global $greeting;
//         echo $greeting;
//         $result = $a + $b;
//         return $result;
//     }
//     //however this $result variable is a global function and can be used anywhere in the code
//     $result = sum(1,2);

    $name = [
        ['firstName' => 'Rashid', 'secondName' => 'Seif'],
        ['firstName' => 'Muzahir', 'secondName' => 'Nyawa'],
        ['firstName' => 'Amina', 'secondName' => 'Munga']
    ];

    $name = array_column($name, 'firstName');
?>
<?php


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- just a notice, we have used the equal sign to output the title -->
    <title>PHP Fundamentals: <?= $title; ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/php-fundamentals.css" rel="stylesheet" />
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">PHP Fundamentals: <?= $title; ?></a>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5"></h1>
        </div>
      </div>
      <div class="row">
      <!-- Content here -->

      <table class="table table-striped mt-5">
      <?php

        

      ?>
      </table>

      </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>

</html>