<?php

namespace Controller;


    // src/Controller/ItemController.php
    //require __DIR__ . '/../Model/ItemManager.php';

    use Model\ItemManager;

    class ItemController
    {
        public function index()
        {
            $ItemManager = new ItemManager;
            $items=$ItemManager->selectAllItems();
            require __DIR__ . '/../View/item.php';
        }
    }
?>
