<?php

namespace Controller;

    use Twig_Loader_Filesystem;
    use Twig_Environment;
    use Model\CategoryManager;

    class CategoryController extends AbstractController
    {

        private $twig;

        public function index()
        {
            $CategoryManager = new CategoryManager($this->pdo);
            $categories = $CategoryManager->selectAllCategories();
            return $this->twig->render('Category/index.html.twig', ['categories' => $categories]);
        }

        public function show($id)
        {
            $CategoryManager = new CategoryManager($this->pdo);
            $category = $CategoryManager->selectOneCategory($id);
            return $this->twig->render('Category/category.html.twig', ['category' => $category]);
        }
    }

