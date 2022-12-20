<?php

require_once './vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./views');
$twig = new \Twig\Environment($loader, ['cache' => false,]);

$template = $twig->load('produit.html.twig');

echo $template->render([]);