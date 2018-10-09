<?php

namespace Controller;

use Twig_Loader_Filesystem;
use Twig_Environment;

class ItemController
{

private $twig;

        public function __construct()
    {
            $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
            $this->twig = new Twig_Environment($loader);
    }
        public function index()
    {
            $itemManager = new \Model\ItemManager();
            $items = $itemManager->selectAllItems();
            return $this->twig->render('Item/index.html.twig', ['items' => $items]);
    }

        public function show($id)
        {
            $ItemManager = new \Model\ItemManager();
            $item = $ItemManager->selectOneItem($id);
            return $this->twig->render('Item/item.html.twig', ['item' => $item]);
        }
    }
?>
