<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Landing Page</title>

	<!-- Bootswatch -->
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/lux/bootstrap.css">

</head>
<body>
	<div class="d-flex justify-content-center align-items-center vh-100 flex-column">
		<?php 
			session_start();
		 ?>
		<h1>Hello <?php echo $_SESSION['fullName'] ?></h1>
		<h1>Your real Zodiac Sign is <?php echo $_SESSION['zodiac'] ?></h1>
	</div>
</body>
</html>