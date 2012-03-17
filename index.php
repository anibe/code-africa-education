<?php
require('config.php');
?>

<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title>Welcome to Code Africa Education</title>
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="stylesheets/foundation.css">
	<link rel="stylesheet" href="stylesheets/app.css">

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="stylesheets/ie.css">
	<![endif]-->


	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php require_once('includes/head.php'); ?>
</head>
<body>

	<!-- container -->
	<div class="container">
		<div id="header">
			<?php require_once('includes/header.php'); ?>
		</div>
		<div class="row">
			<div class="twelve columns">
				<h2>Simple Education System</h2>
			</div>
		</div>

		<div class="row">
				<div class="column twelve">
				<form name="questionForm" class="nice" action="twilio_sendsms.php" method="POST">
				<div class = "column four">
				Question:
				</div>
				<div class = "column eleven">
					<input type="text" name = "question" class="Large Input"/>
				</div>
				<br /><br />
				Name: <input class="input-text" name="name[]" type="text"/> Phone: <input name="phone[]" type="text"/> <br /> 
				Name: <input name="name[]" type="text"/> Phone: <input name="phone[]" type="text"/> <br />
				Name: <input name="name[]" type="text" /> Phone: <input name="phone[]" type="text"/> <br />
				Name: <input name="name[]" type="text"/> Phone: <input name="phone[]" type="text"/> <br />
				<br /><br />
				<input type="submit" name="submitQuestion" class="nice small radius blue button"/>
				</form>
				</div>
				</div>
		</div>

	</div>
			<div id="footer">
			<?php require_once('includes/footer.php'); ?>
		</div>
	<!-- container -->




	<!-- Included JS Files -->
	<script src="javascripts/jquery.min.js"></script>
	<script src="javascripts/modernizr.foundation.js"></script>
	<script src="javascripts/foundation.js"></script>
	<script src="javascripts/app.js"></script>
	
	<script>
	 var PUSHER_APP_KEY = "<?php echo(PUSHER_APP_KEY); ?>";
	</script>
	<script src="http://js.pusher.com/1.11/pusher.min.js"></script>
	<script src="javascripts/pusher.js"></script>	
	
	<!-- do not include in production -->
	<script src="javascripts/_pusher_tests.js"></script>

</body>
</html>
