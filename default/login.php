<?php

$email1 = "bloup@bloup.com";
$password1 = "mdp";
// on vérifie que le mail et le mot de passe sont bien transmis dans le POST
if(isset($_POST["email"]) && isset($_POST["password"])){
  // ... puis on vérifie qu'ils sont valide
  if($_POST["email"]=== $email1 && $_POST["password"]===$password1){
    // si c'est ok, on affiche "on a gagné"
    echo "on a gagné";
  }
  else{
    //si non, on affiche "on a perdu"
    echo "on a perdu";
  }
} else {
  // si le POST est vide, on affiche "bien essayé"
  echo "bien essayé";
}

