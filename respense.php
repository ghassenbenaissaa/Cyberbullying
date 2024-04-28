<?php
include 'code/connect.php';
  $reponse = $db->query("SELECT * FROM `message`");
  while ($donnees = $reponse->fetch())
  {
      $id_m=$donnees['id_m'];
      $message=$donnees['descrption'];
      $id_v=$donnees['id_v'];
       
    }   

   ?>
<!DOCTYPE HTML> 
<html>
	<head>
		<title>Zenith_Response</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div id="wrapper">

					

						<!-- Panel (Spotlight) -->
							<section class="panel spotlight medium right" id="first">
								<div class="content span-7">
									<h2 class="major">ID:<?php echo $id_v; ?></h2>
									<p><?php echo $message; ?></p>
									<h2 style="color:#9b7d62;"><?php if( isset($_GET['error'])){echo $_GET['error'];} ?></h2>
								</div>
								<div class="image filtered tinted" data-position="top left">
									<img src="images/pic02.jpg" alt="" />
								</div>
							</section>
						<!-- Panel -->
							<section class="panel color4-alt">
								<div class="inner columns divided">
									<div class="span-3-25">
										<form method="post" action="code/add_replay.php">
											<div class="field">
												<label for="name">ID of victim</label>
												<input type="text" name="id" id="id" />
											</div>
											<div class="field">
												<label for="message">Message</label>
												<textarea name="message" id="message" rows="4"></textarea>
											</div>
											<ul class="actions">
												<li><input type="submit" value="Send Message" class="button special" /></li>
											</ul>
										</form>
									</div>
									<div class="span-1-5">
										<ul class="contact-icons color1">
											<li class="icon fa-twitter"><a href="https://twitter.com/ZenithTEAM_">@ZenithTEAM_</a></li>
											<li class="icon fa-facebook"><a href="https://www.facebook.com/profile.php?id=100088078523668&mibextid=ZbWKwL">facebook.com/Zénith_Team</a></li>
											<li class="icon fa-instagram"><a href="https://www.instagram.com/zenith.team.2022/?fbclid=IwAR0DabyoLngBXT3KqwQZOcm4n7EV-75aZbUIxYKVEJHQiFqnh7nbBW3Yrpk">Zénith</a></li>
											<li class="icon fa-medium"><a href="mailto:zenith.depot.groupe@gmail.com">zenith.depot.groupe</a></li>
											<li class="icon fa-phone"><a href="#">80.255.300</a></li>
										</ul>
									</div>
								</div>
							</section>

						
						<!-- Copyright -->
							<div class="copyright">&copy; Groupe of zenith.</div>

					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
