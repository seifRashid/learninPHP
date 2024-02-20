<?php
    $title = 'foreach Loop';

    $favoriteGuitars = [
        'Vela',
        'Explorer',
        'Strat'
    ];

          $kvpGuitars = [
        'prs' => 'Vela',
        'gibson' => 'Explorer',
        'fender' => 'Strat'
    ];
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

        foreach($favoriteGuitars as $guitar)
        {
            echo "<tr><td>$guitar</td></tr>";
        }

      ?>
      </table>

      <table class="table table-striped mt-5">
      <?php

        foreach($kvpGuitars as $key => $guitar)
        {
            echo "<tr><td>$key</td><td>$guitar</td></tr>";
        }

      ?>
      </table>
      </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>

</html>