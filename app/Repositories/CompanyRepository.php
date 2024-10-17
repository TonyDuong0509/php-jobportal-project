<?php

namespace App\Repositories;

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
}
