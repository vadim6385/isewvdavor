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
  </main>
</body>
</html>
