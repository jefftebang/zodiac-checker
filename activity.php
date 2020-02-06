<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>1st Activity in PHP</title>
</head>
<body>
	<?php 
		$months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
		$seasons = ["Winter","Spring","Summer","Fall"];

		foreach ($months as $month){
			// switch($month){
			// 	case "January" || "February" || "March":
			// 	echo "The month is $month and the season is $seasons[0].<br>";
			// 	break;
			// 	case "April" || "May" || "June":
			// 	echo "The month is $month and the season is $seasons[1].<br>";
			// 	break;
			// 	case "July" || "August" || "September":
			// 	echo "The month is $month and the season is $seasons[2].<br>";
			// 	break;
			// 	case "October" || "November" || "December":
			// 	echo "The month is $month and the season is $seasons[3].<br>";
			// 	break;
			// 	default:
			// 	echo "Talaga ba?";
			// 	break;
			// }
			if($month === "January" || $month === "February" || $month === "March"){
				echo "The month is $month and the season is $seasons[0] <br>";
			}else if($month === "April" || $month === "May" || $month ==="June"){
				echo "The month is $month and the season is $seasons[1] <br>";
			}else if($month ==="July" || $month === "August" || $month ==="September"){
				echo "The month is $month and the season is $seasons[2] <br>";
			}else if($month ==="October" || $month === "November" || $month ==="December"){
				echo "The month is $month and the season is $seasons[3] <br>";
			}
		}
	 ?>
</body>
</html>