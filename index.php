<!doctype html>
<html class="no-js" lang="en" dir="ltr">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> 
			Augustana Student Academic Conference Website
		</title>
		<link rel="stylesheet" href="resources/css/foundation.css">
    	<link rel="stylesheet" href="resources/css/app.css">
	</head>

	<body>
		<div class="row">
			<div class="header">
				<h1>
					Augustana Student Academic Conference
				</h1>
			</div>
		</div>

		<div class ="row">
			<div id="loginField" class="callout secondary">
				<h3>
					Login
				</h3>
				<form id="loginForm" action="userpage.php" method="post">
					<input name="name" type="text" placeholder="Alex" required>
					<input name="lName" type = "text" placeholder="Ho" required>
					<input value="Submit" type="submit">
					<ul>
						<a href="register.php">Don't have an account? Register Here</a>
					</ul>
				</form>
			</div>
		</div>

		<div class="row">
			<div class="footer">
				Designed January 7th, 2018<br>
  				by Sheldon Grundberg, Alex Ho, and Connor Maschke.
			</div>
		</div>

		<script src="js/vendor/foundation.js"></script>
    	<script src="js/app.js"></script>

	</body>


</html>