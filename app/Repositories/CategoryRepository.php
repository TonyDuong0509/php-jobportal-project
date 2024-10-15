<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function save($data)
    {
        global $conn;
        $name = $data['name'] ?? '';
        $slug = $data['slug'] ?? '';
        $createdAt = $data['createdAt'] ?? '';

        $sql = "INSERT INTO categories (name, slug, createdAt)
                VALUES ('$name', '$slug', '$createdAt')";

        if ($conn->query($sql) === true) {
            $last_id = $conn->insert_id;
            return $last_id;
        }
        echo "Error " . $sql . PHP_EOL;
        return false;
    }

    public function fetchAll($condition = null)
    {
        global $conn;
        $categories = array();
        $sql = "SELECT * FROM categories";
        if ($condition) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $category = new Category(
                    $row['id'],
                    $row['name'],
                    $row['slug'],
                    $row['createdAt'],
                );
                $categories[] = $category;
            }
        }

        return $categories;
    }

    public function getById($id)
    {
        $condition = "id = '$id'";
        $categories = $this->fetchAll($condition);
        $category = current($categories);

        return $category;
    }

    public function update($category)
    {
        global $conn;

        $id = $category->getId();
        $name = $category->getName();
        $slug = $category->getSlug();

        $sql = "UPDATE categories
                SET name = '$name', slug = '$slug'
                WHERE id = '$id'";

        if ($conn->query($sql) === true) return true;

        echo "Error " . $sql . PHP_EOL;
        return false;
    }

    public function delete($id)
    {
        global $conn;

        $sql = "DELETE FROM categories
                WHERE id = '$id'";
        if ($conn->query($sql) === true) return true;

        echo "Error " . $sql . PHP_EOL;
        return false;
    }
}
