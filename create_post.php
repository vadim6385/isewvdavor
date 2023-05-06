<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST["title"];
  $content = $_POST["content"];

  $sql = "INSERT INTO posts (title, content) VALUES (?, ?)";

  if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("ss", $title, $content);
    $stmt->execute();
    $stmt->close();
    header("Location: index.php"); // Redirect to the main page after successfully creating the post
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
