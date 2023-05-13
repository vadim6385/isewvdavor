<?php 
    $t = isset($_GET["view"]) ? $_GET["view"]:"profile";
    $pg = "user.php?&view=";
?>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link <?php echo $t=="profile" ? "active":""?>" href=<?php echo $pg."admins" ?>>Admin List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo $t=="inbox" ? "active":""?>" href=<?php echo $pg."bans" ?>>User bans</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo $t=="socs" ? "active":""?>" href=<?php echo $pg."socs" ?>>Locked Societies</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo $t=="log" ? "active":""?>" href=<?php echo $pg."log" ?>>Admin Log</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo $t=="ureps" ? "active":""?>" href=<?php echo $pg."ureps" ?>>Reported users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo $t=="sreps" ? "active":""?>" href=<?php echo $pg."sreps" ?>>Reported societies</a>
  </li>
</ul>
<div class="jumbotron">
