<?php
   include 'board_config.php';
   
   require_once '../config.php';
   
   // Use a prepared statement to prevent SQL injection
   $stmt = $conn->prepare("SELECT abbrev, name FROM categories WHERE id = ?");
   $stmt->bind_param("i", $board_id);

   $stmt->execute();

   $result = $stmt->get_result();

   if($result->num_rows > 0) {
       $row = $result->fetch_assoc();
       $page_title = $row['abbrev'].' - '.$row['name'].' - MyChan';
   } else {
       echo "No categories found.";
   }

   $stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $page_title; ?></title>
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  <?php include '../navbar.php'; ?>
  <main>
  <?php
  require_once '../config.php';
  

  $sql = "SELECT id, title, content FROM posts";
  $result = $conn->query($sql);
  
  // Use a prepared statement to prevent SQL injection
   $stmt = $conn->prepare("SELECT id, title, content FROM posts WHERE board_id = ?");
   $stmt->bind_param("i", $board_id);

   $stmt->execute();

   $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<div class='post'>";
      echo "<h2 class='post-title'>" . $row["title"] . "</h2>";
      echo "<div class='post-content'>";
      echo "<p>" . $row["content"] . "</p>";
      echo "</div>";
      echo "</div>";
    }
  } else {
    echo "No posts found.";
  }

  $conn->close();
  ?>
  <!--
    <?php
      // Include the posts.php file and filter the posts for the Random board
      include 'posts.php';
      $random_posts = array_filter($posts, function($post) {
        return $post['board'] === 'b';
      });

      // Display the posts for the Random board
      foreach ($random_posts as $post) {
        echo '<div class="post">';
        echo '<h2 class="post-title">' . $post['title'] . '</h2>';
        echo '<div class="post-info">' . $post['info'] . '</div>';
        echo '<div class="post-content">';
        echo '<p>' . $post['content'] . '</p>';
        if (isset($post['image'])) {
          echo '<img src="' . $post['image'] . '" alt="Post Image">';
        }
        echo '</div>';
        echo '</div>';
      }
    ?>
  -->
  </main>
</body>
</html>
