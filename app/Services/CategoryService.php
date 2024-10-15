<?php

namespace App\Services;

use App\Repositories\CategoryRepository;

class CategoryService
{
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function save($data)
    {
        return $this->categoryRepository->save($data);
    }

    public function getAll()
    {
        return $this->categoryRepository->fetchAll();
    }

    public function getById($id)
    {
        return $this->categoryRepository->getById($id);
    }

    public function updateCategory($category)
    {
        return $this->categoryRepository->update($category);
    }

    public function deleteCategory($id)
    {
        return $this->categoryRepository->delete($id);
    }
}
