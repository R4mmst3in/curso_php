<!DOCTYPE html>
<html lang="es">


<?php
require_once 'consts.php';
require_once 'functions.php';
$data = get_data(API_URL);
?>

<?php require 'sections/head.php'; ?>

<body>
  <?php require 'sections/main.php'; ?>
  <?php require 'sections/styles.php'; ?>
</body>
</html>
