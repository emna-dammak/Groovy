<?php
include("includes/config.php");
//include_once("includes/isAuthentificated.php");
//session_destroy(); LOGOUT
$con=ConnexionBD::getInstance();
?>


<html>
<head>
	<title>Groovy</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v4">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap');
    </style>
   <link rel='stylesheet' type='text/css' href='assets/css/album.css'>


</head>

<body>

	<div id="mainContainer">

		<div id="topContainer">

			<?php include("includes/navBarContainer.php"); ?>

			<div id="mainViewContainer">

				<div id="mainContent">