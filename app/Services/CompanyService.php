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
}
