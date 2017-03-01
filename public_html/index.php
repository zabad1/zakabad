<!DOCTYPE html>
<html lang="en">
		<head>
			<meta charset="UTF-8">
*//TODO:
			Footer color/
			Moblie Responsive & fix footer for mobile/
			About me/
			Recaptcha|Send email/
			separate tab for links in nav/
			Add Favicon|create/
			Change stripe to blocks?/
			<!--Bootstrap nav bar-->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

			<script
				src="https://code.jquery.com/jquery-3.1.1.min.js"
				integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
				crossorigin="anonymous"></script>

			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

			<!--Recaptcha api-->
			<script src='https://www.google.com/recaptcha/api.js'></script>

			<!--CSS call tag sheet-->
			<link rel="stylesheet" href="css/zakabad.css">

			<!--Google Fonts-->
			<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">

			<!--Favicon image icon-->
			<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
			<link rel="icon" type="image/png" href="documentation/images/celluloidFilmFavicon4.png" sizes="32x32">
			<link rel="icon" type="image/png" href="documentation/images/celluloidFilmFavicon4.png" sizes="16x16">
			<link rel="manifest" href="/manifest.json">
			<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
			<meta name="theme-color" content="#ffffff">

			<title>Zak Abad</title>
		</head>

		<body>
			<!--Navbar-->
			<nav class="navbar navbar-inverse">
				<!-- logo and mobile toggle button get grouped together for better mobile display -->
				<div class="navbar-header">
					<!-- this is the mobile menu button -->
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-menu">
						<span class="sr-only">main menu</span>
						<span class="glyphicon glyphicon-menu-hamburger"></span>
					</button>
					<span class="navbar-brand">Zak Abad</span>
				</div>

				<!-- here are your main nav links, grouped for toggling -->
				<div class="collapse navbar-collapse" id="main-menu">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="https://twitter.com/ZakAbad" class="increaseSizeLink" id="twitter"><img src="documentation/images/twitterLogo.png" class="socialicon"></a></li>
						<li><a href="https://www.linkedin.com/in/zacaria-abad-04b553108/" class="increaseSizeLink" id="linkin"><img src="documentation/images/linkedinLogo.png" class="socialicon"></a></li>
						<li><a href="https://github.com/zabad1" class="increaseSizeLink" id="github"><img src="documentation/images/gitHubLogo.png" class="socialicon"></a></li>
					</ul>
				</div>
			</nav>

			<!--homepage picture-->
			<img src="documentation/images/zakportraitbwpwp.jpg">

			<!--Keeps site aligned-->
			<div class="bg-2 text-center">
				<div class="container-fluid">

					<!--About me-->
					<h3 class="margin">Who Am I?</h3>
					<div class="colorBlock1"><p class="textBlock1">My main focus is front end web developer. Though I do enjoy expanding my knowledge in all phases of programming. When I tackle anything that requires a lot of learning, I don't shy away from learning everything I can, so it can make me more reliable in my self.
						</p></div>

					<h3 class="margin">Experience</h3>
					<div class="colorBlock2"><p class="textBlock2">fjkflkjawoigfejaokdsljflkjfdklsajfk ljdaslkjflkjadsgjda;jladsjfjdasgkdfls jgldsjaglk;jasdgkljl kadgsjlkgjdsla 	kjgalksljkfdsljkfhsdkja hfadsfkdskljhfkashjkd fsaklfdlkasf;ldsfj;ljfd;jfjfkldsak f;ljsad;klfjk;l sadjf;sdl ;fkjsdl fjk;ldsjkf;dsa ;ffd;klsjfkl;sjalfj</p></div>

					<h3 class="margin">Life</h3>
					<div class="colorBlock3"><p class="textBlock3">fjkflkjawoigfejaokdsljflkjfdklsajfk ljdaslkjflkjadsgjda;jladsjfjdasgkdfls jgldsjaglk;jasdgkljl kadgsjlkgjdsla 	kjgalksljkfdsljkfhsdkja hfadsfkdskljhfkashjkd fsaklfdlkasf;ldsfj;ljfd;jfjfkldsak f;ljsad;klfjk;l sadjf;sdl ;fkjsdl fjk;ldsjkf;dsa ;ffd;klsjfkl;sjalfj</p></div>

					<!--Contact me form starts-->
							<div class="form-container ng-scope">
								<form id="contact-form" action="php/mailer/mailer.php" method="post" novalidate="novalidate" class="ng-pristine ng-valid">
									<h3 id="contact-heading">Contact Me</h3>
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-user" aria-hidden="true"></i>
											</div>
											<input type="text" class="form-control" id="name" name="name" placeholder="Name">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-envelope" aria-hidden="true"></i>
											</div>
											<input type="email" class="form-control" id="email" name="email" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-pencil" aria-hidden="true"></i>
											</div>
											<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-comment" aria-hidden="true"></i>
											</div>
											<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message(2000 characters max)"></textarea>
										</div>
									</div>

									<!-- reCAPTCHA -->
									<div class="g-recaptcha" id="rct" data-sitekey="6LfabxYUAAAAAJ8PXG5WaBhqaQGcSaJHNmJj1CJ3">
									</div>
									<div class="btns">
										<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
										<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
									</div>
								</form>

								<!--empty area for form error/success output-->
								<div class="row">
									<div class="col-xs-12">
										<div id="output-area"></div>
									</div>
								</div>
							</div>
				</div>
			</div>

<!--Footer starts here-->
			<footer class="navbar" id="bottomBoy"></footer>
		</body>
	</html>