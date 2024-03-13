<?php
 
  require_once 'class_lingkaran.php';

  echo 'Nilai PHI =' . Lingkaran:: PHI;

  
  $lingkaran1 = new Lingkaran(8);
  $lingkaran2 = new Lingkaran(27);

  echo',<br><br>';
  echo '<br> Luas lingkaran1 adalah'. $lingkaran1->getLuas(). 'cm';
  echo '<br> Luas lingkaran2 adalah'. $lingkaran2->getLuas(). 'cm';

  echo'<br><br>';
  echo',<br><br>';
  echo '<br> Kel lingkaran1 adalah'. $lingkaran1->getKel(). 'cm';
  echo '<br> Kel lingkaran2 adalah'. $lingkaran2->getKel(). 'cm';

?>