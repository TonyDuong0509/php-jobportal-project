<?php

namespace App\Repositories\Interfaces;

interface CompanyRepositoryInterface
{
    public function create($userId);
    public function fetchAll($condition = null);
    public function getById($id);
    public function getByUserId($userId);
}
