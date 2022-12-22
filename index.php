<?php
// call here our file with MySQL connection
// so we can use it in index.php
require_once('config.php');
?>
<!doctype html>
<html lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js">
<head>
	<title>
		Login form
	</title>
	<script type='text/javascript' src='js/jquery-3.6.3.min.js'></script>
	<script type='text/javascript' src='js/script.js'></script>
	<link rel='stylesheet' href='css/style.css' />
</head>
<body>
	<div id="login_form">
		<!-- This is the div where AJAX will send the response -->
		<div class="alert_content"></div>
		<form id="login" action="" method="POST">
			<input type="text" name="nickname" placeholder="Nickname" />
			<input type="password" name="password" placeholder="Password" />
			<input type="submit" value="Enter" />
		</form>
	</div>
</body>
</html>
