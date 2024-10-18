<?php

namespace App\Repositories\Interfaces;

interface JobRepositoryInterface
{
    public function save($data);
    public function fetchAll($condition = null);
    public function getAllByCompanyId($userId);
    public function getById($id);
}
