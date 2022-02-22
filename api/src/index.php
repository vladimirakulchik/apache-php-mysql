<?php

require_once __DIR__ . '/echo.php';

$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASSWORD'];
$database = $_ENV['DB_DBNAME'];

$users = [];

$sql = '
    SELECT 
        username,
        password
    FROM 
        user
';

try {
    $connection = new PDO(
        sprintf(
            'mysql:host=%s;dbname=%s',
            $host,
            $database
        ),
        $user,
        $pass
    );

    $result = $connection->query($sql);
    $users = $result->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo '<br/> Error!: ' . $e->getMessage() . '<br/>';
}

foreach ($users as $user) {
    echo $user['username'] . ': ' . $user['password'];
    echo '<br>';
}
