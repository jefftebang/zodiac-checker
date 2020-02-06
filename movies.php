<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Movies</title>

	<!-- Bootswatch -->
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/slate/bootstrap.css">
</head>
<body>
	<h1 class="text-center">Movies</h1>

	<?php 
		$movies = [
			["title"=>"Titanic", "year"=>1997, "Director"=>"James Cameron", "genre"=>"Disaster"],
			["title"=>"Catch Me If You Can", "year"=>2001, "Director"=>"Rancel Po", "genre"=>"Comedy"],
			["title"=>"American Pie", "year"=>2000, "Director"=>"Yhong Dee", "genre"=>"Horror"],
			["title"=>"Titanic", "year"=>1997, "Director"=>"James Cameron", "genre"=>"Disaster"],
			["title"=>"Catch Me If You Can", "year"=>2001, "Director"=>"Rancel Po", "genre"=>"Comedy"],
			["title"=>"American Pie", "year"=>2000, "Director"=>"Yhong Dee", "genre"=>"Horror"],
		]
	 ?>
	<div class="container">
		<div class="row justify-content-center">
		 	<?php 
		 		foreach ($movies as $movie) {
		 			// foreach ($movie as $movieKey => $movieDetail){
		 			// 	echo "<h1>$movieKey is $movieDetail. <br></h1>";
		 			// }
		 			// echo "Movie Title: " . $movie['title'] . "<br>";
		 			// echo "Movie Year: " . $movie['year'] . "<br>";
		 			// echo "Director: " . $movie['Director'] . "<br>";
		 			// echo "Movie Genre: " . $movie["genre"] . "<br><br>";
		 		
		 	 ?>
		 	<div class="card mx-2 my-3 w-25">
		 	 	<h1>Movie Title: <?php echo $movie["title"] ?></h1>
		 	 	<p>Director: <?php echo $movie["Director"] ?></p>
		 	 	<p>Year: <?php echo $movie["year"] ?></p>
		 	 	<p>Genre: <?php echo $movie["genre"] ?></p>
		 	</div>
		 	<?php
		 		} 
		 	  ?>
		</div>
	</div>
</body>
</html>