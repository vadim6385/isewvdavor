<?php
$page_title = "Technology - MyChan";
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
      // Include the posts.php file and filter the posts for the Technology board
      include 'posts.php';
      $random_posts = array_filter($posts, function($post) {
        return $post['board'] === 'g';
      });

      // Display the posts for the Technology board
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
  </main>
</body>
</html>
