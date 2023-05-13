<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

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
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="home.php">
                    <img src="/images/logo2.png" alt="MindMingle">
                </a>
			    <ul class="navbar-nav ml-auto">
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
							        echo "<span class=\"fa fa-cog\"></span>";
                                    echo " Admin Panel";
                                echo "</a>";
                            }
                        ?>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
