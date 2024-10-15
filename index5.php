<!DOCTYPE html>
<html lang="es">

<?php
require_once 'consts.php';
require_once 'functions.php';
$data = get_data(API_URL);
?>

<?php 
  render_template('head', $data);
  render_template('main', $data);
  require_once 'sections/styles.php';
?>
</body>
</html>
