<?php
$apal=100;
$botak= 0;
$hp= 200;
$load= 10;
$two= 2;



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

  echo $botak;
  ?> teď je v botaku</br><?php
  $bot = $botak * 2;
  ?>
  <div style="display: block; height: 10px; width: 202px; border:solid black 1px;">
    <div style="display: block; height: 10px; width: <?php echo $bot?>px; background-color: green;">
    </div>
  </div>
  <?php

  echo $apal;
  ?> teď je v apalu</br><?php
  $apa = $apal * 2;
  ?>
  <div style="display: block; height: 10px; width: 202px; border:solid black 1px;">
    <div style="display: block; height: 10px; width: <?php echo $apa?>px; background-color: blue;">
    </div>
  </div>
  <?php

  echo $hp;
  ?>  loď má hp</br><?php
  ?>
  <div style="display: block; height: 10px; width: 202px; border:solid black 1px;">
    <div style="display: block; height: 10px; width: <?php echo $hp ?>px; background-color: red;">
    </div>
  </div>
  <?php
  ?></br><hr /><?php

}
?>
