<?php

namespace App\Services;

use App\Repositories\JobRepository;

class JobService
{
    private $jobRepository;

    public function __construct(JobRepository $jobRepository)
    {
        $this->jobRepository = $jobRepository;
    }

    public function saveJob($data)
    {
        return $this->jobRepository->save($data);
    }

    public function handleImage($path, $filePathName, $old_image = null)
    {
        if (!empty($old_image)) {
            unlink($old_image);
        }

        $uploadDir = "/upload/$path/";
        $targetDir = ABSPATH . "/public" . $uploadDir;
        $imageFileName = 'user' . '_' . bin2hex(random_bytes(16)) . '.' . strtolower(pathinfo($_FILES[$filePathName]['name'], PATHINFO_EXTENSION));
        $extension = strtolower(pathinfo($imageFileName, PATHINFO_EXTENSION));
        $targetFile = $targetDir . $imageFileName;
        $relativePath = "/public" . $uploadDir . $imageFileName;
        $allowedExtensions = array('jpg', 'jpeg', 'png');
        if (in_array($extension, $allowedExtensions)) {
            if (move_uploaded_file($_FILES[$filePathName]['tmp_name'], $targetFile)) {
                return $relativePath;
            } else {
                $_SESSION['notification'] = [
                    'message' => "Upload image failed, please try again",
                    'alert-type' => 'error',
                ];
                header("Location: /company/post-job-page");
                exit;
            }
        } else {
            $_SESSION['notification'] = [
                'message' => "Image have to JPG, JPEG, PNG",
                'alert-type' => 'error',
            ];
            header("Location: /company/post-job-page");
            exit;
        }
    }
}
