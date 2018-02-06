<?php
// spl_autoload_register() permet de require automatiquement les fichiers à partir de leur organisation des namespaces.
// cela implique que l'arborescence des dossiers doit correspondre à celle des namespaces.
spl_autoload_register();
// on déclare à PHP qu'on utilise la classe Cat du namespace zoo
use zoo\Cat;
// la même chose avec la classe Cow
use zoo\herbivorous\Cow;
// on créé un objet de type Cat
$cat = new Cat("Garfeild", "siamois", ["orange","black"]);
// on affiche les propriétés de l'objet de type Cat
var_dump($cat);
// la même chose avec un objet de type Cow
var_dump(new Cow());
