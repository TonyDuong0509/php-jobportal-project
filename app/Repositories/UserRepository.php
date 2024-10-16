<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function save($data)
    {
        global $conn;
        $name = $data['name'];
        $phone = $data['phone'];
        $address = $data['address'];
        $email = $data['email'];
        $about = $data['about'] ?? '';
        $photo = $data['photo'];
        $password = $data['password'];
        $role = $data['role'];
        $status = $data['status'];
        $createdAt = $data['createdAt'];

        $sql = "INSERT INTO users (name, phone, address, email, about, photo, password, role, status, createdAt)
                VALUES ('$name', '$phone', '$address', '$email', '$about', '$photo', '$password', '$role', '$status', '$createdAt')";

        if ($conn->query($sql) === true) {
            $last_id = $conn->insert_id;
            return $last_id;
        }
        echo "Error " . $sql . PHP_EOL;
        return false;
    }

    public function fetchAll($condition = null)
    {
        global $conn;
        $users = array();
        $sql = "SELECT * FROM users";

        if ($condition) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $user = new User(
                    $row['id'],
                    $row['name'],
                    $row['phone'],
                    $row['address'],
                    $row['email'],
                    $row['about'],
                    $row['photo'],
                    $row['password'],
                    $row['role'],
                    $row['status'],
                    $row['createdAt']
                );
                $users[] = $user;
            }
        }
        return $users;
    }

    public function findByEmail($email)
    {
        $condition = "email = '$email'";
        $users = $this->fetchAll($condition);
        $user = current($users);

        return $user;
    }

    public function findById($id)
    {
        $condition = "id = '$id'";
        $users = $this->fetchAll($condition);
        $user = current($users);

        return $user;
    }

    public function update($user)
    {
        global $conn;
        $id = $user->getId();
        $name = $user->getName();
        $phone = $user->getPhone();
        $address = $user->getAddress();
        $about = $user->getAbout();

        $sql = "UPDATE users
                SET name = '$name', phone = '$phone', address = '$address', about = '$about'
                WHERE id = '$id'";
        if ($conn->query($sql) === true) return true;
        echo "Error " . $sql . PHP_EOL;
        return false;
    }

    public function updatePhoto($user)
    {
        global $conn;
        $id = $user->getId();
        $photo = $user->getPhoto();

        $sql = "UPDATE users
                SET photo = '$photo'
                WHERE id = '$id'";
        if ($conn->query($sql) === true) return true;
        echo "Error " . $sql . PHP_EOL;
        return false;
    }

    public function changePassword($user)
    {
        global $conn;
        $id = $user->getId();
        $password = $user->getPassword();

        $sql = "UPDATE users
                SET password = '$password'
                WHERE id = '$id'";
        if ($conn->query($sql) === true) return true;
        echo "Error " . $sql . PHP_EOL;
        return false;
    }
}
