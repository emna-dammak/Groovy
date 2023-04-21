<?php
include_once "autoload.php";

include_once ("includes/config.php");
include_once ("includes/handlers/login-handler.php");
include_once ("includes/handlers/register-handler.php");
?>

<?php
	function outputError($account,$Field,$Msg)
	{
		if($account->getError($Msg))
		{
?>
		<script>
			var myDiv = document.createElement("div");
			myDiv.textContent = "<?= $Msg ?>";
			myDiv.style.color="red";
			myDiv.style.fontSize="14px";
			var myPara = document.getElementById("<?=$Field?>");
			myPara.appendChild(myDiv);
		</script>
<?php 
		} 
	}
?>

<html>
<head>
	<title>Welcome to Groovy!</title>
</head>
<body>

	<div id="inputContainer">
		<form id="loginForm" action="Register.php" method="POST">
			<h2>Login to your account</h2>
			<p>
				<label for="loginUsername">Username</label>
				<input id="loginUsername" name="loginUsername" placeholder="Your username" type="text"  required>
			</p>
			<p id="loginField">
				<label for="loginPassword">Password</label>
				<input id="loginPassword" name="loginPassword" placeholder="Your Password" type="password" required>
			</p>
			<?php outputError($account,"loginField","Your username or password is invalid");?>
			<button type="submit" name="loginButton">LOG IN</button>
			
		</form>

		<form id="registerForm" action="Register.php" method="POST">
			<h2>Create your account</h2>
			<p id="usernameField">
				
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="Your username" required>
				<?php outputError($account,"usernameField","Your username must be between 5 and 25 characters");
				outputError($account,"usernameField","This username already exists");?>
			</p>
			<p id="firstNameField">
				<label for="firstName">First name</label>
				<input id="firstName" name="firstName" type="text" placeholder="Your first name" required>
				<?php outputError($account,"firstNameField","Your first name must be between 2 and 25 characters");?>
			</p>
			<p id="lasttNameField">
				<label for="lastName">Last name</label>
				<input id="lastName" name="lastName" placeholder="Your last name" type="text" required>
				<?php outputError($account,"lastNameField","Your last name must be between 2 and 25 characters");?>
			</p>
			<p id="emailField">
				<label for="email">Email</label>
				<input id="email" name="email" type="email" placeholder="Your email" required>
				<?php outputError($account,"emailField","Email is invalid");
				outputError($account,"emailField","This email already exists");?>
			</p>
			<p id="emailField2">
				<label for="email2">Confirm email</label>
				<input id="email2" name="email2" type="email" placeholder="Confirm email" required>
				<?php outputError($account,"emailField2","Your emails don't match");?>
			</p>
			<p id="passwordField">
				<label for="password">Password</label>
				<input id="password" name="password" type="password" placeholder="Your password" required>
				<?php outputError($account,"passwordField","Your password must be between 5 and 30 characters");
					  outputError($account,"passwordField","Your password can only contain numbers and letters");
				?>
			</p>
			<p id="passwordField2">
				<label for="password2">Confirm password</label>
				<input id="password2" name="password2" type="password" placeholder="Confirm password" required>
				<?php outputError($account,"passwordField2","Your passwords don't match");?>
			</p>

			<button type="submit" name="registerButton">LOG IN</button>
			
		</form>
	</div>	

</body>
</html>