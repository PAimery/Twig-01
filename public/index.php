<?php

// Get a $twig object from this file.
require __DIR__ . '/../config/twig.php';


$name = 'Wilder';

echo $twig->render('home.html.twig', ['name' => $name]);
