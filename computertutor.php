<?php
require_once __DIR__.'/vendor/autoload.php';
$configFile = fopen(__DIR__."/config.json","r");
$configJson = fread($configFile,filesize(__DIR__."/config.json"));
$config = json_decode($configJson,true);
$loader = new Twig_Loader_Filesystem(__DIR__."/themes/".$config['twig_path']);
$twig = new Twig_Environment($loader);
echo $twig->render('computertutor.html');
?>
