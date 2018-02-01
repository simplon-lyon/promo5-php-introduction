<?php

$email1 = "bloup@bloup.com";
$password1 = "mdp";

if(isset($_POST["email"]) && isset($_POST["password"])){
  if($_POST["email"]=== $email1 && $_POST["password"]===$password1){
    echo "on a gagné";
  }
  else{
    echo "on a perdu";
  }
} else {
  echo "bien essayé";
}

