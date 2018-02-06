<?php
// on créé un tableau contenant les jours de la semaine
$week = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
// on créé un tableau à deux dimensions (des tableaux dans un tableau) qui représente le menu de la semaine
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
      // on affiche chaque jours de la semaine dans des <li>
      for ($i = 0; $i < count($week); $i++) {
        echo("<li>{$week[$i]}</li>");
      }
    ?>
  </ul>
  <table>
     <?php
        // on affiche le menu dans une table html
        for ( $i = 0; $i < count ($list); $i++){
          // pour chaque élément paire du tableau, on ajoute l'attribut style background-color: green
          if($i % 2){
            echo("<tr style=\"background-color:green;\">");
          }else{
            echo("<tr>");
          }
          // on affiche chaque élément du menu dans un <td>
          for ($j=0; $j < count($list[$i]); $j++) {
            echo("<td>{$list[$i][$j]}</td>");
          }
          echo("</tr>");

        }
     ?>
  </table>
  
</body>
</html>
