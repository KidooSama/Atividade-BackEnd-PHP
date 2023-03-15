<?php
$X = readline();
$Y = readline();
if ($X < $Y) {
    for ($X; $X < $Y; $X++) { 
      if ($X %5 == 2 or $X %5 == 3 ) {
        echo "$X \n";
      }  
    }
}else{
    for ($Y; $Y < $X; $Y++) { 
        if ($Y %5 == 2 or $Y %5 == 3 ) {
            echo "$Y\n";
          } 
    }
}
?>


