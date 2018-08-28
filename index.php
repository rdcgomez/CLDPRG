<?php
include_once 'db_config.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Basketball Manager</title>
		<meta charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet" />
		<link rel="stylesheet" href="css/index.css" />
		<link rel="stylesheet" href="css/table.css" />	
	</head>

<body>
		<div id="header">
			<header>
				<!-- TOP NAVIGATION -->
				<div class="top-nav clearfix">
					<ul>
						<li class="nav-item"><a href="index.php" class="logo"><span>Basketball Manager</span></a></li>
						<li>
							<div class="dropdown">
								<a href="#">Player Ranking</a>
							</div>
						</li>
						<li><a href="login.php">Sign In</a></li>
					</ul>
				</div>
			</header>
		</div>
		<!-------------------------------------------------------------------------->   
		<div id="body-container">
			<div class="players">
					<table align="center">
						<th>First Name</th>
						<th>Last Name</th>
						<th colspan="5">Points</th>

						<?php
						$sql_query="SELECT * FROM users";
						$result_set=mysqli_query($con,$sql_query);
						while($row=mysqli_fetch_row($result_set))
						{
						?>
							<tr>
								<td><?php echo $row[1]; ?></td>
								<td><?php echo $row[2]; ?></td>
								<td><?php echo $row[5]; ?></td>
							</tr>
						<?php
						}
						?>
					</table>
			</div>
		</div>
		<!-------------------------------------------------------------------------->   
		<div id="footer">
			<footer>		
				<ul>
					<li><a href="#">PRIVACY POLICY</a></li>
					<li><a href="#">SITE TERMS</a></li>
					<li><a href="#">CONTACT US</a></li>
				</ul>
			</footer>
		</div>
	<!-- JQUERY IMPORT -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>