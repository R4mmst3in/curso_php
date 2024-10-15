<?php
   $bestLanguages = ["PHP", "JavaScript", "Python", 1, 2];
   $bestLanguages[3] = "Java";
   $bestLanguages[4] = "TypeScript";

   echo "$bestLanguages[0]<br />";
?>
<ul>
   <?php foreach ($bestLanguages as $language) { ?>
      <li><?= $language ?></li>
   <?php }; ?>
</ul>

<?php
$person = [
   "name" => "Javier",
   "age" => 45,
   "isDev" => true,
   "languages" => ["PHP", "Javascript", "Python"],
   ]
?>