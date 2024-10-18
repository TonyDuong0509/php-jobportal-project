<?php

namespace App\Repositories;

use App\Repositories\Interfaces\JobRepositoryInterface;

class JobRepository implements JobRepositoryInterface
{
    public function save($data)
    {
        global $conn;

        $title = $data['title'];
        $slug = $data['slug'];
        $categoryId = $data['categoryId'];
        $companyId = $data['companyId'];
        $description = $data['description'];
        $type = $data['type'];
        $offeredSalary = $data['offeredSalary'];
        $experience = $data['experience'];
        $qualification = $data['qualification'];
        $skillRequirement = $data['skillRequirement'];
        $deadlineDate = $data['deadlineDate'];
        $location = $data['location'];
        $quantity = $data['quantity'];
        $isFull = $data['isFull'];
        $image = $data['image'];
        $createdAt = $data['createdAt'];
        $level = $data['level'];

        $sql = "INSERT INTO jobs (title, slug, categoryId, companyId, description, type, offeredSalary, 
                                experience, qualification, skillRequirement, deadlineDate,
                                location, quantity, isFull, image, createdAt, level)
                VALUES ('$title', '$slug', '$categoryId', '$companyId', '$description', '$type', 
                        '$offeredSalary', '$experience', '$qualification', '$skillRequirement', '$deadlineDate', 
                        '$location', '$quantity', '$isFull', '$image', '$createdAt', '$level')";

        if ($conn->query($sql) === true) {
            $last_id = $conn->insert_id;
            return $last_id;
        }
        echo "Error: " . $sql . PHP_EOL;
        return false;
    }
}
