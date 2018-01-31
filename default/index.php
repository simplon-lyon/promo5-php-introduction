<?php
spl_autoload_register();

use zoo\Cat;

$cat = new Cat("Garfeild", "siamois", ["orange","black"]);
var_dump($cat);