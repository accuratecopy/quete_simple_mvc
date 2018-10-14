<?php

    namespace Model;

        class CategoryManager extends AbstractManager
        {
            // récupération de tous les items
            public function selectAllCategories(): array
            {
                $query = "SELECT * FROM category";
                $res = $this->pdo->query($query);
                return $res->fetchAll();
            }

            // la méthode prend l'id en paramètre
            public function selectOneCategory(int $id) : array
            {
                $query = "SELECT * FROM category WHERE id = :id";
                $statement = $this->pdo->prepare($query);
                $statement->bindValue(':id', $id, \PDO::PARAM_INT);
                $statement->execute();
                // contrairement à fetchAll(), fetch() ne renvoie qu'un seul résultat
                return $statement->fetch();
            }

        }