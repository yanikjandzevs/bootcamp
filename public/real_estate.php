<?php
define('PRIVATE_DIR', dirname(__DIR__) . '/private/');

include(PRIVATE_DIR . 'functions.php');


include(PRIVATE_DIR . 'header.php');

?>
<div class="container">
  <?php part('real_estate_form', [
    'form_id' => 'add_real_estate',
    'url' => 'api.php?action=add-real_estate',
    'heading' => 'Add real_estate'
  ]); ?>
  <?php part('real_estate_list'); ?>

</div>


<script src="View.js"></script>
<script src="script.js"></script>
