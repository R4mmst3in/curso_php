<?php
$name = 'Javier';
$age = 78;
$isDev = true;
$isOld = $age > 40;

echo "<h2>Hola $name, veo que tienes $age años</h2>";

$outputAge = match (true) {
   $age < 3 => "Eres un bebe, $name",
   $age < 11 => "Eres un niño, $name",
   $age < 17 => "Eres un adolencente, $name",
   $age < 30 => "Eres un adulto joven, $name",
   $age < 40 => "Eres un adulto, $name",
   $age < 70 => "Eres un adulto pasadito",
   default => "Hueles más a madera que a fruta",
};

?>
<h2><?= $outputAge ?></h2>
