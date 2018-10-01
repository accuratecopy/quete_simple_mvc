<?php
// chargement de l'autoload en début de fichier
require __DIR__ . '/../vendor/autoload.php';
//require __DIR__ . '/../src/Controller/ItemController.php';
use Controller\ItemController;

$ItemController = new ItemController();
$ItemController->index();

?>
