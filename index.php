<html>
	<head>
		<title>Ripan Fauzi</title>
		<link rel="shortcut icon" href="images/favicon.ico">
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
							<span class="icon fa-gem"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Ripan Fauzi</h1>
								<p>be different so meaningfull !</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">Intro</a></li>
								<li><a href="#message">Message</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">Intro</h2>
								<span class="image main"><img src="images/avatar2.jpg" alt="" /></span>
								<p>My Name : Ripan Fauzi</p>
							</article>

						<!-- About -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<span class="image main"><img src="images/line.png" alt="" /></span>
								<p>Interesting To Be My Friend ?</p>
								<ul class="actions stacked">
								<li><a href="https://line.me/ti/p/~ripan_fauzi" class="button primary">Click Here To Add Me By Line ID</a></li>
							</ul>
							</article>

						<!-- Contact -->
							<article id="message">
								<h2 class="major">Send me a message</h2>
								<form method="post" action="send.php">
									<div class="fields">
										<div class="field">
											<label for="inisial">Initial (empty will be anon)</label>
											<input type="text" name="inisial" id="name" />
										</div>
										<div class="field">
											<label for="pesan">Message (max. 500 character)</label>
											<textarea name="pesan" id="message" required="required" rows="4"></textarea>
										</div>
										<div class="field">
										    <div class="g-recaptcha" data-sitekey="6LeUQxYaAAAAssaAGaelimdfdasK7Hs9SmWPL-PThIjaTOmS"></div>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" name="Submit" value="Send" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<h2 class="major">Incoming messages</h2>
								<ul class="alt">
									<?php 
									include_once("conn.php"); 
	    							while($user_data = mysqli_fetch_array($result)) { ?>
	    							<li>
									<h4><?= $user_data['inisial'];?></h4>
									<blockquote>"<?= $user_data['komentar'];?>"</blockquote>
									</li>
									<?php } ?>
									
								</ul>
							</article>
					</div>
</body>
				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; 2020. Made With Love By <a href="http://www.ripanfauzi.com">Me</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
            <script src='https://www.google.com/recaptcha/api.js'></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</html>
		