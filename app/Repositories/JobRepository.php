<?php

namespace App\Repositories;

use App\Models\Job;
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

    public function fetchAll($condition = null)
    {
        global $conn;
        $jobs = [];
        $sql = "SELECT * FROM jobs";
        if ($condition) {
            $sql .= " WHERE $condition";
        }
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $job = new Job(
                    $row['id'],
                    $row['title'],
                    $row['slug'],
                    $row['categoryId'],
                    $row['companyId'],
                    $row['description'],
                    $row['type'],
                    $row['offeredSalary'],
                    $row['experience'],
                    $row['qualification'],
                    $row['skillRequirement'],
                    $row['deadlineDate'],
                    $row['location'],
                    $row['quantity'],
                    $row['isFull'],
                    $row['image'],
                    $row['level'],
                    $row['createdAt'],
                );
                $jobs[] = $job;
            }
        }
        return $jobs;
    }

    public function getAllByCompanyId($userId)
    {
        $condition = "companyId = '$userId'";
        return $this->fetchAll($condition);
    }

    public function getById($id)
    {
        $condition = "id = '$id'";
        $jobs = $this->fetchAll($condition);
        $job = current($jobs);
        return $job;
    }
}
