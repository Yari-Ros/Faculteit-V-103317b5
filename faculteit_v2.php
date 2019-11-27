<?php
  $line = readline("Van welk getal wil je de faculteit weten?");
  $tot=1;
  $index=1;
  for($i = 1; $i <= $line; $i++){
   $tot*=$i;
   $tot=($tot * $index);
  }
  echo $tot;
  