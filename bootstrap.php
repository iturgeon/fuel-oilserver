<?php

// Make sure our add_classes is called AFTER oil is loaded
if (FUEL::$is_cli) Package::load('oil');

// Lets use our oil class instead
Autoloader::add_classes(array(
	'Oil\\Command' => __DIR__.'/classes/command.php',
));