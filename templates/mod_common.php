<?php 
	$t = isset($_GET["view"]) ? $_GET["view"]:"mods";
	$pg = "mod_panel.php?soc=".$soc["soc_name"]."&view=";
?>

<div class="card-header container-fluid">
<div class="mt-3">
	<h3>Mod Panel</h3>
</div>
<div class="card mt-3">
<ul class="nav nav-tabs">
	<li class="nav-item" role="presentation">
		<a class="nav-link <?php echo $t=="main" ? 'active':'' ?>" href=<?php echo $pg."main" ?>> 
			<span><i class="fa fa-tachometer"></i></span>
			Dashboard
		</a>
	</li>
	<li class="nav-item" role="presentation">
		<a class="nav-link <?php echo $t=="mods"  ? 'active':'' ?>" href=<?php echo $pg."mods" ?>>
			<span class="fa fa-list"></span>
		   Mod List
		</a>
	</li>
	<li class="nav-item" role="presentation">
		<a class="nav-link <?php echo $t=="bans"  ? 'active':'' ?>" href=<?php echo $pg."bans" ?>>
			<span class="fa fa-ban"></span>
			 User bans
		</a>
	</li>
	<li class="nav-item" role="presentation">
		<a class="nav-link <?php echo $t=="log"   ? 'active':'' ?>" href=<?php echo $pg."log" ?>>
			<span class="fa fa-list-alt"></span>
			 Mod Log
		</a>
	</li>
	<li class="nav-item" role="presentation">
		<a class="nav-link <?php echo $t=="dposts" ? 'active':'' ?>" href=<?php echo $pg."dposts" ?>>
			<span class="fa fa-file"></span>
			 Deleted Posts
		</a>
	</li>
	<li class="nav-item" role="presentation">
		<a class="nav-link <?php echo $t=="dcomms" ? 'active':'' ?>" href=<?php echo $pg."dcomms" ?>>
			<span class="fa fa-comment"></span>
			 Deleted Comments
		</a>
	</li>
	<li class="nav-item" role="presentation">
		<a class="nav-link <?php echo $t=="preps" ? 'active':'' ?>" href=<?php echo $pg."preps" ?>>
			<span class="fa fa-warning"></span>
			<span class="fa fa-file"></span>
			 Reported posts
		</a>
	</li>
	<li class="nav-item" role="presentation">
		<a class="nav-link <?php echo $t=="creps" ? 'active':'' ?>" href=<?php echo $pg."creps" ?>>
			<span class="fa fa-warning"></span>
			<span class="fa fa-comment"></span>
			 Reported comments
		</a>
	</li>
</ul>
<div class="card-header">
