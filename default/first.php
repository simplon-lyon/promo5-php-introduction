<?php

$week = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");

$list = [
  ["lundi", "patates", "glace"],
  ["mardi", "riz", "mousse au chocolat"],
  ["mercredi", "poisson", "fraisier"],
  ["jeudi", "des pates", "flan"],
  ["vendredi", "steak frites", "tarte pomme"],
  ["samedi", "couscous", "mousse caramel"],
  ["dimanche", "haricot vert", "tarte poire"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <ul>
    <?php
      for ($i = 0; $i < count($week); $i++) {
        echo("<li>{$week[$i]}</li>");
      }
    ?>
  </ul>
  <table>
     <?php
        for ( $i = 0; $i < count ($list); $i++){
          if($i % 2){
            echo("<tr style=\"background-color:green;\">");
          }else{
            echo("<tr>");
          }
          for ($j=0; $j < count($list[$i]); $j++) {
            echo("<td>{$list[$i][$j]}</td>");
          }
          echo("</tr>");

        }
     ?>
  </table>
  
</body>
</html>