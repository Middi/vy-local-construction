<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
		$from = 'VY Local';
		$to = 'cameron.dull@gmail.com'; // BUSINESS EMAIL ADDRESS
		$subject = 'Message from VY Local';

		$body ="From: $name\n Number: $phone\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['phone'] || !filter_var($_POST['phone'])) {
			$errphone = 'Please enter a valid phone number';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}

// If there are no errors, send the email
if (!$errName && !$errPhone && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		 header("Location: success.html");
		 exit();
	} else {
		header("Location: fail.html");
		exit();
	}
}
	}
?>



<!DOCTYPE html>

<html>

<head>

	<title>Henderson Construction</title>


	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- FONT AWESOME -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


	<!-- BOOTSTRAP -->

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


	<!-- GOOGLE FONTS -->

	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700|Montserrat:400,700" rel="stylesheet">

	<!-- STYLESHEET -->

	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">


	<!-- JQUERY -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

	<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>

	<script>
		$(".btn-float").click(function() {
			window.location = $(this).find("a").attr("href");
			return false;
		});
	</script>


	<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1510333089274987'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1510333089274987&ev=PageView&noscript=1"
/></noscript>


<script>
fbq('track', 'ViewContent', {
value: 3.50,
currency: 'USD'
});
</script>


<script>
fbq('track', 'Lead', {
value: 10.00,
currency: 'USD'
});
</script>

<!-- End Facebook Pixel Code -->


</head>

<body>


	<div id="bar-main">
		<div class="container-fluid bar">
			<div class="container">

				<!--   BUSINESS NAME   -->

				<div class="logo">
					<h1 class="h1-logo">
						HENDERSONS HANDYMAN SERVICE
					</h1>

					<!--   BUSINESS LOGO   -->

					<img src="images/services-back.jpg" alt="logo" class="logo-img">
				</div>

				<a href="#callcontain" type="button" class="outline pull-right">REQUEST QUOTE</a>


				<a href="tel:123456789" class="tel"><i class="fa fa-phone fa-lg" aria-hidden="true"> </i><span> (555) 123-4567</spam></a>


			</div>
		</div>

		<a href="tel:123456789">
			<div class="btn-float">
				<p>CALL</p>
			</div>
		</a>

		<!-- HERO IMAGE TEXT -->

		<div class="hero-content">
			<div class="h2-container">
				<h2>Construction is our business</h2>
				<h5>Builders in <strong>New England</strong></h5></div>



			<a href="#callcontain" role="button" class="btn outline2">REQUEST FREE QUOTE</a>



		</div>
	</div>


	<!-- END HERO IMAGE TEXT-->


	<!-- HOW IT WORKS SECTION -->

	<div class="container-fluid how-color">
		<div class="container how-it-works">


			<h3 class="text-center">How it works</h3>
			<hr class="how-hr">

			<div class="flex-parent">

				<div class="flex-img">
					<img src="images/1.png" alt="call icon" class="call-icon">
				</div>
				<div class="flex-child">
					<h4>Request a quote</h4>
					<p><small>Click on the “Request Free Quote”
button at the top.</small>
				</div>


				<div class="flex-img">
					<img src="images/2.png" alt="quote icon" class="call-icon">
				</div>
				<div class="flex-child">
					<h4>Fill in the details</h4>
					<p><small>We need to know where to reach
you: phone or email.</small>
				</div>


				<div class="flex-img">
					<img src="images/3.png" alt="call icon" class="call-icon"></div>
				<div class="flex-child">
					<h4>We’ll call you back</h4>
					<p><small>We’ll call you back ASAP, usually in
