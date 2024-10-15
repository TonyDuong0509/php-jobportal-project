<?php

namespace App\Repositories\Interfaces;

interface CategoryRepositoryInterface
{
    public function save($data);
    public function fetchAll($condition = null);
    public function getById($id);
    public function update($data);
    public function delete($id);
}
