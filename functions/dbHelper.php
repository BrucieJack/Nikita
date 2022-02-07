<?php
    function connectDB()
    {
        return mysqli_connect("192.168.56.56:3306", "homestead", "secret", "electro_db");
    }

    function getCategories(bool $onlyParents = false): array
    {
        $link = connectDB();
        $sql = 'SELECT id, name FROM category';
        if ($onlyParents) {
            $sql .= ' WHERE parent_id IS NULL';
        }

        $result = mysqli_query($link, $sql);
        $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $categories;
    }

    function getProducts(): array
    {
        $link = connectDB();

        $sql = 'SELECT image, category.name AS category, discount, product.name, cost
        FROM product
        LEFT JOIN image ON image.product_id = product.id
        LEFT JOIN category ON  product.category_id = category.id';
        
        
        $result = mysqli_query($link, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $rows;
    }

