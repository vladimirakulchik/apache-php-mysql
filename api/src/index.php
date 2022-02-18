<?php

$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASSWORD'];
$database = $_ENV['DB_DBNAME'];

$conn = new mysqli($host, $user, $pass, $database);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    echo 'Connected to MySQL server successfully!';
}

$users = [];

$sql = '
    SELECT 
        username,
        password
    FROM 
        user
';

if ($result = $conn->query($sql)) {
    $users = $result->fetch_all(MYSQLI_ASSOC);
}

foreach ($users as $user) {
    echo '<br>';
    echo '<br>';
    echo $user['username'] . ': ' . $user['password'];
}
