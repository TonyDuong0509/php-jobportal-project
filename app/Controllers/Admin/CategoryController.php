<?php

namespace App\Controllers\Admin;

use App\Services\CategoryService;
use Utils\Helper;

class CategoryController
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function manageCategory()
    {
        $title = 'Manage Category';
        $categories = $this->categoryService->getAll();

        require ABSPATH . '/resources/admin/category/allCategory.php';
    }

    public function addCategoryPage()
    {
        $title = 'Add Category';
        require ABSPATH . '/resources/admin/category/addCategory.php';
    }

    public function addCategory()
    {
        $data = [];
        $data['name'] = $_POST['name'];
        $helper = new Helper();
        $data['slug'] = $helper->slugifyString($data['name']);
        $data['createdAt'] = $helper->getDateTime();

        $this->categoryService->save($data);
        $_SESSION['notification'] = [
            'message' => 'Create category successfully',
            'alert-type' => 'success'
        ];
        header("Location: /admin/manage-category");
        exit;
    }

    public function editCategoryPage($id)
    {
        $title = 'Edit Category';

        if (!isset($id)) {
            $_SESSION['notification'] = [
                'message' => 'Category is not exist',
                'alert-type' => 'error'
            ];
            header("Location: /admin/manage-category");
            exit;
        }

        $category = $this->categoryService->getById($id);

        require ABSPATH . '/resources/admin/category/editCategory.php';
    }

    public function updateCategory()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $helper = new Helper();
        $slug = $helper->slugifyString($name);
        if (!isset($id)) {
            $_SESSION['notification'] = [
                'message' => 'Category is not exist',
                'alert-type' => 'error'
            ];
            header("Location: /admin/manage-category");
            exit;
        }

        $category = $this->categoryService->getById($id);
        $category->setName($name);
        $category->setSlug($slug);

        $this->categoryService->updateCategory($category);

        $_SESSION['notification'] = [
            'message' => 'Update category successfully',
            'alert-type' => 'success'
        ];
        header("Location: /admin/manage-category");
        exit;
    }

    public function deleteCategory($id)
    {
        if (!isset($id)) {
            $_SESSION['notification'] = [
                'message' => 'Category is not exist',
                'alert-type' => 'error'
            ];
            header("Location: /admin/manage-category");
            exit;
        }

        $this->categoryService->deleteCategory($id);

        $_SESSION['notification'] = [
            'message' => 'Delete category successfully',
            'alert-type' => 'success'
        ];
        header("Location: /admin/manage-category");
        exit;
    }
}
