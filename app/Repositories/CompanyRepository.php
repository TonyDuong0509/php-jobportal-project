<?php

namespace App\Repositories;

use App\Models\Company;
use App\Repositories\Interfaces\CompanyRepositoryInterface;

class CompanyRepository implements CompanyRepositoryInterface
{
    public function create($userId)
    {
        global $conn;
        $id = $userId;
        $sql = "INSERT INTO companies (userId)
                VALUES ('$id')";

        if ($conn->query($sql) === true) {
            $last_id = $conn->insert_id;
            return $last_id;
        }
        echo "Error: " . $sql . PHP_EOL;
        return false;
    }

    public function fetchAll($condition = null)
    {
        global $conn;
        $companies = [];
        $sql = "SELECT * FROM companies";

        if ($condition) {
            $sql .= " WHERE $condition";
        }
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $company = new Company(
                    $row['id'],
                    $row['website'],
                    $row['employee'],
                    $row['createdAt'],
                    $row['userId'],
                );
                $companies[] = $company;
            }
        }
        return $companies;
    }

    public function getById($id)
    {
        $condition = "id = '$id'";
        $companies = $this->fetchAll($condition);
        $company = current($companies);
        return $company;
    }

    public function getByUserId($userId)
    {
        $condition = "userId = '$userId'";
        $companies = $this->fetchAll($condition);
        $company = current($companies);
        return $company;
    }
}
