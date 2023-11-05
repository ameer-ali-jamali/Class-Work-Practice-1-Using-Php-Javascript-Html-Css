<?php
function connectDB()
{
    $hostname = "localhost";
    $username = "your_username";
    $password = "your_password";
    $database = "your_database";

    $conn = mysqli_connect($hostname, $username, $password, $database);

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

function closeDB($conn)
{
    mysqli_close($conn);
}
