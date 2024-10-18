<?php

namespace App\Services;

use App\Repositories\CompanyRepository;

class CompanyService
{
    private $companyRepository;

    public function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }

    public function createCompany($userId)
    {
        return $this->companyRepository->create($userId);
    }

    public function getAllCompanies($condition = null)
    {
        return $this->companyRepository->fetchAll($condition);
    }

    public function getById($id)
    {
        return $this->companyRepository->getById($id);
    }

    public function getByUserId($userId)
    {
        return $this->companyRepository->getByUserId($userId);
    }
}
