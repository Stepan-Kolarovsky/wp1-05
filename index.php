<?php
  $homelessMoney = 132;
  $vodkaPrice = 119;
  
  if ($homelessMoney >= $vodkaPrice) {
    $answer = "Vodka Zakoupena!";
    $rest = $homelessMoney - $vodkaPrice;
  } else {
    $answer = "Nedostatek peněz!";
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     Cena vodky: <?= $vodkaPrice ?>
     <br>Peníze bezdomovce před návštěvou večerky:  <?= $homelessMoney ?> </br>
      <br>Bezdomovec přichází do večerky a slušně žádá o flašku vodky</br>
       <br>Prodavač podává flašku, a prosí o peníze</br>
        <br> Podává peníze</br>
         <br><?= $answer ?></br>
      <br>Bezdomovci po návštěvě večerky zbývá: <?= $rest ?></br>  
</body>
</html>
