<?php

namespace App\Repositories\Interfaces;

interface UserRepositoryInterface
{
    public function save($data);
    public function fetchAll($condition = null);
    public function findByEmail($email);
    public function findById($id);
    public function update($user);
    public function updatePhoto($user);
    public function changePassword($user);
}
