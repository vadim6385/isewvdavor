<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- Bootstrap -->
		<!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
		<script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

		<title><?php echo $title; ?></title>
		<style>
      .post-title { color: black; }
      .soc-title { color: black; }
      .post-details { color: #777; }
      .modal { text-align: left; }
       a { color: #555; }
		</style>
	</head>
	<body>
		<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
				<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <a class="navbar-brand" href="home.php">
                  <img src="/images/logo2.png" alt="MindMingle">
                 </a>
					</div>

			    	<ul class="navbar-nav">
               <li class="nav-item">
					<p class="navbar-text">
                  <?php
                    if (isset($_SESSION["user"])) {
                      echo "Signed in as <a href=\"user.php\" class=\"navbar-link\">" . $_SESSION["user"]["username"] . "</a> (<a href=\"logout.php\" class=\"navbar-link\">logout</a>)";
                    }
                  ?>
					</p>
               </li>
			    		<li class="nav-item">
							<?php
								if (isset($_SESSION["user"]) && $_SESSION["user"]["status"] == "ADMIN")
								{
									echo "<a href=\"admin_panel.php\" class=\"nav-link\">";
										echo "<span class=\"fa fa-cog\"> </span>";
										echo " Admin Panel";
									echo "</a>";
								}
							?>
						</li>
					</ul>
				</div><!-- /.container-fluid -->
		</nav>
		<div class="container">
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>