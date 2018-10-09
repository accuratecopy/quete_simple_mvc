<?php

namespace Controller;

    use Twig_Loader_Filesystem;
    use Twig_Environment;
    use Model\CategoryManager;

    class CategoryController
    {

        private $twig;

        public function __construct()
        {
            $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
            $this->twig = new Twig_Environment($loader);
        }

        public function index()
        {
            $CategoryManager = new CategoryManager();
            $categories = $CategoryManager->selectAllCategories();
            return $this->twig->render('Category/index.html.twig', ['categories' => $categories]);
        }

        public function show($id)
        {
            $CategoryManager = new CategoryManager();
            $category = $CategoryManager->selectOneCategory($id);
            return $this->twig->render('Category/category.html.twig', ['category' => $category]);
        }
    }

