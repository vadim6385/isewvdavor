<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>MyChan - Anonymous Discussion Platform</title>
</head>
<body>
  <header class="main-header">
  <div>
    <a href="index.php"> <!-- Add a link to the main page -->
      <img src="logo.png" alt="MyChan Logo" width="100" height="auto">
    </a>
   </div>
    <div class="header-text">MyChan - Anonymous Discussion Platform</div> <!-- Wrap the text in a div element -->
  </header>
  <nav>
    <a href="/">Home</a>
    <a href="/b">Random</a>
    <a href="/pol">Politics</a>
    <a href="/g">Technology</a>
    <a href="/sci">Science</a>
    <a href="/a">Anime & Manga</a>
    <a href="/v">Video Games</a>
    <a href="/fit">Fitness</a>
  </nav>
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