less than 24 hours.</small>
				</div>

			</div>

			<!--- FLEX PARENT HIDDEN --->


			<div class="flex-parent2">

				<div class="flex-child2">
					<img src="images/1.png" alt="call icon"><br>
					<h4>Request a quote</h4>
					<p><small>Click on the “Request Free Quote” button at the top.</small>
				</div>


				<div class="flex-child2">
					<img src="images/2.png" alt="quote icon"><br>
					<h4>Fill in the details</h4>
					<p><small>We need to know where to reach you: phone or email.</small>
				</div>


				<div class="flex-child2">
					<img src="images/3.png" alt="relax icon"><br>
					<h4>We'll Call You Back</h4>
					<p><small>We’ll call you back ASAP, usually in
less than 24 hours.</small>
				</div>

			</div>
		</div>

		<!-- END flex-parent -->

	</div>

	<!-- END HOW IT WORKS SECTION -->


	<!-- SERVICES SECTION -->

	<div class="container-fluid services">
		<div class="container">

			<div class="row">

				<div class="services-column">


					<h3>Services</h3>
					<hr class="hr-services">

					<div class="rss">
						<p class="service-top-text">We’re passionate about fixing home problems. Take a look at the services we provide:</p>
						<ul>
							<li>
								<p class="service-item" id="serv1">Weekly & Bi-Weekly Contracts</p>
							</li>
							<li>
								<p class="service-item" id="serv2">Trim and clean.</p>

							</li>
							<li>


								<p class="service-item" id="serv3">Re-planting.</p>

							</li>
							<li>

								<p class="service-item" id="serv4">Landscaping.</p>

							</li>
							<li>
								<p class="service-item" id="serv5">Hedges & trees.</p>

							</li>
						</ul>

						<a href="#callcontain" role="button" class="btn outline3">REQUEST QUOTE</a>

					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- END SERVICES SECTION -->


	<!-- FORM SECTION -->

	<div id="callcontain" class="container-fluid">
		<div class="container form">
			<h3 class="lead">Request a quote</h3>
			<hr class="hr-form">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">



					<form id="contact-form" role="form" method="post" action="index.php">

						<div class="controls">
							<div class="row">
								<div class="col-md-6">


									<!-- Form Name -->

									<div class="form-group">

										<input type="text" class="form-control" id="name" required="required" name="name" placeholder="NAME (REQUIRED)" value="<?php echo htmlspecialchars($_POST['name']); ?>">
										<?php echo "<p class='text-danger'>$errName</p>";?>
										<div class="help-block with-errors"></div>
									</div>

									<!-- END Form Name -->

								</div>


								<div class="col-md-6">


									<!-- Form Number -->

									<div class="form-group">

										<input type="phone" class="form-control" id="phone" required="required" name="phone" placeholder="PHONE NUMBER (REQUIRED)" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
										<?php echo "<p class='text-danger'>$errPhone</p>";?>
										<div class="help-block with-errors"></div>
									</div>

									<!-- END Form Number -->

								</div>

							</div>
							<!-- END ROW 1 FORM -->



							<div class="row">
								<div class="col-md-12">


									<!-- Form Message -->

									<div class="form-group">

										<textarea class="form-control" rows="10" placeholder="TELL US ABOUT YOUR LAWN CARE NEEDS" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
										<?php echo "<p class='text-danger'>$errMessage</p>";?>
										<div class="help-block with-errors"></div>
									</div>

									<!-- END Form Message -->


								</div>


								<!-- Form Submit -->

								<div class="col-md-12 text-center">
									<input id="submit" name="submit" type="submit" value="SEND" class="btn btn-send outline4">
								</div>

								<!-- END Form Submit -->


							</div>


							<!-- Form Required -->

							<div class="row">
								<div class="col-md-12 text-center">

								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<?php echo $result; ?>
									</div>
								</div>
							</div>


					</form>
					<!-- END FORM -->

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- END FORM SECTION -->


	<footer>

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 text-center"><p>
					Copyright Henderson Lawn and Snows 2017 | Made with <a href="http://www.vylocal.com">VY Local</a></p>
				</div>
			</div>
		</div>

	</footer>

</body>

<script>
	$(function() {
		$('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});
</script>

</html>
