<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Intro to PHP</title>
</head>
<body>
	<h1>Hello, guest!</h1>
	<p>I'm Jeff, welcome to my page.</p>

	<?php 
		// echo 'Hello <br> World';
	?>

	<!-- Variables -->
	<?php 
		// $student = "jeff"; //string
		// $age = 27; //Integer
		// $pi = 3.14; //float
		// $single = true; //bolean
		// echo "The value of pi is $pi"; 
	?>

	<!-- Operators -->
	<?php
		// $num1 = 20;
		// $num2 = 5;

		// $sum = $num1 + $num2;
		// // $remainder = $num1 % $num2;
		// // echo ++$remainder;
		// // echo $remainder;
	?>

	<!-- Control Structures -->
	<!-- if-else -->

	<?php
		// $num1 = 2;
		// $num2 = 17;

		// if($num1 > $num2){
		// 	echo "$num1 is greater than $num2";
		// }else{
		// 	echo "$num2 is greater than $num1";
		// }

		// switch 

		$today = "Thursday";

		switch($today){
			case "Monday":
			echo "I Love Mondays";
			break;
			case "Tuesday" || "Thursday":
			echo "One more day";
			break;
			case "Sunday":
			echo "Pray for us sinners";
			break;
			default:
			echo "May pasok ba?";
			break;
		}
	?>

	<!-- <?php 
		$students = ["Potchie", "Ona", "Archie"];
		$grades = ["Math"=>98, "English"=>96, "Chemistry"=>91];

		// var_dump($grades["Math"]);
		// die();

		foreach ($grades as $key => $grade){
			echo "My $key grade is $grade.<br>";
		}

		// foreach($students as $student){
		// 	echo "Hello $student<br>";
		// }

	?> -->

</body>
</html>