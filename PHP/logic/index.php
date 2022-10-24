<?php

for ($s = 1; $s <=9; $s++){
    for ($y = 1; $y <=9; $y++){
          
      if ($s>=$y && $y+$s<=10 || $s<=$y && $y+$s>=10 ){
        echo "*";
      } else {
        echo " ";
      }
  
    }
  
    echo "\n";
  }

