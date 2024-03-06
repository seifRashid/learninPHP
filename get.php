<?php

$title = 'get';

    include('inc/header.php');
?>
<?php

$product_id = $_GET['productid'];

?>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Get Input</h1>
        </div>
      </div>
      <div class="row">
      <!-- Content here -->
        <?= $product_id; ?>
      </div>
    </div>
<?php
include('inc/footer.php');
?>
    