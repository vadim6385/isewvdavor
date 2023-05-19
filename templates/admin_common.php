<?php 
    $t = isset($_GET["view"]) ? $_GET["view"] : "admins";
    $pg = "admin_panel.php?&view=";
?>
<div class="card-header container-fluid mt-3">
    <div class="mt-3">
        <h3 class="card-title">Admin Panel</h3>
    </div>
    <div class="card mt-3">
        <div>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link <?php echo $t == "main" ? "active" : ""; ?>" href="<?php echo $pg . "main"; ?>">
                        <i class="fa fa-tachometer"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $t == "admins" ? "active" : ""; ?>" href="<?php echo $pg . "admins"; ?>">
                        <i class="fa fa-list"></i> Admin List
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $t == "bans" ? "active" : ""; ?>" href="<?php echo $pg . "bans"; ?>">
                        <i class="fa fa-ban"></i> User Bans
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $t == "locks" ? "active" : ""; ?>" href="<?php echo $pg . "locks"; ?>">
                        <i class="fa fa-lock"></i> Locked Societies
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $t == "log" ? "active" : ""; ?>" href="<?php echo $pg . "log"; ?>">
                        <i class="fa fa-list-alt"></i> Admin Log
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $t == "ureps" ? "active" : ""; ?>" href="<?php echo $pg . "ureps"; ?>">
                        <i class="fa fa-warning"></i> <i class="fa fa-user"></i> Reported Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $t == "sreps" ? "active" : ""; ?>" href="<?php echo $pg . "sreps"; ?>">
                        <i class="fa fa-warning"></i> <i class="fa fa-home"></i> Reported Societies
                    </a>
                </li>
            </ul>
        </div>
        <div class="card-header">
