<!DOCTYPE html>
<html lang="en">
		<head>
			<meta charset="UTF-8">

			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

			<script
				src="https://code.jquery.com/jquery-3.1.1.min.js"
				integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
				crossorigin="anonymous"></script>

			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

			<link rel="stylesheet" href="zakabad.css">

			<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">

			<title>Zak Abad </title>
		</head>

		<body>
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
						<li><a href="https://twitter.com/ZakAbad"><img src="documentation/images/twitterLogo.png" class="socialicon"></a></li>
						<li><a href="https://www.linkedin.com/in/zacaria-abad-04b553108/"><img src="documentation/images/linkedinLogo.png" class="socialicon"></a></li>
						<li><a href="https://github.com/zabad1"><img src="documentation/images/gitHubLogo.png" class="socialicon"></a></li>
					</ul>
				</div>
			</nav>

			<!--homepage picture-->
			<img src="documentation/images/zakportraitbwpwp.jpg">

			<div class="bg-2 text-center">
				<div class="container">

					<h3 class="margin">Who Am I?</h3>
					<p>My main focus is front end web developer. Though I do enjoy expanding my knowledge in all phases of programming. When I tackle anything that requires a lot of learning, I don't shy away from learning everything I can, so it can make me more reliable in my self. a
					</p>
					<!--Contact me starts-->
							<div class="form-container ng-scope">
								<form id="contact-form" action="php/mailer/mailer.php" method="post" novalidate="novalidate" class="ng-pristine ng-valid">
									<h2 id="contact-heading">Contact Me</h2>
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
		</body>
	</html>