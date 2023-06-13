<?php
  function SwapInt(&$a, &$b)
  {
    $temp=$a;
    $a=$b;
    $b=$temp;
  }
  $a= 7;
  $b= 15;
  SwapInt(&$a, &$b);
  echo "O prwtos arithmos einai: " . $a . "\nO deyteros arithmos einai: " . $b;
?>
