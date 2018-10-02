<?php

namespace Controller;

    use Model\ItemManager;

    class ItemController
    {
        public function index()
        {
            $ItemManager = new ItemManager();
            $items = $ItemManager->selectAllItems();
            require __DIR__ . '/../View/item.php';
        }

        public function show(int $id)
        {
            $ItemManager = new ItemManager();
            $item = $ItemManager->selectOneItem($id);
            require __DIR__ . '/../View/showItem.php';
        }
    }
?>
