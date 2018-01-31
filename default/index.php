<?php
spl_autoload_register();

use zoo\Cat;

use zoo\herbivorous\Cow;

$cat = new Cat("Garfeild", "siamois", ["orange","black"]);
var_dump($cat);


var_dump(new Cow());