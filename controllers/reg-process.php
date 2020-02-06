<?php 
	
	// var_dump($_POST);
	// echo "Successfly Submitted";
	
	$fullName = $_POST['fullName'];
	$birthMonth = $_POST['birthMonth'];
	$birthday = $_POST['birthday'];

	session_start();
	if(strlen($fullName)===0 || strlen($birthMonth)===0 || strlen($birthday)===0){
	
		$_SESSION['errorMsg'] = "Please complete the information above.";
		// to redirect to the same page where we came from
		header("Location: ". $_SERVER['HTTP_REFERER']);
	}else{
		$_SESSION['fullName'] = $fullName;
		$_SESSION['birthMonth'] = $birthMonth;
		$_SESSION['birthday'] = $birthday;

		if($birthMonth==3 && $birthday>=21 || $birthMonth==4 && $birthday<=20){
			$_SESSION['zodiac'] = 'Aries';
			}else if($birthMonth==4 && $birthday>=21 || $birthMonth==5 && $birthday<=21){
			$_SESSION['zodiac'] = 'Taurus';
			}else if($birthMonth==5 && $birthday>=22 || $birthMonth==6 && $birthday<=22){
			$_SESSION['zodiac'] = 'Gemini';
			}else if($birthMonth==6 && $birthday>=23 || $birthMonth==7 && $birthday<=23){
			$_SESSION['zodiac'] = 'Cancer';
			}else if($birthMonth==7 && $birthday>=24 || $birthMonth==8 && $birthday<=23){
			$_SESSION['zodiac'] = 'Leo';
			}else if($birthMonth==8 && $birthday>=24 || $birthMonth==9 && $birthday<=23){
			$_SESSION['zodiac'] = 'Virgo';
			}else if($birthMonth==9 && $birthday>=24 || $birthMonth==10 && $birthday<=23){
			$_SESSION['zodiac'] = 'Libra';
			}else if($birthMonth==10 && $birthday>=24 || $birthMonth==11 && $birthday<=22){
			$_SESSION['zodiac'] = 'Scorpio';
			}else if($birthMonth==11 && $birthday>=24 || $birthMonth==12 && $birthday<=21){
			$_SESSION['zodiac'] = 'Sagittarius';
			}else if($birthMonth==12 && $birthday>=22 || $birthMonth==1 && $birthday<=20){
			$_SESSION['zodiac'] = 'Capricorn';
			}else if($birthMonth==1 && $birthday>=21 || $birthMonth==2 && $birthday<=19){
			$_SESSION['zodiac'] = 'Aquarius';
			}else if($birthMonth==2 && $birthday>=20 || $birthMonth==3 && $birthday<=20){
			$_SESSION['zodiac'] = 'Pisces';
			}
		header("Location: ../views/landing.php");
	}
	
	// var_dump($_SESSION);
	// die();

	// echo "Hello $firstName $lastName!";

 ?>