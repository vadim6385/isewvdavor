<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyChan - Anonymous Discussion Platform</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0e0d6;
      color: #3b3e3f;
    }
    header {
      background-color: #1e90ff;
      color: white;
      padding: 1rem;
      font-size: 2rem;
    }
    nav {
      display: flex;
      justify-content: space-around;
      padding: 1rem 0;
      background-color: #333;
    }
    nav a {
      color: white;
      text-decoration: none;
      font-size: 1.2rem;
      padding: 0.5rem;
    }
    nav a:hover {
      background-color: #555;
    }
    main {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 1rem;
      padding: 1rem;
    }
    .post {
      border: 1px solid #ccc;
      padding: 1rem;
      border-radius: 5px;
      background-color: white;
    }
    .post img {
      max-width: 100%;
      height: auto;
    }
    .post-title {
      font-size: 1.4rem;
      margin-bottom: 0.5rem;
    }
    .post-info {
      font-size: 0.9rem;
      color: #777;
      margin-bottom: 1rem;
    }
    .post-content {
      font-size: 1.1rem;
    }
  </style>
</head>
<body>
  <header>
    MyChan - Anonymous Discussion Platform
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
