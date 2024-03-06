<?php
    $title = 'hello';

    include('inc/header.php');

    $names = [
        ['firstName' => 'Rashid', 'secondName' => 'Seif'],
        ['firstName' => 'Muzahir', 'secondName' => 'Nyawa'],
        ['firstName' => 'Amina', 'secondName' => 'Munga']
    ];

    $name = array_column($name, 'firstName');
?>
<?php


?>

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
<?php

include('inc/footer.php');


?>
    