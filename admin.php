<?php
session_start();
if($_SESSION['status']!="login"){header("location:login.php");}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Ripan Fauzi | Administrator</title>
		<link rel="shortcut icon" href="images/line.png">
		<meta charset="utf-8" />
		<meta name="description" content="Ripan Fauzi Official Website">
		<meta name="author" content="Ripan Fauzi">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-smile"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Ripan Fauzi</h1>
								<p>Welcome to Administrator <?= $_SESSION['username'];?></p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#cek">Check</a></li>
							</ul>
						</nav>
						</header>
					<div id="main">
						<!-- Intro -->
							<article id="cek">
								<h2 class="major">Welcome <?= $_SESSION['username'];?></h2>
									<div class="table-wrapper">
									<table>
										<thead>
											<tr>
												<th>Message</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
									<?php
									include "conn.php";
							        $query = mysqli_query($mysqli, "SELECT * FROM komentar");
							        while($hasil = mysqli_fetch_array($query)){?>
											<tr>
												<td><?= $hasil['komentar'];?></td>
												<?php 
												if($hasil['status']=="show"){ ?>
													<td><a href="<?php echo "proc.php?id=".$hasil['id']."&&status=hide";?>" class="button primary">Hide it</a></td>
												<?php }else{ ?>
													<td><a href="<?php echo "proc.php?id=".$hasil['id']."&&status=show";?>" class="button">Show it</a></td>
												<?php } ?>
											</tr>
										<?php } ?>
										</tbody>
										<tfoot>
											<tr>
												<td>Total Message</td>
												<td><?php echo mysqli_num_rows($query)?></td>
											</tr>
										</tfoot>
									</table>
								</div>
							</article>
						</div>
				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; 2020. <a href="logout.php">Click Here To Logout</a>.</p>
					</footer>
			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>