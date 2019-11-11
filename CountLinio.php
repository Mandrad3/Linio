<?php
   $contador = 0;
   $limite = 100;
   while($contador <= $limite){
      
     if ($contador % 3 == 0 && $contador % 5 != 0) {
     	echo "linio. <br/>";
     }
     elseif($contador % 5 == 0 && $contador % 3 != 0){
     	echo "IT . <br />";
     }
     elseif ($contador % 5 == 0 && $contador % 3 == 0 ) {
     	echo "Litianos . <br/>";
     }else {
     	echo "$contador . <br/> ";
     }
      $contador++;
   }
?>






