<?php

namespace App\Repositories\Interfaces;

interface UserRepositoryInterface
{
    public function save($data);
    public function fetchAll($condition = null);
    public function findByEmail($email);
}
