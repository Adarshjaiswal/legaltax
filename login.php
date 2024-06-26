<?php
require_once('include/model.php');
require_once('include/include-design.php');
require_once('include/constant.php');
$error_msg = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {

	if (isset($_POST['Login'])) {
		$muninder_login = login();
		if ($muninder_login['status']) {
			session_start();
			$_SESSION['name'] = $muninder_login['name'];
			header('Location:addmeta.php');
		} else {
			$error_msg = "<span style='color:red;'>Invalid credentials !!</span>";
		}
	}
}
?>





<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
</head>
<style type="text/css">
	html,
	body {
		background: rgb(42, 33, 204);
		background: linear-gradient(90deg,
				rgba(42, 33, 204, 1) 0%,
				rgba(141, 0, 196, 1) 35%,
				rgba(0, 212, 255, 1) 100%);
		font-family: Roboto, sans-serif;
	}

	.main {
		width: 100%;
		margin: 0px auto;
		display: table;
		height: 100vh;
		text-align: left;
	}

	.wrapper {
		display: table-cell;
		height: 100%;
		vertical-align: middle;
		padding-top: 40px;
	}

	.content {
		overflow: hidden;
		max-width: 355px;
		width: 100%;
		background: rgba(255, 255, 255, 0.15);
		box-shadow: 0 8px 32px 0 rgb(0 0 135 / 37%);
		/* 
  
In Firefox Backdrop-filter is disabled by default. In order to see the blur effect, you should enable going to your browser settings

  https://caniuse.com/css-backdrop-filter 
  
  */

		backdrop-filter: blur(18px);
		-webkit-backdrop-filter: blur(18px);
		border: 1px solid rgba(255, 255, 255, 0.08);
		border-radius: 15px;
		padding: 20px;
		color: whitesmoke;
		animation: zoom 0.5s ease-in;
		text-align: center;
		margin: 0px auto;
		animation: 1s fadeInDown;
	}

	form label {
		text-align: left !important;
	}

	span.psw {
		float: right;
		margin-top: 20px;
		cursor: pointer;
	}

	span.create {
		float: left;
		margin-top: 20px;
		cursor: pointer;
	}

	input[type="email"],
	input[type="password"] {
		width: 80%;
		padding: 12px 20px;
		margin: 8px 0;
		display: block;
		box-sizing: border-box;
		border-radius: 15px;
		margin: 10px auto;
		background: rgba(255, 255, 255, 0.15);
		color: white;
		border: none;
	}

	::placeholder {
		/* Chrome, Firefox, Opera, Safari 10.1+ */
		color: rgb(255, 255, 255, 0.5);
		opacity: 1;
		/* Firefox */
	}

	:-ms-input-placeholder {
		/* Internet Explorer 10-11 */
		color: rgb(255, 255, 255, 0.5);
	}

	::-ms-input-placeholder {
		/* Microsoft Edge */
		color: rgb(255, 255, 255, 0.5);
	}

	.buttons {
		padding-left: 8px;
		padding-top: 3px;
		float: left;
		line-height: 0px;
	}

	.close {
		background: #ff5c5c;
		font-size: 9pt;
		width: 11px;
		height: 11px;
		border: 1px solid #e33e41;
		border-radius: 50%;
		display: inline-block;
	}

	.close:active {
		border: 1px solid rgb(0, 0, 0, 0.5);
	}

	.minimize {
		background: #ffbd4c;
		font-size: 9pt;
		line-height: 11px;
		margin-left: 4px;
		width: 11px;
		height: 11px;
		border: 1px solid #e09e3e;
		border-radius: 50%;
		display: inline-block;
	}

	.minimize:active {
		border: 1px solid rgb(0, 0, 0, 0.5);
	}

	.zoom {
		background: #00ca56;
		font-size: 9pt;
		line-height: 11px;
		margin-left: 6px;
		width: 11px;
		height: 11px;
		border: 1px solid #14ae46;
		border-radius: 50%;
		display: inline-block;
	}

	.zoom:active {
		border: 1px solid rgb(0, 0, 0, 0.5);
	}

	button {
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
		text-shadow: 1px 1px 0px #211d21;
		color: #ffffff;
		font-size: 13px;
		background: rgba(255, 255, 255, 0.15);
		padding: 8px 30px;
		text-decoration: none;
		border: none;
		transition: 0.5s ease-in;
		margin: 20px;
		cursor: pointer;
		font-weight: bold;
	}

	button:hover {
		background: rgba(250, 250, 250, 0.3);
	}

	/* Change styles for span on extra small screens */
	@media screen and (max-width: 300px) {
		span.psw {
			float: none;
		}
	}

	@keyframes fadeInDown {
		0% {
			opacity: 0;
			-webkit-transform: translate3d(0, -100%, 0);
			transform: translate3d(0, -100%, 0);
		}

		100% {
			opacity: 1;
			-webkit-transform: none;
			transform: none;
		}
	}
</style>

<body>
	<div class="container">
		<div class="row">
			<div class="main">
				<div class="wrapper">
					<div class="content">
						<div class="buttons">
							<div class="close">
							</div>
							<div class="minimize">
							</div>
							<div class="zoom">
							</div>
						</div>

						<h2>Login Form</h2>
						<form action="" method="POST">
							<p><?= $error_msg ?></p>

							<label for="uname"><b>Email</b></label>
							<input type="email" placeholder="Enter Email" name="email" required>

							<label for="psw"><b>Password</b></label>
							<input type="password" placeholder="Enter Password" name="password" required>

							<button type="submit" name="Login">Login</button>

						</form>
					</div>
				</div>
			</div>


		</div>
	</div>
</body>

</html>