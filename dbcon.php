<?php

$conn = new mysqli('localhost', 'root', '', 'grocery', 3307); // Added port 3307

if ($conn->connect_error) {
    exit('Connection failed: '.$conn->connect_error);
}

echo "Connected successfully!";
?>
