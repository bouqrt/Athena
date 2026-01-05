<?php

require_once __DIR__ . '/../entities/User.php';

class UserRepository
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    // CREATE
    public function create(User $user): bool
    {
        $sql = "INSERT INTO user (name, email, password, role, status)
                VALUES (:name, :email, :password, :role, :status)";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':name'     => $user->getName(),
            ':email'    => $user->getEmail(),
            ':password' => password_hash($user->getPassword(), PASSWORD_DEFAULT),
            ':role'     => $user->getRole(),
            ':status'   => $user->isActive()
        ]);
    }

    // FIND BY EMAIL (LOGIN)
    public function findByEmail(string $email): ?User
    {
        $sql = "SELECT * FROM user WHERE email = :email LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':email' => $email]);

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$data) {
            return null;
        }

        $user = new User(
            $data['name'],
            $data['email'],
            $data['password'],
            $data['role']
        );

        $user->setStatus($data['status']);
        return $user;
    }
}