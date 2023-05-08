<?php
include_once("config.php");
include_once("isAuthentificated.php");
//session_destroy(); LOGOUT
$con=ConnexionBD::getInstance();
?>

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
	echo "<script>userLoggedIn = '$userLoggedIn';</script>";
}
else {
	header("Location: register.php");
}
?>

<html>
<head>
	<title>Groovy</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v4">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap');
    </style>
   <link rel='stylesheet' type='text/css' href='assets/css/artist.css'>
   <link rel='stylesheet' type='text/css' href='assets/css/album.css'>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <script src="assets/js/script.js"></script>


</head>

<body>

	<div id="mainContainer">

		<div id="topContainer">

			<?php include("includes/navBarContainer.php"); ?>

			<div id="mainViewContainer">

				<div id="mainContent">
