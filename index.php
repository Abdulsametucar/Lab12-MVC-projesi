<?php

require 'vendor/autoload.php';

$faker = \Faker\Factory::create();

echo "Name: " . $faker->name . "<br>\n";

echo "Address: " . $faker->address . "<br>\n";

echo "Email: " . $faker->email . "<br>\n";

echo "Text: " . $faker->text . "<br>\n";
?>