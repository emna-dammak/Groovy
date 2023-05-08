<?php
include("includes/config.php");
include_once("includes/isAuthentificated.php");
//session_destroy(); LOGOUT
$con=ConnexionBD::getInstance();
?>


<html>
<head>
	<title>Groovy</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css?v4">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap');
    </style>
   <link rel='stylesheet' type='text/css' href='assets/css/album.css'>
	<link rel="stylesheet" type='text/css' href="assets/css/style.css">


</head>

<body>

	<div id="mainContainer">

		<div id="topContainer">

			<?php include("includes/navBarContainer.php"); ?>

			<div id="mainViewContainer">

				<div id="mainContent">