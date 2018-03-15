<?php
$apal=100;
$botak= 0;
$hp= 200;
$load= 10;



while ($botak != 100) {
  $apal= $apal - $load;

for ($index=0; $index < 5; $index++) {
  $alfaDmg= rand(0,8);
  $hp = $hp - $alfaDmg;
  if ($hp <= 0) {die("loď UMŘELA");
  }
  echo $alfaDmg;
  ?> pirát ubral</br><?php
  }

  $botak= $botak + $load;
  ?></br><?php
  echo $botak;
  ?> teď je v botaku</br><?php
  echo $apal;
  ?> teď je v apalu</br><?php
  echo $hp;
  ?> hp lodi</br><?php
  ?></br><?php
}
?>
