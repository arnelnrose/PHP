<?php
   $hours = 104;
   $rate = 76.25;
   $semimonthly_pay = 0;
   
   if ($hours > 0) {
       if ($hours <= 104) {
           $semimonthly_pay = $hours * $rate;
       } else {
           $semimonthly_pay = (104 * $rate) + (($hours - 104) * $rate);
       }
   }
   
   echo "Your semi-monthly salary with overtime is ₱{$semimonthly_pay}";
   
//  OUTPUT: Your semi-monthly salary with overtime is ₱7930
?>
