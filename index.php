<?php
$apal=100;
$botak= 0;
$hp= 200;
$load= 10;



while ($botak != 100) {
  $apal -= $load;

for ($index=0; $index < 5; $index++) {
  $alfaDmg= rand(0,8);
  $hp -= $alfaDmg;
  if ($hp <= 0) {die("loď UMŘELA");
  }
  echo $alfaDmg;
  ?> pirát ubral</br><?php
  }
  $botak+= $load;


  ?></br><?php
  $bot = $botak / 10;
   for ($index2=0; $index2 < $bot ; $index2++) {
    echo "&bullet;";
}
echo $botak;
?> teď je v botaku</br><?php

$apa = $apal / 10;
 for ($index3=0; $index3 < $apa ; $index3++) {
  echo "&bullet;";
}
  echo $apal;
  ?> teď je v apalu</br><?php

  echo $hp;
  ?>  loď má hp</br><?php
  ?>
  <div style="display: block; height: 10px; width: 202px; border:solid black 1px;">
    <div style="display: block; height: 10px; width: <?php echo $hp ?>px; background-color: red;">
    </div>
  </div>
  <?php
  ?></br><?php
}
?>
