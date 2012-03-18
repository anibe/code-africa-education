<?php
		error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 1);

session_start();
		require('config.php');
if (empty($_SESSION['user']) || $_SESSION['user'] != USERNAME) {
	header("Location:logon.php");	
}
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

	<script src="javascripts/jquery.min.js"></script>
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php require_once('includes/head.php'); ?>
</head>
<body>
		<div id="header">
			<?php require_once('includes/header.php'); ?>
		</div>
<!-- 		<div class="row">
			<div class="twelve columns">
				<h2>Simple Education System</h2>
			</div>
		</div> -->
<?php require_once('includes/sidebar.php'); ?>

			<section id="main" class="column">
		
		<article class="module width_full">
		  <header><h3>Ask a Question</h3></header>
		  
		  <div class="module_content">
				<div class="row">
				<div id="content" class="columns twelve">
				  
				  <form id="send-sms" name="questionForm" class="nice form-wrapper" action="twilio_sendsms.php" method="POST">
				    <div class="row">
				      <div class="columns two">
				      <label for="question">Question</label>
				      </div>
				      <div class="columns four">
					      <textarea name="question"></textarea>
				      </div>
				      <div class="columns two">
				        <label for="answer">Answer</label>
				      </div>
				      <div class="columns four">
					      <textarea name="answer"></textarea>
				      </div>
				    </div>
				    
				    <hr />
				    
				    <div class="row row-head">
				      <div class="columns four">
				        Name
				      </div>
				      <div class="columns three">
				        Phone Number
				      </div>
				      <div class="columns three">
				        Answer
				      </div>
				      <div class="columns two">
				        Correct?
				      </div>
				    </div>
				    <?php
				    for($row = 0; $row < count($DEFAULT_USERS); ++$row) {
				      ?>
				    <div class="row">
				      <div class="columns four">
				        <input class="input-text" name="name[]" type="text" value="<?php echo( $DEFAULT_USERS[$row]['name']  ); ?>"/>
				      </div>
				      <div class="columns three">
				        <input class="input-text" name="phone[]" type="text" value="<?php echo( $DEFAULT_USERS[$row]['phone']  ); ?>" />
				      </div>
				      <div class="columns three">
				        Answer
				      </div>
				      <div class="columns two">
				        Y/N
				      </div>
				    </div>
				    <?php
			      }
				    ?>
				    <div class="row">
				      <div class="columns twelve">
				        <input type="submit" name="submitQuestion" class="submit-btn"/>
				      </div>
				    </div>
				</form>
				
			</div>
			
			</div>
		</div>

	</article>
	
		
		<div class="clear"></div>

		<div class="spacer"></div>
	</section>


	</div>
			<div id="footer">
			<?php require_once('includes/footer.php'); ?>
		</div>
	<!-- container -->

	<!-- Included JS Files -->
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
