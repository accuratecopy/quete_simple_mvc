<?php

namespace Controller;

    use Model\CategoryManager;

    class CategoryController
    {
        public function index()
        {
            $CategoryManager = new CategoryManager();
            $categories = $CategoryManager->selectAllCategories();
            require __DIR__ . '/../View/category.php';
        }

        public function show(int $id)
        {
            $CategoryManager = new CategoryManager();
            $category = $CategoryManager->selectOneCategory($id);
            require __DIR__ . '/../View/showCategory.php';
        }
    }
?>
