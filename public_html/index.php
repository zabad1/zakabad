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

			<title>Zak Abad </title>
		</head>
		<h2></h2>
		<body>
		<!--<div class="col-sm-6"></div>-->

			<nav class="navbar navbar-inverse">
				<!-- logo and mobile toggle button get grouped together for better mobile display -->
				<div class="navbar-header">
					<!-- this is the mobile menu button -->
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-menu">
						<span class="sr-only">main menu</span>
						<span class="glyphicon glyphicon-menu-hamburger"></span>
					</button>
					<a class="navbar-brand" href="#">Zak Abad</a>
				</div>

				<!-- here are your main nav links, grouped for toggling -->
				<div class="collapse navbar-collapse" id="main-menu">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Home</a></li>
						<li><a href="#">Link1</a></li>
						<li><a href="#">Link2</a></li>
						<li><a href="#">Link3</a></li>
					</ul>
				</div>
			</nav>

			<!--homepage picture-->
			<img src="documentation/images/zakportraitbwpwp.jpg">

			<div class="bg-2 text-center">
				<div class="container">

					<h3 class="margin">Who Am I?</h3>
					<p>I am a full stack web developer. I am advancing my web development career with a proficient background in both front and back end coding. I am very excited to learn and become even more experienced in a career category that lets me create exactly what I see in my mind. If you want to know more about my web development experience, please click the dropdowns below.
					</p>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										My Experience
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">
									I've always loved computers. Since I was 6, I was playing around on Photoshop, MS Paint, and tons of different games. In high school, I attended a school that used technology based group work as their main teaching point. While attending nexGen Academy, I became even more experienced with Photoshop, as well as becoming proficient in many other Adobe programs, such as Flash and After Effects, and my personal favorite, Adobe Premier Pro. Going to a technology high school also gave me the benefit of typing skills, and I can now type up to 100 words per minute based on typing tests. After graduation, I attended UNM for a short time before landing a part-time job Q-mulus IT. My main work while there was to help build a Sharepoint portal for a therapeutic company for autism. I also developed many workflows using Sharepoint which, while it is simple compared to that of PHP and JavaScript, gave me a background in coding before I even entered the next chapter of my coding career. That next chapter came from the CNM STEMulus Center, where I attended and graduated from the Deep Dive Coding Bootcamp. At the Bootcamp, I learned and worked with coding platforms PHP, JavaScript, HTML5, CSS, Bootstrap, and others. I am very excited to advance in my career, and learn more languages, while at the same time becoming more proficient with the languages I already have experience using.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										My Goals
									</a>
								</h4>
							</div>

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
											<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
										</div>
									</div>

									<!-- reCAPTCHA -->
									<div class="g-recaptcha" id="rct" data-sitekey="">
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