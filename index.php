<?php
  $homelessMoney =132 ;
  $vodkaPrice =119 ;
  $cigaretPrice =100;
  $vodkaCigarettePrice = $vodkaPrice + $cigaretPrice;
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      
    if($homelessMoney >= $vodkaCigarettePrice) {
      echo "Cena vodky a cigaret:" . $vodkaCigarettePrice ;
      $homelessMoney = $homelessMoney - $vodkaCigarettePrice;
      echo "Zakoupeno" ;
    } 


  elseif ($homelessMoney >= $vodkaPrice) {
    echo "Cena vodky:". $vodkaPrice;
    $homelessMoney = $homelessMoney - $vodkaPrice ;
    echo "<br> Vodka zakoupena!</br>";
  }
  
  elseif ($homelessMoney >= $cigaretPrice){
   echo "Cena cigaret: " . $cigaretPrice ;
   $homelessMoney -= $cigaretPrice ;
   echo "Zakoupeno" ;
  } else {
    echo "Nedostatek peněz!" ;
  }
  

  ?> 
 
</body>
</html>