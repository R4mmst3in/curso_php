<?php
$deportes = array('Trail Running','Mountain Bike','Escalada','Futbol','Baloncesto');?>
<ul>
<?php
foreach ($deportes as $deporte) :
?>
<li><p><?= $deporte ?></li>
<?php endforeach; ?>
</ul>
