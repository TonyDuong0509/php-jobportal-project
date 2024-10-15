<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        return $this->userRepository = $userRepository;
    }

    public function saveUser($data)
    {
        return $this->userRepository->save($data);
    }

    public function getAllUsers()
    {
        return $this->userRepository->fetchAll();
    }

    public function getByEmail($email)
    {
        return $this->userRepository->findByEmail($email);
    }
}
