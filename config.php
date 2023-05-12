<?php

$servername = 'sql201.byethost32.com';
$username = 'b32_33967978';
$password = 'ynRt!Tf_2!UBWkb';
$dbname = 'b32_33967978_forum_db';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
