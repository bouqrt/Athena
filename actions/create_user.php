<?php 
require_once "../config/database.php";

$db = (new Database())->connect();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = "member";

    $sql = "INSERT INTO user (name, email, password, role)
            VALUES (:name, :email, :password, :role)";

    $stmt = $db->prepare($sql);

    $stmt->execute([
        ":name" => $name,
        ":email" => $email,
        ":password" => password_hash($password, PASSWORD_DEFAULT),
        ":role" => $role
    ]);

    echo "User created successfully";
}