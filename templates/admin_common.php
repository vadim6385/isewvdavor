<?php 
    $t = isset($_GET["view"]) ? $_GET["view"] : "admins";
    $pg = "admin_panel.php?&view=";
?>
<div class="card container-fluid">
    <div class="card-heading">
        <h3 class="card-title">Admin Panel</h3>
    </div>
    <div class="card-body">
        <div>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link <?php echo $t == "main" ? "active" : ""; ?>" href="<?php echo $pg . "main"; ?>">
                        <i class="fa fa-tachometer"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $t == "admins" ? "active" : ""; ?>" href="<?php echo $pg . "admins"; ?>">
                        <i class="glyphicon glyphicon-list"></i> Admin List
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $t == "bans" ? "active" : ""; ?>" href="<?php echo $pg . "bans"; ?>">
                        <i class="glyphicon glyphicon-ban-circle"></i> User Bans
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $t == "locks" ? "active" : ""; ?>" href="<?php echo $pg . "locks"; ?>">
                        <i class="glyphicon glyphicon-lock"></i> Locked Societies
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $t == "log" ? "active" : ""; ?>" href="<?php echo $pg . "log"; ?>">
                        <i class="glyphicon glyphicon-list-alt"></i> Admin Log
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $t == "ureps" ? "active" : ""; ?>" href="<?php echo $pg . "ureps"; ?>">
                        <i class="glyphicon glyphicon-warning-sign"></i> <i class="glyphicon glyphicon-user"></i> Reported Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $t == "sreps" ? "active" : ""; ?>" href="<?php echo $pg . "sreps"; ?>">
                        <i class="glyphicon glyphicon-warning-sign"></i> <i class="glyphicon glyphicon-home"></i> Reported Societies
                    </a>
                </li>
            </ul>
        </div>
        <div class="well">
