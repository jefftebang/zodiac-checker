<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Zodiac Checker</title>

	<!-- Bootswatch -->
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/lux/bootstrap.css">

</head>
<body>
	<div class="d-flex justify-content-center align-items-center flex-column vh-100 bg-dark">
		<h1 class="text-warning">Welcome to Zodiac Checker</h1>
		<div class="col-g-4 w-25">
			<form class="bg-light p-4" action="controllers/reg-process.php" method="POST">
				<div class="form-group">
					<label for="fullName">Full Name</label>
					<input type="text" name="fullName" class="form-control">
				</div>
				<div class="form-group">
					<label for="birthMonth">Birth Month</label>
					<input type="number" name="birthMonth" class="form-control">
				</div>
				<div class="form-group">
					<label for="birthday">Birthday</label>
					<input type="number" name="birthday" class="form-control">
				</div>
				<div class="text-center">
					<button class="btn btn-success">Check</button>
				</div>
				<?php 
					session_start();
					session_destroy();
					if (isset($_SESSION['errorMsg'])) {		
				?>
					
				 <p><?php echo $_SESSION['errorMsg'] ?></p>

				<?php 
					}
				?>
			</form>
		</div>
	</div>

</body>
</html>