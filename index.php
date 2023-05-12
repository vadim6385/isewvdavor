<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <title>MyChan - Anonymous Discussion Platform</title>
</head>
<body>
  <?php include 'navbar.php'; ?>
  <main>
  <!-- Add a form for submitting new posts -->
  <form action="create_post.php" method="POST">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>
    <br>
    <label for="content">Content:</label>
    <textarea id="content" name="content" required></textarea>
    <br>
    <input type="submit" value="Submit Post">
  </form>

  <?php
  require_once 'config.php';

  $sql = "SELECT id, title, content FROM posts";
  $result = $conn->query($sql);

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
      include 'posts.php';
      foreach ($posts as $post) {
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
