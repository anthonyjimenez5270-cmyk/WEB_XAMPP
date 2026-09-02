<?php

$server_name = "localhost";
$username = "root";
$password = "";
$database = "act_2a";


$conn = new mysqli($server_name, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed:" .$conn->connect_error);
}

echo "Database connected successfully";

?>